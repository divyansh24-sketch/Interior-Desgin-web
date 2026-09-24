<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curations & Services — D.Studio Luxury Interiors</title>
    
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- AOS Animation Library CSS CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="../public/css/style.css">

    <!-- Custom Studio Styles & Editorial Theme -->
    <style>
        :root {
            --studio-ivory: #F7F4EE;
            --studio-charcoal: #20211F;
            --studio-gold: #C5A059;
            --studio-olive: #596044;
            --studio-beige: #E8DED0;
        }

        body {
            background-color: var(--studio-ivory) !important;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--studio-charcoal);
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        h1, h2, h3, h4, h5, .editorial-serif {
            font-family: 'Playfair Display', serif;
        }

        /* Navbar link styles for Services page */
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

        .hover-zoom {
            transition: transform 0.7s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        .hover-zoom:hover {
            transform: scale(1.03);
        }

        /* FAQ Custom Accordion */
        .accordion-button:not(.collapsed) {
            background-color: #f1ebd9;
            color: var(--studio-charcoal);
            box-shadow: none;
        }
        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0,0,0,.125);
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

    <!-- 1. HERO SECTION -->
    <header class="py-5 position-relative border-bottom" style="margin-top: 80px; background-color: var(--studio-ivory);">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="mb-3">
                        <span class="text-uppercase small fw-bold tracking-widest text-muted" style="letter-spacing: 3px;">✦ OUR SERVICES ✦</span>
                        <div style="width: 50px; height: 2px; background-color: #C5A059;" class="mt-2"></div>
                    </div>
                    <h1 class="display-3 fw-bold text-dark mb-4 editorial-serif" style="letter-spacing: -1px; line-height: 1.1;">
                        Spaces designed around the way you live.
                    </h1>
                    <p class="lead text-muted mb-5 fw-light" style="max-width: 520px; line-height: 1.7;">
                        From thoughtful space planning to the final styling detail, we create interiors that balance beauty, comfort and function.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <button class="btn btn-dark btn-lg px-4 py-3 rounded-pill fw-semibold shadow-sm" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="General Consultation">
                            Start Your Project &rarr;
                        </button>
                        <a href="#services-grid" class="btn btn-outline-dark btn-lg px-4 py-3 rounded-pill fw-semibold">
                            Explore Our Services
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="position-relative overflow-hidden rounded-4 shadow-lg" style="height: 520px;">
                        <img src="https://cdn0.weddingwire.in/vendor/4907/3_2/960/jpg/img-7206_15_184907-178895258054110.jpeg" class="w-100 h-100 object-fit-cover hover-zoom" alt="Luxury Living Room">
                        <div class="position-absolute bottom-0 start-0 m-4 p-3 bg-white bg-opacity-90 backdrop-blur rounded-3 shadow-sm border border-light">
                            <p class="fw-bold mb-0 text-dark small">Thoughtful Design</p>
                            <span class="text-muted" style="font-size: 0.8rem;">Beautifully Delivered</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. SERVICES INTRODUCTION -->
    <section class="py-5 bg-white text-center">
        <div class="container py-5" data-aos="fade-up" data-aos-duration="1000">
            <span class="text-uppercase text-muted small fw-bold" style="letter-spacing: 2px;">WHAT WE DO</span>
            <h2 class="fw-bold display-5 editorial-serif text-dark mt-2 mb-3">From the first idea to the final detail.</h2>
            <p class="text-muted mx-auto lead fw-light" style="max-width: 700px; line-height: 1.8;">
                Our services are designed to take your interior from concept to completion with a thoughtful balance of function, aesthetics and personal expression.
            </p>
            <div class="mx-auto mt-4" style="width: 80px; height: 1px; background-color: var(--studio-gold);"></div>
        </div>
    </section>

    <!-- 3. MAIN SERVICES GRID (8 Comprehensive Services) -->
    <section id="services-grid" class="py-5" style="background-color: var(--studio-ivory);">
        <div class="container py-5">
            <div class="row g-4">
                
                <!-- Service 01 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden bg-white p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted fw-light fs-4">01</span>
                            <span class="badge bg-light text-success fw-bold">Spatial</span>
                        </div>
                        <h4 class="fw-bold fs-5 text-dark mb-2">Space Planning & Layout</h4>
                        <p class="text-muted small mb-4 flex-grow-1">Thoughtful floor plans, furniture placement and spatial zoning designed around how you move, live and use your space.</p>
                        <button class="btn btn-outline-dark btn-sm rounded-pill w-100 py-2 fw-semibold mt-auto" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Space Planning & Layout">
                            Explore Service &rarr;
                        </button>
                    </div>
                </div>

                <!-- Service 02 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden bg-white p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted fw-light fs-4">02</span>
                            <span class="badge bg-light text-primary fw-bold">Concept</span>
                        </div>
                        <h4 class="fw-bold fs-5 text-dark mb-2">Full Interior Design</h4>
                        <p class="text-muted small mb-4 flex-grow-1">Complete interior concepts combining architecture, furniture, materials, lighting and styling into one cohesive vision.</p>
                        <button class="btn btn-outline-dark btn-sm rounded-pill w-100 py-2 fw-semibold mt-auto" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Full Interior Design">
                            Explore Service &rarr;
                        </button>
                    </div>
                </div>

                <!-- Service 03 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden bg-white p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted fw-light fs-4">03</span>
                            <span class="badge bg-light text-danger fw-bold">Transformation</span>
                        </div>
                        <h4 class="fw-bold fs-5 text-dark mb-2">Renovation & Makeover</h4>
                        <p class="text-muted small mb-4 flex-grow-1">Transforming existing spaces with thoughtful updates to layouts, finishes, lighting and architectural details.</p>
                        <button class="btn btn-outline-dark btn-sm rounded-pill w-100 py-2 fw-semibold mt-auto" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Renovation & Makeover">
                            Explore Service &rarr;
                        </button>
                    </div>
                </div>

                <!-- Service 04 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden bg-white p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted fw-light fs-4">04</span>
                            <span class="badge bg-light text-warning fw-bold">Custom</span>
                        </div>
                        <h4 class="fw-bold fs-5 text-dark mb-2">Custom Furniture</h4>
                        <p class="text-muted small mb-4 flex-grow-1">Made-to-measure furniture designed specifically for your space, lifestyle and aesthetic requirements.</p>
                        <button class="btn btn-outline-dark btn-sm rounded-pill w-100 py-2 fw-semibold mt-auto" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Custom Furniture">
                            Explore Service &rarr;
                        </button>
                    </div>
                </div>

                <!-- Service 05 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden bg-white p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted fw-light fs-4">05</span>
                            <span class="badge bg-light text-dark fw-bold">Storage</span>
                        </div>
                        <h4 class="fw-bold fs-5 text-dark mb-2">Kitchen & Wardrobe</h4>
                        <p class="text-muted small mb-4 flex-grow-1">Functional and elegant storage solutions designed to make everyday living easier and more organized.</p>
                        <button class="btn btn-outline-dark btn-sm rounded-pill w-100 py-2 fw-semibold mt-auto" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Kitchen & Wardrobe Design">
                            Explore Service &rarr;
                        </button>
                    </div>
                </div>

                <!-- Service 06 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden bg-white p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted fw-light fs-4">06</span>
                            <span class="badge bg-light text-warning fw-bold">Lighting</span>
                        </div>
                        <h4 class="fw-bold fs-5 text-dark mb-2">Lighting Design</h4>
                        <p class="text-muted small mb-4 flex-grow-1">Layered lighting plans that create the right atmosphere while improving functionality and comfort.</p>
                        <button class="btn btn-outline-dark btn-sm rounded-pill w-100 py-2 fw-semibold mt-auto" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Lighting Design">
                            Explore Service &rarr;
                        </button>
                    </div>
                </div>

                <!-- Service 07 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden bg-white p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted fw-light fs-4">07</span>
                            <span class="badge bg-light text-secondary fw-bold">Materials</span>
                        </div>
                        <h4 class="fw-bold fs-5 text-dark mb-2">Materials & Finishes</h4>
                        <p class="text-muted small mb-4 flex-grow-1">Curated materials, colors, textures and finishes selected to create a cohesive interior experience.</p>
                        <button class="btn btn-outline-dark btn-sm rounded-pill w-100 py-2 fw-semibold mt-auto" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Materials & Finishes">
                            Explore Service &rarr;
                        </button>
                    </div>
                </div>

                <!-- Service 08 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden bg-white p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted fw-light fs-4">08</span>
                            <span class="badge bg-light text-success fw-bold">Finishing</span>
                        </div>
                        <h4 class="fw-bold fs-5 text-dark mb-2">Styling & Final Details</h4>
                        <p class="text-muted small mb-4 flex-grow-1">The final layer of personality through artwork, plants, accessories, rugs and decorative objects.</p>
                        <button class="btn btn-outline-dark btn-sm rounded-pill w-100 py-2 fw-semibold mt-auto" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Styling & Final Details">
                            Explore Service &rarr;
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. DETAILED SERVICE SECTIONS (Alternating Layouts) -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            
            <!-- Section A: Space Planning -->
            <div class="row align-items-center g-5 mb-5 pb-5 border-bottom">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <span class="text-uppercase text-muted small fw-bold" style="letter-spacing: 2px;">01 — SPACE PLANNING</span>
                    <h2 class="fw-bold display-6 editorial-serif text-dark mt-2 mb-3">Every great interior begins with a thoughtful plan.</h2>
                    <p class="text-muted lh-lg mb-4">
                        We study how your space works, how people move through it and what you need from every room. The result is a layout that feels natural, balanced and functional.
                    </p>
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-4 text-dark">
                        <li>✓ Furniture planning & placement</li>
                        <li>✓ Room zoning & optimization</li>
                        <li>✓ Circulation and flow analysis</li>
                        <li>✓ Storage layout planning</li>
                    </ul>
                    <button class="btn btn-dark rounded-pill px-4 py-2 fw-semibold" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Space Planning Detail">
                        Discuss Your Space &rarr;
                    </button>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="overflow-hidden rounded-4 shadow-sm" style="height: 420px;">
                        <img src="https://wisalai.com/api/images/articles/zSrR403ZmxZOhoL1TRhfXrilY3y2/cover-1775598163018" class="w-100 h-100 object-fit-cover hover-zoom" alt="Space Planning">
                    </div>
                </div>
            </div>

            <!-- Section B: Full Interior Design -->
            <div class="row align-items-center g-5 mb-5 pb-5 border-bottom">
                <div class="col-lg-6 order-lg-2" data-aos="fade-left" data-aos-duration="1000">
                    <span class="text-uppercase text-muted small fw-bold" style="letter-spacing: 2px;">02 — FULL INTERIOR DESIGN</span>
                    <h2 class="fw-bold display-6 editorial-serif text-dark mt-2 mb-3">One vision. Every detail considered.</h2>
                    <p class="text-muted lh-lg mb-4">
                        From the first concept to the final styling, we bring architecture, materials, furniture, lighting and accessories together into one cohesive interior.
                    </p>
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-4 text-dark">
                        <li>✓ Comprehensive concept development</li>
                        <li>✓ Material & color palettes</li>
                        <li>✓ Bespoke furniture selection</li>
                        <li>✓ Architectural lighting design</li>
                    </ul>
                    <button class="btn btn-dark rounded-pill px-4 py-2 fw-semibold" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Full Interior Design Detail">
                        Start a Design Project &rarr;
                    </button>
                </div>
                <div class="col-lg-6 order-lg-1" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                    <div class="overflow-hidden rounded-4 shadow-sm" style="height: 420px;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTj1Y1UlfUBFHnW3BPpI3ndvuzDcsVAXTFxL6DaEI7jsi8fdxtUXDRDGpcZ&s=10" class="w-100 h-100 object-fit-cover hover-zoom" alt="Full Interior Design">
                    </div>
                </div>
            </div>

            <!-- Section C: Renovation & Makeover -->
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <span class="text-uppercase text-muted small fw-bold" style="letter-spacing: 2px;">03 — RENOVATION & MAKEOVER</span>
                    <h2 class="fw-bold display-6 editorial-serif text-dark mt-2 mb-3">Give your existing space a new identity.</h2>
                    <p class="text-muted lh-lg mb-4">
                        We transform outdated or underused spaces through intelligent planning, refined materials and carefully considered architectural details.
                    </p>
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-4 text-dark">
                        <li>✓ Existing-space analysis</li>
                        <li>✓ Layout improvements</li>
                        <li>✓ Material upgrades</li>
                        <li>✓ Complete styling integration</li>
                    </ul>
                    <button class="btn btn-dark rounded-pill px-4 py-2 fw-semibold" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Renovation & Makeover Detail">
                        Plan Your Makeover &rarr;
                    </button>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="overflow-hidden rounded-4 shadow-sm" style="height: 420px;">
                        <img src="https://s3-blog.homelane.com/design-ideas/wp-content/uploads/2025/05/23113438/monochromatic-living-room-decor-color-scheme-trends-2025.jpg.jpg" class="w-100 h-100 object-fit-cover hover-zoom" alt="Renovation Makeover">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 5. OUR DESIGN PROCESS -->
    <section class="py-5" style="background-color: var(--studio-ivory);">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <span class="text-uppercase text-muted small fw-bold" style="letter-spacing: 2px;">METHODOLOGY</span>
                <h2 class="fw-bold display-5 editorial-serif text-dark mt-2">How We Bring Your Space to Life</h2>
                <p class="text-muted">A clear and collaborative process from the first conversation to the final detail.</p>
            </div>

            <div class="row g-4">
                <div class="col-md" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                        <h3 class="text-warning fw-bold fs-2 mb-2">01</h3>
                        <h5 class="fw-bold text-dark mb-2">DISCOVER</h5>
                        <p class="text-muted small mb-0">Tell us about your space, lifestyle, needs and vision.</p>
                    </div>
                </div>
                <div class="col-md" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                        <h3 class="text-warning fw-bold fs-2 mb-2">02</h3>
                        <h5 class="fw-bold text-dark mb-2">PLAN</h5>
                        <p class="text-muted small mb-0">We develop layouts, spatial planning and overall design direction.</p>
                    </div>
                </div>
                <div class="col-md" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                        <h3 class="text-warning fw-bold fs-2 mb-2">03</h3>
                        <h5 class="fw-bold text-dark mb-2">DESIGN</h5>
                        <p class="text-muted small mb-0">We refine materials, furniture, lighting and architectural details.</p>
                    </div>
                </div>
                <div class="col-md" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                        <h3 class="text-warning fw-bold fs-2 mb-2">04</h3>
                        <h5 class="fw-bold text-dark mb-2">EXECUTE</h5>
                        <p class="text-muted small mb-0">We coordinate implementation and bring the approved design to life.</p>
                    </div>
                </div>
                <div class="col-md" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                        <h3 class="text-warning fw-bold fs-2 mb-2">05</h3>
                        <h5 class="fw-bold text-dark mb-2">STYLE</h5>
                        <p class="text-muted small mb-0">We complete the space with furniture, artwork and final styling details.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. SERVICE PACKAGES SECTION -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <span class="text-uppercase text-muted small fw-bold" style="letter-spacing: 2px;">INVESTMENT TIERS</span>
                <h2 class="fw-bold display-5 editorial-serif text-dark mt-2">Choose the level of support you need.</h2>
            </div>

            <div class="row g-4 align-items-stretch">
                
                <!-- Package 1 -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-light h-100 d-flex flex-column">
                        <h4 class="fw-bold text-dark mb-1">ESSENTIAL</h4>
                        <p class="text-muted small mb-4">Focused design support</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 mb-4 text-muted small flex-grow-1">
                            <li>✓ Initial Consultation</li>
                            <li>✓ Space planning & layout</li>
                            <li>✓ Design direction concepts</li>
                            <li>✓ Material suggestions</li>
                            <li>✓ Basic furniture recommendations</li>
                        </ul>
                        <button class="btn btn-dark rounded-pill py-2 w-100 fw-semibold mt-auto" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Essential Package">
                            Request a Quote &rarr;
                        </button>
                    </div>
                </div>

                <!-- Package 2 (Most Popular Highlighted) -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="card border-2 border-warning shadow rounded-4 p-4 bg-white h-100 d-flex flex-column position-relative">
                        <span class="position-absolute top-0 start-50 translate-middle badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold">Most Popular</span>
                        <h4 class="fw-bold text-dark mb-1 mt-2">SIGNATURE</h4>
                        <p class="text-muted small mb-4">Complete interior design solution</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 mb-4 text-muted small flex-grow-1">
                            <li>✓ Everything in Essential</li>
                            <li>✓ 3D spatial visualization</li>
                            <li>✓ Complete material curation</li>
                            <li>✓ Bespoke furniture selection</li>
                            <li>✓ Comprehensive lighting plan</li>
                            <li>✓ Styling direction</li>
                        </ul>
                        <button class="btn btn-warning text-dark rounded-pill py-2 w-100 fw-bold mt-auto shadow-sm" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Signature Package">
                            Start Your Project &rarr;
                        </button>
                    </div>
                </div>

                <!-- Package 3 -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-light h-100 d-flex flex-column">
                        <h4 class="fw-bold text-dark mb-1">BESPOKE</h4>
                        <p class="text-muted small mb-4">End-to-end luxury interior design</p>
                        <ul class="list-unstyled d-flex flex-column gap-2 mb-4 text-muted small flex-grow-1">
                            <li>✓ Complete interior architecture</li>
                            <li>✓ Custom furniture engineering</li>
                            <li>✓ Detailed technical drawings</li>
                            <li>✓ Full project coordination</li>
                            <li>✓ On-site installation support</li>
                            <li>✓ Final turnkey styling</li>
                        </ul>
                        <button class="btn btn-dark rounded-pill py-2 w-100 fw-semibold mt-auto" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Bespoke Package">
                            Talk to Our Team &rarr;
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 7. FREQUENTLY ASKED QUESTIONS (FAQ) -->
    <section class="py-5" style="background-color: var(--studio-ivory);">
        <div class="container py-5" style="max-width: 900px;">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <span class="text-uppercase text-muted small fw-bold" style="letter-spacing: 2px;">COMMON INQUIRIES</span>
                <h2 class="fw-bold display-5 editorial-serif text-dark mt-2">Frequently Asked Questions</h2>
            </div>

            <div class="accordion shadow-sm rounded-4 overflow-hidden border-0" id="faqAccordion" data-aos="fade-up" data-aos-duration="1000">
                
                <!-- FAQ 1 -->
                <div class="accordion-item border-0 border-bottom">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button fw-bold text-dark py-4 px-4 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How does the interior design process work?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show bg-white" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body px-4 pb-4 text-muted">
                            Our process moves across 5 distinct milestones: Discovery of your lifestyle and vision, Planning of spatial layouts, Detailed Design concepts, Execution coordination, and Final Turnkey Styling.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item border-0 border-bottom">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed fw-bold text-dark py-4 px-4 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How long does an interior design project usually take?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse bg-white" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body px-4 pb-4 text-muted">
                            Depending on the scope (ranging from single-room curation to full estate architecture), timelines typically span between 6 weeks to 6 months from initial discovery to final handover.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="accordion-item border-0 border-bottom">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed fw-bold text-dark py-4 px-4 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Do you provide 3D visualizations?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse bg-white" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body px-4 pb-4 text-muted">
                            Yes, under our Signature and Bespoke packages, we provide photorealistic 3D architectural renders so you can experience your future space before execution begins.
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed fw-bold text-dark py-4 px-4 bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Can I book an initial consultation?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse bg-white" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body px-4 pb-4 text-muted">
                            Absolutely. You can easily reserve a private tour or consultation by clicking any "Book a Consultation" button across our website.
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