<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @googlefonts
        @googlefonts('display')

        @spladeHead
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#b940a2">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
        @vite('resources/js/app.js')

        @production
            <script src="https://van-trusting.splade.dev/script.js" data-spa="auto" data-site="{{ config('services.fathom.site_id') }}" defer></script>
        @endproduction
    </head>
    <body class="font-sans antialiased overflow-hidden bg-white dark:bg-slate-900">
        <div class="aspect-w-16 aspect-h-9 hidden"></div>
        @splade
    </body>
</html>
