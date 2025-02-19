// Initialize the navigation object
const navigation = {
    home: () => window.location.href = 'index.php',
    checkout: () => window.location.href = 'views/checkout.php',
};

// Initialize the cart functionality
const initCart = () => {
    const cartItems = new Map();
    const counterDisplay = document.getElementById('shoptxt');

    const updateCartDisplay = () => {
        const totalItems = Array.from(cartItems.values())
            .reduce((sum, item) => sum + (item.quantity || 0), 0) || 0;

        if (counterDisplay) {
            counterDisplay.textContent = totalItems.toString();
        }

        // Save to localStorage
        localStorage.setItem('cartItems', JSON.stringify(Array.from(cartItems.entries())));
        localStorage.setItem('cartTotal', totalItems.toString());

        // Update checkout page if we're on it
        if (window.location.pathname.includes('views/checkout.php')) {
            updateCheckoutPage();
        }
    };

    // Load cart data from localStorage
    const loadCart = () => {
        try {
            const savedItems = localStorage.getItem('cartItems');
            if (savedItems) {
                cartItems.clear();
                JSON.parse(savedItems).forEach(([key, value]) => {
                    cartItems.set(key, {
                        title: value.title || '',
                        quantity: parseInt(value.quantity) || 0,
                        price: parseFloat(value.price) || 0,
                        description: value.description || '',
                        image: value.image || './assets/Image/placeholder.png',
                        productId: value.productId || ''
                    });
                });
            }
            updateCartDisplay();
        } catch (error) {
            console.error('Error loading cart:', error);
            localStorage.removeItem('cartItems');
            localStorage.removeItem('cartTotal');
            updateCartDisplay();
        }
    };
    // Add item to cart or increase quantity
    const addToCart = (title, price, description, image, productId) => {
        // Ensure productId exists and is unique
        productId = productId || `product_${Math.random().toString(36).substr(2, 9)}`;

        // Find existing item with same productId
        const existingItemKey = Array.from(cartItems.keys()).find(key =>
            key === productId);

        if (existingItemKey) {
            // Update existing item
            const existingItem = cartItems.get(existingItemKey);
            existingItem.quantity += 1;
            cartItems.set(existingItemKey, existingItem);
        } else {
            // Add new item
            cartItems.set(productId, {
                title: title,
                quantity: 1,
                price: price,
                description: description,
                image: image || './assets/Image/placeholder.png',
                productId: productId
            });
        }

        updateCartDisplay();
    };

    // Add click handler for add to cart buttons
    document.body.addEventListener('click', (event) => {
        const addButton = event.target.closest('.add-to-cart');
        if (addButton) {
            const card = addButton.closest('.card');
            if (card) {
                const title = card.querySelector('.card-title')?.textContent?.trim() || 'Product';
                const priceText = card.querySelector('.price')?.textContent?.trim() || '0';
                const price = parseFloat(priceText.replace(/[^0-9.]/g, '')) || 0;
                const description = card.querySelector('.card-text')?.textContent?.trim() || '';

                // Multiple ways to find the image
                const image =
                    card.querySelector('.product-image img')?.src ||
                    card.querySelector('.card-img-top')?.src ||
                    card.querySelector('img')?.src ||
                    '/Image/placeholder.jpg';

                const productId = card.dataset.productId ||
                    card.querySelector('[data-product-id]')?.dataset.productId ||
                    `product_${Math.random().toString(36).substr(2, 9)}`;

                console.log('Adding to cart:', {
                    title,
                    price,
                    description,
                    image,
                    productId
                });

                addToCart(title, price, description, image, productId);
                alert(`Added ${title} to cart! (Quantity: ${cartItems.get(productId).quantity})\nPrice: $${price.toFixed(2)}`);
            }
        }
    });

    // Remove item from cart
    const removeFromCart = (title, row) => {
        if (confirm(`Remove ${title} from cart?`)) {
            row.style.opacity = '0';
            setTimeout(() => {
                cartItems.delete(title);
                updateCartDisplay();
            }, 300); // Wait for fade out animation
        }
    };

    // Update item quantity
    const updateItemQuantity = (key, action, row) => {
        const item = Array.from(cartItems.values()).find(item =>
            item.productId === key || key.startsWith('product_'));

        if (!item) return;

        if (action === 'increase') {
            item.quantity += 1;
            cartItems.set(key, item);
            updateCartDisplay();
        } else if (action === 'decrease' && item.quantity > 1) {
            item.quantity -= 1;
            cartItems.set(key, item);
            updateCartDisplay();
        } else if (action === 'remove') {
            if (confirm(`Remove ${item.title} from cart?`)) {
                row.style.opacity = '0';
                setTimeout(() => {
                    cartItems.delete(key);
                    updateCartDisplay();
                }, 300); // Wait for fade out animation
            }
        }
    };

    // Initialize the checkout page
    const updateCheckoutPage = () => {
        const cartTable = document.getElementById('cartItems');
        const totalElement = document.getElementById('cartTotal');
        const finalTotalElement = document.getElementById('finalTotal');

        if (!cartTable || !totalElement || !finalTotalElement) return;

        // Add CSS for smooth removal animation
        const style = document.createElement('style');
        style.textContent = `
            #cartItems tr {
                transition: all 0.3s ease;
            }
        `;
        document.head.appendChild(style);

        cartTable.innerHTML = '';
        let total = 0;

        // Remove old event listeners
        const oldTable = cartTable.cloneNode(true);
        cartTable.parentNode.replaceChild(oldTable, cartTable);

        if (cartItems.size === 0) {
            const emptyRow = document.createElement('tr');
            emptyRow.innerHTML = `
                <td colspan="6" class="text-center py-4">
                    <h5>Your cart is empty</h5>
                    <a href="../index.php" class="btn btn-primary mt-2">Continue Shopping</a>
                </td>
            `;
            oldTable.appendChild(emptyRow);
            totalElement.textContent = '$0.00';
            finalTotalElement.textContent = '$0.00';
            return;
        }

        cartItems.forEach((item, key) => {
            const itemTotal = item.price * item.quantity;
            total += itemTotal;

            const row = document.createElement('tr');
            row.innerHTML = `
                <td>
                    <img src="${item.image || '/Image/placeholder.jpg'}" alt="${item.title}" class="img-thumbnail" style="width: 80px; height: 80px; object-fit: cover;">
                </td>
                <td>
                    <h6 class="mb-0">${item.title}</h6>
                    <small class="text-muted">${item.description}</small>
                </td>
                <td>$${item.price.toFixed(2)}</td>
                <td>
                    <div class="input-group" style="width: 120px;">
                        <button class="btn btn-outline-secondary btn-sm decrease-qty" data-product="${key}">-</button>
                        <input type="text" class="form-control text-center qty-input" value="${item.quantity}" readonly>
                        <button class="btn btn-outline-secondary btn-sm increase-qty" data-product="${key}">+</button>
                    </div>
                </td>
                <td>$${itemTotal.toFixed(2)}</td>
                <td>
                    <button class="btn btn-danger btn-sm remove-item" data-product="${key}">
                        <i class="fas fa-trash"></i> Remove
                    </button>
                </td>
            `;

            // Add event listeners for quantity controls
            const decreaseBtn = row.querySelector('.decrease-qty');
            const increaseBtn = row.querySelector('.increase-qty');
            const removeBtn = row.querySelector('.remove-item');

            decreaseBtn.addEventListener('click', () => updateItemQuantity(key, 'decrease', row));
            increaseBtn.addEventListener('click', () => updateItemQuantity(key, 'increase', row));
            removeBtn.addEventListener('click', () => updateItemQuantity(key, 'remove', row));

            oldTable.appendChild(row);
        });

        totalElement.textContent = `$${total.toFixed(2)}`;
        finalTotalElement.textContent = `$${total.toFixed(2)}`;
    };

    // Load cart data on initialization
    loadCart();

    // Initialize checkout page if we're on it
    if (window.location.pathname.includes('views/checkout.php')) {
        updateCheckoutPage();
    }
};

