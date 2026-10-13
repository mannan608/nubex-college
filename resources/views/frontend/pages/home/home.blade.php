@extends('frontend.layouts.app')

@section('content')
    <section
        class="relative w-full overflow-hidden bg-gradient-to-br from-[#0c273e] via-[#123b5d] to-[#081b2c] py-12 sm:py-14 lg:py-20 text-white border-b border-white/10 shadow-inner">
        <!-- Background Pattern Effect -->
        <div
            class="absolute inset-0 opacity-10 bg-[radial-gradient(#d0e4ff_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none">
        </div>

        <!-- Glow Effects -->
        <div
            class="absolute top-0 right-1/4 w-[300px] h-[300px] lg:w-[450px] lg:h-[450px] bg-secondary/25 rounded-full blur-3xl pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 left-10 w-[250px] h-[250px] lg:w-[350px] lg:h-[350px] bg-primary-fixed/15 rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-8 items-center">

                <!-- Left Column -->
                <div class="lg:col-span-7 flex flex-col gap-5 z-10">
                    <div
                        class="inline-flex items-center gap-2 self-start px-3.5 py-1.5 bg-white/10 backdrop-blur-md text-secondary-container border border-white/15 rounded-full shadow-sm text-[11px] font-bold tracking-wider uppercase font-heading">
                        <span class="material-symbols-outlined text-[16px]! text-secondary-container">school</span>
                        <span>YOUR NEXT STEP STARTS HERE</span>
                    </div>

                    <h1
                        class="font-heading text-3xl sm:text-4xl lg:text-[50px] lg:leading-[58px] text-white tracking-tight font-extrabold drop-shadow-sm">
                        Build Your Skills.<br /><span class="text-secondary-container">Advance Your Future.</span>
                    </h1>

                    <p class="text-sm sm:text-base lg:text-lg text-slate-200 max-w-2xl leading-relaxed">
                        Explore vocational qualifications in business leadership,
                        community services, individual support, mental health and
                        allied health assistance. Discover a training pathway that
                        aligns with your experience, interests and career goals.
                    </p>

                    <div class="flex flex-col sm:flex-row flex-wrap items-stretch sm:items-center gap-3 sm:gap-4 pt-2">
                        <a class="inline-flex items-center justify-center gap-2 font-heading font-semibold text-sm bg-secondary hover:bg-secondary/90 active:scale-[0.98] text-white w-full sm:w-auto px-6 py-3 md:px-7 md:py-3.5 rounded-lg shadow-lg transition-all duration-200"
                            href="#qualifications">
                            <span>Explore Qualifications</span>
                            <span class="material-symbols-outlined text-[18px]!">arrow_forward</span>
                        </a>
                        <a class="inline-flex items-center justify-center gap-2 font-heading font-semibold text-sm bg-white hover:bg-slate-50 active:scale-[0.98] text-brand-600 border border-white/20 w-full sm:w-auto px-6 py-3 md:px-7 md:py-3.5 rounded-lg shadow-sm backdrop-blur-sm transition-all duration-200"
                            href="#eligibility-checker">
                            <span class="material-symbols-outlined text-brand-600 text-[18px]!">fact_check</span>
                            <span>Check Your Eligibility</span>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-6 mt-2 border-t border-white/10 text-xs">
                        <div
                            class="flex items-center gap-2.5 p-3 rounded-lg bg-white/5 border border-white/10 backdrop-blur-sm">
                            <span
                                class="material-symbols-outlined text-secondary-container text-[20px] shrink-0">verified</span>
                            <span class="text-slate-100 font-medium leading-tight">Australian Registered Training
                                Organisation</span>
                        </div>
                        <div
                            class="flex items-center gap-2.5 p-3 rounded-lg bg-white/5 border border-white/10 backdrop-blur-sm">
                            <span
                                class="material-symbols-outlined text-secondary-container text-[20px] shrink-0">workspace_premium</span>
                            <span class="text-slate-100 font-medium leading-tight">Nationally Recognised
                                Qualifications</span>
                        </div>
                        <div
                            class="flex items-center gap-2.5 p-3 rounded-lg bg-white/5 border border-white/10 backdrop-blur-sm">
                            <span
                                class="material-symbols-outlined text-secondary-container text-[20px] shrink-0">support_agent</span>
                            <span class="text-slate-100 font-medium leading-tight">Student Support and Guidance</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Fast Enquiry Form -->
                <div class="lg:col-span-5 relative flex flex-col justify-center w-full">
                    <div
                        class="relative z-20 bg-white text-on-surface p-5 sm:p-7 rounded-2xl shadow-2xl border border-white/40">
                        <div class="flex items-center justify-between pb-3 border-b border-surface-container mb-4">
                            <div>
                                <h2 class="font-heading text-lg font-bold text-primary">
                                    Find the Right Qualification
                                </h2>
                                <p class="text-xs text-secondary font-semibold">
                                    Fast Advisor Assessment • RTO 46173
                                </p>
                            </div>
                            <div
                                class="w-10 h-10 rounded-full bg-secondary/10 flex items-center justify-center text-secondary shrink-0">
                                <span class="material-symbols-outlined text-[22px]">explore</span>
                            </div>
                        </div>

                        <p class="text-xs text-on-surface-variant mb-4">
                            Tell us what you are interested in, and our qualified team
                            will help guide your training pathway.
                        </p>

                        <form class="flex flex-col gap-3" novalidate>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <div>
                                    <label class="text-xs font-semibold text-on-surface block mb-1">Full Name</label>
                                    <input
                                        class="w-full px-3 py-2 text-xs rounded-lg bg-surface-container-low text-on-surface border border-outline-variant/60 focus:outline-none focus:border-secondary focus:bg-white transition-colors placeholder:text-neutral-500"
                                        placeholder="Sarah Jenkins" required type="text" />
                                </div>
                                <div>
                                    <label class="text-xs font-semibold text-on-surface block mb-1">Mobile Number</label>
                                    <input
                                        class="w-full px-3 py-2 text-xs rounded-lg bg-surface-container-low text-on-surface border border-outline-variant/60 focus:outline-none focus:border-secondary focus:bg-white transition-colors placeholder:text-neutral-500"
                                        placeholder="0400 000 000" required type="tel" />
                                </div>
                            </div>

                            <div>
                                <label class="text-xs font-semibold text-on-surface block mb-1">Email Address</label>
                                <input
                                    class="w-full px-3 py-2 text-xs rounded-lg bg-surface-container-low text-on-surface border border-outline-variant/60 focus:outline-none focus:border-secondary focus:bg-white transition-colors placeholder:text-neutral-500"
                                    placeholder="s.jenkins@example.com.au" required type="email" />
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <div>
                                    <label class="text-xs font-semibold text-on-surface block mb-1">Target
                                        Qualification</label>
                                    <select
                                        class="w-full px-3 py-2 text-xs rounded-lg bg-surface-container-low text-on-surface border border-outline-variant/60 focus:outline-none focus:border-secondary focus:bg-white transition-colors invalid:text-neutral-500"
                                        required>
                                        <option disabled selected value="">Select course...</option>
                                        <option value="BSB50420">BSB50420 - Dip Leadership &amp; Mgt</option>
                                        <option value="BSB60420">BSB60420 - Adv Dip Leadership &amp; Mgt</option>
                                        <option value="CHC33021">CHC33021 - Cert III Individual Support</option>
                                        <option value="CHC43015">CHC43015 - Cert IV Ageing Support</option>
                                        <option value="CHC43315">CHC43315 - Cert IV Mental Health</option>
                                        <option value="CHC52025">CHC52025 - Dip Community Services</option>
                                        <option value="HLT33021">HLT33021 - Cert III Allied Health</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="text-xs font-semibold text-on-surface block mb-1">Preferred
                                        Pathway</label>
                                    <select
                                        class="w-full px-3 py-2 text-xs rounded-lg bg-surface-container-low text-on-surface border border-outline-variant/60 focus:outline-none focus:border-secondary focus:bg-white transition-colors invalid:text-neutral-500"
                                        required>
                                        <option disabled selected value="">Select mode...</option>
                                        <option value="online">Online Self-Paced</option>
                                        <option value="blended">Blended Learning</option>
                                        <option value="workplace">Workplace Based</option>
                                        <option value="rpl">Recognition of Prior Learning (RPL)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex items-start gap-2 pt-1">
                                <input class="mt-0.5 rounded text-primary focus:ring-secondary shrink-0 cursor-pointer"
                                    id="hero-consent" required type="checkbox" />
                                <label class="text-[11px] leading-tight text-on-surface-variant cursor-pointer select-none"
                                    for="hero-consent">
                                    I consent to Nubex College contacting me regarding
                                    course details in accordance with the Privacy Act 1988.
                                </label>
                            </div>

                            <button
                                class="mt-2 w-full py-3 bg-secondary hover:bg-secondary/90 active:scale-[0.98] text-white font-heading font-semibold text-sm rounded-lg shadow-md transition-all flex items-center justify-center gap-2"
                                type="submit">
                                <span>Request Free Consultation</span>
                                <span class="material-symbols-outlined text-[16px]!">send</span>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="w-full py-12 sm:py-16 lg:py-20 bg-surface" id="qualifications">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 sm:mb-10 gap-4">
                <div>
                    <div
                        class="inline-flex items-center gap-1.5 px-3 py-1 bg-[#1968b2]/10 text-[#1968b2] rounded-full mb-3 text-[11px] font-bold font-heading uppercase tracking-wider">
                        <span class="material-symbols-outlined text-[16px]!">school</span>
                        <span>Accredited Programs</span>
                    </div>
                    <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-bold text-[#182F5A] tracking-tight">
                        Explore Our Qualifications
                    </h2>
                    <p class="text-sm sm:text-base text-on-surface-variant max-w-2xl mt-2 leading-relaxed">
                        Nationally accredited vocational qualifications tailored for
                        career progression and workplace readiness.
                    </p>
                </div>
            </div>

            <!-- Sleek 3-Column Grid Partial -->
            @include('frontend.pages.industry.qualification-grid', ['qualifications' => $courses])

            <!-- Action / View All CTA -->
            @if (isset($courses) && count($courses) > 0)
                <div class="flex items-center justify-center mt-10 sm:mt-12">
                    <a href=""
                        class="inline-flex items-center justify-center gap-2 px-8 py-3 bg-[#1968b2] hover:bg-[#155b9d] text-white text-sm font-semibold font-heading rounded-xl shadow-sm hover:shadow-md active:scale-95 transition-all duration-200 group">
                        <span>See More Qualifications</span>
                        <span
                            class="material-symbols-outlined text-[18px]! transition-transform duration-200 group-hover:translate-x-1">arrow_forward</span>
                    </a>
                </div>
            @endif

        </div>
    </section>

    <!-- Section 3: Why Choose Nubex College? -->
    <section class="w-full py-12 sm:py-16 lg:py-20 bg-white" id="about">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="text-center max-w-2xl mx-auto mb-10 sm:mb-14">
                <div
                    class="inline-flex items-center gap-1.5 px-3 py-1 bg-[#1968b2]/10 text-[#1968b2] rounded-full mb-3 text-[11px] font-bold font-heading uppercase tracking-wider">
                    <span>The Nubex Difference</span>
                </div>
                <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-bold text-[#182F5A] tracking-tight">
                    Why Choose Nubex College?
                </h2>
                <p class="text-sm sm:text-base text-on-surface-variant mt-2 leading-relaxed">
                    We combine ASQA regulatory discipline with tailored student
                    mentorship, equipping every learner for meaningful career
                    progression.
                </p>
            </div>

            <!-- Responsive Feature Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Card 1 -->
                <div
                    class="group p-6 rounded-2xl bg-white shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-[#1968b2]/10 text-[#1968b2] group-hover:bg-[#1968b2] group-hover:text-white flex items-center justify-center mb-5 transition-colors duration-300">
                            <span class="material-symbols-outlined text-[26px]">alt_route</span>
                        </div>
                        <h3
                            class="font-heading text-base font-bold text-[#182F5A] mb-2 group-hover:text-[#1968b2] transition-colors duration-200">
                            Clear Training Pathways
                        </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                            Understand the available qualifications and requirements
                            before making a commitment.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="group p-6 rounded-2xl bg-white shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-[#1968b2]/10 text-[#1968b2] group-hover:bg-[#1968b2] group-hover:text-white flex items-center justify-center mb-5 transition-colors duration-300">
                            <span class="material-symbols-outlined text-[26px]">forum</span>
                        </div>
                        <h3
                            class="font-heading text-base font-bold text-[#182F5A] mb-2 group-hover:text-[#1968b2] transition-colors duration-200">
                            Guidance Throughout Your Journey
                        </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                            Make it easy to ask questions and receive course information
                            at every step.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="group p-6 rounded-2xl bg-white shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-[#1968b2]/10 text-[#1968b2] group-hover:bg-[#1968b2] group-hover:text-white flex items-center justify-center mb-5 transition-colors duration-300">
                            <span class="material-symbols-outlined text-[26px]">architecture</span>
                        </div>
                        <h3
                            class="font-heading text-base font-bold text-[#182F5A] mb-2 group-hover:text-[#1968b2] transition-colors duration-200">
                            Relevant Vocational Learning
                        </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                            Accurate knowledge and competencies addressed by each
                            qualification in real Australian workplaces.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div
                    class="group p-6 rounded-2xl bg-white shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-[#1968b2]/10 text-[#1968b2] group-hover:bg-[#1968b2] group-hover:text-white flex items-center justify-center mb-5 transition-colors duration-300">
                            <span class="material-symbols-outlined text-[26px]">visibility</span>
                        </div>
                        <h3
                            class="font-heading text-base font-bold text-[#182F5A] mb-2 group-hover:text-[#1968b2] transition-colors duration-200">
                            Transparent Information
                        </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                            Course requirements, fees, policies, student rights and
                            guidelines are fully transparent.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Section: Online Self-Paced Study -->
    <section
        class="w-full py-12 sm:py-16 lg:py-20 bg-surface border-y border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="max-w-3xl mb-10 sm:mb-14">
                <div
                    class="inline-flex items-center gap-1.5 px-3 py-1 bg-[#1968b2]/10 text-[#1968b2] rounded-full mb-3 text-[11px] font-bold font-heading uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[16px]!">devices</span>
                    <span>FLEXIBLE LEARNING</span>
                </div>

                <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-bold text-[#182F5A] tracking-tight">
                    Study at Your Own Pace, Wherever You Are
                </h2>
                <p class="text-sm sm:text-base text-on-surface-variant mt-3 leading-relaxed">
                    Balance your study around work, family, and life commitments
                    with Nubex College's comprehensive online learning portal.
                    Access high-quality digital course materials, interactive
                    assessments, and one-on-one trainer support whenever suits you
                    best.
                </p>
            </div>

            <!-- 4-Card Responsive Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Card 1 -->
                <div
                    class="group p-6 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:border-[#1968b2]/40 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-[#1968b2]/10 text-[#1968b2] group-hover:bg-[#1968b2] group-hover:text-white flex items-center justify-center mb-5 transition-colors duration-300">
                            <span class="material-symbols-outlined text-[26px]">cloud_sync</span>
                        </div>
                        <h3
                            class="font-heading text-base font-bold text-[#182F5A] mb-2 group-hover:text-[#1968b2] transition-colors duration-200">
                            24/7 Portal Access
                        </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                            Cloud learning platform with lectures, curated resources,
                            digital workbooks, and real-time progress tracking
                            accessible anytime.
                        </p>
                    </div>
                    <div
                        class="mt-6 pt-3 border-t border-slate-100 text-[11px] font-bold uppercase tracking-wider text-[#1968b2]">
                        Always Accessible
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="group p-6 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:border-[#1968b2]/40 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-[#1968b2]/10 text-[#1968b2] group-hover:bg-[#1968b2] group-hover:text-white flex items-center justify-center mb-5 transition-colors duration-300">
                            <span class="material-symbols-outlined text-[26px]">support_agent</span>
                        </div>
                        <h3
                            class="font-heading text-base font-bold text-[#182F5A] mb-2 group-hover:text-[#1968b2] transition-colors duration-200">
                            Dedicated Assessor Support
                        </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                            Direct messaging and scheduled video sessions with certified
                            Australian trainers dedicated to coaching your success.
                        </p>
                    </div>
                    <div
                        class="mt-6 pt-3 border-t border-slate-100 text-[11px] font-bold uppercase tracking-wider text-[#1968b2]">
                        1-on-1 Mentorship
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="group p-6 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:border-[#1968b2]/40 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-[#1968b2]/10 text-[#1968b2] group-hover:bg-[#1968b2] group-hover:text-white flex items-center justify-center mb-5 transition-colors duration-300">
                            <span class="material-symbols-outlined text-[26px]">workspaces</span>
                        </div>
                        <h3
                            class="font-heading text-base font-bold text-[#182F5A] mb-2 group-hover:text-[#1968b2] transition-colors duration-200">
                            Workplace Integration
                        </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                            Structured self-paced logbooks, simulated workplace
                            assessments, and projects matching authentic industry tasks.
                        </p>
                    </div>
                    <div
                        class="mt-6 pt-3 border-t border-slate-100 text-[11px] font-bold uppercase tracking-wider text-[#1968b2]">
                        Industry Connected
                    </div>
                </div>

                <!-- Card 4 -->
                <div
                    class="group p-6 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:border-[#1968b2]/40 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-[#1968b2]/10 text-[#1968b2] group-hover:bg-[#1968b2] group-hover:text-white flex items-center justify-center mb-5 transition-colors duration-300">
                            <span class="material-symbols-outlined text-[26px]">event_available</span>
                        </div>
                        <h3
                            class="font-heading text-base font-bold text-[#182F5A] mb-2 group-hover:text-[#1968b2] transition-colors duration-200">
                            Flexible Milestones
                        </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                            Set your own weekly milestones within national qualification
                            timeframes to achieve your goals on your personal schedule.
                        </p>
                    </div>
                    <div
                        class="mt-6 pt-3 border-t border-slate-100 text-[11px] font-bold uppercase tracking-wider text-[#1968b2]">
                        Self-Paced Timeline
                    </div>
                </div>

            </div>

            <!-- Action Callout Buttons -->
            <div class="mt-10 sm:mt-12 flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4">
                <a class="inline-flex items-center justify-center gap-2 w-full sm:w-auto px-6 py-3 bg-[#1968b2] hover:bg-[#155b9d] text-white font-heading font-semibold text-sm rounded-xl shadow-sm hover:shadow-md active:scale-95 transition-all duration-200"
                    href="#qualifications">
                    <span>Explore Online Pathways</span>
                    <span class="material-symbols-outlined text-[18px]!">arrow_forward</span>
                </a>
                <a class="inline-flex items-center justify-center gap-2 w-full sm:w-auto px-6 py-3 bg-white hover:bg-slate-50 border border-slate-300 text-[#182F5A] font-heading font-semibold text-sm rounded-xl shadow-sm hover:shadow-md active:scale-95 transition-all duration-200"
                    href="#eligibility-checker">
                    <span class="material-symbols-outlined text-[#1968b2] text-[18px]">download</span>
                    <span>Download Course Guide</span>
                </a>
            </div>

        </div>
    </section>

    <!-- Section 5: Recognition of Prior Learning (RPL) Section -->
    <section class="w-full py-16 bg-white">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-5">
                    <div class="relative rounded-2xl overflow-hidden shadow-lg bg-surface-container">
                        <div class="w-full aspect-[4/3] overflow-hidden rounded-xl">
                            <img alt="Australian vocational student" class="w-full h-full object-cover"
                                src="https://www.gstatic.com/labs-code/stitch/stitch-placeholder-300x300.svg" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-6 left-6 right-6 p-4 rounded-xl bg-white/95 backdrop-blur-md">
                            <div class="flex items-center gap-3">
                                <span
                                    class="material-symbols-outlined text-secondary text-[32px]">assignment_turned_in</span>
                                <div>
                                    <h4 class="font-heading text-sm font-bold text-primary">
                                        Fast-Track Your Ambition
                                    </h4>
                                    <p class="text-xs text-on-surface-variant">
                                        Turn years of practical work experience into national
                                        certification.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7 flex flex-col gap-4">
                    <div
                        class="inline-flex items-center gap-1.5 px-3 py-1 bg-surface-container text-primary rounded-full self-start text-[10px] font-bold font-heading uppercase tracking-wider">
                        <span>Prior Learning Assessment</span>
                    </div>
                    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-primary">
                        Have You Gained Skills Through Work or Experience?
                    </h2>
                    <p class="text-sm sm:text-base text-on-surface-variant leading-relaxed">
                        Recognition of Prior Learning is an assessment process that
                        considers relevant existing skills, knowledge and experience
                        against the requirements of a nationally recognised
                        qualification. Depending on the qualification and your
                        circumstances, you may have a relevant RPL pathway to explore.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                        <div class="p-4 rounded-xl bg-white shadow-sm flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full bg-primary-fixed text-primary flex items-center justify-center font-bold text-xs shrink-0">01</span>
                            <div>
                                <h4 class="font-heading text-xs font-bold text-primary mb-1">
                                    Submit an enquiry
                                </h4>
                                <p class="text-xs text-on-surface-variant">
                                    Share your career history and outline the qualifications
                                    that interest you.
                                </p>
                            </div>
                        </div>
                        <div class="p-4 rounded-xl bg-white shadow-sm flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full bg-primary-fixed text-primary flex items-center justify-center font-bold text-xs shrink-0">02</span>
                            <div>
                                <h4 class="font-heading text-xs font-bold text-primary mb-1">
                                    Discuss requirements
                                </h4>
                                <p class="text-xs text-on-surface-variant">
                                    Evaluate competency standards alongside a qualified
                                    educational assessor.
                                </p>
                            </div>
                        </div>
                        <div class="p-4 rounded-xl bg-white shadow-sm flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full bg-primary-fixed text-primary flex items-center justify-center font-bold text-xs shrink-0">03</span>
                            <div>
                                <h4 class="font-heading text-xs font-bold text-primary mb-1">
                                    Provide evidence
                                </h4>
                                <p class="text-xs text-on-surface-variant">
                                    Collate workplace logs, references, contracts, and
                                    relevant documentation.
                                </p>
                            </div>
                        </div>
                        <div class="p-4 rounded-xl bg-white shadow-sm flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full bg-primary-fixed text-primary flex items-center justify-center font-bold text-xs shrink-0">04</span>
                            <div>
                                <h4 class="font-heading text-xs font-bold text-primary mb-1">
                                    Receive outcome
                                </h4>
                                <p class="text-xs text-on-surface-variant">
                                    Gain your formal determination from our authorised AQF
                                    assessor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 rounded-lg bg-surface-container flex items-start gap-2.5 mt-2">
                        <span class="material-symbols-outlined text-secondary text-[20px] shrink-0 mt-0.5">policy</span>
                        <p class="text-xs text-on-surface-variant leading-relaxed">
                            <strong>Assessment Policy:</strong> Outcome is determined
                            strictly through formal evidence mapping and competency
                            assessment. Experience alone does not guarantee automatic
                            qualification issuance.
                        </p>
                    </div>
                    <div class="pt-2">
                        <a class="inline-flex items-center justify-center gap-2 font-heading font-semibold text-sm bg-primary hover:bg-primary-dark text-white w-full sm:w-fit py-2.5 px-4 md:px-6 md:py-3.5 rounded-lg shadow-sm transition-colors"
                            href="#eligibility-checker">
                            <span>Explore RPL Options</span>
                            <span class="material-symbols-outlined text-[18px]!">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 6: Interactive Multi-Step Eligibility Checker Section -->
    <section class="w-full py-12 sm:py-16 lg:py-20 bg-surface" id="eligibility-checker" x-data="{
        step: 1,
        selectedQual: 'BSB50420',
        totalSteps: 4,
        formData: { name: '', phone: '', email: '' },
        get progressPercent() {
            return (this.step / this.totalSteps) * 100;
        },
        get stepTitle() {
            switch (this.step) {
                case 1:
                    return 'Step 1 of 4: Qualification of Interest';
                case 2:
                    return 'Step 2 of 4: Practical Background';
                case 3:
                    return 'Step 3 of 4: Supporting Evidence Indicator';
                case 4:
                    return 'Step 4 of 4: Contact & Submission';
                default:
                    return '';
            }
        }
    }">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="text-center mb-10 sm:mb-12">
                <div
                    class="inline-flex items-center gap-1.5 px-3 py-1 bg-[#1968b2]/10 text-[#1968b2] rounded-full mb-3 text-[11px] font-bold font-heading uppercase tracking-wider">
                    <span>Fast Evaluation Tool</span>
                </div>
                <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-bold text-[#182F5A] tracking-tight">
                    Let's Find the Right Pathway for You
                </h2>
                <p class="text-sm sm:text-base text-on-surface-variant max-w-xl mx-auto mt-2 leading-relaxed">
                    Complete our short self-assessment to discover which national
                    qualification and study delivery best fits your career
                    background.
                </p>
            </div>

            <!-- Card Container -->
            <div class="bg-white rounded-2xl p-6 sm:p-8 lg:p-10 shadow-xl border border-slate-200">

                <!-- Progress Bar Header -->
                <div class="mb-8">
                    <div class="flex items-center justify-between text-xs text-on-surface-variant mb-2 font-medium">
                        <span class="font-bold text-[#182F5A]" x-text="stepTitle"></span>
                        <span x-text="Math.round(progressPercent) + '% Completed'"></span>
                    </div>
                    <div class="w-full h-2.5 bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-[#1968b2] rounded-full transition-all duration-300"
                            :style="`width: ${progressPercent}%`"></div>
                    </div>
                </div>

                <form @submit.prevent="if(step === 4) { step = 5; }">

                    <!-- Step 1: Qualification Selection -->
                    <div class="flex flex-col gap-4" x-show="step === 1" x-transition.opacity>
                        <h3 class="font-heading text-base sm:text-lg font-bold text-[#182F5A]">
                            Which qualification do you want to explore?
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <template
                                x-for="qual in [
                            {code: 'BSB50420', title: 'Diploma of Leadership and Management'},
                            {code: 'BSB60420', title: 'Advanced Diploma of Leadership'},
                            {code: 'CHC33021', title: 'Certificate III in Individual Support'},
                            {code: 'CHC43015', title: 'Certificate IV in Ageing Support'},
                            {code: 'CHC43315', title: 'Certificate IV in Mental Health'},
                            {code: 'CHC52025', title: 'Diploma of Community Services'},
                            {code: 'HLT33021', title: 'Certificate III in Allied Health Assistance', span: true}
                        ]">
                                <label
                                    class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 hover:bg-slate-100 border transition-all cursor-pointer"
                                    :class="selectedQual === qual.code ? 'border-[#1968b2] bg-[#1968b2]/5 shadow-sm' :
                                        'border-slate-200'"
                                    :class="qual.span ? 'sm:col-span-2' : ''">
                                    <input class="mt-1 text-[#1968b2] focus:ring-[#1968b2]" name="target_qual"
                                        type="radio" :value="qual.code" x-model="selectedQual" />
                                    <div>
                                        <span class="text-xs font-bold text-[#1968b2] block font-heading"
                                            x-text="qual.code"></span>
                                        <span class="text-xs sm:text-sm font-semibold text-[#182F5A]"
                                            x-text="qual.title"></span>
                                    </div>
                                </label>
                            </template>
                        </div>
                    </div>

                    <!-- Step 2: Practical Background -->
                    <div class="flex flex-col gap-5" x-show="step === 2" x-transition.opacity style="display: none;">
                        <h3 class="font-heading text-base sm:text-lg font-bold text-[#182F5A]">
                            Your Practical Background &amp; Preferences
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="text-xs font-semibold text-[#182F5A] block mb-1">Australian Industry
                                    Experience</label>
                                <select
                                    class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-on-surface text-xs focus:outline-none focus:border-[#1968b2] focus:bg-white transition-colors">
                                    <option value="none">Less than 1 year / New to industry</option>
                                    <option value="1-2">1 to 2 years relevant experience</option>
                                    <option value="3-5">3 to 5 years solid experience</option>
                                    <option value="5+">5+ years senior or supervisor experience</option>
                                </select>
                            </div>
                            <div>
                                <label class="text-xs font-semibold text-[#182F5A] block mb-1">Highest Australian
                                    Qualification Held</label>
                                <select
                                    class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-on-surface text-xs focus:outline-none focus:border-[#1968b2] focus:bg-white transition-colors">
                                    <option value="year12">Year 12 / Secondary School</option>
                                    <option value="cert3">Certificate III</option>
                                    <option value="cert4">Certificate IV</option>
                                    <option value="diploma">Diploma / Advanced Diploma</option>
                                    <option value="degree">Bachelor Degree or Higher</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-[#182F5A] block mb-2">Preferred Study Mode</label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 text-xs">
                                <label
                                    class="p-3 rounded-xl bg-slate-50 hover:bg-slate-100 border border-slate-200 flex items-center gap-2.5 cursor-pointer font-medium text-[#182F5A]">
                                    <input checked name="learning_mode" type="radio" value="blended"
                                        class="text-[#1968b2] focus:ring-[#1968b2]" />
                                    <span>Blended Learning</span>
                                </label>
                                <label
                                    class="p-3 rounded-xl bg-slate-50 hover:bg-slate-100 border border-slate-200 flex items-center gap-2.5 cursor-pointer font-medium text-[#182F5A]">
                                    <input name="learning_mode" type="radio" value="workplace"
                                        class="text-[#1968b2] focus:ring-[#1968b2]" />
                                    <span>Workplace Training</span>
                                </label>
                                <label
                                    class="p-3 rounded-xl bg-slate-50 hover:bg-slate-100 border border-slate-200 flex items-center gap-2.5 cursor-pointer font-medium text-[#182F5A]">
                                    <input name="learning_mode" type="radio" value="rpl"
                                        class="text-[#1968b2] focus:ring-[#1968b2]" />
                                    <span>RPL Assessment Only</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Supporting Evidence -->
                    <div class="flex flex-col gap-4" x-show="step === 3" x-transition.opacity style="display: none;">
                        <h3 class="font-heading text-base sm:text-lg font-bold text-[#182F5A]">
                            Supporting Evidence Indicator
                        </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant">
                            Tick any documents or records you currently have access to:
                        </p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
                            <label
                                class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 hover:bg-slate-100 border border-slate-200 cursor-pointer font-medium text-[#182F5A]">
                                <input checked class="rounded text-[#1968b2] focus:ring-[#1968b2]" name="evidence"
                                    type="checkbox" value="resume" />
                                <span>Current Resume / CV</span>
                            </label>
                            <label
                                class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 hover:bg-slate-100 border border-slate-200 cursor-pointer font-medium text-[#182F5A]">
                                <input class="rounded text-[#1968b2] focus:ring-[#1968b2]" name="evidence"
                                    type="checkbox" value="contracts" />
                                <span>Employment Contracts / Duties</span>
                            </label>
                            <label
                                class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 hover:bg-slate-100 border border-slate-200 cursor-pointer font-medium text-[#182F5A]">
                                <input class="rounded text-[#1968b2] focus:ring-[#1968b2]" name="evidence"
                                    type="checkbox" value="payslips" />
                                <span>Recent Payslips / Work Letters</span>
                            </label>
                            <label
                                class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 hover:bg-slate-100 border border-slate-200 cursor-pointer font-medium text-[#182F5A]">
                                <input class="rounded text-[#1968b2] focus:ring-[#1968b2]" name="evidence"
                                    type="checkbox" value="certificates" />
                                <span>Prior Certificates or Transcripts</span>
                            </label>
                        </div>
                        <div
                            class="p-3 bg-[#1968b2]/5 rounded-xl flex items-center gap-2.5 text-xs text-[#1968b2] border border-[#1968b2]/15">
                            <span class="material-symbols-outlined text-[18px]">info</span>
                            <span>Document upload is not required now. Our assessor will guide you through evidence
                                collection later.</span>
                        </div>
                    </div>

                    <!-- Step 4: Contact & Submission -->
                    <div class="flex flex-col gap-4" x-show="step === 4" x-transition.opacity style="display: none;">
                        <h3 class="font-heading text-base sm:text-lg font-bold text-[#182F5A]">
                            Where should we send your pathway summary?
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="text-xs font-semibold text-[#182F5A] block mb-1">Full Legal Name</label>
                                <input
                                    class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-on-surface text-xs focus:outline-none focus:border-[#1968b2] focus:bg-white"
                                    id="wiz_name" x-model="formData.name" placeholder="Marcus Vance" required
                                    type="text" />
                            </div>
                            <div>
                                <label class="text-xs font-semibold text-[#182F5A] block mb-1">Mobile Contact</label>
                                <input
                                    class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-on-surface text-xs focus:outline-none focus:border-[#1968b2] focus:bg-white"
                                    id="wiz_phone" x-model="formData.phone" placeholder="0412 345 678" required
                                    type="tel" />
                            </div>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-[#182F5A] block mb-1">Email Address</label>
                            <input
                                class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-on-surface text-xs focus:outline-none focus:border-[#1968b2] focus:bg-white"
                                id="wiz_email" x-model="formData.email" placeholder="marcus.vance@gmail.com" required
                                type="email" />
                        </div>
                        <div class="flex items-start gap-2.5 pt-1 text-xs text-on-surface-variant">
                            <input checked class="mt-0.5 rounded text-[#1968b2] focus:ring-[#1968b2]" id="wiz_consent"
                                required type="checkbox" />
                            <label for="wiz_consent" class="cursor-pointer">I confirm the information supplied is accurate
                                and agree to receive enrolment consultation from Nubex College (RTO 46173).</label>
                        </div>
                    </div>

                    <!-- Success Screen -->
                    <div class="flex flex-col items-center justify-center text-center py-8 gap-3" x-show="step === 5"
                        x-transition.opacity style="display: none;">
                        <div
                            class="w-16 h-16 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mb-1">
                            <span class="material-symbols-outlined text-[36px]">task_alt</span>
                        </div>
                        <h3 class="font-heading text-xl font-bold text-[#182F5A]">
                            Enquiry Received!
                        </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant max-w-md">
                            Thank you for your enquiry. Our team will review the information provided and explain next steps
                            within one business day.
                        </p>
                        <span class="text-xs font-mono text-[#1968b2] mt-1 font-bold">CONFIRMATION REF:
                            NBX-2026-ELIG</span>
                        <button
                            class="mt-4 px-6 py-2.5 rounded-xl bg-slate-100 text-[#182F5A] text-xs font-semibold hover:bg-slate-200 transition-colors"
                            @click="step = 1; formData = {name:'', phone:'', email:''}" type="button">
                            Submit Another Enquiry
                        </button>
                    </div>

                    <!-- Navigation Controls -->
                    <div class="flex items-center justify-between pt-6 mt-6 border-t border-slate-100" x-show="step <= 4">
                        <button
                            class="px-5 py-2.5 rounded-xl bg-slate-100 text-[#182F5A] text-xs font-semibold hover:bg-slate-200 transition-colors"
                            type="button" @click="if(step > 1) step--" x-show="step > 1">
                            Back
                        </button>
                        <div class="ml-auto">
                            <button
                                class="inline-flex items-center gap-2 px-6 py-3 bg-[#1968b2] hover:bg-[#155b9d] active:scale-95 text-white font-heading font-semibold text-xs rounded-xl shadow-md transition-all"
                                type="button" @click="if(step < 4) { step++; } else { step = 5; }"
                                x-text="step === 4 ? 'Request Consultation' : 'Continue'">
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>


    <!-- Section 7: "How to Get Started" Timeline -->
    <section class="w-full py-12 sm:py-16 lg:py-20 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16">
                <div
                    class="inline-flex items-center gap-1.5 px-3.5 py-1.5 bg-[#1968b2]/10 text-[#1968b2] rounded-full mb-3 text-[11px] font-bold font-heading uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[16px]!">trending_up</span>
                    <span>Clear Roadmap</span>
                </div>
                <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-bold text-[#182F5A] tracking-tight">
                    How to Get Started
                </h2>
                <p class="text-sm sm:text-base text-on-surface-variant mt-2 leading-relaxed">
                    A transparent, stress-free route from initial enquiry through to
                    official training orientation.
                </p>
            </div>

            <!-- 3-Step Timeline Grid -->
            <div class="relative grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">

                <!-- Animated Connecting Line (Desktop Only) -->
                <div
                    class="hidden md:block absolute top-[52px] left-[18%] right-[18%] h-1 animated-connector rounded-full z-0 pointer-events-none">
                </div>

                <!-- Step 1 -->
                <div
                    class="group relative z-10 p-6 sm:p-7 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:border-[#1968b2]/30 transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="relative flex items-center justify-center">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-[#182F5A] text-white flex items-center justify-center font-heading text-xl font-extrabold shadow-md transition-transform duration-300 group-hover:scale-105 group-hover:bg-[#1968b2]">
                                    01
                                </div>
                                <span class="absolute -top-1 -right-1 flex h-3.5 w-3.5">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#1968b2] opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-[#1968b2]"></span>
                                </span>
                            </div>
                            <div
                                class="w-11 h-11 rounded-xl bg-slate-100 group-hover:bg-[#1968b2]/10 flex items-center justify-center text-[#1968b2] transition-colors duration-300">
                                <span class="material-symbols-outlined text-[24px]">manage_search</span>
                            </div>
                        </div>

                        <div
                            class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-[#1968b2]/10 text-[#1968b2] text-[11px] font-bold tracking-wider uppercase mb-2">
                            Step One
                        </div>
                        <h3
                            class="font-heading text-lg font-bold text-[#182F5A] mb-2 group-hover:text-[#1968b2] transition-colors duration-200">
                            Explore
                        </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                            Browse qualifications and review relevant course information, units of competency, delivery
                            locations, and career outcomes.
                        </p>
                    </div>

                    <a href="#qualifications"
                        class="mt-6 pt-4 border-t border-slate-100 text-xs font-bold text-[#1968b2] flex items-center gap-1.5 group-hover:translate-x-1 transition-transform duration-200">
                        <span>Find your qualification</span>
                        <span class="material-symbols-outlined text-[16px]!">arrow_forward</span>
                    </a>
                </div>

                <!-- Step 2 -->
                <div
                    class="group relative z-10 p-6 sm:p-7 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:border-[#1968b2]/30 transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="relative flex items-center justify-center">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-[#182F5A] text-white flex items-center justify-center font-heading text-xl font-extrabold shadow-md transition-transform duration-300 group-hover:scale-105 group-hover:bg-[#1968b2]">
                                    02
                                </div>
                                <span class="absolute -top-1 -right-1 flex h-3.5 w-3.5">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#1968b2] opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-[#1968b2]"></span>
                                </span>
                            </div>
                            <div
                                class="w-11 h-11 rounded-xl bg-slate-100 group-hover:bg-[#1968b2]/10 flex items-center justify-center text-[#1968b2] transition-colors duration-300">
                                <span class="material-symbols-outlined text-[24px]">contact_support</span>
                            </div>
                        </div>

                        <div
                            class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-[#1968b2]/10 text-[#1968b2] text-[11px] font-bold tracking-wider uppercase mb-2">
                            Step Two
                        </div>
                        <h3
                            class="font-heading text-lg font-bold text-[#182F5A] mb-2 group-hover:text-[#1968b2] transition-colors duration-200">
                            Enquire
                        </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                            Submit an enquiry or discuss qualification requirements with our college admissions advisors and
                            expert RPL assessment team.
                        </p>
                    </div>

                    <a href="#eligibility-checker"
                        class="mt-6 pt-4 border-t border-slate-100 text-xs font-bold text-[#1968b2] flex items-center gap-1.5 group-hover:translate-x-1 transition-transform duration-200">
                        <span>Speak with an advisor</span>
                        <span class="material-symbols-outlined text-[16px]!">arrow_forward</span>
                    </a>
                </div>

                <!-- Step 3 -->
                <div
                    class="group relative z-10 p-6 sm:p-7 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:border-[#1968b2]/30 transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="relative flex items-center justify-center">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-[#1968b2] text-white flex items-center justify-center font-heading text-xl font-extrabold shadow-md transition-transform duration-300 group-hover:scale-105">
                                    03
                                </div>
                                <span class="absolute -top-1 -right-1 flex h-3.5 w-3.5">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#1968b2] opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-[#1968b2]"></span>
                                </span>
                            </div>
                            <div
                                class="w-11 h-11 rounded-xl bg-slate-100 group-hover:bg-[#1968b2]/10 flex items-center justify-center text-[#1968b2] transition-colors duration-300">
                                <span class="material-symbols-outlined text-[24px]">how_to_reg</span>
                            </div>
                        </div>

                        <div
                            class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-[#1968b2]/10 text-[#1968b2] text-[11px] font-bold tracking-wider uppercase mb-2">
                            Step Three
                        </div>
                        <h3
                            class="font-heading text-lg font-bold text-[#182F5A] mb-2 group-hover:text-[#1968b2] transition-colors duration-200">
                            Apply
                        </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                            Follow our straightforward enrolment review once you have received verified course
                            recommendations and fee plans.
                        </p>
                    </div>

                    <a href="#eligibility-checker"
                        class="mt-6 pt-4 border-t border-slate-100 text-xs font-bold text-[#1968b2] flex items-center gap-1.5 group-hover:translate-x-1 transition-transform duration-200">
                        <span>Commence learning</span>
                        <span class="material-symbols-outlined text-[16px]!">arrow_forward</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Section 8: Student Experience & Compliance -->
    <section class="w-full py-12 sm:py-16 lg:py-20 bg-surface" id="compliance">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">

                <!-- Left Column: Student Support Networks -->
                <div class="lg:col-span-6 flex flex-col gap-4">
                    <div
                        class="inline-flex items-center gap-1.5 px-3 py-1 bg-[#1968b2]/10 text-[#1968b2] rounded-full self-start text-[11px] font-bold font-heading uppercase tracking-wider">
                        <span>Student Wellbeing &amp; Compliance</span>
                    </div>

                    <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-bold text-[#182F5A] tracking-tight">
                        Student Support &amp; Educational Transparency
                    </h2>

                    <p class="text-sm sm:text-base text-on-surface-variant leading-relaxed">
                        At Nubex College, student equity, academic rigor, and
                        supportive mentoring are core obligations. Every prospective
                        and enrolled student has direct, unfettered access to support
                        networks and administrative clarity.
                    </p>

                    <!-- 2x2 Feature Items Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">

                        <!-- LLN Assistance -->
                        <div
                            class="p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-[#1968b2]/30 hover:bg-white hover:shadow-md transition-all duration-200">
                            <span
                                class="material-symbols-outlined text-[#1968b2] text-[24px] mb-1.5 block">psychology_alt</span>
                            <h4 class="font-heading text-sm font-bold text-[#182F5A]">
                                LLN Assistance
                            </h4>
                            <p class="text-xs text-on-surface-variant mt-1 leading-relaxed">
                                Targeted language, literacy and numeracy coaching designed
                                to support your course progression.
                            </p>
                        </div>

                        <!-- Accessibility Plans -->
                        <div
                            class="p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-[#1968b2]/30 hover:bg-white hover:shadow-md transition-all duration-200">
                            <span
                                class="material-symbols-outlined text-[#1968b2] text-[24px] mb-1.5 block">accessible_forward</span>
                            <h4 class="font-heading text-sm font-bold text-[#182F5A]">
                                Accessibility Plans
                            </h4>
                            <p class="text-xs text-on-surface-variant mt-1 leading-relaxed">
                                Reasonable adjustments for learners living with
                                disabilities or ongoing health conditions.
                            </p>
                        </div>

                        <!-- Student Handbook -->
                        <div
                            class="p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-[#1968b2]/30 hover:bg-white hover:shadow-md transition-all duration-200">
                            <span
                                class="material-symbols-outlined text-[#1968b2] text-[24px] mb-1.5 block">menu_book</span>
                            <h4 class="font-heading text-sm font-bold text-[#182F5A]">
                                Student Handbook
                            </h4>
                            <p class="text-xs text-on-surface-variant mt-1 leading-relaxed">
                                Comprehensive rights, responsibilities, grievance
                                procedures and operational guidelines.
                            </p>
                        </div>

                        <!-- Transparent Fees -->
                        <div
                            class="p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-[#1968b2]/30 hover:bg-white hover:shadow-md transition-all duration-200">
                            <span
                                class="material-symbols-outlined text-[#1968b2] text-[24px] mb-1.5 block">account_balance</span>
                            <h4 class="font-heading text-sm font-bold text-[#182F5A]">
                                Transparent Fees
                            </h4>
                            <p class="text-xs text-on-surface-variant mt-1 leading-relaxed">
                                Transparent schedule of tuition, payment terms, and clear
                                refund policies prior to enrolment.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- Right Column: ASQA Compliance Card -->
                <div class="lg:col-span-6">
                    <div class="p-6 sm:p-8 rounded-2xl bg-white shadow-xl border border-slate-200 flex flex-col gap-5">

                        <div class="flex items-center gap-3.5">
                            <div
                                class="w-12 h-12 rounded-xl bg-[#182F5A] text-white flex items-center justify-center shrink-0 shadow-md">
                                <span class="material-symbols-outlined text-[26px]">verified_user</span>
                            </div>
                            <div>
                                <h3 class="font-heading text-lg font-bold text-[#182F5A]">
                                    ASQA Regulatory Standards
                                </h3>
                                <span class="text-xs font-mono text-[#1968b2] font-semibold">RTO CODE: 46173 | ABN: 22 666
                                    035 730</span>
                            </div>
                        </div>

                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                            Nubex College Pty Ltd complies with the Standards for
                            Registered Training Organisations (RTOs) 2015. We maintain
                            strict validation cycles across all qualifications, ensuring
                            our training packages reflect current Australian workplace
                            requirements.
                        </p>

                        <!-- Policy Download Buttons -->
                        <div class="space-y-2.5 pt-2">
                            <a class="p-3.5 rounded-xl bg-slate-50 hover:bg-[#1968b2]/5 border border-slate-200 hover:border-[#1968b2]/30 flex items-center justify-between text-xs sm:text-sm font-semibold text-[#182F5A] hover:text-[#1968b2] transition-all duration-200 group"
                                href="#">
                                <span>Student Complaints &amp; Appeals Policy</span>
                                <span
                                    class="material-symbols-outlined text-[#1968b2] text-[20px] transition-transform group-hover:translate-y-0.5">download</span>
                            </a>

                            <a class="p-3.5 rounded-xl bg-slate-50 hover:bg-[#1968b2]/5 border border-slate-200 hover:border-[#1968b2]/30 flex items-center justify-between text-xs sm:text-sm font-semibold text-[#182F5A] hover:text-[#1968b2] transition-all duration-200 group"
                                href="#">
                                <span>Fees, Refunds &amp; Cancellations Guidelines</span>
                                <span
                                    class="material-symbols-outlined text-[#1968b2] text-[20px] transition-transform group-hover:translate-y-0.5">download</span>
                            </a>

                            <a class="p-3.5 rounded-xl bg-slate-50 hover:bg-[#1968b2]/5 border border-slate-200 hover:border-[#1968b2]/30 flex items-center justify-between text-xs sm:text-sm font-semibold text-[#182F5A] hover:text-[#1968b2] transition-all duration-200 group"
                                href="#">
                                <span>RPL &amp; Credit Transfer Framework</span>
                                <span
                                    class="material-symbols-outlined text-[#1968b2] text-[20px] transition-transform group-hover:translate-y-0.5">download</span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Section 9: Frequently Asked Questions -->
    <section class="w-full py-12 sm:py-16 lg:py-20 bg-white" id="faq">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="text-center mb-10 sm:mb-12">
                <div
                    class="inline-flex items-center gap-1.5 px-3 py-1 bg-[#1968b2]/10 text-[#1968b2] rounded-full mb-3 text-[11px] font-bold font-heading uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[16px]!">help</span>
                    <span>Got Questions?</span>
                </div>
                <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-bold text-[#182F5A] tracking-tight">
                    Frequently Asked Questions
                </h2>
                <p class="text-sm sm:text-base text-on-surface-variant mt-2 leading-relaxed">
                    Direct, transparent answers regarding admissions, training
                    packages, documentation and policies.
                </p>
            </div>

            <!-- Alpine.js FAQ Accordion -->
            <div class="flex flex-col gap-3.5" x-data="{ active: null }">

                <!-- Item 1 -->
                <div class="rounded-2xl bg-white border transition-all duration-200 overflow-hidden shadow-sm hover:shadow-md"
                    :class="active === 1 ? 'border-[#1968b2]/40 ring-1 ring-[#1968b2]/20' : 'border-slate-200'">
                    <button type="button"
                        class="w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-heading text-sm sm:text-base font-bold text-[#182F5A] hover:text-[#1968b2] transition-colors"
                        @click="active = (active === 1 ? null : 1)">
                        <span class="flex items-center gap-2.5">
                            <span class="text-[#1968b2] font-mono text-xs font-bold">01.</span>
                            <span>What qualifications does Nubex College offer?</span>
                        </span>
                        <span
                            class="material-symbols-outlined text-[#1968b2] text-[22px] transition-transform duration-300 shrink-0"
                            :class="active === 1 ? 'rotate-180' : ''">expand_more</span>
                    </button>
                    <div class="px-4 sm:px-5 pb-5 text-xs sm:text-sm text-on-surface-variant leading-relaxed"
                        x-show="active === 1" x-collapse style="display: none;">
                        Nubex College delivers nationally recognized qualifications including:
                        <ul class="list-disc pl-5 mt-2.5 space-y-1.5 font-medium text-[#182F5A]/90">
                            <li><strong class="text-[#1968b2]">BSB50420</strong> — Diploma of Leadership and Management
                            </li>
                            <li><strong class="text-[#1968b2]">BSB60420</strong> — Advanced Diploma of Leadership and
                                Management</li>
                            <li><strong class="text-[#1968b2]">CHC33021</strong> — Certificate III in Individual Support
                            </li>
                            <li><strong class="text-[#1968b2]">CHC43015</strong> — Certificate IV in Ageing Support</li>
                            <li><strong class="text-[#1968b2]">CHC43315</strong> — Certificate IV in Mental Health</li>
                            <li><strong class="text-[#1968b2]">CHC52025</strong> — Diploma of Community Services</li>
                            <li><strong class="text-[#1968b2]">HLT33021</strong> — Certificate III in Allied Health
                                Assistance</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="rounded-2xl bg-white border transition-all duration-200 overflow-hidden shadow-sm hover:shadow-md"
                    :class="active === 2 ? 'border-[#1968b2]/40 ring-1 ring-[#1968b2]/20' : 'border-slate-200'">
                    <button type="button"
                        class="w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-heading text-sm sm:text-base font-bold text-[#182F5A] hover:text-[#1968b2] transition-colors"
                        @click="active = (active === 2 ? null : 2)">
                        <span class="flex items-center gap-2.5">
                            <span class="text-[#1968b2] font-mono text-xs font-bold">02.</span>
                            <span>What is Recognition of Prior Learning (RPL)?</span>
                        </span>
                        <span
                            class="material-symbols-outlined text-[#1968b2] text-[22px] transition-transform duration-300 shrink-0"
                            :class="active === 2 ? 'rotate-180' : ''">expand_more</span>
                    </button>
                    <div class="px-4 sm:px-5 pb-5 text-xs sm:text-sm text-on-surface-variant leading-relaxed"
                        x-show="active === 2" x-collapse style="display: none;">
                        Recognition of Prior Learning (RPL) acknowledges competencies
                        gained through work and life experience. Candidates submit
                        evidence mapping their existing capabilities directly against
                        unit of competency benchmarks.
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="rounded-2xl bg-white border transition-all duration-200 overflow-hidden shadow-sm hover:shadow-md"
                    :class="active === 3 ? 'border-[#1968b2]/40 ring-1 ring-[#1968b2]/20' : 'border-slate-200'">
                    <button type="button"
                        class="w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-heading text-sm sm:text-base font-bold text-[#182F5A] hover:text-[#1968b2] transition-colors"
                        @click="active = (active === 3 ? null : 3)">
                        <span class="flex items-center gap-2.5">
                            <span class="text-[#1968b2] font-mono text-xs font-bold">03.</span>
                            <span>How do I know which qualification is right for me?</span>
                        </span>
                        <span
                            class="material-symbols-outlined text-[#1968b2] text-[22px] transition-transform duration-300 shrink-0"
                            :class="active === 3 ? 'rotate-180' : ''">expand_more</span>
                    </button>
                    <div class="px-4 sm:px-5 pb-5 text-xs sm:text-sm text-on-surface-variant leading-relaxed"
                        x-show="active === 3" x-collapse style="display: none;">
                        Our admissions advisors evaluate your prior career journey and
                        goals to recommend an optimal qualification. You can also use
                        our interactive Eligibility Checker on this page.
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="rounded-2xl bg-white border transition-all duration-200 overflow-hidden shadow-sm hover:shadow-md"
                    :class="active === 4 ? 'border-[#1968b2]/40 ring-1 ring-[#1968b2]/20' : 'border-slate-200'">
                    <button type="button"
                        class="w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-heading text-sm sm:text-base font-bold text-[#182F5A] hover:text-[#1968b2] transition-colors"
                        @click="active = (active === 4 ? null : 4)">
                        <span class="flex items-center gap-2.5">
                            <span class="text-[#1968b2] font-mono text-xs font-bold">04.</span>
                            <span>What documents might be required for enrolment?</span>
                        </span>
                        <span
                            class="material-symbols-outlined text-[#1968b2] text-[22px] transition-transform duration-300 shrink-0"
                            :class="active === 4 ? 'rotate-180' : ''">expand_more</span>
                    </button>
                    <div class="px-4 sm:px-5 pb-5 text-xs sm:text-sm text-on-surface-variant leading-relaxed"
                        x-show="active === 4" x-collapse style="display: none;">
                        Enrolment typically requires government-issued photo
                        identification, a Unique Student Identifier (USI), and prior
                        academic transcripts. For RPL, resumes, references, and work
                        samples may also be requested.
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="rounded-2xl bg-white border transition-all duration-200 overflow-hidden shadow-sm hover:shadow-md"
                    :class="active === 5 ? 'border-[#1968b2]/40 ring-1 ring-[#1968b2]/20' : 'border-slate-200'">
                    <button type="button"
                        class="w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-heading text-sm sm:text-base font-bold text-[#182F5A] hover:text-[#1968b2] transition-colors"
                        @click="active = (active === 5 ? null : 5)">
                        <span class="flex items-center gap-2.5">
                            <span class="text-[#1968b2] font-mono text-xs font-bold">05.</span>
                            <span>How can I find course fees and duration details?</span>
                        </span>
                        <span
                            class="material-symbols-outlined text-[#1968b2] text-[22px] transition-transform duration-300 shrink-0"
                            :class="active === 5 ? 'rotate-180' : ''">expand_more</span>
                    </button>
                    <div class="px-4 sm:px-5 pb-5 text-xs sm:text-sm text-on-surface-variant leading-relaxed"
                        x-show="active === 5" x-collapse style="display: none;">
                        Course fees and durations differ depending on your selected
                        delivery mode. Contact our admissions team or request a course
                        guide; all fee schedules are transparently disclosed before
                        enrolment.
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Section 10: Final Conversion CTA Section -->
    <section
        class="relative w-full py-12 sm:py-16 lg:py-20 bg-gradient-to-br from-[#0c273e] via-[#182F5A] to-[#081b2c] text-white overflow-hidden shadow-inner">

        <!-- Background Radial Grid Pattern -->
        <div
            class="absolute inset-0 opacity-10 bg-[radial-gradient(#d0e4ff_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none">
        </div>

        <!-- Ambient Glow Effects -->
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[350px] sm:w-[500px] h-[350px] sm:h-[500px] bg-[#1968b2]/20 rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="max-w-3xl mx-auto flex flex-col items-center gap-4">

                <!-- Badge -->
                <div
                    class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-white/10 backdrop-blur-md rounded-full text-[#d0e4ff] border border-white/15 text-[11px] font-bold font-heading uppercase tracking-wider shadow-sm">
                    <span class="material-symbols-outlined text-[16px]!">school</span>
                    <span>Start Your Learning Journey</span>
                </div>

                <!-- Main Heading -->
                <h2
                    class="font-heading text-2xl sm:text-4xl lg:text-[42px] lg:leading-[50px] font-extrabold tracking-tight text-white drop-shadow-sm">
                    Ready to Explore Your Next Opportunity?
                </h2>

                <!-- Paragraph -->
                <p class="text-sm sm:text-base lg:text-lg text-slate-200 max-w-2xl leading-relaxed">
                    Explore our qualifications or contact Nubex College to discuss
                    available training pathways and application requirements.
                </p>

                <!-- Call to Action Buttons -->
                <div
                    class="flex flex-col sm:flex-row items-stretch sm:items-center justify-center gap-3 sm:gap-4 pt-3 w-full sm:w-auto">
                    <a class="inline-flex items-center justify-center gap-2 font-heading font-semibold text-sm bg-white hover:bg-slate-100 active:scale-95 text-[#182F5A] px-7 py-3.5 rounded-xl shadow-lg transition-all duration-200 group"
                        href="#qualifications">
                        <span>Explore Qualifications</span>
                        <span
                            class="material-symbols-outlined text-[18px]! transition-transform duration-200 group-hover:translate-x-1">arrow_forward</span>
                    </a>

                    <a class="inline-flex items-center justify-center gap-2 font-heading font-semibold text-sm bg-white/10 hover:bg-white/20 active:scale-95 text-white px-7 py-3.5 rounded-xl shadow-sm backdrop-blur-sm transition-all duration-200 border border-white/25"
                        href="#eligibility-checker">
                        <span class="material-symbols-outlined text-[18px]!">contact_phone</span>
                        <span>Contact Our Team</span>
                    </a>
                </div>

                <!-- Footer Accreditation Info -->
                <div
                    class="mt-6 pt-6 border-t border-white/10 flex flex-wrap items-center justify-center gap-2 font-mono text-xs text-slate-300">
                    <span>Nubex College Pty Ltd</span>
                    <span class="text-white/40">•</span>
                    <span>RTO 46173</span>
                    <span class="text-white/40">•</span>
                    <span>ACN 666 035 730</span>
                </div>

            </div>
        </div>
    </section>


    {{-- <section class="w-full py-12 sm:py-16 lg:py-20 bg-surface-container-low overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 xl:gap-16 items-center">

            <!-- Left: Image and RPL Highlight -->
            <div class="lg:col-span-5 min-w-0">
                <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden shadow-lg bg-surface-container">

                    <div class="relative aspect-[4/3] sm:aspect-[5/4] lg:aspect-[4/5] overflow-hidden">
                        <img
                            src="https://www.gstatic.com/labs-code/stitch/stitch-placeholder-300x300.svg"
                            alt="Australian vocational student exploring career opportunities"
                            loading="lazy"
                            class="w-full h-full object-cover"
                        />

                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-primary/10 to-transparent pointer-events-none"></div>

                        <!-- Image Badge -->
                        <div class="absolute top-4 left-4 sm:top-5 sm:left-5">
                            <span class="inline-flex items-center gap-2 px-3 py-2 rounded-full bg-white/95 text-primary text-xs font-bold shadow-sm backdrop-blur-sm">
                                <span class="material-symbols-outlined text-[17px]">verified</span>
                                Skills Recognition
                            </span>
                        </div>

                        <!-- Image Caption -->
                        <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-6 lg:p-7">
                            <div class="max-w-md p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-white/95 backdrop-blur-md shadow-lg">

                                <div class="flex items-start gap-3">
                                    <div class="w-11 h-11 rounded-xl bg-primary-fixed flex items-center justify-center shrink-0">
                                        <span class="material-symbols-outlined text-primary text-[25px]">workspace_premium</span>
                                    </div>

                                    <div class="min-w-0">
                                        <h3 class="font-heading text-sm sm:text-base font-bold text-primary">
                                            Fast-Track Your Ambition
                                        </h3>

                                        <p class="mt-1 text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                                            Turn relevant work experience and existing skills into a pathway towards recognised qualifications.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Supporting Note -->
                <div class="mt-4 flex items-start gap-3 px-1">
                    <span class="material-symbols-outlined text-secondary text-xl shrink-0">info</span>
                    <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                        Already have industry experience? Your existing skills may count towards your qualification.
                    </p>
                </div>
            </div>

            <!-- Right: Content -->
            <div class="lg:col-span-7 min-w-0 flex flex-col gap-5 sm:gap-6">

                <!-- Eyebrow -->
                <div class="inline-flex items-center gap-2 self-start px-3 py-1.5 rounded-full bg-surface-container text-primary text-[10px] sm:text-xs font-bold font-heading uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[16px] text-secondary">fact_check</span>
                    Prior Learning Assessment
                </div>

                <!-- Heading -->
                <div class="space-y-3">
                    <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary tracking-tight leading-tight">
                        Have You Gained Skills Through Work or Experience?
                    </h2>

                    <p class="text-sm sm:text-base text-on-surface-variant leading-relaxed">
                        Recognition of Prior Learning (RPL) assesses your existing skills, knowledge and relevant experience against the requirements of a nationally recognised qualification. Depending on your circumstances, an RPL pathway may be available to you.
                    </p>
                </div>

                <!-- Process Header -->
                <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-2 pt-1">
                    <div>
                        <h3 class="font-heading text-base sm:text-lg font-bold text-primary">
                            Your RPL Journey
                        </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant mt-1">
                            Four steps to get started
                        </p>
                    </div>

                    <span class="inline-flex items-center gap-1.5 text-xs font-semibold text-secondary">
                        <span class="material-symbols-outlined text-[17px]">route</span>
                        Step-by-step process
                    </span>
                </div>

                <!-- Process Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">

                    <!-- Step 1 -->
                    <div class="group h-full p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-white border border-outline-variant/40 shadow-sm transition-shadow hover:shadow-md">
                        <div class="flex items-start justify-between gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl bg-primary-fixed text-primary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[22px]">edit_document</span>
                            </div>

                            <span class="font-heading text-2xl font-extrabold text-primary/15 leading-none">01</span>
                        </div>

                        <h4 class="font-heading text-sm sm:text-base font-bold text-primary mb-2">
                            Submit an Enquiry
                        </h4>

                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                            Share your career history, practical experience and the qualifications that interest you.
                        </p>
                    </div>

                    <!-- Step 2 -->
                    <div class="group h-full p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-white border border-outline-variant/40 shadow-sm transition-shadow hover:shadow-md">
                        <div class="flex items-start justify-between gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl bg-primary-fixed text-primary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[22px]">forum</span>
                            </div>

                            <span class="font-heading text-2xl font-extrabold text-primary/15 leading-none">02</span>
                        </div>

                        <h4 class="font-heading text-sm sm:text-base font-bold text-primary mb-2">
                            Discuss Requirements
                        </h4>

                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                            Discuss relevant competency requirements with a qualified educational assessor.
                        </p>
                    </div>

                    <!-- Step 3 -->
                    <div class="group h-full p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-white border border-outline-variant/40 shadow-sm transition-shadow hover:shadow-md">
                        <div class="flex items-start justify-between gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl bg-primary-fixed text-primary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[22px]">folder_open</span>
                            </div>

                            <span class="font-heading text-2xl font-extrabold text-primary/15 leading-none">03</span>
                        </div>

                        <h4 class="font-heading text-sm sm:text-base font-bold text-primary mb-2">
                            Provide Evidence
                        </h4>

                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                            Gather relevant workplace records, references, contracts and supporting documents.
                        </p>
                    </div>

                    <!-- Step 4 -->
                    <div class="group h-full p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-white border border-outline-variant/40 shadow-sm transition-shadow hover:shadow-md">
                        <div class="flex items-start justify-between gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl bg-primary-fixed text-primary flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-[22px]">task_alt</span>
                            </div>

                            <span class="font-heading text-2xl font-extrabold text-primary/15 leading-none">04</span>
                        </div>

                        <h4 class="font-heading text-sm sm:text-base font-bold text-primary mb-2">
                            Receive Your Outcome
                        </h4>

                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                            Receive an assessment outcome based on the required evidence and competency assessment.
                        </p>
                    </div>

                </div>

                <!-- Assessment Policy -->
                <div class="flex items-start gap-3 sm:gap-4 p-4 sm:p-5 rounded-xl sm:rounded-2xl bg-surface-container border border-outline-variant/40">
                    <div class="w-10 h-10 rounded-xl bg-white flex items-center justify-center shrink-0 shadow-sm">
                        <span class="material-symbols-outlined text-secondary text-[22px]">policy</span>
                    </div>

                    <div class="min-w-0">
                        <h4 class="font-heading text-sm font-bold text-primary mb-1">
                            Important Assessment Information
                        </h4>

                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed">
                            Assessment outcomes depend on formal evidence mapping and competency assessment. Work experience alone does not guarantee the award of a qualification.
                        </p>
                    </div>
                </div>

                <!-- CTA -->
                <div class="flex flex-col sm:flex-row sm:items-center gap-3 pt-1">
                    <a
                        href="#eligibility-checker"
                        class="inline-flex w-full sm:w-fit items-center justify-center gap-2 px-5 py-3 sm:px-6 sm:py-3.5 rounded-lg bg-primary hover:bg-primary-dark text-white font-heading font-semibold text-sm shadow-sm transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary focus-visible:ring-offset-2"
                    >
                        <span>Explore RPL Options</span>
                        <span class="material-symbols-outlined text-[19px]">arrow_forward</span>
                    </a>

                    <span class="inline-flex items-center justify-center sm:justify-start gap-2 text-xs sm:text-sm text-on-surface-variant">
                        <span class="material-symbols-outlined text-secondary text-[18px]">support_agent</span>
                        Get guidance on your options
                    </span>
                </div>

            </div>
        </div>
    </div>
</section> --}}
@endsection

<!-- Custom Style for Connecting Line Shimmer Effect (Add to your CSS file or blade view) -->
<style>
    @keyframes shimmerLine {
        0% {
            background-position: -200% 0;
        }

        100% {
            background-position: 200% 0;
        }
    }

    .animated-connector {
        background: linear-gradient(90deg, rgba(25, 104, 178, 0.15) 0%, rgba(25, 104, 178, 0.8) 50%, rgba(25, 104, 178, 0.15) 100%);
        background-size: 200% 100%;
        animation: shimmerLine 3s infinite linear;
    }
</style>
