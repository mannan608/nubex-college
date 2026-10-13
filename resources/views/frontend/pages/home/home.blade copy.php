@extends('frontend.layouts.app')

@section('content')
<section class="relative overflow-hidden bg-brand-25">
    {{-- Existing mesh background utility --}}
    <div class="absolute inset-0 mesh-background"></div>

    <div class="relative mx-auto w-full max-w-7xl px-4 py-10 sm:px-6 md:py-14 lg:px-8 lg:py-20">

        <div class="grid grid-cols-1 items-stretch gap-10 lg:grid-cols-12 lg:gap-12">

            {{-- ====================================================
                HERO CONTENT
            ===================================================== --}}
            <div class="flex flex-col justify-between lg:col-span-7">

                <div class="flex flex-col gap-5">

                    {{-- Regulatory badges --}}
                    <div class="flex flex-wrap items-center gap-2">

                        <span
                            class="inline-flex items-center gap-2 rounded-lg bg-brand-500 px-3 py-1.5 font-mono text-[11px] font-bold uppercase tracking-wide text-neutral-25">

                            <span class="h-2 w-2 rounded-full bg-secondary-300"></span>

                            CRICOS 04111E • Sydney Campus

                        </span>

                        <span
                            class="inline-flex items-center rounded-lg border border-neutral-200 bg-neutral-50 px-3 py-1.5 font-mono text-[11px] font-bold uppercase tracking-wide text-neutral-800">

                            RTO 45975

                        </span>

                    </div>


                    {{-- Main headline --}}
                    <div class="flex flex-col gap-2 pt-1">

                        <h1
                            class="font-display text-4xl font-extrabold uppercase leading-[1.04] tracking-tight text-neutral-950 sm:text-5xl lg:text-6xl">

                            Build the Career

                        </h1>

                        <div
                            class="inline-block self-start -rotate-1 rounded-md bg-brand-500 px-4 py-1.5 sm:px-5">

                            <span
                                class="font-display text-4xl font-extrabold uppercase leading-[1.04] tracking-tight text-neutral-25 sm:text-5xl lg:text-6xl">

                                You Came For

                            </span>

                        </div>

                    </div>


                    {{-- Hero description --}}
                    <p
                        class="max-w-2xl pt-1 text-base leading-7 text-neutral-600 md:text-lg md:leading-8 max-w-xl">

                        Nubex College trains tomorrow's tradies, carers, technicians and leaders —
                        with hands-on courses, expert assessors and pathways into real Australian jobs.

                    </p>

                </div>


                {{-- =================================================
                    HERO CTA + TRUST
                ================================================== --}}
                <div class="flex flex-col gap-7 pt-8 lg:pt-12">

                    <div class="flex flex-col gap-3 sm:flex-row sm:flex-wrap">

                        {{-- Primary CTA --}}
                        <a
                            href="#courses"
                            class="inline-flex min-h-12 items-center justify-center gap-2 rounded-lg bg-brand-500 px-6 py-3 font-mono text-xs font-bold uppercase tracking-wide text-neutral-25 transition-all duration-300 ease-out hover:-translate-y-0.5 hover:bg-brand-600 hover:shadow-theme-md focus:outline-none focus:ring-4 focus:ring-brand-500/20">

                            Browse All Courses

                            <span class="material-symbols-outlined text-lg">
                                arrow_forward
                            </span>

                        </a>


                        {{-- Secondary CTA --}}
                        <a
                            href="#prospectus"
                            class="inline-flex min-h-12 items-center justify-center gap-2 rounded-lg border border-brand-500 bg-neutral-25 px-6 py-3 font-mono text-xs font-bold uppercase tracking-wide text-brand-500 transition-all duration-300 ease-out hover:-translate-y-0.5 hover:bg-brand-50 hover:shadow-theme-sm focus:outline-none focus:ring-4 focus:ring-brand-500/10">

                            <span class="material-symbols-outlined text-lg">
                                menu_book
                            </span>

                            Student Prospectus

                        </a>

                    </div>


                    {{-- Trust indicators --}}
                    <div
                        class="grid w-full max-w-2xl grid-cols-1 gap-5 border-t border-brand-200 pt-6 sm:grid-cols-2">

                        <div class="flex items-start gap-3">

                            <span
                                class="material-symbols-outlined mt-0.5 text-2xl font-bold text-secondary-500">
                                verified
                            </span>

                            <div class="flex flex-col gap-0.5">

                                <span
                                    class="font-mono text-[11px] font-bold uppercase tracking-wide text-neutral-900">
                                    Nationally Recognised
                                </span>

                                <span class="text-xs leading-5 text-neutral-600">
                                    AQF Level 3 to 6 verified
                                </span>

                            </div>

                        </div>


                        <div class="flex items-start gap-3">

                            <span
                                class="material-symbols-outlined mt-0.5 text-2xl font-bold text-secondary-500">
                                handshake
                            </span>

                            <div class="flex flex-col gap-0.5">

                                <span
                                    class="font-mono text-[11px] font-bold uppercase tracking-wide text-neutral-900">
                                    Work Placements
                                </span>

                                <span class="text-xs leading-5 text-neutral-600">
                                    NSW host employer network
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ====================================================
                HERO VISUAL
            ===================================================== --}}
            <div
                class="flex flex-col overflow-hidden rounded-2xl border border-neutral-200 bg-neutral-25 shadow-theme-lg lg:col-span-5">

                {{-- Browser-style header --}}
                <div
                    class="flex items-center justify-between border-b border-neutral-200 bg-neutral-50 px-4 py-3">

                    <div class="flex items-center gap-2">

                        <span class="h-2.5 w-2.5 rounded-full bg-error-500"></span>

                        <span class="h-2.5 w-2.5 rounded-full bg-warning-400"></span>

                        <span class="h-2.5 w-2.5 rounded-full bg-success-500"></span>

                    </div>

                </div>


                {{-- IMPORTANT:
                     Existing seamless crossfade hero slider preserved --}}
                @include('frontend.pages.home.section.hero-slider')


                {{-- Technical information --}}
                <div
                    class="grid grid-cols-3 divide-x divide-neutral-200 border-t border-neutral-200 bg-neutral-25 text-center">

                    <div class="px-2 py-4">

                        <span
                            class="block font-display text-lg font-extrabold text-brand-500">
                            40:60
                        </span>

                        <span
                            class="font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-600">
                            Theory / Hands-on
                        </span>

                    </div>


                    <div class="px-2 py-4">

                        <span
                            class="block font-display text-lg font-extrabold text-brand-500">
                            100%
                        </span>

                        <span
                            class="font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-600">
                            ASQA Compliant
                        </span>

                    </div>


                    <div class="px-2 py-4">

                        <span
                            class="block font-display text-lg font-extrabold text-brand-500">
                            AUST
                        </span>

                        <span
                            class="font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-600">
                            Government Code
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================================================================
    STATISTICS
