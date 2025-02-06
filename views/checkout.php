<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- google icon -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- css -->
    <link rel="stylesheet" href="../assets/CSS/index.css">
    <link rel="stylesheet" href="../assets/CSS/checkout.css">
    <link rel="stylesheet" href="../assets/CSS/responesive.css">

    <!-- boxicon -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- link js -->
    <script src="../assets/JS/main.js" defer></script>

    <title>Checkout</title>
</head>

<body>

    <!-- second nav bar -->
    <div class="container-fluid bg-black" id="nav2" style="height: auto;">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-4 d-flex justify-content-center align-items-center"
                onclick="navigation.home()">
                <img src="../assets/Image/logo.png" alt="" id="pic2">
                <p class="ms-3 text-dark fs-3 text-white" id="logo-name">OneStore</p>
            </div>
        </div>
    </div>

    <!-- Checkout Content -->

    <div class="container my-4">
        <div class="row">
            <!-- Left Column - Billing and Cart -->
            <div class="col-lg-8 mb-4">
                <!-- Billing Information -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h4 class="mb-0">Billing Information</h4>
                    </div>
                    <div class="card-body">
                        <form id="billingForm" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" id="phone" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="zip" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="zip" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" rows="2" required></textarea>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Shopping Cart Section -->
                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h4 class="mb-0">Shopping Cart</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="cartItems">
                                    <!-- Cart items will be dynamically added here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Order Summary -->
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h4 class="mb-0">Order Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <span>Subtotal</span>
                            <span id="cartTotal">$0.00</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Shipping</span>
                            <span class="text-success">Free</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-3">
                            <strong>Total</strong>
                            <strong id="finalTotal">$0.00</strong>
                        </div>
                        <!-- PayPal Button Container -->
                        <div id="paypal-button-container" class="mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="container-fluid mt-5" id="footer">
        <div class="card mx-5" id="card">
            <div class="row mb-4">
                <div class="col-12 col-md-4 text-center text-white">
                    <h5 class="mb-3">Contact Us</h5>
                    <p class="mb-2 fs-5">Email: ihatethisproject@computershop.com</p>
                    <p class="fs-5">Phone: (123) 456-7890</p>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <h5 class="mb-3 text-white">Follow Us</h5>
                    <a href="#" class="text-white me-2 "><i class="bi bi-facebook fs-1 "></i></a>
                    <a href="#" class="text-white me-2 "><i class="bi bi-twitter fs-1 "></i></a>
                    <a href="#" class="text-white "><i class="bi bi-instagram fs-1"></i></a>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <h5 class="mb-3 text-white">Newsletter</h5>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email">
                        <button class="btn btn-primary">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add PayPal SDK before closing body tag -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script
        src="https://www.paypal.com/sdk/js?client-id=AVWfc9_4U_NIBAWBa6nDkHyt2mzokJv4na1uXS4nLy_YN_gfLRJLS3ID3YFqKGdla2DpAMSUPGM9YH5u&currency=USD"></script>
    <script src="../assets/JS/paypal.js"></script>
</body>

</html>