<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Intro to Livewire - Laravel Switzerland Meeetup</title>

    <style>
        html {
            font-size: 32px;
        }
    </style>

    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="antialiased bg-slate-900 text-white flex min-h-screen flex-col items-center justify-center p-4">

<div>

    <div class="container bg-slate-700 max-w-xl p-4 md:p-8 rounded-xl">
        @yield('content')
    </div>
    <div class="mt-4 flex items-center justify-between gap-4 text-xs text-slate-300 font-semibold">
        <div>
            Laravel Switzerland Meetup 🇨🇭
        </div>
        <div>
            Intro to Livewire
        </div>
    </div>

</div>

@livewireScripts
</body>
</html>
