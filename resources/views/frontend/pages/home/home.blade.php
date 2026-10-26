@extends('frontend.layouts.app')
@section('content')
    <!-- Section 1: Hero Section ? -->
    @include('frontend.pages.home.section.hero', ['qualifications' => $qualifications])

    <!-- Section 2: Qualifications Section ? -->
    <section class="w-full py-12 sm:py-16 lg:py-20 bg-surface" id="qualifications">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-6 sm:mb-8 lg:mb-10 gap-4">
                <div>
                    <div
                        class="inline-flex items-center gap-1.5 px-3 py-1 bg-brand-500/10 text-brand-500 rounded-full mb-3 text-[11px] font-bold font-heading uppercase tracking-wider">
                        <span class="material-symbols-outlined text-[16px]!">school</span> <span>Accredited Programs</span>
                    </div>
                    <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-bold text-[#182F5A] tracking-tight">
                        Explore Our Qualifications </h2>
                    <p class="text-sm sm:text-base text-on-surface-variant max-w-2xl mt-2 leading-relaxed"> Nationally
                        accredited vocational qualifications tailored for career progression and workplace readiness. </p>
                </div>
            </div>
            <!-- Sleek 3-Column Grid Partial -->
            @include('frontend.pages.industry.qualification-grid', ['qualifications' => $qualifications])


        </div>
    </section>

    <!-- Section 3: Why Choose Nubex College? -->
    @include('frontend.pages.home.section.why-us')

    <!-- Section: Online Self-Paced Study -->
    <section class="w-full py-12 sm:py-16 lg:py-20 bg-surface border-y border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="max-w-3xl mb-6 sm:mb-8 lg:mb-10">
                <div
                    class="inline-flex items-center gap-1.5 px-3 py-1 bg-brand-500/10 text-brand-500 rounded-full mb-3 text-[11px] font-bold font-heading uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[16px]!">devices</span> <span>FLEXIBLE LEARNING</span>
                </div>
                <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-bold text-[#182F5A] tracking-tight"> Study at
                    Your Own Pace, Wherever You Are </h2>
                <p class="text-sm sm:text-base text-on-surface-variant mt-3 leading-relaxed"> Balance your study around
                    work, family, and life commitments with Nubex College's comprehensive online learning portal. Access
                    high-quality digital course materials, interactive assessments, and one-on-one trainer support whenever
                    suits you best. </p>
            </div>
            <!-- 4-Card Responsive Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6"> <!-- Card 1 -->
                <div
                    class="group p-6 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:border-brand-500/40 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-brand-500/10 text-brand-500 group-hover:bg-brand-500 group-hover:text-white flex items-center justify-center mb-5 transition-colors duration-300">
                            <span class="material-symbols-outlined text-[26px]">cloud_sync</span>
                        </div>
                        <h3
                            class="font-heading text-base font-bold text-[#182F5A] mb-2 group-hover:text-brand-500 transition-colors duration-200">
                            24/7 Portal Access </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed"> Cloud learning platform with
                            lectures, curated resources, digital workbooks, and real-time progress tracking accessible
                            anytime. </p>
                    </div>
                    <div
                        class="mt-6 pt-3 border-t border-slate-100 text-[11px] font-bold uppercase tracking-wider text-brand-500">
                        Always Accessible </div>
                </div> <!-- Card 2 -->
                <div
                    class="group p-6 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:border-brand-500/40 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-brand-500/10 text-brand-500 group-hover:bg-brand-500 group-hover:text-white flex items-center justify-center mb-5 transition-colors duration-300">
                            <span class="material-symbols-outlined text-[26px]">support_agent</span>
                        </div>
                        <h3
                            class="font-heading text-base font-bold text-[#182F5A] mb-2 group-hover:text-brand-500 transition-colors duration-200">
                            Dedicated Assessor Support </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed"> Direct messaging and
                            scheduled video sessions with certified Australian trainers dedicated to coaching your success.
                        </p>
                    </div>
                    <div
                        class="mt-6 pt-3 border-t border-slate-100 text-[11px] font-bold uppercase tracking-wider text-brand-500">
                        1-on-1 Mentorship </div>
                </div> <!-- Card 3 -->
                <div
                    class="group p-6 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:border-brand-500/40 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-brand-500/10 text-brand-500 group-hover:bg-brand-500 group-hover:text-white flex items-center justify-center mb-5 transition-colors duration-300">
                            <span class="material-symbols-outlined text-[26px]">workspaces</span>
                        </div>
                        <h3
                            class="font-heading text-base font-bold text-[#182F5A] mb-2 group-hover:text-brand-500 transition-colors duration-200">
                            Workplace Integration </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed"> Structured self-paced
                            logbooks, simulated workplace assessments, and projects matching authentic industry tasks. </p>
                    </div>
                    <div
                        class="mt-6 pt-3 border-t border-slate-100 text-[11px] font-bold uppercase tracking-wider text-brand-500">
                        Industry Connected </div>
                </div> <!-- Card 4 -->
                <div
                    class="group p-6 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-xl hover:border-brand-500/40 transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div
                            class="w-12 h-12 rounded-xl bg-brand-500/10 text-brand-500 group-hover:bg-brand-500 group-hover:text-white flex items-center justify-center mb-5 transition-colors duration-300">
                            <span class="material-symbols-outlined text-[26px]">event_available</span>
                        </div>
                        <h3
                            class="font-heading text-base font-bold text-[#182F5A] mb-2 group-hover:text-brand-500 transition-colors duration-200">
                            Flexible Milestones </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed"> Set your own weekly
                            milestones within national qualification timeframes to achieve your goals on your personal
                            schedule. </p>
                    </div>
                    <div
                        class="mt-6 pt-3 border-t border-slate-100 text-[11px] font-bold uppercase tracking-wider text-brand-500">
                        Self-Paced Timeline </div>
                </div>
            </div>
            <!-- Action Callout Buttons -->
            <div class="mt-10 sm:mt-12 flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-4"> <a
                    class="inline-flex items-center justify-center gap-2 w-full sm:w-auto px-6 py-3 bg-brand-500 hover:bg-[#155b9d] text-white font-heading font-semibold text-sm rounded-xl shadow-sm hover:shadow-md active:scale-95 transition-all duration-200"
                    href="#qualifications"> <span>Explore Online Pathways</span> <span
                        class="material-symbols-outlined text-[18px]!">arrow_forward</span> </a> <a
                    class="inline-flex items-center justify-center gap-2 w-full sm:w-auto px-6 py-3 bg-white hover:bg-slate-50 border border-slate-300 text-[#182F5A] font-heading font-semibold text-sm rounded-xl shadow-sm hover:shadow-md active:scale-95 transition-all duration-200"
                    href="#eligibility-checker"> <span
                        class="material-symbols-outlined text-brand-500 text-[18px]">download</span> <span>Download Course
                        Guide</span> </a> </div>
        </div>
    </section>

    <!-- SECTION 1: RPL INTRODUCTION -->
    <section id="rpl-assessment"
        class="relative isolate w-full overflow-hidden bg-gradient-to-b from-slate-50 via-white to-slate-50/80 py-14 sm:py-18 lg:py-24">
        <div class="pointer-events-none absolute -left-24 top-20 h-64 w-64 rounded-full bg-brand-500/[0.07] blur-3xl">
        </div>
        <div class="pointer-events-none absolute -right-24 bottom-10 h-64 w-64 rounded-full bg-[#182F5A]/[0.06] blur-3xl">
        </div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-12 lg:gap-14"> <!-- Image showcase -->
                <div class="min-w-0 lg:col-span-5">
                    <div class="relative mx-auto max-w-xl lg:max-w-none"> <!-- Decorative Border -->
                        <div
                            class="absolute -left-3 -top-3 h-24 w-24 rounded-3xl border border-brand-500/15 sm:-left-5 sm:-top-5 sm:h-32 sm:w-32">
                        </div> <!-- Decorative Glow -->
                        <div
                            class="absolute -bottom-4 -right-3 h-28 w-28 rounded-full bg-brand-500/10 blur-2xl sm:-right-5">
                        </div> <!-- Main Image Card -->
                        <div
                            class="relative rounded-[1.75rem] border border-white bg-white p-2 shadow-[0_24px_70px_-30px_rgba(24,47,90,0.35)] sm:p-3">
                            <!-- Square Image Container: Height follows width -->
                            <div class="group relative aspect-square w-full overflow-hidden rounded-[1.25rem]"> <img
                                    src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1400&auto=format&fit=crop"
                                    alt="Students collaborating in a vocational learning environment" loading="lazy"
                                    class="absolute inset-0 h-full w-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-[1.03]" />
                                <!-- Gradient Overlay -->
                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-[#0c273e]/90 via-[#0c273e]/10 to-[#0c273e]/10">
                                </div> <!-- Top Badge -->
                                <div class="absolute left-3 top-3 sm:left-5 sm:top-5"> <span
                                        class="inline-flex max-w-full items-center gap-2 rounded-full border border-white/70 bg-white/95 px-3 py-2 text-xs font-bold text-[#182F5A] shadow-lg backdrop-blur-md sm:px-3.5">
                                        <span class="material-symbols-outlined text-[18px]! text-brand-500"> verified
                                        </span> <span>Skills Recognition (RPL)</span> </span> </div>
                                <!-- Bottom Floating Information Card -->
                                <div class="absolute inset-x-3 bottom-3 sm:inset-x-5 sm:bottom-5">
                                    <div
                                        class="rounded-2xl border border-white/70 bg-white/95 p-3 shadow-xl backdrop-blur-xl sm:p-5">
                                        <div class="flex items-start gap-3 sm:gap-4"> <!-- Icon -->
                                            <div
                                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-500 text-white shadow-md sm:h-12 sm:w-12">
                                                <span class="material-symbols-outlined text-[23px]! sm:text-[25px]!">
                                                    workspace_premium </span>
                                            </div> <!-- Text -->
                                            <div class="min-w-0 flex-1">
                                                <h3
                                                    class="font-heading text-sm font-extrabold leading-snug text-[#182F5A] sm:text-base">
                                                    Fast-Track Your Qualification </h3>
                                                <p class="mt-1 text-xs leading-relaxed text-slate-600 sm:text-sm"> Your
                                                    existing skills and workplace experience may help you work towards a
                                                    recognised qualification. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Supporting Note -->
                        <div class="mt-5 flex items-start gap-3 px-1 sm:px-2"> <span
                                class="mt-0.5 flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-brand-500/10 text-brand-500">
                                <span class="material-symbols-outlined text-[17px]!"> lightbulb </span> </span>
                            <p class="text-xs font-medium leading-relaxed text-slate-600 sm:text-sm"> Already have industry
                                experience? Find out whether your existing skills may be relevant to an RPL assessment. </p>
                        </div>
                    </div>
                </div> <!-- Introduction content -->
                <div class="min-w-0 lg:col-span-7">
                    <div class="flex flex-col items-start gap-5 sm:gap-6"> <span
                            class="inline-flex items-center gap-2 rounded-full border border-brand-500/15 bg-brand-500/[0.07] px-3.5 py-2 font-heading text-[10px] font-extrabold uppercase tracking-[0.14em] text-brand-500 sm:text-xs">
                            <span class="material-symbols-outlined text-[17px]!">fact_check</span> Prior Learning Assessment
                        </span>
                        <div class="space-y-4">
                            <h2
                                class="max-w-2xl font-heading text-3xl font-extrabold leading-[1.15] tracking-tight text-[#182F5A] sm:text-4xl lg:text-[2.7rem]">
                                Turn Your Work Experience Into a Recognised Qualification </h2>
                            <p class="max-w-2xl text-sm leading-7 text-slate-600 sm:text-base sm:leading-8"> Recognition of
                                Prior Learning (RPL) is an assessment process that considers your existing skills,
                                knowledge, informal training and relevant work experience against the requirements of a
                                qualification. Depending on your circumstances, an RPL pathway may be available to explore.
                            </p>
                        </div>
                        <div class="w-full rounded-2xl border border-slate-200 bg-white/80 p-4 shadow-sm sm:p-5">
                            <div class="flex items-start gap-3"> <span
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-500/10 text-brand-500">
                                    <span class="material-symbols-outlined text-[22px]!">verified_user</span> </span>
                                <div class="min-w-0">
                                    <h3 class="font-heading text-sm font-bold text-[#182F5A] sm:text-base">Assessment is
                                        based on evidence</h3>
                                    <p class="mt-1 text-xs leading-relaxed text-slate-600 sm:text-sm"> An RPL outcome
                                        depends on formal evidence mapping and competency assessment. Work experience alone
                                        does not guarantee a qualification. </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full flex-col gap-3 pt-1 sm:flex-row sm:items-center sm:gap-5"> <a
                                href="#eligibility-checker"
                                class="group inline-flex w-full items-center justify-center gap-2.5 rounded-xl bg-brand-500 px-6 py-3.5 font-heading text-sm font-bold text-white shadow-[0_8px_20px_-8px_rgba(25,104,178,0.65)] transition duration-200 hover:-translate-y-0.5 hover:bg-[#155b9d] hover:shadow-lg focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-500 focus-visible:ring-offset-2 sm:w-auto">
                                <span>Check Your RPL Eligibility</span> <span
                                    class="material-symbols-outlined text-[19px]! transition-transform duration-200 group-hover:translate-x-1">arrow_forward</span>
                            </a>
                            {{-- <div
                                class="flex items-center justify-center gap-2 text-xs font-semibold text-slate-600 sm:justify-start sm:text-sm">
                                <span class="material-symbols-outlined text-[21px]! text-brand-500">support_agent</span>
                                <span>Speak with an advisor</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: HOW THE RPL PROCESS WORKS -->
    @include('frontend.pages.home.section.rpl-work-process')

    <!-- Section 6: Interactive Multi-Step Eligibility Checker Section -->
    @include('frontend.pages.home.section.eligibility-checker')

    <!-- Section 7: "How to Get Started" Timeline -->
    @include('frontend.pages.home.section.learning-road-map')

    <!-- Section 8: Student Experience & Compliance -->
    <section class="w-full py-12 sm:py-16 lg:py-20 bg-surface" id="compliance">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                <!-- Left Column: Student Support Networks -->
                <div class="lg:col-span-6 flex flex-col gap-4">
                    <div
                        class="inline-flex items-center gap-1.5 px-3 py-1 bg-brand-500/10 text-brand-500 rounded-full self-start text-[11px] font-bold font-heading uppercase tracking-wider">
                        <span>Student Wellbeing &amp; Compliance</span>
                    </div>
                    <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-bold text-[#182F5A] tracking-tight">
                        Student Support &amp; Educational Transparency </h2>
                    <p class="text-sm sm:text-base text-on-surface-variant leading-relaxed"> At Nubex College, student
                        equity, academic rigor, and supportive mentoring are core obligations. Every prospective and
                        enrolled student has direct, unfettered access to support networks and administrative clarity. </p>
                    <!-- 2x2 Feature Items Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2"> <!-- LLN Assistance -->
                        <div
                            class="p-4 rounded-2xl bg-white border border-slate-100 hover:border-brand-500/30 hover:bg-white hover:shadow-md transition-all duration-200">
                            <span
                                class="material-symbols-outlined text-brand-500 text-[24px] mb-1.5 block">psychology_alt</span>
                            <h4 class="font-heading text-sm font-bold text-[#182F5A]"> LLN Assistance </h4>
                            <p class="text-xs text-on-surface-variant mt-1 leading-relaxed"> Targeted language, literacy
                                and numeracy coaching designed to support your course progression. </p>
                        </div> <!-- Accessibility Plans -->
                        <div
                            class="p-4 rounded-2xl bg-white border border-slate-100 hover:border-brand-500/30 hover:bg-white hover:shadow-md transition-all duration-200">
                            <span
                                class="material-symbols-outlined text-brand-500 text-[24px] mb-1.5 block">accessible_forward</span>
                            <h4 class="font-heading text-sm font-bold text-[#182F5A]"> Accessibility Plans </h4>
                            <p class="text-xs text-on-surface-variant mt-1 leading-relaxed"> Reasonable adjustments for
                                learners living with disabilities or ongoing health conditions. </p>
                        </div> <!-- Student Handbook -->
                        <div
                            class="p-4 rounded-2xl bg-white border border-slate-100 hover:border-brand-500/30 hover:bg-white hover:shadow-md transition-all duration-200">
                            <span
                                class="material-symbols-outlined text-brand-500 text-[24px] mb-1.5 block">menu_book</span>
                            <h4 class="font-heading text-sm font-bold text-[#182F5A]"> Student Handbook </h4>
                            <p class="text-xs text-on-surface-variant mt-1 leading-relaxed"> Comprehensive rights,
                                responsibilities, grievance procedures and operational guidelines. </p>
                        </div> <!-- Transparent Fees -->
                        <div
                            class="p-4 rounded-2xl bg-white border border-slate-100 hover:border-brand-500/30 hover:bg-white hover:shadow-md transition-all duration-200">
                            <span
                                class="material-symbols-outlined text-brand-500 text-[24px] mb-1.5 block">account_balance</span>
                            <h4 class="font-heading text-sm font-bold text-[#182F5A]"> Transparent Fees </h4>
                            <p class="text-xs text-on-surface-variant mt-1 leading-relaxed"> Transparent schedule of
                                tuition, payment terms, and clear refund policies prior to enrolment. </p>
                        </div>
                    </div>
                </div> <!-- Right Column: ASQA Compliance Card -->
                <div class="lg:col-span-6">
                    <div class="p-6 sm:p-8 rounded-2xl bg-white shadow-xl border border-slate-200 flex flex-col gap-5">
                        <div class="flex items-center gap-3.5">
                            <div
                                class="w-12 h-12 rounded-xl bg-[#182F5A] text-white flex items-center justify-center shrink-0 shadow-md">
                                <span class="material-symbols-outlined text-[26px]">verified_user</span>
                            </div>
                            <div>
                                <h3 class="font-heading text-lg font-bold text-[#182F5A]"> ASQA Regulatory Standards </h3>
                                <span class="text-xs font-mono text-brand-500 font-semibold">RTO CODE: 46173 | ABN: 22 666
                                    035 730</span>
                            </div>
                        </div>
                        <p class="text-xs sm:text-sm text-on-surface-variant leading-relaxed"> Nubex College Pty Ltd
                            complies with the Standards for Registered Training Organisations (RTOs) 2015. We maintain
                            strict validation cycles across all qualifications, ensuring our training packages reflect
                            current Australian workplace requirements. </p> <!-- Policy Download Buttons -->
                        <div class="space-y-2.5 pt-2">
                            <a href="{{ url('/qualifications/BSB50420') }}"
                                class="p-3.5 rounded-xl bg-slate-50 hover:bg-brand-500/5 border border-slate-200 hover:border-brand-500/30 flex items-center justify-between text-xs sm:text-sm font-semibold text-[#182F5A] hover:text-brand-500 transition-all duration-200 group">
                                <span>BSB50420 — Diploma of Leadership &amp; Management</span>
                                <span
                                    class="material-symbols-outlined text-brand-500 text-[20px]! transition-transform group-hover:translate-x-1">arrow_forward</span>
                            </a>

                            <a href="{{ url('/qualifications/BSB60420') }}"
                                class="p-3.5 rounded-xl bg-slate-50 hover:bg-brand-500/5 border border-slate-200 hover:border-brand-500/30 flex items-center justify-between text-xs sm:text-sm font-semibold text-[#182F5A] hover:text-brand-500 transition-all duration-200 group">
                                <span>BSB60420 — Advanced Diploma of Leadership &amp; Management</span>
                                <span
                                    class="material-symbols-outlined text-brand-500 text-[20px]! transition-transform group-hover:translate-x-1">arrow_forward</span>
                            </a>

                            <a href="{{ url('/qualifications/CHC33021') }}"
                                class="p-3.5 rounded-xl bg-slate-50 hover:bg-brand-500/5 border border-slate-200 hover:border-brand-500/30 flex items-center justify-between text-xs sm:text-sm font-semibold text-[#182F5A] hover:text-brand-500 transition-all duration-200 group">
                                <span>CHC33021 — Certificate III in Individual Support</span>
                                <span
                                    class="material-symbols-outlined text-brand-500 text-[20px]! transition-transform group-hover:translate-x-1">arrow_forward</span>
                            </a>

                            <a href="{{ url('/qualifications/CHC43015') }}"
                                class="p-3.5 rounded-xl bg-slate-50 hover:bg-brand-500/5 border border-slate-200 hover:border-brand-500/30 flex items-center justify-between text-xs sm:text-sm font-semibold text-[#182F5A] hover:text-brand-500 transition-all duration-200 group">
                                <span>CHC43015 — Certificate IV in Ageing Support</span>
                                <span
                                    class="material-symbols-outlined text-brand-500 text-[20px]! transition-transform group-hover:translate-x-1">arrow_forward</span>
                            </a>

                            <a href="{{ url('/qualifications/CHC43315') }}"
                                class="p-3.5 rounded-xl bg-slate-50 hover:bg-brand-500/5 border border-slate-200 hover:border-brand-500/30 flex items-center justify-between text-xs sm:text-sm font-semibold text-[#182F5A] hover:text-brand-500 transition-all duration-200 group">
                                <span>CHC43315 — Certificate IV in Mental Health</span>
                                <span
                                    class="material-symbols-outlined text-brand-500 text-[20px]! transition-transform group-hover:translate-x-1">arrow_forward</span>
                            </a>

                            <a href="{{ url('/qualifications/CHC52025') }}"
                                class="p-3.5 rounded-xl bg-slate-50 hover:bg-brand-500/5 border border-slate-200 hover:border-brand-500/30 flex items-center justify-between text-xs sm:text-sm font-semibold text-[#182F5A] hover:text-brand-500 transition-all duration-200 group">
                                <span>CHC52025 — Diploma of Community Services</span>
                                <span
                                    class="material-symbols-outlined text-brand-500 text-[20px]! transition-transform group-hover:translate-x-1">arrow_forward</span>
                            </a>

                            <a href="{{ url('/qualifications/HLT33021') }}"
                                class="p-3.5 rounded-xl bg-slate-50 hover:bg-brand-500/5 border border-slate-200 hover:border-brand-500/30 flex items-center justify-between text-xs sm:text-sm font-semibold text-[#182F5A] hover:text-brand-500 transition-all duration-200 group">
                                <span>HLT33021 — Certificate III in Allied Health Services</span>
                                <span
                                    class="material-symbols-outlined text-brand-500 text-[20px]! transition-transform group-hover:translate-x-1">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-10 sm:py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <!-- Heading -->
            <div class="text-center md:mb-8 mb-4">
                <h2 class="font-display font-bold text-lg md:text-2xl lg:text-3xl text-primary mb-3">Our Student Stories
                </h2>
                <p class="text-on-surface-variant max-w-xl mx-auto text-sm md:text-base">Hear from our students
                    about their journey and success stories.</p>
            </div>
                @include('frontend.pages.home.section.review')
          
        </div>
    </section>

    <!-- Section 9: Frequently Asked Questions -->
    <section class="w-full py-12 sm:py-16 lg:py-20 bg-white" id="faq">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-6 sm:mb-8 lg:mb-10">
                <div
                    class="inline-flex items-center gap-1.5 px-3 py-1 bg-brand-500/10 text-brand-500 rounded-full mb-3 text-[11px] font-bold font-heading uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[16px]!">help</span> <span>Got Questions?</span>
                </div>
                <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-bold text-[#182F5A] tracking-tight">
                    Frequently Asked Questions </h2>
                <p class="text-sm sm:text-base text-on-surface-variant mt-2 leading-relaxed"> Direct, transparent answers
                    regarding admissions, training packages, documentation and policies. </p>
            </div>
            @include('frontend.pages.home.section.faq')
        </div>
    </section>

    <!-- Section 10: Final Conversion CTA Section -->
    @include('frontend.pages.home.section.cta')
@endsection