================================================================ --}}
<section class="w-full bg-neutral-25 py-14 md:py-18 lg:py-24">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4 lg:gap-6">


            {{-- Accreditation --}}
            <div
                class="flex flex-col justify-between rounded-2xl border border-neutral-200 bg-neutral-25 p-6 transition-all duration-300 ease-out hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg">

                <div
                    class="flex items-center justify-between border-b border-neutral-200 pb-3">

                    <span
                        class="font-mono text-[10px] font-bold uppercase tracking-widest text-neutral-600">
                        Accreditation
                    </span>

                    <span class="h-2.5 w-2.5 rounded-full bg-brand-500"></span>

                </div>

                <div class="flex items-baseline gap-2 py-5">

                    <span
                        class="font-display text-4xl font-extrabold tracking-tight text-brand-500">
                        12+
                    </span>

                    <span
                        class="font-mono text-[10px] font-bold uppercase tracking-wide text-secondary-600">
                        Nationally Accredited
                    </span>

                </div>

                <p class="text-sm leading-6 text-neutral-600">
                    Certificate III, IV and Advanced Diploma awards recognised across Australia.
                </p>

            </div>


            {{-- Location --}}
            <div
                class="flex flex-col justify-between rounded-2xl border border-neutral-200 bg-neutral-25 p-6 transition-all duration-300 ease-out hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg">

                <div
                    class="flex items-center justify-between border-b border-neutral-200 pb-3">

                    <span
                        class="font-mono text-[10px] font-bold uppercase tracking-widest text-neutral-600">
                        Location
                    </span>

                    <span class="h-2.5 w-2.5 rounded-full bg-brand-500"></span>

                </div>

                <div class="flex items-baseline gap-2 py-5">

                    <span
                        class="font-display text-4xl font-extrabold tracking-tight text-brand-500">
                        01
                    </span>

                    <span
                        class="font-mono text-[10px] font-bold uppercase tracking-wide text-secondary-600">
                        Sydney Campus
                    </span>

                </div>

                <p class="text-sm leading-6 text-neutral-600">
                    High-spec workshops, clinical simulation suites and a transport-connected campus.
                </p>

            </div>


            {{-- Industry --}}
            <div
                class="flex flex-col justify-between rounded-2xl border border-neutral-200 bg-neutral-25 p-6 transition-all duration-300 ease-out hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg">

                <div
                    class="flex items-center justify-between border-b border-neutral-200 pb-3">

                    <span
                        class="font-mono text-[10px] font-bold uppercase tracking-widest text-neutral-600">
                        Industry Sectors
                    </span>

                    <span class="h-2.5 w-2.5 rounded-full bg-brand-500"></span>

                </div>

                <div class="flex items-baseline gap-2 py-5">

                    <span
                        class="font-display text-4xl font-extrabold tracking-tight text-brand-500">
                        03
                    </span>

                    <span
                        class="font-mono text-[10px] font-bold uppercase tracking-wide text-secondary-600">
                        High-Demand Hubs
                    </span>

                </div>

                <p class="text-sm leading-6 text-neutral-600">
                    Carpentry & Building, Aged & Community Care, Leadership & Operations.
                </p>

            </div>


            {{-- Visa --}}
            <div
                class="flex flex-col justify-between rounded-2xl border border-neutral-200 bg-neutral-25 p-6 transition-all duration-300 ease-out hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg">

                <div
                    class="flex items-center justify-between border-b border-neutral-200 pb-3">

                    <span
                        class="font-mono text-[10px] font-bold uppercase tracking-widest text-neutral-600">
                        Visa Status
                    </span>

                    <span class="h-2.5 w-2.5 rounded-full bg-brand-500"></span>

                </div>

                <div class="flex items-baseline gap-2 py-5">

                    <span
                        class="font-display text-4xl font-extrabold tracking-tight text-brand-500">
                        100%
                    </span>

                    <span
                        class="font-mono text-[10px] font-bold uppercase tracking-wide text-secondary-600">
                        CRICOS Student Visa
                    </span>

                </div>

                <p class="text-sm leading-6 text-neutral-600">
                    International study confirmation of enrolment (CoE) issuance support.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- ================================================================
    MARQUEE
