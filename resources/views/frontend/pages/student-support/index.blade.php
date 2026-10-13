@extends('frontend.layouts.app')

@section('title', 'Student Support')

@section('content')
    {{--  HERO SECTION --}}
    <section class="relative isolate overflow-hidden bg-brand-25 animate-hero-left">
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
                    Student Support
                </span>

                {{-- Heading --}}
                <h1
                    class="max-w-4xl font-heading text-3xl font-bold leading-[1.08] tracking-tight text-neutral-950 sm:text-4xl md:text-5xl lg:text-6xl xl:text-[4.25rem]">
                    Student support services
                </h1>

                {{-- Description --}}
                <p
                    class="mt-5 max-w-2xl text-sm leading-6 text-neutral-600 sm:text-base sm:leading-7 lg:text-lg lg:leading-8">
                    From assessment help to job search — UTI's student services team is here through every stage of your
                    study.
                </p>

                {{-- CTA --}}
                <div class="mt-7 flex flex-col gap-3 sm:mt-8 sm:flex-row sm:flex-wrap sm:items-center">

                    <a href="#apply"
                        class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-brand-700 bg-brand-500 px-5 py-3.5 font-heading text-sm font-bold uppercase tracking-wide text-white shadow-theme-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-600 hover:shadow-theme-md active:translate-y-0 sm:w-auto">
                        <span>Apply</span>

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

    <section class="py-12 sm:py-16 lg:py-20">

        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6  lg:px-8 ">

        <!-- Section Header -->
        <div class="mb-8 sm:mb-10 lg:mb-12">
            <div class="mb-3 flex items-center gap-3">
                <span class="h-px w-8 bg-brand-500"></span>
                <span class="text-xs font-semibold uppercase tracking-[0.22em] text-brand-600 sm:text-sm">
                    Student Support
                </span>
            </div>

            <h2
                class="font-display text-3xl font-semibold leading-tight tracking-tight text-neutral-900 sm:text-4xl lg:text-5xl">
                Support services
            </h2>

            <p class="mt-3 max-w-2xl text-sm leading-6 text-neutral-600 sm:text-base sm:leading-7">
                Access practical support throughout your studies, from fees and
                assessments to work placement and career preparation.
            </p>
        </div>


        <!-- Support Services Grid -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 lg:gap-5">

            <!-- Fees & Charges -->
            <article
                class="group flex h-full flex-col rounded-2xl border border-neutral-200 bg-neutral-25 p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg sm:p-7 lg:p-8">
                <div
                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-600 transition-colors duration-300 group-hover:bg-brand-500 group-hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z" />
                        <path d="M14 2v5a1 1 0 0 0 1 1h5" />
                        <path d="M8 13h2" />
                        <path d="M14 13h2" />
                        <path d="M8 17h2" />
                        <path d="M14 17h2" />
                    </svg>
                </div>

                <div class="mt-6 flex-1">
                    <h3 class="font-display text-xl font-semibold tracking-tight text-neutral-900 sm:text-2xl">
                        Fees & Charges
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-neutral-600">
                        Tuition, material and ancillary fees with payment plan
                        options.
                    </p>
                </div>
            </article>


            <!-- Assessment Support -->
            <article
                class="group flex h-full flex-col rounded-2xl border border-neutral-200 bg-neutral-25 p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg sm:p-7 lg:p-8">
                <div
                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-600 transition-colors duration-300 group-hover:bg-brand-500 group-hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="8" height="4" x="8" y="2" rx="1" />
                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
                        <path d="M12 11h4" />
                        <path d="M12 16h4" />
                        <path d="M8 11h.01" />
                        <path d="M8 16h.01" />
                    </svg>
                </div>

                <div class="mt-6 flex-1">
                    <h3 class="font-display text-xl font-semibold tracking-tight text-neutral-900 sm:text-2xl">
                        Assessment Support
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-neutral-600">
                        Trainer-led help with reasonable adjustments where
                        required.
                    </p>
                </div>
            </article>


            <!-- Attendance Requirements -->
            <article
                class="group flex h-full flex-col rounded-2xl border border-neutral-200 bg-neutral-25 p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg sm:p-7 lg:p-8">
                <div
                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-600 transition-colors duration-300 group-hover:bg-brand-500 group-hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 14v2.2l1.6 1" />
                        <path d="M16 2v4" />
                        <path d="M21 7.5V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h3.5" />
                        <path d="M3 10h5" />
                        <path d="M8 2v4" />
                        <circle cx="16" cy="16" r="6" />
                    </svg>
                </div>

                <div class="mt-6 flex-1">
                    <h3 class="font-display text-xl font-semibold tracking-tight text-neutral-900 sm:text-2xl">
                        Attendance Requirements
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-neutral-600">
                        Maintain satisfactory course progress and attendance.
                    </p>
                </div>
            </article>


            <!-- Work Placement -->
            <article
                class="group flex h-full flex-col rounded-2xl border border-neutral-200 bg-neutral-25 p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg sm:p-7 lg:p-8">
                <div
                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-600 transition-colors duration-300 group-hover:bg-brand-500 group-hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                        <rect width="20" height="14" x="2" y="6" rx="2" />
                    </svg>
                </div>

                <div class="mt-6 flex-1">
                    <h3 class="font-display text-xl font-semibold tracking-tight text-neutral-900 sm:text-2xl">
                        Work Placement
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-neutral-600">
                        Industry placement coordination for applicable
                        qualifications.
                    </p>
                </div>
            </article>


            <!-- Resume Help -->
            <article
                class="group flex h-full flex-col rounded-2xl border border-neutral-200 bg-neutral-25 p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg sm:p-7 lg:p-8">
                <div
                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-600 transition-colors duration-300 group-hover:bg-brand-500 group-hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 12h-5" />
                        <path d="M15 8h-5" />
                        <path d="M19 17V5a2 2 0 0 0-2-2H4" />
                        <path
                            d="M8 21h12a2 2 0 0 0 2-2v-1a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1v1a2 2 0 1 1-4 0V5a2 2 0 1 0-4 0v2a1 1 0 0 0 1 1h3" />
                    </svg>
                </div>

                <div class="mt-6 flex-1">
                    <h3 class="font-display text-xl font-semibold tracking-tight text-neutral-900 sm:text-2xl">
                        Resume Help
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-neutral-600">
                        Resume reviews and templates aligned to Australian
                        employers.
                    </p>
                </div>
            </article>


            <!-- Job Search Tips -->
            <article
                class="group flex h-full flex-col rounded-2xl border border-neutral-200 bg-neutral-25 p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg sm:p-7 lg:p-8">
                <div
                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-600 transition-colors duration-300 group-hover:bg-brand-500 group-hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                        <path d="m9 12 2 2 4-4" />
                    </svg>
                </div>

                <div class="mt-6 flex-1">
                    <h3 class="font-display text-xl font-semibold tracking-tight text-neutral-900 sm:text-2xl">
                        Job Search Tips
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-neutral-600">
                        Search strategies, interview prep and post-graduation
                        guidance.
                    </p>
                </div>
            </article>

        </div>
