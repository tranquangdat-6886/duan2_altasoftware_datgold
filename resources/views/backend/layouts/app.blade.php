<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    @include('backend.layouts.head')
</head>

<body class="font-sans antialiased">
    <div class="container-fluid position-relative">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 mx-0 pe-0  border  menu">

                        <h1 class="title_lon_size46 text-center">DatGold</h1>
                        <ul class="navbar-nav ">
                            <li class="nav-item font_19 ">
                                <a href="" class="nav-link ">Dashboard</a>
                            </li>
                            <li class="nav-item font_19 ">
                                <a href="{{ route('package.index') }}" class="nav-link ">Packages</a>
                            </li>
                            <li class="nav-item font_19 ">
                                <a href="{{ route('events.index') }}" class="nav-link ">Events</a>
                            </li>
                            <li class="nav-item font_19 ">
                                <a href="{{ route('ticket.index') }}" class="nav-link ">Tickets</a>
                            </li>
                            <li class="nav-item font_19 ">
                                <a href="{{route('order')}}" class="nav-link ">Orders</a>
                            </li>
                            <li class="nav-item font_19 ">
                                <a href="" class="nav-link ">Contacts</a>
                            </li>
                            <li class="nav-item font_19 ">
                                <a href="" class="nav-link ">Settings</a>
                            </li>
                        </ul>
                        {{-- <x-responsive-nav-link :href=""
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link> --}}
                        <div class="dangxuat">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf

                                <button type="submit" class="btn button_logout">
                                    <i class="fa-solid fa-right-from-bracket"></i> Log Out
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-12 text-start phanright">
                        <div class="row">
                            <div class="col-lg-3 border">

                            </div>
                            <div class="col-lg-9 ">
                                <div class="row">
                                    <div class="col-lg-12 ps-0 text-start border">
                                        @include('backend.layouts.navigation')
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <main>
                                            @yield('main-content')
                                        </main>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('backend.layouts.script')
</body>

</html>