// Initialize the search functionality
const initSearch = () => {
    const searchInput = document.getElementById('search');
    const productContainers = document.querySelectorAll('.product-card');

    // Create search dropdown container
    const createSearchDropdown = () => {
        let dropdown = document.getElementById('search-dropdown');
        if (!dropdown) {
            dropdown = document.createElement('div');
            dropdown.id = 'search-dropdown';
            dropdown.classList.add('position-absolute', 'bg-white', 'border', 'rounded', 'shadow-lg');
            dropdown.style.cssText = `
                display: none;
                max-height: 400px;
                overflow-y: auto;
                width: 100%;
                z-index: 1000;
                top: 100%;
                left: 0;
            `;

            // Position relative to search input
            const searchContainer = searchInput.closest('.input-group');
            if (searchContainer) {
                searchContainer.style.position = 'relative';
                searchContainer.appendChild(dropdown);
            }
        }
        return dropdown;
    };
    const debounce = (func, delay) => {
        let timeoutId;
        return (...args) => {
            clearTimeout(timeoutId);
            timeoutId = setTimeout(() => func.apply(null, args), delay);
        };
    };
    const performSearch = (query) => {
        const dropdown = createSearchDropdown();
        dropdown.innerHTML = ''; 
        query = query.trim().toLowerCase();
        if (!query) {
            dropdown.style.display = 'none';
            return;
        }
        let matchingProducts = [];
        productContainers.forEach(card => {
            const title = card.querySelector('.card-title')?.textContent.toLowerCase() || '';
            const description = card.querySelector('.card-text')?.textContent.toLowerCase() || '';
            const price = card.querySelector('.price')?.textContent.toLowerCase() || '';
            const matchesSearch =
                title.includes(query) ||
                description.includes(query) ||
                price.includes(query);

            if (matchesSearch) {
                matchingProducts.push({
                    title: title,
                    description: card.querySelector('.card-text')?.textContent || '',
                    price: price,
                    image: card.querySelector('img')?.src || './assets/Image/placeholder.png',
                    productId: card.dataset.productId || ''
                });
            }
        });
        if (matchingProducts.length > 0) {
            matchingProducts.forEach(product => {
                const productItem = document.createElement('div');
                productItem.classList.add('d-flex', 'align-items-center', 'p-2', 'border-bottom', 'search-dropdown-item');
                productItem.style.cursor = 'pointer';
                productItem.innerHTML = `
                    <img src="${product.image}" alt="${product.title}" style="width: 50px; height: 50px; object-fit: cover; margin-right: 10px;">
                    <div>
                        <h6 class="mb-1">${product.title}</h6>
                        <p class="mb-0 text-muted">${product.description}</p>
                        <small class="text-primary">${product.price}</small>
                    </div>
                `;
                productItem.addEventListener('click', () => {
                    const card = Array.from(productContainers).find(
                        card => card.dataset.productId === product.productId
                    );

                    if (card) {
                        const addToCartButton = card.querySelector('.add-to-cart');
                        if (addToCartButton) {
                            addToCartButton.click();
                        }
                    }
                    dropdown.style.display = 'none';
                });

                dropdown.appendChild(productItem);
            });
            dropdown.style.display = 'block';
        } else {
            dropdown.style.display = 'none';
        }
    };
    if (searchInput) {
        document.addEventListener('click', (event) => {
            const dropdown = document.getElementById('search-dropdown');
            if (dropdown && !dropdown.contains(event.target) && event.target !== searchInput) {
                dropdown.style.display = 'none';
            }
        });
        searchInput.addEventListener('input', debounce((e) => {
            performSearch(e.target.value);
        }, 300));
        const searchButton = document.querySelector('button[onclick="SearchItem()"]');
        if (searchButton) {
            searchButton.addEventListener('click', () => {
                performSearch(searchInput.value);
            });
        }
    }
};
window.SearchItem = () => {
    const searchInput = document.getElementById('search');
    if (searchInput) {
        const query = searchInput.value.trim();
        console.log(`Searching for: ${query}`);
        const event = new Event('input', { bubbles: true });
        searchInput.dispatchEvent(event);
    }
};
document.addEventListener('DOMContentLoaded', () => {
    initCart();
    initSearch();
});
