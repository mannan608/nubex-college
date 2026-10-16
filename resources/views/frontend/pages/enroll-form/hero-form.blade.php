
<form action="{{ route('enroll') }}" method="POST" class="flex flex-col gap-3" id="enrollForm">
    @csrf

    <input type="hidden" name="form_type" value="consultation">

 
{{-- Success Message --}}
@if (session('success'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 3500)"
        x-show="show"
        x-transition:leave="transition ease-in duration-500"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="rounded-lg border border-green-200 bg-green-50 p-3 text-sm text-green-700"
        role="status"
        aria-live="polite"
    >
        {{ session('success') }}
    </div>
@endif

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
        <div>
            <label for="full_name"
                class="block mb-1 text-[13px] font-medium text-slate-700">
                Full Name
            </label>

            <input
                id="full_name"
                name="full_name"
                value="{{ old('full_name') }}"
                aria-invalid="{{ $errors->has('full_name') ? 'true' : 'false' }}"
                @if ($errors->has('full_name')) aria-describedby="full_name_error" @endif
                class="w-full px-3 py-2 text-xs dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 rounded-lg border border-neutral-300 bg-transparent text-neutral-800 placeholder:text-neutral-400 focus:ring-3 focus:outline-hidden dark:border-neutral-700 dark:bg-neutral-900 dark:text-white/90 dark:placeholder:text-white/30"
                placeholder="Sarah Jenkins" required type="text" />

            @error('full_name')
                <p id="full_name_error" class="mt-1 text-xs text-red-600"
                   role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="phone"
                class="block mb-1 text-[13px] font-medium text-slate-700">
                Mobile Number
            </label>

            <input
                id="phone"
                name="phone"
                value="{{ old('phone') }}"
                aria-invalid="{{ $errors->has('phone') ? 'true' : 'false' }}"
                @if ($errors->has('phone')) aria-describedby="phone_error" @endif
                class="w-full px-3 py-2 text-xs dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 rounded-lg border border-neutral-300 bg-transparent text-neutral-800 placeholder:text-neutral-400 focus:ring-3 focus:outline-hidden dark:border-neutral-700 dark:bg-neutral-900 dark:text-white/90 dark:placeholder:text-white/30"
                placeholder="0400 000 000" required type="tel" />

            @error('phone')
                <p id="phone_error" class="mt-1 text-xs text-red-600"
                   role="alert">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div>
        <label for="email"
            class="block mb-1 text-[13px] font-medium text-slate-700">
            Email Address
        </label>

        <input
            id="email"
            name="email"
            value="{{ old('email') }}"
            aria-invalid="{{ $errors->has('email') ? 'true' : 'false' }}"
            @if ($errors->has('email')) aria-describedby="email_error" @endif
            class="w-full px-3 py-2 text-xs dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 rounded-lg border border-neutral-300 bg-transparent text-neutral-800 placeholder:text-neutral-400 focus:ring-3 focus:outline-hidden dark:border-neutral-700 dark:bg-neutral-900 dark:text-white/90 dark:placeholder:text-white/30"
            placeholder="s.jenkins@example.com.au" required type="email" />

        @error('email')
            <p id="email_error" class="mt-1 text-xs text-red-600"
               role="alert">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
        <div>
            <label for="qualification"
                class="block mb-1 text-[13px] font-medium text-slate-700">
                Target Qualification
            </label>

            <select
                name="qualification"
                id="qualification"
                aria-invalid="{{ $errors->has('qualification') ? 'true' : 'false' }}"
                @if ($errors->has('qualification')) aria-describedby="qualification_error" @endif
                class="w-full px-3 py-2 text-xs dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 rounded-lg border border-neutral-300 bg-transparent pr-11 text-neutral-800 placeholder:text-neutral-400 focus:ring-3 focus:outline-hidden dark:border-neutral-700 dark:bg-neutral-900 dark:text-white/90 dark:placeholder:text-white/30"
                required>

                <option value="" disabled
                    {{ old('qualification') ? '' : 'selected' }}>
                    Select course...
                </option>

                @foreach ($qualifications as $qualification)
                    <option
                        value="{{ $qualification['code'] }}"
                        @selected(old('qualification') == $qualification['code'])>
                        {{ $qualification['code'] }} - {{ $qualification['title'] }}
                    </option>
                @endforeach
            </select>

            @error('qualification')
                <p id="qualification_error" class="mt-1 text-xs text-red-600"
                   role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="preferred_pathway"
                class="block mb-1 text-[13px] font-medium text-slate-700">
                Preferred Pathway
            </label>

            <select
                id="preferred_pathway"
                name="preferred_pathway"
                aria-invalid="{{ $errors->has('preferred_pathway') ? 'true' : 'false' }}"
                @if ($errors->has('preferred_pathway')) aria-describedby="preferred_pathway_error" @endif
                class="w-full px-3 py-2 text-xs dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 rounded-lg border border-neutral-300 bg-transparent pr-11 text-neutral-800 placeholder:text-neutral-400 focus:ring-3 focus:outline-hidden dark:border-neutral-700 dark:bg-neutral-900 dark:text-white/90 dark:placeholder:text-white/30"
                required>

                <option value="" disabled
                    {{ old('preferred_pathway') ? '' : 'selected' }}>
                    Select mode...
                </option>

                <option value="online"
                    @selected(old('preferred_pathway') === 'online')>
                    Online Self-Paced
                </option>

                <option value="blended"
                    @selected(old('preferred_pathway') === 'blended')>
                    Blended Learning
                </option>

                <option value="workplace"
                    @selected(old('preferred_pathway') === 'workplace')>
                    Workplace Based
                </option>

                <option value="rpl"
                    @selected(old('preferred_pathway') === 'rpl')>
                    Recognition of Prior Learning (RPL)
                </option>
            </select>

            @error('preferred_pathway')
                <p id="preferred_pathway_error" class="mt-1 text-xs text-red-600"
                   role="alert">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="flex items-start gap-2 pt-1">
        <input
            class="mt-0.5 rounded text-primary focus:ring-secondary shrink-0 cursor-pointer"
            id="hero-consent"
            name="terms_accepted"
            value="1"
            @checked(old('terms_accepted'))
            aria-invalid="{{ $errors->has('terms_accepted') ? 'true' : 'false' }}"
            @if ($errors->has('terms_accepted')) aria-describedby="terms_accepted_error" @endif
            required
            type="checkbox" />

        <label
            class="text-[11px] leading-tight text-on-surface-variant cursor-pointer select-none"
            for="hero-consent">
            I consent to Nubex College contacting me regarding
            course details in accordance with the Privacy Act 1988.
        </label>
    </div>

    @error('terms_accepted')
        <p id="terms_accepted_error" class="text-xs text-red-600"
           role="alert">{{ $message }}</p>
    @enderror

    <button
        class="mt-2 w-full py-3 bg-secondary hover:bg-secondary/90 active:scale-[0.98] text-white font-heading font-semibold text-sm rounded-lg shadow-md transition-all flex items-center justify-center gap-2"
        type="submit">
        <span>Request Free Consultation</span>
        <span class="material-symbols-outlined text-[16px]!">send</span>
    </button>
</form>
