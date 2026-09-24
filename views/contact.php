<?php
// views/contact.php - Sabse upar session start karo
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | D.Studio Interior Design Studio</title>
    <meta name="description" content="Start your interior design journey with D.Studio. Contact our design team for interior design, renovation, space planning and custom furniture projects.">
    
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- AOS Animation Library CSS CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Google Fonts: Playfair Display & Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="../public/css/style.css">

    <!-- Custom Studio Styles & Luxury Editorial Theme -->
    <style>
        :root {
            --cream: #F7F4EE;
            --ivory: #FBF9F4;
            --beige: #E8DED0;
            --charcoal: #20211F;
            --olive: #596044;
            --brown: #8A5A32;
            --gold: #B58A55;
            --white: #FFFFFF;
        }

        body {
            background-color: var(--cream) !important;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--charcoal);
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        h1, h2, h3, h4, h5, .editorial-serif {
            font-family: 'Playfair Display', serif;
        }

        /* Navbar link styles for Contact page */
        .glass-navbar .nav-link {
            color: #212529 !important;
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), color 0.3s ease !important;
        }
        .glass-navbar .nav-link:hover,
        .glass-navbar .nav-link.active {
            color: #ffc107 !important;
            transform: translateY(-4px) scale(1.05);
        }
        .glass-navbar .navbar-brand {
            color: #212529 !important;
        }

        /* Hero Specific Styles */
        .hero-section {
            padding-top: 120px;
            padding-bottom: 100px;
            background-color: var(--cream);
            position: relative;
        }

        .hero-title {
            font-family: "Playfair Display", serif;
            font-size: clamp(42px, 5.5vw, 82px);
            font-weight: 500;
            line-height: 0.98;
            letter-spacing: -0.04em;
            color: var(--charcoal);
        }

        .hero-description {
            max-width: 520px;
            font-size: 1.05rem;
            line-height: 1.75;
            color: #555552;
            font-weight: 300;
        }

        /* Primary & Secondary Buttons */
        .btn-editorial-primary {
            background-color: var(--charcoal);
            color: var(--cream);
            border: 1px solid var(--charcoal);
            padding: 16px 32px;
            border-radius: 4px;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s cubic-bezier(0.22, 1, 0.36, 1);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
        .btn-editorial-primary:hover {
            background-color: var(--olive);
            border-color: var(--olive);
            color: var(--white);
            transform: translateY(-2px);
        }
        .btn-editorial-primary:hover span {
            transform: translateX(4px);
        }
        .btn-editorial-primary span {
            transition: transform 0.3s ease;
        }

        .btn-editorial-secondary {
            background-color: transparent;
            color: var(--charcoal);
            border: 1px solid var(--charcoal);
            padding: 16px 32px;
            border-radius: 4px;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s cubic-bezier(0.22, 1, 0.36, 1);
            text-decoration: none;
            display: inline-block;
        }
        .btn-editorial-secondary:hover {
            background-color: var(--charcoal);
            color: var(--cream);
            transform: translateY(-2px);
        }

        /* Editorial Image Treatment */
        .hero-image-wrapper {
            position: relative;
            width: 100%;
        }
        .hero-image {
            width: 100%;
            height: 640px;
            object-fit: cover;
            border-radius: 4px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            border: 1px solid var(--beige);
            transition: transform 0.6s cubic-bezier(0.22, 1, 0.36, 1);
        }
        .hero-image:hover {
            transform: scale(1.02);
        }

        /* Floating Design Detail Card */
        .floating-design-card {
            position: absolute;
            bottom: -30px;
            left: -30px;
            background-color: var(--ivory);
            border: 1px solid var(--beige);
            border-radius: 4px;
            padding: 28px 32px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.06);
            max-width: 280px;
            animation: floatCard 6s ease-in-out infinite;
        }
        @keyframes floatCard {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        /* Contact Info Cards Lift */
        .contact-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: var(--white);
            border: 1px solid var(--beige);
            border-radius: 4px;
        }
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.08) !important;
        }

        /* FAQ Custom Accordion */
        .accordion-button:not(.collapsed) {
            background-color: var(--beige);
            color: var(--charcoal);
            box-shadow: none;
        }
        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0,0,0,.125);
        }

        @media (max-width: 991.98px) {
            .floating-design-card {
                position: relative;
                bottom: 0;
                left: 0;
                margin-top: 20px;
                max-width: 100%;
            }
            .hero-image {
                height: 450px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>

    <!-- Force page scroll to start from top on reload -->
    <script>
        if ('scrollRestoration' in history) {
            history.scrollRestoration = 'manual';
        }
        window.addEventListener('beforeunload', function () {
            window.scrollTo(0, 0);
        });
        window.addEventListener('load', function () {
            window.scrollTo(0, 0);
            if (window.location.hash) {
                history.replaceState(null, null, window.location.pathname);
            }
        });
    </script>
</head>
<body class="bg-white text-dark">

    <!-- Navbar Include -->
    <?php include 'partials/navbar.php'; ?>

    <!-- 1. REDESIGNED EDITORIAL CONTACT HERO SECTION -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center justify-content-between g-5">
                
                <!-- Left Side Content -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200">
                    
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <span class="text-uppercase tracking-widest text-muted fw-semibold" style="font-size: 0.75rem; letter-spacing: 0.15em; color: var(--olive);">CONTACT / STUDIO</span>
                        <div style="width: 40px; height: 1px; background-color: var(--gold);"></div>
                    </div>

                    <h1 class="hero-title mb-4">
                        Let’s create a space that feels like yours.
                    </h1>

                    <p class="hero-description mb-5">
                        Tell us about your space, your ideas, and the way you want to live. Our design team will help turn your vision into a thoughtfully designed interior.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="#enquiry-form" class="btn-editorial-primary">
                            Start Your Project <span>→</span>
                        </a>
                        <button class="btn-editorial-secondary" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="General Consultation">
                            Book a Consultation
                        </button>
                    </div>

                    <div class="pt-3 border-top border-secondary border-opacity-25" style="max-width: 480px;">
                        <p class="text-muted small mb-1 fw-medium" style="letter-spacing: 0.5px; color: #666;">
                            New Delhi &middot; Mumbai &middot; Bengaluru &middot; Hyderabad &middot; Pune
                        </p>
                        <p class="text-muted mb-0" style="font-size: 0.8rem; letter-spacing: 0.05em; color: var(--olive);">
                            Designing thoughtful spaces across India
                        </p>
                    </div>

                </div>

                <!-- Right Side Editorial Image & Floating Card -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    <div class="hero-image-wrapper">
                        <img src="https://media.designcafe.com/wp-content/uploads/2023/07/05195443/modern-interior-design.jpg" 
                             class="hero-image" 
                             alt="Luxury contemporary living room interior designed with warm wood, marble and neutral furnishings">
                        
                        <div class="floating-design-card">
                            <span class="d-block text-uppercase text-muted fw-bold mb-1" style="font-size: 0.65rem; letter-spacing: 0.2em; color: var(--olive);">DESIGN CONSULTATION</span>
                            <h5 class="editorial-serif fw-bold text-dark mb-3" style="font-size: 1.15rem; line-height: 1.3;">Let's discuss your space.</h5>
                            <a href="#enquiry-form" class="text-dark fw-bold text-decoration-none d-flex align-items-center gap-2 small" style="letter-spacing: 0.5px;">
                                Inquire Now <span class="text-warning">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2. CONTACT INFORMATION CARDS -->
    <section class="py-5 bg-white border-top border-bottom">
        <div class="container py-4">
            <div class="row g-4">
                
                <div class="col-md-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="contact-card p-4 h-100 d-flex flex-column">
                        <div class="mb-3 fs-3">📞</div>
                        <h4 class="fw-bold fs-5 text-dark mb-2 editorial-serif">Call Us</h4>
                        <p class="text-muted small mb-4 flex-grow-1">Speak directly with our design team for immediate assistance.</p>
                        <a href="tel:+919876543210" class="btn btn-outline-dark btn-sm rounded-pill w-100 fw-semibold mt-auto">Call Now &rarr;</a>
                    </div>
                </div>

                <div class="col-md-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="contact-card p-4 h-100 d-flex flex-column">
                        <div class="mb-3 fs-3">✉️</div>
                        <h4 class="fw-bold fs-5 text-dark mb-2 editorial-serif">Email Us</h4>
                        <p class="text-muted small mb-4 flex-grow-1">Share your project requirements and floor plans with us.</p>
                        <a href="mailto:concierge@dstudio.com" class="btn btn-outline-dark btn-sm rounded-pill w-100 fw-semibold mt-auto">Send Email &rarr;</a>
                    </div>
                </div>

                <div class="col-md-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="contact-card p-4 h-100 d-flex flex-column">
                        <div class="mb-3 fs-3">💬</div>
                        <h4 class="fw-bold fs-5 text-dark mb-2 editorial-serif">WhatsApp</h4>
                        <p class="text-muted small mb-4 flex-grow-1">Quickly connect with our concierge on chat for swift replies.</p>
                        <a href="https://whatsapp.com" target="_blank" class="btn btn-outline-dark btn-sm rounded-pill w-100 fw-semibold mt-auto">Chat on WhatsApp &rarr;</a>
                    </div>
                </div>

                <div class="col-md-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="contact-card p-4 h-100 d-flex flex-column">
                        <div class="mb-3 fs-3">📍</div>
                        <h4 class="fw-bold fs-5 text-dark mb-2 editorial-serif">Visit Our Studio</h4>
                        <p class="text-muted small mb-4 flex-grow-1">Meet our team and explore material finishes in person.</p>
                        <a href="#studios-section" class="btn btn-outline-dark btn-sm rounded-pill w-100 fw-semibold mt-auto">View Locations &rarr;</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. PROJECT ENQUIRY FORM SECTION -->
    <section id="enquiry-form" class="py-5" style="background-color: var(--cream);">
        <div class="container py-5" style="max-width: 900px;">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <span class="text-uppercase text-muted small fw-bold" style="letter-spacing: 2px; color: var(--olive);">PROJECT BRIEF</span>
                <h2 class="fw-bold display-5 editorial-serif text-dark mt-2">Tell us about your project.</h2>
                <p class="text-muted">Give us a few details about your space so our team can understand your requirements before we connect.</p>
            </div>

            <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5 bg-white" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <form id="projectEnquiryForm" action="../process-contact.php" method="POST">
                    
                    <h5 class="fw-bold text-dark mb-4 border-bottom pb-2 editorial-serif">1. Personal Details</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label small fw-bold text-uppercase">First Name *</label>
                            <input type="text" class="form-control bg-light border-0 py-3 rounded-3" id="firstName" name="first_name" placeholder="Enter first name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label small fw-bold text-uppercase">Last Name *</label>
                            <input type="text" class="form-control bg-light border-0 py-3 rounded-3" id="lastName" name="last_name" placeholder="Enter last name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label small fw-bold text-uppercase">Email Address *</label>
                            <input type="email" class="form-control bg-light border-0 py-3 rounded-3" id="email" name="email" placeholder="name@example.com" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label small fw-bold text-uppercase">Phone Number *</label>
                            <input type="tel" class="form-control bg-light border-0 py-3 rounded-3" id="phone" name="phone" placeholder="Enter phone number" required>
                        </div>
                    </div>

                    <h5 class="fw-bold text-dark mb-4 border-bottom pb-2 editorial-serif">2. Project Details</h5>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label for="city" class="form-label small fw-bold text-uppercase">City / Location *</label>
                            <input type="text" class="form-control bg-light border-0 py-3 rounded-3" id="city" name="city" placeholder="e.g. New Delhi" required>
                        </div>
                        <div class="col-md-6">
                            <label for="projectType" class="form-label small fw-bold text-uppercase">Project Type *</label>
                            <select class="form-select bg-light border-0 py-3 rounded-3 shadow-none" id="projectType" name="project_type" required>
                                <option value="" selected disabled>Select project type</option>
                                <option value="Full Interior Design">Full Interior Design</option>
                                <option value="Space Planning">Space Planning</option>
                                <option value="Renovation">Renovation</option>
                                <option value="Custom Furniture">Custom Furniture</option>
                                <option value="Kitchen & Wardrobe">Kitchen & Wardrobe</option>
                                <option value="Lighting Design">Lighting Design</option>
                                <option value="Styling">Styling</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="propertyType" class="form-label small fw-bold text-uppercase">Property Type</label>
                            <select class="form-select bg-light border-0 py-3 rounded-3 shadow-none" id="propertyType" name="property_type">
                                <option value="" selected>Select property</option>
                                <option value="Apartment">Apartment</option>
                                <option value="Villa">Villa</option>
                                <option value="Independent House">Independent House</option>
                                <option value="Office">Office</option>
                                <option value="Retail">Retail</option>
                                <option value="Restaurant">Restaurant</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="approxArea" class="form-label small fw-bold text-uppercase">Approximate Area</label>
                            <select class="form-select bg-light border-0 py-3 rounded-3 shadow-none" id="approxArea" name="area">
                                <option value="" selected>Select area</option>
                                <option value="Under 500 sq.ft.">Under 500 sq.ft.</option>
                                <option value="500–1000 sq.ft.">500–1000 sq.ft.</option>
                                <option value="1000–2000 sq.ft.">1000–2000 sq.ft.</option>
                                <option value="2000–3000 sq.ft.">2000–3000 sq.ft.</option>
                                <option value="3000+ sq.ft.">3000+ sq.ft.</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="budget" class="form-label small fw-bold text-uppercase">Estimated Budget</label>
                            <select class="form-select bg-light border-0 py-3 rounded-3 shadow-none" id="budget" name="budget">
                                <option value="" selected>Select budget range</option>
                                <option value="Under ₹5 Lakh">Under ₹5 Lakh</option>
                                <option value="₹5–10 Lakh">₹5–10 Lakh</option>
                                <option value="₹10–25 Lakh">₹10–25 Lakh</option>
                                <option value="₹25–50 Lakh">₹25–50 Lakh</option>
                                <option value="₹50 Lakh+">₹50 Lakh+</option>
                                <option value="Prefer to discuss">Prefer to discuss</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="message" class="form-label small fw-bold text-uppercase">Project Description & Timeline</label>
                        <textarea class="form-control bg-light border-0 rounded-3 p-3 shadow-none" id="message" name="message" rows="4" placeholder="Tell us about your space, design style, timeline, or anything else you would like us to know."></textarea>
                    </div>

                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="consent" name="consent" required>
                        <label class="form-check-label small text-muted" for="consent">I agree to be contacted regarding my project enquiry. *</label>
                    </div>

                    <button type="submit" class="btn btn-dark btn-lg w-100 py-3 fw-bold rounded-pill shadow-sm">
                        Send Project Enquiry &rarr;
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- 4. STUDIO LOCATIONS ACROSS INDIA -->
    <section id="studios-section" class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <span class="text-uppercase text-muted small fw-bold" style="letter-spacing: 2px;">PRESENCE</span>
                <h2 class="fw-bold display-5 editorial-serif text-dark mt-2">Visit Our Studios</h2>
                <p class="text-muted">Meet our designers, explore materials and discuss your project in person.</p>
            </div>

            <div class="row g-4">
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-light h-100">
                        <h4 class="fw-bold text-dark mb-1 editorial-serif">New Delhi</h4>
                        <p class="text-warning small fw-bold mb-3">Design Studio</p>
                        <p class="text-muted small mb-2"><strong>Address:</strong> [VERIFIED ADDRESS]</p>
                        <p class="text-muted small mb-2"><strong>Phone:</strong> [VERIFIED PHONE]</p>
                        <p class="text-muted small mb-2"><strong>Email:</strong> [VERIFIED EMAIL]</p>
                        <p class="text-muted small mb-4"><strong>Hours:</strong> Mon–Sat, 10:00 AM–7:00 PM</p>
                        <a href="https://maps.google.com" target="_blank" class="btn btn-outline-dark btn-sm rounded-pill w-100 fw-semibold mt-auto">Get Directions &rarr;</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-light h-100">
                        <h4 class="fw-bold text-dark mb-1 editorial-serif">Mumbai</h4>
                        <p class="text-warning small fw-bold mb-3">Design Studio</p>
                        <p class="text-muted small mb-2"><strong>Address:</strong> [VERIFIED ADDRESS]</p>
                        <p class="text-muted small mb-2"><strong>Phone:</strong> [VERIFIED PHONE]</p>
                        <p class="text-muted small mb-2"><strong>Email:</strong> [VERIFIED EMAIL]</p>
                        <p class="text-muted small mb-4"><strong>Hours:</strong> Mon–Sat, 10:00 AM–7:00 PM</p>
                        <a href="https://maps.google.com" target="_blank" class="btn btn-outline-dark btn-sm rounded-pill w-100 fw-semibold mt-auto">Get Directions &rarr;</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-light h-100">
                        <h4 class="fw-bold text-dark mb-1 editorial-serif">Bengaluru</h4>
                        <p class="text-warning small fw-bold mb-3">Design Studio</p>
                        <p class="text-muted small mb-2"><strong>Address:</strong> [VERIFIED ADDRESS]</p>
                        <p class="text-muted small mb-2"><strong>Phone:</strong> [VERIFIED PHONE]</p>
                        <p class="text-muted small mb-2"><strong>Email:</strong> [VERIFIED EMAIL]</p>
                        <p class="text-muted small mb-4"><strong>Hours:</strong> Mon–Sat, 10:00 AM–7:00 PM</p>
                        <a href="https://maps.google.com" target="_blank" class="btn btn-outline-dark btn-sm rounded-pill w-100 fw-semibold mt-auto">Get Directions &rarr;</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-light h-100">
                        <h4 class="fw-bold text-dark mb-1 editorial-serif">Hyderabad</h4>
                        <p class="text-warning small fw-bold mb-3">Design Studio</p>
                        <p class="text-muted small mb-2"><strong>Address:</strong> [VERIFIED ADDRESS]</p>
                        <p class="text-muted small mb-2"><strong>Phone:</strong> [VERIFIED PHONE]</p>
                        <p class="text-muted small mb-2"><strong>Email:</strong> [VERIFIED EMAIL]</p>
                        <p class="text-muted small mb-4"><strong>Hours:</strong> Mon–Sat, 10:00 AM–7:00 PM</p>
                        <a href="https://maps.google.com" target="_blank" class="btn btn-outline-dark btn-sm rounded-pill w-100 fw-semibold mt-auto">Get Directions &rarr;</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-light h-100">
                        <h4 class="fw-bold text-dark mb-1 editorial-serif">Pune</h4>
                        <p class="text-warning small fw-bold mb-3">Design Studio</p>
                        <p class="text-muted small mb-2"><strong>Address:</strong> [VERIFIED ADDRESS]</p>
                        <p class="text-muted small mb-2"><strong>Phone:</strong> [VERIFIED PHONE]</p>
                        <p class="text-muted small mb-2"><strong>Email:</strong> [VERIFIED EMAIL]</p>
                        <p class="text-muted small mb-4"><strong>Hours:</strong> Mon–Sat, 10:00 AM–7:00 PM</p>
                        <a href="https://maps.google.com" target="_blank" class="btn btn-outline-dark btn-sm rounded-pill w-100 fw-semibold mt-auto">Get Directions &rarr;</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. CONSULTATION BOOKING OPTIONS -->
    <section class="py-5" style="background-color: var(--cream);">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <span class="text-uppercase text-muted small fw-bold" style="letter-spacing: 2px;">CONVENIENT MEETS</span>
                <h2 class="fw-bold display-5 editorial-serif text-dark mt-2">Choose how you’d like to meet.</h2>
            </div>

            <div class="row g-4">
                
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white h-100 d-flex flex-column text-center">
                        <div class="fs-1 text-warning mb-3">💻</div>
                        <h4 class="fw-bold text-dark mb-2 editorial-serif">Video Consultation</h4>
                        <p class="text-muted small mb-4 flex-grow-1">Zoom or Google Meet. Convenient from anywhere across the globe. 30–60 minute session.</p>
                        <button class="btn btn-dark rounded-pill py-2 fw-semibold mt-auto" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Video Consultation">
                            Book Video Call &rarr;
                        </button>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white h-100 d-flex flex-column text-center">
                        <div class="fs-1 text-warning mb-3">🏛️</div>
                        <h4 class="fw-bold text-dark mb-2 editorial-serif">Studio Consultation</h4>
                        <p class="text-muted small mb-4 flex-grow-1">Meet our designers in person, explore material samples and discuss your project layout.</p>
                        <button class="btn btn-dark rounded-pill py-2 fw-semibold mt-auto" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Studio Consultation">
                            Visit Studio &rarr;
                        </button>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white h-100 d-flex flex-column text-center">
                        <div class="fs-1 text-warning mb-3">🏡</div>
                        <h4 class="fw-bold text-dark mb-2 editorial-serif">On-Site Consultation</h4>
                        <p class="text-muted small mb-4 flex-grow-1">Our team visits your property directly to inspect measurements and discuss potential.</p>
                        <button class="btn btn-dark rounded-pill py-2 fw-semibold mt-auto" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="On-Site Consultation">
                            Request Site Visit &rarr;
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. FREQUENTLY ASKED QUESTIONS (FAQ) -->
    <section class="py-5 bg-white">
        <div class="container py-5" style="max-width: 900px;">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <span class="text-uppercase text-muted small fw-bold" style="letter-spacing: 2px;">ANSWERS</span>
                <h2 class="fw-bold display-5 editorial-serif text-dark mt-2">Frequently Asked Questions</h2>
            </div>

            <div class="accordion shadow-sm rounded-4 overflow-hidden border-0" id="faqAccordionContact" data-aos="fade-up" data-aos-duration="1000">
                
                <div class="accordion-item border-0 border-bottom">
                    <h2 class="accordion-header" id="headingC1">
                        <button class="accordion-button fw-bold text-dark py-4 px-4 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseC1" aria-expanded="true" aria-controls="collapseC1">
                            How do I start an interior design project?
                        </button>
                    </h2>
                    <div id="collapseC1" class="accordion-collapse collapse show bg-white" aria-labelledby="headingC1" data-bs-parent="#faqAccordionContact">
                        <div class="accordion-body px-4 pb-4 text-muted">
                            Simply fill out our project enquiry form or book a consultation. Our design team will review your requirements and reach out within 24 hours.
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0 border-bottom">
                    <h2 class="accordion-header" id="headingC2">
                        <button class="accordion-button collapsed fw-bold text-dark py-4 px-4 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseC2" aria-expanded="false" aria-controls="collapseC2">
                            Do you work outside your studio cities?
                        </button>
                    </h2>
                    <div id="collapseC2" class="accordion-collapse collapse bg-white" aria-labelledby="headingC2" data-bs-parent="#faqAccordionContact">
                        <div class="accordion-body px-4 pb-4 text-muted">
                            Yes, we manage projects across North, South, West, East, and Central India through remote coordination and expert local execution partners.
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0 border-bottom">
                    <h2 class="accordion-header" id="headingC3">
                        <button class="accordion-button collapsed fw-bold text-dark py-4 px-4 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseC3" aria-expanded="false" aria-controls="collapseC3">
                            Can I book an online consultation?
                        </button>
                    </h2>
                    <div id="collapseC3" class="accordion-collapse collapse bg-white" aria-labelledby="headingC3" data-bs-parent="#faqAccordionContact">
                        <div class="accordion-body px-4 pb-4 text-muted">
                            Yes, video consultations are available worldwide via Zoom or Google Meet.
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="headingC4">
                        <button class="accordion-button collapsed fw-bold text-dark py-4 px-4 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseC4" aria-expanded="false" aria-controls="collapseC4">
                            What information should I provide before the consultation?
                        </button>
                    </h2>
                    <div id="collapseC4" class="accordion-collapse collapse bg-white" aria-labelledby="headingC4" data-bs-parent="#faqAccordionContact">
                        <div class="accordion-body px-4 pb-4 text-muted">
                            Property type, approximate area, location, general requirements, style references, and your estimated budget range are extremely helpful.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer & Modal -->
    <?php include 'partials/footer.php'; ?>
    <?php include 'partials/login-modal.php'; ?>

    <!-- JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true, offset: 50 });
    </script>
</body>
</html>