================================================================ --}}
@include('frontend.pages.home.section.marquee')


{{-- ================================================================
    ACADEMIC DISCIPLINES
================================================================ --}}
<section class="mt-8 bg-brand-100 py-14 md:mt-12 md:py-18 lg:mt-16 lg:py-24">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div
            class="mb-8 flex flex-col justify-between gap-5 border-b border-brand-200 pb-5 md:flex-row md:items-end">

            <div>

                <span
                    class="font-mono text-[10px] font-bold uppercase tracking-[0.18em] text-secondary-600">
                    01 Academic Disciplines
                </span>

                <h2
                    class="mt-2 max-w-3xl text-xl font-extrabold uppercase leading-tight tracking-tight text-neutral-950 md:text-2xl lg:text-3xl">
                    A course for the career you imagine
                </h2>

            </div>


            <a
                href="#prospectus"
                class="inline-flex items-center gap-1.5 self-start font-mono text-xs font-bold uppercase tracking-wide text-brand-600 underline decoration-brand-300 underline-offset-4 transition-colors duration-300 hover:text-secondary-600 hover:decoration-secondary-400 md:self-auto">

                All Disciplines

                <span class="material-symbols-outlined text-sm">
                    north_east
                </span>

            </a>

        </div>


        <div class="grid grid-cols-1 gap-6 md:grid-cols-3 md:gap-8">


            {{-- ====================================================
                DISCIPLINE 1
            ===================================================== --}}
            <div
                class="group flex flex-col overflow-hidden rounded-2xl border border-neutral-200 bg-neutral-25 shadow-theme-xs transition-all duration-300 ease-out hover:-translate-y-1 hover:shadow-theme-lg">

                <div
                    class="relative h-56 overflow-hidden border-b border-neutral-200 bg-neutral-100">

                    <img
                        src="https://lh3.googleusercontent.com/aida/AEtjO1V0vV_ZMek-smAsbHdRbBvWINOY7efDz99v-VEFNVUOXmRprtfpwh3-hKszhN0JSiZaBubRE1GBLmMP4bQa_sOkAr4Ysa0UNA6eyQAuUQ33-Z28F2uBo8_32udZ_-RsyVmewqr-Vq1yvfAu36SObl4Xc9krN00C_63eu55QrjeY3TQrh6MZdWaEqjXdTnd2_UMp1gI5re_iokW0EVMjI8ALFSmkgHXicAFVkgVO9wKSvXWctMHZGYX3BYVw"
                        alt="Australian carpenter apprentice framing timber"
                        class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />

                    <div
                        class="absolute left-3 top-3 rounded-md bg-brand-500 px-2.5 py-1 font-mono text-[10px] font-bold uppercase tracking-wide text-neutral-25">
                        Trade & Structural
                    </div>

                    <div
                        class="absolute bottom-3 right-3 rounded-md border border-neutral-200 bg-neutral-25 px-2 py-1 font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-800">
                        2 Qualifications
                    </div>

                </div>


                <div class="flex flex-1 flex-col justify-between gap-6 p-6">

                    <div class="flex flex-col gap-3">

                        <h3
                            class="font-display text-xl font-bold uppercase leading-tight tracking-tight text-brand-500">
                            Carpentry & Construction
                        </h3>

                        <p class="text-sm leading-6 text-neutral-600">
                            Comprehensive practical trade qualifications. Train in structural framing, formwork,
                            scaffolding and residential project regulations in our Parramatta warehouse hub.
                        </p>

                    </div>


                    <div
                        class="flex items-center justify-between border-t border-neutral-200 pt-5">

                        <div>

                            <span
                                class="block font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                                Duration
                            </span>

                            <span class="font-mono text-xs font-bold text-neutral-900">
                                1–2 Years
                            </span>

                        </div>


                        <a
                            href="#courses"
                            class="inline-flex items-center gap-1.5 rounded-lg bg-brand-500 px-3.5 py-2 font-mono text-[10px] font-bold uppercase tracking-wide text-neutral-25 transition-all duration-300 hover:bg-brand-600 hover:shadow-theme-sm">

                            Explore Trade

                            <span class="material-symbols-outlined text-sm">
                                arrow_forward
                            </span>

                        </a>

                    </div>

                </div>

            </div>


            {{-- ====================================================
                DISCIPLINE 2
            ===================================================== --}}
            <div
                class="group flex flex-col overflow-hidden rounded-2xl border border-neutral-200 bg-neutral-25 shadow-theme-xs transition-all duration-300 ease-out hover:-translate-y-1 hover:shadow-theme-lg">

                <div
                    class="relative h-56 overflow-hidden border-b border-neutral-200 bg-neutral-100">

                    <img
                        src="https://lh3.googleusercontent.com/aida/AEtjO1W27I1jDT4KCmT5NjIL63WLmq0u_qt3wOZixtj2IMBfDbJ9_NFvGJ8ygItJXj_mqK0VSpDFtHR6o_3BC51BfQaPN3z07ZTc56iDxkrFS-WMJRP3mbeAXW55OeRPKnNvXLHNsUYksgfn2siOH9Gvo_du2l8myEbKGHMpZByePM79CXXtvx0S_dnzCxW0K4mOXYdJt-jZ2MWMGMSEKx9Mtc3iaJApqe-t0yw4AhkIkQQjLhXp98VKurQhHKI"
                        alt="Healthcare aged care nursing student with resident"
                        class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />

                    <div
                        class="absolute left-3 top-3 rounded-md bg-brand-500 px-2.5 py-1 font-mono text-[10px] font-bold uppercase tracking-wide text-neutral-25">
                        Care & Community
                    </div>

                    <div
                        class="absolute bottom-3 right-3 rounded-md border border-neutral-200 bg-neutral-25 px-2 py-1 font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-800">
                        2 Qualifications
                    </div>

                </div>


                <div class="flex flex-1 flex-col justify-between gap-6 p-6">

                    <div class="flex flex-col gap-3">

                        <h3
                            class="font-display text-xl font-bold uppercase leading-tight tracking-tight text-brand-500">
                            Health & Aged Care
                        </h3>

                        <p class="text-sm leading-6 text-neutral-600">
                            Prepare for roles in Australia's growing care sector through simulated patient care
                            environments and 120+ mandatory hours in accredited NSW aged care facilities.
                        </p>

                    </div>


                    <div
                        class="flex items-center justify-between border-t border-neutral-200 pt-5">

                        <div>

                            <span
                                class="block font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                                Duration
                            </span>

                            <span class="font-mono text-xs font-bold text-neutral-900">
                                52–104 Weeks
                            </span>

                        </div>


                        <a
                            href="#courses"
                            class="inline-flex items-center gap-1.5 rounded-lg bg-brand-500 px-3.5 py-2 font-mono text-[10px] font-bold uppercase tracking-wide text-neutral-25 transition-all duration-300 hover:bg-brand-600 hover:shadow-theme-sm">

                            Explore Health

                            <span class="material-symbols-outlined text-sm">
                                arrow_forward
                            </span>

                        </a>

                    </div>

                </div>

            </div>


            {{-- ====================================================
                DISCIPLINE 3
            ===================================================== --}}
            <div
                class="group flex flex-col overflow-hidden rounded-2xl border border-neutral-200 bg-neutral-25 shadow-theme-xs transition-all duration-300 ease-out hover:-translate-y-1 hover:shadow-theme-lg">

                <div
                    class="relative h-56 overflow-hidden bg-brand-500 p-5">

                    <div class="flex items-center justify-between">

                        <span
                            class="rounded-md bg-secondary-300 px-2.5 py-1 font-mono text-[10px] font-bold uppercase tracking-wide text-brand-950">
                            Enterprise & Ops
                        </span>

                        <span
                            class="material-symbols-outlined text-3xl text-neutral-25">
                            analytics
                        </span>

                    </div>


                    <div
                        class="absolute inset-x-5 bottom-5 rounded-lg bg-neutral-25 p-3">

                        <div
                            class="flex items-center justify-between border-b border-neutral-200 pb-2 font-mono text-[9px] text-neutral-600">

                            <span>PROJECT_STAGE</span>

                            <span class="font-bold text-secondary-600">
                                100% KPI
                            </span>

                        </div>


                        <div class="flex gap-1.5 pt-3">

                            <div class="h-2 flex-1 rounded-sm bg-brand-500"></div>
                            <div class="h-2 flex-1 rounded-sm bg-brand-500"></div>
                            <div class="h-2 flex-1 rounded-sm bg-brand-500"></div>
                            <div class="h-2 flex-1 rounded-sm bg-neutral-200"></div>

                        </div>

                    </div>

                </div>


                <div class="flex flex-1 flex-col justify-between gap-6 p-6">

                    <div class="flex flex-col gap-3">

                        <h3
                            class="font-display text-xl font-bold uppercase leading-tight tracking-tight text-brand-500">
                            Business & Leadership
                        </h3>

                        <p class="text-sm leading-6 text-neutral-600">
                            Develop enterprise management, operational finance and project workflow skills for
                            modern business environments and multidisciplinary teams in NSW.
                        </p>

                    </div>


                    <div
                        class="flex items-center justify-between border-t border-neutral-200 pt-5">

                        <div>

                            <span
                                class="block font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                                Duration
                            </span>

                            <span class="font-mono text-xs font-bold text-neutral-900">
                                52 Weeks
                            </span>

                        </div>


                        <a
                            href="#courses"
                            class="inline-flex items-center gap-1.5 rounded-lg bg-brand-500 px-3.5 py-2 font-mono text-[10px] font-bold uppercase tracking-wide text-neutral-25 transition-all duration-300 hover:bg-brand-600 hover:shadow-theme-sm">

                            Explore Business

                            <span class="material-symbols-outlined text-sm">
                                arrow_forward
                            </span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================================================================
    MOST-ENROLLED QUALIFICATIONS
