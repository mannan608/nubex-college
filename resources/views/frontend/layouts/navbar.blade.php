<header class="fixed top-0 left-0 w-full z-50 border-0 bg-white backdrop-blur-md dark:bg-neutral-900/95">
    <div class="bg-surface-container-low border-b border-surface-container/60">
        <div class="max-w-7xl mx-auto px-5 lg:px-8 flex items-center justify-between h-8 text-xs">
            <div class="flex items-center gap-2">
                <span class="font-bold text-primary bg-primary-fixed/60 px-2 py-0.5 rounded tracking-wide">RTO
                    46173</span>
                <span class="text-on-surface-variant text-xs font-medium hidden sm:inline">Australian Registered Training
                    Organisation |
                    ASQA &amp; AQF
                    Compliant</span>
            </div>
            <div class="flex items-center gap-4 text-on-surface-variant font-medium">
                <span>ACN: 666 035 730</span>
                <span class="flex items-center gap-1 text-brand-600 font-semibold"><span
                        class="material-symbols-outlined text-sm!">verified</span>
                    Nationally Recognised</span>
            </div>
        </div>
    </div>

    <nav class="max-w-7xl mx-auto px-5 lg:px-8">

        <div class="flex justify-between items-center h-18 md:h-20">
            <!-- Mobile Menu Button -->
            <button id="menuBtn" class="md:hidden">

                <!-- Hamburger -->
                <svg id="menuOpenIcon" class="w-7 h-7 text-neutral-600" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>

                <!-- Close -->
                <svg id="menuCloseIcon" class="hidden w-7 h-7 text-neutral-600" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>

            </button>
            <!-- Logo -->
            <div class="p-1.5 flex items-center gap-2">
                <a href="/" class="flex items-center gap-3 group font-semibold">
                    <img src="{{ asset('logo.png') }}" alt="Nubex College" class="h-10 w-auto" width="123"
                        height="114">
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-1 text-xs font-bold uppercase">

                <a href="{{ route('home') }}"
                    class="px-4 py-2 rounded-lg transition-colors
                    {{ request()->routeIs('home') ? 'font-heading text-primary bg-surface-container' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }}">
                    Home
                </a>

                <a href="qualifications"
                    class="px-4 py-2 rounded-lg transition-colors
                     {{ request()->routeIs('qualifications') ? 'font-heading text-primary bg-surface-container' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }}">
                    Qualifications
                </a>

                <a href="#online-study"
                    class="px-4 py-2 rounded-lg transition-colors
                    {{ request()->routeIs('online-study') ? 'font-heading text-primary bg-surface-container' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }}">
                    Online Study
                </a>

                <a href="{{ route('about') }}"
                    class="px-4 py-2 rounded-lg transition-colors
                     {{ request()->routeIs('about') ? 'font-heading text-primary bg-surface-container' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }}">
                    About Us
                </a>

                <a href="{{ route('contact') }}"
                    class="px-4 py-2 rounded-lg transition-colors
                     {{ request()->routeIs('contact') ? 'font-heading text-primary bg-surface-container' : 'text-on-surface-variant hover:text-primary hover:bg-surface-container-low' }}">
                    Contact Us
                </a>

            </div>

            <div class="flex items-center gap-4 lg:gap-6">
                <a href="{{ route('eligibility') }}"
                    class="hidden md:flex text-xs uppercase bg-brand-600 text-white px-4 py-2 lg:px-6 lg:py-2.5 rounded-lg font-medium hover:bg-brand-600 transition">
                    Check Eligibility
                </a>
                {{-- <div
                    class="w-9 h-9 rounded-full bg-surface-container text-primary flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[20px]!">person</span>
                </div> --}}
            </div>
        </div>

    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-slate-200 shadow-lg">

        <div class="flex flex-col px-6 py-5 space-y-3 text-sm font-medium">
            <a href="{{ route('about') }}"
                class="{{ request()->routeIs('about') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">About
                Us</a>
            <a href="{{ route('qualifications') }}"
                class="{{ request()->routeIs('qualifications') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">Our
                Qualifications</a>
            <a href=""
                class="{{ request()->routeIs('online-study') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">Online Study</a>
            <a href=""
                class="{{ request()->routeIs('student-support') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">Students</a>
            <a href="{{ route('contact') }}"
                class="{{ request()->routeIs('agent-register') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">Contact Us</a>


            <div class="flex items-center justify-between mt-6">

                <a href="{{ route('eligibility') }}"
                    class="text-sm uppercase bg-brand-600 text-white px-4 py-2 lg:px-6 lg:py-2.5 rounded-lg font-medium hover:bg-brand-600 transition">
                    Check Eligibility
                </a>

            </div>
        </div>
    </div>
</header>
<script>
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    const openIcon = document.getElementById('menuOpenIcon');
    const closeIcon = document.getElementById('menuCloseIcon');

    menuBtn.addEventListener('click', () => {

        mobileMenu.classList.toggle('hidden');

        if (mobileMenu.classList.contains('hidden')) {
            openIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        } else {
            openIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        }

    });
</script>
