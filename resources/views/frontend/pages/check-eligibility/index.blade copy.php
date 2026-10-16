@extends('frontend.layouts.app')

@section('content')
    <div class="mx-auto mt-20 max-w-7xl space-y-10 px-4 sm:px-6 lg:px-8">

        {{-- =========================================================
             PROFILE NAVIGATION
             Each navigation instance manages its own tab list.
        ========================================================== --}}
        <div
            x-data="sectionNavigation({
                offset: 125,
                activationOffset: 180,
                tabs: [
                    {
                        id: 'personal-information',
                        label: 'Personal Information',
                        icon: 'lucide:user-round'
                    },
                    {
                        id: 'academic-background',
                        label: 'Academic Background',
                        icon: 'lucide:graduation-cap'
                    },
                    {
                        id: 'study-plan',
                        label: 'Study Plan',
                        icon: 'lucide:book-open'
                    },
                    {
                        id: 'financial-family',
                        label: 'Financial & Family',
                        icon: 'lucide:wallet'
                    },
                    {
                        id: 'experience',
                        label: 'Experience',
                        icon: 'lucide:briefcase-business'
                    }
                ]
            })"
            class="space-y-6"
        >
            <nav
                aria-label="Profile sections"
                class="sticky top-20 z-30 rounded-2xl border border-slate-200/80
                       bg-white/95 p-1.5 shadow-sm backdrop-blur-md"
            >
                <div
                    x-ref="tabContainer"
                    class="flex min-w-0 items-center gap-2 overflow-x-auto whitespace-nowrap
                           overscroll-x-contain"
                >
                    <template x-for="tab in tabs" :key="tab.id">
                        <button
                            type="button"
                            :data-tab="tab.id"
                            @click="scrollToSection(tab.id)"
                            :aria-current="activeTab === tab.id ? 'location' : null"
                            :class="activeTab === tab.id
                                ? 'bg-brand-600 text-white shadow-sm'
                                : 'bg-slate-50 text-slate-600 hover:bg-slate-100'"
                            class="inline-flex shrink-0 items-center gap-2 rounded-xl
                                   px-4 py-2.5 text-xs font-semibold transition-colors
                                   duration-200 focus:outline-none focus-visible:ring-2
                                   focus-visible:ring-brand-500 focus-visible:ring-offset-2"
                        >
                            <iconify-icon :icon="tab.icon" class="text-base"></iconify-icon>
                            <span x-text="tab.label"></span>
                        </button>
                    </template>
                </div>
            </nav>

            <div class="space-y-6">
                <section
                    id="personal-information"
                    class="scroll-mt-32 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6"
                >
                    <div class="mb-4 border-b border-slate-100 pb-4">
                        <h2 class="text-lg font-bold text-[#182F5A]">Personal Information</h2>
                        <p class="mt-1 text-sm text-slate-500">Basic personal details.</p>
                    </div>
                    {{-- Place your personal information fields here. --}}
                    <p class="text-sm text-slate-600">Personal details go here.</p>
                </section>

                <section
                    id="academic-background"
                    class="scroll-mt-32 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6"
                >
                    <div class="mb-4 border-b border-slate-100 pb-4">
                        <h2 class="text-lg font-bold text-[#182F5A]">Academic Background</h2>
                        <p class="mt-1 text-sm text-slate-500">Education and qualifications.</p>
                    </div>
                    {{-- Place your academic background fields here. --}}
                    <p class="text-sm text-slate-600">Academic details go here.</p>
                </section>

                <section
                    id="study-plan"
                    class="scroll-mt-32 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6"
                >
                    <div class="mb-4 border-b border-slate-100 pb-4">
                        <h2 class="text-lg font-bold text-[#182F5A]">Study Plan</h2>
                        <p class="mt-1 text-sm text-slate-500">Course and study preferences.</p>
                    </div>
                    {{-- Place your study plan fields here. --}}
                    <p class="text-sm text-slate-600">Study plan details go here.</p>
                </section>

                <section
                    id="financial-family"
                    class="scroll-mt-32 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6"
                >
                    <div class="mb-4 border-b border-slate-100 pb-4">
                        <h2 class="text-lg font-bold text-[#182F5A]">Financial &amp; Family</h2>
                        <p class="mt-1 text-sm text-slate-500">Funding and family information.</p>
                    </div>
                    {{-- Place your financial and family fields here. --}}
                    <p class="text-sm text-slate-600">Financial and family details go here.</p>
                </section>

                <section
                    id="experience"
                    class="scroll-mt-32 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6"
                >
                    <div class="mb-4 border-b border-slate-100 pb-4">
                        <h2 class="text-lg font-bold text-[#182F5A]">Experience</h2>
                        <p class="mt-1 text-sm text-slate-500">Employment and relevant experience.</p>
                    </div>
                    {{-- Place your experience fields here. --}}
                    <p class="text-sm text-slate-600">Experience details go here.</p>
                </section>
            </div>
        </div>


        {{-- =========================================================
             LEAD MANAGEMENT NAVIGATION
             This is a separate, independent navigation instance.
        ========================================================== --}}
        <div
            x-data="sectionNavigation({
                offset: 125,
                activationOffset: 180,
                tabs: [
                    {
                        id: 'lead-quality',
                        label: 'Lead Quality',
                        icon: 'lucide:sparkles'
                    },
                    {
                        id: 'status-assignment',
                        label: 'Status & Assignment',
                        icon: 'lucide:sliders-horizontal'
                    },
                    {
                        id: 'file-enroll',
                        label: 'File Open & References',
                        icon: 'lucide:folder-kanban'
                    },
                    {
                        id: 'marketing-notes',
                        label: 'Marketing & Notes',
                        icon: 'lucide:megaphone'
                    },
                    {
                        id: 'commission-section',
                        label: 'Commission Breakdown',
                        icon: 'lucide:receipt'
                    }
                ]
            })"
            class="space-y-6"
        >
            <nav
                aria-label="Lead management sections"
                class="sticky top-20 z-30 rounded-2xl border border-slate-200/80
                       bg-white/95 p-1.5 shadow-sm backdrop-blur-md"
            >
                <div
                    x-ref="tabContainer"
                    class="flex min-w-0 items-center gap-2 overflow-x-auto whitespace-nowrap
                           overscroll-x-contain"
                >
                    <template x-for="tab in tabs" :key="tab.id">
                        <button
                            type="button"
                            :data-tab="tab.id"
                            @click="scrollToSection(tab.id)"
                            :aria-current="activeTab === tab.id ? 'location' : null"
                            :class="activeTab === tab.id
                                ? 'bg-brand-600 text-white shadow-sm'
                                : 'bg-slate-50 text-slate-600 hover:bg-slate-100'"
                            class="inline-flex shrink-0 items-center gap-2 rounded-xl
                                   px-4 py-2.5 text-xs font-semibold transition-colors
                                   duration-200 focus:outline-none focus-visible:ring-2
                                   focus-visible:ring-brand-500 focus-visible:ring-offset-2"
                        >
                            <iconify-icon :icon="tab.icon" class="text-base"></iconify-icon>
                            <span x-text="tab.label"></span>
                        </button>
                    </template>
                </div>
            </nav>

            <div class="space-y-6">
                <section
                    id="lead-quality"
                    class="scroll-mt-32 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6"
                >
                    <div class="mb-4 border-b border-slate-100 pb-4">
                        <h2 class="text-lg font-bold text-[#182F5A]">Lead Quality Assessment</h2>
                        <p class="mt-1 text-sm text-slate-500">Evaluate qualification requirements.</p>
                    </div>
                    {{-- Keep your existing Lead Quality form fields here. --}}
                    <p class="text-sm text-slate-600">Lead quality fields go here.</p>
                </section>

                <section
                    id="status-assignment"
                    class="scroll-mt-32 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6"
                >
                    <div class="mb-4 border-b border-slate-100 pb-4">
                        <h2 class="text-lg font-bold text-[#182F5A]">Status &amp; Assignment</h2>
                        <p class="mt-1 text-sm text-slate-500">Manage priority, lead status and assignment.</p>
                    </div>
                    {{-- Keep your existing Status & Assignment form fields here. --}}
                    <p class="text-sm text-slate-600">Status and assignment fields go here.</p>
                </section>

                <section
                    id="file-enroll"
                    class="scroll-mt-32 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6"
                >
                    <div class="mb-4 border-b border-slate-100 pb-4">
                        <h2 class="text-lg font-bold text-[#182F5A]">File Opening &amp; Enrollment</h2>
                        <p class="mt-1 text-sm text-slate-500">Manage fee records, enrollment and references.</p>
                    </div>
                    {{-- Keep your existing File Opening & Enrollment form fields here. --}}
                    <p class="text-sm text-slate-600">File and enrollment fields go here.</p>
                </section>

                <section
                    id="marketing-notes"
                    class="scroll-mt-32 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6"
                >
                    <div class="mb-4 border-b border-slate-100 pb-4">
                        <h2 class="text-lg font-bold text-[#182F5A]">Marketing &amp; Notes</h2>
                        <p class="mt-1 text-sm text-slate-500">Lead source, campaign tags and operational notes.</p>
                    </div>
                    {{-- Keep your existing Marketing & Notes form fields here. --}}
                    <p class="text-sm text-slate-600">Marketing and notes fields go here.</p>
                </section>

                <section
                    id="commission-section"
                    class="scroll-mt-32 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:p-6"
                >
                    <div class="mb-4 border-b border-slate-100 pb-4">
                        <h2 class="text-lg font-bold text-[#182F5A]">Commission &amp; Payout Management</h2>
                        <p class="mt-1 text-sm text-slate-500">Manage commission rates and payout status.</p>
                    </div>
                    {{-- Keep your existing Commission form fields here. --}}
                    <p class="text-sm text-slate-600">Commission fields go here.</p>
                </section>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('sectionNavigation', (config = {}) => ({
                tabs: config.tabs || [],
                sections: (config.tabs || []).map(tab => tab.id),
                offset: config.offset ?? 125,
                activationOffset: config.activationOffset ?? 180,

                activeTab: config.tabs?.[0]?.id || '',

                _scrollFrame: null,
                _onScroll: null,
                _onResize: null,

                init() {
                    this.$nextTick(() => {
                        this.setupScrollSpy();
                        this.updateActiveSection();
                    });
                },

                getSectionElements() {
                    return this.sections
                        .map(id => document.getElementById(id))
                        .filter(section => section !== null);
                },

                getTab(id) {
                    return Array.from(
                        this.$root.querySelectorAll('[data-tab]')
                    ).find(tab => tab.dataset.tab === id);
                },

                scrollToSection(id) {
                    const section = document.getElementById(id);

                    if (!section || !this.sections.includes(id)) {
                        return;
                    }

                    this.setActive(id);

                    const top = section.getBoundingClientRect().top
                        + window.scrollY
                        - this.offset;

                    window.scrollTo({
                        top: Math.max(0, top),
                        behavior: 'smooth'
                    });
                },

                setActive(id) {
                    if (!this.sections.includes(id)) {
                        return;
                    }

                    const changed = this.activeTab !== id;
                    this.activeTab = id;

                    // Keep the selected tab visible in its own horizontal tab bar.
                    this.$nextTick(() => {
                        const tab = this.getTab(id);
                        const container = this.$refs.tabContainer;

                        if (!tab || !container) {
                            return;
                        }

                        const tabLeft = tab.offsetLeft;
                        const tabRight = tabLeft + tab.offsetWidth;
                        const visibleLeft = container.scrollLeft;
                        const visibleRight = visibleLeft + container.clientWidth;

                        if (tabLeft < visibleLeft) {
                            container.scrollTo({
                                left: Math.max(0, tabLeft - 16),
                                behavior: changed ? 'smooth' : 'auto'
                            });
                        } else if (tabRight > visibleRight) {
                            container.scrollTo({
                                left: Math.max(
                                    0,
                                    tabRight - container.clientWidth + 16
                                ),
                                behavior: changed ? 'smooth' : 'auto'
                            });
                        }
                    });
                },

                updateActiveSection() {
                    const sections = this.getSectionElements();

                    if (!sections.length) {
                        return;
                    }

                    // At the bottom of the document, activate this navigation's
                    // last section only if that section is also near the viewport.
                    const lastSection = sections[sections.length - 1];
                    const atPageBottom =
                        window.innerHeight + window.scrollY >=
                        document.documentElement.scrollHeight - 4;

                    if (
                        atPageBottom &&
                        lastSection.getBoundingClientRect().top < window.innerHeight
                    ) {
                        this.setActive(lastSection.id);
                        return;
                    }

                    let currentSection = sections[0];

                    for (const section of sections) {
                        if (section.getBoundingClientRect().top <= this.activationOffset) {
                            currentSection = section;
                        } else {
                            break;
                        }
                    }

                    this.setActive(currentSection.id);
                },

                setupScrollSpy() {
                    this._onScroll = () => {
                        if (this._scrollFrame !== null) {
                            return;
                        }

                        this._scrollFrame = window.requestAnimationFrame(() => {
                            this._scrollFrame = null;
                            this.updateActiveSection();
                        });
                    };

                    this._onResize = () => {
                        this.updateActiveSection();
                    };

                    window.addEventListener('scroll', this._onScroll, {
                        passive: true
                    });

                    window.addEventListener('resize', this._onResize, {
                        passive: true
                    });
                },

                destroy() {
                    if (this._onScroll) {
                        window.removeEventListener('scroll', this._onScroll);
                    }

                    if (this._onResize) {
                        window.removeEventListener('resize', this._onResize);
                    }

                    if (this._scrollFrame !== null) {
                        window.cancelAnimationFrame(this._scrollFrame);
                    }
                }
            }));
        });
    </script>
@endsection
