<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGYPTAIR - Contact Us</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'components/navbar.php'; ?>

    <!-- Contact Hero Section -->
    <section class="contact-hero position-relative">
        <div class="contact-overlay"></div>
        <div class="container position-relative">
            <div class="row min-vh-50 align-items-center">
                <div class="col-lg-8 text-white">
                    <h1 class="display-4 fw-bold mb-4">Contact Us</h1>
                    <p class="lead">We're here to help with any questions or concerns you may have</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="contact-info py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="info-card text-center">
                        <div class="info-icon mb-3">
                            <i class="bi bi-geo-alt display-4 text-primary"></i>
                        </div>
                        <h4>Visit Us</h4>
                        <p>EGYPTAIR Headquarters<br>Cairo International Airport<br>Cairo, Egypt</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card text-center">
                        <div class="info-icon mb-3">
                            <i class="bi bi-telephone display-4 text-primary"></i>
                        </div>
                        <h4>Call Us</h4>
                        <p>+20 123 456 789<br>+20 987 654 321<br>24/7 Customer Support</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card text-center">
                        <div class="info-icon mb-3">
                            <i class="bi bi-envelope display-4 text-primary"></i>
                        </div>
                        <h4>Email Us</h4>
                        <p>info@egyptair.com<br>support@egyptair.com<br>bookings@egyptair.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="form-card">
                        <h2 class="text-center mb-4">Send Us a Message</h2>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone</label>
                                    <input type="tel" class="form-control">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Subject</label>
                                    <select class="form-select" required>
                                        <option value="">Select a subject</option>
                                        <option value="booking">Booking Inquiry</option>
                                        <option value="support">Customer Support</option>
                                        <option value="feedback">Feedback</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" rows="5" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Frequently Asked Questions</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    How do I book a flight?
                                </button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can book a flight through our website by selecting your destination, dates, and number of passengers. You can also book through our mobile app or by contacting our customer service.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    What is your baggage allowance?
                                </button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our standard baggage allowance varies by fare class and destination. Economy passengers typically get 23kg for checked baggage and 7kg for carry-on. Please check your specific fare conditions for detailed information.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    How can I modify my booking?
                                </button>
                            </h3>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can modify your booking through our website or mobile app by logging into your account. Alternatively, you can contact our customer service for assistance with modifications.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    What is your cancellation policy?
                                </button>
                            </h3>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our cancellation policy depends on your fare type. Some fares are non-refundable, while others may allow for a full or partial refund. Please check your fare conditions for specific details.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Find Us</h2>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.902434442374!2d31.3307!3d30.1219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDA3JzE4LjkiTiAzMcKwMTknNTAuNSJF!5e0!3m2!1sen!2seg!4v1620000000000!5m2!1sen!2seg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section py-5 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="mb-4">Stay Connected</h2>
                    <p class="mb-4">Subscribe to our newsletter for updates and travel inspiration</p>
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
/* Contact Hero Section */
.contact-hero {
    background: url('https://via.placeholder.com/1920x1080') center/cover no-repeat;
    min-height: 50vh;
}

.contact-overlay {
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

/* Info Cards */
.info-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    transition: transform 0.3s ease;
}

.info-card:hover {
    transform: translateY(-5px);
}

.info-icon {
    color: var(--primary-color);
}

/* Form Card */
.form-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    padding: 2rem;
}

/* FAQ Accordion */
.accordion-item {
    border: none;
    margin-bottom: 1rem;
    border-radius: 10px !important;
    overflow: hidden;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
}

.accordion-button {
    background-color: #fff;
    font-weight: 500;
}

.accordion-button:not(.collapsed) {
    background-color: var(--primary-color);
    color: #fff;
}

/* Map Container */
.map-container {
    border-radius: 10px;
    overflow: hidden;
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
    .contact-hero {
        min-height: 60vh;
    }
    
    .info-card {
        margin-bottom: 1rem;
    }
}
</style>
