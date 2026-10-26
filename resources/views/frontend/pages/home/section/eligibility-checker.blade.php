   <section class="w-full py-12 sm:py-16 lg:py-20 bg-surface" id="eligibility-checker" x-data="{
        step: 1,
        selectedQual: 'BSB50420',
        totalSteps: 4,
        formData: { name: '', phone: '', email: '' },
        get progressPercent() {
            return (this.step / this.totalSteps) * 100;
        },
        get stepTitle() {
            switch (this.step) {
                case 1:
                    return 'Step 1 of 4: Qualification of Interest';
                case 2:
                    return 'Step 2 of 4: Practical Background';
                case 3:
                    return 'Step 3 of 4: Supporting Evidence Indicator';
                case 4:
                    return 'Step 4 of 4: Contact & Submission';
                default:
                    return '';
            }
        }
    }">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="text-center mb-6 sm:mb-8 lg:mb-10">
                <div
                    class="inline-flex items-center gap-1.5 px-3 py-1 bg-brand-500/10 text-brand-500 rounded-full mb-3 text-[11px] font-bold font-heading uppercase tracking-wider">
                    <span>Fast Evaluation Tool</span>
                </div>
                <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-bold text-[#182F5A] tracking-tight">
                    Let's Find the Right Pathway for You
                </h2>
                <p class="text-sm sm:text-base text-on-surface-variant max-w-xl mx-auto mt-2 leading-relaxed">
                    Complete our short self-assessment to discover which national
                    qualification and study delivery best fits your career
                    background.
                </p>
            </div>

            <!-- Card Container -->
            <div class="bg-white rounded-2xl p-6 sm:p-8 lg:p-10 shadow-xl border border-slate-200">

                <!-- Progress Bar Header -->
                <div class="mb-8">
                    <div class="flex items-center justify-between text-xs text-on-surface-variant mb-2 font-medium">
                        <span class="font-bold text-[#182F5A]" x-text="stepTitle"></span>
                        <span x-text="Math.round(progressPercent) + '% Completed'"></span>
                    </div>
                    <div class="w-full h-2.5 bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-brand-500 rounded-full transition-all duration-300"
                            :style="`width: ${progressPercent}%`"></div>
                    </div>
                </div>

                <form @submit.prevent="if(step === 4) { step = 5; }">

                    <!-- Step 1: Qualification Selection -->
                    <div class="flex flex-col gap-4" x-show="step === 1" x-transition.opacity>
                        <h3 class="font-heading text-base sm:text-lg font-bold text-[#182F5A]">
                            Which qualification do you want to explore?
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <template
                                x-for="qual in [
                            {code: 'BSB50420', title: 'Diploma of Leadership and Management'},
                            {code: 'BSB60420', title: 'Advanced Diploma of Leadership'},
                            {code: 'CHC33021', title: 'Certificate III in Individual Support'},
                            {code: 'CHC43015', title: 'Certificate IV in Ageing Support'},
                            {code: 'CHC43315', title: 'Certificate IV in Mental Health'},
                            {code: 'CHC52025', title: 'Diploma of Community Services'},
                            {code: 'HLT33021', title: 'Certificate III in Allied Health Assistance', span: true}
                        ]">
                                <label
                                    class="flex items-start gap-3 p-4 rounded-xl bg-slate-50 hover:bg-slate-100 border transition-all cursor-pointer"
                                    :class="selectedQual === qual.code ? 'border-brand-500 bg-brand-500/5 shadow-sm' :
                                        'border-slate-200'"
                                    :class="qual.span ? 'sm:col-span-2' : ''">
                                    <input class="mt-1 text-brand-500 focus:ring-brand-500" name="target_qual"
                                        type="radio" :value="qual.code" x-model="selectedQual" />
                                    <div>
                                        <span class="text-xs font-bold text-brand-500 block font-heading"
                                            x-text="qual.code"></span>
                                        <span class="text-xs sm:text-sm font-semibold text-[#182F5A]"
                                            x-text="qual.title"></span>
                                    </div>
                                </label>
                            </template>
                        </div>
                    </div>

                    <!-- Step 2: Practical Background -->
                    <div class="flex flex-col gap-5" x-show="step === 2" x-transition.opacity style="display: none;">
                        <h3 class="font-heading text-base sm:text-lg font-bold text-[#182F5A]">
                            Your Practical Background &amp; Preferences
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="text-xs font-semibold text-[#182F5A] block mb-1">Australian Industry
                                    Experience</label>
                                <select
                                    class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-on-surface text-xs focus:outline-none focus:border-brand-500 focus:bg-white transition-colors">
                                    <option value="none">Less than 1 year / New to industry</option>
                                    <option value="1-2">1 to 2 years relevant experience</option>
                                    <option value="3-5">3 to 5 years solid experience</option>
                                    <option value="5+">5+ years senior or supervisor experience</option>
                                </select>
                            </div>
                            <div>
                                <label class="text-xs font-semibold text-[#182F5A] block mb-1">Highest Australian
                                    Qualification Held</label>
                                <select
                                    class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-on-surface text-xs focus:outline-none focus:border-brand-500 focus:bg-white transition-colors">
                                    <option value="year12">Year 12 / Secondary School</option>
                                    <option value="cert3">Certificate III</option>
                                    <option value="cert4">Certificate IV</option>
                                    <option value="diploma">Diploma / Advanced Diploma</option>
                                    <option value="degree">Bachelor Degree or Higher</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-[#182F5A] block mb-2">Preferred Study Mode</label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 text-xs">
                                <label
                                    class="p-3 rounded-xl bg-slate-50 hover:bg-slate-100 border border-slate-200 flex items-center gap-2.5 cursor-pointer font-medium text-[#182F5A]">
                                    <input checked name="learning_mode" type="radio" value="blended"
                                        class="text-brand-500 focus:ring-brand-500" />
                                    <span>Blended Learning</span>
                                </label>
                                <label
                                    class="p-3 rounded-xl bg-slate-50 hover:bg-slate-100 border border-slate-200 flex items-center gap-2.5 cursor-pointer font-medium text-[#182F5A]">
                                    <input name="learning_mode" type="radio" value="workplace"
                                        class="text-brand-500 focus:ring-brand-500" />
                                    <span>Workplace Training</span>
                                </label>
                                <label
                                    class="p-3 rounded-xl bg-slate-50 hover:bg-slate-100 border border-slate-200 flex items-center gap-2.5 cursor-pointer font-medium text-[#182F5A]">
                                    <input name="learning_mode" type="radio" value="rpl"
                                        class="text-brand-500 focus:ring-brand-500" />
                                    <span>RPL Assessment Only</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Supporting Evidence -->
                    <div class="flex flex-col gap-4" x-show="step === 3" x-transition.opacity style="display: none;">
                        <h3 class="font-heading text-base sm:text-lg font-bold text-[#182F5A]">
                            Supporting Evidence Indicator
                        </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant">
                            Tick any documents or records you currently have access to:
                        </p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
                            <label
                                class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 hover:bg-slate-100 border border-slate-200 cursor-pointer font-medium text-[#182F5A]">
                                <input checked class="rounded text-brand-500 focus:ring-brand-500" name="evidence"
                                    type="checkbox" value="resume" />
                                <span>Current Resume / CV</span>
                            </label>
                            <label
                                class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 hover:bg-slate-100 border border-slate-200 cursor-pointer font-medium text-[#182F5A]">
                                <input class="rounded text-brand-500 focus:ring-brand-500" name="evidence"
                                    type="checkbox" value="contracts" />
                                <span>Employment Contracts / Duties</span>
                            </label>
                            <label
                                class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 hover:bg-slate-100 border border-slate-200 cursor-pointer font-medium text-[#182F5A]">
                                <input class="rounded text-brand-500 focus:ring-brand-500" name="evidence"
                                    type="checkbox" value="payslips" />
                                <span>Recent Payslips / Work Letters</span>
                            </label>
                            <label
                                class="flex items-center gap-3 p-3 rounded-xl bg-slate-50 hover:bg-slate-100 border border-slate-200 cursor-pointer font-medium text-[#182F5A]">
                                <input class="rounded text-brand-500 focus:ring-brand-500" name="evidence"
                                    type="checkbox" value="certificates" />
                                <span>Prior Certificates or Transcripts</span>
                            </label>
                        </div>
                        <div
                            class="p-3 bg-brand-500/5 rounded-xl flex items-center gap-2.5 text-xs text-brand-500 border border-brand-500/15">
                            <span class="material-symbols-outlined text-[18px]">info</span>
                            <span>Document upload is not required now. Our assessor will guide you through evidence
                                collection later.</span>
                        </div>
                    </div>

                    <!-- Step 4: Contact & Submission -->
                    <div class="flex flex-col gap-4" x-show="step === 4" x-transition.opacity style="display: none;">
                        <h3 class="font-heading text-base sm:text-lg font-bold text-[#182F5A]">
                            Where should we send your pathway summary?
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="text-xs font-semibold text-[#182F5A] block mb-1">Full Legal Name</label>
                                <input
                                    class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-on-surface text-xs focus:outline-none focus:border-brand-500 focus:bg-white"
                                    id="wiz_name" x-model="formData.name" placeholder="Marcus Vance" required
                                    type="text" />
                            </div>
                            <div>
                                <label class="text-xs font-semibold text-[#182F5A] block mb-1">Mobile Contact</label>
                                <input
                                    class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-on-surface text-xs focus:outline-none focus:border-brand-500 focus:bg-white"
                                    id="wiz_phone" x-model="formData.phone" placeholder="0412 345 678" required
                                    type="tel" />
                            </div>
                        </div>
                        <div>
                            <label class="text-xs font-semibold text-[#182F5A] block mb-1">Email Address</label>
                            <input
                                class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-on-surface text-xs focus:outline-none focus:border-brand-500 focus:bg-white"
                                id="wiz_email" x-model="formData.email" placeholder="marcus.vance@gmail.com" required
                                type="email" />
                        </div>
                        <div class="flex items-start gap-2.5 pt-1 text-xs text-on-surface-variant">
                            <input checked class="mt-0.5 rounded text-brand-500 focus:ring-brand-500" id="wiz_consent"
                                required type="checkbox" />
                            <label for="wiz_consent" class="cursor-pointer">I confirm the information supplied is accurate
                                and agree to receive enrolment consultation from Nubex College (RTO 46173).</label>
                        </div>
                    </div>

                    <!-- Success Screen -->
                    <div class="flex flex-col items-center justify-center text-center py-8 gap-3" x-show="step === 5"
                        x-transition.opacity style="display: none;">
                        <div
                            class="w-16 h-16 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mb-1">
                            <span class="material-symbols-outlined text-[36px]">task_alt</span>
                        </div>
                        <h3 class="font-heading text-xl font-bold text-[#182F5A]">
                            Enquiry Received!
                        </h3>
                        <p class="text-xs sm:text-sm text-on-surface-variant max-w-md">
                            Thank you for your enquiry. Our team will review the information provided and explain next steps
                            within one business day.
                        </p>
                        <span class="text-xs font-mono text-brand-500 mt-1 font-bold">CONFIRMATION REF:
                            NBX-2026-ELIG</span>
                        <button
                            class="mt-4 px-6 py-2.5 rounded-xl bg-slate-100 text-[#182F5A] text-xs font-semibold hover:bg-slate-200 transition-colors"
                            @click="step = 1; formData = {name:'', phone:'', email:''}" type="button">
                            Submit Another Enquiry
                        </button>
                    </div>

                    <!-- Navigation Controls -->
                    <div class="flex items-center justify-between pt-6 mt-6 border-t border-slate-100" x-show="step <= 4">
                        <button
                            class="px-5 py-2.5 rounded-xl bg-slate-100 text-[#182F5A] text-xs font-semibold hover:bg-slate-200 transition-colors"
                            type="button" @click="if(step > 1) step--" x-show="step > 1">
                            Back
                        </button>
                        <div class="ml-auto">
                            <button
                                class="inline-flex items-center gap-2 px-6 py-3 bg-brand-500 hover:bg-[#155b9d] active:scale-95 text-white font-heading font-semibold text-sm rounded-xl shadow-md transition-all"
                                type="button" @click="if(step < 4) { step++; } else { step = 5; }"
                                x-text="step === 4 ? 'Request Consultation' : 'Continue'">
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>