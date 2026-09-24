<?php
// Error reporting on karo taaki white screen ki jagah error dikhe
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AURA Interior Architecture & Design</title>
    
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- AOS Animation Library CSS CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="../public/css/style.css">

    <script>
        // Force page to start from the top on reload
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

    <!-- ==========================================
         1. NAVBAR INCLUDE
         ========================================== -->
    <?php include 'partials/navbar.php'; ?>


    <!-- ==========================================
         2. HERO SECTION
         ========================================== -->
    <header class="hero-section position-relative d-flex align-items-center text-white" 
            style="height: 780px; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('../public/image/be6bd5ec-2d31-4c86-bf73-865b508c9b44.png') center/cover no-repeat;">
        <div class="container position-relative z-1" style="margin-top: 50px;">
            <div class="row align-items-center">
                <div class="col-lg-7 text-start">
                    
                    <div class="mb-3" data-aos="fade-right" data-aos-duration="800">
                        <span class="badge bg-white text-dark px-3 py-2 rounded-pill fw-bold shadow-sm" style="letter-spacing: 1.5px;">✦ REDEFINING MODERN ELEGANCE ✦</span>
                    </div>
                    
                    <h1 class="fw-bold mb-3 text-white lh-base" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200" style="font-size: 2.75rem; letter-spacing: -0.5px;">
                        Crafting Timeless Spaces Tailored For <span class="text-warning">Your Legacy</span>
                    </h1>
                    
                    <p class="text-light opacity-85 mb-4 fs-6 fw-light" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="400" style="max-width: 540px;">
                        Immerse your senses in bespoke interior architectures where minimalist aesthetics meet absolute functional luxury.
                    </p>
                    
                    <div class="d-flex justify-content-start gap-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600">
                        <a href="#about-studio" class="btn btn-warning btn-md px-4 py-3 rounded-pill fw-bold text-dark shadow">
                            Explore Studio &rarr;
                        </a>
                        <button class="btn btn-outline-light btn-md px-4 py-3 rounded-pill fw-semibold" data-bs-toggle="modal" data-bs-target="#bookingModal">
                            Book Private Tour
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </header>


    <!-- ==========================================
         3. CRAFTING CALM & BALANCED INTERIORS SECTION
         ========================================== -->
    <section id="about-studio" class="py-5 bg-white">
        <div class="container py-5">
            
            <!-- Top Heading & Subtext Row -->
            <div class="row align-items-center mb-5 pb-4">
                <div class="col-lg-7" data-aos="fade-right" data-aos-duration="1000">
                    <span class="text-uppercase text-primary fw-bold small tracking-wider" style="letter-spacing: 2px;">Bespoke Philosophy</span>
                    <h2 class="fw-bold display-5 text-dark mt-2" style="letter-spacing: -1px;">
                        Sculpting Masterpieces of <br> Sophisticated Living
                    </h2>
                </div>
                <div class="col-lg-5" data-aos="fade-left" data-aos-duration="1000">
                    <p class="text-muted fs-6 lh-lg mb-0">
                        We transcend traditional design by orchestrating spaces of profound serenity. Every architectural curve, texture, and ambient hue is meticulously calibrated to reflect elite comfort and timeless distinction.
                    </p>
                </div>
            </div>

            <!-- Asymmetric Grid Layout with Premium Text & Images -->
            <div class="row g-4 align-items-stretch">
                
                <!-- Left Column (Two stacked content blocks) -->
                <div class="col-lg-6 d-flex flex-column gap-4">
                    
                    <!-- Block 1: Architectural Vision -->
                    <div class="p-5 bg-light rounded-4 border-0 shadow-sm flex-fill d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
                        <span class="badge bg-dark text-white rounded-pill px-3 py-1 mb-3 align-self-start small">Visionary Precision</span>
                        <h3 class="fw-bold fs-3 text-dark mb-3">Architectural Mastery & Form</h3>
                        <p class="text-muted mb-0 lh-lg">
                            Merging avant-garde spatial concepts with uncompromising structural integrity, we curate environments that radiate absolute prestige and bespoke elegance.
                        </p>
                    </div>

                    <!-- Block 2: Image & Sanctuary of Privacy -->
                    <div class="row g-4">
                        <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">
                            <div class="overflow-hidden rounded-4 shadow-sm h-100">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLUDpiBWycXZXYA1iHRjIGgt0vPeMZSeG7zjkitGoEWwgZE6Rev0NKG4qg&s=10" class="w-100 h-100 object-fit-cover hover-zoom" alt="Luxury Interior Detail" style="min-height: 220px;">
                            </div>
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-center p-4 bg-light rounded-4 shadow-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="350">
                            <span class="text-primary fw-bold small text-uppercase mb-1">Exclusivity</span>
                            <h4 class="fw-bold fs-4 text-dark mb-2">Sanctuaries of Privacy</h4>
                            <p class="text-muted small mb-0 lh-base">
                                Tailored exclusively for discerning clientele, delivering absolute harmony, acoustic privacy, and majestic interior refinement.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Right Column (Tall Feature Image) -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="overflow-hidden rounded-4 shadow-lg h-100 position-relative">
                        <img src="../public/image/be6bd5ec-2d31-4c86-bf73-865b508c9b44.png" class="w-100 h-100 object-fit-cover hover-zoom" alt="Grand Interior Showcase" style="min-height: 500px;">
                        <div class="position-absolute bottom-0 start-0 w-100 p-4 bg-dark bg-opacity-75 text-white backdrop-blur">
                            <h5 class="fw-bold mb-1">The Grand Estate Collection</h5>
                            <p class="small text-white-50 mb-0">Exquisite detailing crafted for ultra-luxury modern residences.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ==========================================
         4. THOUGHTFUL INTERIOR DESIGN FOR REAL LIFE (4-Column Pricing/Packages Section)
         ========================================== -->
    <section class="py-5 bg-light border-top">
        <div class="container py-5">
            
            <!-- Section Header -->
            <div class="text-center mb-5 pb-2" data-aos="fade-up" data-aos-duration="1000">
                <span class="text-uppercase text-primary fw-bold small tracking-wider" style="letter-spacing: 2px;">Curated Packages</span>
                <h2 class="fw-bold display-6 text-dark mt-2" style="letter-spacing: -0.5px;">
                    Thoughtful interior design for real life
                </h2>
                <p class="text-muted mx-auto mt-2" style="max-width: 600px;">
                    Explore our bespoke design packages tailored to elevate your living environments into absolute masterpieces.
                </p>
            </div>

            <!-- 4 Column Cards Grid -->
            <div class="row g-4">
                
                <!-- Card 1 -->
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100 hover-card rounded-4 overflow-hidden bg-white">
                        <div class="position-relative overflow-hidden" style="height: 220px;">
                            <img src="../public/image/1.png" class="w-100 h-100 object-fit-cover hover-zoom" alt="Space Planning">
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="fw-bold text-dark mb-0 fs-5">Spatial Blueprint & Layout</h5>
                            </div>
                            <p class="text-muted small mb-4 flex-grow-1">Strategic spatial optimization and sophisticated floor planning tailored for maximum functional elegance.</p>
                            <div class="d-flex align-items-center justify-content-between mt-auto pt-3 border-top">
                                <span class="text-secondary small fw-semibold">investment</span>
                                <span class="fw-bold text-dark fs-5">$2,300</span>
                            </div>
                            <button class="mt-3 btn btn-outline-dark w-100 py-2 rounded-pill fw-semibold shadow-none transition-all" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#bookingModal" 
                                    data-design="Spatial Blueprint & Layout">
                                Secure Package
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100 hover-card rounded-4 overflow-hidden bg-white">
                        <div class="position-relative overflow-hidden" style="height: 220px;">
                            <img src="../public/image/2.png" class="w-100 h-100 object-fit-cover hover-zoom" alt="Full Interior Styling">
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="fw-bold text-dark mb-0 fs-5">Signature Full Styling</h5>
                            </div>
                            <p class="text-muted small mb-4 flex-grow-1">Comprehensive aesthetic overhaul incorporating bespoke furniture, lighting, and curated decor.</p>
                            <div class="d-flex align-items-center justify-content-between mt-auto pt-3 border-top">
                                <span class="text-secondary small fw-semibold">investment</span>
                                <span class="fw-bold text-dark fs-5">$5,600</span>
                            </div>
                            <button class="mt-3 btn btn-outline-dark w-100 py-2 rounded-pill fw-semibold shadow-none transition-all" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#bookingModal" 
                                    data-design="Signature Full Styling">
                                Secure Package
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100 hover-card rounded-4 overflow-hidden bg-white">
                        <div class="position-relative overflow-hidden" style="height: 220px;">
                            <img src="../public/image/3.png" class="w-100 h-100 object-fit-cover hover-zoom" alt="Renovation Support">
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="fw-bold text-dark mb-0 fs-5">Transformation & Makeover</h5>
                            </div>
                            <p class="text-muted small mb-4 flex-grow-1">End-to-end renovation consultancy and meticulous project management for total space rebirth.</p>
                            <div class="d-flex align-items-center justify-content-between mt-auto pt-3 border-top">
                                <span class="text-secondary small fw-semibold">investment</span>
                                <span class="fw-bold text-dark fs-5">$1,200</span>
                            </div>
                            <button class="mt-3 btn btn-outline-dark w-100 py-2 rounded-pill fw-semibold shadow-none transition-all" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#bookingModal" 
                                    data-design="Transformation & Makeover">
                                Secure Package
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="card border-0 shadow-sm h-100 hover-card rounded-4 overflow-hidden bg-white">
                        <div class="position-relative overflow-hidden" style="height: 220px;">
                            <img src="../public/image/4.png" class="w-100 h-100 object-fit-cover hover-zoom" alt="Custom Furnishing">
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="fw-bold text-dark mb-0 fs-5">Bespoke Millwork & Finishes</h5>
                            </div>
                            <p class="text-muted small mb-4 flex-grow-1">Handcrafted artisanal furniture pieces and custom architectural hardware curated for elite standards.</p>
                            <div class="d-flex align-items-center justify-content-between mt-auto pt-3 border-top">
                                <span class="text-secondary small fw-semibold">investment</span>
                                <span class="fw-bold text-dark fs-5">$4,500</span>
                            </div>
                            <button class="mt-3 btn btn-outline-dark w-100 py-2 rounded-pill fw-semibold shadow-none transition-all" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#bookingModal" 
                                    data-design="Bespoke Millwork & Finishes">
                                Secure Package
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ==========================================
         5. RECENT WORK & FEATURED SPACES SECTION
         ========================================== -->
    <section class="py-5 bg-white border-top">
        <div class="container py-5">
            
            <!-- Section Header -->
            <div class="text-center mb-5 pb-3" data-aos="fade-up" data-aos-duration="1000">
                <span class="text-uppercase text-primary fw-bold small tracking-wider" style="letter-spacing: 2px;">Portfolio Showcase</span>
                <h2 class="fw-bold display-6 text-dark mt-2" style="letter-spacing: -0.5px;">
                    Recent work & featured spaces
                </h2>
                <p class="text-muted mx-auto mt-2" style="max-width: 600px;">
                    Take a glimpse into our latest architectural milestones and successfully delivered residential sanctuaries.
                </p>
            </div>

            <!-- Asymmetric Portfolio Grid Layout -->
            <div class="row g-4 align-items-center">
                
                <!-- Project 1 -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="card border-0 bg-transparent h-100">
                        <div class="overflow-hidden rounded-4 shadow-sm mb-3" style="height: 320px;">
                            <img src="../public/image/5.png" class="w-100 h-100 object-fit-cover hover-zoom" alt="Brookside Family Home">
                        </div>
                        <h4 class="fw-bold text-dark fs-5 mb-1">Brookside Family Home</h4>
                        <p class="text-muted small mb-3">7283 Pluton St. South Richmond Hill FL 11418</p>
                        <button class="btn btn-outline-dark rounded-pill px-4 py-2 fw-semibold w-50 shadow-none transition-all"
                                data-bs-toggle="modal" 
                                data-bs-target="#bookingModal" 
                                data-design="Brookside Family Home Project">
                            View Project
                        </button>
                    </div>
                </div>

                <!-- Project 2 (Center Large Featured) -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">
                    <div class="card border-0 bg-transparent h-100">
                        <div class="overflow-hidden rounded-4 shadow-lg mb-3" style="height: 420px;">
                            <img src="../public/image/6.png" class="w-100 h-100 object-fit-cover hover-zoom" alt="Laurel Garden Residence">
                        </div>
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h4 class="fw-bold text-dark fs-5 mb-1">Laurel Garden Residence</h4>
                                <p class="text-muted small mb-3">9031 Windsor Ave. Lakeview Springs CA 94512</p>
                            </div>
                            <button class="btn btn-outline-dark rounded-pill px-4 py-2 fw-semibold shadow-none transition-all"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#bookingModal" 
                                    data-design="Laurel Garden Residence Project">
                                View Project
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="card border-0 bg-transparent h-100">
                        <div class="overflow-hidden rounded-4 shadow-sm mb-3" style="height: 320px;">
                            <img src="../public/image/7.png" class="w-100 h-100 object-fit-cover hover-zoom" alt="Pineview Modern Retreat">
                        </div>
                        <h4 class="fw-bold text-dark fs-5 mb-1">Pineview Modern Retreat</h4>
                        <p class="text-muted small mb-3">1127 Carter Lane. North Haven TX 75032</p>
                        <button class="btn btn-outline-dark rounded-pill px-4 py-2 fw-semibold w-50 shadow-none transition-all"
                                data-bs-toggle="modal" 
                                data-bs-target="#bookingModal" 
                                data-design="Pineview Modern Retreat Project">
                            View Project
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ==========================================
         6. EXPLORE COLLECTION SECTION (New Interactive Style)[cite: 7]
         ========================================== -->
    <section class="py-5 bg-light border-top">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                
                <!-- Left Categories Column -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="fw-bold display-5 text-dark mb-5" style="letter-spacing: -0.5px;">Explore Collection</h2>
                    
                    <div class="d-flex flex-column gap-4">
                        <a href="#bookingModal" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Aroma & Wellness Collection" class="text-decoration-none text-dark border-bottom pb-3 d-flex justify-content-between align-items-center group-hover">
                            <h4 class="fw-semibold fs-4 mb-0 text-dark">Aroma & Wellness</h4>
                            <span class="fs-5 text-muted">&rarr;</span>
                        </a>
                        <a href="#bookingModal" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Home Organization Collection" class="text-decoration-none text-dark border-bottom pb-3 d-flex justify-content-between align-items-center group-hover">
                            <h4 class="fw-semibold fs-4 mb-0 text-dark">Home Organization</h4>
                            <span class="fs-5 text-muted">&rarr;</span>
                        </a>
                        <a href="#bookingModal" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Decorative Accents Collection" class="text-decoration-none text-dark border-bottom pb-3 d-flex justify-content-between align-items-center group-hover">
                            <h4 class="fw-semibold fs-4 mb-0 text-dark">Decorative Accents</h4>
                            <span class="fs-5 text-muted">&rarr;</span>
                        </a>
                        <a href="#bookingModal" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Wall Art & Decor Collection" class="text-decoration-none text-dark border-bottom pb-3 d-flex justify-content-between align-items-center group-hover">
                            <h4 class="fw-semibold fs-4 mb-0 text-dark">Wall Art & Decor</h4>
                            <span class="fs-5 text-muted">&rarr;</span>
                        </a>
                    </div>

                    <div class="mt-5">
                        <button class="btn btn-warning text-white rounded-pill px-4 py-3 fw-semibold shadow-sm" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="All Categories Inquiry">
                            Explore All Categories ↗
                        </button>
                    </div>
                </div>

                <!-- Right Grand Image Column -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="overflow-hidden rounded-4 shadow-lg position-relative" style="height: 500px;">
                        <img src="https://images.livspace-cdn.com/w:3840/plain/https://d3gq2merok8n5r.cloudfront.net/abhinav/ond-1634120396-Obfdc/jas-2026-1785330024-pzKMk/lr-1785331666-sRIYZ/05-1785331697-RuT0D.jpg" class="w-100 h-100 object-fit-cover hover-zoom" alt="Explore Collection Showcase">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ==========================================
         7. FOOTER & MODAL COMPONENTS
         ========================================== -->
    <?php include 'partials/footer.php'; ?>
    <?php include 'partials/login-modal.php'; ?>


    <!-- ==========================================
         8. JAVASCRIPT & ANIMATION INITIALIZATION
         ========================================== -->
    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation Library JS CDN -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Initialize AOS Animations -->
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 50
        });
    </script>
</body>
</html>