<?php
session_start();

// Check if user is logged in and is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

// Include database connection
include '../config/database.php';

// Handle form submissions
$message = '';
$error = '';

// Delete offer
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $id = $_GET['delete'];
    try {
        $stmt = $conn->prepare("DELETE FROM offers WHERE id = ?");
        $stmt->execute([$id]);
        $message = "Offer deleted successfully!";
    } catch (PDOException $e) {
        $error = "Error deleting offer: " . $e->getMessage();
    }
}

// Toggle offer status
if (isset($_GET['toggle']) && is_numeric($_GET['toggle'])) {
    $id = $_GET['toggle'];
    try {
        // Get current status
        $stmt = $conn->prepare("SELECT status FROM offers WHERE id = ?");
        $stmt->execute([$id]);
        $current_status = $stmt->fetchColumn();
        
        // Toggle status
        $new_status = ($current_status == 'active') ? 'inactive' : 'active';
        
        $stmt = $conn->prepare("UPDATE offers SET status = ? WHERE id = ?");
        $stmt->execute([$new_status, $id]);
        
        $message = "Offer status updated successfully!";
    } catch (PDOException $e) {
        $error = "Error updating offer status: " . $e->getMessage();
    }
}

// Get all offers with pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

try {
    // Get total count for pagination
    $stmt = $conn->prepare("SELECT COUNT(*) FROM offers");
    $stmt->execute();
    $total_offers = $stmt->fetchColumn();
    $total_pages = ceil($total_offers / $limit);
    
    // Get offers for current page
    $stmt = $conn->prepare("SELECT * FROM offers ORDER BY created_at DESC LIMIT ? OFFSET ?");
    $stmt->execute([$limit, $offset]);
    $offers = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $error = "Error loading offers: " . $e->getMessage();
    $offers = [];
    $total_pages = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGYPTAIR - Manage Offers</title>
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
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="offers.php">Offers</a>
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
                            <a href="dashboard.php" class="list-group-item list-group-item-action">
                                <i class="bi bi-speedometer2"></i> Dashboard
                            </a>
                            <a href="offers.php" class="list-group-item list-group-item-action active">
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
                    <div class="col-md-6">
                        <h2>Manage Offers</h2>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="add_offer.php" class="btn btn-primary">
                            <i class="bi bi-plus-circle"></i> Add New Offer
                        </a>
                    </div>
                </div>
                
                <!-- Alert Messages -->
                <?php if (!empty($message)): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($error)): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $error; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>
                
                <!-- Offers Table -->
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($offers) > 0): ?>
                                        <?php foreach ($offers as $offer): ?>
                                            <tr>
                                                <td><?php echo $offer['id']; ?></td>
                                                <td><?php echo htmlspecialchars($offer['title']); ?></td>
                                                <td><?php echo htmlspecialchars($offer['type']); ?></td>
                                                <td>$<?php echo number_format($offer['price'], 2); ?></td>
                                                <td>
                                                    <span class="badge bg-<?php echo $offer['status'] == 'active' ? 'success' : 'secondary'; ?>">
                                                        <?php echo ucfirst($offer['status']); ?>
                                                    </span>
                                                </td>
                                                <td><?php echo date('M d, Y', strtotime($offer['created_at'])); ?></td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="edit_offer.php?id=<?php echo $offer['id']; ?>" class="btn btn-sm btn-primary">
                                                            <i class="bi bi-pencil"></i>
                                                        </a>
                                                        <a href="offers.php?toggle=<?php echo $offer['id']; ?>" class="btn btn-sm btn-<?php echo $offer['status'] == 'active' ? 'warning' : 'success'; ?>">
                                                            <i class="bi bi-<?php echo $offer['status'] == 'active' ? 'eye-slash' : 'eye'; ?>"></i>
                                                        </a>
                                                        <a href="offers.php?delete=<?php echo $offer['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this offer?');">
                                                            <i class="bi bi-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="7" class="text-center">No offers found</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Pagination -->
                        <?php if ($total_pages > 1): ?>
                        <nav aria-label="Page navigation" class="mt-4">
                            <ul class="pagination justify-content-center">
                                <?php if ($page > 1): ?>
                                    <li class="page-item">
                                        <a class="page-link" href="offers.php?page=<?php echo $page - 1; ?>">Previous</a>
                                    </li>
                                <?php endif; ?>
                                
                                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                    <li class="page-item <?php echo $i == $page ? 'active' : ''; ?>">
                                        <a class="page-link" href="offers.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php endfor; ?>
                                
                                <?php if ($page < $total_pages): ?>
                                    <li class="page-item">
                                        <a class="page-link" href="offers.php?page=<?php echo $page + 1; ?>">Next</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                        <?php endif; ?>
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

.table th {
    background-color: #f8f9fa;
}

.btn-group .btn {
    margin-right: 5px;
}

.btn-group .btn:last-child {
    margin-right: 0;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .btn-group {
        display: flex;
        flex-direction: column;
    }
    
    .btn-group .btn {
        margin-right: 0;
        margin-bottom: 5px;
    }
}
</style> 