================================================================ --}}
<section
    id="courses"
    class="w-full bg-neutral-50 py-14 md:py-18 lg:py-24">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div
            class="mb-8 flex flex-col justify-between gap-5 border-b border-neutral-200 pb-5 md:flex-row md:items-end">

            <div>

                <span
                    class="font-mono text-[10px] font-bold uppercase tracking-[0.18em] text-secondary-600">
                    02 Intake Selection 2025
                </span>

                <h2
                    class="mt-2 text-xl font-extrabold uppercase leading-tight tracking-tight text-neutral-950 md:text-2xl lg:text-3xl">
                    Most-Enrolled Qualifications
                </h2>

                <p class="mt-2 max-w-2xl text-sm leading-6 text-neutral-600">
                    Direct pathway qualifications aligning with current New South Wales skills shortage priority lists.
                </p>

            </div>


            <div class="flex flex-wrap items-center gap-2">

                <span
                    class="rounded-lg border border-neutral-200 bg-neutral-25 px-3 py-1.5 font-mono text-[10px] font-bold uppercase tracking-wide text-neutral-700">
                    Term 2: May 2025
                </span>

                <span
                    class="rounded-lg bg-brand-500 px-3 py-1.5 font-mono text-[10px] font-bold uppercase tracking-wide text-neutral-25">
                    Term 3: Jul 2025
                </span>

            </div>

        </div>


        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 md:gap-6">


            {{-- ====================================================
                COURSE 1
            ===================================================== --}}
            <div
                class="flex flex-col justify-between gap-5 rounded-2xl border border-neutral-200 bg-neutral-25 p-6 transition-all duration-300 ease-out hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg">

                <div class="flex flex-col gap-4">

                    <div class="flex flex-wrap items-center justify-between gap-2">

                        <span
                            class="font-mono text-[10px] font-bold uppercase tracking-wider text-secondary-600">
                            National Code: CPC30220
                        </span>

                        <span
                            class="rounded-md bg-success-50 px-2.5 py-1 font-mono text-[9px] font-bold uppercase tracking-wide text-success-700">
                            Work Placement Included
                        </span>

                    </div>


                    <h4
                        class="font-display text-xl font-bold uppercase leading-tight tracking-tight text-brand-500">
                        Certificate III in Carpentry
                    </h4>


                    <p class="text-sm leading-6 text-neutral-600">
                        Master timber framing, roof truss installation, formwork, wall cladding and interior
                        finishing using industry-standard equipment under certified NSW tradespeople.
                    </p>


                    <div
                        class="grid grid-cols-3 gap-3 rounded-xl border-y border-neutral-200 bg-neutral-50 px-4 py-4">

                        <div>

                            <span
                                class="block font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                                Duration
                            </span>

                            <span class="font-mono text-xs font-bold text-neutral-900">
                                104 Weeks
                            </span>

                        </div>


                        <div>

                            <span
                                class="block font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                                Location
                            </span>

                            <span class="font-mono text-xs font-bold text-neutral-900">
                                Sydney Campus
                            </span>

                        </div>


                        <div>

                            <span
                                class="block font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                                Tuition Schedule
                            </span>

                            <span class="font-mono text-xs font-bold text-neutral-900">
                                Quarterly
                            </span>

                        </div>

                    </div>

                </div>


                <div
                    class="flex flex-col gap-3 border-t border-neutral-200 pt-4 sm:flex-row sm:items-center sm:justify-between">

                    <span class="font-mono text-[10px] text-neutral-500">
                        CRICOS CODE: 108342M
                    </span>

                    <button
                        type="button"
                        class="inline-flex min-h-10 items-center justify-center gap-1.5 rounded-lg bg-brand-500 px-4 py-2 font-mono text-[10px] font-bold uppercase tracking-wide text-neutral-25 transition-all duration-300 hover:bg-brand-600 hover:shadow-theme-sm focus:outline-none focus:ring-4 focus:ring-brand-500/20">

                        Course Details

                        <span class="material-symbols-outlined text-sm">
                            chevron_right
                        </span>

                    </button>

                </div>

            </div>


            {{-- ====================================================
                COURSE 2
            ===================================================== --}}
            <div
                class="flex flex-col justify-between gap-5 rounded-2xl border border-neutral-200 bg-neutral-25 p-6 transition-all duration-300 ease-out hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg">

                <div class="flex flex-col gap-4">

                    <div class="flex flex-wrap items-center justify-between gap-2">

                        <span
                            class="font-mono text-[10px] font-bold uppercase tracking-wider text-secondary-600">
                            National Code: CPC50220
                        </span>

                        <span
                            class="rounded-md bg-warning-50 px-2.5 py-1 font-mono text-[9px] font-bold uppercase tracking-wide text-warning-700">
                            Contractor Pathway
                        </span>

                    </div>


                    <h4
                        class="font-display text-xl font-bold uppercase leading-tight tracking-tight text-brand-500">
                        Diploma of Building & Construction
                    </h4>


                    <p class="text-sm leading-6 text-neutral-600">
                        Develop site supervision, cost estimation, structural compliance, building code inspection
                        and contractor management expertise for mid-rise residential projects.
                    </p>


                    <div
                        class="grid grid-cols-3 gap-3 rounded-xl border-y border-neutral-200 bg-neutral-50 px-4 py-4">

                        <div>

                            <span
                                class="block font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                                Duration
                            </span>

                            <span class="font-mono text-xs font-bold text-neutral-900">
                                52 Weeks
                            </span>

                        </div>


                        <div>

                            <span
                                class="block font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                                Prerequisites
                            </span>

                            <span class="font-mono text-xs font-bold text-neutral-900">
                                Year 12 / Eq.
                            </span>

                        </div>


                        <div>

                            <span
                                class="block font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                                Career
                            </span>

                            <span class="font-mono text-xs font-bold text-neutral-900">
                                Site Manager
                            </span>

                        </div>

                    </div>

                </div>


                <div
                    class="flex flex-col gap-3 border-t border-neutral-200 pt-4 sm:flex-row sm:items-center sm:justify-between">

                    <span class="font-mono text-[10px] text-neutral-500">
                        CRICOS CODE: 108343K
                    </span>

                    <button
                        type="button"
                        class="inline-flex min-h-10 items-center justify-center gap-1.5 rounded-lg bg-brand-500 px-4 py-2 font-mono text-[10px] font-bold uppercase tracking-wide text-neutral-25 transition-all duration-300 hover:bg-brand-600 hover:shadow-theme-sm focus:outline-none focus:ring-4 focus:ring-brand-500/20">

                        Course Details

                        <span class="material-symbols-outlined text-sm">
                            chevron_right
                        </span>

                    </button>

                </div>

            </div>


            {{-- ====================================================
                COURSE 3
            ===================================================== --}}
            <div
                class="flex flex-col justify-between gap-5 rounded-2xl border border-neutral-200 bg-neutral-25 p-6 transition-all duration-300 ease-out hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg">

                <div class="flex flex-col gap-4">

                    <div class="flex flex-wrap items-center justify-between gap-2">

                        <span
                            class="font-mono text-[10px] font-bold uppercase tracking-wider text-secondary-600">
                            National Code: CHC43015
                        </span>

                        <span
                            class="rounded-md bg-success-50 px-2.5 py-1 font-mono text-[9px] font-bold uppercase tracking-wide text-success-700">
                            120 Hrs Placement
                        </span>

                    </div>


                    <h4
                        class="font-display text-xl font-bold uppercase leading-tight tracking-tight text-brand-500">
                        Certificate IV in Ageing Support
                    </h4>


                    <p class="text-sm leading-6 text-neutral-600">
                        Prepare for specialised frontline roles in residential care, individualised support and
                        dementia management, including 120 hours of practical clinical placement.
                    </p>


                    <div
                        class="grid grid-cols-3 gap-3 rounded-xl border-y border-neutral-200 bg-neutral-50 px-4 py-4">

                        <div>

                            <span
                                class="block font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                                Duration
                            </span>

                            <span class="font-mono text-xs font-bold text-neutral-900">
                                52 Weeks
                            </span>

                        </div>


                        <div>

                            <span
                                class="block font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                                Practicum
                            </span>

                            <span class="font-mono text-xs font-bold text-neutral-900">
                                120 Hours
                            </span>

                        </div>


                        <div>

                            <span
                                class="block font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                                Demand
                            </span>

                            <span class="font-mono text-xs font-bold text-secondary-600">
                                Very High
                            </span>

                        </div>

                    </div>

                </div>


                <div
                    class="flex flex-col gap-3 border-t border-neutral-200 pt-4 sm:flex-row sm:items-center sm:justify-between">

                    <span class="font-mono text-[10px] text-neutral-500">
                        CRICOS CODE: 104556C
                    </span>

                    <button
                        type="button"
                        class="inline-flex min-h-10 items-center justify-center gap-1.5 rounded-lg bg-brand-500 px-4 py-2 font-mono text-[10px] font-bold uppercase tracking-wide text-neutral-25 transition-all duration-300 hover:bg-brand-600 hover:shadow-theme-sm focus:outline-none focus:ring-4 focus:ring-brand-500/20">

                        Course Details

                        <span class="material-symbols-outlined text-sm">
                            chevron_right
                        </span>

                    </button>

                </div>

            </div>


            {{-- ====================================================
                COURSE 4
            ===================================================== --}}
            <div
                class="flex flex-col justify-between gap-5 rounded-2xl border border-neutral-200 bg-neutral-25 p-6 transition-all duration-300 ease-out hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg">

                <div class="flex flex-col gap-4">

                    <div class="flex flex-wrap items-center justify-between gap-2">

                        <span
                            class="font-mono text-[10px] font-bold uppercase tracking-wider text-secondary-600">
                            National Code: CHC53315
                        </span>

                        <span
                            class="rounded-md bg-secondary-50 px-2.5 py-1 font-mono text-[9px] font-bold uppercase tracking-wide text-secondary-700">
                            Clinical Simulation
                        </span>

                    </div>


                    <h4
                        class="font-display text-xl font-bold uppercase leading-tight tracking-tight text-brand-500">
                        Diploma of Mental Health
                    </h4>


                    <p class="text-sm leading-6 text-neutral-600">
                        Develop recovery-oriented skills, non-clinical interventions, case assessment protocols
                        and crisis-response support skills within multi-agency health frameworks.
                    </p>


                    <div
                        class="grid grid-cols-3 gap-3 rounded-xl border-y border-neutral-200 bg-neutral-50 px-4 py-4">

                        <div>

                            <span
                                class="block font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                                Duration
                            </span>

                            <span class="font-mono text-xs font-bold text-neutral-900">
                                78 Weeks
                            </span>

                        </div>


                        <div>

                            <span
                                class="block font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                                Assessment
                            </span>

                            <span class="font-mono text-xs font-bold text-neutral-900">
                                Portfolio + Lab
                            </span>

                        </div>


                        <div>

                            <span
                                class="block font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                                Delivery
                            </span>

                            <span class="font-mono text-xs font-bold text-neutral-900">
                                Face-to-Face
                            </span>

                        </div>

                    </div>

                </div>


                <div
                    class="flex flex-col gap-3 border-t border-neutral-200 pt-4 sm:flex-row sm:items-center sm:justify-between">

                    <span class="font-mono text-[10px] text-neutral-500">
                        CRICOS CODE: 104557B
                    </span>

                    <button
                        type="button"
                        class="inline-flex min-h-10 items-center justify-center gap-1.5 rounded-lg bg-brand-500 px-4 py-2 font-mono text-[10px] font-bold uppercase tracking-wide text-neutral-25 transition-all duration-300 hover:bg-brand-600 hover:shadow-theme-sm focus:outline-none focus:ring-4 focus:ring-brand-500/20">

                        Course Details

                        <span class="material-symbols-outlined text-sm">
                            chevron_right
                        </span>

                    </button>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================================================================
    PROSPECTUS / LEAD CAPTURE
