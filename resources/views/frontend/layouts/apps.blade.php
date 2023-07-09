<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('frontend.layouts.head')
</head>

<body>
    <div class="container-fluid">

        <header class="position-relative">
            @include('frontend.layouts.menu')
        </header>
        <main class="position-relative">

            @yield('main-content')
        </main>
    </div>


    @include('frontend.layouts.script')

</body>

</html>