</div>
    </section>


    {{-- ADMISSIONS CTA --}}
    <section>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 bg-brand-800 py-14 text-neutral-25 rounded-2xl lg:rounded-4xl">

            <div class="flex flex-col items-center justify-between gap-8 lg:flex-row">


                {{-- CTA content --}}
                <div class="flex max-w-3xl flex-col gap-3 text-center lg:text-left">

                    <div class="flex items-center justify-center gap-2 lg:justify-start">

                        <span class="relative flex h-2.5 w-2.5">

                            <span
                                class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary-400 opacity-75">
                            </span>

                            <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-secondary-300">
                            </span>

                        </span>


                        <span class=" text-[10px] font-bold uppercase tracking-widest text-secondary-300">
                            Need to lodge a complaint or appeal?
                        </span>

                    </div>

                    <h3
                        class="font-display text-3xl font-extrabold uppercase leading-tight tracking-tight text-neutral-25 md:text-4xl lg:text-5xl">
                        We take feedback seriously.
                    </h3>

                    <p class="max-w-2xl text-sm leading-6 text-brand-100 md:text-base md:leading-7">
                        Find the complaints, appeals and feedback forms in the resources hub.
                    </p>

                </div>


                {{-- CTA actions --}}
                <div class="shrink-0">
                    <a href="{{ route('student-resources') }}"
                        class="group inline-flex w-full items-center justify-center gap-2 rounded-xl bg-white px-5 py-3.5 text-sm font-semibold text-brand-700 shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-25 hover:shadow-lg sm:w-auto sm:px-6">
                        <span>Open Resources</span>

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 7h10v10" />
                            <path d="M7 17 17 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>




@endsection
