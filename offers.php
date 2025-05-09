<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGYPTAIR - Special Offers</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include 'components/navbar.php'; ?>

    <!-- Offers Hero Section -->
    <section class="offers-hero position-relative">
        <div class="offers-overlay"></div>
        <div class="container position-relative">
            <div class="row min-vh-50 align-items-center">
                <div class="col-lg-8 text-white">
                    <h1 class="display-4 fw-bold mb-4">Special Offers & Deals</h1>
                    <p class="lead">Discover our exclusive offers and start planning your next adventure</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Offers Filter Section -->
    <section class="offers-filter py-4 bg-light">
        <div class="container">
            <div class="row g-3">
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>Offer Type</option>
                        <option>Flight Offers</option>
                        <option>Hotel Packages</option>
                        <option>Holiday Packages</option>
                        <option>Luxury Travel</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>Destination</option>
                        <option>Europe</option>
                        <option>Asia</option>
                        <option>Africa</option>
                        <option>Americas</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>Duration</option>
                        <option>Short Trip (1-3 days)</option>
                        <option>Weekend Getaway (3-5 days)</option>
                        <option>Extended Stay (5-10 days)</option>
                        <option>Long Journey (10+ days)</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary w-100">Apply Filters</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Offers Section -->
    <section class="offers-main py-5">
        <div class="container">
            <!-- Featured Offers -->
            <div class="mb-5">
                <h2 class="section-title mb-4">Featured Offers</h2>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="featured-offer-card">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="assets\images\paris image.jpg" class="img-fluid rounded-start h-100 object-fit-cover" alt="Featured Offer">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <span class="badge bg-danger mb-2">Limited Time</span>
                                        <h3 class="card-title">Summer Escape to Paris</h3>
                                        <p class="card-text">Experience the magic of Paris with our exclusive summer package.</p>
                                        <ul class="list-unstyled mb-3">
                                            <li><i class="bi bi-check-circle-fill text-success"></i> 5 nights accommodation</li>
                                            <li><i class="bi bi-check-circle-fill text-success"></i> Daily breakfast</li>
                                            <li><i class="bi bi-check-circle-fill text-success"></i> City tour included</li>
                                        </ul>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="price-tag">
                                                <span class="text-muted text-decoration-line-through">$1,200</span>
                                                <span class="h4 mb-0 ms-2">$999</span>
                                            </div>
                                            <a href="#" class="btn btn-primary">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="featured-offer-card">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="assets\images\v-hd-dubai.jpg" class="img-fluid rounded-start h-100 object-fit-cover" alt="Featured Offer">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <span class="badge bg-warning mb-2">Popular</span>
                                        <h3 class="card-title">Dubai Luxury Experience</h3>
                                        <p class="card-text">Indulge in luxury with our premium Dubai package.</p>
                                        <ul class="list-unstyled mb-3">
                                            <li><i class="bi bi-check-circle-fill text-success"></i> 7 nights at 5-star hotel</li>
                                            <li><i class="bi bi-check-circle-fill text-success"></i> Desert safari</li>
                                            <li><i class="bi bi-check-circle-fill text-success"></i> Airport transfers</li>
                                        </ul>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="price-tag">
                                                <span class="text-muted text-decoration-line-through">$2,500</span>
                                                <span class="h4 mb-0 ms-2">$1,999</span>
                                            </div>
                                            <a href="#" class="btn btn-primary">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Regular Offers -->
            <div class="mb-5">
                <h2 class="section-title mb-4">Flight Offers</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="offer-card h-100">
                            <div class="position-relative">
                                <img src="assets\images\images early bird special.jpg" class="card-img-top" alt="Early Bird">
                                <div class="offer-badge bg-success">Save 25%</div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Early Bird Special</h5>
                                <p class="card-text">Book 90 days in advance and save up to 25% on your flight.</p>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Valid for all destinations</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Free date change</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Priority boarding</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary">Book Early</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="offer-card h-100">
                            <div class="position-relative">
                                <img src="assets\images\GSC-Student-Discount-Sale-Page-5-18-23.jpg" class="card-img-top" alt="Student">
                                <div class="offer-badge bg-info">Student</div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Student Discount</h5>
                                <p class="card-text">Special fares for students with valid ID.</p>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle-fill text-success"></i> 15% off all flights</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Extra baggage allowance</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Flexible booking</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary">Verify ID</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="offer-card h-100">
                            <div class="position-relative">
                                <img src="assets\images\multi city explorer.webp" class="card-img-top" alt="Multi-City">
                                <div class="offer-badge bg-primary">Multi-City</div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Multi-City Explorer</h5>
                                <p class="card-text">Visit multiple destinations with special pricing.</p>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Up to 3 stopovers</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> 30-day validity</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Free stopover hotel</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary">Plan Journey</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hotel Packages -->
            <div class="mb-5">
                <h2 class="section-title mb-4">Hotel Packages</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="offer-card h-100">
                            <div class="position-relative">
                                <img src="assets\images\images luxury package.jpg" class="card-img-top" alt="Luxury Resort">
                                <div class="offer-badge bg-warning">Luxury</div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Luxury Resort Package</h5>
                                <p class="card-text">Experience ultimate luxury at premium resorts.</p>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle-fill text-success"></i> 5-star accommodation</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> All-inclusive meals</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Spa access</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary">View Resorts</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="offer-card h-100">
                            <div class="position-relative">
                                <img src="assets\images\New-york-City-Break.jpg" class="card-img-top" alt="City Break">
                                <div class="offer-badge bg-info">City</div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">City Break Special</h5>
                                <p class="card-text">Perfect for weekend getaways in major cities.</p>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle-fill text-success"></i> 3-night minimum</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Breakfast included</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> City tour included</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary">Explore Cities</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="offer-card h-100">
                            <div class="position-relative">
                                <img src="assets\images\Luxury Beach Resorts  escapein Thailand For A Tropical Escape.png" class="card-img-top" alt="Beach Resort">
                                <div class="offer-badge bg-success">Beach</div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Beach Resort Escape</h5>
                                <p class="card-text">Relax at beautiful beachfront resorts.</p>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Beachfront location</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Water activities</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Sunset dinner</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary">Find Resort</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section py-5 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="mb-4">Stay Updated with Latest Offers</h2>
                    <p class="mb-4">Subscribe to our newsletter and never miss out on exclusive deals</p>
                    <form class="row g-3 justify-content-center">
                        <div class="col-md-8">
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-light w-100">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-4 bg-dark text-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5>About EGYPTAIR</h5>
                    <p>Your trusted airline for safe and comfortable travel experiences.</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">About Us</a></li>
                        <li><a href="#" class="text-white">Services</a></li>
                        <li><a href="#" class="text-white">Offers</a></li>
                        <li><a href="#" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-telephone"></i> +20 123 456 789</li>
                        <li><i class="bi bi-envelope"></i> info@egyptair.com</li>
                        <li><i class="bi bi-geo-alt"></i> Cairo, Egypt</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<style>
/* Offers Hero Section */
.offers-hero {
    background: url('https://via.placeholder.com/1920x1080') center/cover no-repeat;
    min-height: 50vh;
}

.offers-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.6);
}

.min-vh-50 {
    min-height: 50vh;
}

/* Featured Offer Cards */
.featured-offer-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
}

.featured-offer-card:hover {
    transform: translateY(-5px);
}

.object-fit-cover {
    object-fit: cover;
}

/* Offer Cards */
.offer-card {
    border: none;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.offer-card:hover {
    transform: translateY(-5px);
}

.offer-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    padding: 5px 10px;
    border-radius: 20px;
    font-weight: bold;
}

/* Price Tag */
.price-tag {
    display: flex;
    align-items: baseline;
}

/* Newsletter Section */
.newsletter-section {
    background: linear-gradient(45deg, #007bff, #0056b3);
}

/* Footer */
.footer a {
    text-decoration: none;
    transition: opacity 0.3s ease;
}

.footer a:hover {
    opacity: 0.8;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .offers-hero {
        min-height: 60vh;
    }
    
    .featured-offer-card .col-md-6:first-child {
        height: 200px;
    }
}
</style>
