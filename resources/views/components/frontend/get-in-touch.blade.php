<form id="get-in-touch-form" action="{{ route('contact.store') }}" method="POST">
    @csrf
    <input type="hidden" name="form_type" value="get_in_touch">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <x-form.input-text name="name" label="Full Name" value="" placeholder="Enter Full Name..." />
        <x-form.input-text name="email" label="Email" type="email" value="" placeholder="Enter Email..." />

    </div>
    <div class="space-y-4 mt-4">
        <x-form.input-text name="phone" label="Phone" value="" placeholder="Enter Phone No..." />
        <x-form.textarea-input name="message" label="Note" rows="3" placeholder="Write your note..." />
    </div>

    <div class="flex justify-end mt-4 md:mt-6">
        <button type="submit"
            class=" text-base   bg-brand-600 text-white px-4 py-2.5 lg:px-6 lg:py-3 rounded-lg font-normal hover:bg-brand-600 transition">
            Submit Message
        </button>
    </div>
</form>

@if ($errors->any())
    <script>
        window.addEventListener('load', () => {

            document
                .getElementById('get-in-touch-form')
                ?.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

            const firstErrorField = document.querySelector(
                '.is-invalid, [aria-invalid="true"], .border-red-500'
            );

            firstErrorField?.focus();
        });
    </script>
@endif

