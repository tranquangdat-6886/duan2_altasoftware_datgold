<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login-Admin Little & Little</title>
    @include('backend.layouts.head');
</head>

<body style="background-color: #e9ecef;">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-lg-4 position-absolute top-50 start-50 translate-middle" id="khung_login">

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="title_lon_size46">Administrator</h1>
                    </div>
                </div>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />


                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="form-label label_altasoftware mb-0" for="email">Tên đăng nhập</label>
                            <input id="email" class="block mt-1 w-full form-control button_input" type="text"
                                name="login" :value="old('login')" autofocus autocomplete="username"
                                placeholder="Nhập Email hoặc username" />
                        </div>

                        <span class="mt-1 mb-0 error">
                            @if ($errors->has('login'))
                                @foreach ($errors->get('login') as $message)
                                    <i class="fa-regular fa-circle-exclamation"></i> {{ $message }}
                                @endforeach
                            @endif
                        </span>

                    </div>

                    <!-- Password -->
                    <div class="mt-4 row">
                        <div class="col-lg-12">
                            <label class="form-label label_altasoftware mb-0" for="password">Mật khẩu</label>

                            <input id="password" class="block mt-1 w-full button_input form-control" type="password"
                                name="password" autocomplete="current-password" placeholder="Nhập mật khẩu" />
                        </div>
                        <span class="mt-1 mb-0 error">
                            @if ($errors->has('password'))
                                @foreach ($errors->get('password') as $message)
                                    <i class="fa-regular fa-circle-exclamation"></i> {{ $message }}
                                @endforeach
                            @endif
                        </span>
                        <span class="mt-1 mb-0 error">
                            @if ($errors->has('errorlogin'))
                                @foreach ($errors->get('errorlogin') as $message)
                                    <i class="fa-regular fa-circle-exclamation"></i> {{ $message }}
                                @endforeach
                            @endif
                        </span>
                    </div>

                    <!-- Remember Me -->
                    {{-- <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-lg focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                name="remember">
                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div> --}}

                    <div class="flex items-center justify-end mt-1 row">
                        <div class="col-lg-12">
                            @if (Route::has('password.request'))
                                <a class="forgotPassword" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                        </div>
                        @endif


                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn login_button">Đăng nhập</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('frontend.layouts.script');
</body>

</html>
