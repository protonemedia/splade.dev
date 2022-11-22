<div {{ $attributes->class('snap-start min-h-screen flex items-center justify-center') }}>
    <div class="max-w-full lg:max-w-4xl mx-auto py-32 px-4 sm:px-8 md:px-24 lg:px-8">
        <div class="leading-7 md:leading-9 text-center">
            <h3 class="font-display text-3xl md:text-4xl xl:text-5xl tracking-tight text-slate-900 max-w-2xl mx-auto">{{ $title }}</h3>
            @isset($subtitle) <h4 class="font-display text-2xl lg:text-3xl tracking-tight text-slate-900 mt-2">{{ $subtitle }}</h4> @endisset

            <p class="md:text-lg lg:text-xl my-8 xl:my-12 font-normal text-slate-800">{{ $slot }}</p>
        </div>

        <x-code-example :markdown="$markdown" :docs="$docs" />
    </div>
</div>