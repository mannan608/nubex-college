@extends('frontend.layouts.app')

@section('content')
    <section class="relative overflow-hidden bg-brand-25">
        {{-- Existing mesh background utility --}}
        <div class="absolute inset-0 mesh-background"></div>

        <div class="relative mx-auto w-full max-w-7xl px-4 py-10 sm:px-6 md:py-12 lg:px-8 lg:py-16">
            <!-- Course Title -->
            <div class="max-w-4xl animate-hero-left">

                <span
                    class="mb-3 inline-block font-mono text-[10px] font-semibold uppercase tracking-[0.16em] text-secondary-600">
                    About UTI
                </span>

                <h1
                    class="mb-5 font-heading text-4xl font-bold leading-[1.05] tracking-tight text-neutral-950 sm:text-5xl lg:text-6xl">
                    About Nubex College
                </h1>

                <p class="max-w-2xl text-sm leading-7 text-neutral-600 sm:text-base">
                    Nubex College (UTI) is a CRICOS-registered RTO delivering nationally recognised
                    qualifications across trade, health and business.
                </p>

            </div>
        </div>
    </section>

    <!-- OUR MISSION ,Vision AND VALUES -->
    <section class="relative overflow-hidden bg-white py-12 sm:py-16 lg:py-20">
        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            {{-- Section Heading --}}
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-14 reveal">
                <div
                    class="mb-4 inline-flex items-center gap-2 rounded-full border border-brand-200 bg-white px-3.5 py-1.5 text-xs font-semibold uppercase tracking-widest text-brand-600 shadow-sm">
                    <span class="h-1.5 w-1.5 rounded-full bg-brand-500"></span>
                    Our Mission & Vision
                </div>

                <h2 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                    What We Stand For
                </h2>

                <p class="mx-auto mt-4 max-w-xl text-sm leading-7 text-slate-500 sm:text-base">
                    Everything we do is guided by a clear purpose, a shared vision,
                    and values that put our learners first.
                </p>

            </div>

            {{-- Foundation Cards --}}
            <div class="grid grid-cols-1 gap-5 md:grid-cols-3 lg:gap-6 stagger">
                {{-- Mission --}}
                <article
                    class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-xl sm:p-8 reveal-scale">

                    {{-- Background Glow --}}
                    <div
                        class="pointer-events-none absolute -right-16 -top-16 h-40 w-40 rounded-full bg-brand-50 opacity-0 blur-3xl transition-opacity duration-300 group-hover:opacity-100">
                    </div>

                    <div class="relative">

                        {{-- Card Header --}}
                        <div class="flex items-start justify-between">

                            <div
                                class="flex h-14 w-14 items-center justify-center rounded-2xl bg-brand-50 text-brand-600 ring-1 ring-brand-100 transition-all duration-300 group-hover:scale-105 group-hover:bg-brand-600 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"
                                    class="h-7 w-7">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>
                            </div>

                            <span
                                class="font-mono text-4xl font-black text-slate-100 transition-colors duration-300 group-hover:text-brand-50">
                                01
                            </span>

                        </div>

                        {{-- Content --}}
                        <div class="mt-8">

                            <p class="text-xs font-bold uppercase tracking-widest text-brand-600">
                                Our Purpose
                            </p>

                            <h3 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                                Mission
                            </h3>

                            <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                                Equip every student with practical skills,
                                confidence and pathways into meaningful Australian work.
                            </p>

                        </div>


                        {{-- Bottom Line --}}
                        <div class="mt-8 flex items-center gap-2 text-xs font-semibold text-slate-400">
                            <span
                                class="h-px w-8 bg-brand-200 transition-all duration-300 group-hover:w-12 group-hover:bg-brand-500"></span>
                            Purpose driven
                        </div>

                    </div>
                </article>


                {{-- Vision --}}
                <article
                    class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-sky-200 hover:shadow-xl sm:p-8 reveal-scale">
                    {{-- Background Glow --}}
                    <div
                        class="pointer-events-none absolute -right-16 -top-16 h-40 w-40 rounded-full bg-sky-50 opacity-0 blur-3xl transition-opacity duration-300 group-hover:opacity-100">
                    </div>

                    <div class="relative">

                        {{-- Card Header --}}
                        <div class="flex items-start justify-between">

                            <div
                                class="flex h-14 w-14 items-center justify-center rounded-2xl bg-sky-50 text-sky-600 ring-1 ring-sky-100 transition-all duration-300 group-hover:scale-105 group-hover:bg-sky-600 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"
                                    class="h-7 w-7">
                                    <path
                                        d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                    </path>
                                    <path d="M20 2v4"></path>
                                    <path d="M22 4h-4"></path>
                                    <circle cx="4" cy="20" r="2"></circle>
                                </svg>
                            </div>

                            <span
                                class="font-mono text-4xl font-black text-slate-100 transition-colors duration-300 group-hover:text-sky-50">
                                02
                            </span>

                        </div>

                        {{-- Content --}}
                        <div class="mt-8">

                            <p class="text-xs font-bold uppercase tracking-widest text-sky-600">
                                Where We're Going
                            </p>

                            <h3 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                                Vision
                            </h3>

                            <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                                Be the most trusted vocational institute for
                                international and domestic learners across Australia.
                            </p>

                        </div>


                        {{-- Bottom Line --}}
                        <div class="mt-8 flex items-center gap-2 text-xs font-semibold text-slate-400">
                            <span
                                class="h-px w-8 bg-sky-200 transition-all duration-300 group-hover:w-12 group-hover:bg-sky-500"></span>
                            Future focused
                        </div>

                    </div>
                </article>


                {{-- Values --}}
                <article
                    class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-200 hover:shadow-xl sm:p-8 reveal-scale">
                    {{-- Background Glow --}}
                    <div
                        class="pointer-events-none absolute -right-16 -top-16 h-40 w-40 rounded-full bg-emerald-50 opacity-0 blur-3xl transition-opacity duration-300 group-hover:opacity-100">
                    </div>

                    <div class="relative">

                        {{-- Card Header --}}
                        <div class="flex items-start justify-between">

                            <div
                                class="flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-600 ring-1 ring-emerald-100 transition-all duration-300 group-hover:scale-105 group-hover:bg-emerald-600 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"
                                    class="h-7 w-7">
                                    <path
                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                    </path>
                                    <circle cx="12" cy="8" r="6"></circle>
                                </svg>
                            </div>

                            <span
                                class="font-mono text-4xl font-black text-slate-100 transition-colors duration-300 group-hover:text-emerald-50">
                                03
                            </span>

                        </div>


                        {{-- Content --}}
                        <div class="mt-8">

                            <p class="text-xs font-bold uppercase tracking-widest text-emerald-600">
                                What Guides Us
                            </p>

                            <h3 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                                Values
                            </h3>

                            <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                                Integrity, inclusion, industry-relevance and care
                                for every learner who walks through our doors.
                            </p>

                        </div>


                        {{-- Bottom Line --}}
                        <div class="mt-8 flex items-center gap-2 text-xs font-semibold text-slate-400">
                            <span
                                class="h-px w-8 bg-emerald-200 transition-all duration-300 group-hover:w-12 group-hover:bg-emerald-500"></span>
                            Learner first
                        </div>

                    </div>
                </article>

            </div>

        </div>

    </section>

    <section class="relative overflow-hidden bg-slate-950 py-14 text-white sm:py-16 lg:py-20">


        {{-- Background accents --}}
        <div class="pointer-events-none absolute -left-40 top-20 h-80 w-80 rounded-full bg-brand-600/10 blur-3xl">
        </div>

        <div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-brand-500/10 blur-3xl">
        </div>


        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 gap-12 lg:grid-cols-12 lg:items-start lg:gap-16">


                {{-- Left Content --}}
                <div class="lg:col-span-5 reveal-left">

                    <div
                        class="mb-5 inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.25em] text-brand-400">
                        <span class="h-px w-8 bg-brand-400"></span>
                        Why UTI
                    </div>

                    <h2 class="max-w-xl text-4xl font-extrabold leading-[1.05] tracking-tight sm:text-5xl lg:text-6xl">
                       CRICOS.

                        <span class="block font-light italic text-slate-400 text-2xl md:text-3xl">
                           Registered Industry
                        </span>
                    </h2>

                    <p class="mt-6 max-w-lg text-sm leading-7 text-slate-400 sm:text-base">
                        A practical learning environment designed around recognised
                        qualifications, industry expectations and meaningful career pathways.
                    </p>

                    {{-- Small trust indicator --}}
                    <div class="mt-8 flex items-center gap-3">

                        <div class="flex -space-x-2">
                            <span
                                class="flex h-9 w-9 items-center justify-center rounded-full border-2 border-slate-950 bg-brand-600 text-xs font-bold">
                                U
                            </span>

                            <span
                                class="flex h-9 w-9 items-center justify-center rounded-full border-2 border-slate-950 bg-brand-600 text-xs font-bold">
                               T
                            </span>

                            <span
                                class="flex h-9 w-9 items-center justify-center rounded-full border-2 border-slate-950 bg-slate-700 text-xs font-bold">
                                I
                            </span>
                        </div>

                        <div>
                            <p class="text-sm font-semibold text-slate-200">
                                Recognised & industry-focused
                            </p>

                            <p class="text-xs text-slate-500">
                                Built around practical outcomes
                            </p>
                        </div>

                    </div>

                </div>


                {{-- Right Features --}}
                <div class="lg:col-span-7">

                    <div class="divide-y divide-white/10 rounded-3xl border border-white/10 bg-white/[0.03] px-5 sm:px-7 stagger">

                        {{-- Item 01 --}}
                        <div class="group flex gap-5 py-7 sm:gap-7 sm:py-8 reveal">

                            <div class="shrink-0">
                                <span
                                    class="flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 bg-white/5 font-mono text-sm font-semibold text-brand-400 transition-all duration-300 group-hover:border-brand-400/30 group-hover:bg-brand-400/10">
                                    01
                                </span>
                            </div>

                            <div class="min-w-0">
                                <div class="flex flex-wrap items-center gap-2">
                                    <h3 class="text-lg font-semibold text-white sm:text-xl">
                                        CRICOS-registered courses
                                    </h3>

                                    <span
                                        class="rounded-full bg-brand-400/10 px-2 py-0.5 text-[10px] font-semibold uppercase tracking-wider text-brand-400">
                                        Recognised
                                    </span>
                                </div>

                                <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-400">
                                    All qualifications meet ASQA and CRICOS standards for international students.
                                </p>
                            </div>

                        </div>


                        {{-- Item 02 --}}
                        <div class="group flex gap-5 py-7 sm:gap-7 sm:py-8 reveal">

                            <div class="shrink-0">
                                <span
                                    class="flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 bg-white/5 font-mono text-sm font-semibold text-brand-400 transition-all duration-300 group-hover:border-brand-400/30 group-hover:bg-brand-400/10">
                                    02
                                </span>
                            </div>

                            <div class="min-w-0">
                                <h3 class="text-lg font-semibold text-white sm:text-xl">
                                    One Sydney campus
                                </h3>

                                <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-400">
                                    North Parramatta — purpose-built classrooms, workshops and labs.
                                </p>
                            </div>

                        </div>


                        {{-- Item 03 --}}
                        <div class="group flex gap-5 py-7 sm:gap-7 sm:py-8 reveal">

                            <div class="shrink-0">
                                <span
                                    class="flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 bg-white/5 font-mono text-sm font-semibold text-brand-400 transition-all duration-300 group-hover:border-brand-400/30 group-hover:bg-brand-400/10">
                                    03
                                </span>
                            </div>

                            <div class="min-w-0">
                                <h3 class="text-lg font-semibold text-white sm:text-xl">
                                    Pathways that work
                                </h3>

                                <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-400">
                                    Direct articulation into higher qualifications and Australian employment.
                                </p>
                            </div>

                        </div>


                        {{-- Item 04 --}}
                        <div class="group flex gap-5 py-7 sm:gap-7 sm:py-8 reveal">

                            <div class="shrink-0">
                                <span
                                    class="flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 bg-white/5 font-mono text-sm font-semibold text-brand-400 transition-all duration-300 group-hover:border-brand-400/30 group-hover:bg-brand-400/10">
                                    04
                                </span>
                            </div>

                            <div class="min-w-0">
                                <h3 class="text-lg font-semibold text-white sm:text-xl">
                                    Experienced trainers
                                </h3>

                                <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-400">
                                    Experienced trainers with current industry credentials.
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