================================================================ --}}
<section
    id="prospectus"
    class="mx-auto w-full max-w-7xl px-4 py-14 sm:px-6 md:py-18 lg:px-8 lg:py-24">

    <div
        class="grid grid-cols-1 overflow-hidden rounded-2xl border border-neutral-200 bg-neutral-25 shadow-theme-lg lg:grid-cols-12">


        {{-- ====================================================
            LEFT CONTENT
        ===================================================== --}}
        <div
            class="flex flex-col justify-between gap-8 bg-brand-50 p-6 md:p-10 lg:col-span-7">

            <div class="flex flex-col gap-5">

                <div class="flex flex-wrap items-center gap-2">

                    <span
                        class="font-mono text-[10px] font-bold uppercase tracking-widest text-secondary-600">
                        Documentation & Intakes
                    </span>

                    <span class="text-neutral-400">/</span>

                    <span
                        class="font-mono text-[10px] font-bold uppercase tracking-widest text-neutral-700">
                        2025 Calendar
                    </span>

                </div>


                <h3
                    class="max-w-2xl font-extrabold uppercase leading-tight tracking-tight text-brand-500 text-xl  md:text-2xl lg:text-3xl">
                    Download the Official 2025 Course Booklet & Fee Schedule
                </h3>


                <p
                    class="max-w-2xl text-sm leading-6 text-neutral-600 md:text-base md:leading-7">
                    Receive the official institutional prospectus detailing competency unit descriptions,
                    articulation pathways, tuition breakdowns and Department of Home Affairs student visa
                    requirements.
                </p>


                <div class="flex flex-col gap-4 pt-1">

                    <div class="flex items-start gap-3">

                        <span
                            class="material-symbols-outlined mt-0.5 text-xl font-bold text-secondary-500">
                            check_circle
                        </span>

                        <span class="text-sm leading-6 text-neutral-800">
                            <strong class="font-semibold">
                                Transparent Fee Schedules:
                            </strong>
                            Material costs, uniform fees and flexible quarterly instalment timetables.
                        </span>

                    </div>


                    <div class="flex items-start gap-3">

                        <span
                            class="material-symbols-outlined mt-0.5 text-xl font-bold text-secondary-500">
                            check_circle
                        </span>

                        <span class="text-sm leading-6 text-neutral-800">
                            <strong class="font-semibold">
                                CRICOS & ESOS Standards:
                            </strong>
                            Mandatory hours, attendance compliance tracking and English proficiency thresholds.
                        </span>

                    </div>


                    <div class="flex items-start gap-3">

                        <span
                            class="material-symbols-outlined mt-0.5 text-xl font-bold text-secondary-500">
                            check_circle
                        </span>

                        <span class="text-sm leading-6 text-neutral-800">
                            <strong class="font-semibold">
                                Work Placement Agreements:
                            </strong>
                            Approved employer networks in Western Sydney and regional NSW.
                        </span>

                    </div>

                </div>

            </div>


            <div
                class="flex flex-wrap items-center gap-x-3 gap-y-2 border-t border-brand-200 pt-5 font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-600">

                <div class="flex items-center gap-1.5">

                    <span class="material-symbols-outlined text-base">
                        picture_as_pdf
                    </span>

                    <span>
                        PDF (3.8 MB)
                    </span>

                </div>

                <span class="text-neutral-400">•</span>

                <span>
                    Updated: January 2025
                </span>

                <span class="text-neutral-400">•</span>

                <span>
                    Verified ASQA VET
                </span>

            </div>

        </div>


        {{-- ====================================================
            RIGHT FORM
        ===================================================== --}}
        <div
            class="flex flex-col justify-center bg-neutral-25 p-6 md:p-10 lg:col-span-5">

            <form
                class="flex flex-col gap-5"
                onsubmit="event.preventDefault(); alert('Course prospectus PDF has been dispatched to your email address.');">


                {{-- Form heading --}}
                <div class="border-b border-neutral-200 pb-4">

                    <span
                        class="font-display text-lg font-bold uppercase tracking-tight text-brand-500">
                        Instant Access
                    </span>

                    <p
                        class="mt-1 font-mono text-[9px] font-bold uppercase tracking-wide text-neutral-500">
                        Direct dispatch to your primary inbox
                    </p>

                </div>


                {{-- Name --}}
                <div class="flex flex-col gap-2">

                    <label
                        for="full-name"
                        class="font-mono text-[10px] font-bold uppercase tracking-wide text-neutral-800">
                        Full Legal Name *
                    </label>

                    <input
                        id="full-name"
                        type="text"
                        required
                        placeholder="e.g. Alex Henderson"
                        class="h-11 w-full rounded-lg border border-neutral-300 bg-neutral-25 px-4 py-2.5 font-mono text-sm text-neutral-900 placeholder:text-neutral-400 transition-all duration-200 focus:border-brand-400 focus:bg-neutral-25 focus:outline-none focus:ring-4 focus:ring-brand-500/10" />

                </div>


                {{-- Email --}}
                <div class="flex flex-col gap-2">

                    <label
                        for="email"
                        class="font-mono text-[10px] font-bold uppercase tracking-wide text-neutral-800">
                        Email Address *
                    </label>

                    <input
                        id="email"
                        type="email"
                        required
                        placeholder="name@example.com"
                        class="h-11 w-full rounded-lg border border-neutral-300 bg-neutral-25 px-4 py-2.5 font-mono text-sm text-neutral-900 placeholder:text-neutral-400 transition-all duration-200 focus:border-brand-400 focus:bg-neutral-25 focus:outline-none focus:ring-4 focus:ring-brand-500/10" />

                </div>


                {{-- Interest --}}
                <div class="flex flex-col gap-2">

                    <label
                        for="area-interest"
                        class="font-mono text-[10px] font-bold uppercase tracking-wide text-neutral-800">
                        Area of Interest *
                    </label>

                    <select
                        id="area-interest"
                        required
                        class="h-11 w-full rounded-lg border border-neutral-300 bg-neutral-25 px-4 py-2.5 font-mono text-sm text-neutral-900 transition-all duration-200 focus:border-brand-400 focus:bg-neutral-25 focus:outline-none focus:ring-4 focus:ring-brand-500/10">

                        <option value="">
                            Select study stream...
                        </option>

                        <option value="trade">
                            Trade: Carpentry & Building Construction
                        </option>

                        <option value="health">
                            Health: Aged Care & Mental Health Support
                        </option>

                        <option value="business">
                            Business: Leadership & Operational Management
                        </option>

                        <option value="all">
                            Full Comprehensive Multi-Discipline Guide
                        </option>

                    </select>

                </div>


                {{-- Visa checkbox --}}
                <div class="flex items-start gap-2.5 pt-1">

                    <input
                        id="student-visa"
                        type="checkbox"
                        class="mt-0.5 h-4 w-4 rounded border-neutral-300 accent-brand-500" />

                    <label
                        for="student-visa"
                        class="cursor-pointer select-none text-xs leading-5 text-neutral-600">

                        I require Australian Subclass 500 Student Visa guidance.

                    </label>

                </div>


                {{-- Submit --}}
                <button
                    type="submit"
                    class="mt-1 inline-flex min-h-12 w-full items-center justify-center rounded-lg bg-brand-500 px-4 py-3 font-mono text-xs font-bold uppercase tracking-wide text-neutral-25 transition-all duration-300 hover:bg-brand-600 hover:shadow-theme-lg focus:outline-none focus:ring-4 focus:ring-brand-500/20">

                    Download Course Booklet (PDF)

                    <span class="ml-1">
                        →
                    </span>

                </button>

            </form>

        </div>

    </div>

