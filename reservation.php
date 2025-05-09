<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGYPTAIR - Reservation</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include 'components/navbar.php'; ?>

    <!-- Reservation Hero Section -->
    <section class="reservation-hero position-relative">
        <div class="reservation-overlay"></div>
        <div class="container position-relative">
            <div class="row min-vh-50 align-items-center">
                <div class="col-lg-8 text-white">
                    <h1 class="display-4 fw-bold mb-4">Book Your Flight</h1>
                    <p class="lead">Find and book your perfect flight with EGYPTAIR</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Flight Search Section -->
    <section class="flight-search py-5">
        <div class="container">
            <div class="search-card">
                <ul class="nav nav-pills mb-4" id="bookingTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="one-way-tab" data-bs-toggle="pill" data-bs-target="#one-way" type="button" role="tab">
                            <i class="bi bi-airplane"></i> One Way
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="round-trip-tab" data-bs-toggle="pill" data-bs-target="#round-trip" type="button" role="tab">
                            <i class="bi bi-airplane-engines"></i> Round Trip
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="multi-city-tab" data-bs-toggle="pill" data-bs-target="#multi-city" type="button" role="tab">
                            <i class="bi bi-map"></i> Multi-City
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="bookingTabsContent">
                    <!-- One Way Tab -->
                    <div class="tab-pane fade show active" id="one-way" role="tabpanel">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">From</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                        <input type="text" class="form-control" placeholder="City or Airport">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">To</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                        <input type="text" class="form-control" placeholder="City or Airport">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Departure Date</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Passengers</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-people"></i></span>
                                        <select class="form-select">
                                            <option value="1">1 Passenger</option>
                                            <option value="2">2 Passengers</option>
                                            <option value="3">3 Passengers</option>
                                            <option value="4">4 Passengers</option>
                                            <option value="5">5 Passengers</option>
                                            <option value="6">6 Passengers</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">Search Flights</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Round Trip Tab -->
                    <div class="tab-pane fade" id="round-trip" role="tabpanel">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">From</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                        <input type="text" class="form-control" placeholder="City or Airport">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">To</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                        <input type="text" class="form-control" placeholder="City or Airport">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Departure Date</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Return Date</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Passengers</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-people"></i></span>
                                        <select class="form-select">
                                            <option value="1">1 Passenger</option>
                                            <option value="2">2 Passengers</option>
                                            <option value="3">3 Passengers</option>
                                            <option value="4">4 Passengers</option>
                                            <option value="5">5 Passengers</option>
                                            <option value="6">6 Passengers</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Class</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-ticket-perforated"></i></span>
                                        <select class="form-select">
                                            <option value="economy">Economy</option>
                                            <option value="business">Business</option>
                                            <option value="first">First Class</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">Search Flights</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Multi-City Tab -->
                    <div class="tab-pane fade" id="multi-city" role="tabpanel">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">From</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                        <input type="text" class="form-control" placeholder="City or Airport">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">To</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                        <input type="text" class="form-control" placeholder="City or Airport">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Departure Date</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn btn-outline-primary" id="addFlight">
                                        <i class="bi bi-plus-circle"></i> Add Another Flight
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Passengers</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-people"></i></span>
                                        <select class="form-select">
                                            <option value="1">1 Passenger</option>
                                            <option value="2">2 Passengers</option>
                                            <option value="3">3 Passengers</option>
                                            <option value="4">4 Passengers</option>
                                            <option value="5">5 Passengers</option>
                                            <option value="6">6 Passengers</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Class</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-ticket-perforated"></i></span>
                                        <select class="form-select">
                                            <option value="economy">Economy</option>
                                            <option value="business">Business</option>
                                            <option value="first">First Class</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">Search Flights</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Destinations -->
    <section class="popular-destinations py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Popular Destinations</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="destination-card">
                        <img src="assets\images\Dubai-UAE.jpg"   class="img-fluid rounded" alt="Dubai">
                        <div class="destination-overlay">
                            <h3>Dubai</h3>
                            <p>From $299</p>
                            <a href="#" class="btn btn-light">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="destination-card">
                        <img src="assets\images\london-.jpeg" class="img-fluid rounded" alt="London">
                        <div class="destination-overlay">
                            <h3>London</h3>
                            <p>From $499</p>
                            <a href="#" class="btn btn-light">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="destination-card">
                        <img src="assets\images\Paris.jpg"  class="img-fluid rounded" alt="Paris">
                        <div class="destination-overlay">
                            <h3>Paris</h3>
                            <p>From $449</p>
                            <a href="#" class="btn btn-light">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Tips -->
    <section class="booking-tips py-5">
        <div class="container">
            <h2 class="text-center mb-5">Booking Tips</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="tip-card text-center">
                        <div class="tip-icon mb-3">
                            <i class="bi bi-calendar-check display-4 text-primary"></i>
                        </div>
                        <h4>Book in Advance</h4>
                        <p>Book your flights at least 3 months in advance for the best prices.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tip-card text-center">
                        <div class="tip-icon mb-3">
                            <i class="bi bi-clock-history display-4 text-primary"></i>
                        </div>
                        <h4>Flexible Dates</h4>
                        <p>Consider flying on weekdays or during off-peak seasons for lower fares.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tip-card text-center">
                        <div class="tip-icon mb-3">
                            <i class="bi bi-bell display-4 text-primary"></i>
                        </div>
                        <h4>Price Alerts</h4>
                        <p>Set up price alerts to get notified when fares drop for your desired route.</p>
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
                    <h2 class="mb-4">Stay Updated with Flight Deals</h2>
                    <p class="mb-4">Subscribe to our newsletter for exclusive flight offers and travel tips</p>
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
/* Reservation Hero Section */
.reservation-hero {
    background: url('https://via.placeholder.com/1920x1080') center/cover no-repeat;
    min-height: 50vh;
}

.reservation-overlay {
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

/* Search Card */
.search-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    margin-top: -50px;
    position: relative;
    z-index: 1;
}

/* Nav Pills */
.nav-pills .nav-link {
    color: #333;
    padding: 0.75rem 1.5rem;
    border-radius: 30px;
    margin-right: 0.5rem;
}

.nav-pills .nav-link.active {
    background-color: var(--primary-color);
    color: #fff;
}

.nav-pills .nav-link i {
    margin-right: 0.5rem;
}

/* Destination Cards */
.destination-card {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    margin-bottom: 1rem;
}

.destination-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
    color: #fff;
    padding: 1.5rem;
    text-align: center;
}

.destination-overlay h3 {
    margin-bottom: 0.5rem;
}

/* Tip Cards */
.tip-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    transition: transform 0.3s ease;
}

.tip-card:hover {
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
    .reservation-hero {
        min-height: 60vh;
    }
    
    .search-card {
        margin-top: 0;
    }
    
    .nav-pills .nav-link {
        margin-bottom: 0.5rem;
    }
}
</style>
