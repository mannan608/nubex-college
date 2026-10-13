    <!-- Comprehensive Footer -->
    <footer class="w-full bg-brand-950 ">
        <div class="max-w-7xl mx-auto px-4 md:px-8 py-12 md:py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 pb-12 border-b-2 border-brand-300">
                <div class="lg:col-span-2 flex flex-col gap-4">
                    <div class="flex items-center gap-2">
                       <a href="/" class="flex items-center gap-3 group font-semibold">
                        <img src="{{ asset('site-logo.png') }}"  alt="Nubex College" class="h-10 w-auto" width="123" height="114">
                        <div class="leading-tight">
                            <div class="text-white text-lg">Universal Training</div>
                            <div class="text-[10px] uppercase tracking-[0.25em] text-white">Institute</div>
                        </div>
                    </a>
                    </div>
                    <p class="text-sm text-[#a5adb1] max-w-md leading-relaxed">
                        Nubex College delivers accredited vocational training and pathway programs with
                        rigorous academic integrity, hands-on workshop learning, and high-employability outcomes.
                    </p>
                    <div class="flex flex-wrap gap-2 pt-1">
                        <div
                            class="px-2.5 py-1 bg-white border-2 border-brand-300 rounded  text-[10px] uppercase font-bold">
                            ASQA Regulated</div>
                        <div
                            class="px-2.5 py-1 bg-white border-2 border-brand-300 rounded  text-[10px] uppercase font-bold">
                            CRICOS 04111E</div>
                        <div
                            class="px-2.5 py-1 bg-white border-2 border-brand-300 rounded  text-[10px] uppercase font-bold">
                            RTO Provider 45975</div>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <h4
                        class="font-display font-bold text-base uppercase tracking-tight text-white border-b-2 border-brand-300 pb-1">
                        Explore
                    </h4>
                    <ul class="flex flex-col gap-1.5  text-sm">
                        <li class="text-[#a5adb1] hover:text-white transition-colors"><a
                                href="{{ route('about') }}">About UTI</a></li>
                        <li class="text-[#a5adb1] hover:text-white transition-colors"><a href="{{ route('courses.index') }}">Course Finder</a></li>
                        <li class="text-[#a5adb1] hover:text-white transition-colors"><a
                                href="{{ route('faqs') }}">Explore FAQ</a></li>
                        <li class="text-[#a5adb1] hover:text-white transition-colors"><a
                                href="{{ route('agent-register') }}">Become an Agents</a></li>
                        <li class="text-[#a5adb1] hover:text-white transition-colors"><a
                                href="{{ route('international') }}">International Admissions</a></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-3">
                    <h4
                        class="font-display font-bold text-base uppercase tracking-tight text-white border-b-2 border-brand-300 pb-1">
                        Resources
                    </h4>
                    <ul class="flex flex-col gap-1.5  text-sm">
                        <li class="text-[#a5adb1] hover:text-white transition-colors"><a href="{{ route('student-resources')}}">Student Handbook</a></li>
                        <li class="text-[#a5adb1] hover:text-white transition-colors"><a href="{{ route('student-support')}}">Student Support</a></li>
                        <li class="text-[#a5adb1] hover:text-white transition-colors"><a href="#prospectus">ESOS
                                Framework &amp; Visas</a></li>
                        <li class="text-[#a5adb1] hover:text-white transition-colors"><a href="{{ route('admission-fees')}}">Fees & Charges</a></li>
                        <li class="text-[#a5adb1] hover:text-white transition-colors"><a
                                href="{{ route('contact')}}">Consultation &amp; Tours</a></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-3">
                    <h4
                        class="font-display font-bold text-base uppercase tracking-tight text-white border-b-2 border-brand-300 pb-1">
                        Sydney Campus
                    </h4>
                    <div class="flex flex-col gap-1 text-sm text-[#a5adb1]">
                        <p><strong class="text-white">Address:</strong> Level 1, 410 Church Street, Parramatta, NSW
                            2150 Australia</p>
                        <p><strong class="text-white">Phone:</strong> +61 2 8677 3600</p>
                        <p><strong class="text-white">Email:</strong> admissions@uti.edu.au</p>
                    </div>
                </div>
            </div>
            <div
                class="pt-6 flex flex-col md:flex-row items-center justify-between gap-4  text-xs text-[#a5adb1]">
                <p>© 2025 Nubex College (UTI) Pty Ltd. All Rights Reserved. National Provider No: 45975 |
                    CRICOS: 04111E.</p>
                <div class="flex items-center gap-4 uppercase">
                    <a class="hover:text-white transition-colors" href="#">Privacy Policy</a>
                    <a class="hover:text-white transition-colors" href="#">ESOS Compliance</a>
                    <a class="hover:text-white transition-colors" href="#">Complaints &amp; Appeals</a>
                </div>
            </div>
        </div>
    </footer>