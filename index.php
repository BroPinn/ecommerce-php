<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- google icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- css -->
    <link rel="stylesheet" href="./assets/CSS/index.css">
    <link rel="stylesheet" href="./assets/CSS/responesive.css">
    <link rel="stylesheet" href="./assets/CSS/products.css">
    <!-- boxicon -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- link js -->
    <script src="./assets/JS/main.js" defer></script>
    <title>ComputerShop</title>
</head>
<body>
    <!-- second nav bar -->
    <div class="container-fluid bg-black" id="nav2" style="height: auto;">
        <div class="row ">
            <div class="col-12 col-md-6 col-xl-4 d-flex justify-content-center align-items-center "
                onclick="navigation.home()">
                <img src="./assets/Image/pic3.avif" alt="" id="pic2">
                <p class="ms-3 text-dark fs-3 text-white" id="logo-name">ComputerShop</p>
            </div>
            <div class="col-12 col-md-6 col-xl-4 d-flex justify-content-center align-items-center">
                <div class="input-group mb-3 ">
                    <input type="text" class="form-control" placeholder="Search" id="search" onclick="SearchItem()">
                    <button class="btn btn-warning" onclick="SearchItem()">SEARCH</button>
                </div>
            </div>
            <div class="col-12 col-xl-4 d-flex justify-content-center align-items-center ">
                <box-icon name='phone-call' color="white" size="md"></box-icon>
                <p class="text-white ms-2">Contact 011272087</p>
                <div class="d-flex align-items-center ms-3" style="cursor: pointer;" onclick="navigation.checkout()">
                    <span class="material-symbols-outlined text-white fs-3">shopping_cart</span>
                    <span class="badge bg-danger" id="shoptxt">0</span>
                </div>
            </div>
        </div>
        <!-- endsecond nav bar -->
        <div class="row">
            <div class="col-xl-12">
                <ul class="nav" id="list1">
                    <li class="nav-item d-flex ">
                        <box-icon name='laptop' color="white" size="md"></box-icon>
                        <a href="#" class="nav-link text-white" id="link1">LAPTOP</a>
                    </li>
                    <li class="nav-item d-flex">
                        <box-icon name='desktop' color="white" size="md"></box-icon>
                        <a href="#" class="nav-link text-white" id="link2">DESKTOP</a>
                    </li>
                    <li class="nav-item d-flex text-white">
                        <box-icon name='discord-alt' type='logo' color="white" size="md"></box-icon>
                        <a href="#" class="nav-link text-white" id="link3">GAMING</a>
                    </li>
                    <li class="nav-item d-flex">
                        <box-icon name='headphone' color="white" size="md"></box-icon>
                        <a href="#" class="nav-link text-white">PERIPHERAL</a>
                    </li>
                    <li class="nav-item d-flex">
                        <box-icon name='wrench' color="white" size="md"></box-icon>
                        <a href="#" class="nav-link text-white">PC BUILDER</a>
                    </li>
                </ul>
                <div id="list2">
                    <box-icon name='menu' color="white" size="md" class="dropdown " type="button"
                        id="dropdownMenuButton" data-bs-toggle="dropdown"></box-icon>
                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="" onclick="navigation.home()">Home</a></li>
                        <li><a class="dropdown-item" href="#">Laptop</a></li>
                        <li><a class="dropdown-item" href="#">Desktop</a></li>
                        <li><a class="dropdown-item" href="#">Gaming</a></li>
                        <li><a class="dropdown-item" href="#">Smart Phone</a></li>
                        <li><a class="dropdown-item" href="#">PC Components</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- end second nav bar -->

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
    <!-- end mian content -->
    <!-- new product content -->
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
    <!-- end laptop content -->

    <!-- desktop content -->
    <hr width="100%" style="color:b;" size="5px">

    <div style="height: 50px; background-color: gainsboro; padding-top: 10px;">
        <h5 class="fs-5">Destop</h5>
    </div>
    <div class="container mt-2" style="width: auto; height: auto;" id="row">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="card product-card" data-product-id="laptop_013">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/des1.jpg" alt="Acer Laptop" class="card-img-top">
                        </div>
                        <div class="product-info">
                            <h5 class="card-title text-center">Acer</h5>
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
                <div class="card product-card" data-product-id="laptop_014">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/des2.jpg" alt="Aoc Laptop" class="card-img-top">
                        </div>
                        <div class="product-info">
                            <h5 class="card-title text-center">Aoc</h5>
                            <p class="card-text text-center">
                                <small class="text-muted">Professional Monitor</small>
                            </p>
                            <p class="price text-center">$299</p>
                            <button class="btn btn-primary add-to-cart">
                                <span class="material-symbols-outlined align-middle me-1" style="font-size: 16px;">shopping_cart</span>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="card product-card" data-product-id="laptop_015">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/des3.jpg" alt="Dell Laptop" class="card-img-top">
                        </div>
                        <div class="product-info">
                            <h5 class="card-title text-center">Dell</h5>
                            <p class="card-text text-center">
                                <small class="text-muted">High Performance Laptop</small>
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
                <div class="card product-card" data-product-id="laptop_016">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/des4.jpg" alt="Mac Laptop" class="card-img-top">
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
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="card product-card" data-product-id="laptop_017">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/des5.jpg" alt="Dell Laptop" class="card-img-top">
                        </div>
                        <div class="product-info">
                            <h5 class="card-title text-center">Dell</h5>
                            <p class="card-text text-center">
                                <small class="text-muted">Budget Laptop</small>
                            </p>
                            <p class="price text-center">$599</p>
                            <button class="btn btn-primary add-to-cart">
                                <span class="material-symbols-outlined align-middle me-1" style="font-size: 16px;">shopping_cart</span>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="card product-card" data-product-id="laptop_018">
                    <div class="card-body">
                        <span class="badge bg-danger position-absolute top-0 start-0">NEW</span>
                        <div class="product-image">
                            <img src="./assets/Image/des6.jpg" alt="Acer Laptop" class="card-img-top">
                        </div>
                        <div class="product-info">
                            <h5 class="card-title text-center">Acer</h5>
                            <p class="card-text text-center">
                                <small class="text-muted">Gaming Laptop</small>
                            </p>
                            <p class="price text-center">$1,199</p>
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
    <!-- end desktop content -->
    <!-- gaming -->
    

    <!-- footer -->
    <?php include('./includes/footer.php'); ?>