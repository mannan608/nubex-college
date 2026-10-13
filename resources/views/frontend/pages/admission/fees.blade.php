@extends('frontend.layouts.app')

@section('title', 'Student Resources')

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

        <div class="relative mx-auto w-full max-w-7xl px-4 py-10 sm:px-6 sm:py-12 lg:px-8 lg:py-16">

            <div class="max-w-4xl">

                {{-- Eyebrow --}}
                <span
                    class="animate-hero-left hero-stagger-1 mb-3 inline-flex items-center rounded-full border border-secondary-200 bg-secondary-50 px-3 py-1.5 font-mono text-[10px] font-semibold uppercase tracking-[0.16em] text-secondary-700 sm:text-xs">
                    fees
                </span>

                {{-- Heading --}}
                <h1
                    class="animate-hero-left hero-stagger-2 max-w-4xl font-heading text-3xl font-bold leading-[1.08] tracking-tight text-neutral-950 sm:text-4xl md:text-5xl lg:text-6xl xl:text-[4.25rem]">
                    Fees and charges
                </h1>

                {{-- Description --}}
                <p
                    class="animate-hero-left hero-stagger-3 mt-5 max-w-2xl text-sm leading-6 text-neutral-600 sm:text-base sm:leading-7 lg:text-lg lg:leading-8">
                    A clear schedule of UTI tuition, administrative and student service fees. All fees are in Australian
                    Dollars (AUD).
                </p>

                {{-- CTA --}}
                <div class="animate-hero-left hero-stagger-4 mt-7 flex flex-col gap-3 sm:mt-8 sm:flex-row sm:flex-wrap sm:items-center">

                    <a href="#apply"
                        class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-brand-500 px-5 py-3.5 font-heading text-sm font-bold uppercase tracking-wide text-white shadow-theme-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-600 hover:shadow-theme-md active:translate-y-0 sm:w-auto">
                        <span>Contact for Admission</span>

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
    <section class="w-full bg-slate-50/60">
        <div class="mx-auto w-full max-w-7xl px-4 py-10 sm:px-6 sm:py-12 lg:px-8 lg:py-16">

            <div class="space-y-10 sm:space-y-12 lg:space-y-16">

                {{-- =========================================================
                COURSE FEES INTRO
            ========================================================== --}}
                <section class="reveal">
                    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

                        <div class="grid grid-cols-1 lg:grid-cols-12">

                            {{-- Main Content --}}
                            <div
                                class="relative overflow-hidden bg-gradient-to-br from-brand-50 via-white to-white p-6 sm:p-8 lg:col-span-8 lg:p-10 xl:p-12">

                                {{-- Decorative --}}
                                <div
                                    class="pointer-events-none absolute -right-16 -top-16 h-40 w-40 rounded-full bg-brand-100/50 blur-2xl">
                                </div>

                                <div class="relative">

                                    <div class="mb-4 flex items-center gap-3">
                                        <span class="h-px w-8 bg-brand-500"></span>

                                        <span
                                            class="text-[11px] font-bold uppercase tracking-[0.2em] text-brand-600 sm:text-xs">
                                            Fees & Payments
                                        </span>
                                    </div>

                                    <h2
                                        class="font-display text-2xl font-bold leading-tight tracking-tight text-slate-900 sm:text-3xl lg:text-4xl">
                                        Course Fees
                                    </h2>

                                    <p class="mt-4 max-w-2xl text-sm leading-6 text-slate-600 sm:text-base sm:leading-7">
                                        For tuition fee details for each course, please
                                        <a href="{{ route('contact') }}"
                                            class="font-semibold text-brand-600 underline decoration-brand-200 underline-offset-4 transition hover:text-brand-700">
                                            contact us
                                        </a>.
                                    </p>

                                    <div class="mt-7 sm:mt-8">
                                        <a href="#"
                                            class="inline-flex min-h-11 items-center justify-center gap-2 rounded-xl bg-brand-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:-translate-y-0.5 hover:bg-brand-700 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2">
                                            Contact Admissions

                                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="1.8">
                                                <path d="M5 12h14" />
                                                <path d="m13 6 6 6-6 6" />
                                            </svg>
                                        </a>
                                    </div>

                                </div>
                            </div>


                            {{-- Side Information --}}
                            <div
                                class="border-t border-slate-200 bg-white p-6 sm:p-8 lg:col-span-4 lg:border-l lg:border-t-0 lg:p-10">

                                <div class="flex h-full flex-col justify-center">

                                    <div
                                        class="flex h-12 w-12 items-center justify-center rounded-2xl bg-brand-50 text-brand-600 ring-1 ring-brand-100">
                                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.6">
                                            <path d="M6 2h12v20H6z" />
                                            <path d="M9 6h6" />
                                            <path d="M9 10h6" />
                                            <path d="M9 14h2" />
                                            <path d="M13 14h2" />
                                            <path d="M9 18h2" />
                                            <path d="M13 18h2" />
                                        </svg>
                                    </div>

                                    <h3 class="mt-5 text-lg font-bold text-slate-900">
                                        Tuition Fee Information
                                    </h3>

                                    <p class="mt-2 text-sm leading-6 text-slate-600">
                                        Course tuition fees may vary depending on the
                                        selected course and study requirements.
                                    </p>

                                </div>

                            </div>

                        </div>
                    </div>
                </section>


                {{-- =========================================================
                SCHEDULE OF FEES
            ========================================================== --}}
                <section>

                    {{-- Section Header --}}
                    <div class="reveal mb-8 sm:mb-10 lg:mb-12">

                        <div class="mb-4 flex items-center gap-3">
                            <span class="h-px w-8 bg-brand-500"></span>

                            <span class="text-[11px] font-bold uppercase tracking-[0.2em] text-brand-600 sm:text-xs">
                                Fees & Charges
                            </span>
                        </div>

                        <div class="flex flex-col gap-5 lg:flex-row lg:items-end lg:justify-between">

                            <div class="max-w-3xl">

                                <h2
                                    class="font-display text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl lg:text-4xl">
                                    Schedule of Fees &amp; Charges
                                </h2>

                                <p class="mt-3 max-w-2xl text-sm leading-6 text-slate-500 sm:text-base">
                                    Please review the applicable fees and charges below.
                                    All amounts are listed in Australian Dollars.
                                </p>

                            </div>

                            <div
                                class="inline-flex w-fit items-center gap-2 rounded-full border border-brand-100 bg-brand-50 px-4 py-2.5 text-xs font-semibold text-brand-700">
                                <svg class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8"
                                    viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="9"></circle>
                                    <path stroke-linecap="round" d="M12 7v5l3 2"></path>
                                </svg>

                                All amounts in Australian Dollars (AUD)
                            </div>

                        </div>

                        <div class="mt-7 h-px bg-gradient-to-r from-brand-200 via-slate-200 to-transparent">
                        </div>

                    </div>


                    {{-- Fee Content --}}
                    <div class="space-y-8 sm:space-y-10 lg:space-y-12">

                        {{-- =================================================
                        ENROLMENT + REASSESSMENT
                    ================================================== --}}
                        <div class="stagger grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-8">

                            {{-- Enrolment --}}
                            <div
                                class="reveal-scale overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:border-brand-200 hover:shadow-lg">

                                {{-- Card Header --}}
                                <div
                                    class="border-b border-slate-100 bg-gradient-to-r from-brand-50 to-white px-5 py-5 sm:px-6">

                                    <div class="flex items-center gap-4">

                                        <div
                                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white text-brand-600 shadow-sm ring-1 ring-brand-100">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.75"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                            </svg>
                                        </div>

                                        <div class="min-w-0">
                                            <h3 class="font-display text-base font-bold text-slate-900 sm:text-lg">
                                                Enrolment &amp; Administration
                                            </h3>

                                            <p class="mt-1 text-xs leading-5 text-slate-500">
                                                Standard enrolment and administrative charges
                                            </p>
                                        </div>

                                    </div>

                                </div>

                                {{-- Items --}}
                                <div class="divide-y divide-slate-100">

                                    <div
                                        class="flex items-center justify-between gap-4 px-5 py-4 transition-colors hover:bg-slate-50 sm:px-6">
                                        <span class="text-sm leading-5 text-slate-600">
                                            New Enrolment / Re-Enrolment
                                        </span>

                                        <span
                                            class="shrink-0 rounded-lg bg-brand-50 px-3 py-1.5 text-sm font-bold text-brand-700 ring-1 ring-brand-100">
                                            $200
                                        </span>
                                    </div>

                                    <div
                                        class="flex items-center justify-between gap-4 px-5 py-4 transition-colors hover:bg-slate-50 sm:px-6">
                                        <span class="text-sm text-slate-600">
                                            Admin Fee
                                        </span>

                                        <span
                                            class="shrink-0 rounded-lg bg-brand-50 px-3 py-1.5 text-sm font-bold text-brand-700 ring-1 ring-brand-100">
                                            $100
                                        </span>
                                    </div>

                                    <div
                                        class="flex items-center justify-between gap-4 px-5 py-4 transition-colors hover:bg-slate-50 sm:px-6">
                                        <span class="text-sm text-slate-600">
                                            Deferment of Enrolment
                                        </span>

                                        <span
                                            class="shrink-0 rounded-lg bg-brand-50 px-3 py-1.5 text-sm font-bold text-brand-700 ring-1 ring-brand-100">
                                            $300
                                        </span>
                                    </div>

                                    <div
                                        class="flex items-center justify-between gap-4 px-5 py-4 transition-colors hover:bg-slate-50 sm:px-6">
                                        <span class="text-sm text-slate-600">
                                            Change of CoE
                                        </span>

                                        <span
                                            class="shrink-0 rounded-lg bg-brand-50 px-3 py-1.5 text-sm font-bold text-brand-700 ring-1 ring-brand-100">
                                            $220
                                        </span>
                                    </div>

                                </div>
                            </div>


                            {{-- Reassessment --}}
                            <div
                                class="reveal-scale overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:border-brand-200 hover:shadow-lg">

                                <div
                                    class="border-b border-slate-100 bg-gradient-to-r from-brand-50 to-white px-5 py-5 sm:px-6">

                                    <div class="flex items-center gap-4">

                                        <div
                                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white text-brand-600 shadow-sm ring-1 ring-brand-100">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor"
                                                stroke-width="1.75" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>

                                        <div class="min-w-0">
                                            <h3 class="font-display text-base font-bold text-slate-900 sm:text-lg">
                                                 Reassessment &amp; Late Fees
                                            </h3>

                                            <p class="mt-1 text-xs leading-5 text-slate-500">
                                                Applicable charges per unit
                                            </p>
                                        </div>

                                    </div>

                                </div>

                                <div class="divide-y divide-slate-100">

                                    <div
                                        class="flex items-center justify-between gap-4 px-5 py-4 transition-colors hover:bg-slate-50 sm:px-6">
                                        <span class="text-sm text-slate-600">
                                            Theory Reassessment
                                        </span>

                                        <span
                                            class="shrink-0 rounded-lg bg-brand-50 px-3 py-1.5 text-sm font-bold text-brand-700 ring-1 ring-brand-100">
                                            $350
                                        </span>
                                    </div>

                                    <div
                                        class="flex items-center justify-between gap-4 px-5 py-4 transition-colors hover:bg-slate-50 sm:px-6">
                                        <span class="text-sm text-slate-600">
                                            Practical Reassessment
                                        </span>

                                        <span
                                            class="shrink-0 rounded-lg bg-brand-50 px-3 py-1.5 text-sm font-bold text-brand-700 ring-1 ring-brand-100">
                                            $350
                                        </span>
                                    </div>

                                    <div
                                        class="flex items-center justify-between gap-4 px-5 py-4 transition-colors hover:bg-amber-50/40 sm:px-6">
                                        <span class="text-sm text-slate-600">
                                            Late Fee Penalty
                                        </span>

                                        <span
                                            class="shrink-0 rounded-lg bg-amber-50 px-3 py-1.5 text-sm font-bold text-amber-700 ring-1 ring-amber-100">
                                            $200 / week
                                        </span>
                                    </div>

                                </div>
                            </div>

                        </div>


                        {{-- =================================================
                        GENERAL DOCUMENTS
                    ================================================== --}}
                        <div class="reveal">

                            <div class="mb-5 flex items-center gap-3 sm:mb-6">

                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-600 ring-1 ring-brand-100">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.75"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>

                                <div>
                                    <h3 class="font-display text-lg font-bold text-slate-900 sm:text-xl">
                                        General Documents
                                    </h3>

                                    <p class="mt-0.5 text-xs text-slate-500 sm:text-sm">
                                        Document and student service charges
                                    </p>
                                </div>

                            </div>


                            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                                <div class="overflow-x-auto">
                                    <table class="w-full min-w-[620px] text-sm">

                                        <thead class="border-b border-slate-200 bg-slate-50">
                                            <tr>
                                                <th
                                                    class="px-5 py-3.5 text-left text-xs font-bold uppercase tracking-wider text-slate-500 sm:px-6">
                                                    Service
                                                </th>

                                                <th
                                                    class="px-5 py-3.5 text-right text-xs font-bold uppercase tracking-wider text-slate-500 sm:px-6">
                                                    Fee
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody class="divide-y divide-slate-100">

                                            @php
                                                $documentFees = [
                                                    [
                                                        'name' => 'Holiday Reference / Leave Letter / Enrolment Letter',
                                                        'fee' => '$80',
                                                    ],
                                                    ['name' => 'Attendance Letter', 'fee' => '$180'],
                                                    ['name' => 'Invitation Letter for Family Members', 'fee' => '$100'],
                                                    ['name' => 'Support Letter', 'fee' => '$100'],
                                                    ['name' => 'Late Fee Penalty per week', 'fee' => '$200'],
                                                    ['name' => 'Certificate / Transcript Reissue', 'fee' => '$220'],
                                                    ['name' => 'Student ID Card', 'fee' => '$50'],
                                                    ['name' => 'Reissue ID Card', 'fee' => '$70'],
                                                    ['name' => 'RPL or Course Credit Fee per unit', 'fee' => '$550'],
                                                    ['name' => 'Transcript', 'fee' => '$180'],
                                                ];
                                            @endphp

                                            @foreach ($documentFees as $item)
                                                <tr class="group transition-colors hover:bg-brand-50/40">

                                                    <td class="px-5 py-4 leading-6 text-slate-600 sm:px-6">
                                                        {{ $item['name'] }}
                                                    </td>

                                                    <td class="whitespace-nowrap px-5 py-4 text-right sm:px-6">
                                                        <span
                                                            class="inline-flex rounded-lg bg-brand-50 px-3 py-1.5 font-bold text-brand-700 ring-1 ring-brand-100 transition group-hover:bg-brand-100">
                                                            {{ $item['fee'] }}
                                                        </span>
                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                </div>

                            </div>

                        </div>


                        {{-- =================================================
                        PRINTING + REFUND
                    ================================================== --}}
                        <div class="stagger grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-8">

                            {{-- Printing --}}


                            <div
                                class="reveal-scale overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:border-brand-200 hover:shadow-lg">

                                {{-- Card Header --}}
                                <div
                                    class="border-b border-slate-100 bg-gradient-to-r from-brand-50 to-white px-5 py-5 sm:px-6">

                                    <div class="flex items-center gap-4">

                                        <div
                                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white text-brand-600 shadow-sm ring-1 ring-brand-100">
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.7"
                                                viewBox="0 0 24 24">
                                                <path d="M6 9V2h12v7" />
                                                <path
                                                    d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                                                <path d="M6 14h12v8H6z" />
                                            </svg>
                                        </div>

                                        <div class="min-w-0">
                                            <h3 class="font-display text-base font-bold text-slate-900 sm:text-lg">
                                                Printing / Photocopying
                                            </h3>

                                            <p class="mt-1 text-xs leading-5 text-slate-500">
                                                Standard enrolment and administrative charges
                                            </p>
                                        </div>

                                    </div>

                                </div>

                                {{-- Items --}}
                                <div class="divide-y divide-slate-100">

                                    <div
                                        class="flex items-center justify-between gap-4 px-5 py-4 transition-colors hover:bg-slate-50 sm:px-6">
                                        <span class="text-sm leading-5 text-slate-600">
                                            Black &amp; White
                                        </span>

                                        <span
                                            class="shrink-0 rounded-lg bg-brand-50 px-3 py-1.5 text-sm font-bold text-brand-700 ring-1 ring-brand-100">
                                            $0.30 / page
                                        </span>
                                    </div>

                                    <div
                                        class="flex items-center justify-between gap-4 px-5 py-4 transition-colors hover:bg-slate-50 sm:px-6">
                                        <span class="text-sm leading-5 text-slate-600">
                                            Colour
                                        </span>

                                        <span
                                            class="shrink-0 rounded-lg bg-brand-50 px-3 py-1.5 text-sm font-bold text-brand-700 ring-1 ring-brand-100">
                                            $0.75 / page
                                        </span>
                                    </div>



                                </div>
                            </div>

                            {{-- Refund Fees --}}

                            <div class="reveal-scale">


                                <div
                                    class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:border-brand-200 hover:shadow-lg">

                                    {{-- Card Header --}}
                                    <div
                                        class="border-b border-slate-100 bg-gradient-to-r from-brand-50 to-white px-5 py-5 sm:px-6">

                                        <div class="flex items-center gap-4">

                                            <div
                                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white text-brand-600 shadow-sm ring-1 ring-brand-100">

                                                <svg class="h-5 w-5" fill="none" stroke="currentColor"
                                                    stroke-width="1.7" viewBox="0 0 24 24">
                                                    <path d="M20 12a8 8 0 1 1-8-8" />
                                                    <path d="M20 4v6h-6" />
                                                    <path d="M12 8v8" />
                                                    <path d="M9 13h6" />
                                                </svg>

                                            </div>

                                            <div class="min-w-0">

                                                <h3 class="font-display text-base font-bold text-slate-900 sm:text-lg">
                                                    Refund Fees
                                                </h3>

                                                <p class="mt-1 text-xs leading-5 text-slate-500">
                                                    Applicable charges and fees for refund processing
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                    {{-- Items --}}
                                    <div class="divide-y divide-slate-100">

                                        {{-- Refund Processing Fee --}}
                                        <div
                                            class="flex items-center justify-between gap-4 px-5 py-4 transition-colors hover:bg-slate-50 sm:px-6">

                                            <span class="text-sm leading-5 text-slate-600">
                                                Refund Processing Fee
                                            </span>

                                            <span
                                                class="shrink-0 rounded-lg bg-brand-50 px-3 py-1.5 text-sm font-bold text-brand-700 ring-1 ring-brand-100">
                                                $200
                                            </span>

                                        </div>

                                        {{-- Non-refundable Admin Fee --}}
                                        <div
                                            class="flex items-center justify-between gap-4 px-5 py-4 transition-colors hover:bg-slate-50 sm:px-6">

                                            <span class="text-sm leading-5 text-slate-600">
                                                Non-refundable Admin Fee
                                            </span>

                                            <span
                                                class="shrink-0 rounded-lg bg-brand-50 px-3 py-1.5 text-sm font-bold text-brand-700 ring-1 ring-brand-100">
                                                $100
                                            </span>

                                        </div>

                                        {{-- Non-refundable Enrolment Fee --}}
                                        <div
                                            class="flex items-center justify-between gap-4 px-5 py-4 transition-colors hover:bg-slate-50 sm:px-6">

                                            <span class="text-sm leading-5 text-slate-600">
                                                Non-refundable Enrolment Fee
                                            </span>

                                            <span
                                                class="shrink-0 rounded-lg bg-brand-50 px-3 py-1.5 text-sm font-bold text-brand-700 ring-1 ring-brand-100">
                                                $200
                                            </span>

                                        </div>

                                        {{-- Non-refundable Bank Fee --}}
                                        <div
                                            class="flex items-center justify-between gap-4 px-5 py-4 transition-colors hover:bg-slate-50 sm:px-6">

                                            <span class="text-sm leading-5 text-slate-600">
                                                Non-refundable Bank Fee
                                            </span>

                                            <span
                                                class="shrink-0 rounded-lg bg-brand-50 px-3 py-1.5 text-sm font-bold text-brand-700 ring-1 ring-brand-100">
                                                $50
                                            </span>

                                        </div>

                                    </div>

                                </div>

                            </div>



                        </div>

                    </div>

                </section>


                {{-- =========================================================
                BANK ACCOUNT DETAILS
            ========================================================== --}}
                <section class="reveal">

                    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

                        {{-- Header --}}
                        <div
                            class="border-b border-slate-200 bg-gradient-to-br from-brand-50 via-white to-white px-6 py-7 sm:px-8 sm:py-8 lg:px-10">

                            <div class="flex flex-col gap-5 sm:flex-row sm:items-center">

                                <div
                                    class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-brand-600 text-white shadow-sm">
                                    <svg class="h-7 w-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.6">
                                        <rect width="20" height="14" x="2" y="5" rx="2" />
                                        <path d="M2 10h20" />
                                        <path d="M6 15h2" />
                                        <path d="M10 15h2" />
                                    </svg>
                                </div>

                                <div>
                                    <div class="mb-1.5">
                                        <span class="text-[11px] font-bold uppercase tracking-[0.2em] text-brand-600">
                                            Payments
                                        </span>
                                    </div>

                                    <h2 class="font-display text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                                        UTI Bank Account Details
                                    </h2>

                                    <p class="mt-2 text-sm leading-6 text-slate-600">
                                        Bank account information for payments and transfers.
                                    </p>
                                </div>

                            </div>

                        </div>


                        {{-- Bank Information --}}
                        <div class="p-6 sm:p-8 lg:p-10">

                            <div class="mb-5 flex items-center justify-between gap-4">

                                <h3 class="text-base font-bold text-slate-900 sm:text-lg">
                                    Bank Account Information
                                </h3>

                                <span
                                    class="hidden rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold text-slate-600 sm:inline-flex">
                                    Payment Details
                                </span>

                            </div>


                            <div class="overflow-hidden rounded-2xl border border-slate-200">

                                <div class="overflow-x-auto">

                                    <table class="w-full min-w-[620px] text-sm">

                                        <tbody class="divide-y divide-slate-100">

                                            <tr class="bg-slate-50/70">
                                                <td class="w-1/2 px-5 py-4 font-medium text-slate-500 sm:px-6">
                                                    Account Name
                                                </td>

                                                <td class="px-5 py-4 text-right font-semibold text-slate-900 sm:px-6">
                                                    Nubex College Pty Ltd
                                                </td>
                                            </tr>

                                            <tr class="bg-white">
                                                <td class="px-5 py-4 font-medium text-slate-500 sm:px-6">
                                                    Account Number
                                                </td>

                                                <td
                                                    class="whitespace-nowrap px-5 py-4 text-right font-semibold text-slate-900 sm:px-6">
                                                    1350 5212
                                                </td>
                                            </tr>

                                            <tr class="bg-slate-50/70">
                                                <td class="px-5 py-4 font-medium text-slate-500 sm:px-6">
                                                    Branch Number (BSB)
                                                </td>

                                                <td
                                                    class="whitespace-nowrap px-5 py-4 text-right font-semibold text-slate-900 sm:px-6">
                                                    067 873
                                                </td>
                                            </tr>

                                            <tr class="bg-white">
                                                <td class="px-5 py-4 font-medium text-slate-500 sm:px-6">
                                                    Bank Name
                                                </td>

                                                <td class="px-5 py-4 text-right font-semibold text-slate-900 sm:px-6">
                                                    Commonwealth Bank of Australia
                                                </td>
                                            </tr>

                                            <tr class="bg-slate-50/70">
                                                <td class="px-5 py-4 font-medium text-slate-500 sm:px-6">
                                                    Branch
                                                </td>

                                                <td class="px-5 py-4 text-right font-semibold text-slate-900 sm:px-6">
                                                    Sydney
                                                </td>
                                            </tr>

                                        </tbody>

                                    </table>

                                </div>

                            </div>


                            {{-- Surcharge Notice --}}
                            <div class="mt-5 flex items-start gap-3 rounded-2xl border border-amber-200 bg-amber-50 p-4">

                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-amber-600" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.7">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M12 8v4" />
                                    <path d="M12 16h.01" />
                                </svg>

                                <p class="text-xs leading-5 text-amber-800 sm:text-sm">
                                    A surcharge of 2.5% to 4% applies on all credit card transactions.
                                </p>

                            </div>

                        </div>

                    </div>

                </section>

            </div>

        </div>
    </section>

@endsection