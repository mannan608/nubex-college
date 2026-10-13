@extends('frontend.layouts.app')

@section('title', 'Agents')

@section('content')
    {{--  HERO SECTION --}}
    <section class="relative isolate overflow-hidden bg-brand-25">
        <div class="pointer-events-none absolute inset-0 mesh-background"></div>

        {{-- Decorative brand glow --}}
        <div
            class="pointer-events-none absolute -right-32 -top-32 h-72 w-72 rounded-full bg-brand-500/10 blur-3xl sm:h-96 sm:w-96">
        </div>
        <div
            class="pointer-events-none absolute -bottom-32 -left-32 h-72 w-72 rounded-full bg-secondary-500/10 blur-3xl sm:h-96 sm:w-96">
        </div>

        <div class="relative mx-auto w-full max-w-7xl px-4 py-12 sm:px-6 sm:py-16 lg:px-8 lg:py-20 xl:py-24">

            <div class="max-w-4xl">

                {{-- Eyebrow --}}
                <span
                    class="mb-3 inline-flex items-center rounded-full border border-secondary-200 bg-secondary-50 px-3 py-1.5 font-mono text-[10px] font-semibold uppercase tracking-[0.16em] text-secondary-700 sm:text-xs">
                    Agent Partnership
                </span>

                {{-- Heading --}}
                <h1
                    class="max-w-4xl font-heading text-3xl font-bold leading-[1.08] tracking-tight text-neutral-950 sm:text-4xl md:text-5xl lg:text-6xl xl:text-[4.25rem]">
                    Grow together with UTI
                </h1>

                {{-- Description --}}
                <p
                    class="mt-5 max-w-2xl text-sm leading-6 text-neutral-600 sm:text-base sm:leading-7 lg:text-lg lg:leading-8">
                    Lead cross-functional initiatives, craft resilient digital strategies, and drive high-level
                    operational leadership across Australian and global commerce. Hold 5+ nationally recognised
                    qualifications across 3 industries.
                </p>

                {{-- CTA --}}
                <div class="mt-7 flex flex-col gap-3 sm:mt-8 sm:flex-row sm:flex-wrap sm:items-center">

                    <a href="#apply"
                        class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-brand-700 bg-brand-500 px-5 py-3.5 font-heading text-sm font-bold uppercase tracking-wide text-white shadow-theme-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-600 hover:shadow-theme-md active:translate-y-0 sm:w-auto">
                        <span>Become an Agent</span>

                        <svg class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" />
                        </svg>
                    </a>

                </div>
            </div>
        </div>
    </section>


  {{-- =========================================================
WHY PARTNER + APPLICATION
========================================================= --}}

<section id="benefits"
    class="mx-auto w-full max-w-7xl px-4 py-10 sm:px-6 sm:py-14 lg:px-8 lg:py-20">


