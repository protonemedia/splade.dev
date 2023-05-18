<ul class="text-base lg:text-sm space-y-9">
    @foreach($index as $header => $section)
        <li>
            <h2 class="font-display font-medium text-slate-900 dark:text-white">{{ $header }}</h2>

            <ul class="mt-2 space-y-2 border-l-2 border-slate-100 dark:border-slate-800 lg:mt-4 lg:space-y-4 lg:border-slate-200 lg:dark:border-slate-700">
                @foreach($section as $title => $link)
                    <li class="relative">
                        <Link href="{{ route('docs', $link) }}" @class([
                            'block w-full pl-3.5 before:pointer-events-none before:absolute before:-left-1 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-y-1/2 before:rounded-full',
                            'font-semibold text-sky-500 before:bg-sky-500' => $page === $link,
                            'text-slate-500 before:hidden before:bg-slate-300 hover:text-slate-600 hover:before:block dark:text-slate-400 dark:before:bg-slate-700 dark:hover:text-slate-300' => $page !== $link,
                        ])>
                            {{ $title }}
                        </Link>
                    </li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>