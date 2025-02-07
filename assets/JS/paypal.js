// Initialize PayPal buttons
function initPayPalButton() {
    if (!paypal) {
        console.error('PayPal SDK not loaded');
        return;
    }

    paypal.Buttons({
        // Validate before showing PayPal buttons
        validate: function(actions) {
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            const total = Array.from(cartItems).reduce((sum, [_, item]) => sum + (item.price * item.quantity), 0);
            
            if (total <= 0) {
                actions.disable();
                document.querySelector('#paypal-button-container').innerHTML = '<p class="text-danger">Please add items to cart before checkout</p>';
            }
        },

        // Check if cart is empty before creating order
        onClick: function() {
            // Check if cart is empty
            const cartItems = JSON.parse(localStorage.getItem('cartItems') || '[]');
            if (!cartItems.length) {
                Swal.fire({
                    title: 'Empty Cart',
                    text: 'Your cart is empty. Please add items before checkout.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Go Shopping',
                    cancelButtonText: 'Stay Here'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '../index.php';
                    }
                });
                return false;
            }

            // Validate billing information
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const address = document.getElementById('address').value.trim();
            const zip = document.getElementById('zip').value.trim();

            const missingFields = [];
            if (!name) missingFields.push('Full Name');
            if (!email) missingFields.push('Email');
            if (!phone) missingFields.push('Phone');
            if (!address) missingFields.push('Address');
            if (!zip) missingFields.push('Zip Code');

            if (missingFields.length > 0) {
                Swal.fire({
                    title: 'Missing Information',
                    html: `Please fill in the following required fields:<br><br>
                          <ul style="text-align: left; display: inline-block;">
                            ${missingFields.map(field => `<li>${field}</li>`).join('')}
                          </ul>`,
                    icon: 'warning',
                    confirmButtonText: 'OK'
                });
                return false;
            }

            // Validate email format
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                Swal.fire({
                    title: 'Invalid Email',
                    text: 'Please enter a valid email address.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                });
                return false;
            }

            // Store billing info in localStorage for order processing
            const billingInfo = {
                name,
                email,
                phone,
                address,
                zip
            };
            localStorage.setItem('billingInfo', JSON.stringify(billingInfo));
            return true;
        },

        // Create order when PayPal button is clicked
        createOrder: function(data, actions) {
            try {
                const cartItems = JSON.parse(localStorage.getItem('cartItems') || '[]');
                const total = cartItems.reduce((sum, [_, item]) => {
                    return sum + (item.price * item.quantity);
                }, 0);

                if (total <= 0) {
                    throw new Error('Cart is empty');
                }

                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            currency_code: 'USD',
                            value: total.toFixed(2),
                            breakdown: {
                                item_total: {
                                    currency_code: 'USD',
                                    value: total.toFixed(2)
                                }
                            }
                        },
                        items: Array.from(cartItems).map(([name, item]) => ({
                            name: name,
                            description: item.description || 'No description',
                            unit_amount: {
                                currency_code: 'USD',
                                value: item.price.toFixed(2)
                            },
                            quantity: item.quantity.toString()
                        }))
                    }]
                });
            } catch (error) {
                console.error('Error creating PayPal order:', error);
                alert('Error creating order. Please try again.');
                return null;
            }
        },

        // Handle successful payment
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                try {
                    // Get billing info
                    const billingInfo = JSON.parse(localStorage.getItem('billingInfo') || '{}');
                    
                    // Clear cart and billing info after successful payment
                    localStorage.removeItem('cartTotal');
                    localStorage.removeItem('cartItems');
                    localStorage.removeItem('billingInfo');
                    
                    // Show success message with billing name
                    Swal.fire({
                        title: 'Payment Successful!',
                        html: `Thank you for your purchase, ${billingInfo.name}!<br>
                              We'll send the confirmation email to ${billingInfo.email}`,
                        icon: 'success',
                        confirmButtonText: 'Continue Shopping'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '../index.php';
                        }
                    });
                } catch (error) {
                    console.error('Error processing successful payment:', error);
                    alert('Payment successful but error occurred during processing. Please contact support.');
                }
            });
        },

        // Handle payment errors
        onError: function(err) {
            Swal.fire({
                title: 'Payment Error',
                text: 'There was an error processing your payment. Please try again.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }
    }).render('#paypal-button-container');
}

// Initialize when the document is ready
document.addEventListener('DOMContentLoaded', function() {
    const paypalContainer = document.getElementById('paypal-button-container');
    if (paypalContainer) {
        try {
            initPayPalButton();
        } catch (error) {
            console.error('Error initializing PayPal:', error);
            paypalContainer.innerHTML = '<div class="alert alert-danger">Error loading PayPal. Please refresh the page.</div>';
        }
    }
});
