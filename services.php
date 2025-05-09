<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGYPTAIR - Services</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include 'components/navbar.php'; ?>

    <!-- Services Hero Section -->
    <section class="services-hero position-relative">
        <div class="services-overlay"></div>
        <div class="container position-relative">
            <div class="row min-vh-50 align-items-center">
                <div class="col-lg-8 text-white">
                    <h1 class="display-4 fw-bold mb-4">Our Services</h1>
                    <p class="lead">Experience premium travel services designed for your comfort and convenience</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Services Section -->
    <section class="services-main py-5">
        <div class="container">
            <!-- Flight Services -->
            <div class="mb-5">
                <h2 class="section-title mb-4">Flight Services</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="service-card h-100">
                            <div class="service-icon">
                                <i class="bi bi-airplane-engines display-4 text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h3>Flight Booking</h3>
                                <p>Easy and convenient flight booking with flexible options and competitive prices.</p>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Multiple payment options</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> 24/7 customer support</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Instant confirmation</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card h-100">
                            <div class="service-icon">
                                <i class="bi bi-bag-check display-4 text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h3>Baggage Services</h3>
                                <p>Comprehensive baggage handling services for a worry-free journey.</p>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Extra baggage allowance</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Special handling</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Lost baggage support</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-card h-100">
                            <div class="service-icon">
                                <i class="bi bi-person-check display-4 text-primary"></i>
                            </div>
                            <div class="service-content">
                                <h3>Check-in Services</h3>
                                <p>Multiple check-in options for your convenience.</p>
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Online check-in</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Mobile check-in</li>
                                    <li><i class="bi bi-check-circle-fill text-success"></i> Airport check-in</li>
                                </ul>
                                <a href="#" class="btn btn-outline-primary">Check In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Premium Services -->
            <div class="mb-5">
                <h2 class="section-title mb-4">Premium Services</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="premium-service-card">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="assets\images\busniss.jpg" class="img-fluid rounded-start h-100 object-fit-cover" alt="Business Class">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <span class="badge bg-warning mb-2">Premium</span>
                                        <h3 class="card-title">Business Class</h3>
                                        <p class="card-text">Experience luxury travel with our premium business class service.</p>
                                        <ul class="list-unstyled mb-3">
                                            <li><i class="bi bi-check-circle-fill text-success"></i> Priority check-in</li>
                                            <li><i class="bi bi-check-circle-fill text-success"></i> Lounge access</li>
                                            <li><i class="bi bi-check-circle-fill text-success"></i> Premium dining</li>
                                            <li><i class="bi bi-check-circle-fill text-success"></i> Flat-bed seats</li>
                                        </ul>
                                        <a href="#" class="btn btn-primary">Upgrade Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="premium-service-card">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="assets\images\first class.avif" class="img-fluid rounded-start h-100 object-fit-cover" alt="First Class">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <span class="badge bg-danger mb-2">Exclusive</span>
                                        <h3 class="card-title">First Class</h3>
                                        <p class="card-text">Ultimate luxury with our exclusive first class experience.</p>
                                        <ul class="list-unstyled mb-3">
                                            <li><i class="bi bi-check-circle-fill text-success"></i> Private suite</li>
                                            <li><i class="bi bi-check-circle-fill text-success"></i> Personal chef</li>
                                            <li><i class="bi bi-check-circle-fill text-success"></i> Spa services</li>
                                            <li><i class="bi bi-check-circle-fill text-success"></i> Limo transfer</li>
                                        </ul>
                                        <a href="#" class="btn btn-primary">Book First Class</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Services -->
            <div class="mb-5">
                <h2 class="section-title mb-4">Additional Services</h2>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="additional-service-card text-center">
                            <div class="service-icon mb-3">
                                <i class="bi bi-car-front display-4 text-primary"></i>
                            </div>
                            <h4>Airport Transfer</h4>
                            <p>Reliable airport transfer service to and from the airport.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Book Transfer</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="additional-service-card text-center">
                            <div class="service-icon mb-3">
                                <i class="bi bi-shield-check display-4 text-primary"></i>
                            </div>
                            <h4>Travel Insurance</h4>
                            <p>Comprehensive travel insurance for peace of mind.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Get Insurance</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="additional-service-card text-center">
                            <div class="service-icon mb-3">
                                <i class="bi bi-camera display-4 text-primary"></i>
                            </div>
                            <h4>In-flight Entertainment</h4>
                            <p>Entertainment options for an enjoyable flight.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">View Options</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="additional-service-card text-center">
                            <div class="service-icon mb-3">
                                <i class="bi bi-currency-dollar display-4 text-primary"></i>
                            </div>
                            <h4>Currency Exchange</h4>
                            <p>Convenient currency exchange services.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Exchange Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Benefits Section -->
    <section class="benefits-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Why Choose Our Services</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="benefit-card text-center">
                        <i class="bi bi-clock-history display-4 text-primary mb-3"></i>
                        <h4>24/7 Support</h4>
                        <p>Round-the-clock customer support for your convenience</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card text-center">
                        <i class="bi bi-shield-check display-4 text-primary mb-3"></i>
                        <h4>Safe Travel</h4>
                        <p>Your safety is our top priority with enhanced measures</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card text-center">
                        <i class="bi bi-star display-4 text-primary mb-3"></i>
                        <h4>Premium Quality</h4>
                        <p>Experience the highest standards of service</p>
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
                    <h2 class="mb-4">Stay Updated with Our Services</h2>
                    <p class="mb-4">Subscribe to our newsletter for the latest service updates and exclusive offers</p>
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
/* Services Hero Section */
.services-hero {
    background: url('https://via.placeholder.com/1920x1080') center/cover no-repeat;
    min-height: 50vh;
}

.services-overlay {
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

/* Service Cards */
.service-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    transition: transform 0.3s ease;
}

.service-card:hover {
    transform: translateY(-5px);
}

.service-icon {
    margin-bottom: 1.5rem;
}

/* Premium Service Cards */
.premium-service-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
}

.premium-service-card:hover {
    transform: translateY(-5px);
}

.object-fit-cover {
    object-fit: cover;
}

/* Additional Service Cards */
.additional-service-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    transition: transform 0.3s ease;
}

.additional-service-card:hover {
    transform: translateY(-5px);
}

/* Benefit Cards */
.benefit-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    transition: transform 0.3s ease;
}

.benefit-card:hover {
    transform: translateY(-5px);
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
    .services-hero {
        min-height: 60vh;
    }
    
    .premium-service-card .col-md-6:first-child {
        height: 200px;
    }
}
</style>
