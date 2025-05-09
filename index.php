<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGYPTAIR - Home</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include 'components/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section position-relative">
        <div class="hero-overlay"></div>
        <div class="container position-relative">
            <div class="row min-vh-75 align-items-center">
                <div class="col-lg-8 text-white">
                    <h1 class="display-3 fw-bold mb-4">Discover the World with EGYPTAIR</h1>
                    <p class="lead mb-5">Experience premium travel with our award-winning airline. Book your next adventure today!</p>
                    <div class="search-box bg-white p-4 rounded-3 shadow">
                        <form class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">From</label>
                                <input type="text" class="form-control" placeholder="City or Airport">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">To</label>
                                <input type="text" class="form-control" placeholder="City or Airport">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Passengers</label>
                                <select class="form-select">
                                    <option>1 Passenger</option>
                                    <option>2 Passengers</option>
                                    <option>3 Passengers</option>
                                    <option>4 Passengers</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100">Search Flights</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card text-center p-4">
                        <i class="bi bi-shield-check display-4 text-primary mb-3"></i>
                        <h3>Safe Travel</h3>
                        <p>Your safety is our top priority with enhanced cleaning and health measures.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center p-4">
                        <i class="bi bi-clock-history display-4 text-primary mb-3"></i>
                        <h3>On-Time Flights</h3>
                        <p>We pride ourselves on maintaining excellent punctuality records.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center p-4">
                        <i class="bi bi-star display-4 text-primary mb-3"></i>
                        <h3>Premium Service</h3>
                        <p>Experience luxury with our award-winning in-flight service.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Offers Section -->
    <section class="offers-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Special Offers</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card offer-card h-100">
                        <div class="position-relative">
                            <img src="assets\images\sea pohoto.avif" class="card-img-top" alt="Summer Special">
                            <div class="offer-badge">20% OFF</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Summer Special</h5>
                            <p class="card-text">Book your summer vacation with 20% off on selected routes.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success"></i> Valid until August 31, 2024</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Free seat selection</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Extra baggage allowance</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card offer-card h-100">
                        <div class="position-relative">
                            <img src="assets\images\busniss image.jpg" class="card-img-top" alt="Business Class">
                            <div class="offer-badge bg-primary">Premium</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Business Class Upgrade</h5>
                            <p class="card-text">Experience luxury travel with our premium business class.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success"></i> Priority check-in</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Lounge access</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Premium dining</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card offer-card h-100">
                        <div class="position-relative">
                            <img src="assets\images\images group bocking.jpg" class="card-img-top" alt="Group Booking">
                            <div class="offer-badge bg-info">Group</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Group Bookings</h5>
                            <p class="card-text">Special rates for group bookings of 10 or more passengers.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success"></i> Dedicated coordinator</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Flexible payment</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Custom services</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">What Our Customers Say</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="assets\images\images john.jpg" class="rounded-circle me-3" alt="Customer">
                            <div>
                                <h5 class="mb-0">John Smith</h5>
                                <small class="text-muted">Business Traveler</small>
                            </div>
                        </div>
                        <p class="mb-0">"Excellent service and comfortable flights. The staff was very professional and helpful."</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="assets\images\sarror images.jpg" class="rounded-circle me-3" alt="Customer">
                            <div>
                                <h5 class="mb-0">Sarah Johnson</h5>
                                <small class="text-muted">Frequent Flyer</small>
                            </div>
                        </div>
                        <p class="mb-0">"The best airline I've flown with. Great entertainment options and delicious meals."</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="assets\images\images michale.jpg" class="rounded-circle me-3" alt="Customer">
                            <div>
                                <h5 class="mb-0">Michael Brown</h5>
                                <small class="text-muted">Tourist</small>
                            </div>
                        </div>
                        <p class="mb-0">"Smooth check-in process and on-time flights. Will definitely fly with EGYPTAIR again."</p>
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
                    <h2 class="mb-4">Subscribe to Our Newsletter</h2>
                    <p class="mb-4">Stay updated with our latest offers and travel deals</p>
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
/* Hero Section */
.hero-section {
    background: url('https://via.placeholder.com/1920x1080') center/cover no-repeat;
    min-height: 75vh;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
}

.min-vh-75 {
    min-height: 75vh;
}

/* Feature Cards */
.feature-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-5px);
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
    background: #ffc107;
    color: #000;
    padding: 5px 10px;
    border-radius: 20px;
    font-weight: bold;
}

/* Testimonial Cards */
.testimonial-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
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
    .hero-section {
        min-height: 100vh;
    }
    
    .search-box {
        margin-top: 2rem;
    }
}
</style>
