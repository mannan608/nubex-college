@extends('frontend.layouts.app')

@section('title', 'International Students Guide')

@section('content')


<main class="mx-auto w-full max-w-7xl px-4 py-8 sm:px-6 sm:py-10 lg:px-8 lg:py-12">

    {{-- =========================================================
        HERO / OVERVIEW
    ========================================================== --}}
    <section id="overview" class="relative overflow-hidden rounded-3xl border border-slate-800 bg-gradient-to-br from-brand-900 via-slate-900 to-slate-950 px-5 py-8 text-white shadow-2xl sm:px-8 sm:py-10 lg:px-12 lg:py-14 animate-hero-left">

        {{-- Background Decorations --}}
        <div
            class="pointer-events-none absolute -right-24 -top-24 h-72 w-72 rounded-full bg-brand-500/10 blur-3xl sm:h-96 sm:w-96">
        </div>

        <div
            class="pointer-events-none absolute -bottom-24 -left-24 h-72 w-72 rounded-full bg-blue-500/10 blur-3xl sm:h-96 sm:w-96">
        </div>

        <div class="relative z-10 max-w-3xl space-y-5 sm:space-y-6">

            {{-- Badge --}}
            <div
                class="inline-flex max-w-full items-center gap-2 rounded-full border border-brand-400/30 bg-brand-500/20 px-3 py-1.5 text-[11px] font-semibold uppercase tracking-wider text-brand-300 sm:text-xs">
                <i class="fa-solid fa-shield-halved shrink-0"></i>
                <span>International Student Visa Requirement</span>
            </div>

            {{-- Heading --}}
            <h1 class="text-3xl font-extrabold leading-tight tracking-tight sm:text-4xl md:text-5xl">
                Genuine Student (GS)
                <br class="hidden sm:block">
                <span
                    class="bg-gradient-to-r from-brand-300 via-sky-300 to-white bg-clip-text text-transparent">
                    Statement Guide
                </span>
            </h1>

            {{-- Description --}}
            <p class="max-w-2xl text-sm leading-7 text-slate-300 sm:text-base sm:leading-8 lg:text-lg">
                Everything you need to draft a compelling GS statement for your Australian Student Visa
                (Subclass 500) — from structure and tone to the documents that back it up.
            </p>

        </div>
    </section>


    {{-- =========================================================
        INTRODUCTION + PILLARS
    ========================================================== --}}
    <section class="mt-12 grid grid-cols-1 items-start gap-6 lg:mt-16 lg:grid-cols-3 lg:gap-8">

        {{-- Introduction --}}
        <div class="lg:col-span-2">
            <div
                class="space-y-5 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-7 lg:p-8">

                <div
                    class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-brand-600 sm:text-sm">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>Fundamental Concept</span>
                </div>

                <h2 class="text-2xl font-bold leading-tight text-slate-900 sm:text-3xl">
                    What is a Genuine Student Statement?
                </h2>

                <div class="space-y-4 text-sm leading-7 text-slate-600 sm:text-base">
                    <p>
                        The <strong class="font-semibold text-slate-800">Genuine Student (GS) requirement</strong>
                        is how the Australian Department of Home Affairs assesses whether you genuinely intend to
                        stay in Australia temporarily for study. It replaced the former Genuine Temporary Entrant
                        (GTE) requirement in 2024.
                    </p>

                    <p>
                        Your GS statement is a written response — usually 300–500 words — that explains your
                        circumstances, intentions and plans. It is one of the most important documents in your visa
                        application, because a weak or generic statement is a leading cause of visa refusal.
                    </p>
                </div>

                {{-- Important Note --}}
                <div
                    class="flex items-start gap-3 rounded-xl border border-emerald-200 bg-emerald-50 p-4 text-sm leading-6 text-emerald-900">

                    <i class="fa-solid fa-shield-check mt-0.5 shrink-0 text-emerald-600"></i>

                    <div>
                        <strong class="mb-0.5 block font-semibold">
                            Good to know:
                        </strong>

                        <span>
                            There is no official template. The best statements are personal, specific and backed by
                            evidence. Avoid copied paragraphs from the internet — case officers recognise them
                            immediately.
                        </span>
                    </div>
                </div>

            </div>
        </div>


        {{-- Three Pillars --}}
        <div
            class="rounded-2xl border border-slate-800 bg-gradient-to-b from-slate-900 to-brand-950 p-5 text-white shadow-xl sm:p-7 lg:p-8">

            <div class="flex items-center gap-2 border-b border-slate-800 pb-4">
                <i class="fa-solid fa-cubes text-brand-400"></i>

                <h3 class="text-lg font-bold">
                    The 3 Pillars of GS
                </h3>
            </div>

            <div class="mt-6 space-y-5">

                {{-- Pillar 1 --}}
                <div class="flex items-start gap-3">
                    <div
                        class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-brand-500/20 text-xs font-bold text-brand-400">
                        1
                    </div>

                    <div class="min-w-0">
                        <strong class="block text-sm font-semibold text-slate-100">
                            Ties to Home Country
                        </strong>

                        <p class="mt-1 text-xs leading-5 text-slate-400">
                            Family, economic, assets, and social obligations.
                        </p>
                    </div>
                </div>

                {{-- Pillar 2 --}}
                <div class="flex items-start gap-3">
                    <div
                        class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-brand-500/20 text-xs font-bold text-brand-400">
                        2
                    </div>

                    <div class="min-w-0">
                        <strong class="block text-sm font-semibold text-slate-100">
                            Financial & Local Context
                        </strong>

                        <p class="mt-1 text-xs leading-5 text-slate-400">
                            Proof of funding, living budget, and course value.
                        </p>
                    </div>
                </div>

                {{-- Pillar 3 --}}
                <div class="flex items-start gap-3">
                    <div
                        class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-brand-500/20 text-xs font-bold text-brand-400">
                        3
                    </div>

                    <div class="min-w-0">
                        <strong class="block text-sm font-semibold text-slate-100">
                            Value of Course to Future
                        </strong>

                        <p class="mt-1 text-xs leading-5 text-slate-400">
                            Expected career growth, salary boost, local job market.
                        </p>
                    </div>
                </div>

            </div>

            <div class="mt-6 border-t border-slate-800 pt-4">
                <p class="flex items-center gap-2 text-xs text-slate-400">
                    <i class="fa-solid fa-circle-check text-emerald-400"></i>
                    Word count limit: Max 150 words per question field.
                </p>
            </div>

        </div>

    </section>


    {{-- =========================================================
        THREE PILLARS DETAILS
    ========================================================== --}}
    <section id="pillars" class="mt-16 space-y-8 lg:mt-20">

        <div class="mx-auto max-w-2xl space-y-2 text-center">
            <span
                class="text-xs font-bold uppercase tracking-widest text-brand-600">
                Detailed Breakdown
            </span>

            <h2 class="text-2xl font-extrabold leading-tight text-slate-900 sm:text-3xl">
                Address Each Pillar with Detail & Evidence
            </h2>

            <p class="text-sm leading-6 text-slate-500">
                Provide concrete proof for every argument you present in your application.
            </p>
        </div>


        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 lg:gap-6">

            {{-- Card 1 --}}
            <div
                class="group flex h-full flex-col justify-between rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg sm:p-6">

                <div class="space-y-5">

                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-xl text-brand-600 transition-transform duration-300 group-hover:scale-110">
                        <i class="fa-solid fa-house-user"></i>
                    </div>

                    <h3 class="text-xl font-bold leading-tight text-slate-900">
                        1. Ties to Home Country
                    </h3>

                    <ul class="space-y-3 text-sm leading-6 text-slate-600">

                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check mt-1 shrink-0 text-xs text-brand-500"></i>
                            <span>Family members you support or who depend on you financially.</span>
                        </li>

                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check mt-1 shrink-0 text-xs text-brand-500"></i>
                            <span>Property, assets, family business, or other financial interests in your home
                                country.</span>
                        </li>

                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check mt-1 shrink-0 text-xs text-brand-500"></i>
                            <span>Current employment and a clear job or career pathway to return to after study.</span>
                        </li>

                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check mt-1 shrink-0 text-xs text-brand-500"></i>
                            <span>Community memberships, professional associations, or volunteer
                                responsibilities.</span>
                        </li>

                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check mt-1 shrink-0 text-xs text-brand-500"></i>
                            <span>Explain how these personal, professional, and financial ties support your intention
                                to return home.</span>
                        </li>

                    </ul>
                </div>

                <div
                    class="mt-6 flex items-start gap-2 border-t border-slate-100 pt-4 text-xs font-semibold leading-5 text-brand-600">
                    <i class="fa-solid fa-paperclip mt-0.5 shrink-0"></i>
                    <span>Key Proof: Deeds, job letters, affidavits</span>
                </div>

            </div>


            {{-- Card 2 --}}
            <div
                class="group flex h-full flex-col justify-between rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg sm:p-6">

                <div class="space-y-5">

                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-sky-50 text-xl text-sky-600 transition-transform duration-300 group-hover:scale-110">
                        <i class="fa-solid fa-earth-oceania"></i>
                    </div>

                    <h3 class="text-xl font-bold leading-tight text-slate-900">
                        2. Financial Circumstances
                    </h3>

                    <ul class="space-y-3 text-sm leading-6 text-slate-600">

                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check mt-1 shrink-0 text-xs text-sky-500"></i>
                            <span>Why you chose Australia instead of other study destinations.</span>
                        </li>

                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check mt-1 shrink-0 text-xs text-sky-500"></i>
                            <span>Why you selected this specific city, institution, and campus location.</span>
                        </li>

                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check mt-1 shrink-0 text-xs text-sky-500"></i>
                            <span>How you will support yourself financially through savings, family support,
                                scholarships, or other legitimate funding.</span>
                        </li>

                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check mt-1 shrink-0 text-xs text-sky-500"></i>
                            <span>Your planned accommodation and living arrangements while studying in Australia.</span>
                        </li>

                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check mt-1 shrink-0 text-xs text-sky-500"></i>
                            <span>Any family members or friends already in Australia and how their presence relates to
                                your study plans.</span>
                        </li>

                    </ul>
                </div>

                <div
                    class="mt-6 flex items-start gap-2 border-t border-slate-100 pt-4 text-xs font-semibold leading-5 text-sky-600">
                    <i class="fa-solid fa-paperclip mt-0.5 shrink-0"></i>
                    <span>Key Proof: Bank slips, tax returns, loan letters</span>
                </div>

            </div>


            {{-- Card 3 --}}
            <div
                class="group flex h-full flex-col justify-between rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg sm:p-6 md:col-span-2 lg:col-span-1">

                <div class="space-y-5">

                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-50 text-xl text-emerald-600 transition-transform duration-300 group-hover:scale-110">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>

                    <h3 class="text-xl font-bold leading-tight text-slate-900">
                        3. Course Value & Career
                    </h3>

                    <ul class="space-y-3 text-sm leading-6 text-slate-600">

                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check mt-1 shrink-0 text-xs text-emerald-500"></i>
                            <span>Explain why this qualification is necessary for your career goals.</span>
                        </li>

                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check mt-1 shrink-0 text-xs text-emerald-500"></i>
                            <span>Identify the specific skills or knowledge gap the course will address in your
                                current profile.</span>
                        </li>

                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check mt-1 shrink-0 text-xs text-emerald-500"></i>
                            <span>Explain whether the qualification is recognised, relevant, or in demand in your home
                                country.</span>
                        </li>

                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check mt-1 shrink-0 text-xs text-emerald-500"></i>
                            <span>Describe your specific job title, career pathway, or business plans after
                                graduation.</span>
                        </li>

                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check mt-1 shrink-0 text-xs text-emerald-500"></i>
                            <span>Explain how the qualification can improve your professional role, salary prospects,
                                or business opportunities.</span>
                        </li>

                    </ul>
                </div>

                <div
                    class="mt-6 flex items-start gap-2 border-t border-slate-100 pt-4 text-xs font-semibold leading-5 text-emerald-600">
                    <i class="fa-solid fa-paperclip mt-0.5 shrink-0"></i>
                    <span>Key Proof: Job market statistics, salary reports</span>
                </div>

            </div>

        </div>
    </section>


    {{-- =========================================================
        WRITING TIPS
    ========================================================== --}}
    <section id="writing-tips" class="mt-16 space-y-7 lg:mt-20">

        <div class="border-b border-slate-200 pb-5">
            <h2 class="text-2xl font-bold text-slate-900 sm:text-3xl">
                Writing Tips That Make a Difference
            </h2>

            <p class="mt-2 text-sm leading-6 text-slate-500">
                Practical guidelines to elevate your writing quality and clarity.
            </p>
        </div>


        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:gap-6">

            {{-- Tip 01 --}}
            <div
                class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all hover:shadow-md sm:p-6">

                <div class="flex items-center justify-between gap-4">
                    <span
                        class="inline-flex items-center gap-1.5 rounded-full bg-emerald-100 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                        <i class="fa-solid fa-circle-check"></i>
                        DO
                    </span>

                    <span class="text-xs text-slate-400">
                        Tip 01
                    </span>
                </div>

                <div class="mt-5">
                    <h3 class="text-lg font-bold text-slate-900">
                        Be specific, not generic
                    </h3>

                    <p class="mt-2 text-sm leading-7 text-slate-600">
                        Write about your exact course, campus and career goal. Avoid phrases like
                        "Australia has a good education system" — explain why this course at this
                        provider is the right choice for you.
                    </p>
                </div>
            </div>


            {{-- Tip 02 --}}
            <div
                class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all hover:shadow-md sm:p-6">

                <div class="flex items-center justify-between gap-4">
                    <span
                        class="inline-flex items-center gap-1.5 rounded-full bg-emerald-100 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                        <i class="fa-solid fa-circle-check"></i>
                        DO
                    </span>

                    <span class="text-xs text-slate-400">
                        Tip 02
                    </span>
                </div>

                <div class="mt-5">
                    <h3 class="text-lg font-bold text-slate-900">
                        Use evidence, not promises
                    </h3>

                    <p class="mt-2 text-sm leading-7 text-slate-600">
                        Instead of saying "I will return home", show why you will return:
                        a family business to inherit, a job offer contingent on the qualification,
                        or property and other responsibilities you need to manage.
                    </p>
                </div>
            </div>


            {{-- Tip 03 --}}
            <div
                class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all hover:shadow-md sm:p-6">

                <div class="flex items-center justify-between gap-4">
                    <span
                        class="inline-flex items-center gap-1.5 rounded-full bg-emerald-100 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                        <i class="fa-solid fa-circle-check"></i>
                        DO
                    </span>

                    <span class="text-xs text-slate-400">
                        Tip 03
                    </span>
                </div>

                <div class="mt-5">
                    <h3 class="text-lg font-bold text-slate-900">
                        Keep the tone honest and personal
                    </h3>

                    <p class="mt-2 text-sm leading-7 text-slate-600">
                        Case officers read many statements. A sincere, well-structured personal
                        story is more useful than overly polished corporate language. Keep your
                        explanation genuine and relevant to your circumstances.
                    </p>
                </div>
            </div>


            {{-- Tip 04 --}}
            <div
                class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all hover:shadow-md sm:p-6">

                <div class="flex items-center justify-between gap-4">
                    <span
                        class="inline-flex items-center gap-1.5 rounded-full bg-rose-100 px-2.5 py-1 text-xs font-semibold text-rose-700">
                        <i class="fa-solid fa-circle-xmark"></i>
                        DON'T
                    </span>

                    <span class="text-xs text-slate-400">
                        Tip 04
                    </span>
                </div>

                <div class="mt-5">
                    <h3 class="text-lg font-bold text-slate-900">
                        Address gaps and risks openly
                    </h3>

                    <p class="mt-2 text-sm leading-7 text-slate-600">
                        If you have a gap in your studies, employment history, or a previous
                        visa refusal, explain the circumstances clearly and honestly rather
                        than leaving important information unexplained.
                    </p>
                </div>
            </div>


            {{-- Tip 05 --}}
            <div
                class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all hover:shadow-md sm:p-6">

                <div class="flex items-center justify-between gap-4">
                    <span
                        class="inline-flex items-center gap-1.5 rounded-full bg-emerald-100 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                        <i class="fa-solid fa-circle-check"></i>
                        DO
                    </span>

                    <span class="text-xs text-slate-400">
                        Tip 05
                    </span>
                </div>

                <div class="mt-5">
                    <h3 class="text-lg font-bold text-slate-900">
                        Link your course to your home-country market
                    </h3>

                    <p class="mt-2 text-sm leading-7 text-slate-600">
                        Show that you have researched the employment market in your home country.
                        Where appropriate, mention relevant employers, realistic salary ranges,
                        industry demand, or business opportunities that make the qualification
                        valuable after graduation.
                    </p>
                </div>
            </div>


            {{-- Tip 06 --}}
            <div
                class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition-all hover:shadow-md sm:p-6">

                <div class="flex items-center justify-between gap-4">
                    <span
                        class="inline-flex items-center gap-1.5 rounded-full bg-emerald-100 px-2.5 py-1 text-xs font-semibold text-emerald-700">
                        <i class="fa-solid fa-circle-check"></i>
                        DO
                    </span>

                    <span class="text-xs text-slate-400">
                        Tip 06
                    </span>
                </div>

                <div class="mt-5">
                    <h3 class="text-lg font-bold text-slate-900">
                        Proofread and format cleanly
                    </h3>

                    <p class="mt-2 text-sm leading-7 text-slate-600">
                        Use clear headings, short paragraphs and correct grammar. A well-presented
                        statement makes your information easier to understand and demonstrates
                        that you have prepared your application carefully.
                    </p>
                </div>
            </div>

        </div>
    </section>


    {{-- =========================================================
        DOCUMENT CHECKLIST
    ========================================================== --}}
    <section id="checklist"
        class="mt-16 space-y-7 rounded-3xl border border-slate-800 bg-slate-900 p-5 text-white shadow-2xl sm:p-8 lg:mt-20 lg:p-10">

        <div class="border-b border-slate-800 pb-6">

            <span class="text-xs font-bold uppercase tracking-widest text-brand-400">
                Document Readiness
            </span>

            <h2 class="mt-1 text-2xl font-extrabold leading-tight sm:text-3xl">
                Information & Evidence Checklist
            </h2>

            <p class="mt-2 text-sm leading-6 text-slate-400">
                Check the documents you have prepared before finalizing your visa application.
            </p>

        </div>


        <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 sm:gap-4">

            {{-- Checklist Item --}}
            <label
                class="group flex cursor-pointer items-start gap-3 rounded-xl border border-slate-700/70 bg-slate-800/50 p-4 transition-all hover:border-brand-500/50 hover:bg-slate-800">

                <span
                    class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full border border-slate-600 text-xs text-transparent transition-all group-hover:border-brand-500 group-hover:text-brand-400">
                    <i class="fa-solid fa-check"></i>
                </span>

                <input type="checkbox" class="peer sr-only">

                <div class="min-w-0">
                    <span class="block text-sm font-medium text-slate-200">
                        Personal Identity Documents
                    </span>

                    <span class="mt-1 block text-xs leading-5 text-slate-400">
                        Valid Passport, National ID card, Birth Certificate.
                    </span>
                </div>
            </label>


            <label
                class="group flex cursor-pointer items-start gap-3 rounded-xl border border-slate-700/70 bg-slate-800/50 p-4 transition-all hover:border-brand-500/50 hover:bg-slate-800">

                <span
                    class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full border border-slate-600 text-xs text-transparent transition-all group-hover:border-brand-500 group-hover:text-brand-400 peer-checked:border-brand-500 peer-checked:bg-brand-500 peer-checked:text-white">
                    <i class="fa-solid fa-check"></i>
                </span>

                <input type="checkbox" class="peer sr-only">

                <div class="min-w-0">
                    <span class="block text-sm font-medium text-slate-200">
                        Academic Transcripts & Certificates
                    </span>

                    <span class="mt-1 block text-xs leading-5 text-slate-400">
                        High school, bachelor degree certificates and marksheets.
                    </span>
                </div>
            </label>


            <label
                class="group flex cursor-pointer items-start gap-3 rounded-xl border border-slate-700/70 bg-slate-800/50 p-4 transition-all hover:border-brand-500/50 hover:bg-slate-800">

                <span
                    class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full border border-slate-600 text-xs text-transparent transition-all peer-checked:border-brand-500 peer-checked:bg-brand-500 peer-checked:text-white">
                    <i class="fa-solid fa-check"></i>
                </span>

                <input type="checkbox" class="peer sr-only">

                <div class="min-w-0">
                    <span class="block text-sm font-medium text-slate-200">
                        English Test Results
                    </span>

                    <span class="mt-1 block text-xs leading-5 text-slate-400">
                        IELTS, PTE Academic, or TOEFL official scoreboard.
                    </span>
                </div>
            </label>


            <label
                class="group flex cursor-pointer items-start gap-3 rounded-xl border border-slate-700/70 bg-slate-800/50 p-4 transition-all hover:border-brand-500/50 hover:bg-slate-800">

                <span
                    class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full border border-slate-600 text-xs text-transparent transition-all peer-checked:border-brand-500 peer-checked:bg-brand-500 peer-checked:text-white">
                    <i class="fa-solid fa-check"></i>
                </span>

                <input type="checkbox" class="peer sr-only">

                <div class="min-w-0">
                    <span class="block text-sm font-medium text-slate-200">
                        Financial Capacity Proof
                    </span>

                    <span class="mt-1 block text-xs leading-5 text-slate-400">
                        Bank statement (3–6 months), official loan sanction letter.
                    </span>
                </div>
            </label>


            <label
                class="group flex cursor-pointer items-start gap-3 rounded-xl border border-slate-700/70 bg-slate-800/50 p-4 transition-all hover:border-brand-500/50 hover:bg-slate-800">

                <span
                    class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full border border-slate-600 text-xs text-transparent transition-all peer-checked:border-brand-500 peer-checked:bg-brand-500 peer-checked:text-white">
                    <i class="fa-solid fa-check"></i>
                </span>

                <input type="checkbox" class="peer sr-only">

                <div class="min-w-0">
                    <span class="block text-sm font-medium text-slate-200">
                        Employment History Evidence
                    </span>

                    <span class="mt-1 block text-xs leading-5 text-slate-400">
                        Work experience letters, payslips, tax assessments.
                    </span>
                </div>
            </label>


            <label
                class="group flex cursor-pointer items-start gap-3 rounded-xl border border-slate-700/70 bg-slate-800/50 p-4 transition-all hover:border-brand-500/50 hover:bg-slate-800">

                <span
                    class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full border border-slate-600 text-xs text-transparent transition-all peer-checked:border-brand-500 peer-checked:bg-brand-500 peer-checked:text-white">
                    <i class="fa-solid fa-check"></i>
                </span>

                <input type="checkbox" class="peer sr-only">

                <div class="min-w-0">
                    <span class="block text-sm font-medium text-slate-200">
                        Home Ties Proof
                    </span>

                    <span class="mt-1 block text-xs leading-5 text-slate-400">
                        Property deeds, family affidavits, business registration.
                    </span>
                </div>
            </label>


            <label
                class="group flex cursor-pointer items-start gap-3 rounded-xl border border-slate-700/70 bg-slate-800/50 p-4 transition-all hover:border-brand-500/50 hover:bg-slate-800">

                <span
                    class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full border border-slate-600 text-xs text-transparent transition-all peer-checked:border-brand-500 peer-checked:bg-brand-500 peer-checked:text-white">
                    <i class="fa-solid fa-check"></i>
                </span>

                <input type="checkbox" class="peer sr-only">

                <div class="min-w-0">
                    <span class="block text-sm font-medium text-slate-200">
                        CoE (Confirmation of Enrolment)
                    </span>

                    <span class="mt-1 block text-xs leading-5 text-slate-400">
                        Issued by your registered Australian education provider.
                    </span>
                </div>
            </label>


            <label
                class="group flex cursor-pointer items-start gap-3 rounded-xl border border-slate-700/70 bg-slate-800/50 p-4 transition-all hover:border-brand-500/50 hover:bg-slate-800">

                <span
                    class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full border border-slate-600 text-xs text-transparent transition-all peer-checked:border-brand-500 peer-checked:bg-brand-500 peer-checked:text-white">
                    <i class="fa-solid fa-check"></i>
                </span>

                <input type="checkbox" class="peer sr-only">

                <div class="min-w-0">
                    <span class="block text-sm font-medium text-slate-200">
                        Statement Breakdown Draft
                    </span>

                    <span class="mt-1 block text-xs leading-5 text-slate-400">
                        Draft responses adhering strictly to the 150-word limit per section.
                    </span>
                </div>
            </label>

        </div>
    </section>


    {{-- =========================================================
        STEP BY STEP ACCORDION
    ========================================================== --}}
    <section id="structure" class="mt-16 space-y-7 lg:mt-20">

        <div class="max-w-2xl space-y-2">

            <span class="text-xs font-bold uppercase tracking-widest text-brand-600">
                Step-by-Step Blueprint
            </span>

            <h2 class="text-2xl font-extrabold leading-tight text-slate-900 sm:text-3xl">
                A Simple Structure to Follow
            </h2>

            <p class="text-sm leading-6 text-slate-500">
                Organize your GS statement into 7 clear, logical paragraphs.
            </p>

        </div>


        <div class="space-y-3">

            {{-- Accordion 01 --}}
            <div x-data="{ open: false }"
                class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                <button type="button"
                    @click="open = !open"
                    class="flex w-full items-center justify-between gap-4 p-4 text-left transition-colors hover:bg-slate-50 sm:p-5">

                    <div class="flex min-w-0 items-center gap-3 sm:gap-4">

                        <span class="shrink-0 font-mono text-lg font-black text-brand-600 sm:text-xl">
                            01
                        </span>

                        <div class="min-w-0">
                            <h3 class="text-sm font-bold leading-5 text-slate-900 sm:text-base">
                                Introduction & Current Circumstances
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-slate-500">
                                Brief background, current academic status, or employment role.
                            </p>
                        </div>

                    </div>

                    <i class="fa-solid fa-chevron-down shrink-0 text-slate-400 transition-transform duration-200"
                        :class="{ 'rotate-180': open }"></i>

                </button>

                <div x-show="open"
                    x-collapse
                    class="border-t border-slate-100 bg-slate-50/60 p-4 text-sm leading-7 text-slate-600 sm:p-5">

                    <p>
                        <strong class="text-slate-800">Goal:</strong>
                        Clearly establish who you are and what you are currently doing.
                    </p>

                    <p class="mt-2">
                        <strong class="text-slate-800">Include:</strong>
                        Your latest qualification, current employer, job title, and why you decided to pursue
                        higher education at this specific point in your life.
                    </p>

                </div>
            </div>


            {{-- Accordion 02 --}}
            <div x-data="{ open: false }"
                class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                <button type="button"
                    @click="open = !open"
                    class="flex w-full items-center justify-between gap-4 p-4 text-left transition-colors hover:bg-slate-50 sm:p-5">

                    <div class="flex min-w-0 items-center gap-3 sm:gap-4">

                        <span class="shrink-0 font-mono text-lg font-black text-brand-600 sm:text-xl">
                            02
                        </span>

                        <div class="min-w-0">
                            <h3 class="text-sm font-bold leading-5 text-slate-900 sm:text-base">
                                Ties to Home Country & Personal Commitments
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-slate-500">
                                Family, social, and economic incentives to return home.
                            </p>
                        </div>

                    </div>

                    <i class="fa-solid fa-chevron-down shrink-0 text-slate-400 transition-transform duration-200"
                        :class="{ 'rotate-180': open }"></i>

                </button>

                <div x-show="open"
                    x-collapse
                    class="border-t border-slate-100 bg-slate-50/60 p-4 text-sm leading-7 text-slate-600 sm:p-5">

                    <p>
                        <strong class="text-slate-800">Goal:</strong>
                        Prove strong incentives that support your departure from Australia upon study completion.
                    </p>

                    <p class="mt-2">
                        <strong class="text-slate-800">Include:</strong>
                        Dependants, elderly parents, inherited property, family business participation, or community
                        standing.
                    </p>

                </div>
            </div>


            {{-- Accordion 03 --}}
            <div x-data="{ open: false }"
                class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                <button type="button"
                    @click="open = !open"
                    class="flex w-full items-center justify-between gap-4 p-4 text-left transition-colors hover:bg-slate-50 sm:p-5">

                    <div class="flex min-w-0 items-center gap-3 sm:gap-4">

                        <span class="shrink-0 font-mono text-lg font-black text-brand-600 sm:text-xl">
                            03
                        </span>

                        <div class="min-w-0">
                            <h3 class="text-sm font-bold leading-5 text-slate-900 sm:text-base">
                                Why Australia? (Comparison with Home Country)
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-slate-500">
                                Justification for choosing Australia over local options.
                            </p>
                        </div>

                    </div>

                    <i class="fa-solid fa-chevron-down shrink-0 text-slate-400 transition-transform duration-200"
                        :class="{ 'rotate-180': open }"></i>

                </button>

                <div x-show="open"
                    x-collapse
                    class="border-t border-slate-100 bg-slate-50/60 p-4 text-sm leading-7 text-slate-600 sm:p-5">

                    <p>
                        <strong class="text-slate-800">Goal:</strong>
                        Explain why studying locally or in neighboring countries is insufficient for your career.
                    </p>

                    <p class="mt-2">
                        <strong class="text-slate-800">Include:</strong>
                        Lack of practical research exposure in home institutions, higher global academic ranking, or
                        specialized accreditation in Australia.
                    </p>

                </div>
            </div>


            {{-- Accordion 04 --}}
            <div x-data="{ open: false }"
                class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                <button type="button"
                    @click="open = !open"
                    class="flex w-full items-center justify-between gap-4 p-4 text-left transition-colors hover:bg-slate-50 sm:p-5">

                    <div class="flex min-w-0 items-center gap-3 sm:gap-4">

                        <span class="shrink-0 font-mono text-lg font-black text-brand-600 sm:text-xl">
                            04
                        </span>

                        <div class="min-w-0">
                            <h3 class="text-sm font-bold leading-5 text-slate-900 sm:text-base">
                                Why This Specific Institution & Course?
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-slate-500">
                                Detailed research into university syllabus and facilities.
                            </p>
                        </div>

                    </div>

                    <i class="fa-solid fa-chevron-down shrink-0 text-slate-400 transition-transform duration-200"
                        :class="{ 'rotate-180': open }"></i>

                </button>

                <div x-show="open"
                    x-collapse
                    class="border-t border-slate-100 bg-slate-50/60 p-4 text-sm leading-7 text-slate-600 sm:p-5">

                    <p>
                        <strong class="text-slate-800">Goal:</strong>
                        Show you conducted thorough research before enrolling.
                    </p>

                    <p class="mt-2">
                        <strong class="text-slate-800">Include:</strong>
                        Course units, campus location, industry partnerships, internship options, and comparisons
                        with other Australian universities.
                    </p>

                </div>
            </div>


            {{-- Accordion 05 --}}
            <div x-data="{ open: false }"
                class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                <button type="button"
                    @click="open = !open"
                    class="flex w-full items-center justify-between gap-4 p-4 text-left transition-colors hover:bg-slate-50 sm:p-5">

                    <div class="flex min-w-0 items-center gap-3 sm:gap-4">

                        <span class="shrink-0 font-mono text-lg font-black text-brand-600 sm:text-xl">
                            05
                        </span>

                        <div class="min-w-0">
                            <h3 class="text-sm font-bold leading-5 text-slate-900 sm:text-base">
                                Future Career Plan & Expected Return on Investment
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-slate-500">
                                Target job roles, salary projections, and industry growth.
                            </p>
                        </div>

                    </div>

                    <i class="fa-solid fa-chevron-down shrink-0 text-slate-400 transition-transform duration-200"
                        :class="{ 'rotate-180': open }"></i>

                </button>

                <div x-show="open"
                    x-collapse
                    class="border-t border-slate-100 bg-slate-50/60 p-4 text-sm leading-7 text-slate-600 sm:p-5">

                    <p>
                        <strong class="text-slate-800">Goal:</strong>
                        Prove that the financial cost of studying in Australia will yield realistic returns.
                    </p>

                    <p class="mt-2">
                        <strong class="text-slate-800">Include:</strong>
                        Target job roles, names of hiring companies in your country, and financial ROI estimation.
                    </p>

                </div>
            </div>


            {{-- Accordion 06 --}}
            <div x-data="{ open: false }"
                class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                <button type="button"
                    @click="open = !open"
                    class="flex w-full items-center justify-between gap-4 p-4 text-left transition-colors hover:bg-slate-50 sm:p-5">

                    <div class="flex min-w-0 items-center gap-3 sm:gap-4">

                        <span class="shrink-0 font-mono text-lg font-black text-brand-600 sm:text-xl">
                            06
                        </span>

                        <div class="min-w-0">
                            <h3 class="text-sm font-bold leading-5 text-slate-900 sm:text-base">
                                Financial Capacity & Funding Sources
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-slate-500">
                                Clear breakdown of who pays for tuition and living costs.
                            </p>
                        </div>

                    </div>

                    <i class="fa-solid fa-chevron-down shrink-0 text-slate-400 transition-transform duration-200"
                        :class="{ 'rotate-180': open }"></i>

                </button>

                <div x-show="open"
                    x-collapse
                    class="border-t border-slate-100 bg-slate-50/60 p-4 text-sm leading-7 text-slate-600 sm:p-5">

                    <p>
                        <strong class="text-slate-800">Goal:</strong>
                        Demonstrate financial stability without needing unauthorized work in Australia.
                    </p>

                    <p class="mt-2">
                        <strong class="text-slate-800">Include:</strong>
                        Sponsor relationship, annual sponsor income, bank balances, and education loan details.
                    </p>

                </div>
            </div>


            {{-- Accordion 07 --}}
            <div x-data="{ open: false }"
                class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                <button type="button"
                    @click="open = !open"
                    class="flex w-full items-center justify-between gap-4 p-4 text-left transition-colors hover:bg-slate-50 sm:p-5">

                    <div class="flex min-w-0 items-center gap-3 sm:gap-4">

                        <span class="shrink-0 font-mono text-lg font-black text-brand-600 sm:text-xl">
                            07
                        </span>

                        <div class="min-w-0">
                            <h3 class="text-sm font-bold leading-5 text-slate-900 sm:text-base">
                                Closing Statement & Declaration
                            </h3>

                            <p class="mt-1 text-xs leading-5 text-slate-500">
                                Reaffirm genuine student intent and commitment to visa rules.
                            </p>
                        </div>

                    </div>

                    <i class="fa-solid fa-chevron-down shrink-0 text-slate-400 transition-transform duration-200"
                        :class="{ 'rotate-180': open }"></i>

                </button>

                <div x-show="open"
                    x-collapse
                    class="border-t border-slate-100 bg-slate-50/60 p-4 text-sm leading-7 text-slate-600 sm:p-5">

                    <p>
                        <strong class="text-slate-800">Goal:</strong>
                        Formally conclude your statement with a pledge of compliance.
                    </p>

                    <p class="mt-2">
                        <strong class="text-slate-800">Include:</strong>
                        Reaffirmation that you intend to comply with visa condition 8105 (work hours) and return
                        home after completion.
                    </p>

                </div>
            </div>

        </div>
    </section>


    {{-- =========================================================
        DISCLAIMER
    ========================================================== --}}
    <section class="mt-16 pb-16 lg:mt-20 lg:pb-24">

        <div
            class="relative overflow-hidden rounded-2xl border border-teal-500/20 bg-gradient-to-r from-teal-500/5 via-transparent to-teal-500/5 p-5 shadow-sm sm:p-7">

            <div
                class="pointer-events-none absolute -right-10 -top-10 h-32 w-32 rounded-full bg-teal-500/10 blur-2xl">
            </div>

            <div class="relative flex items-start gap-4">

                <div
                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-teal-500/10 text-teal-600 ring-1 ring-teal-500/20">
                    <i class="fa-solid fa-file-lines"></i>
                </div>

                <div class="min-w-0 space-y-2">

                    <div class="flex flex-wrap items-center gap-2">

                        <h3 class="text-base font-semibold tracking-tight text-slate-900">
                            General Guidance Only
                        </h3>

                        <span
                            class="inline-flex items-center rounded-full bg-teal-500/10 px-2 py-0.5 text-xs font-medium text-teal-700 ring-1 ring-inset ring-teal-500/20">
                            Information
                        </span>

                    </div>

                    <p class="text-sm leading-7 text-slate-600">
                        This guide provides general information to help you prepare your Genuine Student statement.
                        It does not constitute legal or migration advice. For tailored guidance, please consult a
                        registered migration agent (MARA).
                    </p>

                </div>

            </div>

        </div>

    </section>

</main>

@endsection
