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