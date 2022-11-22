<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @googlefonts
        @googlefonts('display')

        @spladeHead
        @vite('resources/js/app.js')

        @production
            <script src="https://van-trusting.splade.dev/script.js" data-site="{{ config('services.fathom.site_id') }}" defer></script>
        @endproduction
    </head>
    <body class="font-sans antialiased overflow-hidden bg-white dark:bg-slate-900">
        <div class="aspect-w-16 aspect-h-9 hidden"></div>
        @splade
    </body>
</html>
