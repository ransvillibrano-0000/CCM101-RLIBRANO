<?php
$pageTitle = 'Resources | Group8 Gold';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Libre+Franklin:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="group8-gold.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="nav">
        <div class="container">
            <div class="nav-inner">
                <a href="index.php#top" class="logo">Group8 <span>Gold</span></a>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#services" class="active">Services</a></li>
                    <li><a href="index.php#why-gold">Why Gold</a></li>
                    <li><a href="index.php#contact">Contact</a></li>
                </ul>
                <a href="index.php#contact" class="btn btn-primary nav-cta-btn">Book a Call</a>
                <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Open Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <button class="mobile-menu-close" id="mobileMenuClose" aria-label="Close Menu">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
        <ul class="mobile-nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#services" class="active">Services</a></li>
            <li><a href="index.php#why-gold">Why Gold</a></li>
            <li><a href="index.php#contact">Contact</a></li>
        </ul>
        <div class="mobile-menu-cta">
            <a href="index.php#contact" class="btn btn-primary">Book a Call</a>
        </div>
    </div>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="page-label">Resources</div>
            <h1 class="page-title">Investment <span class="gold">Insights</span></h1>
            <p class="page-desc">Explore our market guidance, portfolio resources, and expert support for building long-term wealth through precious metals.</p>
        </div>
    </section>

    <!-- Templates Section -->
    <section class="templates-section">
        <div class="container">
            <div class="templates-grid">
                <div class="template-card">
                    <div class="template-image">
                        <img src="images/tm-gold-01.jpg" alt="Gold portfolio overview">
                        <div class="template-overlay">
                            <span class="btn btn-primary">Read More</span>
                        </div>
                    </div>
                    <div class="template-info">
                        <div class="template-number">01</div>
                        <h3 class="template-name">Portfolio Strategy</h3>
                        <p class="template-desc">Build a resilient precious metals allocation with guidance on market timing, diversification, and long-term asset protection.</p>
                    </div>
                </div>

                <div class="template-card">
                    <div class="template-image">
                        <img src="images/tm-gold-02.jpg" alt="Bullion buying guidance">
                        <div class="template-overlay">
                            <span class="btn btn-primary">Read More</span>
                        </div>
                    </div>
                    <div class="template-info">
                        <div class="template-number">02</div>
                        <h3 class="template-name">Buying Bullion</h3>
                        <p class="template-desc">Learn what to look for in certified metals, pricing transparency, storage choices, and how to compare coins and bars.</p>
                    </div>
                </div>

                <div class="template-card">
                    <div class="template-image">
                        <img src="images/tm-gold-03.jpg" alt="Secure storage guidance">
                        <div class="template-overlay">
                            <span class="btn btn-primary">Read More</span>
                        </div>
                    </div>
                    <div class="template-info">
                        <div class="template-number">03</div>
                        <h3 class="template-name">Secure Storage</h3>
                        <p class="template-desc">Protect your holdings with insured vaulting, easy access, and expert support for shipments, audits, and storage logistics.</p>
                    </div>
                </div>
            </div>

            <div class="view-more">
                <a href="index.php" class="view-more-link">
                    Return to the main site
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-inner">
                <p class="footer-copy">&copy; 2026 Group8 Gold. All rights reserved.</p>
                <div class="footer-links">
                    <a href="index.php">Home</a>
                    <a href="index.php#services">Services</a>
                    <a href="index.php#why-gold">Why Gold</a>
                    <a href="index.php#contact">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        // Mobile Menu
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
        const mobileMenuClose = document.getElementById('mobileMenuClose');
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-links a');

        function openMobileMenu() {
            mobileMenu.classList.add('open');
            mobileMenuOverlay.classList.add('open');
            mobileMenuBtn.classList.add('active');
            document.body.classList.add('menu-open');
        }

        function closeMobileMenu() {
            mobileMenu.classList.remove('open');
            mobileMenuOverlay.classList.remove('open');
            mobileMenuBtn.classList.remove('active');
            document.body.classList.remove('menu-open');
        }

        mobileMenuBtn.addEventListener('click', openMobileMenu);
        mobileMenuClose.addEventListener('click', closeMobileMenu);
        mobileMenuOverlay.addEventListener('click', closeMobileMenu);

        // Close mobile menu on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeMobileMenu();
            }
        });
    </script>
</body>
</html>
