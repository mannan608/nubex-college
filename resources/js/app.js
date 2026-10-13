import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

let homeSwiperLoadPromise = null;
let flatpickrLoadPromise = null;

window.loadFlatpickr = function () {
    if (!flatpickrLoadPromise) {
        flatpickrLoadPromise = Promise.all([
            import('flatpickr'),
            import('flatpickr/dist/flatpickr.min.css'),
        ]).then(([flatpickrModule]) => flatpickrModule.default);
    }

    return flatpickrLoadPromise;
};

async function initHomepageSwipers() {
    if (homeSwiperLoadPromise) {
        return homeSwiperLoadPromise;
    }

    homeSwiperLoadPromise = Promise.all([
        import('swiper'),
        import('swiper/modules'),
        import('swiper/css'),
    ]).then(([swiperModule, modulesModule]) => {
        const Swiper = swiperModule.default;
        const { Autoplay } = modulesModule;

        const configs = [
            ['.myCounsellerSwiper', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 24,
                speed: 600,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    640: { slidesPerView: 1, spaceBetween: 24 },
                    768: { slidesPerView: 2, spaceBetween: 24 },
                    1024: { slidesPerView: 3, spaceBetween: 24 },
                },
            }],
            ['.testimonialSwiper', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 24,
                speed: 600,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    640: { slidesPerView: 1, spaceBetween: 24 },
                    768: { slidesPerView: 2, spaceBetween: 24 },
                    1024: { slidesPerView: 2, spaceBetween: 24 },
                },
            }],
        ];

        configs.forEach(([selector, options]) => {
            document.querySelectorAll(selector).forEach((el) => {
                if (el.dataset.swiperReady === 'true') {
                    return;
                }

                el.dataset.swiperReady = 'true';
                new Swiper(el, {
                    modules: [Autoplay],
                    ...options,
                });
            });
        });
    });

    return homeSwiperLoadPromise;
}

window.initHomepageSwipers = initHomepageSwipers;

document.addEventListener('DOMContentLoaded', function () {
    const swiperTargets = document.querySelectorAll('.myCounsellerSwiper, .testimonialSwiper');

    if (!swiperTargets.length) {
        return;
    }

    const startSwipers = () => {
        void initHomepageSwipers();
    };

    if (!('IntersectionObserver' in window)) {
        startSwipers();
        return;
    }

    const observer = new IntersectionObserver((entries, io) => {
        if (entries.some((entry) => entry.isIntersecting)) {
            io.disconnect();
            startSwipers();
        }
    }, {
        rootMargin: '250px 0px',
        threshold: 0.01,
    });

    swiperTargets.forEach((el) => observer.observe(el));
});

// Lightweight, Production-Ready Scroll Reveal Engine
function initScrollReveals() {
    const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');
    if (!revealElements.length) return;

    // Respect reduced-motion preference
    if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        revealElements.forEach(el => el.classList.add('is-revealed'));
        return;
    }

    if (!('IntersectionObserver' in window)) {
        revealElements.forEach(el => el.classList.add('is-revealed'));
        return;
    }

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-revealed');
                obs.unobserve(entry.target);
            }
        });
    }, {
        root: null,
        rootMargin: '0px 0px -40px 0px',
        threshold: 0.08
    });

    revealElements.forEach(el => {
        // If element is already in viewport on load/refresh, reveal immediately
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight && rect.bottom > 0) {
            el.classList.add('is-revealed');
        } else {
            observer.observe(el);
        }
    });

    // Failsafe timeout: ensure no element remains hidden under slow or blocked observer conditions
    setTimeout(() => {
        document.querySelectorAll('.reveal:not(.is-revealed), .reveal-left:not(.is-revealed), .reveal-right:not(.is-revealed), .reveal-scale:not(.is-revealed)').forEach(el => {
            el.classList.add('is-revealed');
        });
    }, 3500);
}

window.initScrollReveals = initScrollReveals;

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initScrollReveals);
} else {
    initScrollReveals();
}

