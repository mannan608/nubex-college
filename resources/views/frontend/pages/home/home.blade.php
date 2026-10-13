@extends('frontend.layouts.app')

@section('content')
    <!-- Section 1: Hero Section -->
    <section
        class="relative w-full overflow-hidden bg-gradient-to-br from-[#0c273e] via-[#123b5d] to-[#081b2c] py-14 lg:py-20 text-white border-b border-white/10 shadow-inner">
        <div
            class="absolute inset-0 opacity-10 bg-[radial-gradient(#d0e4ff_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none">
        </div>
        <div class="absolute top-0 right-1/4 w-[450px] h-[450px] bg-secondary/25 rounded-full blur-3xl pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 left-10 w-[350px] h-[350px] bg-primary-fixed/15 rounded-full blur-3xl pointer-events-none">
        </div>
        <div class="max-w-7xl mx-auto px-5 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
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
                    <p class="text-base sm:text-lg text-slate-200 max-w-2xl leading-relaxed">
                        Explore vocational qualifications in business leadership,
                        community services, individual support, mental health and
                        allied health assistance. Discover a training pathway that
                        aligns with your experience, interests and career goals.
                    </p>
                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a class="inline-flex items-center justify-center gap-2 font-heading font-semibold text-sm bg-secondary hover:bg-secondary/90 text-white px-7 py-3.5 rounded-lg shadow-lg transition-all duration-200"
                            href="#qualifications">
                            <span>Explore Qualifications</span>
                            <span class="material-symbols-outlined text-[18px]!">arrow_forward</span>
                        </a>
                        <a class="inline-flex items-center justify-center gap-2 font-heading font-semibold text-sm bg-white hover:bg-white text-brand-600 border border-white/20 px-6 py-3.5 rounded-lg shadow-sm backdrop-blur-sm transition-all duration-200"
                            href="#eligibility-checker">
                            <span class="material-symbols-outlined text-brand-600 text-[18px]!">fact_check</span>
                            <span>Check Your Eligibility</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-6 mt-2 border-t border-white/10 text-xs">
                        <div
                            class="flex items-center gap-2.5 p-3 rounded-lg bg-white/5 border border-white/10 backdrop-blur-sm">
                            <span class="material-symbols-outlined text-secondary-container text-[20px]">verified</span>
                            <span class="text-slate-100 font-medium leading-tight">Australian Registered Training
                                Organisation</span>
                        </div>
                        <div
                            class="flex items-center gap-2.5 p-3 rounded-lg bg-white/5 border border-white/10 backdrop-blur-sm">
                            <span
                                class="material-symbols-outlined text-secondary-container text-[20px]">workspace_premium</span>
                            <span class="text-slate-100 font-medium leading-tight">Nationally Recognised
                                Qualifications</span>
                        </div>
                        <div
                            class="flex items-center gap-2.5 p-3 rounded-lg bg-white/5 border border-white/10 backdrop-blur-sm">
                            <span
                                class="material-symbols-outlined text-secondary-container text-[20px]">support_agent</span>
                            <span class="text-slate-100 font-medium leading-tight">Student Support and Guidance</span>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Replaced Image with pristine Fast Enquiry Form -->
                <div class="lg:col-span-5 relative flex flex-col justify-center">
                    <div
                        class="relative z-20 bg-white text-on-surface p-6 sm:p-7 rounded-2xl shadow-2xl border border-white/40">
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
                                class="w-10 h-10 rounded-full bg-secondary/10 flex items-center justify-center text-secondary">
                                <span class="material-symbols-outlined text-[22px]">explore</span>
                            </div>
                        </div>
                        <p class="text-xs text-on-surface-variant mb-4">
                            Tell us what you are interested in, and our qualified team
                            will help guide your training pathway.
                        </p>
                        <form class="flex flex-col gap-3">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <div>
                                    <label class="text-xs font-semibold text-on-surface block mb-1">Full Name</label>
                                    <input
                                        class="placeholder:text-neutral-500 w-full px-3 py-2 text-xs rounded-lg bg-surface-container-low text-on-surface border border-outline-variant/60 focus:outline-none focus:border-secondary focus:bg-white"
                                        placeholder="Sarah Jenkins" required="" type="text" />
                                </div>
                                <div>
                                    <label class="text-xs font-semibold text-on-surface block mb-1">Mobile Number</label>
                                    <input
                                        class="placeholder:text-neutral-500 w-full px-3 py-2 text-xs rounded-lg bg-surface-container-low text-on-surface border border-outline-variant/60 focus:outline-none focus:border-secondary focus:bg-white"
                                        placeholder="0400 000 000" required="" type="tel" />
                                </div>
                            </div>
                            <div>
                                <label class="text-xs font-semibold text-on-surface block mb-1">Email Address</label>
                                <input
                                    class="placeholder:text-neutral-500 w-full px-3 py-2 text-xs rounded-lg bg-surface-container-low text-on-surface border border-outline-variant/60 focus:outline-none focus:border-secondary focus:bg-white"
                                    placeholder="s.jenkins@example.com.au" required="" type="email" />
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <div>
                                    <label class="text-xs font-semibold text-on-surface block mb-1">Target
                                        Qualification</label>
                                    <select
                                        class="placeholder:text-neutral-500 w-full px-3 py-2 text-xs rounded-lg bg-surface-container-low text-on-surface border border-outline-variant/60 focus:outline-none focus:border-secondary focus:bg-white"
                                        required="">
                                        <option disabled="" selected="" value="">
                                            Select course...
                                        </option>
                                        <option value="BSB50420">
                                            BSB50420 - Dip Leadership &amp; Mgt
                                        </option>
                                        <option value="BSB60420">
                                            BSB60420 - Adv Dip Leadership &amp; Mgt
                                        </option>
                                        <option value="CHC33021">
                                            CHC33021 - Cert III Individual Support
                                        </option>
                                        <option value="CHC43015">
                                            CHC43015 - Cert IV Ageing Support
                                        </option>
                                        <option value="CHC43315">
                                            CHC43315 - Cert IV Mental Health
                                        </option>
                                        <option value="CHC52025">
                                            CHC52025 - Dip Community Services
                                        </option>
                                        <option value="HLT33021">
                                            HLT33021 - Cert III Allied Health
                                        </option>
                                    </select>
                                </div>
                                <div>
                                    <label class="text-xs font-semibold text-on-surface block mb-1">Preferred
                                        Pathway</label>
                                    <select
                                        class="placeholder:text-neutral-500 w-full px-3 py-2 text-xs rounded-lg bg-surface-container-low text-on-surface border border-outline-variant/60 focus:outline-none focus:border-secondary focus:bg-white"
                                        required="">
                                        <option disabled="" selected="" value="">
                                            Select mode...
                                        </option>
                                        <option value="online">Online Self-Paced</option>
                                        <option value="blended">Blended Learning</option>
                                        <option value="workplace">Workplace Based</option>
                                        <option value="rpl">
                                            Recognition of Prior Learning (RPL)
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex items-start gap-2 pt-1">
                                <input class="mt-0.5 rounded text-primary focus:ring-secondary" id="hero-consent"
                                    required="" type="checkbox" />
                                <label class="text-[11px] leading-tight text-on-surface-variant cursor-pointer"
                                    for="hero-consent">
                                    I consent to Nubex College contacting me regarding
                                    course details in accordance with the Privacy Act 1988.
                                </label>
                            </div>
                            <button
                                class="mt-2 w-full py-3 bg-secondary hover:bg-secondary/90 text-white font-heading font-semibold text-sm rounded-lg shadow-md transition-all flex items-center justify-center gap-2"
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

    {{-- <section class="py-16">
        @include('frontend.pages.home.section.marquee')
    </section> --}}

    <!-- Section 2: Explore Qualifications Section (Sleek, Concise, Animated Grid) -->
    <section class="w-full py-16 bg-surface" id="qualifications">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
                <div>
                    <div
                        class="inline-flex items-center gap-1.5 px-3 py-1 bg-brand-50 text-brand-600 rounded-full mb-2 text-[10px] font-bold font-heading uppercase tracking-wider">
                        <span class="material-symbols-outlined text-base!">school</span>
                        <span>Accredited Programs</span>
                    </div>
                    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-primary">
                        Explore Our Qualifications
                    </h2>
                    <p class="text-sm text-on-surface-variant max-w-2xl mt-1">
                        Nationally accredited vocational qualifications tailored for
                        career progression and workplace readiness.
                    </p>
                </div>
                <!-- Filter buttons -->
                <div class="flex flex-wrap items-center gap-2">
                    <a href="#" class="text-sm text-neutral-500 hover:underline">See All Qualifications</a>
                </div>
            </div>
            <!-- Sleek 3-Column Grid -->
           @include('frontend.pages.industry.qualification-grid', ['qualifications' => $courses])
        </div>
    </section>
    <!-- Section 3: Why Choose Nubex College? -->
    <section class="w-full py-16 bg-white" id="about">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <div
                    class="inline-flex items-center gap-1.5 px-3 py-1 bg-primary-fixed/50 text-primary rounded-full mb-2 text-[10px] font-bold font-heading uppercase tracking-wider">
                    <span>The Nubex Difference</span>
                </div>
                <h2 class="font-heading text-2xl sm:text-3xl font-bold text-primary">
                    Why Choose Nubex College?
                </h2>
                <p class="text-sm text-on-surface-variant mt-2">
                    We combine ASQA regulatory discipline with tailored student
                    mentorship, equipping every learner for meaningful career
                    progression.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="p-6 rounded-xl bg-white shadow-sm hover:shadow-md transition-all border border-surface-container">
                    <div
                        class="w-12 h-12 rounded-lg bg-surface-container-high text-secondary flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-[26px]">alt_route</span>
                    </div>
                    <h3 class="font-heading text-base font-bold text-primary mb-2">
                        Clear Training Pathways
                    </h3>
                    <p class="text-xs text-on-surface-variant leading-relaxed">
                        Understand the available qualifications and requirements
                        before making a commitment.
                    </p>
                </div>
                <div
                    class="p-6 rounded-xl bg-white shadow-sm hover:shadow-md transition-all border border-surface-container">
                    <div
                        class="w-12 h-12 rounded-lg bg-surface-container-high text-secondary flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-[26px]">forum</span>
                    </div>
                    <h3 class="font-heading text-base font-bold text-primary mb-2">
                        Guidance Throughout Your Journey
                    </h3>
                    <p class="text-xs text-on-surface-variant leading-relaxed">
                        Make it easy to ask questions and receive course information
                        at every step.
                    </p>
                </div>
                <div
                    class="p-6 rounded-xl bg-white shadow-sm hover:shadow-md transition-all border border-surface-container">
                    <div
                        class="w-12 h-12 rounded-lg bg-surface-container-high text-secondary flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-[26px]">architecture</span>
                    </div>
                    <h3 class="font-heading text-base font-bold text-primary mb-2">
                        Relevant Vocational Learning
                    </h3>
                    <p class="text-xs text-on-surface-variant leading-relaxed">
                        Accurate knowledge and competencies addressed by each
                        qualification in real Australian workplaces.
                    </p>
                </div>
                <div
                    class="p-6 rounded-xl bg-white shadow-sm hover:shadow-md transition-all border border-surface-container">
                    <div
                        class="w-12 h-12 rounded-lg bg-surface-container-high text-secondary flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-[26px]">visibility</span>
                    </div>
                    <h3 class="font-heading text-base font-bold text-primary mb-2">
                        Transparent Information
                    </h3>
                    <p class="text-xs text-on-surface-variant leading-relaxed">
                        Course requirements, fees, policies, student rights and
                        guidelines are fully transparent.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 4: NEW SECTION - Online Self-Paced Study (Placed right before Prior Learning Assessment) -->
    <section
        class="w-full py-16 bg-gradient-to-b from-surface-container-low/80 to-surface border-y border-surface-container">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="max-w-3xl mb-12">             

                 <div
                        class="inline-flex items-center gap-1.5 px-3 py-1 bg-secondary/10 text-brand-600 rounded-full mb-2 text-[10px] font-bold font-heading uppercase tracking-wider">
                       <span class="material-symbols-outlined text-[16px]!">devices</span>
                        <span>FLEXIBLE LEARNING</span>
                    </div>

                <h2 class="font-heading text-2xl sm:text-3xl font-bold text-primary tracking-tight">
                    Study at Your Own Pace, Wherever You Are
                </h2>
                <p class="text-base text-on-surface-variant mt-3 leading-relaxed">
                    Balance your study around work, family, and life commitments
                    with Nubex College's comprehensive online learning portal.
                    Access high-quality digital course materials, interactive
                    assessments, and one-on-one trainer support whenever suits you
                    best.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="p-6 rounded-2xl bg-white border border-outline-variant/50 shadow-sm hover:shadow-md hover:border-secondary/40 transition-all flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-secondary-fixed/50 text-secondary flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-[26px]">cloud_sync</span>
                        </div>
                        <h3 class="font-heading text-sm font-bold text-primary mb-2">
                            24/7 Portal Access
                        </h3>
                        <p class="text-xs text-on-surface-variant leading-relaxed">
                            Cloud learning platform with lectures, curated resources,
                            digital workbooks, and real-time progress tracking
                            accessible anytime.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-surface-container-low text-[11px] font-semibold text-secondary">
                        Always Accessible
                    </div>
                </div>
                <div
                    class="p-6 rounded-2xl bg-white border border-outline-variant/50 shadow-sm hover:shadow-md hover:border-secondary/40 transition-all flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-secondary-fixed/50 text-secondary flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-[26px]">support_agent</span>
                        </div>
                        <h3 class="font-heading text-sm font-bold text-primary mb-2">
                            Dedicated Assessor Support
                        </h3>
                        <p class="text-xs text-on-surface-variant leading-relaxed">
                            Direct messaging and scheduled video sessions with certified
                            Australian trainers dedicated to coaching your success.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-surface-container-low text-[11px] font-semibold text-secondary">
                        1-on-1 Mentorship
                    </div>
                </div>
                <div
                    class="p-6 rounded-2xl bg-white border border-outline-variant/50 shadow-sm hover:shadow-md hover:border-secondary/40 transition-all flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-secondary-fixed/50 text-secondary flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-[26px]">workspaces</span>
                        </div>
                        <h3 class="font-heading text-sm font-bold text-primary mb-2">
                            Workplace Integration
                        </h3>
                        <p class="text-xs text-on-surface-variant leading-relaxed">
                            Structured self-paced logbooks, simulated workplace
                            assessments, and projects matching authentic industry tasks.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-surface-container-low text-[11px] font-semibold text-secondary">
                        Industry Connected
                    </div>
                </div>
                <div
                    class="p-6 rounded-2xl bg-white border border-outline-variant/50 shadow-sm hover:shadow-md hover:border-secondary/40 transition-all flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-secondary-fixed/50 text-secondary flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-[26px]">event_available</span>
                        </div>
                        <h3 class="font-heading text-sm font-bold text-primary mb-2">
                            Flexible Milestones
                        </h3>
                        <p class="text-xs text-on-surface-variant leading-relaxed">
                            Set your own weekly milestones within national qualification
                            timeframes to achieve your goals on your personal schedule.
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-surface-container-low text-[11px] font-semibold text-secondary">
                        Self-Paced Timeline
                    </div>
                </div>
            </div>
            <div class="mt-8 flex flex-wrap items-center gap-4">
                <a class="inline-flex items-center gap-2 px-6 py-3 bg-primary hover:bg-primary-dark text-white font-heading font-semibold text-sm rounded-lg shadow-sm transition-colors"
                    href="#qualifications">
                    <span>Explore Online Pathways</span>
                    <span class="material-symbols-outlined text-[18px]!">arrow_forward</span>
                </a>
                <a class="inline-flex items-center gap-2 px-6 py-3 bg-white hover:bg-surface-container border border-outline-variant/60 text-primary font-heading font-semibold text-sm rounded-lg shadow-sm transition-colors"
                    href="#eligibility-checker">
                    <span class="material-symbols-outlined text-secondary text-[18px]">download</span>
                    <span>Download Course Guide</span>
                </a>
            </div>
        </div>
    </section>
    <!-- Section 5: Recognition of Prior Learning (RPL) Section -->
    <section class="w-full py-16 bg-surface-container-low">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-5">
                    <div class="relative rounded-2xl overflow-hidden shadow-lg bg-surface-container h-[440px]">
                        <img alt="Australian vocational student" class="w-full h-full object-cover"
                            src="https://www.gstatic.com/labs-code/stitch/stitch-placeholder-300x300.svg" />
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
                        <a class="inline-flex items-center gap-2 font-heading font-semibold text-sm bg-primary hover:bg-primary-dark text-white px-6 py-3.5 rounded-lg shadow-sm transition-colors"
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
    <section class="w-full py-16 bg-surface" id="eligibility-checker">
        <div class="max-w-240 mx-auto px-6 sm:px-10">
            <div class="text-center mb-8">
                <div
                    class="inline-flex items-center gap-1.5 px-3 py-1 bg-surface-container-high text-primary rounded-full mb-2 text-[10px] font-bold font-heading uppercase tracking-wider">
                    <span>Fast Evaluation Tool</span>
                </div>
                <h2 class="font-heading text-2xl sm:text-3xl font-bold text-primary">
                    Let's Find the Right Pathway for You
                </h2>
                <p class="text-sm text-on-surface-variant max-w-xl mx-auto mt-2">
                    Complete our short self-assessment to discover which national
                    qualification and study delivery best fits your career
                    background.
                </p>
            </div>
            <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-md border border-surface-container">
                <div class="mb-6">
                    <div class="flex items-center justify-between text-xs text-on-surface-variant mb-2">
                        <span class="font-semibold text-primary" id="step-label">Step 1 of 4: Qualification of
                            Interest</span>
                        <span id="step-percentage">25% Completed</span>
                    </div>
                    <div class="w-full h-2 bg-surface-container rounded-full overflow-hidden">
                        <div class="h-full bg-secondary rounded-full transition-all duration-300 w-1/4"
                            id="step-progress-bar"></div>
                    </div>
                </div>
                <form>
                    <!-- Step 1 -->
                    <div class="wizard-step flex flex-col gap-4" id="step-1">
                        <h3 class="font-heading text-base font-bold text-primary">
                            Which qualification do you want to explore?
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <label
                                class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low hover:bg-surface-container cursor-pointer transition-colors">
                                <input checked="" class="mt-1" name="target_qual" type="radio"
                                    value="BSB50420" />
                                <div>
                                    <span class="text-xs font-bold text-secondary block font-heading">BSB50420</span>
                                    <span class="text-xs font-semibold text-primary">Diploma of Leadership and
                                        Management</span>
                                </div>
                            </label>
                            <label
                                class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low hover:bg-surface-container cursor-pointer transition-colors">
                                <input class="mt-1" name="target_qual" type="radio" value="BSB60420" />
                                <div>
                                    <span class="text-xs font-bold text-secondary block font-heading">BSB60420</span>
                                    <span class="text-xs font-semibold text-primary">Advanced Diploma of
                                        Leadership</span>
                                </div>
                            </label>
                            <label
                                class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low hover:bg-surface-container cursor-pointer transition-colors">
                                <input class="mt-1" name="target_qual" type="radio" value="CHC33021" />
                                <div>
                                    <span class="text-xs font-bold text-secondary block font-heading">CHC33021</span>
                                    <span class="text-xs font-semibold text-primary">Certificate III in Individual
                                        Support</span>
                                </div>
                            </label>
                            <label
                                class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low hover:bg-surface-container cursor-pointer transition-colors">
                                <input class="mt-1" name="target_qual" type="radio" value="CHC43015" />
                                <div>
                                    <span class="text-xs font-bold text-secondary block font-heading">CHC43015</span>
                                    <span class="text-xs font-semibold text-primary">Certificate IV in Ageing
                                        Support</span>
                                </div>
                            </label>
                            <label
                                class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low hover:bg-surface-container cursor-pointer transition-colors">
                                <input class="mt-1" name="target_qual" type="radio" value="CHC43315" />
                                <div>
                                    <span class="text-xs font-bold text-secondary block font-heading">CHC43315</span>
                                    <span class="text-xs font-semibold text-primary">Certificate IV in Mental
                                        Health</span>
                                </div>
                            </label>
                            <label
                                class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low hover:bg-surface-container cursor-pointer transition-colors">
                                <input class="mt-1" name="target_qual" type="radio" value="CHC52025" />
                                <div>
                                    <span class="text-xs font-bold text-secondary block font-heading">CHC52025</span>
                                    <span class="text-xs font-semibold text-primary">Diploma of Community
                                        Services</span>
                                </div>
                            </label>
                            <label
                                class="flex items-start gap-3 p-3 rounded-xl bg-surface-container-low hover:bg-surface-container cursor-pointer transition-colors sm:col-span-2">
                                <input class="mt-1" name="target_qual" type="radio" value="HLT33021" />
                                <div>
                                    <span class="text-xs font-bold text-secondary block font-heading">HLT33021</span>
                                    <span class="text-xs font-semibold text-primary">Certificate III in Allied Health
                                        Assistance</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="wizard-step hidden flex flex-col gap-4" id="step-2">
                        <h3 class="font-heading text-base font-bold text-primary">
                            Your Practical Background &amp; Preferences
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="text-xs font-semibold text-on-surface block mb-1">Australian Industry
                                    Experience</label>
                                <select
                                    class="w-full px-3 py-2 rounded-lg bg-surface-container-low text-on-surface text-xs focus:outline-none">
                                    <option value="none">
                                        Less than 1 year / New to industry
                                    </option>
                                    <option value="1-2">
                                        1 to 2 years relevant experience
                                    </option>
                                    <option value="3-5">
                                        3 to 5 years solid experience
                                    </option>
                                    <option value="5+">
                                        5+ years senior or supervisor experience
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label class="text-xs font-semibold text-on-surface block mb-1">Highest Australian
                                    Qualification Held</label>
                                <select
                                    class="w-full px-3 py-2 rounded-lg bg-surface-container-low text-on-surface text-xs focus:outline-none">
                                    <option value="year12">
                                        Year 12 / Secondary School
                                    </option>
                                    <option value="cert3">Certificate III</option>
                                    <option value="cert4">Certificate IV</option>
                                    <option value="diploma">
                                        Diploma / Advanced Diploma
                                    </option>
                                    <option value="degree">
                                        Bachelor Degree or Higher
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-on-surface block mb-1.5">Preferred Study
                                Mode</label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 text-xs">
                                <label
                                    class="p-2.5 rounded-lg bg-surface-container-low hover:bg-surface-container flex items-center gap-2 cursor-pointer">
                                    <input checked="" name="learning_mode" type="radio" value="blended" />
                                    <span>Blended Learning</span>
                                </label>
                                <label
                                    class="p-2.5 rounded-lg bg-surface-container-low hover:bg-surface-container flex items-center gap-2 cursor-pointer">
                                    <input name="learning_mode" type="radio" value="workplace" />
                                    <span>Workplace Training</span>
                                </label>
                                <label
                                    class="p-2.5 rounded-lg bg-surface-container-low hover:bg-surface-container flex items-center gap-2 cursor-pointer">
                                    <input name="learning_mode" type="radio" value="rpl" />
                                    <span>RPL Assessment Only</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="wizard-step hidden flex flex-col gap-4" id="step-3">
                        <h3 class="font-heading text-base font-bold text-primary">
                            Supporting Evidence Indicator
                        </h3>
                        <p class="text-xs text-on-surface-variant">
                            Tick any documents or records you currently have access to:
                        </p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs">
                            <label
                                class="flex items-center gap-2.5 p-2.5 rounded-lg bg-surface-container-low hover:bg-surface-container cursor-pointer">
                                <input checked="" class="rounded text-primary" name="evidence" type="checkbox"
                                    value="resume" />
                                <span>Current Resume / CV</span>
                            </label>
                            <label
                                class="flex items-center gap-2.5 p-2.5 rounded-lg bg-surface-container-low hover:bg-surface-container cursor-pointer">
                                <input class="rounded text-primary" name="evidence" type="checkbox" value="contracts" />
                                <span>Employment Contracts / Duties</span>
                            </label>
                            <label
                                class="flex items-center gap-2.5 p-2.5 rounded-lg bg-surface-container-low hover:bg-surface-container cursor-pointer">
                                <input class="rounded text-primary" name="evidence" type="checkbox" value="payslips" />
                                <span>Recent Payslips / Work Letters</span>
                            </label>
                            <label
                                class="flex items-center gap-2.5 p-2.5 rounded-lg bg-surface-container-low hover:bg-surface-container cursor-pointer">
                                <input class="rounded text-primary" name="evidence" type="checkbox"
                                    value="certificates" />
                                <span>Prior Certificates or Transcripts</span>
                            </label>
                        </div>
                        <div
                            class="p-2.5 bg-surface-container-high/60 rounded-lg flex items-center gap-2 text-xs text-on-surface-variant">
                            <span class="material-symbols-outlined text-secondary text-[18px]">info</span>
                            <span>Document upload is not required now. Our assessor will
                                guide you through evidence collection later.</span>
                        </div>
                    </div>
                    <!-- Step 4 -->
                    <div class="wizard-step hidden flex flex-col gap-4" id="step-4">
                        <h3 class="font-heading text-base font-bold text-primary">
                            Where should we send your pathway summary?
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="text-xs font-semibold text-on-surface block mb-1">Full Legal
                                    Name</label>
                                <input
                                    class="w-full px-3 py-2 rounded-lg bg-surface-container-low text-on-surface text-xs focus:outline-none"
                                    id="wiz_name" placeholder="Marcus Vance" required="" type="text" />
                            </div>
                            <div>
                                <label class="text-xs font-semibold text-on-surface block mb-1">Mobile
                                    Contact</label>
                                <input
                                    class="w-full px-3 py-2 rounded-lg bg-surface-container-low text-on-surface text-xs focus:outline-none"
                                    id="wiz_phone" placeholder="0412 345 678" required="" type="tel" />
                            </div>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-on-surface block mb-1">Email Address</label>
                            <input
                                class="w-full px-3 py-2 rounded-lg bg-surface-container-low text-on-surface text-xs focus:outline-none"
                                id="wiz_email" placeholder="marcus.vance@gmail.com" required="" type="email" />
                        </div>
                        <div class="flex items-start gap-2 pt-1 text-xs text-on-surface-variant">
                            <input checked="" class="mt-0.5 rounded text-primary" id="wiz_consent" required=""
                                type="checkbox" />
                            <label for="wiz_consent">I confirm the information supplied is accurate and agree
                                to receive enrolment consultation from Nubex College (RTO
                                46173).</label>
                        </div>
                    </div>
                    <!-- Success Preview -->
                    <div class="hidden flex flex-col items-center justify-center text-center py-10 gap-2"
                        id="wizard-success">
                        <div
                            class="w-14 h-14 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center mb-2">
                            <span class="material-symbols-outlined text-[32px]">task_alt</span>
                        </div>
                        <h3 class="font-heading text-lg font-bold text-primary">
                            Enquiry Received!
                        </h3>
                        <p class="text-xs text-on-surface max-w-md">
                            Thank you for your enquiry. Our team will review the
                            information provided and explain next steps within one
                            business day.
                        </p>
                        <span class="text-xs font-mono text-secondary mt-1 font-bold">CONFIRMATION REF:
                            NBX-2025-ELIG</span>
                        <button
                            class="mt-3 px-5 py-2 rounded-lg bg-surface-container text-primary text-xs font-semibold hover:bg-surface-container-high"
                            onclick="resetWizard()" type="button">
                            Submit Another Enquiry
                        </button>
                    </div>
                    <!-- Navigation Buttons -->
                    <div class="flex items-center justify-between pt-6 mt-4 border-t border-surface-container/60"
                        id="wizard-controls">
                        <button
                            class="hidden px-4 py-2 rounded-lg bg-surface-container-low text-primary text-xs font-semibold hover:bg-surface-container transition-colors"
                            id="prev-btn" onclick="prevStep()" type="button">
                            Back
                        </button>
                        <div class="ml-auto">
                            <button
                                class="inline-flex items-center gap-2 px-6 py-2.5 bg-primary hover:bg-primary-dark text-white font-heading font-semibold text-xs rounded-lg shadow-sm transition-colors"
                                id="next-btn" onclick="nextStep()" type="button">
                                <span>Continue</span>
                                <span class="material-symbols-outlined text-[16px]!">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Section 7: FULLY ANIMATED "How to Get Started" Timeline -->
    <section class="w-full py-20 bg-surface-container-low relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 lg:px-8 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <div
                    class="inline-flex items-center gap-1.5 px-3.5 py-1.5 bg-secondary-fixed text-on-secondary-fixed rounded-full mb-3 text-[10px] font-bold font-heading uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[16px]! text-secondary">trending_up</span>
                    <span>Clear Roadmap</span>
                </div>
                <h2 class="font-heading text-2xl sm:text-3xl font-bold text-primary">
                    How to Get Started
                </h2>
                <p class="text-sm text-on-surface-variant mt-2">
                    A transparent, stress-free route from initial enquiry through to
                    official training orientation.
                </p>
            </div>
            <!-- Animated 3-Step Grid with Connecting Flow Lines -->
            <div class="relative grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Animated Connecting Shimmer Line (Desktop) -->
                <div
                    class="hidden md:block absolute top-[50px] left-[15%] right-[15%] h-1 animated-connector rounded-full z-0 pointer-events-none">
                </div>
                <!-- Step 1 -->
                <div
                    class="group relative z-10 p-7 rounded-2xl bg-white border border-outline-variant/50 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="relative flex items-center justify-center">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-primary text-white flex items-center justify-center font-heading text-xl font-extrabold shadow-md glow-pulse transition-transform duration-300 group-hover:scale-110">
                                    01
                                </div>
                                <span class="absolute -top-1 -right-1 flex h-3.5 w-3.5">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary-container opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-secondary"></span>
                                </span>
                            </div>
                            <div
                                class="w-11 h-11 rounded-xl bg-surface-container-low group-hover:bg-secondary/10 flex items-center justify-center text-secondary transition-colors">
                                <span class="material-symbols-outlined text-[24px]">manage_search</span>
                            </div>
                        </div>
                        <div
                            class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-secondary-fixed/40 text-on-secondary-fixed text-[11px] font-semibold tracking-wider uppercase mb-2">
                            Step One
                        </div>
                        <h3
                            class="font-heading text-lg font-bold text-primary mb-2 group-hover:text-secondary transition-colors">
                            Explore
                        </h3>
                        <p class="text-xs text-on-surface-variant leading-relaxed">
                            Browse qualifications and review relevant course
                            information, units of competency, delivery locations, and
                            career outcomes.
                        </p>
                    </div>
                    <div
                        class="mt-6 pt-4 border-t border-surface-container-low text-xs font-semibold text-secondary flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        <span>Find your qualification</span>
                        <span class="material-symbols-outlined text-[16px]!">arrow_forward</span>
                    </div>
                </div>
                <!-- Step 2 -->
                <div
                    class="group relative z-10 p-7 rounded-2xl bg-white border border-outline-variant/50 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="relative flex items-center justify-center">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-primary text-white flex items-center justify-center font-heading text-xl font-extrabold shadow-md glow-pulse transition-transform duration-300 group-hover:scale-110">
                                    02
                                </div>
                                <span class="absolute -top-1 -right-1 flex h-3.5 w-3.5">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary-container opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-secondary"></span>
                                </span>
                            </div>
                            <div
                                class="w-11 h-11 rounded-xl bg-surface-container-low group-hover:bg-secondary/10 flex items-center justify-center text-secondary transition-colors">
                                <span class="material-symbols-outlined text-[24px]">contact_support</span>
                            </div>
                        </div>
                        <div
                            class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-secondary-fixed/40 text-on-secondary-fixed text-[11px] font-semibold tracking-wider uppercase mb-2">
                            Step Two
                        </div>
                        <h3
                            class="font-heading text-lg font-bold text-primary mb-2 group-hover:text-secondary transition-colors">
                            Enquire
                        </h3>
                        <p class="text-xs text-on-surface-variant leading-relaxed">
                            Submit an enquiry or discuss qualification requirements with
                            our college admissions advisors and expert RPL assessment
                            team.
                        </p>
                    </div>
                    <div
                        class="mt-6 pt-4 border-t border-surface-container-low text-xs font-semibold text-secondary flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        <span>Speak with an advisor</span>
                        <span class="material-symbols-outlined text-[16px]!">arrow_forward</span>
                    </div>
                </div>
                <!-- Step 3 -->
                <div
                    class="group relative z-10 p-7 rounded-2xl bg-white border border-outline-variant/50 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="relative flex items-center justify-center">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-secondary text-white flex items-center justify-center font-heading text-xl font-extrabold shadow-md glow-pulse transition-transform duration-300 group-hover:scale-110">
                                    03
                                </div>
                                <span class="absolute -top-1 -right-1 flex h-3.5 w-3.5">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary-container opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-secondary"></span>
                                </span>
                            </div>
                            <div
                                class="w-11 h-11 rounded-xl bg-surface-container-low group-hover:bg-secondary/10 flex items-center justify-center text-secondary transition-colors">
                                <span class="material-symbols-outlined text-[24px]">how_to_reg</span>
                            </div>
                        </div>
                        <div
                            class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-secondary-fixed/40 text-on-secondary-fixed text-[11px] font-semibold tracking-wider uppercase mb-2">
                            Step Three
                        </div>
                        <h3
                            class="font-heading text-lg font-bold text-primary mb-2 group-hover:text-secondary transition-colors">
                            Apply
                        </h3>
                        <p class="text-xs text-on-surface-variant leading-relaxed">
                            Follow our straightforward enrolment review once you have
                            received verified course recommendations and fee plans.
                        </p>
                    </div>
                    <div
                        class="mt-6 pt-4 border-t border-surface-container-low text-xs font-semibold text-secondary flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        <span>Commence learning</span>
                        <span class="material-symbols-outlined text-[16px]!">arrow_forward</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 8: Student Experience & Compliance -->
    <section class="w-full py-16 bg-white">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-6 flex flex-col gap-4">
                    <div
                        class="inline-flex items-center gap-1.5 px-3 py-1 bg-surface-container text-primary rounded-full self-start text-[10px] font-bold font-heading uppercase tracking-wider">
                        <span>Student Wellbeing &amp; Compliance</span>
                    </div>
                    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-primary">
                        Student Support &amp; Educational Transparency
                    </h2>
                    <p class="text-sm text-on-surface-variant leading-relaxed">
                        At Nubex College, student equity, academic rigor, and
                        supportive mentoring are core obligations. Every prospective
                        and enrolled student has direct, unfettered access to support
                        networks and administrative clarity.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                        <div class="p-4 rounded-xl bg-white">
                            <span class="material-symbols-outlined text-secondary text-[22px] mb-1">psychology_alt</span>
                            <h4 class="font-heading text-xs font-bold text-primary">
                                LLN Assistance
                            </h4>
                            <p class="text-xs text-on-surface-variant mt-1">
                                Targeted language, literacy and numeracy coaching designed
                                to support your course progression.
                            </p>
                        </div>
                        <div class="p-4 rounded-xl bg-white">
                            <span
                                class="material-symbols-outlined text-secondary text-[22px] mb-1">accessible_forward</span>
                            <h4 class="font-heading text-xs font-bold text-primary">
                                Accessibility Plans
                            </h4>
                            <p class="text-xs text-on-surface-variant mt-1">
                                Reasonable adjustments for learners living with
                                disabilities or ongoing health conditions.
                            </p>
                        </div>
                        <div class="p-4 rounded-xl bg-white">
                            <span class="material-symbols-outlined text-secondary text-[22px] mb-1">menu_book</span>
                            <h4 class="font-heading text-xs font-bold text-primary">
                                Student Handbook
                            </h4>
                            <p class="text-xs text-on-surface-variant mt-1">
                                Comprehensive rights, responsibilities, grievance
                                procedures and operational guidelines.
                            </p>
                        </div>
                        <div class="p-4 rounded-xl bg-white">
                            <span class="material-symbols-outlined text-secondary text-[22px] mb-1">account_balance</span>
                            <h4 class="font-heading text-xs font-bold text-primary">
                                Transparent Fees
                            </h4>
                            <p class="text-xs text-on-surface-variant mt-1">
                                Transparent schedule of tuition, payment terms, and clear
                                refund policies prior to enrolment.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-6">
                    <div
                        class="p-6 sm:p-8 rounded-2xl bg-white shadow-md flex flex-col gap-4 border border-surface-container">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center">
                                <span class="material-symbols-outlined text-[24px]">verified_user</span>
                            </div>
                            <div>
                                <h3 class="font-heading text-base font-bold text-primary">
                                    ASQA Regulatory Standards
                                </h3>
                                <span class="text-xs font-mono text-secondary">RTO CODE: 46173 | ABN: 22 666 035
                                    730</span>
                            </div>
                        </div>
                        <p class="text-xs text-on-surface-variant leading-relaxed">
                            Nubex College Pty Ltd complies with the Standards for
                            Registered Training Organisations (RTOs) 2015. We maintain
                            strict validation cycles across all qualifications, ensuring
                            our training packages reflect current Australian workplace
                            requirements.
                        </p>
                        <div class="space-y-2 pt-2">
                            <a class="p-3 rounded-lg bg-surface-container-low hover:bg-surface-container flex items-center justify-between text-xs font-semibold text-primary transition-colors"
                                href="#">
                                <span>Student Complaints &amp; Appeals Policy</span>
                                <span class="material-symbols-outlined text-secondary text-[18px]">download</span>
                            </a>
                            <a class="p-3 rounded-lg bg-surface-container-low hover:bg-surface-container flex items-center justify-between text-xs font-semibold text-primary transition-colors"
                                href="#">
                                <span>Fees, Refunds &amp; Cancellations Guidelines</span>
                                <span class="material-symbols-outlined text-secondary text-[18px]">download</span>
                            </a>
                            <a class="p-3 rounded-lg bg-surface-container-low hover:bg-surface-container flex items-center justify-between text-xs font-semibold text-primary transition-colors"
                                href="#">
                                <span>RPL &amp; Credit Transfer Framework</span>
                                <span class="material-symbols-outlined text-secondary text-[18px]">download</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 9: Frequently Asked Questions -->
    <section class="w-full py-16 bg-surface-container-low">
        <div class="max-w-220 mx-auto px-6 sm:px-10">
            <div class="text-center mb-10">
                <div
                    class="inline-flex items-center gap-1.5 px-3 py-1 bg-surface-container-high text-primary rounded-full mb-2 text-[10px] font-bold font-heading uppercase tracking-wider">
                    <span>Got Questions?</span>
                </div>
                <h2 class="font-heading text-2xl sm:text-3xl font-bold text-primary">
                    Frequently Asked Questions
                </h2>
                <p class="text-sm text-on-surface-variant mt-2">
                    Direct, transparent answers regarding admissions, training
                    packages, documentation and policies.
                </p>
            </div>
            <div class="flex flex-col gap-3" id="faq-accordion">
                <div class="faq-item rounded-xl bg-white shadow-sm border border-surface-container overflow-hidden">
                    <button
                        class="faq-toggle w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-heading text-sm font-semibold text-primary"
                        type="button">
                        <span>1. What qualifications does Nubex College offer?</span>
                        <span
                            class="material-symbols-outlined faq-icon text-secondary transition-transform">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-4 sm:px-5 pb-5 text-xs text-on-surface-variant leading-relaxed">
                        Nubex College delivers nationally recognized qualifications
                        including:
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>BSB50420 — Diploma of Leadership and Management</li>
                            <li>
                                BSB60420 — Advanced Diploma of Leadership and Management
                            </li>
                            <li>CHC33021 — Certificate III in Individual Support</li>
                            <li>CHC43015 — Certificate IV in Ageing Support</li>
                            <li>CHC43315 — Certificate IV in Mental Health</li>
                            <li>CHC52025 — Diploma of Community Services</li>
                            <li>
                                HLT33021 — Certificate III in Allied Health Assistance
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="faq-item rounded-xl bg-white shadow-sm border border-surface-container overflow-hidden">
                    <button
                        class="faq-toggle w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-heading text-sm font-semibold text-primary"
                        type="button">
                        <span>2. What is Recognition of Prior Learning?</span>
                        <span
                            class="material-symbols-outlined faq-icon text-secondary transition-transform">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-4 sm:px-5 pb-5 text-xs text-on-surface-variant leading-relaxed">
                        Recognition of Prior Learning (RPL) acknowledges competencies
                        gained through work and life experience. Candidates submit
                        evidence mapping their existing capabilities directly against
                        unit of competency benchmarks.
                    </div>
                </div>
                <div class="faq-item rounded-xl bg-white shadow-sm border border-surface-container overflow-hidden">
                    <button
                        class="faq-toggle w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-heading text-sm font-semibold text-primary"
                        type="button">
                        <span>3. How do I know which qualification is right for me?</span>
                        <span
                            class="material-symbols-outlined faq-icon text-secondary transition-transform">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-4 sm:px-5 pb-5 text-xs text-on-surface-variant leading-relaxed">
                        Our admissions advisors evaluate your prior career journey and
                        goals to recommend an optimal qualification. You can also use
                        our interactive Eligibility Checker on this page.
                    </div>
                </div>
                <div class="faq-item rounded-xl bg-white shadow-sm border border-surface-container overflow-hidden">
                    <button
                        class="faq-toggle w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-heading text-sm font-semibold text-primary"
                        type="button">
                        <span>4. What documents might be required?</span>
                        <span
                            class="material-symbols-outlined faq-icon text-secondary transition-transform">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-4 sm:px-5 pb-5 text-xs text-on-surface-variant leading-relaxed">
                        Enrolment typically requires government-issued photo
                        identification, a Unique Student Identifier (USI), and prior
                        academic transcripts. For RPL, resumes, references, and work
                        samples may also be requested.
                    </div>
                </div>
                <div class="faq-item rounded-xl bg-white shadow-sm border border-surface-container overflow-hidden">
                    <button
                        class="faq-toggle w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-heading text-sm font-semibold text-primary"
                        type="button">
                        <span>5. How can I find course fees and duration?</span>
                        <span
                            class="material-symbols-outlined faq-icon text-secondary transition-transform">expand_more</span>
                    </button>
                    <div class="faq-content hidden px-4 sm:px-5 pb-5 text-xs text-on-surface-variant leading-relaxed">
                        Course fees and durations differ depending on your selected
                        delivery mode. Contact our admissions team or request a course
                        guide; all fee schedules are transparently disclosed before
                        enrolment.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 10: Final Conversion Section -->
    <section class="w-full py-16 bg-primary text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-5 lg:px-8 relative z-10 text-center">
            <div class="max-w-3xl mx-auto flex flex-col items-center gap-4">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 bg-white/10 backdrop-blur-md rounded-full text-secondary-container text-[10px] font-bold font-heading uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[16px]!">school</span>
                    <span>Start Your Learning Journey</span>
                </div>
                <h2 class="font-heading text-3xl sm:text-4xl font-bold tracking-tight text-white">
                    Ready to Explore Your Next Opportunity?
                </h2>
                <p class="text-sm sm:text-base text-slate-200 max-w-2xl leading-relaxed">
                    Explore our qualifications or contact Nubex College to discuss
                    available training pathways and application requirements.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
                    <a class="inline-flex items-center justify-center gap-2 font-heading font-semibold text-sm bg-white hover:bg-slate-100 text-primary px-7 py-3.5 rounded-lg shadow-md transition-colors"
                        href="#qualifications">
                        <span>Explore Qualifications</span>
                        <span class="material-symbols-outlined text-[18px]!">arrow_forward</span>
                    </a>
                    <a class="inline-flex items-center justify-center gap-2 font-heading font-semibold text-sm bg-transparent hover:bg-white/10 text-white px-7 py-3.5 rounded-lg shadow-sm transition-colors border border-white/30"
                        href="#hero-quick-enquiry">
                        <span class="material-symbols-outlined text-[18px]!">contact_phone</span>
                        <span>Contact Our Team</span>
                    </a>
                </div>
                <div class="mt-4 pt-4 flex flex-wrap items-center justify-center gap-2 font-mono text-xs text-slate-300">
                    <span>Nubex College Pty Ltd</span>
                    <span>•</span>
                    <span>RTO 46173</span>
                    <span>•</span>
                    <span>ACN 666 035 730</span>
                </div>
            </div>
        </div>
    </section>
@endsection
