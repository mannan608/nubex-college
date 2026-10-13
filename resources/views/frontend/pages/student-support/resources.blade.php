@extends('frontend.layouts.app')

@section('title', 'Student Resources')

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
                    Resources
                </span>

                {{-- Heading --}}
                <h1
                    class="max-w-4xl font-heading text-3xl font-bold leading-[1.08] tracking-tight text-neutral-950 sm:text-4xl md:text-5xl lg:text-6xl xl:text-[4.25rem]">
                    Policies, forms and student documents
                </h1>

                {{-- Description --}}
                <p
                    class="mt-5 max-w-2xl text-sm leading-6 text-neutral-600 sm:text-base sm:leading-7 lg:text-lg lg:leading-8">
                    Preview and download every UTI policy, form and compliance document in one hub.
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

    
{{-- =========================================================
    RESOURCES PAGE
========================================================= --}}

<div
    x-data="{
        activeTab: 'handbooks',

        init() {
            const sections = document.querySelectorAll('[data-resource-section]');

            const observer = new IntersectionObserver(
                (entries) => {
                    const visible = entries
                        .filter(entry => entry.isIntersecting)
                        .sort((a, b) => b.intersectionRatio - a.intersectionRatio);

                    if (visible.length) {
                        this.activeTab = visible[0].target.dataset.resourceSection;
                    }
                },
                {
                    rootMargin: '-160px 0px -55% 0px',
                    threshold: [0.1, 0.25, 0.5, 0.75]
                }
            );

            sections.forEach(section => observer.observe(section));
        },

        scrollTo(id) {
            const element = document.getElementById(id);

            if (!element) return;

            const offset = 150;
            const top = element.getBoundingClientRect().top + window.scrollY - offset;

            window.scrollTo({
                top,
                behavior: 'smooth'
            });

            this.activeTab = id;
        }
    }"
    class="bg-neutral-25"
