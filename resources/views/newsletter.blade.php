@seoTitle('Splade Newsletter')

<div class="min-h-screen flex items-center justify-center">
    <div class="max-w-2xl mx-auto">
        <x-splade-modal max-width="lg">
            <x-splade-form class="space-y-4" :action="route('newsletter.store')">
                <h1 class="text-2xl font-bold">
                    Subscribe to the Splade Newsletter!
                </h1>

                <x-honeypot />
                <x-splade-input autofocus type="email" name="email" label="Email" />
                <x-splade-submit />
            </x-splade-form>
        </x-splade-modal>
    </div>
</div>