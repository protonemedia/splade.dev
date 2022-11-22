<div {{ $attributes->class('flex flex-col items-center') }}>
    <x-splade-content class="w-fit max-w-full home-code-example" :html="$markdown" />

    <Link class="inline-block transition bg-[#632bd1] hover:bg-[#f34f83] text-white font-semibold text-sm rounded-md shadow-md px-4 py-2 mt-4 " href="/docs/{{ $docs }}">
        Read more<span aria-hidden="true"> →</span>
    </Link>
</div>