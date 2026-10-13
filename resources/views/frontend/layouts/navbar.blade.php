
 <header class="fixed top-0 left-0 w-full z-50 border-0 bg-white backdrop-blur-md dark:bg-neutral-900/95">
     <div class="bg-secondary-50">
         <div class="max-w-7xl mx-auto px-5 lg:px-8 flex items-center justify-between h-8 text-xs">
             <div class="flex items-center gap-2">
                 <span class="font-bold text-neutral-500 bg-secondary-100 px-2 py-0.5 rounded tracking-wide">RTO
                     46173</span>
                 <span class="hidden sm:inline">Australian Registered Training Organisation |
                     ASQA &amp; AQF
                     Compliant</span>
             </div>
             <div class="flex items-center gap-4 font-medium">
                 <span class="text-neutral-500">ACN: 666 035 730</span>
                 <span class="flex items-center gap-1 text-brand-500 font-semibold">
                    <span
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
                     <img src="{{ asset('site-logo.png') }}" alt="Nubex College" class="h-10 w-auto"
                         width="123" height="114">
                     <div class="hidden sm:block leading-tight">
                         <div class="text-brand-600 text-lg">Universal Training</div>
                         <div class="text-[10px] uppercase tracking-[0.25em] text-muted-foreground">Institute</div>
                     </div>
                 </a>
             </div>

             <!-- Desktop Menu -->
             <div class="hidden md:flex items-center gap-4 md:gap-6 lg:gap-8 text-sm font-medium uppercase">
                 {{-- about --}}
                 <a href="{{ route('about') }}"
                     class="relative font-medium transition-all duration-300
                            {{ request()->routeIs('about') ? 'text-brand-600 font-medium after:w-full' : 'text-neutral-600 hover:text-brand-600 after:w-0 hover:after:w-full' }}
                            after:absolute after:left-0 after:-bottom-1.5
                            after:h-0.5 after:bg-brand-600 after:transition-all after:duration-300">
                     About Us
                 </a>

                 {{-- Courses --}}
                 <a href="#" id="dropdownHoverButton" data-dropdown-toggle="dropdownHover"
                     data-dropdown-trigger="hover"
                     class="flex items-center relative font-medium transition-all duration-300
                        {{ request()->routeIs('courses.*') ? 'text-brand-600 font-medium after:w-full' : 'text-neutral-600 hover:text-brand-600 after:w-0 hover:after:w-full' }}
                        after:absolute after:left-0 after:-bottom-1.5
                        after:h-0.5 after:bg-brand-600 after:transition-all after:duration-300"
                     type="button">

                     Our Courses

                     <svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" fill="none" viewBox="0 0 24 24">

                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="m19 9-7 7-7-7" />

                     </svg>
                 </a>


                 {{-- Courses Dropdown --}}
                 <div id="dropdownHover" class="z-10 hidden top-full left-0 w-full bg-white shadow-xl">

                     <div
                         class="max-w-7xl mx-auto px-4 md:px-6 py-5 md:py-6 text-[#1C2826] font-sans antialiased">

                         <div
                             class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10 border-t border-brand-300 pt-4">

                            gfgfgfg

                         </div>

                     </div>

                 </div>

                 {{-- international --}}
                 <a href="{{ route('international') }}"
                     class="relative font-medium transition-all duration-300
                        {{ request()->routeIs('international') ? 'text-brand-600 font-medium after:w-full' : 'text-neutral-600 hover:text-brand-600 after:w-0 hover:after:w-full' }}
                        after:absolute after:left-0 after:-bottom-1.5
                        after:h-0.5 after:bg-brand-600 after:transition-all after:duration-300">
                     International
                 </a>
                 {{-- Students --}}


                 <a href="#" id="studentHoverButton" data-dropdown-toggle="studentHover"
                     data-dropdown-trigger="hover"
                     class="flex items-center relative font-medium transition-all duration-300
                            {{ request()->routeIs('') ? 'text-brand-600 font-medium after:w-full' : 'text-neutral-600 hover:text-brand-600 after:w-0 hover:after:w-full' }}
                            after:absolute after:left-0 after:-bottom-1.5
                            after:h-0.5 after:bg-brand-600 after:transition-all after:duration-300"
                     type="button">
                     Students
                     <svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         width="24" height="24" fill="none" viewBox="0 0 24 24">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="m19 9-7 7-7-7" />
                     </svg>
                 </a>

                 <div id="studentHover" class="z-10 hidden top-full left-0 w-80 rounded-lg bg-white shadow-lg">
                     <ul class="grid grid-cols-1 px-3 py-5 text-sm font-medium uppercase"
                         aria-labelledby="studentHoverButton">

                         <li class="max-w-[90%]">
                             <a href="{{ route('student-support') }}"
                                 class="block w-full rounded-md p-2  text-gray-700 transition-colors hover:bg-gray-100 hover:text-brand-600">
                                 Student Support
                             </a>
                         </li>
                         <li class="max-w-[90%]">
                             <a href="{{ route('student-resources') }}"
                                 class="block w-full rounded-md p-2  text-gray-700 transition-colors hover:bg-gray-100 hover:text-brand-600">
                                 Student Resources
                             </a>
                         </li>
                         <li class="max-w-[90%]">
                             <a href="{{ route('admission-fees') }}"
                                 class="block w-full rounded-md p-2  text-gray-700 transition-colors hover:bg-gray-100 hover:text-brand-600">
                                 Fees & Charges
                             </a>
                         </li>
                         <li class="max-w-[90%]">
                             <a href="{{ route('faqs') }}"
                                 class="block w-full rounded-md p-2  text-gray-700 transition-colors hover:bg-gray-100 hover:text-brand-600">
                                 FAQ
                             </a>
                         </li>

                     </ul>
                 </div>

                 {{-- Agents --}}
                 <a href="{{ route('agent-register') }}"
                     class="relative font-medium transition-all duration-300
                            {{ request()->routeIs('agent-register') ? 'text-brand-600 font-medium after:w-full' : 'text-neutral-600 hover:text-brand-600 after:w-0 hover:after:w-full' }}
                            after:absolute after:left-0 after:-bottom-1.5
                            after:h-0.5 after:bg-brand-600 after:transition-all after:duration-300">
                     Agents
                 </a>


             </div>

             <div class="flex items-center gap-4 lg:gap-6">
                 <a href="{{ route('eligibility') }}"
                     class="hidden md:flex text-sm uppercase bg-brand-600 text-white px-4 py-2 lg:px-6 lg:py-2.5 rounded-lg font-medium hover:bg-brand-600 transition">
                     Get In Touch
                 </a>
             </div>
         </div>

     </nav>

     <!-- Mobile Menu -->
     <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-slate-200 shadow-lg">

         <div class="flex flex-col px-6 py-5 space-y-3 text-base font-medium">
             <a href="{{ route('about') }}"
                 class="{{ request()->routeIs('about') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">About
                 Us</a>
             <a href="{{ route('courses.index') }}"
                 class="{{ request()->routeIs('courses.index') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">Our
                 Courses</a>
             <a href="{{ route('international') }}"
                 class="{{ request()->routeIs('international') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">International
                 Students</a>
             <a href="{{ route('student-support') }}"
                 class="{{ request()->routeIs('student-support') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">Students</a>
             <a href="{{ route('agent-register') }}"
                 class="{{ request()->routeIs('agent-register') ? 'text-neutral-600 font-medium' : 'text-neutral-600' }}">Agents</a>


             <div class="flex items-center justify-between mt-6">

                 <a href="{{ route('eligibility') }}"
                     class="text-sm uppercase bg-brand-600 text-white px-4 py-2 lg:px-6 lg:py-2.5 rounded-lg font-medium hover:bg-brand-600 transition">
                     Get In Touch
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
