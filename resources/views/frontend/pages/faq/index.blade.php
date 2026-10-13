@extends('frontend.layouts.app')

@section('content')
    <section id="faq" class="bg-slate-50 py-16 sm:py-20 lg:py-24">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- HEADER --}}

            <div class="mx-auto max-w-3xl text-center">

                <span class="text-xs font-black uppercase tracking-[0.18em] text-brand-600">
                    Frequently Asked Questions
                </span>

                <h2 class="mt-5 text-3xl font-black leading-tight tracking-tight text-brand-950 sm:text-4xl">
                    Everything You Need
                    <span class="text-secondary-600">To Know</span>
                </h2>

                <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                    Find answers to common questions about courses, fees, admissions, assessments, visas and studying at
                    UTI.
                </p>

            </div>


            {{-- CONTENT --}}

            <div class="mt-12 grid grid-cols-1 items-start gap-8 lg:grid-cols-12 lg:gap-10">


                {{-- LEFT SIDE --}}

                <div class="lg:col-span-4 lg:self-stretch">

                    <div class="lg:sticky lg:top-28">


                        {{-- CONTACT CARD --}}

                        <div class="rounded-2xl border border-brand-100 bg-white p-6 shadow-sm sm:p-7">

                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-100 text-brand-500">

                                <iconify-icon icon="lucide:messages-square" class="text-xl">
                                </iconify-icon>

                            </div>


                            <h3 class="mt-5 text-xl text-neutral-500 font-medium text-brand-950">
                                Have more questions?
                            </h3>


                            <p class="mt-3 text-sm leading-6 text-slate-500">
                                Our specialists team can help you understand the admission process and next steps.
                            </p>


                            <a href="mailto:admissions@uti.edu.au"
                                class="group mt-6 flex items-center justify-between rounded-xl border border-brand-100 bg-brand-50 p-3.5 transition hover:border-brand-200 hover:bg-brand-100">

                                <span class="flex items-center gap-3">

                                    <span
                                        class="flex h-10 w-10 items-center justify-center rounded-lg bg-white text-secondary-600">

                                        <iconify-icon icon="lucide:mail" class="text-lg">
                                        </iconify-icon>

                                    </span>


                                    <span>

                                        <span class="block text-[10px] font-bold uppercase tracking-wider text-slate-400">
                                            Email Us
                                        </span>

                                        <span class="mt-0.5 block text-sm font-medium text-brand-900">
                                            Our Admission Team
                                        </span>

                                    </span>

                                </span>


                                <span
                                    class="flex h-8 w-8 items-center justify-center rounded-full bg-white text-brand-600 transition group-hover:translate-x-0.5">

                                    <iconify-icon icon="lucide:arrow-up-right" class="text-sm">
                                    </iconify-icon>

                                </span>

                            </a>

                        </div>


                        {{-- HELP CARD --}}

                        <div class="mt-4 rounded-2xl bg-brand-900 p-6 text-white">

                            <div class="flex items-start gap-3">

                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-secondary-500/15">

                                    <iconify-icon icon="lucide:headphones" class="text-lg text-secondary-400">
                                    </iconify-icon>

                                </div>


                                <div>

                                    <p class="text-sm font-medium">
                                        Need personal guidance?
                                    </p>

                                    <p class="mt-1 text-xs leading-5 text-brand-200">
                                        Speak with our team about your experience and eligibility.
                                    </p>

                                </div>

                            </div>


                            <a href="#"
                                class="mt-5 inline-flex items-center gap-2 text-xs text-neutral-500 font-medium uppercase tracking-wider text-secondary-400 transition hover:text-secondary-300">

                                +61 2 8677 3600

                            </a>

                        </div>

                    </div>

                </div>


                {{-- FAQ LIST --}}

                <div class="lg:col-span-8" x-data="{ active: 0 }">

                    <div class="space-y-14">
                        {{-- COURSES & CAREERS  --}}

                        <div>

                            <div class="mb-5 border-b border-slate-200 pb-3">
                                <h2 class="font-display text-2xl font-bold text-brand-950 sm:text-3xl">
                                    Courses & Careers
                                </h2>
                            </div>


                            <div class="space-y-3">

                                {{-- Question 01 --}}
                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 0 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 0 ? null : 0"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 0 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl">
                                            </iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 0 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 01
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                What jobs can I get after my course?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 0 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg">
                                            </iconify-icon>

                                        </span>

                                    </button>


                                    <div x-show="active === 0" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">

                                                <div class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Course outcomes and potential career opportunities depend on
                                                    the qualification and the learner's individual pathway.
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>


                                {{-- Question 02 --}}
                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 1 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 1 ? null : 1"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 1 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl">
                                            </iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 1 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 02
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                How long is the course?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 1 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg">
                                            </iconify-icon>

                                        </span>

                                    </button>


                                    <div x-show="active === 1" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">

                                                <div class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Course duration depends on the qualification and
                                                    study structure.
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>


                                {{-- Question 03 --}}
                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 2 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 2 ? null : 2"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 2 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl">
                                            </iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 2 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 03
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                What will I study in the course?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 2 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg">
                                            </iconify-icon>

                                        </span>

                                    </button>


                                    <div x-show="active === 2" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">

                                                <div class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    The subjects and learning outcomes depend on the
                                                    selected qualification and course structure.
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>


                                {{-- Question 04 --}}
                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 3 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 3 ? null : 3"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 3 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl">
                                            </iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 3 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 04
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                Is the course practical or theory-based?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 3 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg">
                                            </iconify-icon>

                                        </span>

                                    </button>


                                    <div x-show="active === 3" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">

                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    The course structure may include both theoretical learning
                                                    and practical components.
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>


                                {{-- Question 05 --}}
                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 4 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 4 ? null : 4"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 4 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl">
                                            </iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 4 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 05
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                How hard are assessments?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 4 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg">
                                            </iconify-icon>

                                        </span>

                                    </button>


                                    <div x-show="active === 4" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">

                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Assessment requirements depend on the course and
                                                    its learning outcomes.
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>


                                {{-- Question 06 --}}
                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 5 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 5 ? null : 5"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 5 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl">
                                            </iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 5 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 06
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                Do I need prior experience?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 5 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg">
                                            </iconify-icon>

                                        </span>

                                    </button>


                                    <div x-show="active === 5" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">

                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Prior experience requirements depend on the
                                                    selected course and qualification.
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- FEES, PAYMENTS & SCHOLARSHIPS --}}

                        <div>

                            <div class="mb-5 border-b border-slate-200 pb-3">
                                <h2 class="font-display text-2xl font-bold text-brand-950 sm:text-3xl">
                                    Fees, Payments & Scholarships
                                </h2>
                            </div>

                            <div class="space-y-3">

                                {{-- Question 07 --}}
                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 6 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 6 ? null : 6"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 6 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 6 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 07
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                How much does the course cost?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 6 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>


                                    <div x-show="active === 6" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">

                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Course costs depend on the selected qualification and
                                                    payment option.
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>


                                {{-- Question 08 --}}
                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 7 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 7 ? null : 7"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 7 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 7 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 08
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                What payment plans are available?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 7 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>


                                    <div x-show="active === 7" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">

                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Payment options depend on the selected course and
                                                    applicable payment arrangements.
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>


                                {{-- Question 09 --}}
                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 8 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 8 ? null : 8"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 8 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 8 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 09
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                Is there any scholarship or discount?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 8 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>


                                    <div x-show="active === 8" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">

                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Scholarship and discount availability depends on the
                                                    applicable course and current offers.
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- INTAKES & SCHEDULE  --}}

                        <div>

                            <div class="mb-5 border-b border-slate-200 pb-3">
                                <h2 class="font-display text-2xl font-bold text-brand-950 sm:text-3xl">
                                    Intakes & Schedule
                                </h2>
                            </div>

                            <div class="space-y-3">

                                {{-- Question 10 --}}
                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 9 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 9 ? null : 9"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 9 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 9 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 10
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                When is the next intake?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 9 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 9" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Intake dates vary by course and are subject to availability.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                {{-- Question 11 --}}
                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 10 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 10 ? null : 10"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 10 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 10 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 11
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                Can I study part-time or evening classes?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 10 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 10" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Study schedules depend on the course and available class timetable.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                {{-- Question 12 --}}
                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 11 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 11 ? null : 11"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 11 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 11 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 12
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                How many days per week are classes?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 11 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 11" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Class frequency depends on the course and timetable.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                {{-- Question 13 --}}
                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 12 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 12 ? null : 12"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 12 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 12 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 13
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                Can I see a sample timetable?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 12 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 12" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    A sample timetable can be provided depending on the course.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- ENTRY REQUIREMENTS --}}

                        <div>

                            <div class="mb-5 border-b border-slate-200 pb-3">
                                <h2 class="font-display text-2xl font-bold text-brand-950 sm:text-3xl">
                                    Entry Requirements
                                </h2>
                            </div>

                            <div class="space-y-3">

                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 13 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 13 ? null : 13"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 13 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 13 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 14
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                What IELTS score is required?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 13 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 13" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    English language requirements depend on the qualification
                                                    and applicable admission requirements.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 14 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 14 ? null : 14"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 14 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 14 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 15
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                Can I study without IELTS?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 14 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 14" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Alternative English language evidence may be accepted
                                                    depending on the applicable admission requirements.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 15 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 15 ? null : 15"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 15 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 15 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 16
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                What are the entry requirements?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 15 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 15" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Entry requirements vary according to the selected
                                                    qualification and applicant circumstances.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 16 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 16 ? null : 16"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 16 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 16 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 17
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                Can I enrol with a gap in studies?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 16 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 16" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Study gaps may be considered as part of the admission
                                                    assessment and supporting documentation.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- VISA & WORKING --}}

                        <div>

                            <div class="mb-5 border-b border-slate-200 pb-3">
                                <h2 class="font-display text-2xl font-bold text-brand-950 sm:text-3xl">
                                    Visa & Working
                                </h2>
                            </div>

                            <div class="space-y-3">

                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 17 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 17 ? null : 17"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 17 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 17 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 18
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                Does this course qualify for a student visa?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 17 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 17" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Visa eligibility depends on the specific course,
                                                    provider and current Australian visa requirements.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 18 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 18 ? null : 18"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 18 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 18 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 19
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                Can I work while studying?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 18 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 18" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Working rights depend on your visa conditions and
                                                    current Australian immigration rules.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 19 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 19 ? null : 19"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 19 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 19 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 20
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                Can I change my course?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 19 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 19" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Course changes depend on the applicable enrolment,
                                                    provider and visa requirements.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 20 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 20 ? null : 20"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 20 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 20 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 21
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                Can my visa be cancelled?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 20 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 20" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Visa status is subject to your visa conditions and
                                                    Australian immigration requirements.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 21 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 21 ? null : 21"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 21 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 21 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 22
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                What if my visa is delayed or refused?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 21 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 21" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Visa outcomes and processing times are determined by
                                                    the relevant Australian immigration authorities.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- ASSESSMENTS, ATTENDANCE & DEFERRALS --}}

                        <div>

                            <div class="mb-5 border-b border-slate-200 pb-3">
                                <h2 class="font-display text-2xl font-bold text-brand-950 sm:text-3xl">
                                    Assessments, Attendance & Deferrals
                                </h2>
                            </div>

                            <div class="space-y-3">

                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 22 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 22 ? null : 22"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 22 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 22 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 23
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                What happens if I fail an assessment?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 22 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 22" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Assessment outcomes and any available reassessment
                                                    process depend on the course requirements.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 23 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 23 ? null : 23"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 23 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 23 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 24
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                What if I miss an assessment?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 23 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 23" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Missed assessments should be discussed with the
                                                    relevant course or training team.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 24 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 24 ? null : 24"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 24 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 24 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 25
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                Can I defer my intake?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 24 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 24" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Deferral options depend on the course, intake and
                                                    applicable enrolment requirements.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 25 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 25 ? null : 25"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 25 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 25 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 26
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                What happens if my attendance is low?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 25 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 25" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    Attendance requirements and consequences of low
                                                    attendance depend on the course and applicable rules.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- ABOUT UTI --}}

                        <div>

                            <div class="mb-5 border-b border-slate-200 pb-3">
                                <h2 class="font-display text-2xl font-bold text-brand-950 sm:text-3xl">
                                    About UTI
                                </h2>
                            </div>

                            <div class="space-y-3">

                                <div class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                                    :class="active === 26 ?
                                        'border-secondary-300 shadow-sm' :
                                        'border-slate-200 hover:border-brand-200'">

                                    <button type="button" @click="active = active === 26 ? null : 26"
                                        class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                            :class="active === 26 ?
                                                'bg-secondary-500 text-white' :
                                                'bg-brand-50 text-brand-500'">

                                            <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                        </div>

                                        <div class="min-w-0 flex-1">

                                            <span class="mb-1 block text-[10px] text-neutral-500 font-medium uppercase tracking-[0.16em]"
                                                :class="active === 26 ?
                                                    'text-secondary-600' :
                                                    'text-slate-400'">
                                                Question 27
                                            </span>

                                            <span
                                                class="block text-sm font-medium leading-6 text-brand-950 sm:text-base">
                                                Is UTI a recognised institution?
                                            </span>

                                        </div>

                                        <span
                                            class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                            :class="active === 26 ?
                                                'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600' :
                                                'border-slate-200 bg-white text-slate-500'">

                                            <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                        </span>

                                    </button>

                                    <div x-show="active === 26" x-transition>

                                        <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                            <div class="flex gap-4">
                                                <div
                                                    class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block">
                                                </div>

                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    UTI recognition and registration information should
                                                    be confirmed through the institution's current official details.
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- CTA --}}

                        <div class="overflow-hidden rounded-3xl bg-brand-950 p-7 text-white sm:p-9 lg:p-10">

                            <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">

                                <div>

                                    <span
                                        class="mb-2 block text-xs font-bold uppercase tracking-[0.18em] text-secondary-400">
                                        Need more information?
                                    </span>

                                    <h3 class="font-display text-2xl font-bold sm:text-3xl">
                                        Still have questions?
                                    </h3>

                                    <p class="mt-2 text-sm leading-6 text-white/60">
                                        Our admissions team is happy to help.
                                    </p>

                                </div>

                                <a href="/contact"
                                    class="inline-flex shrink-0 items-center justify-center gap-2 rounded-full bg-white px-6 py-3 text-sm font-bold text-brand-950 transition-all duration-200 hover:gap-3 hover:bg-secondary-50">

                                    Contact us

                                    <iconify-icon icon="lucide:arrow-up-right" class="text-base">
                                    </iconify-icon>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection
