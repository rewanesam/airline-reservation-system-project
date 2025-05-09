<?php
session_start();

// Check if user is logged in and is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

// Include database connection
include '../config/database.php';

// Initialize variables
$title = '';
$description = '';
$type = '';
$price = '';
$duration = '';
$destination = '';
$image_url = '';
$status = 'active';
$message = '';
$error = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $type = trim($_POST['type']);
    $price = trim($_POST['price']);
    $duration = trim($_POST['duration']);
    $destination = trim($_POST['destination']);
    $image_url = trim($_POST['image_url']);
    $status = $_POST['status'];
    
    // Validate form data
    $errors = [];
    
    if (empty($title)) {
        $errors[] = "Title is required";
    }
    
    if (empty($description)) {
        $errors[] = "Description is required";
    }
    
    if (empty($type)) {
        $errors[] = "Type is required";
    }
    
    if (empty($price) || !is_numeric($price) || $price <= 0) {
        $errors[] = "Price must be a positive number";
    }
    
    if (empty($destination)) {
        $errors[] = "Destination is required";
    }
    
    // If no errors, insert into database
    if (empty($errors)) {
        try {
            $stmt = $conn->prepare("INSERT INTO offers (title, description, type, price, duration, destination, image_url, status, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())");
            $stmt->execute([$title, $description, $type, $price, $duration, $destination, $image_url, $status]);
            
            $message = "Offer added successfully!";
            
            // Reset form
            $title = '';
            $description = '';
            $type = '';
            $price = '';
            $duration = '';
            $destination = '';
            $image_url = '';
            $status = 'active';
        } catch (PDOException $e) {
            $error = "Error adding offer: " . $e->getMessage();
        }
    } else {
        $error = implode("<br>", $errors);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGYPTAIR - Add Offer</title>
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
                    <div class="col-12">
                        <h2>Add New Offer</h2>
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
                
                <!-- Add Offer Form -->
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="add_offer.php">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($title); ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="type" class="form-label">Type</label>
                                    <select class="form-select" id="type" name="type" required>
                                        <option value="">Select Type</option>
                                        <option value="flight" <?php echo $type === 'flight' ? 'selected' : ''; ?>>Flight</option>
                                        <option value="hotel" <?php echo $type === 'hotel' ? 'selected' : ''; ?>>Hotel</option>
                                        <option value="package" <?php echo $type === 'package' ? 'selected' : ''; ?>>Package</option>
                                        <option value="special" <?php echo $type === 'special' ? 'selected' : ''; ?>>Special</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required><?php echo htmlspecialchars($description); ?></textarea>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="price" class="form-label">Price ($)</label>
                                    <input type="number" class="form-control" id="price" name="price" value="<?php echo htmlspecialchars($price); ?>" step="0.01" min="0" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="duration" class="form-label">Duration (days)</label>
                                    <input type="number" class="form-control" id="duration" name="duration" value="<?php echo htmlspecialchars($duration); ?>" min="0">
                                </div>
                                <div class="col-md-4">
                                    <label for="destination" class="form-label">Destination</label>
                                    <input type="text" class="form-control" id="destination" name="destination" value="<?php echo htmlspecialchars($destination); ?>" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="image_url" class="form-label">Image URL</label>
                                <input type="url" class="form-control" id="image_url" name="image_url" value="<?php echo htmlspecialchars($image_url); ?>" placeholder="https://example.com/image.jpg">
                                <div class="form-text">Enter a valid URL for the offer image</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status">
                                    <option value="active" <?php echo $status === 'active' ? 'selected' : ''; ?>>Active</option>
                                    <option value="inactive" <?php echo $status === 'inactive' ? 'selected' : ''; ?>>Inactive</option>
                                </select>
                            </div>
                            
                            <div class="d-flex justify-content-between">
                                <a href="offers.php" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Add Offer</button>
                            </div>
                        </form>
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

/* Form Styles */
.form-label {
    font-weight: 500;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .row.mb-3 > div {
        margin-bottom: 15px;
    }
}
</style> 