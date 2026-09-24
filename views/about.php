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
    <title>About Us — D.Studio Luxury Interiors</title>
    
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- AOS Animation Library CSS CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="../public/css/style.css">

    <!-- Custom Studio Styles & Editorial Theme (#F7F4EE Ivory Tone) -->
    <style>
        :root {
            --studio-ivory: #F7F4EE;
            --studio-charcoal: #1A1A1A;
            --studio-gold: #C5A059;
            --studio-olive: #4A5320;
        }

        body {
            background-color: var(--studio-ivory) !important;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--studio-charcoal);
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        h1, h2, h3, h4, .editorial-serif {
            font-family: 'Playfair Display', serif;
        }

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
        
        /* Full-Width Interactive Showcase Styling */
        .fullwidth-chip {
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            cursor: pointer;
        }
        .fullwidth-chip.active {
            background: #ffc107 !important;
            color: #111111 !important;
            border-color: #ffc107 !important;
            transform: scale(1.02);
            box-shadow: 0 10px 25px rgba(255, 193, 7, 0.3);
        }
        .fullwidth-slide {
            opacity: 0;
            transform: scale(0.98);
            transition: opacity 0.6s ease-in-out, transform 0.6s ease-in-out;
            position: absolute;
            inset: 0;
            pointer-events: none;
            display: none;
        }
        .fullwidth-slide.active {
            opacity: 1;
            transform: scale(1);
            pointer-events: auto;
            display: block;
        }

        .hover-zoom {
            transition: transform 0.7s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        .hover-zoom:hover {
            transform: scale(1.03);
        }
    </style>
    
    <!-- Force page scroll to start from top on reload & clear hashes -->
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

    <!-- 1. PAGE HERO SECTION -->
    <header class="py-5 position-relative border-bottom" style="margin-top: 80px; background-color: var(--studio-ivory);">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="mb-3">
                        <span class="text-uppercase small fw-bold tracking-widest text-muted" style="letter-spacing: 3px;">✦ ABOUT OUR STUDIO ✦</span>
                        <div style="width: 50px; height: 2px; background-color: #C5A059;" class="mt-2"></div>
                    </div>
                    <h1 class="display-3 fw-bold text-dark mb-4 editorial-serif" style="letter-spacing: -1px; line-height: 1.1;">
                        Designing spaces that feel like home.
                    </h1>
                    <p class="lead text-muted mb-5 fw-light" style="max-width: 520px; line-height: 1.7;">
                        We create thoughtful interiors where architecture, functionality and personal style come together.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <button class="btn btn-dark btn-lg px-4 py-3 rounded-pill fw-semibold shadow-sm" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="General Consultation">
                            Start Your Project &rarr;
                        </button>
                        <a href="#work-gallery" class="btn btn-outline-dark btn-lg px-4 py-3 rounded-pill fw-semibold">
                            Explore Our Work
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="position-relative overflow-hidden rounded-4 shadow-lg" style="height: 520px;">
                        <img src="../public/image/be6bd5ec-2d31-4c86-bf73-865b508c9b44.png" class="w-100 h-100 object-fit-cover hover-zoom" alt="Luxury Interior Hero">
                        <div class="position-absolute bottom-0 start-0 m-4 p-3 bg-white bg-opacity-90 backdrop-blur rounded-3 shadow-sm border border-light">
                            <p class="fw-bold mb-0 text-dark small">Thoughtful Design</p>
                            <span class="text-muted" style="font-size: 0.8rem;">Built Around You</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. OUR STORY SECTION -->
    <section id="our-story" class="py-5 bg-white">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="overflow-hidden rounded-4 shadow-sm" style="height: 480px;">
                        <img src="../public/image/30bc1054-ea15-400c-8fe2-90289098cd55.png" class="w-100 h-100 object-fit-cover hover-zoom" alt="Our Story Studio">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <span class="text-uppercase text-muted fw-bold small" style="letter-spacing: 2px;">OUR APPROACH</span>
                    <h2 class="fw-bold display-5 editorial-serif text-dark mt-2 mb-4">Our Story</h2>
                    <p class="text-muted lh-lg mb-3">
                        We believe a beautiful interior should do more than look good. It should make everyday life easier, more comfortable and more meaningful.
                    </p>
                    <p class="text-muted lh-lg mb-3">
                        From the first sketch to the final styling detail, our studio brings together architecture, interiors, materials, furniture and lighting to create spaces that feel considered from every angle.
                    </p>
                    <p class="text-muted lh-lg mb-4">
                        We work closely with our clients to understand how they live, what they value and how they want their spaces to feel.
                    </p>
                    <button class="btn btn-link p-0 text-dark fw-bold text-decoration-none" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="Process Discussion">
                        Discover Our Process &rarr;
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. GALLERY SECTION -->
    <section id="work-gallery" class="py-5 bg-light border-top border-bottom">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <span class="text-uppercase text-primary fw-bold small tracking-wider" style="letter-spacing: 2px;">Portfolio Showcase</span>
                <h2 class="fw-bold display-5 editorial-serif text-dark mt-2">Curated Masterpieces Gallery</h2>
                <p class="text-muted">A visual journey through 6 of our most prestigious residential and commercial sanctuaries.</p>
            </div>

            <!-- 6 Images Grid Layout -->
            <div class="row g-4">
                
                <!-- Gallery Item 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100 position-relative group">
                        <div class="overflow-hidden" style="height: 320px;">
                            <img src="https://cdn0.weddingwire.in/vendor/4907/3_2/960/jpg/img-7206_15_184907-178895258054110.jpeg" class="w-100 h-100 object-fit-cover hover-zoom" alt="Gallery Image 1">
                        </div>
                        <div class="card-body p-4">
                            <span class="badge bg-warning text-dark mb-2">Penthouse Suite</span>
                            <h4 class="fw-bold fs-5 text-dark mb-1">The Grand Horizon</h4>
                            <p class="text-muted small mb-0">Contemporary luxury living featuring floor-to-ceiling glass and Italian marble.</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100 position-relative group">
                        <div class="overflow-hidden" style="height: 320px;">
                            <img src="https://wisalai.com/api/images/articles/zSrR403ZmxZOhoL1TRhfXrilY3y2/cover-1775598163018" class="w-100 h-100 object-fit-cover hover-zoom" alt="Gallery Image 2">
                        </div>
                        <div class="card-body p-4">
                            <span class="badge bg-warning text-dark mb-2">Villa Sanctuary</span>
                            <h4 class="fw-bold fs-5 text-dark mb-1">Serene Oak Sanctuary</h4>
                            <p class="text-muted small mb-0">Warm organic woods paired with soft linen textures for absolute calm.</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100 position-relative group">
                        <div class="overflow-hidden" style="height: 320px;">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTj1Y1UlfUBFHnW3BPpI3ndvuzDcsVAXTFxL6DaEI7jsi8fdxtUXDRDGpcZ&s=10" class="w-100 h-100 object-fit-cover hover-zoom" alt="Gallery Image 3">
                        </div>
                        <div class="card-body p-4">
                            <span class="badge bg-warning text-dark mb-2">Minimalist Kitchen</span>
                            <h4 class="fw-bold fs-5 text-dark mb-1">Avant-Garde Culinary</h4>
                            <p class="text-muted small mb-0">State-of-the-art modular kitchen architecture engineered for gourmet experiences.</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100 position-relative group">
                        <div class="overflow-hidden" style="height: 320px;">
                            <img src="https://s3-blog.homelane.com/design-ideas/wp-content/uploads/2025/05/23113438/monochromatic-living-room-decor-color-scheme-trends-2025.jpg.jpg" class="w-100 h-100 object-fit-cover hover-zoom" alt="Gallery Image 4">
                        </div>
                        <div class="card-body p-4">
                            <span class="badge bg-warning text-dark mb-2">Executive Lounge</span>
                            <h4 class="fw-bold fs-5 text-dark mb-1">Monochrome Elegance</h4>
                            <p class="text-muted small mb-0">Sophisticated corporate executive lounge blending dark tones with ambient lighting.</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100 position-relative group">
                        <div class="overflow-hidden" style="height: 320px;">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVsSVo5uNROLKNOvMNZJrGPQceVQOy1QKh1U4knN3QEY_nHA-QFCmih2w&s=10" class="w-100 h-100 object-fit-cover hover-zoom" alt="Gallery Image 5">
                        </div>
                        <div class="card-body p-4">
                            <span class="badge bg-warning text-dark mb-2">Urban Loft</span>
                            <h4 class="fw-bold fs-5 text-dark mb-1">Industrial Heritage Loft</h4>
                            <p class="text-muted small mb-0">Exposed brick elements combined with ultra-modern minimalist furniture pieces.</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100 position-relative group">
                        <div class="overflow-hidden" style="height: 320px;">
                            <img src="https://cdn.home-designing.com/wp-content/uploads/2013/09/regal-ballroom.jpg" class="w-100 h-100 object-fit-cover hover-zoom" alt="Gallery Image 6">
                        </div>
                        <div class="card-body p-4">
                            <span class="badge bg-warning text-dark mb-2">Royal Chambers</span>
                            <h4 class="fw-bold fs-5 text-dark mb-1">The Regal Suite</h4>
                            <p class="text-muted small mb-0">Plush velvet textures and warm organic wood accents designed for serene tranquility.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. FULL-WIDTH INTERACTIVE CAROUSEL -->
    <section class="py-5 text-white border-top border-bottom" style="background-color: #111111;" id="autoCarouselSection">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold small mb-2">✦ D.STUDIO PILLARS ✦</span>
                <h2 class="fw-bold display-5 text-white mt-2 editorial-serif">Crafted With Precision</h2>
                <p class="text-white-50">Explore our core architectural pillars. Automatically cycles or click any tab to switch.</p>
            </div>

            <!-- Navigation Buttons / Chips Grid -->
            <div class="row g-3 justify-content-center mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="col-lg-3 col-md-6">
                    <div class="fullwidth-chip active p-3 rounded-pill bg-warning text-dark fw-bold text-center border border-warning shadow-sm" data-index="0">
                        1. Sustainable Sourcing
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fullwidth-chip p-3 rounded-pill bg-transparent text-white fw-semibold text-center border border-secondary" data-index="1">
                        2. Community Focused
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fullwidth-chip p-3 rounded-pill bg-transparent text-white fw-semibold text-center border border-secondary" data-index="2">
                        3. Global Aesthetic Reach
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fullwidth-chip p-3 rounded-pill bg-transparent text-white fw-semibold text-center border border-secondary" data-index="3">
                        4. Award Winning Innovation
                    </div>
                </div>
            </div>

            <!-- Full-Width Active Card Display Area -->
            <div class="position-relative w-100 rounded-4 overflow-hidden shadow-2xl border border-secondary border-opacity-50" style="height: 500px;" id="fullwidthCardContainer">
                
                <!-- Card 1 -->
                <div class="fullwidth-slide active w-100 h-100 position-relative">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGDtMbmbWkoVGCcC7ZGL0KwU7609El3YUCHAi-sgME12slEX6ptMQAulA&s=10" class="w-100 h-100 object-fit-cover" alt="Sustainable Sourcing">
                    <div class="position-absolute inset-0 d-flex flex-column justify-content-end p-5" style="background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.4) 60%, transparent 100%);">
                        <span class="badge bg-warning text-dark w-fit px-3 py-1 rounded-pill fw-bold mb-2">01 • SUSTAINABLE SOURCING</span>
                        <h3 class="fw-bold text-white display-6 mb-2 editorial-serif">Ethically Sourced Organic Materials</h3>
                        <p class="text-white-50 lead mb-0" style="max-width: 700px;">We partner exclusively with local artisans and sustainable quarries to procure timeless woods and natural stones.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="fullwidth-slide w-100 h-100 position-relative">
                    <img src="https://nonprofitquarterly.org/wp-content/uploads/2025/05/Interior-Design-Health-Justice-_-RECO.jpg" class="w-100 h-100 object-fit-cover" alt="Community Focused">
                    <div class="position-absolute inset-0 d-flex flex-column justify-content-end p-5" style="background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.4) 60%, transparent 100%);">
                        <span class="badge bg-warning text-dark w-fit px-3 py-1 rounded-pill fw-bold mb-2">02 • COMMUNITY FOCUSED</span>
                        <h3 class="fw-bold text-white display-6 mb-2 editorial-serif">Designing Spaces for Shared Living</h3>
                        <p class="text-white-50 lead mb-0" style="max-width: 700px;">Building stronger human connections through warm, inviting atmospheres tailored for family gatherings.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="fullwidth-slide w-100 h-100 position-relative">
                    <img src="https://interiosplash.com/wp-content/uploads/2024/10/2-1_11zon-e1727955077986.webp" class="w-100 h-100 object-fit-cover" alt="Global Aesthetic Reach">
                    <div class="position-absolute inset-0 d-flex flex-column justify-content-end p-5" style="background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.4) 60%, transparent 100%);">
                        <span class="badge bg-warning text-dark w-fit px-3 py-1 rounded-pill fw-bold mb-2">03 • GLOBAL AESTHETIC REACH</span>
                        <h3 class="fw-bold text-white display-6 mb-2 editorial-serif">Connecting Visionaries Worldwide</h3>
                        <p class="text-white-50 lead mb-0" style="max-width: 700px;">Integrating international avant-garde architectural trends into residential masterpieces.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="fullwidth-slide w-100 h-100 position-relative">
                    <img src="https://www.sbid.org/wp-content/uploads/2020/10/Virserius-Studio-Lobby-Public-Spaces-W-Atlanta-Midtown-2-e1603733139235.jpg" class="w-100 h-100 object-fit-cover" alt="Award Winning Innovation">
                    <div class="position-absolute inset-0 d-flex flex-column justify-content-end p-5" style="background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.4) 60%, transparent 100%);">
                        <span class="badge bg-warning text-dark w-fit px-3 py-1 rounded-pill fw-bold mb-2">04 • AWARD WINNING INNOVATION</span>
                        <h3 class="fw-bold text-white display-6 mb-2 editorial-serif">Recognized Excellence in Design</h3>
                        <p class="text-white-50 lead mb-0" style="max-width: 700px;">Awarded for pioneering breakthroughs in luxury minimalism and functional interior intelligence.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. DESIGN PHILOSOPHY SECTION -->
    <section class="py-5" style="background-color: var(--studio-ivory);">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="fw-bold display-5 editorial-serif text-dark mb-2">Our Design Philosophy</h2>
                <p class="text-muted">Good design is beautiful. Great design also makes everyday life better.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-0">
                        <h3 class="text-muted fw-light fs-1 mb-3">01</h3>
                        <h4 class="fw-bold fs-5 text-dark mb-2">Thoughtful Planning</h4>
                        <p class="text-muted small mb-0">Every space begins with careful planning, proportion and functionality. We design around the way people actually live.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-0">
                        <h3 class="text-muted fw-light fs-1 mb-3">02</h3>
                        <h4 class="fw-bold fs-5 text-dark mb-2">Timeless Design</h4>
                        <p class="text-muted small mb-0">We combine contemporary details with timeless materials to create interiors that remain relevant for years to come.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-0">
                        <h3 class="text-muted fw-light fs-1 mb-3">03</h3>
                        <h4 class="fw-bold fs-5 text-dark mb-2">Personal Expression</h4>
                        <p class="text-muted small mb-0">Your home should feel like you. Every palette, material and furniture piece is selected around your personality and lifestyle.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-0">
                        <h3 class="text-muted fw-light fs-1 mb-3">04</h3>
                        <h4 class="fw-bold fs-5 text-dark mb-2">Beauty & Function</h4>
                        <p class="text-muted small mb-0">We believe functionality and aesthetics should work together, creating spaces that are both practical and visually refined.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. STATS SECTION -->
    <section class="py-5 bg-white border-top border-bottom">
        <div class="container py-4">
            <div class="row text-center g-4">
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <h2 class="display-4 fw-bold editorial-serif text-dark mb-1">120+</h2>
                    <p class="text-muted small text-uppercase" style="letter-spacing: 1px;">Projects Completed</p>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <h2 class="display-4 fw-bold editorial-serif text-dark mb-1">95+</h2>
                    <p class="text-muted small text-uppercase" style="letter-spacing: 1px;">Happy Clients</p>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <h2 class="display-4 fw-bold editorial-serif text-dark mb-1">8+</h2>
                    <p class="text-muted small text-uppercase" style="letter-spacing: 1px;">Years of Experience</p>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <h2 class="display-4 fw-bold editorial-serif text-dark mb-1">15+</h2>
                    <p class="text-muted small text-uppercase" style="letter-spacing: 1px;">Design Awards</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. MEET THE TEAM SECTION (Fixed with professional human portraits) -->
    <section class="py-5" style="background-color: var(--studio-ivory);">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="fw-bold display-5 editorial-serif text-dark mb-2">Meet the People Behind the Spaces</h2>
                <p class="text-muted">Design is personal. Our team brings together different perspectives, skills and experiences.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100">
                        <div style="height: 280px;" class="overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=600&auto=format&fit=crop" class="w-100 h-100 object-fit-cover hover-zoom" alt="Alex Morgan">
                        </div>
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bold text-dark mb-1">Alex Morgan</h5>
                            <p class="text-muted small mb-0">Creative Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100">
                        <div style="height: 280px;" class="overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=600&auto=format&fit=crop" class="w-100 h-100 object-fit-cover hover-zoom" alt="Olivia Carter">
                        </div>
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bold text-dark mb-1">Olivia Carter</h5>
                            <p class="text-muted small mb-0">Senior Interior Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100">
                        <div style="height: 280px;" class="overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=600&auto=format&fit=crop" class="w-100 h-100 object-fit-cover hover-zoom" alt="Noah Williams">
                        </div>
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bold text-dark mb-1">Noah Williams</h5>
                            <p class="text-muted small mb-0">Architect & Spatial Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden bg-white h-100">
                        <div style="height: 280px;" class="overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=600&auto=format&fit=crop" class="w-100 h-100 object-fit-cover hover-zoom" alt="Emma Wilson">
                        </div>
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bold text-dark mb-1">Emma Wilson</h5>
                            <p class="text-muted small mb-0">Project Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer & Modal -->
    <?php include 'partials/footer.php'; ?>
    <?php include 'partials/login-modal.php'; ?>

    <!-- JS Scripts & Auto-Move Carousel Logic -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true, offset: 50 });

        // Full-Width Interactive Card Auto-Move & Click Script
        const fullwidthChips = document.querySelectorAll('.fullwidth-chip');
        const fullwidthSlides = document.querySelectorAll('.fullwidth-slide');
        let currentSlideIndex = 0;
        let autoPlayTimer = null;

        function updateSlide(index) {
            fullwidthChips.forEach(c => {
                c.classList.remove('active', 'bg-warning', 'text-dark', 'border-warning');
                c.classList.add('bg-transparent', 'text-white', 'border-secondary');
            });
            fullwidthChips[index].classList.add('active', 'bg-warning', 'text-dark', 'border-warning');
            fullwidthChips[index].classList.remove('bg-transparent', 'text-white', 'border-secondary');

            fullwidthSlides.forEach((slide, idx) => {
                if (idx === index) {
                    slide.classList.add('active');
                } else {
                    slide.classList.remove('active');
                }
            });
        }

        function startAutoPlay() {
            autoPlayTimer = setInterval(() => {
                currentSlideIndex = (currentSlideIndex + 1) % fullwidthChips.length;
                updateSlide(currentSlideIndex);
            }, 3500);
        }

        function stopAutoPlay() {
            clearInterval(autoPlayTimer);
        }

        fullwidthChips.forEach((chip) => {
            chip.addEventListener('click', () => {
                stopAutoPlay();
                currentSlideIndex = parseInt(chip.getAttribute('data-index'));
                updateSlide(currentSlideIndex);
                startAutoPlay();
            });

            chip.addEventListener('mouseenter', stopAutoPlay);
            chip.addEventListener('mouseleave', startAutoPlay);
        });

        startAutoPlay();
    </script>
</body>
</html>