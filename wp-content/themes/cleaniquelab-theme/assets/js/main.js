/**
 * Cleanique Lab Main Interactive JavaScript
 *
 * @package CleaniqueLab
 */

document.addEventListener('DOMContentLoaded', function () {
    // =========================================================================
    // 1. Sticky Header Shadow on Scroll
    // =========================================================================
    const header = document.getElementById('site-header');
    if (header) {
        const handleScroll = function () {
            if (window.scrollY > 25) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        };
        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll();
    }

    // =========================================================================
    // 2. Mobile Navigation Drawer & Backdrop
    // =========================================================================
    const navToggle = document.getElementById('nav-toggle');
    const drawerClose = document.getElementById('drawer-close');
    const mobileDrawer = document.getElementById('mobile-drawer');
    const drawerBackdrop = document.getElementById('drawer-backdrop');

    function openDrawer() {
        if (!mobileDrawer) return;
        mobileDrawer.classList.add('is-active');
        mobileDrawer.setAttribute('aria-hidden', 'false');
        if (drawerBackdrop) drawerBackdrop.classList.add('is-active');
        if (navToggle) navToggle.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
    }

    function closeDrawer() {
        if (!mobileDrawer) return;
        mobileDrawer.classList.remove('is-active');
        mobileDrawer.setAttribute('aria-hidden', 'true');
        if (drawerBackdrop) drawerBackdrop.classList.remove('is-active');
        if (navToggle) navToggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    }

    if (navToggle) {
        navToggle.addEventListener('click', function (e) {
            e.stopPropagation();
            if (mobileDrawer.classList.contains('is-active')) {
                closeDrawer();
            } else {
                openDrawer();
            }
        });
    }

    if (drawerClose) {
        drawerClose.addEventListener('click', closeDrawer);
    }

    if (drawerBackdrop) {
        drawerBackdrop.addEventListener('click', closeDrawer);
    }

    // Close drawer on Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && mobileDrawer && mobileDrawer.classList.contains('is-active')) {
            closeDrawer();
        }
    });

    // =========================================================================
    // 3. Pricelist Category Filter Tabs
    // =========================================================================
    const tabButtons = document.querySelectorAll('.cq-tab-btn');
    const tableRows = document.querySelectorAll('.cq-price-table tbody tr');

    if (tabButtons.length > 0 && tableRows.length > 0) {
        tabButtons.forEach(button => {
            button.addEventListener('click', function () {
                tabButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                const filterValue = this.getAttribute('data-filter');

                tableRows.forEach(row => {
                    const rowCategory = row.getAttribute('data-category');
                    if (filterValue === 'all' || rowCategory === filterValue) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        });
    }

    // =========================================================================
    // 4. Interactive FAQ Accordion
    // =========================================================================
    const faqItems = document.querySelectorAll('.cq-faq-item');
    if (faqItems.length > 0) {
        faqItems.forEach(item => {
            const questionBtn = item.querySelector('.cq-faq-question');
            if (questionBtn) {
                questionBtn.addEventListener('click', function () {
                    const isOpen = item.classList.contains('is-open');

                    // Close all other items
                    faqItems.forEach(otherItem => {
                        otherItem.classList.remove('is-open');
                        const otherBtn = otherItem.querySelector('.cq-faq-question');
                        if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
                    });

                    // Toggle current item
                    if (!isOpen) {
                        item.classList.add('is-open');
                        questionBtn.setAttribute('aria-expanded', 'true');
                    }
                });
            }
        });
    }

    // =========================================================================
    // 5. Edge-Docked Privacy & Cookie Tip Widget (Slide-out Drawer)
    // =========================================================================
    const cookieWidget = document.getElementById('cq-cookie-widget');
    const cookieTrigger = document.getElementById('cq-cookie-trigger');
    const cookieCard = document.getElementById('cq-cookie-card');
    const cookieCardClose = document.getElementById('cq-cookie-card-close');
    const cookieAcceptBtn = document.getElementById('cq-cookie-accept');

    if (cookieWidget && cookieCard) {
        const isCookieAccepted = localStorage.getItem('cq_cookie_accepted');

        // Show drawer tip on first visit after 1.5s delay
        if (!isCookieAccepted) {
            setTimeout(function () {
                cookieCard.classList.add('is-open');
                cookieCard.setAttribute('aria-hidden', 'false');
            }, 1500);
        }

        // Toggle drawer when clicking edge tab
        if (cookieTrigger) {
            cookieTrigger.addEventListener('click', function (e) {
                e.stopPropagation();
                cookieCard.classList.toggle('is-open');
                const isOpen = cookieCard.classList.contains('is-open');
                cookieCard.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
            });
        }

        // Close button inside card
        if (cookieCardClose) {
            cookieCardClose.addEventListener('click', function (e) {
                e.stopPropagation();
                cookieCard.classList.remove('is-open');
                cookieCard.setAttribute('aria-hidden', 'true');
            });
        }

        // Accept button
        if (cookieAcceptBtn) {
            cookieAcceptBtn.addEventListener('click', function () {
                localStorage.setItem('cq_cookie_accepted', 'true');
                cookieCard.classList.remove('is-open');
                cookieCard.setAttribute('aria-hidden', 'true');
            });
        }

        // Close drawer when clicking outside
        document.addEventListener('click', function (e) {
            if (!cookieWidget.contains(e.target)) {
                cookieCard.classList.remove('is-open');
                cookieCard.setAttribute('aria-hidden', 'true');
            }
        });
    }
});

// =============================================================================
// 6. Contact Form WhatsApp Generator Function
// =============================================================================
window.cleaniqueSendContactWA = function () {
    const nameInput = document.getElementById('contact-name');
    const interestInput = document.getElementById('contact-interest');
    const messageInput = document.getElementById('contact-message');

    if (!nameInput || !interestInput) return;

    const name = nameInput.value.trim();
    const interest = interestInput.value;
    const notes = messageInput ? messageInput.value.trim() : '';

    if (!name) {
        alert('Mohon isi nama Anda.');
        nameInput.focus();
        return;
    }

    const phone = (typeof cleaniqueData !== 'undefined' && cleaniqueData.whatsappNumber) 
        ? cleaniqueData.whatsappNumber 
        : '6281234567890';

    let text = `Halo Cleanique Lab,\n\n`;
    text += `Saya ingin konsultasi / order produk kebersihan:\n`;
    text += `• Nama / Usaha: ${name}\n`;
    text += `• Kebutuhan: ${interest}\n`;
    if (notes) {
        text += `• Pesan / Catatan: ${notes}\n`;
    }
    text += `\nMohon info katalog lengkap, harga grosir, dan ketentuan pengiriman. Terima kasih.`;

    const waUrl = `https://wa.me/${phone}?text=${encodeURIComponent(text)}`;
    window.open(waUrl, '_blank');
};
