<div class="h-screen w-full flex items-center justify-center bg-gradient-to-r from-gray-100 to-gray-300">
    <div class="flex flex-col items-center">
        <x-logo class="max-w-3xl w-full" />

        <p class="text-3xl max-w-xl xl:max-w-none sm:text-4xl mt-8 font-display font-light tracking-wide text-center dark:text-white">
            The <span class="tracking-normal font-extrabold bg-clip-text text-transparent bg-gradient-to-b from-[#632bd1] to-[#f34f83]">magic</span> of Inertia.js with the <span class="tracking-normal font-extrabold bg-clip-text text-transparent bg-gradient-to-t from-[#632bd1] to-[#f34f83]">simplicity</span> of  Blade
        </p>

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </div>
</div>

{{-- <div class="relative mx-auto flex flex-col max-w-8xl items-center justify-center px-4 lg:px-8 xl:px-12 min-h-screen">
        <div class="flex flex-col items-center w-full max-w-5xl py-16">
            <x-logo class="max-w-3xl w-full" />

            <p class="text-3xl max-w-xl xl:max-w-none sm:text-4xl mt-8 font-display font-light tracking-wide text-center dark:text-white">
                The <span class="tracking-normal font-extrabold bg-clip-text text-transparent bg-gradient-to-b from-[#632bd1] to-[#f34f83]">magic</span> of Inertia.js with the <span class="tracking-normal font-extrabold bg-clip-text text-transparent bg-gradient-to-t from-[#632bd1] to-[#f34f83]">simplicity</span> of  Blade
            </p>

            <div class="flex flex-col md:flex-row mt-16 space-y-4 md:space-y-0 md:space-x-4 text-xl text-center">
                <a class="
                    font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-500 px-6 py-3 transition
                    hover:bg-gradient-to-r from-[#632bd1] to-[#f34f83] hover:text-white rounded-xl shadow
                " href="/docs">Docs</a>
                <a class="
                    font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-500 px-6 py-3 transition
                    hover:bg-gradient-to-r from-[#632bd1] to-[#f34f83] hover:text-white rounded-xl shadow
                " target="_blank" href="https://github.com/protonemedia/laravel-splade">GitHub</a>
                <a class="
                    font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-500 px-6 py-3 transition
                    hover:bg-gradient-to-r from-[#632bd1] to-[#f34f83] hover:text-white rounded-xl shadow
                " target="_blank" href="https://www.youtube.com/watch?v=9V9BUHtvwXI">Introduction Video</a>
                <a class="
                    font-medium text-gray-900 bg-yellow-400 hover:bg-yellow-500 px-6 py-3 transition
                    hover:bg-gradient-to-r from-[#632bd1] to-[#f34f83] hover:text-white rounded-xl shadow
                " target="_blank" href="https://twitter.com/pascalbaljet">Twitter</a>
            </div>

            <div class="mt-16 p-2 rounded-3xl bg-gradient-to-r from-[#632bd1] to-[#f34f83] max-w-3xl shadow transition hover:scale-105">
                <div class="bg-white dark:bg-slate-800 px-8 py-12 rounded-2xl">
                    <ul class="text-xl sm:text-2xl font-light font-display text-center text-gray-700 dark:text-white space-y-6 sm:space-y-8">
                        <li class="leading-8">Links and form submissions <span class="font-medium text-gray-900 dark:text-white dark:font-bold">without full page reload</span>?</li>
                        <li class="leading-8">
                            <p><span class="font-medium text-gray-900 dark:text-white dark:font-bold">Modals and slideovers</span> that can show <i>any</i> route?</p>
                            <p class="text-lg sm:text-xl">(and how about <span class="font-medium text-gray-900 dark:text-white dark:font-bold">nested</span> modals?)</p>
                        </li>
                        <li class="leading-8"><span class="font-medium text-gray-900 dark:text-white dark:font-bold">Toasts</span>, at any position, with <span class="font-medium text-gray-900 dark:text-white dark:font-bold">one line</span> of code?</li>
                        <li class="leading-8"><span class="font-medium text-gray-900 dark:text-white dark:font-bold">Async requests</span> and <span class="font-medium text-gray-900 dark:text-white dark:font-bold">interactive elements</span> without creating components or writing JavaScript?</li>
                        <li class="leading-8">A <span class="font-medium text-gray-900 dark:text-white dark:font-bold">DataTables-like</span> Table Component that supports auto-fill, searching, filtering, sorting, toggling, and pagination?</li>
                        <li class="leading-8">Support for <span class="font-medium text-gray-900 dark:text-white dark:font-bold">Lazy Loading</span> sections of the data and template, <span class="font-medium text-gray-900 dark:text-white dark:font-bold">animations</span>, <span class="font-medium text-gray-900 dark:text-white dark:font-bold">teleports</span>, and <span class="font-medium text-gray-900 dark:text-white dark:font-bold">persistent layout</span>?</li>
                        <li class="leading-8">Beautiful <span class="font-medium text-gray-900 dark:text-white dark:font-bold">Form Components</span> with Eloquent Model binding, validation, date/time picker, searchable/taggable selects?</li>
                        <li class="leading-8">Listen for <span class="font-medium text-gray-900 dark:text-white dark:font-bold">broadcasted events</span> and <span class="font-medium text-gray-900 dark:text-white dark:font-bold">control browser behavior</span>, like redirecting, refreshing, or showing a toast, from the backend?</li>
                        <li class="leading-8">
                        <li class="leading-9 pt-3">
                            <p class="max-w-lg flex-inline items-center justify-center mx-auto">
                                <span class="border-b-4 font-medium border-yellow-400 text-black dark:text-white italic inline">
                                    ...all without learning yet another framework, library, or package?
                                </span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}