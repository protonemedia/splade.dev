<div class="h-screen overflow-y-scroll">
    {{-- Mobile menu --}}
    <nav class="lg:hidden bg-slate-50 dark:bg-slate-800 flex py-4 border-b border-gray-200 shadow-sm items-center justify-center sticky top-0 z-20">
        <Link href="/" title="Splade.dev Home">
            <x-logo class="h-6" />
        </Link>

        <x-splade-modal slideover name="mobile-menu" max-width="sm" class="dark:bg-slate-800">
            <nav class="mx-auto dark:bg-slate-800">
                @include('links')
            </nav>
        </x-splade-modal>

        <Link dusk="open-mobile-menu" href="#mobile-menu" class="absolute flex items-center justify-center right-0 top-0 h-full px-4 text-gray-400 hover:text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </Link>
    </nav>

    <div class="relative mx-auto flex max-w-8xl justify-center sm:px-2 lg:px-8 xl:px-12 min-h-screen">
        {{-- Desktop menu --}}
        <aside class="hidden lg:relative lg:block lg:flex-none">
            <div class="absolute inset-y-0 right-0 w-[50vw] bg-slate-50 dark:hidden z-0"></div>

            <Link href="/" title="Splade.dev Home" class="block sticky top-[4.5rem] left-0 w-full">
                <x-logo class="ml-2 xl:ml-8 mr-10 xl:mr-18" />
            </Link>

            <div @preserveScroll('sidebar') class="sticky top-[8em] h-[calc(100vh-8em)] overflow-x-hidden overflow-y-scroll py-8">
                <nav class="px-2 xl:px-8">
                    @include('links')
                </nav>
            </div>
        </aside>

        {{-- Actual documentation content --}}
        <main class="min-w-0 max-w-2xl flex-auto px-4 pt-8 pb-24 sm:py-16 lg:max-w-none lg:pr-0 lg:pl-8 xl:px-16 z-10">
            <x-splade-content
                as="article"
                class="prose-pre:p-0 prose prose-slate max-w-none dark:prose-invert dark:text-slate-400 prose-headings:scroll-mt-28 prose-headings:font-display prose-headings:font-normal lg:prose-headings:scroll-mt-[8.5rem] prose-lead:text-slate-500 dark:prose-lead:text-slate-400 prose-a:font-semibold dark:prose-a:text-sky-400 prose-a:no-underline prose-a:shadow-[inset_0_-2px_0_0_var(--tw-prose-background,#fff),inset_0_calc(-1*(var(--tw-prose-underline-size,4px)+2px))_0_0_var(--tw-prose-underline,theme(colors.sky.300))] hover:prose-a:[--tw-prose-underline-size:6px] dark:[--tw-prose-background:theme(colors.slate.900)] dark:prose-a:shadow-[inset_0_calc(-1*var(--tw-prose-underline-size,2px))_0_0_var(--tw-prose-underline,theme(colors.sky.800))] dark:hover:prose-a:[--tw-prose-underline-size:6px] prose-pre:rounded-xl prose-pre:bg-slate-900 prose-pre:shadow-lg dark:prose-pre:bg-slate-800/60 dark:prose-pre:shadow-none dark:prose-pre:ring-1 dark:prose-pre:ring-slate-300/10 dark:prose-hr:border-slate-800 break-words"
                :$html
            />
        </main>
    </div>
</div>