</section>


{{-- ================================================================
    ADMISSIONS CTA
================================================================ --}}
<section
    id="consultation"
    class="w-full border-y border-brand-700 bg-brand-800 py-14 text-neutral-25 md:py-18 lg:py-20">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div
            class="flex flex-col items-center justify-between gap-8 lg:flex-row">


            {{-- CTA content --}}
            <div
                class="flex max-w-3xl flex-col gap-3 text-center lg:text-left">

                <div
                    class="flex items-center justify-center gap-2 lg:justify-start">

                    <span class="relative flex h-2.5 w-2.5">

                        <span
                            class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary-400 opacity-75">
                        </span>

                        <span
                            class="relative inline-flex h-2.5 w-2.5 rounded-full bg-secondary-300">
                        </span>

                    </span>


                    <span
                        class="font-mono text-[10px] font-bold uppercase tracking-widest text-secondary-300">
                        Admissions Advisors On Call
                    </span>

                </div>


                <h3
                    class="font-display text-3xl font-extrabold uppercase leading-tight tracking-tight text-neutral-25 md:text-4xl lg:text-5xl">
                    Have Questions About Enrolment?
                </h3>


                <p
                    class="max-w-2xl text-sm leading-6 text-brand-100 md:text-base md:leading-7">
                    Speak directly with an accredited course counsellor about entry criteria, RPL
                    (Recognition of Prior Learning) and campus workshop walkthroughs.
                </p>

            </div>


            {{-- CTA actions --}}
            <div
                class="flex w-full shrink-0 flex-col items-stretch gap-3 sm:w-auto sm:flex-row sm:items-center">


                {{-- Phone --}}
                <div
                    class="rounded-xl border border-brand-500 bg-brand-900 px-5 py-3 text-center">

                    <span
                        class="block font-mono text-[9px] font-bold uppercase tracking-widest text-brand-200">
                        Direct Sydney Line
                    </span>

                    <span
                        class="mt-1 block font-display text-xl font-extrabold tracking-wide text-neutral-25">
                        +61 2 8677 3600
                    </span>

                </div>


                {{-- Campus tour --}}
                <a
                    href="#prospectus"
                    class="inline-flex min-h-12 items-center justify-center rounded-xl bg-secondary-300 px-6 py-3 font-mono text-xs font-extrabold uppercase tracking-wide text-brand-950 transition-all duration-300 hover:-translate-y-0.5 hover:bg-secondary-200 hover:shadow-theme-lg focus:outline-none focus:ring-4 focus:ring-secondary-300/30">

                    Book Free Campus Tour

                </a>

            </div>

        </div>

    </div>

</section>
@endsection
