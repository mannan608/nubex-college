@extends('frontend.layouts.app')

@section('title', $course['name'])

@section('content')
    <section class="relative overflow-hidden bg-brand-25 py-8 sm:py-12 lg:py-16">
        <div class="absolute inset-0 mesh-background"></div>
        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <!-- Top Navigation -->
            <div class="mb-6 flex flex-wrap items-center justify-between gap-4 sm:mb-8 animate-hero-left hero-stagger-1">
                <div class="flex flex-wrap items-center gap-2">

                    <span
                        class="inline-flex items-center rounded-full  bg-white px-3 py-1.5  text-[10px] font-semibold uppercase tracking-wider text-brand-700 shadow-sm">
                        {{ $course['category_name'] }}
                    </span>

                    <span
                        class="inline-flex items-center rounded-full  bg-brand-500 px-3 py-1.5  text-[10px] font-semibold uppercase tracking-wider text-white shadow-sm">
                        National Code: {{ $course['code'] }}
                    </span>

                </div>
            </div>


            <!-- Course Title -->
            <div class="mb-10 max-w-4xl sm:mb-12 animate-hero-left hero-stagger-2">

                <span class="mb-3 inline-block  text-[10px] font-semibold uppercase tracking-[0.16em] text-secondary-600">
                    01 Specification &amp; Outcomes
                </span>

                <h1
                    class="mb-5 font-heading text-3xl font-bold leading-[1.05] tracking-tight text-neutral-950 sm:text-4xl lg:text-5xl">
                    {{ $course['hero']['title'] }} of
                    <br class="hidden sm:inline">

                    <span class="relative inline-block text-brand-500">
                        {{ $course['category_name'] }}

                        <span class="absolute bottom-0 left-0 -z-0 h-2.5 w-full rounded-full bg-brand-200/70"></span>
                    </span>
                </h1>

                <p class="max-w-2xl text-sm leading-7 text-neutral-600 sm:text-base lg:text-lg">
                    {{ $course['hero']['description'] }}
                </p>
            </div>
            <!-- Quick Facts -->
            <div id="quick-facts" class="mb-10 grid grid-cols-2 gap-3 sm:grid-cols-2 lg:grid-cols-4 sm:gap-4 stagger">

                <!-- Duration -->
                <div
                    class="group rounded-2xl border border-neutral-200/80 bg-white p-4 shadow-theme-xs transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-md sm:p-5 reveal-scale">
                    <div
                        class="mb-2 flex items-center gap-1.5  text-[10px] font-semibold uppercase tracking-wider text-brand-500">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" />
                        </svg>
                        Duration
                    </div>

                    <p class="font-heading text-xl font-bold tracking-tight text-neutral-900">
                        {{ $course['key_information']['duration'] }}
                    </p>

                    <span class="mt-1 block text-[10px] leading-relaxed text-neutral-500">
                        Incl. scheduled term breaks
                    </span>
                </div>
                <!-- Total Units -->
                <div
                    class="group rounded-2xl border border-neutral-200/80 bg-white p-4 shadow-theme-xs transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-md sm:p-5 reveal-scale">
                    <div
                        class="mb-2 flex items-center gap-1.5  text-[10px] font-semibold uppercase tracking-wider text-brand-500">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>
                        Total Units
                    </div>

                    <p class="font-heading text-xl font-bold tracking-tight text-neutral-900">
                        {{ $course['course_structure']['total_units'] }}
                    </p>

                    <span class="mt-1 block text-[10px] leading-relaxed text-neutral-500">
                        {{ $course['course_structure']['core_units']['total'] }} Core +
                        {{ $course['course_structure']['elective_units']['total'] }} Electives
                    </span>
                </div>
                <!-- Study Load -->
                <div
                    class="group rounded-2xl border border-neutral-200/80 bg-white p-4 shadow-theme-xs transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-md sm:p-5 reveal-scale">
                    <div
                        class="mb-2 flex items-center gap-1.5  text-[10px] font-semibold uppercase tracking-wider text-brand-500">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 00-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>
                        Study Load
                    </div>

                    <p class="font-heading text-xl font-bold tracking-tight text-neutral-900">
                        {{ $course['key_information']['mode_of_study'] }}
                    </p>

                    <span class="mt-1 block text-[10px] leading-relaxed text-neutral-500">
                        Face-to-face &amp; blended
                    </span>
                </div>
                <!-- CRICOS -->
                <div
                    class="group rounded-2xl border border-neutral-200/80 bg-white p-4 shadow-theme-xs transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-md sm:p-5 reveal-scale">
                    <div
                        class="mb-2 flex items-center gap-1.5  text-[10px] font-semibold uppercase tracking-wider text-brand-500">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>
                        CRICOS Code
                    </div>

                    <p class="font-heading text-xl font-bold tracking-tight text-neutral-900">
                        {{ $course['key_information']['cricos'] }}
                    </p>

                    <span class="mt-1 block text-[10px] leading-relaxed text-neutral-500">
                        International eligible
                    </span>
                </div>
            </div>
            <!-- Actions -->
            <div class="flex flex-col gap-4 sm:flex-row sm:flex-wrap sm:items-center animate-hero-left hero-stagger-3">

                <a href="#admissions-form"
                    class="inline-flex items-center justify-center gap-2 rounded-xl  bg-brand-500 px-5 py-3 font-heading text-sm font-bold uppercase tracking-wide text-white shadow-theme-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-600 hover:shadow-theme-md active:translate-y-0">
                    <span>Enquire / Apply for Next Intake</span>

                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" />
                    </svg>
                </a>


                <a href="#syllabus"
                    class="inline-flex items-center justify-center gap-2 rounded-xl  bg-white px-5 py-3 font-heading text-sm font-semibold uppercase tracking-wide text-neutral-800 shadow-theme-xs transition-all duration-300 hover:-translate-y-0.5 hover:border-brand-200 hover:bg-brand-25 hover:text-brand-700 hover:shadow-theme-sm">
                    <svg class="h-4 w-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" />
                    </svg>

                    <span>Download Syllabus Matrix</span>
                </a>


                <div class="flex items-center gap-2 text-[10px]  text-neutral-500 sm:ml-auto">
                    <span class="h-2 w-2 rounded-full bg-success-500"></span>

                    <span>
                        Next intake starts:
                        <strong class="text-neutral-900">May 12, 2025</strong>
                        (Term 2)
                    </span>
                </div>

            </div>

        </div>
    </section>

    <main class="mx-auto max-w-7xl flex-1 px-4 py-10 sm:px-6 sm:py-12 lg:px-8 lg:py-16">

        <div class="grid grid-cols-1 items-start gap-8 lg:grid-cols-12 lg:gap-10">

            <!-- LEFT CONTENT -->
            <div class="space-y-6 sm:space-y-8 lg:col-span-8">


                <!-- COURSE DESCRIPTION -->
                <article
                    class="rounded-2xl border border-neutral-200/80 bg-white p-6 shadow-theme-xs transition-shadow duration-300 hover:shadow-theme-sm sm:p-8"
                    data-purpose="course-description">

                    <div class="mb-6 flex items-center gap-3 border-b border-neutral-200 pb-4">

                        <div
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-brand-200 bg-brand-50 text-brand-500 transition-colors duration-300 group-hover:bg-brand-100">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>

                        <div class="min-w-0">
                            <span class="block  text-[10px] font-semibold uppercase tracking-[0.14em] text-neutral-500">
                                01.0 Qualification Scope
                            </span>

                            <h2 class="font-heading text-xl font-bold tracking-tight text-neutral-900 sm:text-2xl">
                                Course Description
                            </h2>
                        </div>

                    </div>


                    <div class="space-y-4 text-sm leading-7 text-neutral-600 sm:text-base">

                        <p>
                            {{ $course['course_description'] }}
                        </p>

                        @if (!empty($course['important_information']))
                            <div class="space-y-2">
                                @foreach ($course['important_information'] as $information)
                                <p class="mb-2 last:mb-0">
                                    {{ $information }}
                                </p>
                            @endforeach
                            </div>
                        @endif

                        @if (!empty($course['limitations']))
                            <div
                                class="rounded-r-xl border-l-4 border-brand-500 bg-brand-50 px-4 py-4 text-sm leading-4 text-brand-900">

                                @foreach ($course['limitations'] as $limitation)
                                    <p class="mb-2 last:mb-0">
                                        {{ $limitation }}
                                    </p>
                                @endforeach

                            </div>
                        @endif

                        <p class="border-t border-neutral-100 pt-3  text-[10px] leading-5 text-neutral-500">
                            National Training Package: BSB Business Services Training Package • Status: Current • AQF
                            Equivalent: Level 6.
                        </p>

                    </div>

                </article>


                <!-- COURSE STRUCTURE-->
                <article id="syllabus"
                    class="rounded-2xl border border-neutral-200/80 bg-white p-6 shadow-theme-xs transition-shadow duration-300 hover:shadow-theme-sm sm:p-8"
                    data-purpose="course-structure">

                    <div class="mb-6 flex items-center justify-between gap-4 border-b border-neutral-200 pb-4">

                        <div class="flex min-w-0 items-center gap-3">

                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-brand-200 bg-brand-50 text-brand-500 transition-colors duration-300 group-hover:bg-brand-100">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                </svg>
                            </div>

                            <div class="min-w-0">
                                <span
                                    class="block  text-[10px] font-semibold uppercase tracking-[0.14em] text-neutral-500">
                                    02.0 Curriculum Architecture
                                </span>

                                <h2 class="font-heading text-xl font-bold tracking-tight text-neutral-900 sm:text-2xl">
                                    Course Structure
                                </h2>
                            </div>

                        </div>
                        <span
                            class="hidden shrink-0 border border-brand-200 bg-brand-50 px-3 py-1  text-[10px] font-semibold uppercase tracking-wider text-brand-700 sm:inline-flex">
                            Total {{ $course['key_information']['total_units'] }} Units
                        </span>

                    </div>
                    <p class="mb-6 text-sm leading-6 text-neutral-600">
                        To achieve the {{ $course['code'] }} {{ $course['name'] }},
                        <strong class="font-semibold text-neutral-900">{{ $course['key_information']['total_units'] }}
                            competency units</strong>
                        must be successfully completed: comprising
                        <strong
                            class="font-semibold text-neutral-900">{{ $course['course_structure']['core_units']['total'] }}
                            core units</strong>
                        and
                        <strong
                            class="font-semibold text-neutral-900">{{ $course['course_structure']['elective_units']['total'] }}
                            elective units</strong>.
                    </p>


                    <!-- CORE UNITS -->
                    <div class="mb-8">

                        <div class="mb-3 flex flex-wrap items-center justify-between gap-2">

                            <h3
                                class="flex items-center gap-2 font-heading text-sm font-bold uppercase tracking-wide text-brand-700 sm:text-base">
                                <span class="h-2 w-2 bg-brand-500"></span>

                                Core Units
                                ({{ $course['course_structure']['core_units']['total'] }} Required)
                            </h3>

                            <span class="text-[10px] font-semibold uppercase tracking-wider text-neutral-500">
                                Mandatory Units
                            </span>

                        </div>

                        <div class="space-y-2.5">

                            @foreach ($course['course_structure']['core_units']['units'] as $unit)
                                <div
                                    class="group flex items-start gap-3 rounded-xl border border-neutral-200/80 bg-neutral-50 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:border-brand-200 hover:bg-brand-25 hover:shadow-theme-xs">

                                    <div class="mt-0.5 shrink-0 text-success-600">
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path clip-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                fill-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <div class="min-w-0 flex-1">

                                        <div class="mb-1 flex flex-wrap items-center justify-between gap-2">

                                            <span class="text-[11px] font-semibold text-brand-700">
                                                {{ $unit['code'] }}
                                            </span>

                                            <span
                                                class="rounded-full border border-neutral-200 bg-white px-2 py-0.5 text-[9px] font-semibold uppercase tracking-wide text-neutral-600">
                                                Core
                                            </span>

                                        </div>

                                        <p class="text-sm font-semibold leading-6 text-neutral-900">
                                            {{ $unit['name'] }}
                                        </p>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>


                    <!-- ELECTIVE UNITS -->
                    <div>

                        <div class="mb-3 flex flex-wrap items-center justify-between gap-2">

                            <h3
                                class="flex items-center gap-2 font-heading text-sm font-bold uppercase tracking-wide text-brand-700 sm:text-base">

                                <span class="h-2 w-2 bg-secondary-500"></span>

                                Elective Units
                                ({{ $course['course_structure']['elective_units']['total'] }} Required)

                            </h3>

                            <span class="text-[10px] font-semibold uppercase tracking-wider text-neutral-500">
                                Elective Units
                            </span>

                        </div>

                        <div class="space-y-2.5">

                            @foreach ($course['course_structure']['elective_units']['units'] as $unit)
                                <div
                                    class="group flex items-start gap-3 rounded-xl border border-secondary-200 bg-secondary-25 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:border-secondary-300 hover:bg-secondary-50 hover:shadow-theme-xs">

                                    <div class="mt-0.5 shrink-0 text-secondary-600">
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path clip-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                fill-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <div class="min-w-0 flex-1">

                                        <div class="mb-1 flex flex-wrap items-center justify-between gap-2">

                                            <span class="text-[11px] font-semibold text-secondary-700">
                                                {{ $unit['code'] }}
                                            </span>

                                            <span
                                                class="rounded-full border border-secondary-200 bg-white px-2 py-0.5 text-[9px] font-semibold uppercase tracking-wide text-secondary-700">
                                                Elective
                                            </span>

                                        </div>

                                        <p class="text-sm font-semibold leading-6 text-neutral-900">
                                            {{ $unit['name'] }}
                                        </p>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </article>



                <!-- ENTRY REQUIREMENTS -->
                <article
                    class="rounded-2xl border border-neutral-200/80 bg-white p-6 shadow-theme-xs transition-shadow duration-300 hover:shadow-theme-sm sm:p-8"
                    data-purpose="entry-requirements">

                    <div class="mb-6 flex items-center gap-3 border-b border-neutral-200 pb-4">

                        <div
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-brand-200 bg-brand-50 text-brand-500">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 00-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>

                        <div>
                            <span class="block text-[10px] font-semibold uppercase tracking-[0.14em] text-neutral-500">
                                03.0 Prerequisites &amp; Eligibility
                            </span>

                            <h2 class="font-heading text-xl font-bold tracking-tight text-neutral-900 sm:text-2xl">
                                Entry Requirements
                            </h2>
                        </div>

                    </div>


                    <div class="space-y-5">
                        @foreach ($course['entry_requirements'] ?? [] as $index => $requirement)
                            <div class="flex items-start gap-3">

                                <span
                                    class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full border border-brand-200 bg-brand-50 text-[10px] font-bold text-brand-700">
                                    {{ $index + 1 }}
                                </span>

                                <div class="min-w-0">

                                    <strong class="font-heading font-bold text-neutral-900">
                                        {{ $requirement['label'] }}:
                                    </strong>

                                    <p class="mt-1 text-sm leading-6 text-neutral-600">

                                        {{ $requirement['value'] }}

                                        @if (!empty($requirement['link']))
                                            <a href="{{ $requirement['link']['url'] }}" target="_blank"
                                                rel="noopener noreferrer"
                                                class="font-medium text-brand-500 underline decoration-brand-200 underline-offset-2 transition-colors hover:text-brand-700">
                                                {{ $requirement['link']['text'] }}
                                            </a>
                                        @endif

                                        @if (!empty($requirement['link']))
                                            .
                                        @endif

                                    </p>

                                </div>

                            </div>
                        @endforeach

                    </div>

                </article>

                <!-- LICENSING & REGULATORY INFORMATION SECTION -->
                @if (!empty($course['licensing_regulatory_information']))
                    <article
                        class="rounded-2xl border border-neutral-200/80 bg-white p-6 shadow-theme-xs transition-shadow duration-300 hover:shadow-theme-sm sm:p-8"
                        data-purpose="licensing-information">

                        {{-- Section Header --}}
                        <div class="mb-5 flex items-center gap-3 border-b border-neutral-200 pb-4">

                            {{-- Shield Check Icon Wrapper --}}
                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-brand-200 bg-brand-50 text-brand-500 transition-colors duration-300">

                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>

                            </div>

                            <div>
                                <span class="block text-[10px] font-semibold uppercase tracking-[0.14em] text-neutral-500">
                                    06.0 Regulatory Compliance
                                </span>

                                <h2 class="font-heading text-xl font-bold tracking-tight text-neutral-900 sm:text-2xl">
                                    Licensing &amp; regulatory information
                                </h2>
                            </div>

                        </div>


                        {{-- Description --}}
                        @if (!empty($course['licensing_regulatory_information']['description']))
                            <p class="text-sm leading-relaxed text-neutral-600 sm:text-base sm:leading-7">
                                {{ $course['licensing_regulatory_information']['description'] }}
                            </p>
                        @endif

                    </article>
                @endif


                @if (!empty($course['work_placement']))
                    <!-- WORK PLACEMENT SECTION -->
                    <article
                        class="rounded-2xl border border-neutral-200/80 bg-white p-6 shadow-theme-xs transition-shadow duration-300 hover:shadow-theme-sm sm:p-8"
                        data-purpose="work-placement">

                        {{-- Section Header --}}
                        <div class="mb-6 flex items-center gap-3 border-b border-neutral-200 pb-4">

                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-brand-200 bg-brand-50 text-brand-500 transition-colors duration-300">

                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>

                            </div>

                            <div>
                                <span class="block text-[10px] font-semibold uppercase tracking-[0.14em] text-neutral-500">
                                    05.0 Practical Experience
                                </span>

                                <h2 class="font-heading text-xl font-bold tracking-tight text-neutral-900 sm:text-2xl">
                                    Work Placement
                                </h2>
                            </div>

                        </div>


                        {{-- Content Body --}}
                        <div class="space-y-5">

                            {{-- Highlight Hours Card --}}
                            @if (!empty($course['work_placement']['hours']))
                                <div
                                    class="rounded-xl border border-neutral-200/80 bg-neutral-50 p-5 transition-all duration-300 hover:border-brand-200 hover:bg-brand-25/50 hover:shadow-theme-xs">

                                    <span
                                        class="block text-[10px] font-semibold uppercase tracking-wider text-neutral-500">
                                        {{ $course['work_placement']['title'] ?? 'Mandatory Placement' }}
                                    </span>

                                    <h3
                                        class="mt-1 font-heading text-2xl font-bold tracking-tight text-neutral-900 sm:text-3xl">
                                        {{ $course['work_placement']['hours'] }} hours
                                    </h3>

                                </div>
                            @endif


                            {{-- Description --}}
                            @if (!empty($course['work_placement']['description']))
                                <p class="text-sm leading-relaxed text-neutral-600 sm:text-base sm:leading-7">
                                    {{ $course['work_placement']['description'] }}
                                </p>
                            @endif

                        </div>

                    </article>
                @endif


                <!-- CAREER OUTCOMES -->
                <article
                    class="rounded-2xl border border-neutral-200/80 bg-white p-6 shadow-theme-xs transition-shadow duration-300 hover:shadow-theme-sm sm:p-8"
                    data-purpose="career-outcomes">

                    <div class="mb-6 flex items-center gap-3 border-b border-neutral-200 pb-4">

                        <div
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-brand-200 bg-brand-50 text-brand-500 transition-colors duration-300 group-hover:bg-brand-100">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>

                        <div>
                            <span class="block  text-[10px] font-semibold uppercase tracking-[0.14em] text-neutral-500">
                                04.0 Vocational Horizons
                            </span>

                            <h2 class="font-heading text-xl font-bold tracking-tight text-neutral-900 sm:text-2xl">
                                Career Outcomes
                            </h2>
                        </div>

                    </div>


                    {{-- <p class="mb-5 text-sm leading-6 text-neutral-600">
                        Graduates of this course are equipped for intermediate to senior operational and administrative
                        leadership positions:
                    </p> --}}


                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">

                        @if (!empty($course['career_outcomes']))
                            @foreach ($course['career_outcomes'] as $career)
                                <div
                                    class="flex items-center justify-between gap-3 rounded-xl border border-neutral-200/80 bg-neutral-50 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:border-brand-200 hover:bg-brand-25 hover:shadow-theme-xs group">
                                    <div class="flex items-center gap-3">
                                        {{-- Briefcase Icon Wrapper --}}
                                        <div
                                            class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white border border-neutral-200 text-neutral-600 transition-colors duration-300 group-hover:border-brand-300 group-hover:bg-brand-50 group-hover:text-brand-600">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                        </div>

                                        {{-- Career Title --}}
                                        <span
                                            class="text-sm font-semibold leading-5 text-neutral-900 group-hover:text-brand-600 transition-colors duration-300">
                                            {{ $career }}
                                        </span>
                                    </div>

                                    {{-- Optional Right Chevron Arrow --}}
                                    <svg class="h-4 w-4 text-neutral-400 transition-all duration-300 group-hover:translate-x-0.5 group-hover:text-brand-500 shrink-0"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </div>
                            @endforeach
                        @endif

                    </div>

                </article>


                <!-- EDUCATION PATHWAYS -->
                <article
                    class="rounded-2xl border border-neutral-200/80 bg-white p-6 shadow-theme-xs transition-shadow duration-300 hover:shadow-theme-sm sm:p-8"
                    data-purpose="education-pathways">

                    <div class="mb-5 flex items-center gap-3 border-b border-neutral-200 pb-4">

                        <div
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-brand-200 bg-brand-50 text-brand-500 transition-colors duration-300 group-hover:bg-brand-100">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>

                        <div>
                            <span class="block  text-[10px] font-semibold uppercase tracking-[0.14em] text-neutral-500">
                                05.0 Higher Education Articulation
                            </span>

                            <h2 class="font-heading text-xl font-bold tracking-tight text-neutral-900 sm:text-2xl">
                                Education Pathways
                            </h2>
                        </div>

                    </div>


                    <div class="flex items-start gap-3 rounded-xl border border-brand-200 bg-brand-25 p-4">


                        @if (!empty($course['education_pathways']))
                            <div class="space-y-3">
                                @foreach ($course['education_pathways'] as $key => $pathway)
                                    <div
                                        class="flex items-start gap-3 rounded-xl border border-brand-200 bg-brand-25/50 p-4 transition-all duration-200 hover:border-brand-300 hover:bg-brand-50/60">
                                        {{-- Academic Cap Icon Wrapper --}}
                                        <div
                                            class="mt-0.5 flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-brand-100 text-brand-600">
                                            <svg class="h-4 w-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5" />
                                            </svg>
                                        </div>

                                        {{-- Pathway Content --}}
                                        <p class="text-sm font-medium leading-6 text-neutral-800">
                                            {{ $pathway }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>

                </article>


                <!--  EXIT AWARD -->
                <article
                    class="rounded-2xl border border-neutral-200/80 bg-white p-6 shadow-theme-xs transition-shadow duration-300 hover:shadow-theme-sm sm:p-8"
                    data-purpose="exit-award">

                    <div class="mb-5 flex items-center gap-3 border-b border-neutral-200 pb-4">

                        <div
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-brand-200 bg-brand-50 text-brand-500 transition-colors duration-300 group-hover:bg-brand-100">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>

                        <div>
                            <span class="block  text-[10px] font-semibold uppercase tracking-[0.14em] text-neutral-500">
                                06.0 Accreditation Recognition
                            </span>

                            <h2 class="font-heading text-xl font-bold tracking-tight text-neutral-900 sm:text-2xl">
                                Exit Point / Award
                            </h2>
                        </div>

                    </div>


                    <div class="space-y-3 text-sm leading-6 text-neutral-600">

                        <ul>
                            <li>
                                <p>{{ $course['exit_point_award']['completion_requirement'] }}</p>
                            </li>
                            <li class="text-black font-semibold mt-2">
                                <p>{{ $course['exit_point_award']['partial_completion'] }}</p>
                            </li>
                        </ul>

                        <p
                            class="rounded-r-lg border-l-2 border-neutral-300 bg-neutral-50 px-3 py-2.5  text-[10px] leading-5 text-neutral-500">
                            Note: Students who complete some but not all units may be issued with an official Statement of
                            Attainment detailing competencies achieved.
                        </p>

                    </div>

                </article>


                <!-- RPL / CREDIT TRANSFER -->
                <article
                    class="rounded-2xl border border-neutral-200/80 bg-white p-6 shadow-theme-xs transition-shadow duration-300 hover:shadow-theme-sm sm:p-8"
                    data-purpose="rpl-credits">

                    <div class="mb-5 flex items-center gap-3 border-b border-neutral-200 pb-4">

                        <div
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-brand-200 bg-brand-50 text-brand-500 transition-colors duration-300 group-hover:bg-brand-100">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>

                        <div>
                            <span class="block  text-[10px] font-semibold uppercase tracking-[0.14em] text-neutral-500">
                                07.0 Prior Learning Assessment
                            </span>

                            <h2 class="font-heading text-xl font-bold tracking-tight text-neutral-900 sm:text-2xl">
                                RPL &amp; Credit Transfer
                            </h2>
                        </div>

                    </div>


                    <div class="space-y-3 text-sm leading-6 text-neutral-600">

                        <p>
                            {{ $course['rpl_credit_transfer']['description'] }}
                        </p>

                        <p class="font-medium text-neutral-900">
                            {{ $course['rpl_credit_transfer']['recognition_statement'] }}
                        </p>

                    </div>

                </article>


                <!-- ADDITIONAL INFORMATION -->
                <article class="rounded-2xl border border-dashed border-brand-200 bg-brand-25 p-6"
                    data-purpose="additional-info">

                    <div
                        class="mb-2 flex items-center gap-2  text-[10px] font-semibold uppercase tracking-wider text-brand-600">

                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" />
                        </svg>

                        08.0 Policies &amp; Handbook
                    </div>

                    <h3 class="mb-2 font-heading text-lg font-bold tracking-tight text-neutral-900">
                        Additional Information &amp; Regulations
                    </h3>

                    <p class="text-sm leading-6 text-neutral-600">
                        For full terms, policies, fees, refund procedures, and international student life support
                        information, please refer to our official
                        <a href="{{ $course['additional_information']['student_handbook_url'] }}"
                            class="font-semibold text-brand-500 underline decoration-brand-200 underline-offset-2 transition-colors hover:text-brand-700">
                            Student Handbook (PDF)
                        </a>
                        and ESOS Framework documentation.
                    </p>

                </article>

            </div>


            <!-- RIGHT SIDEBAR -->
            <aside class="space-y-6 lg:sticky lg:top-24 lg:col-span-4">

                <!-- ADMISSIONS CARD -->
                <div id="admissions-form"
                    class="rounded-2xl border border-brand-200 bg-white p-6 shadow-theme-md transition-all duration-300 hover:shadow-theme-lg sm:p-7"
                    data-purpose="talk-to-admissions-card">

                    <div class="mb-5 flex items-center justify-between border-b border-neutral-200 pb-3">

                        <span class=" text-[10px] font-semibold uppercase tracking-[0.14em] text-secondary-600">
                            Get Started
                        </span>

                        <span class="relative flex h-2.5 w-2.5">
                            <span
                                class="absolute inline-flex h-full w-full animate-ping rounded-full bg-success-400 opacity-60"></span>

                            <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-success-500"></span>
                        </span>

                    </div>


                    <h3 class=" font-heading text-2xl font-bold tracking-tight text-neutral-900">
                        Talk to admissions
                    </h3>

                    <p class="mb-6 text-xs leading-6 text-neutral-600">
                        Get a response within 1 business day
                    </p>


                    <form action="#" method="POST" class="space-y-4" onsubmit="event.preventDefault();">

                        <!-- Name -->
                        <div>

                            <label
                                class="mb-1.5 block  text-[10px] font-semibold uppercase tracking-wide text-neutral-700">
                                Full Legal Name *
                            </label>

                            <input type="text" placeholder="e.g. Elena Rostova"
                                class="w-full rounded-xl border border-neutral-200 bg-white px-3.5 py-3 text-sm text-neutral-900 outline-none transition-all duration-300 placeholder:text-neutral-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100">

                        </div>


                        <!-- Email -->
                        <div>

                            <label
                                class="mb-1.5 block  text-[10px] font-semibold uppercase tracking-wide text-neutral-700">
                                Email Address *
                            </label>

                            <input type="email" placeholder="name@domain.com"
                                class="w-full rounded-xl border border-neutral-200 bg-white px-3.5 py-3 text-sm text-neutral-900 outline-none transition-all duration-300 placeholder:text-neutral-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100">

                        </div>
                        <!-- Email -->
                        <div>

                            <label
                                class="mb-1.5 block  text-[10px] font-semibold uppercase tracking-wide text-neutral-700">
                                Phone Number *
                            </label>

                            <input type="number" placeholder="+61 123 456 789"
                                class="w-full rounded-xl border border-neutral-200 bg-white px-3.5 py-3 text-sm text-neutral-900 outline-none transition-all duration-300 placeholder:text-neutral-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100">

                        </div>


                        <!-- Residency -->
                        <div>

                            <label
                                class="mb-1.5 block  text-[10px] font-semibold uppercase tracking-wide text-neutral-700">
                                Residency Status *
                            </label>

                            <select
                                class="w-full rounded-xl border border-neutral-200 bg-white px-3.5 py-3 text-sm text-neutral-900 outline-none transition-all duration-300 placeholder:text-neutral-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100">
                                <option>
                                    International Student (Subclass 500)
                                </option>

                                <option>
                                    Australian Permanent Resident / Citizen
                                </option>

                                <option>
                                    Temporary Graduate (Subclass 485)
                                </option>
                            </select>

                        </div>


                        <!-- Submit -->
                        <button type="submit"
                            class="mt-1 flex w-full items-center justify-center gap-2 rounded-xl border border-brand-700 bg-brand-500 px-4 py-3 font-heading text-xs font-bold uppercase tracking-wider text-white shadow-theme-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-600 hover:shadow-theme-md active:translate-y-0">
                            <span>Submit Enquiry</span>

                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                            </svg>
                        </button>

                    </form>


                    <div
                        class="mt-5 flex items-center justify-between gap-3 border-t border-neutral-100 pt-4  text-[10px] text-neutral-500">
                        <span>Direct phone enquiry:</span>

                        <a href="tel:+61286773600"
                            class="font-semibold text-neutral-900 transition-colors hover:text-brand-500">
                            +61 2 8677 3600
                        </a>
                    </div>

                </div>


                <!-- BROCHURE CARD -->
                <div class="rounded-2xl border border-brand-100 bg-brand-25 p-6 shadow-theme-xs transition-all duration-300 hover:-translate-y-0.5 hover:shadow-theme-sm"
                    data-purpose="course-brochure-card">

                    <span class="mb-1 block  text-[10px] font-semibold uppercase tracking-[0.14em] text-neutral-500">
                        Document Archive
                    </span>

                    <h4 class="mb-1 font-heading text-lg font-bold tracking-tight text-neutral-900">
                        {{ $course['code'] }} Brochure (pdf)
                    </h4>

                    <p class="mb-5 text-xs leading-6 text-neutral-600">
                        Detailed course syllabus, semester timetable, credit fee matrix, and academic policies in a single
                        PDF.
                    </p>


                    <div class="grid grid-cols-2 gap-2">

                        <button type="button"
                            class="flex items-center justify-center gap-1.5 rounded-lg border border-neutral-200 bg-white px-3 py-2.5  text-[10px] font-semibold uppercase tracking-wide text-neutral-800 transition-all duration-300 hover:-translate-y-0.5 hover:border-brand-200 hover:bg-brand-50 hover:text-brand-700 hover:shadow-theme-xs">
                            <svg class="h-3.5 w-3.5 text-brand-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />

                                <path
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>

                            View PDF
                        </button>


                        <button type="button"
                            class="flex items-center justify-center gap-1.5 rounded-lg border border-brand-700 bg-brand-700 px-3 py-2.5 text-[10px] font-semibold uppercase tracking-wide text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-800 hover:shadow-theme-xs">

                            {{-- Fixed Download Icon --}}
                            <svg class="h-3.5 w-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>

                            <span>Download</span>
                        </button>

                    </div>


                    <span class="mt-3 block text-center  text-[9px] text-neutral-400">
                        File size: 3.4 MB • Updated Jan 2025
                    </span>

                </div>


                <!-- COURSE AT A GLANCE -->
                <div class="rounded-2xl border border-neutral-200/80 bg-white p-6 shadow-theme-xs transition-all duration-300 hover:shadow-theme-sm"
                    data-purpose="at-a-glance-summary">

                    <div class="mb-3 flex items-center justify-between border-b border-neutral-200 pb-3">

                        <h4 class="font-heading text-sm font-bold uppercase tracking-wider text-neutral-900">
                            Course At A Glance
                        </h4>

                        <span
                            class="rounded-full border border-brand-200 bg-brand-50 px-2.5 py-1  text-[9px] font-semibold text-brand-700">
                            AQF 6
                        </span>

                    </div>


                    <dl class="divide-y divide-neutral-200 text-xs">

                        <div class="flex justify-between gap-4 py-2.5">
                            <dt class=" text-neutral-500">
                                National Code
                            </dt>

                            <dd class=" font-semibold text-neutral-900">
                                {{ $course['code'] }}
                            </dd>
                        </div>


                        <div class="flex justify-between gap-4 py-2.5">
                            <dt class=" text-neutral-500">
                                CRICOS Code
                            </dt>

                            <dd class=" font-semibold text-neutral-900">
                                {{ $course['key_information']['cricos'] }}

                            </dd>
                        </div>


                        <div class="flex justify-between gap-4 py-2.5">
                            <dt class=" text-neutral-500">
                                Duration
                            </dt>

                            <dd class="font-semibold text-neutral-900">
                                {{ $course['key_information']['duration'] }}
                            </dd>
                        </div>


                        <div class="flex justify-between gap-4 py-2.5">
                            <dt class=" text-neutral-500">
                                Total Units
                            </dt>

                            <dd class="text-right font-semibold text-neutral-900">
                                {{ $course['key_information']['total_units'] }}
                                ({{ $course['course_structure']['core_units']['total'] }} Core /
                                {{ $course['course_structure']['elective_units']['total'] }} Elective)
                            </dd>
                        </div>


                        <div class="flex justify-between gap-4 py-2.5">
                            <dt class=" text-neutral-500">
                                Mode of Study
                            </dt>

                            <dd class="text-right font-semibold text-neutral-900">
                                {{ $course['key_information']['mode_of_study'] }}
                            </dd>
                        </div>


                        <div class="flex justify-between gap-4 py-2.5">
                            <dt class=" text-neutral-500">
                                Study Discipline
                            </dt>

                            <dd class="font-semibold text-brand-500">
                                {{ $course['category_name'] }}
                            </dd>
                        </div>


                        <div class="flex justify-between gap-4 py-2.5">
                            <dt class=" text-neutral-500">
                                Location
                            </dt>

                            <dd class="text-right font-semibold text-neutral-900">
                                Parramatta, Sydney
                            </dd>
                        </div>


                        <div class="flex justify-between gap-4 py-2.5">
                            <dt class=" text-neutral-500">
                                Installment Plan
                            </dt>

                            <dd class="font-semibold text-success-600">
                                Quarterly Available
                            </dd>
                        </div>

                    </dl>


                    <div
                        class="mt-4 border border-brand-200 bg-brand-25 p-3  text-[10px] leading-5 rounded-2xl text-brand-700">
                        ★ Scholarships available for eligible onshore international applications.
                    </div>

                </div>

            </aside>

        </div>

    </main>
@endsection
