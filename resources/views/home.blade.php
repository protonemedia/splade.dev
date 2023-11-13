<div class="sm:snap-mandatory h-screen snap-y overflow-y-scroll">
    <div class="snap-start min-h-screen w-full flex items-center justify-center bg-gradient-to-b from-slate-300 via-gray-200 to-slate-50 relative dark:from-slate-900 dark:via-gray-900 dark:to-slate-800">
        <a
            href="https://www.youtube.com/watch?v=xf9XxmEor5k"
            target="_blank"
            class="absolute z-10 md:transform md:-rotate-45 bg-gradient-to-r from-[#632bd1] to-[#f34f83] text-center text-white font-semibold py-1 md:left-[-48px] top-0 left-0 md:top-[61px] w-full md:w-[250px]">
            Splade v2 Sneak Peek 👀
        </a>
        <div class="flex flex-col items-center px-8 relative py-16 min-h-screen">
            <div class="flex flex-col items-center mt-auto">
                <x-logo class="max-w-3xl w-full" />

                <h2 class="text-3xl max-w-xl xl:max-w-none sm:text-4xl mt-8 font-display font-light tracking-wide text-center text-slate-800 dark:text-white">
                    The <span class="tracking-normal font-bold bg-clip-text text-transparent bg-gradient-to-b from-[#632bd1] to-[#f34f83]">magic</span> of Inertia.js with the <span class="tracking-normal font-bold bg-clip-text text-transparent bg-gradient-to-t from-[#632bd1] to-[#f34f83]">simplicity</span> of Blade
                </h2>

                <button class="hidden md:block" @click.prevent="(e) => e.target.getRootNode().getElementById('feature-1').scrollIntoView({ behavior: 'smooth' })">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 mt-8 transition text-[#632bd1] hover:text-[#f34f83]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>

            <div class="mt-auto flex flex-col md:flex-row pt-16 space-y-4 md:space-y-0 md:space-x-4 text-xl text-center">
                <Link class="inline-block text-center rounded-md border border-transparent bg-[#632bd1] px-4 py-2 text-sm font-medium text-white shadow-md transition hover:bg-[#4D21A2] focus:outline-none focus:ring-2 focus:ring-[#7B4BDA] focus:ring-offset-2" href="/docs">Docs</Link>
                <a class="inline-block text-center rounded-md border border-transparent bg-[#632bd1] px-4 py-2 text-sm font-medium text-white shadow-md transition hover:bg-[#4D21A2] focus:outline-none focus:ring-2 focus:ring-[#7B4BDA] focus:ring-offset-2" target="_blank" href="https://github.com/protonemedia/laravel-splade">GitHub</a>
                <a class="inline-block text-center rounded-md border border-transparent bg-[#632bd1] px-4 py-2 text-sm font-medium text-white shadow-md transition hover:bg-[#4D21A2] focus:outline-none focus:ring-2 focus:ring-[#7B4BDA] focus:ring-offset-2" target="_blank" href="https://www.youtube.com/watch?v=9V9BUHtvwXI">Introduction Video</a>
                <a class="inline-block text-center rounded-md border border-transparent bg-[#632bd1] px-4 py-2 text-sm font-medium text-white shadow-md transition hover:bg-[#4D21A2] focus:outline-none focus:ring-2 focus:ring-[#7B4BDA] focus:ring-offset-2" target="_blank" href="https://discord.gg/qGJ4MkMQWm">Discord</a>
                <a class="inline-block text-center rounded-md border border-transparent bg-[#632bd1] px-4 py-2 text-sm font-medium text-white shadow-md transition hover:bg-[#4D21A2] focus:outline-none focus:ring-2 focus:ring-[#7B4BDA] focus:ring-offset-2" target="_blank" href="https://twitter.com/pascalbaljet">Twitter</a>
            </div>
        </div>
    </div>

    <x-feature
        id="feature-1"
        docs="introducing-splade"
        markdown="links"
        class="bg-gradient-to-r from-rose-100 to-teal-100">
        <x-slot:title>Links and form submissions <span class="highlight-pink">without full page reload?</span></x-slot:title>
        Splade provides a <span class="font-bold">super easy</span> way to build <i>Single Page Applications</i> (SPA) using standard <span class="font-bold">Laravel Blade</span> templates, enhanced with renderless <span class="font-bold">Vue 3</span> components. In essence, you can write your app using the simplicity of Blade, and besides that magic <i>SPA-feeling</i>, you can sparkle it to make it interactive. <span class="font-bold">All without ever leaving Blade</span>.
    </x-feature>

    <x-feature
        docs="x-modal" markdown="modals"
        class="bg-gradient-to-t from-indigo-200 via-red-200 to-yellow-100">
        <x-slot:title><span class="highlight-purple">Modals and slideovers</span> that can show <i>any</i> route?</x-slot:title>
        <x-slot:subtitle>(and how about <span class="highlight-pink">nested</span> modals?)</x-slot:subtitle>
        With the Modal Component, Splade has built-in support for <span class="font-bold">modals and slideover</span>. This component allows you to load any route into a modal. Besides loading the content asynchronously, it also supports pre-loaded content.
    </x-feature>

    <x-feature
        docs="x-data" markdown="data"
        class="bg-[conic-gradient(at_bottom_left,_var(--tw-gradient-stops))] from-fuchsia-200 via-green-300 to-rose-700">
        <x-slot:title><span class="highlight-pink">Async requests</span> and <span class="highlight-purple">interactive elements</span> without creating components or writing JavaScript?</x-slot:title>
        You may use the Data Component to interact with a set of reactive data inside the component. To get started, you don't even need to define a structure or a default set of data.
    </x-feature>

    <x-feature
        docs="x-form" markdown="form"
        class="bg-[conic-gradient(at_bottom_left,_var(--tw-gradient-stops))] from-yellow-50 via-fuchsia-300 to-rose-700">
        <x-slot:title>Beautiful <span class="highlight-pink">Form Components</span> with Eloquent Model binding, validation, datetime picker, searchable and taggable selects, and async uploads?</x-slot:title>
        Splade comes with a set of <span class="font-bold">Form Components</span> to rapidly build forms. It supports model binding and validation, integrates with <span class="font-bold">Autosize</span> to automatically adjust textarea height, <span class="font-bold">Choices.js</span> to make selects searchable and taggable, <span class="font-bold">Flatpickr</span> to provide a powerful datetime picker, and <span class="font-bold">FilePond</span> for smooth file uploads.
    </x-feature>

    <x-feature
        docs="table-overview"
        markdown="table"
        class="bg-[conic-gradient(at_top,_var(--tw-gradient-stops))] from-slate-900 via-slate-100 to-slate-900">
        <x-slot:title>A <span class="highlight-purple">DataTables-like Table Component</span> that supports auto-fill, searching, filtering, sorting, toggling, and pagination?</x-slot:title>
        Splade has an advanced Table component with built-in Query Builder. It supports searching through <span class="font-bold">multiple columns</span> and sorting by a <span class="font-bold">relationship column</span>. You may also perform <span class="font-bold">bulk actions</span> and <span class="font-bold">exports</span>.
    </x-feature>

    <x-feature
        docs="x-event"
        markdown="event"
        class="bg-gradient-to-l from-rose-100 to-teal-100">
        <x-slot:title>Listen for <span class="highlight-pink">broadcasted events</span> and <span class="highlight-pink">control browser behavior</span>, like redirecting, refreshing, or showing a toast, from the backend?
</x-slot:title>
        The <span class="font-bold">Event Component</span> might be the most incredible Splade component of all. You may instruct pages to <span class="font-bold">listen to more or more events</span> and redirect, refresh, or show a toast when the event is broadcasted.
    </x-feature>

    <x-feature
        docs="lazy-loading"
        markdown="lazy"
        class="bg-gradient-to-r from-blue-100 via-pink-100 to-yellow-100">
        <x-slot:title>Support for <span class="highlight-purple">Lazy Loading</span> + <span class="highlight-purple">Animations</span> + <span class="highlight-purple">Teleports</span> + <span class="highlight-purple">Persistent Layout</span>?</x-slot:title>
        The Lazy Component allows you to load sections of your <span class="font-bold">data and template lazily</span>. Splade also has support for Persistent Layouts, like a media player that <span class="font-bold">must continue playing</span> while your users navigate your app.
    </x-feature>

    <div class="snap-start min-h-screen w-full flex items-center justify-center bg-gradient-to-b from-gray-700 via-slate-900 to-black text-center">
        <div class="font-display text-white text-2xl font-light tracking-wide space-y-3 sm:space-y-5 px-8 max-w-5xl pt-16 pb-32 sm:pb-16">
            <h4 class="sm:text-3xl md:text-4xl pb-4 sm:pb-8 leading-9">Splade allows you to build <span class="font-semibold">Single Page Applications</span> with the <span class="font-semibold">Laravel Blade</span> templating engine while still having the full power of <span class="font-semibold">Vue.js</span>.</h4>
            <h4 class="sm:text-3xl md:text-4xl pb-4 sm:pb-8 leading-9">Besides all the built-in components, you can use <span class="font-semibold">existing Blade and Vue libraries</span>. It's not about replacing JavaScript. It's about giving you a <span class="font-semibold">massive head start</span> with the built-in components.</h4>
            <h6><a class="font-medium underline" href="https://github.com/protonemedia/laravel-splade" target="_blank">Open source</a> MIT License.</h6>
            <h5>Brought to you by <a class="font-medium underline" href="https://github.com/protonemedia" target="_blank">Protone Media</a>.</h5>
            <h5>Hosted using <a class="font-medium underline" href="https://eddy.management" target="_blank">Eddy Server Management</a>.</h5>
        </div>
    </div>
</div>