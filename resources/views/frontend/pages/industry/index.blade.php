@extends('frontend.layouts.app')

@section('title', $category['name'] ?? 'Courses')


@section('content')
    <section class="relative overflow-hidden bg-brand-25">
        {{-- Existing mesh background utility --}}
        <div class="absolute inset-0 mesh-background"></div>

        <div class="relative mx-auto w-full max-w-7xl px-4 py-10 sm:px-6 md:py-12 lg:px-8 lg:py-16">
            <!-- Course Title -->
            <div class="mb-10 max-w-4xl sm:mb-12 animate-hero-left">

                <span
                    class="mb-3 inline-block font-mono text-[10px] font-semibold uppercase tracking-[0.16em] text-secondary-600">
                    01 Disciplines
                </span>

                <h1
                    class="mb-5 font-heading text-4xl font-bold leading-[1.05] tracking-tight text-neutral-950 sm:text-5xl lg:text-6xl">
                    Vocational courses & qualifications
                </h1>

                <p class="max-w-2xl text-sm leading-7 text-neutral-600 sm:text-base lg:text-lg">
                    Lead cross-functional initiatives, craft resilient digital strategies, and drive high-level operational
                    leadership across Australian and global commerce. Hold 5+ nationally recognised qualifications across 3
                    industries.
                </p>

            </div>

            <!-- Actions -->
            <div class="flex flex-col gap-4 sm:flex-row sm:flex-wrap sm:items-center animate-hero-left hero-stagger-2">

                <a href="#admissions-form"
                    class="inline-flex items-center justify-center gap-2 rounded-xl border border-brand-700 bg-brand-500 px-5 py-3 font-heading text-sm font-bold uppercase tracking-wide text-white shadow-theme-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-600 hover:shadow-theme-md active:translate-y-0">
                    <span>Enquire / Apply</span>

                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" />
                    </svg>
                </a>            

            </div>
        </div>
    </section>
    {{-- ACADEMIC DISCIPLINES--}}
<section class="py-12 md:py-14 lg:py-18">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="mb-8 flex flex-col justify-between gap-5 border-b border-brand-200 pb-5 md:flex-row md:items-end reveal">

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

        </div>


        <div class="grid grid-cols-1 gap-6 md:grid-cols-3 md:gap-8 stagger">


          @foreach ($courses as $course )
              
         
            <div
                class="group flex flex-col overflow-hidden rounded-2xl border border-neutral-200 bg-neutral-25 shadow-theme-xs transition-all duration-300 ease-out hover:-translate-y-1 hover:shadow-theme-lg reveal-scale">

                <div
                    class="relative h-56 overflow-hidden border-b border-neutral-200 bg-neutral-100">

                    <img
                        src="{{ asset($course['image']) }}" alt="Australian carpenter apprentice framing timber"
                        class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />

                    <div
                        class="absolute left-3 top-3 rounded-md bg-brand-500 px-2.5 py-1 font-mono text-[10px] font-bold uppercase tracking-wide text-neutral-25">
                        {{ $course['hero']['badge'] }}
                    </div>

                </div>


                <div class="flex flex-1 flex-col justify-between gap-6 p-6">

                   <div class="flex flex-wrap items-center gap-2">

                        <span
                            class="inline-flex items-center gap-2 rounded-lg bg-brand-500 px-3 py-1.5 font-mono text-[11px] font-bold uppercase tracking-wide text-neutral-25">

                            <span class="h-2 w-2 rounded-full bg-secondary-300"></span>

                            {{ $course['level'] }}

                        </span>

                        <span
                            class="inline-flex items-center rounded-lg border border-neutral-200 bg-neutral-50 px-3 py-1.5 font-mono text-[11px] font-bold uppercase tracking-wide text-neutral-800">

                           {{ $course['code'] }}

                        </span>

                    </div>

                    <div class="flex flex-col gap-3">

                        <h3
                            class="font-display text-xl font-bold leading-tight tracking-tight text-brand-500">
                            {{ $course['name'] }}
                        </h3>

                        <p class="text-sm leading-6 text-neutral-600 line-clamp-2">
                            {{ $course['hero']['description'] }}
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
                                {{$course['key_information']['duration']}}
                            </span>

                        </div>

                        <a
                            href="{{ route('course.show', ['courseslug' => $course['slug']]) }}"
                            class="inline-flex items-center gap-1.5 rounded-lg bg-brand-500 px-3.5 py-2 font-mono text-[10px] font-bold uppercase tracking-wide text-neutral-25 transition-all duration-300 hover:bg-brand-600 hover:shadow-theme-sm">

                            Details

                        </a>

                    </div>

                </div>

            </div>
             @endforeach

        </div>

    </div>

</section>
@endsection
