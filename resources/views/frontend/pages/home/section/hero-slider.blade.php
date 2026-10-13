
@props([
    'slides' => [
        [
            'image' => '/frontend-img/hero/slider-3.jpg',
            'alt' => 'Healthcare student learning practical health and support skills',
            'badge' => '● Health',
            'location' => 'Health & Community Services',
            'description' => 'Build practical skills for a rewarding career in health and community services.'
        ],
        [
            'image' => '/frontend-img/hero/slider-4.jpg',
            'alt' => 'Student providing support and care to an older person',
            'badge' => '● Ageing Support',
            'location' => 'Ageing & Community Care',
            'description' => 'Develop the skills to provide quality care and support for older Australians.'
        ],
        [
            'image' => '/frontend-img/hero/slider-5.jpg',
            'alt' => 'Carpentry student working with timber in a practical workshop',
            'badge' => '● Trade in Carpentry',
            'location' => 'Building & Construction',
            'description' => 'Gain hands-on carpentry skills through practical training and industry-focused learning.'
        ],
    ]
])

<div 
    x-data="{
        activeSlide: 0,
        slidesCount: {{ count($slides) }},
        timer: null,
        isPaused: false,
        
        startAutoplay() {
            this.timer = setInterval(() => {
                if (!this.isPaused) {
                    this.nextSlide();
                }
            }, 5500);
        },
        
        stopAutoplay() {
            if (this.timer) clearInterval(this.timer);
        },
        
        nextSlide() {
            this.activeSlide = (this.activeSlide + 1) % this.slidesCount;
        },

        goToSlide(index) {
            this.activeSlide = index;
        }
    }"
    x-init="startAutoplay()"
    @mouseenter="isPaused = true"
    @mouseleave="isPaused = false"
    class="relative w-full h-[340px] md:h-[360px] lg:h-[380px] max-h-[380px] bg-white overflow-hidden select-none"
>
    <!-- Slides Stack Container -->
    <div class="relative w-full h-full">

        @foreach(array_values($slides) as $slide)
            <div 
                x-show="activeSlide === {{ $loop->index }}"
                x-transition:enter="transition-opacity ease-in-out duration-[1400ms]"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-in-out duration-[1400ms]"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="absolute inset-0 w-full h-full"
            >

                <!-- Course Image -->
                <img 
                    src="{{ $slide['image'] }}" 
                    alt="{{ $slide['alt'] }}" 
                    class="w-full h-full object-cover grayscale-10"
                />

                <!-- Top Left Course Badge -->
                <div class="absolute top-4 left-4 z-10">
                    <span class="px-3 py-1 bg-white rounded text-brand-950  text-xs uppercase font-bold tracking-wider">
                        {{ $slide['badge'] }}
                    </span>
                </div>

                <!-- Bottom Right Course Info -->
                <div class="absolute bottom-4 right-4 max-w-[263px] z-10">
                    <div class="p-3 bg-brand-600 text-white rounded-lg flex items-start gap-2.5">

                        <span class="material-symbols-outlined text-secondary-200 text-xl mt-0.5 shrink-0">
                            {{ $loop->index === 0 ? 'health_and_safety' : ($loop->index === 1 ? 'elderly' : 'construction') }}
                        </span>

                        <div class="flex flex-col">
                            <span class=" text-xs uppercase font-bold">
                                {{ $slide['location'] }}
                            </span>

                            <span class="text-[11px] text-secondary-100 leading-tight">
                                {{ $slide['description'] }}
                            </span>
                        </div>

                    </div>
                </div>

            </div>
        @endforeach

    </div>
</div>
