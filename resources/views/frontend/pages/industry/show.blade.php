@extends('frontend.layouts.app')

@section('title', $course['title'])

@section('content')
    <section
        class="relative w-full overflow-hidden bg-gradient-to-br from-[#0c273e] via-[#123b5d] to-[#081b2c] text-white border-b border-white/10 shadow-inner">
        <!-- Background Pattern Effect -->
        <div
            class="absolute inset-0 opacity-10 bg-[radial-gradient(#d0e4ff_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none">
        </div>

        <!-- Glow Effects -->
        <div
            class="absolute top-0 right-1/4 w-[300px] h-[300px] lg:w-[450px] lg:h-[450px] bg-secondary/25 rounded-full blur-3xl pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 left-10 w-[250px] h-[250px] lg:w-[350px] lg:h-[350px] bg-primary-fixed/15 rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="relative mx-auto w-full max-w-7xl px-4 py-10 sm:px-6 md:py-12 lg:px-8 lg:py-16">
            <!-- Course Title -->
            <div class="mb-10 max-w-4xl sm:mb-12 animate-hero-left">
                <div class="flex flex-wrap items-center gap-2 mb-3">
                    <span
                        class="inline-flex items-center rounded-full  bg-secondary-200 px-3 py-1.5  text-[11px] font-bold uppercase tracking-wider text-brand-500 shadow-sm">
                        National Code: {{ $course['code'] }}
                    </span>
                </div>

                <span class="mb-3 inline-block font-mono text-[10px] font-semibold uppercase tracking-[0.16em] text-white">
                    01 Qualifications
                </span>

                <h1
                    class="mb-5 font-heading text-3xl font-bold leading-[1.05] tracking-tight text-white sm:text-4xl lg:text-5xl">
                   {{ $course['title'] }}
                </h1>

                <p class="max-w-2xl text-sm leading-7 text-white sm:text-base lg:text-lg">
                     {{ $course['description'] }}
                </p>

            </div>

            <!-- Actions -->
            <div class="flex flex-col gap-4 animate-hero-left hero-stagger-2">

                <a href="#admissions-form"
                    class="w-fit inline-flex items-center justify-center gap-2 rounded-xl border border-secondary-500 bg-secondary-500 px-5 py-3 font-heading text-sm font-bold uppercase tracking-wide text-white shadow-theme-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-secondary-600 hover:shadow-theme-md active:translate-y-0">
                    <span>ENQUIRE / APPLY FOR NEXT INTAKE</span>

                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" />
                    </svg>
                </a>

                <div class="flex flex-wrap items-center gap-y-2 gap-x-6 text-xs text-brand-textSecondary font-medium">
                <span class="flex items-center text-white">
                  <svg
                    class="w-4 h-4 mr-1.5"
                    fill="currentColor"
                    viewbox="0 0 20 20"
                  >
                    <path
                      clip-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      fill-rule="evenodd"
                    ></path>
                  </svg>
                  AQF Nationally Recognised Training
                </span>
                <span class="flex items-center text-secondary-400">
                  <svg
                    class="w-4 h-4 mr-1.5 text-brand-azure"
                    fill="currentColor"
                    viewbox="0 0 20 20"
                  >
                    <path
                      clip-rule="evenodd"
                      d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      fill-rule="evenodd"
                    ></path>
                  </svg>
                  RTO 46173 - training.gov.au verified
                </span>
              </div>

            </div>
        </div>
    </section>

    @include('frontend.pages.home.section.review')


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


                    {{-- <div class="space-y-4 text-sm leading-7 text-neutral-600 sm:text-base">

                        <p>
                            {{ $course['description'] }}
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

                    </div> --}}

                </article>
            </div>


            <!-- RIGHT SIDEBAR -->
            <aside class="space-y-6  lg:col-span-4 lg:sticky lg:top-28 lg:self-start">

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

                            <label class="mb-1.5 block  text-[10px] font-semibold uppercase tracking-wide text-neutral-700">
                                Full Legal Name *
                            </label>

                            <input type="text" placeholder="e.g. Elena Rostova"
                                class="w-full rounded-xl border border-neutral-200 bg-white px-3.5 py-3 text-sm text-neutral-900 outline-none transition-all duration-300 placeholder:text-neutral-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100">

                        </div>


                        <!-- Email -->
                        <div>

                            <label class="mb-1.5 block  text-[10px] font-semibold uppercase tracking-wide text-neutral-700">
                                Email Address *
                            </label>

                            <input type="email" placeholder="name@domain.com"
                                class="w-full rounded-xl border border-neutral-200 bg-white px-3.5 py-3 text-sm text-neutral-900 outline-none transition-all duration-300 placeholder:text-neutral-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100">

                        </div>
                        <!-- Email -->
                        <div>

                            <label class="mb-1.5 block  text-[10px] font-semibold uppercase tracking-wide text-neutral-700">
                                Phone Number *
                            </label>

                            <input type="number" placeholder="+61 123 456 789"
                                class="w-full rounded-xl border border-neutral-200 bg-white px-3.5 py-3 text-sm text-neutral-900 outline-none transition-all duration-300 placeholder:text-neutral-400 focus:border-brand-500 focus:ring-4 focus:ring-brand-100">

                        </div>


                        <!-- Residency -->
                        <div>

                            <label class="mb-1.5 block  text-[10px] font-semibold uppercase tracking-wide text-neutral-700">
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

            </aside>

        </div>

    </main>
@endsection
