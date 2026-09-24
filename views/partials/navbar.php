<?php
// views/partials/navbar.php
if (session_status() === PHP_SESSION_NONE) {
    
}
?>s
<nav class="navbar navbar-expand-lg fixed-top my-3 mx-auto px-4 glass-navbar" data-aos="fade-down" data-aos-duration="1000">
    <div class="container-fluid">
        <!-- Brand / Logo -->
        <a class="navbar-brand fw-bold text-dark fs-5 d-flex align-items-center gap-2" href="index.php">
            <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-dark text-white shadow-sm" style="width: 35px; height: 35px; font-weight: 900; font-size: 0.9rem;">D</span>
            <span style="letter-spacing: 1px;">D.<span style="color: #f1cb10 !important;">STUDIO</span></span>
        </a>
        
        <!-- Mobile Toggle Button (Three-Bar Lines Menu Bar) -->
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navbar Links & Mobile User Section -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav align-items-center gap-4 py-3 py-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Connect</a>
                </li>
            </ul>

            <!-- Mobile View Only: User Name / Logout / Booking Button inside Hamburger Menu -->
            <div class="d-lg-none text-center mt-3 pt-3 border-top w-100">
                <?php if (isset($_SESSION['user_name'])): ?>
                    <div class="fw-bold text-dark mb-2" style="font-size: 0.9rem;">
                        ✦ Hello, <?php echo htmlspecialchars($_SESSION['user_name']); ?>
                    </div>
                    <a href="../logout.php" class="text-danger fw-semibold small text-decoration-none">Logout</a>
                <?php else: ?>
                    <button class="btn btn-dark rounded-pill px-4 py-2 w-100 shadow-sm text-sm" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="General Consultation">
                        Reserve Consultation
                    </button>
                <?php endif; ?>
            </div>
        </div>

        <!-- Desktop Right Side Booking Button / Session User Name Display -->
        <div class="d-none d-lg-flex align-items-center gap-2">
            <?php if (isset($_SESSION['user_name'])): ?>
                <span class="fw-bold text-dark px-4 py-2 rounded-pill bg-light border shadow-sm" style="font-size: 0.85rem;">
                    ✦ Hello, <?php echo htmlspecialchars($_SESSION['user_name']); ?>
                </span>
                <a href="../logout.php" class="text-muted small text-decoration-none ms-2">Logout</a>
            <?php else: ?>
                <button class="btn btn-dark-custom rounded-pill px-4 py-2 shadow-sm text-sm" data-bs-toggle="modal" data-bs-target="#bookingModal" data-design="General Consultation">
                    Reserve Consultation
                </button>
            <?php endif; ?>
        </div>
    </div>
</nav>

<!-- Custom CSS: Desktop normal rahega, sirf Mobile screen par links yellow aur hover/click par black honge -->
<style>
    @media (max-width: 991.98px) {
        .glass-navbar .nav-link {
            color: #f1cb10 !important;
            font-weight: 600;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        .glass-navbar .nav-link:hover,
        .glass-navbar .nav-link:focus,
        .glass-navbar .nav-link.active {
            color: #20211F !important;
            transform: translateY(-2px);
        }
    }
</style>