<div
    class="grid grid-cols-1 overflow-hidden rounded-2xl border border-neutral-200 bg-neutral-25 shadow-theme-lg lg:grid-cols-12">

    {{-- =====================================================
        LEFT CONTENT
    ====================================================== --}}
    <div
        class="flex flex-col justify-between gap-8 bg-brand-50 p-5 sm:p-7 md:p-9 lg:col-span-7 lg:p-10 xl:p-12">

        <div class="flex flex-col gap-6">

            {{-- Section Label --}}
            <div class="flex flex-wrap items-center gap-2">

                <span
                    class="text-[10px] font-bold uppercase tracking-[0.14em] text-secondary-600 sm:text-xs">
                    Partnership Benefits
                </span>

            </div>


            {{-- Heading --}}
            <div>
                <h2
                    class="max-w-2xl font-display text-2xl font-extrabold leading-[1.15] tracking-tight text-brand-600 sm:text-3xl md:text-4xl lg:text-[2.6rem] xl:text-5xl">
                    Why partner with
                    <span class="text-brand-500">UTI</span>
                </h2>

                <p
                    class="mt-4 max-w-2xl text-sm leading-6 text-neutral-600 sm:text-base sm:leading-7">
                    Join a trusted Australian Registered Training Organisation (RTO). We equip our recruitment
                    partners with the support and tools needed to drive student success.
                </p>
            </div>


            {{-- =================================================
                BENEFIT LIST
            ================================================== --}}
            <div class="flex flex-col gap-4">

                {{-- Benefit 1 --}}
                <div class="flex items-start gap-3">

                    <span
                        class="material-symbols-outlined mt-0.5 shrink-0 text-xl font-bold text-secondary-500 sm:text-2xl">
                        school
                    </span>

                    <div class="min-w-0">

                        <h3
                            class="text-sm font-semibold leading-5 text-neutral-900 sm:text-base">
                            CRICOS-registered portfolio
                        </h3>

                        <p
                            class="mt-1 text-xs leading-5 text-neutral-600 sm:text-sm sm:leading-6">
                            5+ nationally recognized qualifications across 3 in-demand sectors.
                        </p>

                    </div>

                </div>


                {{-- Benefit 2 --}}
                <div class="flex items-start gap-3">

                    <span
                        class="material-symbols-outlined mt-0.5 shrink-0 text-xl font-bold text-secondary-500 sm:text-2xl">
                        verified
                    </span>

                    <div class="min-w-0">

                        <h3
                            class="text-sm font-semibold leading-5 text-neutral-900 sm:text-base">
                            Trusted Australian RTO
                        </h3>

                        <p
                            class="mt-1 text-xs leading-5 text-neutral-600 sm:text-sm sm:leading-6">
                            Partner with a quality-assured provider committed to high graduate outcomes.
                        </p>

                    </div>

                </div>


                {{-- Benefit 3 --}}
                <div class="flex items-start gap-3">

                    <span
                        class="material-symbols-outlined mt-0.5 shrink-0 text-xl font-bold text-secondary-500 sm:text-2xl">
                        campaign
                    </span>

                    <div class="min-w-0">

                        <h3
                            class="text-sm font-semibold leading-5 text-neutral-900 sm:text-base">
                            Turnkey marketing collateral
                        </h3>

                        <p
                            class="mt-1 text-xs leading-5 text-neutral-600 sm:text-sm sm:leading-6">
                            Brochures, flyers, and digital course guides localized for your market.
                        </p>

                    </div>

                </div>


                {{-- Benefit 4 --}}
                <div class="flex items-start gap-3">

                    <span
                        class="material-symbols-outlined mt-0.5 shrink-0 text-xl font-bold text-secondary-500 sm:text-2xl">
                        support_agent
                    </span>

                    <div class="min-w-0">

                        <h3
                            class="text-sm font-semibold leading-5 text-neutral-900 sm:text-base">
                            Dedicated agent support
                        </h3>

                        <p
                            class="mt-1 text-xs leading-5 text-neutral-600 sm:text-sm sm:leading-6">
                            Direct phone & email line to our active UTI agent relations team.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        {{-- =================================================
            BOTTOM META
        ================================================== --}}
        <div
            class="flex flex-wrap items-center gap-x-3 gap-y-2 border-t border-brand-200 pt-5 text-[9px] font-bold uppercase tracking-wide text-neutral-600 sm:text-[10px]">

            <div class="flex items-center gap-1.5">

                <span class="material-symbols-outlined text-base text-brand-600">
                    verified
                </span>

                <span>
                    Trusted RTO Partner
                </span>

            </div>

            <span class="text-neutral-400">•</span>

            <span>
                5+ Qualifications
            </span>

            <span class="text-neutral-400">•</span>

            <span>
                Dedicated Support
            </span>

        </div>

    </div>


    {{-- =====================================================
        RIGHT APPLICATION FORM
    ====================================================== --}}
    <div
        id="apply"
        class="flex flex-col justify-center bg-neutral-25 px-5 py-5 sm:px-7 md:px-9 lg:col-span-5 lg:px-10 xl:px-12">

        <form
            class="flex flex-col gap-5"
            onsubmit="event.preventDefault();">


            {{-- Form Heading --}}
            <div class="border-b border-neutral-200 pb-4">

                <div class="flex flex-wrap items-center justify-between gap-2">

                    <span
                        class="font-display text-lg font-bold uppercase tracking-tight text-brand-500 sm:text-xl">
                        Quick Start
                    </span>

                    <span
                        class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 px-2.5 py-1 text-[9px] font-bold uppercase tracking-wide text-emerald-700 sm:text-[10px]">

                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>

                        Applications Open

                    </span>

                </div>

                <p
                    class="mt-1 text-[9px] font-bold uppercase tracking-wide text-neutral-500 sm:text-[10px]">
                    Express your interest in becoming an authorised UTI agent
                </p>

            </div>


          <p class="mt-2 text-xs leading-5 text-neutral-500 sm:text-sm sm:leading-6">
                    Fill out your initial details to express interest. Our team will get back to you within
                    24 hours.
                </p>


            {{-- =================================================
                COMPANY NAME
            ================================================== --}}
            <div class="flex flex-col gap-2">

                <label
                    for="agent-company"
                    class="text-[10px] font-bold uppercase tracking-wide text-neutral-800 sm:text-xs">
                    Company Name
                    <span class="text-secondary-500">*</span>
                </label>

                <input
                    id="agent-company"
                    type="text"
                    name="company"
                    required
                    placeholder="e.g. Global Education Solutions"
                    class="h-11 w-full rounded-lg border border-neutral-300 bg-neutral-25 px-4 py-2.5 text-sm text-neutral-900 placeholder:text-neutral-400 transition-all duration-200 focus:border-brand-400 focus:bg-white focus:outline-none focus:ring-4 focus:ring-brand-500/10 sm:h-12">

            </div>


            {{-- =================================================
                COUNTRY + EXPERIENCE
            ================================================== --}}
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">

                {{-- Country --}}
                <div class="flex flex-col gap-2">

                    <label
                        for="agent-country"
                        class="text-[10px] font-bold uppercase tracking-wide text-neutral-800 sm:text-xs">
                        Country
                        <span class="text-secondary-500">*</span>
                    </label>

                    <input
                        id="agent-country"
                        type="text"
                        name="country"
                        required
                        placeholder="e.g. Australia"
                        class="h-11 w-full rounded-lg border border-neutral-300 bg-neutral-25 px-4 py-2.5 text-sm text-neutral-900 placeholder:text-neutral-400 transition-all duration-200 focus:border-brand-400 focus:bg-white focus:outline-none focus:ring-4 focus:ring-brand-500/10 sm:h-12">

                </div>


                {{-- Experience --}}
                <div class="flex flex-col gap-2">

                    <label
                        for="agent-experience"
                        class="text-[10px] font-bold uppercase tracking-wide text-neutral-800 sm:text-xs">
                        Experience
                        <span class="text-secondary-500">*</span>
                    </label>

                    <input
                        id="agent-experience"
                        type="text"
                        name="experience"
                        required
                        placeholder="e.g. 5 Years"
                        class="h-11 w-full rounded-lg border border-neutral-300 bg-neutral-25 px-4 py-2.5 text-sm text-neutral-900 placeholder:text-neutral-400 transition-all duration-200 focus:border-brand-400 focus:bg-white focus:outline-none focus:ring-4 focus:ring-brand-500/10 sm:h-12">

                </div>

            </div>


            {{-- =================================================
                EMAIL
            ================================================== --}}
            <div class="flex flex-col gap-2">

                <label
                    for="agent-email"
                    class="text-[10px] font-bold uppercase tracking-wide text-neutral-800 sm:text-xs">
                    Contact Email
                    <span class="text-secondary-500">*</span>
                </label>

                <input
                    id="agent-email"
                    type="email"
                    name="email"
                    required
                    placeholder="partner@agency.com"
                    class="h-11 w-full rounded-lg border border-neutral-300 bg-neutral-25 px-4 py-2.5 text-sm text-neutral-900 placeholder:text-neutral-400 transition-all duration-200 focus:border-brand-400 focus:bg-white focus:outline-none focus:ring-4 focus:ring-brand-500/10 sm:h-12">

            </div>


            {{-- =================================================
                SUPPORT CHECKBOX
            ================================================== --}}
            <div class="flex items-start gap-2.5 pt-1">

                <input
                    id="agent-support"
                    type="checkbox"
                    class="mt-0.5 h-4 w-4 shrink-0 rounded border-neutral-300 accent-brand-500">

                <label
                    for="agent-support"
                    class="cursor-pointer select-none text-xs leading-5 text-neutral-600">
                    I would like to receive information about UTI programs, agent support and partnership
                    opportunities.
                </label>

            </div>


            {{-- =================================================
                SUBMIT BUTTON
            ================================================== --}}
            <button
                type="submit"
                class="group mt-1 inline-flex min-h-12 w-full items-center justify-center gap-2 rounded-lg bg-brand-500 px-4 py-3 text-xs font-bold uppercase tracking-wide text-white transition-all duration-300 hover:bg-brand-600 hover:shadow-theme-lg focus:outline-none focus:ring-4 focus:ring-brand-500/20 sm:min-h-[52px]">

                <span>
                    Submit Express Application
                </span>

                <svg
                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true">

                    <path
                        d="M14 5l7 7m0 0l-7 7m7-7H3"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2" />

                </svg>

            </button>


            {{-- Privacy Note --}}
            <p class="text-center text-[9px] leading-4 text-neutral-400 sm:text-[10px]">
                Your information will be used only for partnership enquiry and follow-up communication.
            </p>

        </form>

    </div>

