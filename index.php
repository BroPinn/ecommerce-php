<!DOCTYPE html>
<html lang="en">
<?php include("./basic.php");?>
<body>
    <?php include("./includes/header.php");?>
    <!-- main content -->
    <div class="container mt-2 " style="height:auto;" id="MainContain">
        <div class="row h-100">
            <div class="col-12 col-lg-6 ">
                <div class="row h-100">
                    <div class="col-12 p-0 p-1 ">
                        <div class="container-fluid h-100 p-0">
                            <!-- carousel -->
                            <div id="carouselExampleIndicators" class="carousel slide w-100 h-100"
                                data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner w-100 h-100">
                                    <div class="carousel-item active w-100 h-100" data-bs-interval="500">
                                        <img src="./assets/Image/lap-1.jpg" class=" w-100 h-100" alt="...">
                                    </div>
                                    <div class="carousel-item w-100 h-100" data-bs-interval="500">
                                        <img src="./assets/Image/lap-2.png" class=" w-100 h-100" alt="...">
                                    </div>
                                    <div class="carousel-item w-100 h-100" data-bs-interval="500">
                                        <img src="./assets/Image/lap-3.png" class=" w-100 h-100" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="row h-50" id="col-1">
                    <div class="col-12 p-0 p-1">
                        <div class="container-fluid h-100 p-0 ">
                            <img src="./assets/Image/lap-7.jpg" alt="" class="w-100 h-100">
                        </div>
                    </div>
                </div>
                <div class="row h-50">
                    <div class="col-12 p-0 p-1" id="col-2">
                        <div class="container-fluid  h-100 p-0">
                            <img src="./assets/Image/gcard1.png" alt="" class="w-100 h-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="row h-50 ">
                    <div class="col-12 p-0 p-1" id="col-3">
                        <div class="container-fluid h-100 p-0">
                            <img src="./assets/Image/lap-8.png" alt="" class="w-100 h-100">
                        </div>
                    </div>
                </div>
                <div class="row h-50">
                    <div class="col-12 p-0 p-1" id="col-4">
                        <div class="container-fluid h-100 p-0">
                            <img src="./assets/Image/lap-9.png" alt="" class="w-100 h-100">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <hr width="100%" style="color:b;" size="5px">

    <div style="height: 50px; background-color: gainsboro; padding-top: 10px;">
        <h5 class="fs-5">New Products</h5>
    </div>
    <div class="container mt-2" style="width: auto; height: auto;" id="row">
        <div class="row ">

            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="card product-card" data-product-id="laptop_001">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/lap-4.jpg" alt="Lenovo Laptop" class="card-img-top">
                        </div>
                        <div class="product-info">
                            <h5 class="card-title text-center">Lenovo</h5>
                            <p class="card-text text-center">
                                <small class="text-muted">Gaming Laptop</small>
                            </p>
                            <p class="price text-center">$999</p>
                            <button class="btn btn-primary add-to-cart">
                                <span class="material-symbols-outlined align-middle me-1" style="font-size: 16px;">shopping_cart</span>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="card product-card" data-product-id="laptop_002">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/lap-14.jpg" alt="Acer Laptop" class="card-img-top">
                        </div>
                        <div class="product-info">
                            <h5 class="card-title text-center">Acer</h5>
                            <p class="card-text text-center">
                                <small class="text-muted">Gaming Laptop</small>
                            </p>
                            <p class="price text-center">$899</p>
                            <button class="btn btn-primary add-to-cart">
                                <span class="material-symbols-outlined align-middle me-1" style="font-size: 16px;">shopping_cart</span>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>     
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="card product-card" data-product-id="laptop_003">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/lap-10.jpg" alt="Asus Laptop" class="card-img-top">
                        </div>
                        <div class="product-info">
                            <h5 class="card-title text-center">Asus</h5>
                            <p class="card-text text-center">
                                <small class="text-muted">Gaming Laptop</small>
                            </p>
                            <p class="price text-center">$899</p>
                            <button class="btn btn-primary add-to-cart">
                                <span class="material-symbols-outlined align-middle me-1" style="font-size: 16px;">shopping_cart</span>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="card product-card" data-product-id="laptop_004">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/lap-11.jpg" alt="Asus Laptop" class="card-img-top">
                        </div>
                        <div class="product-info">
                            <h5 class="card-title text-center">Asus</h5>
                            <p class="card-text text-center">
                                <small class="text-muted">Gaming Laptop</small>
                            </p>
                            <p class="price text-center">$899</p>
                            <button class="btn btn-primary add-to-cart">
                                <span class="material-symbols-outlined align-middle me-1" style="font-size: 16px;">shopping_cart</span>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="card product-card" data-product-id="laptop_005">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/lap-12.jpg" alt="Msi Laptop" class="card-img-top">
                        </div>
                        <div class="product-info">
                            <h5 class="card-title text-center">Msi</h5>
                            <p class="card-text text-center">
                                <small class="text-muted">Gaming Laptop</small>
                            </p>
                            <p class="price text-center">$999</p>
                            <button class="btn btn-primary add-to-cart">
                                <span class="material-symbols-outlined align-middle me-1" style="font-size: 16px;">shopping_cart</span>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="card product-card" data-product-id="laptop_006">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/lap-13.jpg" alt="Lenovo Laptop" class="card-img-top">
                        </div>
                        <div class="product-info">
                            <h5 class="card-title text-center">Lenovo</h5>
                            <p class="card-text text-center">
                                <small class="text-muted">Gaming Laptop</small>
                            </p>
                            <p class="price text-center">$999</p>
                            <button class="btn btn-primary add-to-cart">
                                <span class="material-symbols-outlined align-middle me-1" style="font-size: 16px;">shopping_cart</span>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- end new products content -->
    <!-- laptop main content -->
    <hr width="100%" style="color:b;" size="5px">

    <div style="height: 50px; background-color: gainsboro; padding-top: 10px;">
        <h5 class="fs-5">Laptop</h5>
    </div>
    <div class="container mt-2" style="width: auto; height: auto;" id="row">
        <div class="row ">
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="card product-card" data-product-id="laptop_007">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/lap-4.jpg" alt="Lenovo Laptop" class="card-img-top">
                        </div>
                        <div class="product-info">
                            <h5 class="card-title text-center">Lenovo</h5>
                            <p class="card-text text-center">
                                <small class="text-muted">Gaming Laptop</small>
                            </p>
                            <p class="price text-center">$999</p>
                            <button class="btn btn-primary add-to-cart">
                                <span class="material-symbols-outlined align-middle me-1" style="font-size: 16px;">shopping_cart</span>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="card product-card" data-product-id="laptop_008">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/lap-14.jpg" alt="Acer Laptop" class="card-img-top">
                        </div>
                        <div class="product-info">
                            <h5 class="card-title text-center">Acer</h5>
                            <p class="card-text text-center">
                                <small class="text-muted">Gaming Laptop</small>
                            </p>
                            <p class="price text-center">$899</p>
                            <button class="btn btn-primary add-to-cart">
                                <span class="material-symbols-outlined align-middle me-1" style="font-size: 16px;">shopping_cart</span>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="card product-card" data-product-id="laptop_009">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/lap-10.jpg" alt="Asus Laptop" class="card-img-top">
                        </div>
                        <div class="product-info">
                            <h5 class="card-title text-center">Asus</h5>
                            <p class="card-text text-center">
                                <small class="text-muted">Gaming Laptop</small>
                            </p>
                            <p class="price text-center">$799</p>
                            <button class="btn btn-primary add-to-cart">
                                <span class="material-symbols-outlined align-middle me-1" style="font-size: 16px;">shopping_cart</span>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="card product-card" data-product-id="laptop_010">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/l3.jpg" alt="Dell Laptop" class="card-img-top">
                        </div>
                        <div class="product-info">
                            <h5 class="card-title text-center">Dell</h5>
                            <p class="card-text text-center">
                                <small class="text-muted">Gaming Laptop</small>
                            </p>
                            <p class="price text-center">$899</p>
                            <button class="btn btn-primary add-to-cart">
                                <span class="material-symbols-outlined align-middle me-1" style="font-size: 16px;">shopping_cart</span>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="card product-card" data-product-id="laptop_011">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/l2.jpg" alt="Dell Laptop" class="card-img-top">
                        </div>
                        <div class="product-info">
                            <h5 class="card-title text-center">Dell</h5>
                            <p class="card-text text-center">
                                <small class="text-muted">Business Laptop</small>
                            </p>
                            <p class="price text-center">$799</p>
                            <button class="btn btn-primary add-to-cart">
                                <span class="material-symbols-outlined align-middle me-1" style="font-size: 16px;">shopping_cart</span>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="card product-card" data-product-id="laptop_012">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/l1.jpg" alt="Mac Laptop" class="card-img-top">
                        </div>
                        <div class="product-info">
                            <h5 class="card-title text-center">Mac</h5>
                            <p class="card-text text-center">
                                <small class="text-muted">Professional Laptop</small>
                            </p>
                            <p class="price text-center">$1,299</p>
                            <button class="btn btn-primary add-to-cart">
                                <span class="material-symbols-outlined align-middle me-1" style="font-size: 16px;">shopping_cart</span>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <?php include('./includes/footer.php'); ?>