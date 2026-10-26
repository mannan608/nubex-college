<!-- BEGIN: StudentReviewsBanner -->
<section x-data="studentReviews()" class="bg-brand-500 py-16 text-white relative overflow-hidden"
    data-purpose="reviews-section">
    <!-- Background Glow Accents (Modern Visual Depth) -->
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-secondary-500/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-secondary-400/10 rounded-full blur-3xl pointer-events-none">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Header & Controls Row -->
        <div class="flex flex-col gap-6">

     
        <div class="text-center">
                <span
                    class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-secondary-500/15 text-secondary-300 border border-secondary-500/20 mb-3 tracking-wide uppercase">
                    Testimonials
                </span>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight">
                    Read what our Students have to say
                </h2>
            </div>

        <!-- Stats & Aggregate Badges -->
        <div class="flex flex-wrap justify-center items-center gap-4 sm:gap-6 mb-10">
            <!-- Google Aggregate Badge -->
            <div
                class="flex items-center space-x-3 bg-brand-600/40 border border-brand-400/20 px-4 py-2.5 rounded-xl backdrop-blur-md shadow-inner">
                <div class="w-7 h-7 rounded-full bg-white flex items-center justify-center shadow-sm">
                    <span class="font-black text-sm text-brand-500">G</span>
                </div>
                <div class="text-left">
                    <div class="flex items-center space-x-1.5">
                        <span class="font-bold text-sm leading-none text-white" x-text="stats.google.rating">4.6 out of
                            5</span>
                        <div class="flex text-amber-400 text-xs">★★★★★</div>
                    </div>
                    <span class="text-[11px] text-brand-200" x-text="`Based on ${stats.google.count} reviews`">Based on
                        599 reviews</span>
                </div>
            </div>

            <!-- Facebook Aggregate Badge -->
            <div
                class="flex items-center space-x-3 bg-brand-600/40 border border-brand-400/20 px-4 py-2.5 rounded-xl backdrop-blur-md shadow-inner">
                <div class="w-7 h-7 rounded-full bg-secondary-500 flex items-center justify-center shadow-sm">
                    <span class="font-black text-sm text-brand-950">f</span>
                </div>
                <div class="text-left">
                    <div class="flex items-center space-x-1.5">
                        <span class="font-bold text-sm leading-none text-white"
                            x-text="`${stats.facebook.recommendRate}% recommend`">98% recommend</span>
                        <div class="flex text-amber-400 text-xs">★★★★★</div>
                    </div>
                    <span class="text-[11px] text-brand-200" x-text="`Based on ${stats.facebook.count} reviews`">Based
                        on 356 reviews</span>
                </div>
            </div>
        </div>
           </div>

        <!-- Infinite Continuous Track with Manual Navigation Support -->
        <div class="relative w-full overflow-hidden mb-8 group" @mouseenter="paused = true"
            @mouseleave="paused = false">
            <!-- Horizontal Gradient Edge Fades -->
            <div
                class="absolute left-0 top-0 bottom-0 w-16 bg-gradient-to-r from-brand-500 to-transparent z-10 pointer-events-none">
            </div>
            <div
                class="absolute right-0 top-0 bottom-0 w-16 bg-gradient-to-l from-brand-500 to-transparent z-10 pointer-events-none">
            </div>

            <!-- Sliding Track -->
            <div class="flex gap-5 w-max transition-transform duration-700 ease-out"
                :class="{ 'animate-infinite-scroll': !isManual }"
                :style="isManual ? `transform: translateX(-${currentIndex * scrollAmount}px)` : (paused ?
                    'animation-play-state: paused;' : 'animation-play-state: running;')">
                <!-- Loop over duplicated reviews array for seamless infinite scrolling -->
                <template x-for="(review, index) in displayReviews" :key="index">
                    <div
                        class="w-[290px] sm:w-[330px] shrink-0 bg-brand-600/30 border border-brand-400/20 hover:border-secondary-400/40 rounded-xl p-6 flex flex-col justify-between backdrop-blur-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-secondary-500/5 hover:bg-brand-600/50 group/card">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <!-- Stars -->
                                <div class="flex text-amber-400 text-xs gap-0.5">
                                    <template x-for="i in Number(review.stars)" :key="i">
                                        <span>★</span>
                                    </template>
                                </div>

                                <!-- Platform Tag -->
                                <span class="text-[11px] font-bold px-2 py-0.5 rounded-full"
                                    :class="review.platform === 'Facebook' ?
                                        'bg-secondary-500/20 text-secondary-300 border border-secondary-500/30' :
                                        'bg-white/10 text-brand-100 border border-white/10'"
                                    x-text="review.platform"></span>
                            </div>

                            <!-- Review Text -->
                            <p class="text-xs text-brand-100 line-clamp-4 leading-relaxed mb-6 italic group-hover/card:text-white transition-colors"
                                x-text="`&ldquo;${review.text}&rdquo;`"></p>
                        </div>

                        <div class="pt-4 border-t border-brand-400/10 flex items-end justify-between">
                            <div>
                                <h4 class="text-xs font-bold text-white group-hover/card:text-secondary-300 transition-colors"
                                    x-text="review.name"></h4>
                                <p class="text-[10px] text-brand-300" x-text="review.date"></p>
                            </div>

                            <a class="inline-flex items-center text-[11px] font-semibold text-secondary-400 hover:text-secondary-300 hover:underline gap-1 transition-colors"
                                :href="review.link || '#'">
                                <span>Read more</span>
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </template>
            </div>
            <!-- Navigation Arrow Controls -->
                <button @click="prev()" @mouseenter="paused = true" @mouseleave="paused = false"
                    class="z-20 absolute left-0 top-1/2 -translate-y-1/2 p-3 rounded-full bg-white border border-brand-50 text-brand-600 hover:bg-white hover:text-brand-950  transition-all duration-300 shadow-lg hover:scale-105 active:scale-95 focus:outline-none"
                    aria-label="Previous Reviews">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button @click="next()" @mouseenter="paused = true" @mouseleave="paused = false"
                    class="z-20 absolute right-0 top-1/2 -translate-y-1/2 p-3 rounded-full bg-white border border-brand-50 text-brand-600 hover:bg-white hover:text-brand-950  transition-all duration-300 shadow-lg hover:scale-105 active:scale-95 focus:outline-none"
                    aria-label="Next Reviews">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
        </div>
    

        <!-- Reviews Footer Links -->
        <div class="flex flex-wrap items-center justify-center gap-6 text-xs font-semibold text-brand-200">
            <a class="hover:text-secondary-400 transition-colors flex items-center gap-1 group/link" href="#">
                <span>See all Google reviews</span>
                <svg class="w-3.5 h-3.5 transform group-hover/link:translate-x-0.5 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
            </a>
            <span class="text-brand-400/40">|</span>
            <a class="hover:text-secondary-400 transition-colors flex items-center gap-1 group/link" href="#">
                <span>See all Facebook reviews</span>
                <svg class="w-3.5 h-3.5 transform group-hover/link:translate-x-0.5 transition-transform"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
            </a>
        </div>

    </div>
