<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$current_page = basename($_SERVER['PHP_SELF']);

// Fetch wallet balance if user is logged in
$wallet_balance = null;
if (isset($_SESSION['user_id'])) {
    require_once __DIR__ . '/../includes/config.php';
    $stmt = $pdo->prepare("SELECT balance FROM wallet WHERE user_id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $wallet_balance = $stmt->fetchColumn();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/images/egyptair-logo.png" alt="EgyptAir Logo" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo $current_page == 'index.php' ? 'active' : ''; ?>" href="index.php">
                        <i class="bi bi-house-door"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $current_page == 'services.php' ? 'active' : ''; ?>" href="services.php">
                        <i class="bi bi-gear"></i> Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $current_page == 'offers.php' ? 'active' : ''; ?>" href="offers.php">
                        <i class="bi bi-tag"></i> Offers
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $current_page == 'reservation.php' ? 'active' : ''; ?>" href="reservation.php">
                        <i class="bi bi-calendar-check"></i> Reservation
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $current_page == 'contact.php' ? 'active' : ''; ?>" href="contact.php">
                        <i class="bi bi-envelope"></i> Contact
                    </a>
                </li>
            </ul>
            <!-- Show wallet balance if logged in -->
            <?php if(isset($_SESSION['user_id'])): ?>
                <div class="me-3" style="font-weight: bold; color: #0056b3;">
                    <i class="bi bi-wallet2"></i>
                    Wallet: $
                    <?php echo number_format($wallet_balance ?? 0, 2); ?>
                    <a href="wallet.php" style="margin-left: 8px; font-size: 0.95em;">[View]</a>
                </div>
            <?php endif; ?>
            <form class="d-flex me-3">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Search..." aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
            <ul class="navbar-nav">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle"></i> 
                            <?php 
                            if(isset($_SESSION['first_name']) && isset($_SESSION['last_name'])) {
                                echo htmlspecialchars($_SESSION['first_name'] . ' ' . $_SESSION['last_name']);
                            } else {
                                echo htmlspecialchars($_SESSION['username']);
                            }
                            ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item <?php echo $current_page == 'profile.php' ? 'active' : ''; ?>" href="profile.php">
                                    <i class="bi bi-person"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php echo $current_page == 'bookings.php' ? 'active' : ''; ?>" href="bookings.php">
                                    <i class="bi bi-bookmark"></i> My Bookings
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="bi bi-box-arrow-right"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'login.php' ? 'active' : ''; ?>" href="login.php">
                            <i class="bi bi-box-arrow-in-right"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'register.php' ? 'active' : ''; ?>" href="register.php">
                            <i class="bi bi-person-plus"></i> Register
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<style>
.navbar {
    padding: 1rem 0;
}

.navbar-brand img {
    transition: transform 0.3s ease;
}

.navbar-brand:hover img {
    transform: scale(1.05);
}

.nav-link {
    color: #333;
    font-weight: 500;
    padding: 0.5rem 1rem;
    transition: color 0.3s ease;
}

.nav-link:hover {
    color: #0056b3;
}

.nav-link.active {
    color: #0056b3;
    position: relative;
}

.nav-link.active::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 1rem;
    right: 1rem;
    height: 2px;
    background-color: #0056b3;
}

.dropdown-menu {
    border: none;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    border-radius: 0.5rem;
}

.dropdown-item {
    padding: 0.5rem 1.5rem;
    color: #333;
    transition: all 0.3s ease;
}

.dropdown-item:hover {
    background-color: #f8f9fa;
    color: #0056b3;
}

.dropdown-item.active {
    background-color: #0056b3;
    color: white;
}

.dropdown-divider {
    margin: 0.5rem 0;
}

.form-control {
    border-radius: 0.5rem 0 0 0.5rem;
    border: 1px solid #ced4da;
}

.btn-outline-primary {
    border-radius: 0 0.5rem 0.5rem 0;
    border: 1px solid #ced4da;
    border-left: none;
}

@media (max-width: 991.98px) {
    .navbar-nav {
        margin-top: 1rem;
    }
    
    .form-control {
        border-radius: 0.5rem;
        margin-bottom: 0.5rem;
    }
    
    .btn-outline-primary {
        border-radius: 0.5rem;
        border: 1px solid #ced4da;
    }
}
</style> 