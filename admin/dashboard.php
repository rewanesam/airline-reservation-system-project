<?php
session_start();

// Check if user is logged in and is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

// Include database connection
include '../config/database.php';

// Get statistics
$offers_count = 0;
$services_count = 0;
$users_count = 0;
$bookings_count = 0;

try {
    // Count offers
    $stmt = $conn->prepare("SELECT COUNT(*) FROM offers");
    $stmt->execute();
    $offers_count = $stmt->fetchColumn();
    
    // Count services
    $stmt = $conn->prepare("SELECT COUNT(*) FROM services");
    $stmt->execute();
    $services_count = $stmt->fetchColumn();
    
    // Count users
    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE role != 'admin'");
    $stmt->execute();
    $users_count = $stmt->fetchColumn();
    
    // Count bookings
    $stmt = $conn->prepare("SELECT COUNT(*) FROM bookings");
    $stmt->execute();
    $bookings_count = $stmt->fetchColumn();
} catch (PDOException $e) {
    // Handle error
    $error = "Database error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGYPTAIR - Admin Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <!-- Admin Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">EGYPTAIR Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="adminNavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="offers.php">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bookings.php">Bookings</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle"></i> <?php echo htmlspecialchars($_SESSION['username']); ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Dashboard Content -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-3">
                <!-- Sidebar -->
                <div class="card sidebar-card">
                    <div class="card-body">
                        <h5 class="card-title">Admin Menu</h5>
                        <div class="list-group">
                            <a href="dashboard.php" class="list-group-item list-group-item-action active">
                                <i class="bi bi-speedometer2"></i> Dashboard
                            </a>
                            <a href="offers.php" class="list-group-item list-group-item-action">
                                <i class="bi bi-tag"></i> Manage Offers
                            </a>
                            <a href="services.php" class="list-group-item list-group-item-action">
                                <i class="bi bi-gear"></i> Manage Services
                            </a>
                            <a href="users.php" class="list-group-item list-group-item-action">
                                <i class="bi bi-people"></i> Manage Users
                            </a>
                            <a href="bookings.php" class="list-group-item list-group-item-action">
                                <i class="bi bi-calendar-check"></i> Manage Bookings
                            </a>
                            <a href="settings.php" class="list-group-item list-group-item-action">
                                <i class="bi bi-sliders"></i> Settings
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <!-- Main Content -->
                <div class="row mb-4">
                    <div class="col-12">
                        <h2>Dashboard Overview</h2>
                        <p class="text-muted">Welcome back, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
                    </div>
                </div>
                
                <!-- Statistics Cards -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card stat-card bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title">Total Offers</h6>
                                        <h2 class="mb-0"><?php echo $offers_count; ?></h2>
                                    </div>
                                    <div class="stat-icon">
                                        <i class="bi bi-tag"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="offers.php" class="text-white">View Details</a>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card bg-success text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title">Total Services</h6>
                                        <h2 class="mb-0"><?php echo $services_count; ?></h2>
                                    </div>
                                    <div class="stat-icon">
                                        <i class="bi bi-gear"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="services.php" class="text-white">View Details</a>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card bg-info text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title">Total Users</h6>
                                        <h2 class="mb-0"><?php echo $users_count; ?></h2>
                                    </div>
                                    <div class="stat-icon">
                                        <i class="bi bi-people"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="users.php" class="text-white">View Details</a>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card bg-warning text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title">Total Bookings</h6>
                                        <h2 class="mb-0"><?php echo $bookings_count; ?></h2>
                                    </div>
                                    <div class="stat-icon">
                                        <i class="bi bi-calendar-check"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="bookings.php" class="text-white">View Details</a>
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Activity -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Recent Offers</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Type</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            try {
                                                $stmt = $conn->prepare("SELECT * FROM offers ORDER BY created_at DESC LIMIT 5");
                                                $stmt->execute();
                                                $recent_offers = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                
                                                if (count($recent_offers) > 0) {
                                                    foreach ($recent_offers as $offer) {
                                                        echo "<tr>";
                                                        echo "<td>" . htmlspecialchars($offer['title']) . "</td>";
                                                        echo "<td>" . htmlspecialchars($offer['type']) . "</td>";
                                                        echo "<td><span class='badge bg-" . ($offer['status'] == 'active' ? 'success' : 'secondary') . "'>" . htmlspecialchars($offer['status']) . "</span></td>";
                                                        echo "<td><a href='edit_offer.php?id=" . $offer['id'] . "' class='btn btn-sm btn-primary'>Edit</a></td>";
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='4' class='text-center'>No offers found</td></tr>";
                                                }
                                            } catch (PDOException $e) {
                                                echo "<tr><td colspan='4' class='text-center text-danger'>Error loading offers</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="offers.php" class="btn btn-primary">View All Offers</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Recent Services</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            try {
                                                $stmt = $conn->prepare("SELECT * FROM services ORDER BY created_at DESC LIMIT 5");
                                                $stmt->execute();
                                                $recent_services = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                
                                                if (count($recent_services) > 0) {
                                                    foreach ($recent_services as $service) {
                                                        echo "<tr>";
                                                        echo "<td>" . htmlspecialchars($service['name']) . "</td>";
                                                        echo "<td>" . htmlspecialchars($service['category']) . "</td>";
                                                        echo "<td><span class='badge bg-" . ($service['status'] == 'active' ? 'success' : 'secondary') . "'>" . htmlspecialchars($service['status']) . "</span></td>";
                                                        echo "<td><a href='edit_service.php?id=" . $service['id'] . "' class='btn btn-sm btn-primary'>Edit</a></td>";
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='4' class='text-center'>No services found</td></tr>";
                                                }
                                            } catch (PDOException $e) {
                                                echo "<tr><td colspan='4' class='text-center text-danger'>Error loading services</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="services.php" class="btn btn-primary">View All Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<style>
/* Admin Dashboard Styles */
.sidebar-card {
    margin-bottom: 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.list-group-item {
    border: none;
    margin-bottom: 5px;
    border-radius: 5px;
}

.list-group-item i {
    margin-right: 10px;
}

.stat-card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.stat-icon {
    font-size: 2rem;
    opacity: 0.8;
}

.card-footer {
    background-color: rgba(0, 0, 0, 0.1);
    border-top: none;
}

.table {
    margin-bottom: 0;
}

.badge {
    padding: 5px 10px;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .stat-card {
        margin-bottom: 15px;
    }
}
</style> 