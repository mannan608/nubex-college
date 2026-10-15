@extends('frontend.layouts.app')

@section('title', $category['name'] ?? 'Courses')


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

                <span class="mb-3 inline-block font-mono text-[10px] font-semibold uppercase tracking-[0.16em] text-white">
                    01 Qualifications
                </span>

                <h1
                    class="mb-5 font-heading text-4xl font-bold leading-[1.05] tracking-tight text-white sm:text-5xl lg:text-6xl">
                    Courses & qualifications
                </h1>

                <p class="max-w-2xl text-sm leading-7 text-white sm:text-base lg:text-lg">
                    Lead cross-functional initiatives, craft resilient digital strategies, and drive high-level operational
                    leadership across Australian and global commerce. Hold 5+ nationally recognised qualifications across 3
                    industries.
                </p>

            </div>

            <!-- Actions -->
            <div class="flex flex-col gap-4 sm:flex-row sm:flex-wrap sm:items-center animate-hero-left hero-stagger-2">

                <a href="#admissions-form"
                    class="inline-flex items-center justify-center gap-2 rounded-xl border border-secondary-500 bg-secondary-500 px-5 py-3 font-heading text-sm font-bold uppercase tracking-wide text-white shadow-theme-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-secondary-600 hover:shadow-theme-md active:translate-y-0">
                    <span>Enquire / Apply</span>

                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" />
                    </svg>
                </a>

            </div>
        </div>
    </section>
    {{-- qualifications --}}
    <section class="py-12 md:py-14 lg:py-18">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div
                class="mb-8 flex flex-col justify-between gap-5 border-b border-brand-200 pb-5 md:flex-row md:items-end reveal">

                <div>

                    <span class="font-mono text-[10px] font-bold uppercase tracking-[0.18em] text-secondary-600">
                        01 Qualifications
                    </span>

                    <h2
                        class="mt-2 max-w-3xl text-xl font-extrabold uppercase leading-tight tracking-tight text-neutral-950 md:text-2xl lg:text-3xl">
                        A course for the career you imagine
                    </h2>

                </div>

            </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 stagger">
                    @foreach ($qualifications as $qualification)
                        @include('frontend.pages.industry.qualificationCard', [
                            'qualification' => $qualification,
                        ])
                    @endforeach
                </div>

        </div>

    </section>
@endsection
