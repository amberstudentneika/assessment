<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
<div id="app">
    <header class="bg-blue-900 py-6">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div>
                <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                <a class="no-underline hover:underline" href="{{route('student')}}">{{ __('Student') }}</a>
                <a class="no-underline hover:underline" href="{{route('teacher')}}">{{ __('Teacher') }}</a>
                <a class="no-underline hover:underline" href="{{route('course')}}">{{ __('Course') }}</a>
                <a class="no-underline hover:underline" href="{{route('schedule')}}">{{ __('Schedule') }}</a>
                <a class="no-underline hover:underline" href="{{route('assignment')}}">{{ __('Assignment') }}</a>
{{--                <a class="no-underline hover:underline" href="">{{ __('Logout') }}</a>--}}
                <a href="{{ route('logout') }}" class="no-underline hover:underline" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                    </form>
            </nav>
        </div>
    </header>

    @yield('content')
</div>
@livewireScripts
</body>
</html>
