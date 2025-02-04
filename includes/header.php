<div class="container-fluid bg-black" id="nav2" style="height: auto; padding: 10px 0;">
    <div class="row align-items-center">
        <div class="col-12 col-md-3 d-flex justify-content-start align-items-center" onclick="navigation.home()">
            <img src="./assets/Image/logo.png" alt="" id="pic2" style="max-height: 35px; object-fit: contain;">
            <p class="ms-2 text-white fs-6 mb-0" id="logo-name">OneStore</p>
        </div>
        <div class="col-12 col-md-5 d-flex justify-content-center align-items-center">
            <div class="input-group input-group-sm">
                <input type="text" class="form-control form-control-sm" placeholder="Search" id="search" onclick="SearchItem()">
                <button class="btn btn-primary btn-sm" onclick="SearchItem()">SEARCH</button>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
            <div class="d-flex align-items-center me-2">
                <i class="bi bi-telephone text-white me-1" style="font-size: 0.75rem;"></i>
                <p class="text-white ms-1 mb-0 small" style="font-size: 0.75rem;">011272087</p>
            </div>
            <div class="d-flex align-items-center me-2" style="cursor: pointer;" onclick="navigation.checkout()">
                <i class="bi bi-cart text-white" style="font-size: 0.75rem;"></i>
                <span class="badge bg-danger badge-sm ms-1" id="shoptxt" style="font-size: 0.6rem;">0</span>
            </div>
            <?php
            session_start();
            // Check if user is logged in
            $isLoggedIn = isset($_SESSION['user_id']);
            ?>
            <div class="d-flex justify-content-center align-items-center">
                <?php if ($isLoggedIn): ?>
                    <div class="dropdown">
                        <a href="#" class="text-white dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle" style="font-size: 18px; cursor: pointer;"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item small" href="profile.php">Profile</a></li>
                            <li><a class="dropdown-item small" href="orders.php">My Orders</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item small" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <a href="auth/login.php" class="text-white me-2">
                        <i class="bi bi-person" style="font-size: 18px;"></i>
                    </a>
                    <a href="auth/register.php" class="text-white">
                        <i class="bi bi-person-plus" style="font-size: 18px;"></i>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Navigation menu -->
    <div class="row mt-1">
        <div class="col-xl-12">
            <ul class="nav nav-sm align-items-center" id="list1">
                <li class="nav-item d-flex align-items-center me-2">
                    <i class="bi bi-laptop text-white me-1" style="font-size: 0.75rem;"></i>
                    <a href="#" class="nav-link text-white p-0" style="font-size: 0.75rem;">LAPTOP</a>
                </li>
                <li class="nav-item d-flex align-items-center me-2">
                    <i class="bi bi-pc-display text-white me-1" style="font-size: 0.75rem;"></i>
                    <a href="#" class="nav-link text-white p-0" style="font-size: 0.75rem;">DESKTOP</a>
                </li>
                <li class="nav-item d-flex align-items-center me-2">
                    <i class="bi bi-controller text-white me-1" style="font-size: 0.75rem;"></i>
                    <a href="#" class="nav-link text-white p-0" style="font-size: 0.75rem;">GAMING</a>
                </li>
                <li class="nav-item d-flex align-items-center me-2">
                    <i class="bi bi-headphones text-white me-1" style="font-size: 0.75rem;"></i>
                    <a href="#" class="nav-link text-white p-0" style="font-size: 0.75rem;">PERIPHERAL</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <i class="bi bi-tools text-white me-1" style="font-size: 0.75rem;"></i>
                    <a href="#" class="nav-link text-white p-0" style="font-size: 0.75rem;">PC BUILDER</a>
                </li>
            </ul>
            <div id="list2" class="text-start mt-1">
                <i class="bi bi-list text-white" style="font-size: 0.80rem;" class="dropdown" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"></i>
                <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item small" href="" onclick="navigation.home()">Home</a></li>
                    <li><a class="dropdown-item small" href="#">Laptop</a></li>
                    <li><a class="dropdown-item small" href="#">Desktop</a></li>
                    <li><a class="dropdown-item small" href="#">Gaming</a></li>
                    <li><a class="dropdown-item small" href="#">Smart Phone</a></li>
                    <li><a class="dropdown-item small" href="#">PC Components</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>