>

    {{-- =========================================================
        STICKY RESOURCE TABS
    ========================================================== --}}
    <div
        class="sticky  z-40 bg-white/95  backdrop-blur-md top-18 sm:top-20"
    >
        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8 border-y border-neutral-200">

            {{-- Mobile / Desktop Scrollable Navigation --}}
            <nav
                class="-mx-4 flex overflow-x-auto px-4 scrollbar-none sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8" aria-label="Resource categories">

                <div class="flex min-w-max items-center gap-1 py-2 sm:gap-2 sm:py-3">

                    {{-- Handbooks --}}
                    <button
                        type="button"
                        @click="scrollTo('handbooks')"
                        :class="activeTab === 'handbooks'
                            ? 'bg-brand-600 text-white shadow-sm'
                            : 'text-neutral-600 hover:bg-brand-50 hover:text-brand-700'"
                        class="inline-flex h-10 shrink-0 items-center gap-2 rounded-xl px-3.5 text-xs font-semibold transition-all duration-200 sm:h-11 sm:px-4 sm:text-sm"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"/>
                        </svg>

                        <span>Handbooks & Calendars</span>
                    </button>


                    {{-- Enrolment --}}
                    <button
                        type="button"
                        @click="scrollTo('enrolment')"
                        :class="activeTab === 'enrolment'
                            ? 'bg-brand-600 text-white shadow-sm'
                            : 'text-neutral-600 hover:bg-brand-50 hover:text-brand-700'"
                        class="inline-flex h-10 shrink-0 items-center gap-2 rounded-xl px-3.5 text-xs font-semibold transition-all duration-200 sm:h-11 sm:px-4 sm:text-sm"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M19 8v6"/>
                            <path d="M22 11h-6"/>
                        </svg>

                        <span>Enrolment</span>
                    </button>


                    {{-- Academic --}}
                    <button
                        type="button"
                        @click="scrollTo('academic')"
                        :class="activeTab === 'academic'
                            ? 'bg-brand-600 text-white shadow-sm'
                            : 'text-neutral-600 hover:bg-brand-50 hover:text-brand-700'"
                        class="inline-flex h-10 shrink-0 items-center gap-2 rounded-xl px-3.5 text-xs font-semibold transition-all duration-200 sm:h-11 sm:px-4 sm:text-sm"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"/>
                        </svg>

                        <span>Academic Forms</span>
                    </button>


                    {{-- Administrative --}}
                    <button
                        type="button"
                        @click="scrollTo('administrative')"
                        :class="activeTab === 'administrative'
                            ? 'bg-brand-600 text-white shadow-sm'
                            : 'text-neutral-600 hover:bg-brand-50 hover:text-brand-700'"
                        class="inline-flex h-10 shrink-0 items-center gap-2 rounded-xl px-3.5 text-xs font-semibold transition-all duration-200 sm:h-11 sm:px-4 sm:text-sm"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <path d="M12 2v20"/>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                        </svg>

                        <span>Administrative</span>
                    </button>


                    {{-- Feedback --}}
                    <button
                        type="button"
                        @click="scrollTo('feedback')"
                        :class="activeTab === 'feedback'
                            ? 'bg-brand-600 text-white shadow-sm'
                            : 'text-neutral-600 hover:bg-brand-50 hover:text-brand-700'"
                        class="inline-flex h-10 shrink-0 items-center gap-2 rounded-xl px-3.5 text-xs font-semibold transition-all duration-200 sm:h-11 sm:px-4 sm:text-sm"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/>
                            <path d="M8 10h8"/>
                            <path d="M8 14h5"/>
                        </svg>

                        <span>Feedback</span>
                    </button>


                    {{-- Policies --}}
                    <button
                        type="button"
                        @click="scrollTo('policies')"
                        :class="activeTab === 'policies'
                            ? 'bg-brand-600 text-white shadow-sm'
                            : 'text-neutral-600 hover:bg-brand-50 hover:text-brand-700'"
                        class="inline-flex h-10 shrink-0 items-center gap-2 rounded-xl px-3.5 text-xs font-semibold transition-all duration-200 sm:h-11 sm:px-4 sm:text-sm"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                        >
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/>
                            <path d="m9 12 2 2 4-4"/>
                        </svg>

                        <span>Policies</span>
                    </button>

                </div>
            </nav>
        </div>
    </div>


    {{-- =========================================================
        RESOURCE CONTENT
    ========================================================== --}}
    <div class="py-8 sm:py-10 lg:py-12">

        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="space-y-16 sm:space-y-20 lg:space-y-24">


                {{-- =====================================================
                    HANDbooks & CALENDARS
                ====================================================== --}}
                <section
                    id="handbooks"
                    data-resource-section="handbooks"
                    class="scroll-mt-40"
                >

                    <div class="mb-7 sm:mb-9">

                        <div class="mb-2 flex items-center gap-3">
                            <span class="h-px w-8 bg-brand-500"></span>

                            <span class="text-xs font-semibold uppercase tracking-[0.2em] text-brand-600">
                                Resources
                            </span>
                        </div>

                        <h2 class="font-display text-2xl font-semibold tracking-tight text-neutral-900 sm:text-3xl lg:text-4xl">
                            Handbooks & Calendars
                        </h2>

                        <p class="mt-2 max-w-2xl text-sm leading-6 text-neutral-600 sm:text-base">
                            Important academic calendars, course information and student resources.
                        </p>

                    </div>


                    @php
                        $handbooks = [
                            [
                                'title' => 'Academic Calendar 2026–2029',
                                'subtitle' => 'Academic calendar',
                                'url' => '/assets/academic-calendar-2026-2029-CpEGpGpT.pdf',
                            ],
                            [
                                'title' => 'Current Course Delivery — 2026',
                                'subtitle' => 'Course information',
                                'url' => '/assets/current-course-delivery-2026-DiEgGHDy.pdf',
                            ],
                            [
                                'title' => 'Intake Dates 2026–2029',
                                'subtitle' => 'Important dates',
                                'url' => '/assets/intake-dates-2026-2029-CjzJqq0h.pdf',
                            ],
                            [
                                'title' => 'Sample Timetable',
                                'subtitle' => 'Course schedule',
                                'url' => '/assets/sample-timetable-B1smQ9ta.pdf',
                            ],
                            [
                                'title' => 'Student Handbook — June 2026',
                                'subtitle' => 'Student guide',
                                'url' => '/assets/student-handbook-B75JdbSn.pdf',
                            ],
                            [
                                'title' => 'UTI Course Booklet',
                                'subtitle' => 'Course guide',
                                'url' => '/assets/uti-course-booklet-D3veCx0T.pdf',
                            ],
                        ];
                    @endphp


                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 lg:gap-5">

                        @foreach ($handbooks as $resource)

                            <article
                                class="group flex h-full flex-col rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg sm:p-6"
                            >

                                <div class="flex items-start gap-4">

                                    <div
                                        class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-600 transition-all duration-300 group-hover:bg-brand-500 group-hover:text-white"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.6"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        >
                                            <path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"/>
                                            <path d="M14 2v5a1 1 0 0 0 1 1h5"/>
                                            <path d="M10 9H8"/>
                                            <path d="M16 13H8"/>
                                            <path d="M16 17H8"/>
                                        </svg>
                                    </div>


                                    <div class="min-w-0 flex-1">

                                        <h3 class="text-sm font-semibold leading-6 text-neutral-900 sm:text-base">
                                            {{ $resource['title'] }}
                                        </h3>

                                        <p class="mt-1 text-xs leading-5 text-neutral-500">
                                            {{ $resource['subtitle'] }}
                                        </p>

                                    </div>

                                </div>


                                <div class="mt-6 grid grid-cols-2 gap-2">

                                    <a
                                        href="{{ $resource['url'] }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex h-10 items-center justify-center gap-2 rounded-xl border border-neutral-200 bg-white px-3 text-xs font-semibold text-neutral-700 transition hover:border-brand-200 hover:bg-brand-50 hover:text-brand-700"
                                    >
                                        View
                                    </a>

                                    <a
                                        href="{{ $resource['url'] }}"
                                        download
                                        class="inline-flex h-10 items-center justify-center gap-2 rounded-xl bg-brand-600 px-3 text-xs font-semibold text-white transition hover:bg-brand-700 hover:shadow-md"
                                    >
                                        Download
                                    </a>

                                </div>

                            </article>

                        @endforeach

                    </div>

                </section>


                {{-- =====================================================
                    ENROLMENT & ORIENTATION
                ====================================================== --}}
                <section
                    id="enrolment"
                    data-resource-section="enrolment"
                    class="scroll-mt-40"
                >

                    <div class="mb-7 sm:mb-9">

                        <div class="mb-2 flex items-center gap-3">
                            <span class="h-px w-8 bg-brand-500"></span>

                            <span class="text-xs font-semibold uppercase tracking-[0.2em] text-brand-600">
                                Getting Started
                            </span>
                        </div>

                        <h2 class="font-display text-2xl font-semibold tracking-tight text-neutral-900 sm:text-3xl lg:text-4xl">
                            Enrolment & Orientation
                        </h2>

                        <p class="mt-2 max-w-2xl text-sm leading-6 text-neutral-600 sm:text-base">
                            Forms and information to help you complete your enrolment and get started.
                        </p>

                    </div>


                    @php
                        $enrolmentForms = [
                            [
                                'title' => 'Application for Enrolment (All Courses)',
                                'subtitle' => 'Enrolment form',
                                'url' => '/assets/application-for-enrolment-all-courses-CWsPyTfh.pdf',
                            ],
                            [
                                'title' => 'Orientation Form',
                                'subtitle' => 'Orientation',
                                'url' => '/assets/orientation-form-DNYTg5R0.pdf',
                            ],
                            [
                                'title' => 'Application to Change Personal Details',
                                'subtitle' => 'Student details',
                                'url' => '/assets/change-personal-details-CVJATuvK.pdf',
                            ],
                        ];
                    @endphp


                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 lg:gap-5">

                        @foreach ($enrolmentForms as $resource)

                            <article class="group flex h-full flex-col rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg sm:p-6">

                                <div class="flex items-start gap-4">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-600 transition-all duration-300 group-hover:bg-brand-500 group-hover:text-white">

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.6"
                                        >
                                            <path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"/>
                                            <path d="M14 2v5a1 1 0 0 0 1 1h5"/>
                                            <path d="M10 9H8"/>
                                            <path d="M16 13H8"/>
                                            <path d="M16 17H8"/>
                                        </svg>

                                    </div>

                                    <div class="min-w-0 flex-1">

                                        <h3 class="text-sm font-semibold leading-6 text-neutral-900 sm:text-base">
                                            {{ $resource['title'] }}
                                        </h3>

                                        <p class="mt-1 text-xs text-neutral-500">
                                            {{ $resource['subtitle'] }}
                                        </p>

                                    </div>

                                </div>


                                <div class="mt-6 grid grid-cols-2 gap-2">

                                    <a
                                        href="{{ $resource['url'] }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex h-10 items-center justify-center rounded-xl border border-neutral-200 bg-white px-3 text-xs font-semibold text-neutral-700 transition hover:border-brand-200 hover:bg-brand-50 hover:text-brand-700"
                                    >
                                        View
                                    </a>

                                    <a
                                        href="{{ $resource['url'] }}"
                                        download
                                        class="inline-flex h-10 items-center justify-center rounded-xl bg-brand-600 px-3 text-xs font-semibold text-white transition hover:bg-brand-700"
                                    >
                                        Download
                                    </a>

                                </div>

                            </article>

                        @endforeach

                    </div>

                </section>


                {{-- =====================================================
                    ACADEMIC FORMS
                ====================================================== --}}
                <section
                    id="academic"
                    data-resource-section="academic"
                    class="scroll-mt-40"
                >

                    <div class="mb-7 sm:mb-9">

                        <div class="mb-2 flex items-center gap-3">
                            <span class="h-px w-8 bg-brand-500"></span>

                            <span class="text-xs font-semibold uppercase tracking-[0.2em] text-brand-600">
                                Academic
                            </span>
                        </div>

                        <h2 class="font-display text-2xl font-semibold tracking-tight text-neutral-900 sm:text-3xl lg:text-4xl">
                            Academic Forms
                        </h2>

                        <p class="mt-2 max-w-2xl text-sm leading-6 text-neutral-600 sm:text-base">
                            Applications and forms related to your academic journey and study arrangements.
                        </p>

                    </div>


                    @php
                        $academicForms = [
                            [
                                'title' => 'Application for Credit Transfer',
                                'subtitle' => 'Academic application',
                                'url' => '/assets/application-for-credit-transfer-DUQFHiVC.pdf',
                            ],
                            [
                                'title' => 'Application for Change of Course',
                                'subtitle' => 'Course application',
                                'url' => '/assets/application-for-change-of-course-Bofi5vAa.pdf',
                            ],
                            [
                                'title' => 'Application to Defer Enrolment / Study',
                                'subtitle' => 'Study arrangement',
                                'url' => '/assets/application-to-defer-enrolment-study-C49ZrzUm.pdf',
                            ],
                            [
                                'title' => 'Application for Withdrawal',
                                'subtitle' => 'Student application',
                                'url' => '/assets/application-for-withdrawal-Cbdu9Fsz.pdf',
                            ],
                            [
                                'title' => 'Application for Leave',
                                'subtitle' => 'Leave application',
                                'url' => '/assets/application-for-leave-BwIt1itm.pdf',
                            ],
                            [
                                'title' => 'Appeals Lodgement Form',
                                'subtitle' => 'Appeals',
                                'url' => '/assets/appeals-lodgement-form-IfN1ii0K.pdf',
                            ],
                        ];
                    @endphp


                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 lg:gap-5">

                        @foreach ($academicForms as $resource)

                            <article class="group flex h-full flex-col rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg sm:p-6">

                                <div class="flex items-start gap-4">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-600 transition-all duration-300 group-hover:bg-brand-500 group-hover:text-white">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                                            <path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"/>
                                            <path d="M14 2v5a1 1 0 0 0 1 1h5"/>
                                            <path d="M10 9H8"/>
                                            <path d="M16 13H8"/>
                                            <path d="M16 17H8"/>
                                        </svg>

                                    </div>

                                    <div class="min-w-0 flex-1">

                                        <h3 class="text-sm font-semibold leading-6 text-neutral-900 sm:text-base">
                                            {{ $resource['title'] }}
                                        </h3>

                                        <p class="mt-1 text-xs text-neutral-500">
                                            {{ $resource['subtitle'] }}
                                        </p>

                                    </div>

                                </div>


                                <div class="mt-6 grid grid-cols-2 gap-2">

                                    <a
                                        href="{{ $resource['url'] }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex h-10 items-center justify-center rounded-xl border border-neutral-200 bg-white px-3 text-xs font-semibold text-neutral-700 transition hover:border-brand-200 hover:bg-brand-50 hover:text-brand-700"
                                    >
                                        View
                                    </a>

                                    <a
                                        href="{{ $resource['url'] }}"
                                        download
                                        class="inline-flex h-10 items-center justify-center rounded-xl bg-brand-600 px-3 text-xs font-semibold text-white transition hover:bg-brand-700"
                                    >
                                        Download
                                    </a>

                                </div>

                            </article>

                        @endforeach

                    </div>

                </section>


                {{-- =====================================================
                    ADMINISTRATIVE FORMS
                ====================================================== --}}
                <section
                    id="administrative"
                    data-resource-section="administrative"
                    class="scroll-mt-40"
                >

                    <div class="mb-7 sm:mb-9">

                        <div class="mb-2 flex items-center gap-3">
                            <span class="h-px w-8 bg-brand-500"></span>

                            <span class="text-xs font-semibold uppercase tracking-[0.2em] text-brand-600">
                                Administration
                            </span>
                        </div>

                        <h2 class="font-display text-2xl font-semibold tracking-tight text-neutral-900 sm:text-3xl lg:text-4xl">
                            Administrative Forms
                        </h2>

                        <p class="mt-2 max-w-2xl text-sm leading-6 text-neutral-600 sm:text-base">
                            Forms for common administrative and financial requests.
                        </p>

                    </div>


                    @php
                        $adminForms = [
                            [
                                'title' => 'Refund Request Form',
                                'subtitle' => 'Financial request',
                                'url' => '/assets/refund-request-form-B18h1Z1J.pdf',
                            ],
                            [
                                'title' => 'Document Request Form',
                                'subtitle' => 'Document request',
                                'url' => '/assets/document-request-form-BU4T8Rd2.pdf',
                            ],
                            [
                                'title' => 'No Dues Form',
                                'subtitle' => 'Clearance',
                                'url' => '/assets/no-dues-form-DtLJHNS1.pdf',
                            ],
                            [
                                'title' => 'Direct Debit Authority Form',
                                'subtitle' => 'Payment authorisation',
                                'url' => '/assets/direct-debit-authority-form-DR0jQWNo.pdf',
                            ],
                        ];
                    @endphp


                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 lg:gap-5">

                        @foreach ($adminForms as $resource)

                            <article class="group flex h-full flex-col rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg sm:p-6">

                                <div class="flex items-start gap-4">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-600 transition-all duration-300 group-hover:bg-brand-500 group-hover:text-white">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                                            <path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"/>
                                            <path d="M14 2v5a1 1 0 0 0 1 1h5"/>
                                            <path d="M10 9H8"/>
                                            <path d="M16 13H8"/>
                                            <path d="M16 17H8"/>
                                        </svg>

                                    </div>

                                    <div class="min-w-0 flex-1">

                                        <h3 class="text-sm font-semibold leading-6 text-neutral-900 sm:text-base">
                                            {{ $resource['title'] }}
                                        </h3>

                                        <p class="mt-1 text-xs text-neutral-500">
                                            {{ $resource['subtitle'] }}
                                        </p>

                                    </div>

                                </div>


                                <div class="mt-6 grid grid-cols-2 gap-2">

                                    <a
                                        href="{{ $resource['url'] }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex h-10 items-center justify-center rounded-xl border border-neutral-200 bg-white px-3 text-xs font-semibold text-neutral-700 transition hover:border-brand-200 hover:bg-brand-50 hover:text-brand-700"
                                    >
                                        View
                                    </a>

                                    <a
                                        href="{{ $resource['url'] }}"
                                        download
                                        class="inline-flex h-10 items-center justify-center rounded-xl bg-brand-600 px-3 text-xs font-semibold text-white transition hover:bg-brand-700"
                                    >
                                        Download
                                    </a>

                                </div>

                            </article>

                        @endforeach

                    </div>

                </section>


                {{-- =====================================================
                    FEEDBACK & COMPLAINTS
                ====================================================== --}}
                <section
                    id="feedback"
                    data-resource-section="feedback"
                    class="scroll-mt-40"
                >

                    <div class="mb-7 sm:mb-9">

                        <div class="mb-2 flex items-center gap-3">
                            <span class="h-px w-8 bg-brand-500"></span>

                            <span class="text-xs font-semibold uppercase tracking-[0.2em] text-brand-600">
                                Feedback
                            </span>
                        </div>

                        <h2 class="font-display text-2xl font-semibold tracking-tight text-neutral-900 sm:text-3xl lg:text-4xl">
                            Feedback & Complaints
                        </h2>

                        <p class="mt-2 max-w-2xl text-sm leading-6 text-neutral-600 sm:text-base">
                            Your feedback helps us improve the student experience and our services.
                        </p>

                    </div>


                    @php
                        $feedbackForms = [
                            [
                                'title' => 'Class Feedback Form',
                                'subtitle' => 'Class feedback',
                                'url' => '/assets/class-feedback-form-CqkK_Niv.pdf',
                            ],
                            [
                                'title' => 'Agent — Student Feedback Form',
                                'subtitle' => 'Student feedback',
                                'url' => '/assets/agent-student-feedback-form-D1-qOO1l.pdf',
                            ],
                            [
                                'title' => 'Complaint Lodgement Form',
                                'subtitle' => 'Formal complaint',
                                'url' => '/assets/complaint-lodgement-form-DBLpH92U.pdf',
                            ],
                        ];
                    @endphp


                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 lg:gap-5">

                        @foreach ($feedbackForms as $resource)

                            <article class="group flex h-full flex-col rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg sm:p-6">

                                <div class="flex items-start gap-4">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-600 transition-all duration-300 group-hover:bg-brand-500 group-hover:text-white">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                                            <path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/>
                                            <path d="M8 10h8"/>
                                            <path d="M8 14h5"/>
                                        </svg>

                                    </div>

                                    <div class="min-w-0 flex-1">

                                        <h3 class="text-sm font-semibold leading-6 text-neutral-900 sm:text-base">
                                            {{ $resource['title'] }}
                                        </h3>

                                        <p class="mt-1 text-xs text-neutral-500">
                                            {{ $resource['subtitle'] }}
                                        </p>

                                    </div>

                                </div>


                                <div class="mt-6 grid grid-cols-2 gap-2">

                                    <a
                                        href="{{ $resource['url'] }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex h-10 items-center justify-center rounded-xl border border-neutral-200 bg-white px-3 text-xs font-semibold text-neutral-700 transition hover:border-brand-200 hover:bg-brand-50 hover:text-brand-700"
                                    >
                                        View
                                    </a>

                                    <a
                                        href="{{ $resource['url'] }}"
                                        download
                                        class="inline-flex h-10 items-center justify-center rounded-xl bg-brand-600 px-3 text-xs font-semibold text-white transition hover:bg-brand-700"
                                    >
                                        Download
                                    </a>

                                </div>

                            </article>

                        @endforeach

                    </div>

                </section>


                {{-- =====================================================
                    POLICIES
                ====================================================== --}}
                <section
                    id="policies"
                    data-resource-section="policies"
                    class="scroll-mt-40"
                >

                    <div class="mb-7 sm:mb-9">

                        <div class="mb-2 flex items-center gap-3">
                            <span class="h-px w-8 bg-brand-500"></span>

                            <span class="text-xs font-semibold uppercase tracking-[0.2em] text-brand-600">
                                Governance
                            </span>
                        </div>

                        <h2 class="font-display text-2xl font-semibold tracking-tight text-neutral-900 sm:text-3xl lg:text-4xl">
                            Policies
                        </h2>

                        <p class="mt-2 max-w-2xl text-sm leading-6 text-neutral-600 sm:text-base">
                            Important policies and guidelines that support a safe, fair and respectful learning environment.
                        </p>

                    </div>


                    @php
                        $policies = [
                            [
                                'title' => 'Academic Misconduct Policy',
                                'url' => '/assets/academic-misconduct-policy-CoFtjojE.pdf',
                            ],
                            [
                                'title' => 'Anti-Racism and Anti-Religious Vilification Policy',
                                'url' => '/assets/anti-racism-and-anti-religious-vilification-policy-DxYvC4np.pdf',
                            ],
                            [
                                'title' => 'Attendance Policy',
                                'url' => '/assets/attendance-policy-D0Rl4V2T.pdf',
                            ],
                            [
                                'title' => 'Attendance and Course Progress Policy',
                                'url' => '/assets/attendance-and-course-progress-policy-CDpECHyw.pdf',
                            ],
                            [
                                'title' => 'Critical Incident Policy',
                                'url' => '/assets/critical-incident-policy-DAQnuoJR.pdf',
                            ],
                            [
                                'title' => 'Code of Conduct',
                                'url' => '/assets/code-of-conduct-CswQeJLL.pdf',
                            ],
                            [
                                'title' => 'Compassionate and Compelling Circumstances Policy',
                                'url' => '/assets/compassionate-and-compelling-circumstances-policy-B0pEn6Mt.pdf',
                            ],
                            [
                                'title' => 'Complaints and Appeals Policy',
                                'url' => '/assets/complaints-and-appeals-policy-CNqJKnFf.pdf',
                            ],
                            [
                                'title' => 'Deferral, Suspension and Cancellation Policy',
                                'url' => '/assets/deferral-suspension-cancellation-policy-BuPtjdWV.pdf',
                            ],
                            [
                                'title' => 'Fit and Proper Persons Policy',
                                'url' => '/assets/fit-and-proper-persons-policy-d9M9h2XR.pdf',
                            ],
                            [
                                'title' => 'Privacy and Confidentiality Policy',
                                'url' => '/assets/privacy-and-confidentiality-policy-Dv-RNVl5.pdf',
                            ],
                            [
                                'title' => 'RPL and Credit Transfer Policy',
                                'url' => '/assets/rpl-and-credit-transfer-policy-B4fARUXu.pdf',
                            ],
                            [
                                'title' => 'Student Support Policy',
                                'url' => '/assets/student-support-policy-C2uHeUEH.pdf',
                            ],
                            [
                                'title' => 'Training and Assessment Strategy Policy',
                                'url' => '/assets/training-and-assessment-strategy-policy-BZAgIhEQ.pdf',
                            ],
                            [
                                'title' => 'Work Health and Safety Policy',
                                'url' => '/assets/work-health-and-safety-policy-Az5FOnRQ.pdf',
                            ],
                        ];
                    @endphp


                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 lg:gap-5">

                        @foreach ($policies as $policy)

                            <article class="group flex h-full flex-col rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-200 hover:shadow-theme-lg sm:p-6">

                                <div class="flex items-start gap-4">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-600 transition-all duration-300 group-hover:bg-brand-500 group-hover:text-white">

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.6"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        >
                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/>
                                            <path d="m9 12 2 2 4-4"/>
                                        </svg>

                                    </div>


                                    <div class="min-w-0 flex-1">

                                        <h3 class="text-sm font-semibold leading-6 text-neutral-900 sm:text-base">
                                            {{ $policy['title'] }}
                                        </h3>

                                        <p class="mt-1 text-xs leading-5 text-neutral-500">
                                            UTI policy document
                                        </p>

                                    </div>

                                </div>


                                <div class="mt-6 grid grid-cols-2 gap-2">

                                    <a
                                        href="{{ $policy['url'] }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex h-10 items-center justify-center gap-2 rounded-xl border border-neutral-200 bg-white px-3 text-xs font-semibold text-neutral-700 transition-all duration-200 hover:border-brand-200 hover:bg-brand-50 hover:text-brand-700"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.6"
                                        >
                                            <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
                                            <circle cx="12" cy="12" r="3"/>
                                        </svg>

                                        View
                                    </a>


                                    <a
                                        href="{{ $policy['url'] }}"
                                        download
                                        class="inline-flex h-10 items-center justify-center gap-2 rounded-xl bg-brand-600 px-3 text-xs font-semibold text-white shadow-sm transition-all duration-200 hover:bg-brand-700 hover:shadow-md"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1.6"
                                        >
                                            <path d="M12 15V3"/>
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                            <path d="m7 10 5 5 5-5"/>
                                        </svg>

                                        Download
                                    </a>

                                </div>

                            </article>

                        @endforeach

                    </div>

                </section>

            </div>

        </div>

    </div>

</div>

@endsection
