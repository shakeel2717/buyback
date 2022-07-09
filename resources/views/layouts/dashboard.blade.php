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
    @livewireStyles
    @powerGridStyles
</head>

<body class="main">
    <div class="mobile-menu d-md-none">
        <div class="mobile-menu-bar">
            <a href="" class="d-flex me-auto">
                <img alt="{{ env('APP_DESC') }}" class="w-6" src="{{ asset('assets/brand/logo-light.png') }}">
            </a>
            <a href="javascript:;" id="mobile-menu-toggler" class="mobile-menu-bar__toggler"> <i
                    data-feather="bar-chart-2" class="w-8 h-8 text-white"></i> </a>
        </div>
        <ul class="mobile-menu-wrapper border-top border-theme-29 dark-border-dark-3 py-5">
            <x-user.nav mode="0" />
        </ul>
    </div>
    <div class="d-flex">
        <nav class="side-nav">
            <a href="" class="intro-x d-flex align-items-center ps-5 pt-4">
                <img alt="{{ env('APP_DESC') }}" class="w-40" src="{{ asset('assets/brand/logo-light.png') }}">
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                <x-user.nav mode="1" />
            </ul>
        </nav>
        <div class="content">
            <div class="top-bar">
                <div class="-intro-x breadcrumb me-auto d-none d-sm-flex"> <a
                        href="">{{ env('APP_NAME') }}</a> <i data-feather="chevron-right"
                        class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">@yield('title')</a>
                </div>
                <div class="intro-x dropdown me-auto me-sm-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button"
                        aria-expanded="false" data-bs-toggle="dropdown"> <i data-feather="bell"
                            class="notification__icon dark-text-gray-300"></i> </div>
                    <div class="notification-content pt-2 dropdown-menu">
                        <div class="notification-content__box dropdown-content">
                            <div class="notification-content__title dark-text-gray-300">Notifications</div>

                        </div>
                    </div>
                </div>
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-pill overflow-hidden shadow-lg image-fit zoom-in"
                        role="button" aria-expanded="false" data-bs-toggle="dropdown">
                        <img alt="{{ env('APP_DESC') }}" src="{{ asset('assets/icons/user.png') }}">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-theme-26 dark-bg-dark-6 text-white">
                            <li class="p-2">
                                <div class="fw-medium text-white">{{ auth()->user()->name }}</div>
                                <div class="fs-xs text-theme-28 mt-0.5 dark-text-gray-600">
                                    {{ auth()->user()->email }}</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-theme-27 dark-border-dark-3">
                            </li>
                            <li>
                                <a href=""
                                    class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i
                                        data-feather="user" class="w-4 h-4 me-2"></i> Profile </a>
                            </li>
                            <li>
                                <a href=""
                                    class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i
                                        data-feather="lock" class="w-4 h-4 me-2"></i> Change Password </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-theme-27 dark-border-dark-3">
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"
                                        type="submit"><i data-feather="toggle-right" class="w-4 h-4 me-2"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="grid columns-12 gap-6">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @livewireScripts
    @powerGridScripts
    <x-alert />
</body>

</html>
