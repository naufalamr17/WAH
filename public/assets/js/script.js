// ============================
// Custom JS - Yayasan WAH
// ============================

document.addEventListener('DOMContentLoaded', function () {

    // --- AOS Initialization ---
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 80,
    });

    // --- Navbar Scroll Effect ---
    const navbar = document.getElementById('navbar');
    const isHomePage = document.body.classList.contains('page-home');

    function handleNavbarScroll() {
        if (!navbar) return;
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
        } else {
            if (isHomePage) {
                navbar.classList.remove('navbar-scrolled');
            }
        }
    }

    // If not home page, always show solid navbar
    if (!isHomePage && navbar) {
        navbar.classList.add('navbar-inner');
    }

    window.addEventListener('scroll', handleNavbarScroll);
    handleNavbarScroll();

    // --- Mobile Menu Toggle ---
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuCloseBtn = document.getElementById('mobile-menu-close');

    function closeMobileMenu() {
        mobileMenu.classList.remove('mobile-menu-open');
        if (mobileMenuBtn.querySelector('.hamburger-lines')) {
            mobileMenuBtn.querySelector('.hamburger-lines').classList.remove('hamburger-active');
        }
        document.body.style.overflow = '';
    }

    function openMobileMenu() {
        mobileMenu.classList.add('mobile-menu-open');
        if (mobileMenuBtn.querySelector('.hamburger-lines')) {
            mobileMenuBtn.querySelector('.hamburger-lines').classList.add('hamburger-active');
        }
        document.body.style.overflow = 'hidden';
    }

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function () {
            if (mobileMenu.classList.contains('mobile-menu-open')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });

        if (mobileMenuCloseBtn) {
            mobileMenuCloseBtn.addEventListener('click', closeMobileMenu);
        }

        // Close mobile menu on link click
        mobileMenu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', closeMobileMenu);
        });
    }

    // --- Counter Animation ---
    const counters = document.querySelectorAll('[data-counter]');

    function animateCounter(el) {
        const target = parseInt(el.getAttribute('data-counter'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;

        function update() {
            current += step;
            if (current >= target) {
                el.textContent = target;
                // Add suffix if exists
                const suffix = el.getAttribute('data-suffix');
                if (suffix) el.textContent += suffix;
            } else {
                el.textContent = Math.floor(current);
                requestAnimationFrame(update);
            }
        }
        update();
    }

    // Use Intersection Observer for counters
    if (counters.length > 0) {
        const counterObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(function (counter) {
            counterObserver.observe(counter);
        });
    }

    // --- Gallery Swiper ---
    const gallerySwiper = document.querySelector('.gallery-swiper');
    if (gallerySwiper) {
        new Swiper('.gallery-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
            },
        });
    }

    // --- Smooth Scroll for anchor links ---
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            e.preventDefault();
            const target = document.querySelector(targetId);
            if (target) {
                const navHeight = navbar ? navbar.offsetHeight : 0;
                const targetPosition = target.getBoundingClientRect().top + window.scrollY - navHeight;
                window.scrollTo({ top: targetPosition, behavior: 'smooth' });
            }
        });
    });

    // --- Contact Form Handler (Frontend Only) ---
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const btn = contactForm.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-check-circle mr-2"></i>Pesan Terkirim!';
            btn.classList.remove('from-primary-700', 'to-primary-900');
            btn.classList.add('from-green-500', 'to-green-600');
            btn.disabled = true;

            setTimeout(function () {
                btn.innerHTML = originalText;
                btn.classList.remove('from-green-500', 'to-green-600');
                btn.classList.add('from-primary-700', 'to-primary-900');
                btn.disabled = false;
                contactForm.reset();
            }, 3000);
        });
    }

});
