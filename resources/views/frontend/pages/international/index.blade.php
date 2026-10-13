@extends('frontend.layouts.app')

@section('title','International Students Guide')

@section('content')
    <section class="relative overflow-hidden bg-brand-25 animate-hero-left">
        <div class="absolute inset-0 mesh-background"></div>

        <div class="relative mx-auto w-full max-w-7xl px-4 py-10 sm:px-6 md:py-14 lg:px-8 lg:py-20">

            <div class="mx-auto max-w-3xl text-center">

                {{-- Badge --}}
                <div
                    class="mb-6 inline-flex items-center gap-2 rounded-full border border-brand-200/60 bg-brand-500 px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-white shadow-sm">
                    <span class="h-2 w-2 animate-pulse  rounded-full bg-brand-50"></span>
                    International Students Guide
                </div>

                {{-- Heading --}}
                <h1
                    class="font-heading text-4xl font-extrabold leading-tight tracking-tight text-navy-900 sm:text-5xl lg:text-6xl">
                    Your Gateway to Studying & Living in
                    <span class="gradient-text">Sydney</span>
                </h1>

                {{-- Description --}}
                <p class="mt-6 text-base font-normal leading-relaxed text-slate-600 sm:text-lg">
                    Gain world-class practical qualifications with Universal Technology Institute.
                    Simplified entry, dedicated support, and vibrant campus life await you.
                </p>

            </div>

            {{-- Quick Facts --}}
            <div id="quick-facts" class="mt-10 grid grid-cols-2 gap-3 sm:gap-4 lg:grid-cols-4 stagger">

                {{-- Fact 1 --}}
                <div
                    class="reveal-scale group rounded-2xl border border-slate-200/80 bg-white p-4 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-lg sm:p-5">

                    <div class="mb-3 flex items-center gap-2 text-xs font-semibold uppercase tracking-wide text-brand-500">
                        <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-brand-50 text-brand-500">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 00-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </span>
                        Graduate Satisfaction
                    </div>

                    <p class="font-heading text-2xl font-bold tracking-tight text-slate-900">
                        95%
                    </p>

                </div>

                {{-- Fact 2 --}}
                <div
                    class="group rounded-2xl border border-slate-200/80 bg-white p-4 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-lg sm:p-5">

                    <div class="mb-3 flex items-center gap-2 text-xs font-semibold uppercase tracking-wide text-brand-500">
                        <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-brand-50 text-brand-500">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </span>
                        CRICOS
                    </div>

                    <p class="font-heading text-lg font-bold tracking-tight text-slate-900 sm:text-xl">
                        Registered Provider
                    </p>

                </div>

                {{-- Fact 3 --}}
                <div
                    class="group rounded-2xl border border-slate-200/80 bg-white p-4 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-lg sm:p-5">

                    <div class="mb-3 flex items-center gap-2 text-xs font-semibold uppercase tracking-wide text-brand-500">
                        <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-brand-50 text-brand-500">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </span>
                        5 Intakes
                    </div>

                    <p class="font-heading text-lg font-bold tracking-tight text-slate-900 sm:text-xl">
                        Per Academic Year
                    </p>

                </div>

                {{-- Fact 4 --}}
                <div
                    class="group rounded-2xl border border-slate-200/80 bg-white p-4 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-lg sm:p-5">

                    <div class="mb-3 flex items-center gap-2 text-xs font-semibold uppercase tracking-wide text-brand-500">
                        <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-brand-50 text-brand-500">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </span>
                        Global Nationalities
                    </div>

                    <p class="font-heading text-2xl font-bold tracking-tight text-slate-900">
                        50+
                    </p>

                </div>

            </div>
        </div>
    </section>


    {{-- =========================================================
        01. APPLICATION WORKFLOW
    ========================================================== --}}
    <section class="w-full border-b border-slate-200 bg-white py-16 sm:py-20" data-purpose="workflow-steps">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- Section Header --}}
            <div class="mb-12 flex flex-col gap-5 lg:flex-row lg:items-end lg:justify-between">

                <div class="max-w-2xl">

                    <div class="mb-3 flex items-center gap-2 text-xs font-bold uppercase tracking-[0.18em] text-brand-600">
                        <span class="h-px w-7 bg-brand-500"></span>
                        01 / Application Workflow
                    </div>

                    <h2 class="font-heading text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                        How to apply
                    </h2>

                    <p class="mt-3 max-w-xl text-sm leading-relaxed text-slate-500 sm:text-base">
                        Follow a clear six-step pathway from your initial application
                        through to your arrival and orientation in Sydney.
                    </p>

                </div>

                <div
                    class="inline-flex w-fit items-center gap-2 rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-xs font-medium text-slate-600">
                    <svg class="h-4 w-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" />
                    </svg>
                    Estimated completion: 2–4 weeks
                </div>

            </div>


            {{-- Steps --}}
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">

                {{-- Step 01 --}}
                <div
                    class="group relative rounded-2xl border border-slate-200 bg-slate-50/70 p-6 transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:bg-white hover:shadow-lg">

                    <div class="mb-5 flex items-center justify-between">

                        <span
                            class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-600 text-sm font-bold text-white shadow-sm">
                            01
                        </span>

                        <svg class="h-5 w-5 text-slate-300 transition-colors group-hover:text-brand-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                        </svg>

                    </div>

                    <h3 class="font-heading text-lg font-bold text-slate-900">
                        Submit your application
                    </h3>

                    <p class="mt-2 text-sm leading-relaxed text-slate-600">
                        Complete the online enquiry or application form. Our international admissions team will review
                        your certified transcripts and identity documents.
                    </p>

                    <div class="mt-5 border-t border-slate-200 pt-4 text-xs font-medium text-slate-500">
                        Documentation
                    </div>

                </div>


                {{-- Step 02 --}}
                <div
                    class="group relative rounded-2xl border border-slate-200 bg-slate-50/70 p-6 transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:bg-white hover:shadow-lg">

                    <div class="mb-5 flex items-center justify-between">

                        <span
                            class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-600 text-sm font-bold text-white shadow-sm">
                            02
                        </span>

                        <svg class="h-5 w-5 text-slate-300 transition-colors group-hover:text-brand-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.8" />
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                        </svg>

                    </div>

                    <h3 class="font-heading text-lg font-bold text-slate-900">
                        Offer Letter (OL)
                    </h3>

                    <p class="mt-2 text-sm leading-relaxed text-slate-600">
                        Receive your formal Conditional or Unconditional Offer Letter and Student Agreement detailing
                        course fees, terms, and intake dates.
                    </p>

                    <div class="mt-5 border-t border-slate-200 pt-4 text-xs font-medium text-slate-500">
                        3–5 Working Days
                    </div>

                </div>


                {{-- Step 03 --}}
                <div
                    class="group relative rounded-2xl border border-slate-200 bg-slate-50/70 p-6 transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:bg-white hover:shadow-lg">

                    <div class="mb-5 flex items-center justify-between">

                        <span
                            class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-600 text-sm font-bold text-white shadow-sm">
                            03
                        </span>

                        <svg class="h-5 w-5 text-slate-300 transition-colors group-hover:text-brand-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                        </svg>

                    </div>

                    <h3 class="font-heading text-lg font-bold text-slate-900">
                        Accept &amp; pay deposit
                    </h3>

                    <p class="mt-2 text-sm leading-relaxed text-slate-600">
                        Sign the Student Acceptance Agreement and transfer the required initial tuition deposit along
                        with Overseas Student Health Cover (OSHC) fee.
                    </p>

                    <div class="mt-5 border-t border-slate-200 pt-4 text-xs font-medium text-slate-500">
                        Payment Lock
                    </div>

                </div>


                {{-- Step 04 --}}
                <div
                    class="group relative rounded-2xl border border-slate-200 bg-slate-50/70 p-6 transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:bg-white hover:shadow-lg">

                    <div class="mb-5 flex items-center justify-between">

                        <span
                            class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-600 text-sm font-bold text-white shadow-sm">
                            04
                        </span>

                        <svg class="h-5 w-5 text-slate-300 transition-colors group-hover:text-brand-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M9 12l2 2 4-4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            <path d="M5 4h14v16H5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                        </svg>

                    </div>

                    <h3 class="font-heading text-lg font-bold text-slate-900">
                        Confirmation of Enrolment
                    </h3>

                    <p class="mt-2 text-sm leading-relaxed text-slate-600">
                        We issue your official electronic Confirmation of Enrolment (eCoE) registered in PRISMS —
                        the vital instrument required for your student visa.
                    </p>

                    <div class="mt-5 border-t border-slate-200 pt-4 text-xs font-medium text-slate-500">
                        PRISMS CoE
                    </div>

                </div>


                {{-- Step 05 --}}
                <div
                    class="group relative rounded-2xl border border-slate-200 bg-slate-50/70 p-6 transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:bg-white hover:shadow-lg">

                    <div class="mb-5 flex items-center justify-between">

                        <span
                            class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-600 text-sm font-bold text-white shadow-sm">
                            05
                        </span>

                        <svg class="h-5 w-5 text-slate-300 transition-colors group-hover:text-brand-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M8 11l3 3 5-5" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                            <path d="M5 3h14v18H5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                        </svg>

                    </div>

                    <h3 class="font-heading text-lg font-bold text-slate-900">
                        Apply for student visa
                    </h3>

                    <p class="mt-2 text-sm leading-relaxed text-slate-600">
                        Lodge your Subclass 500 visa via ImmiAccount with the Department of Home Affairs, including
                        your GS statement and biometric checks.
                    </p>

                    <div class="mt-5 border-t border-slate-200 pt-4 text-xs font-medium text-slate-500">
                        Subclass 500
                    </div>

                </div>


                {{-- Step 06 --}}
                <div
                    class="group relative rounded-2xl border border-slate-200 bg-slate-50/70 p-6 transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:bg-white hover:shadow-lg">

                    <div class="mb-5 flex items-center justify-between">

                        <span
                            class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-600 text-sm font-bold text-white shadow-sm">
                            06
                        </span>

                        <svg class="h-5 w-5 text-slate-300 transition-colors group-hover:text-brand-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.8" />
                        </svg>

                    </div>

                    <h3 class="font-heading text-lg font-bold text-slate-900">
                        Arrival &amp; orientation
                    </h3>

                    <p class="mt-2 text-sm leading-relaxed text-slate-600">
                        Touch down in Sydney, attend compulsory campus orientation, collect your student ID card,
                        and start classes with your trainers at Parramatta.
                    </p>

                    <div class="mt-5 border-t border-slate-200 pt-4 text-xs font-medium text-slate-500">
                        Campus Welcome
                    </div>

                </div>

            </div>
        </div>
    </section>


    {{-- =========================================================
        02. ADMISSIONS CRITERIA
    ========================================================== --}}
    <section class="w-full bg-slate-950 py-16 text-white sm:py-20" data-purpose="admissions-criteria">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- Header --}}
            <div class="mb-12 max-w-3xl">

                <div class="mb-3 flex items-center gap-2 text-xs font-bold uppercase tracking-[0.18em] text-brand-400">
                    <span class="h-px w-7 bg-brand-400"></span>
                    02 / Essential Admissions Criteria
                </div>

                <h2 class="font-heading text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Key information for international applicants.
                </h2>

                <p class="mt-4 text-sm leading-relaxed text-slate-400 sm:text-base">
                    Nubex College adheres to the standards defined by the ESOS Act 2000 and the
                    National Code 2018. Review our operating guidelines and service commitments below.
                </p>

            </div>


            {{-- Cards --}}
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">

                {{-- Card --}}
                <div
                    class="group rounded-2xl border border-white/10 bg-white/[0.04] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-brand-400/30 hover:bg-white/[0.07]">

                    <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-brand-400/10 text-brand-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                        </svg>
                    </div>

                    <h3 class="font-heading text-lg font-bold text-white">
                        Offer Letter &amp; CoE
                    </h3>

                    <p class="mt-3 text-sm leading-relaxed text-slate-400">
                        Conditional and unconditional Offer Letters issued within 5 business days of complete file
                        receipt. CoE released promptly following verified initial deposit and document verification.
                    </p>

                    <div class="mt-5 flex items-center gap-2 border-t border-white/10 pt-4 text-xs text-slate-500">
                        <span class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>
                        Processing SLA: 3–5 Business Days
                    </div>

                </div>


                {{-- Card --}}
                <div
                    class="group rounded-2xl border border-white/10 bg-white/[0.04] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-brand-400/30 hover:bg-white/[0.07]">

                    <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-brand-400/10 text-brand-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.8" />
                            <path d="M12 14v7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                        </svg>
                    </div>

                    <h3 class="font-heading text-lg font-bold text-white">
                        Entry Requirements
                    </h3>

                    <p class="mt-3 text-sm leading-relaxed text-slate-400">
                        Entry requirements vary by qualification. International students must be at least 18 years
                        of age and hold academic qualifications equivalent to Australian Year 12 or relevant AQF
                        prerequisites.
                    </p>

                    <div class="mt-5 flex items-center gap-2 border-t border-white/10 pt-4 text-xs text-slate-500">
                        <span class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>
                        Min 18 Years &amp; Equivalent Year 12
                    </div>

                </div>


                {{-- Card --}}
                <div
                    class="group rounded-2xl border border-white/10 bg-white/[0.04] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-brand-400/30 hover:bg-white/[0.07]">

                    <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-brand-400/10 text-brand-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                        </svg>
                    </div>

                    <h3 class="font-heading text-lg font-bold text-white">
                        Intakes &amp; Academic Calendar
                    </h3>

                    <p class="mt-3 text-sm leading-relaxed text-slate-400">
                        UTI runs four intake terms annually across January/February, April/May, July, and October.
                        Structured terms allow flexibility in structuring study timetables and onshore planning.
                    </p>

                    <div class="mt-5 flex items-center gap-2 border-t border-white/10 pt-4 text-xs text-slate-500">
                        <span class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>
                        Term 1 · Term 2 · Term 3 · Term 4
                    </div>

                </div>


                {{-- Card --}}
                <div
                    class="group rounded-2xl border border-white/10 bg-white/[0.04] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-brand-400/30 hover:bg-white/[0.07]">

                    <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-brand-400/10 text-brand-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                        </svg>
                    </div>

                    <h3 class="font-heading text-lg font-bold text-white">
                        Fees &amp; Payment Plans
                    </h3>

                    <p class="mt-3 text-sm leading-relaxed text-slate-400">
                        Transparent course fees with structured quarterly installment payment plans. Material fees,
                        uniform kits, and compulsory OSHC coverage can be packaged seamlessly.
                    </p>

                    <div class="mt-5 flex items-center gap-2 border-t border-white/10 pt-4 text-xs text-slate-500">
                        <span class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>
                        Flexible Quarterly Schedules
                    </div>

                </div>


                {{-- Card --}}
                <div
                    class="group rounded-2xl border border-white/10 bg-white/[0.04] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-brand-400/30 hover:bg-white/[0.07]">

                    <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-brand-400/10 text-brand-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                        </svg>
                    </div>

                    <h3 class="font-heading text-lg font-bold text-white">
                        RPL &amp; Credit Transfer
                    </h3>

                    <p class="mt-3 text-sm leading-relaxed text-slate-400">
                        Recognise prior learning, international work experience, and formal coursework completed at
                        other accredited institutions towards your UTI qualification.
                    </p>

                    <div class="mt-5 flex items-center gap-2 border-t border-white/10 pt-4 text-xs text-slate-500">
                        <span class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>
                        Assessment Prior to Enrolment
                    </div>

                </div>


                {{-- Card --}}
                <div
                    class="group rounded-2xl border border-white/10 bg-white/[0.04] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-brand-400/30 hover:bg-white/[0.07]">

                    <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-brand-400/10 text-brand-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.8" />
                        </svg>
                    </div>

                    <h3 class="font-heading text-lg font-bold text-white">
                        Orientation Week
                    </h3>

                    <p class="mt-3 text-sm leading-relaxed text-slate-400">
                        Mandatory induction covering campus facilities, academic integrity rules, ESOS visa
                        compliance, Opal cards and transport setups, and introductions to your vocational trainers.
                    </p>

                    <div class="mt-5 flex items-center gap-2 border-t border-white/10 pt-4 text-xs text-slate-500">
                        <span class="h-1.5 w-1.5 rounded-full bg-brand-400"></span>
                        Mandatory for Subclass 500
                    </div>

                </div>

            </div>
        </div>
    </section>


    {{-- =========================================================
        03. VISA & COMPLIANCE
    ========================================================== --}}
    <section class="w-full border-b border-slate-200 bg-slate-50 py-16 sm:py-20" data-purpose="visa-guidance">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 gap-10 lg:grid-cols-12 lg:gap-14">

                {{-- Left --}}
                <div class="lg:col-span-5">

                    <div class="mb-3 flex items-center gap-2 text-xs font-bold uppercase tracking-[0.18em] text-brand-600">
                        <span class="h-px w-7 bg-brand-500"></span>
                        03 / Visa Information
                    </div>

                    <h2 class="font-heading text-3xl font-bold leading-tight tracking-tight text-slate-900 sm:text-4xl">
                        High-level guidance for student visas.
                    </h2>

                    <p class="mt-4 text-sm leading-relaxed text-slate-600 sm:text-base">
                        UTI provides general educational guidance only. Immigration advice, visa lodgement, and
                        individual claims must be handled directly through the Department of Home Affairs or a
                        registered migration agent (MARA).
                    </p>


                    {{-- Official Framework --}}
                    <div class="mt-7 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">

                        <div class="flex items-center gap-3">

                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4z" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.8" />
                                    <path d="M9 12l2 2 4-4" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.8" />
                                </svg>
                            </div>

                            <div>
                                <p class="text-sm font-bold text-slate-900">
                                    Official Legislative Framework
                                </p>

                                <p class="mt-0.5 text-xs text-slate-500">
                                    ESOS Act 2000 · National Code 2018
                                </p>
                            </div>

                        </div>

                        <p class="mt-4 text-sm leading-relaxed text-slate-600">
                            International education in Australia is strictly regulated under the Education Services
                            for Overseas Students (ESOS) Act 2000 and the National Code 2018.
                        </p>

                        <a class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-brand-600 transition hover:text-brand-800"
                            href="https://www.homeaffairs.gov.au" rel="noopener noreferrer" target="_blank">

                            Department of Home Affairs

                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                            </svg>

                        </a>

                    </div>

                </div>


                {{-- Right --}}
                <div class="space-y-4 lg:col-span-7">

                    {{-- Visa item --}}
                    <div
                        class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:border-brand-200 hover:shadow-md sm:p-6">

                        <div class="flex gap-4">

                            <div
                                class="hidden h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-600 sm:flex">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 11h8M8 15h5M6 3h9l3 3v15H6z" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.8" />
                                </svg>
                            </div>

                            <div class="min-w-0 flex-1">

                                <div class="flex flex-col gap-2 sm:flex-row sm:items-start sm:justify-between">

                                    <h3 class="font-heading text-base font-bold text-slate-900">
                                        English Requirements
                                    </h3>

                                    <span
                                        class="w-fit rounded-full border border-slate-200 bg-slate-50 px-3 py-1 text-xs font-semibold text-slate-600">
                                        IELTS 6.0 / PTE 50+
                                    </span>

                                </div>

                                <p class="mt-2 text-sm leading-relaxed text-slate-600">
                                    IELTS, PTE Academic, or TOEFL iBT minimum benchmark scores by qualification level.
                                    For diploma-level courses: IELTS band score of 6.0 overall (no band less than 5.5)
                                    or equivalent accepted test.
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- GS --}}
                    <div
                        class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:border-brand-200 hover:shadow-md sm:p-6">

                        <div class="flex gap-4">

                            <div
                                class="hidden h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600 sm:flex">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 12l2 2 4-4" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.8" />
                                    <path d="M12 3l8 4v5c0 5-3.5 8-8 9-4.5-1-8-4-8-9V7l8-4z" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.8" />
                                </svg>
                            </div>

                            <div class="min-w-0 flex-1">

                                <div class="flex flex-col gap-2 sm:flex-row sm:items-start sm:justify-between">

                                    <h3 class="font-heading text-base font-bold text-slate-900">
                                        Genuine Student (GS) Requirement
                                    </h3>

                                    <span
                                        class="w-fit rounded-full border border-emerald-200 bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">
                                        Mandatory
                                    </span>

                                </div>

                                <p class="mt-2 text-sm leading-relaxed text-slate-600">
                                    The GS assessment replaces the former GTE test. You must demonstrate that your
                                    primary purpose for coming to Australia is to obtain an education, demonstrating
                                    ties to your home country and realistic career return on investment.
                                </p>

                                <a href="{{ url('/gs-guide') }}"
                                    class="mt-3 inline-flex items-center gap-1.5 text-sm font-semibold text-secondary-500 hover:text-secondary-800">
                                    Read GS Guide &amp; Checklist
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.8" />
                                    </svg>
                                </a>

                            </div>

                        </div>

                    </div>


                    {{-- Working rights --}}
                    <div
                        class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:border-brand-200 hover:shadow-md sm:p-6">

                        <div class="flex gap-4">

                            <div
                                class="hidden h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-600 sm:flex">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 8v8m-4-4h8" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.8" />
                                    <rect x="4" y="4" width="16" height="16" rx="3" stroke="currentColor"
                                        stroke-width="1.8" />
                                </svg>
                            </div>

                            <div class="min-w-0 flex-1">

                                <div class="flex flex-col gap-2 sm:flex-row sm:items-start sm:justify-between">

                                    <h3 class="font-heading text-base font-bold text-slate-900">
                                        Working Rights (Condition 8105)
                                    </h3>

                                    <span
                                        class="w-fit rounded-full border border-slate-200 bg-slate-50 px-3 py-1 text-xs font-semibold text-slate-600">
                                        48 hrs / Fortnight
                                    </span>

                                </div>

                                <p class="mt-2 text-sm leading-relaxed text-slate-600">
                                    Subclass 500 visa holders are permitted to work up to 48 hours per fortnight when
                                    their study course is in session, and unlimited hours during recognized term breaks
                                    and holidays.
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- OSHC --}}
                    <div
                        class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:border-brand-200 hover:shadow-md sm:p-6">

                        <div class="flex gap-4">

                            <div
                                class="hidden h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-rose-50 text-rose-600 sm:flex">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 21s-7-4.5-7-10V5l7-3 7 3v6c0 5.5-7 10-7 10z" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.8" />
                                    <path d="M9 12l2 2 4-4" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.8" />
                                </svg>
                            </div>

                            <div class="min-w-0 flex-1">

                                <div class="flex flex-col gap-2 sm:flex-row sm:items-start sm:justify-between">

                                    <h3 class="font-heading text-base font-bold text-slate-900">
                                        Overseas Student Health Cover (OSHC)
                                    </h3>

                                    <span
                                        class="w-fit rounded-full border border-slate-200 bg-slate-50 px-3 py-1 text-xs font-semibold text-slate-600">
                                        Visa Condition 8501
                                    </span>

                                </div>

                                <p class="mt-2 text-sm leading-relaxed text-slate-600">
                                    Continuous medical and hospital insurance is legally required for the entire length
                                    of your student visa. UTI can arrange partner-discounted coverage through Medibank,
                                    Bupa, or Allianz Care.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>


    {{-- =========================================================
        04. LIFE IN AUSTRALIA
    ========================================================== --}}
    <section class="w-full bg-white py-16 sm:py-20" data-purpose="lifestyle-and-logistics">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- Header --}}
            <div class="mb-10 max-w-3xl">

                <div class="mb-3 flex items-center gap-2 text-xs font-bold uppercase tracking-[0.18em] text-brand-600">
                    <span class="h-px w-7 bg-brand-500"></span>
                    04 / Life in Australia
                </div>

                <h2 class="font-heading text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                    Settling into Sydney.
                </h2>

                <p class="mt-3 max-w-2xl text-sm leading-relaxed text-slate-600 sm:text-base">
                    Parramatta is Western Sydney's thriving central commercial hub, offering world-class dining,
                    parks, and direct public transit into the Sydney CBD.
                </p>

            </div>


            {{-- Lifestyle Cards --}}
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">

                {{-- Accommodation --}}
                <div
                    class="group flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-lg">

                    <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M3 11l9-8 9 8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                            <path d="M5 10v10h14V10M9 20v-6h6v6" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.8" />
                        </svg>
                    </div>

                    <h3 class="font-heading text-lg font-bold text-slate-900">
                        Accommodation
                    </h3>

                    <p class="mt-2 flex-1 text-sm leading-relaxed text-slate-600">
                        Select between vetted homestays with Australian families, purpose-built student housing
                        (UniLodge, Scape), or share-houses situated 10–25 mins from the Parramatta campus.
                    </p>

                    <div class="mt-6 flex items-center justify-between border-t border-slate-100 pt-4">
                        <span class="text-xs text-slate-500">
                            Budget
                        </span>

                        <span class="text-sm font-bold text-slate-900">
                            $220–$450 / wk
                        </span>
                    </div>

                </div>


                {{-- Cost --}}
                <div
                    class="group flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-lg">

                    <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                        </svg>
                    </div>

                    <h3 class="font-heading text-lg font-bold text-slate-900">
                        Cost of Living
                    </h3>

                    <p class="mt-2 flex-1 text-sm leading-relaxed text-slate-600">
                        Realistic weekly budgets covering grocery essentials, phone connectivity, public transit,
                        and recreational spending aligned with official Study Australia financial benchmarks.
                    </p>

                    <div class="mt-6 flex items-center justify-between border-t border-slate-100 pt-4">
                        <span class="text-xs text-slate-500">
                            Govt Guideline
                        </span>

                        <span class="text-sm font-bold text-slate-900">
                            $29,710 / yr
                        </span>
                    </div>

                </div>


                {{-- Arrival --}}
                <div
                    class="group flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-lg">

                    <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M5 4h14v17H5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                            <path d="M9 8h6M9 12h6M9 16h3" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.8" />
                        </svg>
                    </div>

                    <h3 class="font-heading text-lg font-bold text-slate-900">
                        Arrival Guide (72h)
                    </h3>

                    <p class="mt-2 flex-1 text-sm leading-relaxed text-slate-600">
                        Your landing roadmap from Sydney Kingsford Smith Airport (SYD): get an Australian eSIM,
                        set up your Commonwealth/ANZ bank account, apply for a Tax File Number (TFN), and collect
                        transport passes.
                    </p>

                    <div class="mt-6 flex items-center justify-between border-t border-slate-100 pt-4">
                        <span class="text-xs text-slate-500">
                            Airport Transit
                        </span>

                        <span class="text-sm font-bold text-slate-900">
                            Train / Shuttle
                        </span>
                    </div>

                </div>


                {{-- Transport --}}
                <div
                    class="group flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-lg">

                    <div class="mb-5 flex h-11 w-11 items-center justify-center rounded-xl bg-violet-50 text-violet-600">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M4 16h16M6 16l1-7h10l1 7M8 19h.01M16 19h.01M8 9V6h8v3" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.8" />
                        </svg>
                    </div>

                    <h3 class="font-heading text-lg font-bold text-slate-900">
                        Sydney Transport
                    </h3>

                    <p class="mt-2 flex-1 text-sm leading-relaxed text-slate-600">
                        Tap-and-go with Opal cards or contactless debit cards on Sydney Trains, light rail lines,
                        Parramatta River ferries, and buses connecting Church Street straight to campus doors.
                    </p>

                    <div class="mt-6 flex items-center justify-between border-t border-slate-100 pt-4">
                        <span class="text-xs text-slate-500">
                            Campus Stop
                        </span>

                        <span class="text-sm font-bold text-slate-900">
                            Parramatta Interchg
                        </span>
                    </div>

                </div>

            </div>


            {{-- CTA --}}
            <div class="mt-10 flex justify-center">

                <a href="#international-admissions"
                    class="group inline-flex items-center gap-3 rounded-xl bg-brand-600 px-6 py-3.5 text-sm font-bold text-white shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-700 hover:shadow-lg">

                    <span>
                        Talk to international admissions
                    </span>

                    <span
                        class="flex h-7 w-7 items-center justify-center rounded-lg bg-white/10 transition-transform duration-300 group-hover:translate-x-1">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.8" />
                        </svg>
                    </span>

                </a>

            </div>

        </div>
    </section>

@endsection