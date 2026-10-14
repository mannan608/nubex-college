 <!-- Alpine.js FAQ Accordion -->
            <div class="flex flex-col gap-3.5" x-data="{ active: null }">

                <!-- Item 1 -->
                <div class="rounded-2xl bg-white border transition-all duration-200 overflow-hidden shadow-sm hover:shadow-md"
                    :class="active === 1 ? 'border-brand-500/40 ring-1 ring-brand-500/20' : 'border-slate-200'">
                    <button type="button"
                        class="w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-heading text-sm sm:text-base font-bold text-[#182F5A] hover:text-brand-500 transition-colors"
                        @click="active = (active === 1 ? null : 1)">
                        <span class="flex items-center gap-2.5">
                            <span class="text-brand-500 font-mono text-xs font-bold">01.</span>
                            <span>What qualifications does Nubex College offer?</span>
                        </span>
                        <span
                            class="material-symbols-outlined text-brand-500 text-[22px] transition-transform duration-300 shrink-0"
                            :class="active === 1 ? 'rotate-180' : ''">expand_more</span>
                    </button>
                    <div class="px-4 sm:px-5 pb-5 text-xs sm:text-sm text-on-surface-variant leading-relaxed"
                        x-show="active === 1" x-collapse style="display: none;">
                        Nubex College delivers nationally recognized qualifications including:
                        <ul class="list-disc pl-5 mt-2.5 space-y-1.5 font-medium text-[#182F5A]/90">
                            <li><strong class="text-brand-500">BSB50420</strong> — Diploma of Leadership and Management
                            </li>
                            <li><strong class="text-brand-500">BSB60420</strong> — Advanced Diploma of Leadership and
                                Management</li>
                            <li><strong class="text-brand-500">CHC33021</strong> — Certificate III in Individual Support
                            </li>
                            <li><strong class="text-brand-500">CHC43015</strong> — Certificate IV in Ageing Support</li>
                            <li><strong class="text-brand-500">CHC43315</strong> — Certificate IV in Mental Health</li>
                            <li><strong class="text-brand-500">CHC52025</strong> — Diploma of Community Services</li>
                            <li><strong class="text-brand-500">HLT33021</strong> — Certificate III in Allied Health
                                Assistance</li>
                        </ul>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="rounded-2xl bg-white border transition-all duration-200 overflow-hidden shadow-sm hover:shadow-md"
                    :class="active === 2 ? 'border-brand-500/40 ring-1 ring-brand-500/20' : 'border-slate-200'">
                    <button type="button"
                        class="w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-heading text-sm sm:text-base font-bold text-[#182F5A] hover:text-brand-500 transition-colors"
                        @click="active = (active === 2 ? null : 2)">
                        <span class="flex items-center gap-2.5">
                            <span class="text-brand-500 font-mono text-xs font-bold">02.</span>
                            <span>What is Recognition of Prior Learning (RPL)?</span>
                        </span>
                        <span
                            class="material-symbols-outlined text-brand-500 text-[22px] transition-transform duration-300 shrink-0"
                            :class="active === 2 ? 'rotate-180' : ''">expand_more</span>
                    </button>
                    <div class="px-4 sm:px-5 pb-5 text-xs sm:text-sm text-on-surface-variant leading-relaxed"
                        x-show="active === 2" x-collapse style="display: none;">
                        Recognition of Prior Learning (RPL) acknowledges competencies
                        gained through work and life experience. Candidates submit
                        evidence mapping their existing capabilities directly against
                        unit of competency benchmarks.
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="rounded-2xl bg-white border transition-all duration-200 overflow-hidden shadow-sm hover:shadow-md"
                    :class="active === 3 ? 'border-brand-500/40 ring-1 ring-brand-500/20' : 'border-slate-200'">
                    <button type="button"
                        class="w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-heading text-sm sm:text-base font-bold text-[#182F5A] hover:text-brand-500 transition-colors"
                        @click="active = (active === 3 ? null : 3)">
                        <span class="flex items-center gap-2.5">
                            <span class="text-brand-500 font-mono text-xs font-bold">03.</span>
                            <span>How do I know which qualification is right for me?</span>
                        </span>
                        <span
                            class="material-symbols-outlined text-brand-500 text-[22px] transition-transform duration-300 shrink-0"
                            :class="active === 3 ? 'rotate-180' : ''">expand_more</span>
                    </button>
                    <div class="px-4 sm:px-5 pb-5 text-xs sm:text-sm text-on-surface-variant leading-relaxed"
                        x-show="active === 3" x-collapse style="display: none;">
                        Our admissions advisors evaluate your prior career journey and
                        goals to recommend an optimal qualification. You can also use
                        our interactive Eligibility Checker on this page.
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="rounded-2xl bg-white border transition-all duration-200 overflow-hidden shadow-sm hover:shadow-md"
                    :class="active === 4 ? 'border-brand-500/40 ring-1 ring-brand-500/20' : 'border-slate-200'">
                    <button type="button"
                        class="w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-heading text-sm sm:text-base font-bold text-[#182F5A] hover:text-brand-500 transition-colors"
                        @click="active = (active === 4 ? null : 4)">
                        <span class="flex items-center gap-2.5">
                            <span class="text-brand-500 font-mono text-xs font-bold">04.</span>
                            <span>What documents might be required for enrolment?</span>
                        </span>
                        <span
                            class="material-symbols-outlined text-brand-500 text-[22px] transition-transform duration-300 shrink-0"
                            :class="active === 4 ? 'rotate-180' : ''">expand_more</span>
                    </button>
                    <div class="px-4 sm:px-5 pb-5 text-xs sm:text-sm text-on-surface-variant leading-relaxed"
                        x-show="active === 4" x-collapse style="display: none;">
                        Enrolment typically requires government-issued photo
                        identification, a Unique Student Identifier (USI), and prior
                        academic transcripts. For RPL, resumes, references, and work
                        samples may also be requested.
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="rounded-2xl bg-white border transition-all duration-200 overflow-hidden shadow-sm hover:shadow-md"
                    :class="active === 5 ? 'border-brand-500/40 ring-1 ring-brand-500/20' : 'border-slate-200'">
                    <button type="button"
                        class="w-full p-4 sm:p-5 text-left flex items-center justify-between gap-4 font-heading text-sm sm:text-base font-bold text-[#182F5A] hover:text-brand-500 transition-colors"
                        @click="active = (active === 5 ? null : 5)">
                        <span class="flex items-center gap-2.5">
                            <span class="text-brand-500 font-mono text-xs font-bold">05.</span>
                            <span>How can I find course fees and duration details?</span>
                        </span>
                        <span
                            class="material-symbols-outlined text-brand-500 text-[22px] transition-transform duration-300 shrink-0"
                            :class="active === 5 ? 'rotate-180' : ''">expand_more</span>
                    </button>
                    <div class="px-4 sm:px-5 pb-5 text-xs sm:text-sm text-on-surface-variant leading-relaxed"
                        x-show="active === 5" x-collapse style="display: none;">
                        Course fees and durations differ depending on your selected
                        delivery mode. Contact our admissions team or request a course
                        guide; all fee schedules are transparently disclosed before
                        enrolment.
                    </div>
                </div>

            </div>