</section>
<!-- END: StudentReviewsBanner -->

<!-- CSS Keyframes & Color Utilities -->
<style>
    @keyframes infinite-scroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    .animate-infinite-scroll {
        animation: infinite-scroll 30s linear infinite;
    }
</style>

<!-- Alpine.js Component Logic -->
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('studentReviews', () => ({
            paused: false,
            isManual: false,
            currentIndex: 0,
            scrollAmount: 346, // Card width (330px) + Gap (16px)
            manualTimeout: null,

            stats: {
                google: {
                    rating: '4.6 out of 5',
                    count: 599
                },
                facebook: {
                    recommendRate: 98,
                    count: 356
                }
            },

            reviews: [{
                    id: 1,
                    platform: 'Google',
                    stars: 5,
                    text: 'I had an excellent experience studying Certificate IV in Individual Support. The trainers were very professional and always ready to help.',
                    name: 'Nishchal KC',
                    date: 'June 2024',
                    link: '#'
                },
                {
                    id: 2,
                    platform: 'Google',
                    stars: 5,
                    text: 'Highly recommend Nubex College! The trainers and staff are very supportive and helpful throughout the entire qualification process.',
                    name: 'Sirjana Bhattarai',
                    date: 'September 2024',
                    link: '#'
                },
                {
                    id: 3,
                    platform: 'Google',
                    stars: 5,
                    text: 'I recently completed my course at Nubex College including my 120 hours of practical placement. The coordination was seamless and empowering.',
                    name: 'Swodesh Dahal',
                    date: 'May 2024',
                    link: '#'
                },
                {
                    id: 4,
                    platform: 'Facebook',
                    stars: 5,
                    text: 'Good staff and good facilities. The blended online platform made studying and submitting assessments straightforward while working full-time.',
                    name: 'Anupa Bhujel',
                    date: 'May 2024',
                    link: '#'
                },
                {
                    id: 5,
                    platform: 'Google',
                    stars: 5,
                    text: 'The support staff responded instantly whenever I had questions about assignments. Truly grateful for the entire guidance!',
                    name: 'Rohan Shrestha',
                    date: 'August 2024',
                    link: '#'
                },
                {
                    id: 6,
                    platform: 'Facebook',
                    stars: 5,
                    text: 'Exceptional learning environment and very flexible schedules for working students. Would definitely recommend to others.',
                    name: 'Pooja Thapa',
                    date: 'July 2024',
                    link: '#'
                }
            ],

            get displayReviews() {
                // Triple the array to allow uninterrupted manual & auto scrolling
                return [...this.reviews, ...this.reviews, ...this.reviews];
            },

            next() {
                this.enableManualMode();
                this.currentIndex = (this.currentIndex + 1) % this.reviews.length;
            },

            prev() {
                this.enableManualMode();
                this.currentIndex = (this.currentIndex - 1 + this.reviews.length) % this.reviews
                    .length;
            },

            goTo(index) {
                this.enableManualMode();
                this.currentIndex = index;
            },

            enableManualMode() {
                this.isManual = true;
                clearTimeout(this.manualTimeout);
                // Automatically returns back to smooth infinite auto-scroll after 6 seconds of inactivity
                this.manualTimeout = setTimeout(() => {
                    this.isManual = false;
                }, 6000);
            }
        }));
    });
</script>
