<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="utf-8">
    <link href="{{ asset('assets/brand/favi-dark.png') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ env('APP_DESC') }}">
    <meta name="keywords" content="{{ env('APP_KEYWORDS') }}">
    <meta name="author" content="ASAN WEBS Development">
    <title>@yield('title') {{ env('APP_NAME') }} - {{ env('APP_DESC') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
</head>

<body class="login">
    <div class="container px-sm-10">
        <div class="grid columns-2 gap-4">
            <div class="g-col-2 g-col-xl-1 d-none d-xl-flex flex-column min-vh-screen">
                <a href="" class="-intro-x d-flex align-items-center pt-5">
                    <img alt="{{ env('APP_DESC') }}" src="{{ asset('assets/brand/logo-light.png') }}">
                </a>
                <div class="my-auto">
                    <img alt="{{ env('APP_DESC') }}" class="-intro-x w-1/2 mt-n16"
                        src="{{ asset('assets/icons/analytical.png') }}">
                    <div class="-intro-x text-white fw-medium fs-4xl lh-base mt-10">
                        {{ env('APP_DESC') }}
                    </div>
                    <div class="-intro-x mt-5 fs-lg text-white text-opacity-70 dark-text-gray-500">
                        {{ env('APP_LONG_DESC') }}</div>
                </div>
            </div>
            @yield('form')
        </div>
    </div>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <x-alert />
</body>

</html>
