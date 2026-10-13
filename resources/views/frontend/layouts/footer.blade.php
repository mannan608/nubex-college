    <!-- Comprehensive Footer -->
    <footer class="w-full bg-white ">
        <div class="max-w-7xl mx-auto px-4 md:px-8 pt-12 mb-6 md:pt-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 pb-6 border-b border-neutral-300">
                <div class="lg:col-span-2 flex flex-col gap-2">
                    <div class="flex items-center gap-2">
                        {{-- brightness-0 invert --}}
                        <a href="/" class="flex items-center gap-3 group font-semibold">
                            <img src="{{ asset('logo.png') }}" alt="Nubex College" class="h-10 w-auto " width="123"
                                height="114">
                        </a>
                    </div>
                    <p class="text-sm text-neutral-500 max-w-md leading-relaxed">
                        Nubex College Pty Ltd is a registered training organisation delivering nationally recognised
                        vocational education and compliant training across Australia.
                    </p>
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div
                            class="px-2.5 py-1 bg-white border border-neutral-300 rounded  text-[10px] uppercase font-bold">
                            ACN: 666 035 730</div>
                        <div
                            class="px-2.5 py-1 bg-white border border-neutral-300 rounded  text-[10px] uppercase font-bold">
                            ABN: 22 666 035 730</div>
                        <div
                            class="px-2.5 py-1 bg-white border border-neutral-300 rounded  text-[10px] uppercase font-bold">
                            RTO 46173</div>
                    </div>
                    <div class="flex gap-2 mt-2">
                        <a class="inline-flex items-center justify-center gap-2 px-3.5 py-2.5 rounded-lg bg-[#25D366] hover:bg-[#20ba59] text-white text-xs font-semibold transition-all shadow-sm"
                            href="https://wa.me/61400000000" rel="noopener noreferrer" target="_blank">
                            <svg class="w-4 h-4 fill-current" viewbox="0 0 24 24">
                                <path
                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z">
                                </path>
                            </svg>
                            <span>WhatsApp Us</span>
                        </a>
                        <a class="inline-flex items-center justify-center gap-2 px-3.5 py-2.5 rounded-lg bg-primary hover:bg-primary-dark text-white text-xs font-semibold transition-all shadow-sm"
                            href="#hero-quick-enquiry">
                            <span class="material-symbols-outlined text-[16px]!">calendar_month</span>
                            <span>Book a Meeting</span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <h4
                        class="font-display font-bold text-base uppercase tracking-tight text-brand-600 border-b border-neutral-300 pb-1">
                        Explore
                    </h4>
                    <ul class="flex flex-col gap-1.5  text-sm">

                        <li class="text-neutral-500 hover:text-brand-600 transition-colors">
                            <a href="{{ route('about') }}">Healthcare</a>
                        </li>

                        <li class="text-neutral-500 hover:text-brand-600 transition-colors"><a
                                href="{{ route('courses.index') }}">Community Services</a></li>
                        <li class="text-neutral-500 hover:text-brand-600 transition-colors"><a
                                href="{{ route('faqs') }}">Ageing Support</a></li>
                        <li class="text-neutral-500 hover:text-brand-600 transition-colors"><a
                                href="{{ route('agent-register') }}">Individual Support</a></li>
                        <li class="text-neutral-500 hover:text-brand-600 transition-colors"><a
                                href="{{ route('international') }}">Leadership and Management</a></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-3">
                    <h4
                        class="font-display font-bold text-base uppercase tracking-tight text-brand-600 border-b border-neutral-300 pb-1">
                        Resources
                    </h4>
                    <ul class="flex flex-col gap-1.5  text-sm">
                        <li class="text-neutral-500 hover:text-brand-600 transition-colors"><a
                                href="{{ route('student-resources') }}">Student Handbook</a></li>
                        <li class="text-neutral-500 hover:text-brand-600 transition-colors"><a
                                href="{{ route('student-support') }}">Fees & Payment</a></li>
                        <li class="text-neutral-500 hover:text-brand-600 transition-colors"><a href="#prospectus">Refund
                                Policy</a></li>
                        <li class="text-neutral-500 hover:text-brand-600 transition-colors"><a
                                href="{{ route('admission-fees') }}">Assessment & RPL Policy</a></li>
                        <li class="text-neutral-500 hover:text-brand-600 transition-colors"><a
                                href="{{ route('contact') }}">Student Support Services</a></li>
                        {{-- <li class="text-neutral-500 hover:text-brand-600 transition-colors"><a
                                href="{{ route('contact') }}">Explore FAQ</a></li> --}}

                    </ul>
                </div>
                <div class="flex flex-col gap-3">
                    <h4
                        class="font-display font-bold text-base uppercase tracking-tight text-brand-600 border-b border-neutral-300 pb-1">
                        Nubex Campus
                    </h4>
                    <div class="flex flex-col gap-1 text-sm text-neutral-500">
                        <p><strong class="text-brand-600">Address:</strong> 30 Campbell Street, Blacktown NSW 2148</p>
                        <p><strong class="text-brand-600">Phone:</strong> +61 2 8677 3600</p>
                        <p><strong class="text-brand-600">Email:</strong> admissions@nubex.edu.au</p>
                    </div>
                    <div class="flex space-x-3 mt-4">
                        <a href="#"
                            class="w-8 h-8 bg-slate-800 rounded-full flex items-center justify-center text-white hover:bg-brand-600 hover:text-white transition"><i
                                class="fa-brands fa-facebook-f text-sm"></i></a>
                        <a href="#"
                            class="w-8 h-8 bg-slate-800 rounded-full flex items-center justify-center text-white hover:bg-brand-600 hover:text-white transition"><i
                                class="fa-brands fa-twitter text-sm"></i></a>
                        <a href="#"
                            class="w-8 h-8 bg-slate-800 rounded-full flex items-center justify-center text-white hover:bg-brand-600 hover:text-white transition"><i
                                class="fa-brands fa-instagram text-sm"></i></a>
                        <a href="#"
                            class="w-8 h-8 bg-slate-800 rounded-full flex items-center justify-center text-white hover:bg-brand-600 hover:text-white transition"><i
                                class="fa-brands fa-linkedin-in text-sm"></i></a>
                    </div>

                </div>
            </div>
            <div class="pt-4 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-neutral-500">
                <p>© 2025 Nubex College Pty Ltd. All Rights Reserved.</p>
                <div class="flex items-center gap-4 uppercase text-[10px] md:text-xs font-semibold">
                    <a class="hover:text-brand-600 transition-colors" href="#">Privacy Policy</a>
                    <a class="hover:text-brand-600 transition-colors" href="#">Terms &amp; Conditions</a>
                    <a class="hover:text-brand-600 transition-colors" href="#">Complaints &amp; Appeals</a>
                </div>
            </div>
        </div>
    </footer>