</div>

</section>



    {{-- PROCESS SECTION --}}
    <section id="process" class="bg-white py-14 sm:py-16 lg:py-20 xl:py-24">

        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- Section Heading --}}
            <div class="mx-auto max-w-2xl text-center">

                <span class="text-[10px] font-bold uppercase tracking-[0.16em] text-brand-600 sm:text-xs">
                    Onboarding Path
                </span>

                <h2
                    class="mt-2 font-display text-2xl font-extrabold leading-tight tracking-tight text-slate-900 sm:text-3xl lg:text-4xl">
                    Agent application process
                </h2>

                <p class="mt-3 text-sm leading-6 text-slate-600 sm:text-base sm:leading-7">
                    A simple, transparent 4-step path to becoming an authorized UTI education agent partner.
                </p>

            </div>


            {{-- Process Grid --}}
            <div class="mt-8 grid gap-4 sm:mt-10 sm:grid-cols-2 sm:gap-5 lg:grid-cols-4 lg:gap-6">

                {{-- Step 1 --}}
                <div
                    class="group flex h-full flex-col rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-md sm:p-6">

                    <div class="flex items-center justify-between gap-3">
                        <span
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 font-display text-sm font-bold text-brand-700">
                            01
                        </span>

                        <span class="text-[10px] font-semibold uppercase tracking-wider text-slate-400">
                            Step 1
                        </span>
                    </div>

                    <h3 class="mt-5 font-display text-base font-bold text-slate-900 sm:text-lg">
                        Complete Application
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Fill out the PDF application form and gather required docs:
                    </p>

                </div>


                {{-- Step 2 --}}
                <div
                    class="group flex h-full flex-col rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-md sm:p-6">

                    <div class="flex items-center justify-between gap-3">
                        <span
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 font-display text-sm font-bold text-brand-700">
                            02
                        </span>

                        <span class="text-[10px] font-semibold uppercase tracking-wider text-slate-400">
                            Step 2
                        </span>
                    </div>

                    <h3 class="mt-5 font-display text-base font-bold text-slate-900 sm:text-lg">
                        Marketing Review
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Applications and submitted credentials will be reviewed by the UTI marketing team, including
                        reference verification checks.
                    </p>

                </div>


                {{-- Step 3 --}}
                <div
                    class="group flex h-full flex-col rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-md sm:p-6">

                    <div class="flex items-center justify-between gap-3">
                        <span
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 font-display text-sm font-bold text-brand-700">
                            03
                        </span>

                        <span class="text-[10px] font-semibold uppercase tracking-wider text-slate-400">
                            Step 3
                        </span>
                    </div>

                    <h3 class="mt-5 font-display text-base font-bold text-slate-900 sm:text-lg">
                        Agreement & Onboarding
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Once approved, sign the formal agency agreement with UTI and enter our official onboarding
                        portal.
                    </p>

                </div>


                {{-- Step 4 --}}
                <div
                    class="group flex h-full flex-col rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-md sm:p-6">

                    <div class="flex items-center justify-between gap-3">
                        <span
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 font-display text-sm font-bold text-brand-700">
                            04
                        </span>

                        <span class="text-[10px] font-semibold uppercase tracking-wider text-slate-400">
                            Step 4
                        </span>
                    </div>

                    <h3 class="mt-5 font-display text-base font-bold text-slate-900 sm:text-lg">
                        Welcome Kit & Support
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Receive your signed agreement copy, program overviews, policy docs, training assets, and
                        dedicated rep support.
                    </p>

                </div>

            </div>


            {{-- Download Bar --}}
            <div
                class="mt-8 flex flex-col gap-5 rounded-2xl border border-slate-200 bg-slate-50 p-5 sm:mt-10 sm:p-6 lg:flex-row lg:items-center lg:justify-between lg:px-7">

                <div class="flex items-start gap-3.5 sm:items-center sm:gap-4">

                    <div
                        class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white text-brand-700 shadow-sm sm:h-12 sm:w-12">
                        <svg class="h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>

                    <div class="min-w-0">
                        <h4 class="font-display text-sm font-bold text-slate-900 sm:text-base">
                            Ready to complete Step 1?
                        </h4>

                        <p class="mt-0.5 text-xs leading-5 text-slate-600 sm:text-sm">
                            Download the official application form in PDF format.
                        </p>
                    </div>

                </div>

                <a href="/assets/uti-agent-application-form-qHDF9MUC.pdf" target="_blank" rel="noopener noreferrer"
                    class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-slate-900 px-5 py-3 text-sm font-semibold text-white shadow-sm transition-all duration-300 hover:bg-brand-700 sm:w-auto">

                    <span>Open Application Form (PDF)</span>

                    <svg class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>

                </a>

            </div>

        </div>
    </section>


    {{-- AUTHORISED AGENTS DIRECTORY --}}
    <section id="agents" class="border-y border-slate-200 bg-slate-50 py-14 sm:py-16 lg:py-20 xl:py-24">

        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- Header --}}
            <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">

                <div class="max-w-2xl">

                    <span class="text-[10px] font-bold uppercase tracking-[0.16em] text-brand-700 sm:text-xs">
                        Verified Network
                    </span>

                    <h2
                        class="mt-2 font-display text-2xl font-extrabold leading-tight tracking-tight text-slate-900 sm:text-3xl lg:text-4xl">
                        Our authorised agents
                    </h2>

                    <p class="mt-2 text-sm leading-6 text-slate-600 sm:text-base sm:leading-7">
                        UTI partners with trusted education agencies globally to ensure professional recruitment
                        standards.
                    </p>

                </div>

                <span
                    class="inline-flex w-fit items-center rounded-lg border border-slate-200 bg-white px-3 py-1.5 text-[10px] font-semibold text-slate-700 shadow-sm sm:text-xs">
                    4 Active Network Partners Listed
                </span>

            </div>


            {{-- Agent Cards --}}
            <div class="mt-8 grid gap-4 sm:mt-10 sm:grid-cols-2 sm:gap-5 lg:gap-6">

                {{-- Agent 1 --}}
                <div
                    class="group flex h-full flex-col justify-between rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-md sm:p-6">

                    <div>
                        <div class="flex items-start justify-between gap-3">
                            <span
                                class="rounded-full bg-slate-100 px-3 py-1 text-[10px] font-semibold text-slate-600 sm:text-xs">
                                Education & Migration
                            </span>

                            <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
                        </div>

                        <h3
                            class="mt-4 font-display text-lg font-bold leading-snug text-slate-900 transition-colors group-hover:text-brand-700 sm:text-xl">
                            Blueprint Education and Migration
                        </h3>
                    </div>

                    <div
                        class="mt-5 flex flex-col gap-2.5 border-t border-slate-100 pt-4 text-xs leading-5 text-slate-600 sm:text-sm">

                        <a href="tel:+61432827511" class="flex items-start gap-2 transition-colors hover:text-brand-700">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>

                            <span>+61 432 827 511</span>
                        </a>

                        <a href="mailto:applications@blueprintedu.com.au"
                            class="flex items-start gap-2 break-all transition-colors hover:text-brand-700">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5v12a2 2 0 002 2z" />
                            </svg>

                            <span>applications@blueprintedu.com.au</span>
                        </a>

                    </div>
                </div>


                {{-- Agent 2 --}}
                <div
                    class="group flex h-full flex-col justify-between rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-md sm:p-6">

                    <div>
                        <div class="flex items-start justify-between gap-3">
                            <span
                                class="rounded-full bg-slate-100 px-3 py-1 text-[10px] font-semibold text-slate-600 sm:text-xs">
                                Student Advisory
                            </span>

                            <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
                        </div>

                        <h3
                            class="mt-4 font-display text-lg font-bold leading-snug text-slate-900 transition-colors group-hover:text-brand-700 sm:text-xl">
                            Students Solution Centre Pty Ltd
                        </h3>
                    </div>

                    <div
                        class="mt-5 flex flex-col gap-2.5 border-t border-slate-100 pt-4 text-xs leading-5 text-slate-600 sm:text-sm">

                        <a href="tel:+61433556907" class="flex items-start gap-2 transition-colors hover:text-brand-700">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>

                            <span>+61 433 556 907</span>
                        </a>

                        <a href="mailto:ssc@studentssolutioncenter.net"
                            class="flex items-start gap-2 break-all transition-colors hover:text-brand-700">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5v12a2 2 0 002 2z" />
                            </svg>

                            <span>ssc@studentssolutioncenter.net</span>
                        </a>

                    </div>
                </div>


                {{-- Agent 3 --}}
                <div
                    class="group flex h-full flex-col justify-between rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-md sm:p-6">

                    <div>
                        <div class="flex items-start justify-between gap-3">
                            <span
                                class="rounded-full bg-slate-100 px-3 py-1 text-[10px] font-semibold text-slate-600 sm:text-xs">
                                Education Services
                            </span>

                            <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
                        </div>

                        <h3
                            class="mt-4 font-display text-lg font-bold leading-snug text-slate-900 transition-colors group-hover:text-brand-700 sm:text-xl">
                            Promise Services
                        </h3>
                    </div>

                    <div
                        class="mt-5 flex flex-col gap-2.5 border-t border-slate-100 pt-4 text-xs leading-5 text-slate-600 sm:text-sm">

                        <a href="tel:+61481830835" class="flex items-start gap-2 transition-colors hover:text-brand-700">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a11.042 11.042 0 005.516 5.516l1.13-2.257a11.042 11.042 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>

                            <span>+61 481 830 835 / +61 2 8664 4541</span>
                        </a>

                        <a href="mailto:admin@promiseservices.com.au"
                            class="flex items-start gap-2 break-all transition-colors hover:text-brand-700">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5v12a2 2 0 002 2z" />
                            </svg>

                            <span>admin@promiseservices.com.au</span>
                        </a>

                    </div>
                </div>


                {{-- Agent 4 --}}
                <div
                    class="group flex h-full flex-col justify-between rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-md sm:p-6">

                    <div>
                        <div class="flex items-start justify-between gap-3">
                            <span
                                class="rounded-full bg-slate-100 px-3 py-1 text-[10px] font-semibold text-slate-600 sm:text-xs">
                                Education & Migration
                            </span>

                            <span class="mt-1 h-2 w-2 shrink-0 rounded-full bg-emerald-500"></span>
                        </div>

                        <h3
                            class="mt-4 font-display text-lg font-bold leading-snug text-slate-900 transition-colors group-hover:text-brand-700 sm:text-xl">
                            First One Education Pty Ltd
                        </h3>
                    </div>

                    <div
                        class="mt-5 flex flex-col gap-2.5 border-t border-slate-100 pt-4 text-xs leading-5 text-slate-600 sm:text-sm">

                        <a href="tel:+61426675611" class="flex items-start gap-2 transition-colors hover:text-brand-700">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 011.21-.502l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a11.042 11.042 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>

                            <span>+61 426 675 611 / +61 2 9267 0718</span>
                        </a>

                        <a href="mailto:training@firstedumigration.com.au"
                            class="flex items-start gap-2 break-all transition-colors hover:text-brand-700">
                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-slate-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5v12a2 2 0 002 2z" />
                            </svg>

                            <span>training@firstedumigration.com.au</span>
                        </a>

                    </div>
                </div>

            </div>

        </div>
    </section>


    {{-- AGENT RESOURCES --}}
    <section id="resources" class="bg-white py-14 sm:py-16 lg:py-20 xl:py-24">

        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- Section Heading --}}
            <div class="mx-auto max-w-2xl text-center">

                <span class="text-[10px] font-bold uppercase tracking-[0.16em] text-brand-700 sm:text-xs">
                    Partner Hub
                </span>

                <h2
                    class="mt-2 font-display text-2xl font-extrabold leading-tight tracking-tight text-slate-900 sm:text-3xl lg:text-4xl">
                    Agent resources & media
                </h2>

                <p class="mt-3 text-sm leading-6 text-slate-600 sm:text-base sm:leading-7">
                    Download current marketing collateral, official brand guidelines, and administrative policies.
                </p>

            </div>


            {{-- Resource Cards --}}
            <div class="mt-8 grid gap-5 sm:mt-10 md:grid-cols-3 md:gap-6">

                {{-- Resource 1 --}}
                <div
                    class="flex h-full flex-col justify-between rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-md sm:p-6 lg:p-7">

                    <div>

                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-50 text-brand-700 sm:h-12 sm:w-12">
                            <svg class="h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C20.832 18.477 19.247 18 17.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>

                        <h3 class="mt-5 font-display text-lg font-bold text-slate-900 sm:text-xl">
                            Course Brochures
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Latest UTI course brochures, flyers, and guides across all qualification sectors.
                        </p>

                    </div>

                    <a href="/assets/uti-course-brochures-B8x0Wzy5.zip" download="UTI-Course-Brochures.zip"
                        class="mt-7 inline-flex items-center justify-between gap-3 rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm font-semibold text-slate-800 transition-all duration-300 hover:border-brand-700 hover:bg-brand-700 hover:text-white">

                        <span>Download ZIP</span>

                        <svg class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>

                    </a>

                </div>


                {{-- Resource 2 --}}
                <div
                    class="flex h-full flex-col justify-between rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-md sm:p-6 lg:p-7">

                    <div>

                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-50 text-brand-700 sm:h-12 sm:w-12">
                            <svg class="h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>

                        <h3 class="mt-5 font-display text-lg font-bold text-slate-900 sm:text-xl">
                            Logo Pack & Media
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Official vector UTI logos, color palettes, typography, and marketing brand assets.
                        </p>

                    </div>

                    <a href="/assets/uti-logo-pack-BV69NgL-.zip" download="UTI-Logo-Pack.zip"
                        class="mt-7 inline-flex items-center justify-between gap-3 rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm font-semibold text-slate-800 transition-all duration-300 hover:border-brand-700 hover:bg-brand-700 hover:text-white">

                        <span>Download ZIP</span>

                        <svg class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>

                    </a>

                </div>


                {{-- Resource 3 --}}
                <div
                    class="flex h-full flex-col justify-between rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-md sm:p-6 lg:p-7">

                    <div>

                        <div
                            class="flex h-11 w-11 items-center justify-center rounded-xl bg-brand-50 text-brand-700 sm:h-12 sm:w-12">
                            <svg class="h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>

                        <h3 class="mt-5 font-display text-lg font-bold text-slate-900 sm:text-xl">
                            Agent Policies
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Agent Code of Ethics, Compliance Guidelines, Application, and Change-of-Agent forms.
                        </p>

                    </div>

                    <a href="/assets/uti-agent-policies-7lxoAypo.zip" download="UTI-Agent-Policies.zip"
                        class="mt-7 inline-flex items-center justify-between gap-3 rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm font-semibold text-slate-800 transition-all duration-300 hover:border-brand-700 hover:bg-brand-700 hover:text-white">

                        <span>Download ZIP</span>

                        <svg class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>

                    </a>

                </div>

            </div>

        </div>
    </section>

@endsection
