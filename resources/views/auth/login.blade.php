{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
<style>
    .checkbox {
        width: 263px;
        height: 60px;
        background-color: #d0d0d0;
        border-radius: 30px;
        position: relative;
        color: black;
        overflow: hidden;
    }

    #checkbox_toggle {
        display: none;
    }

    .checkbox .toggle {
        width: 140px;
        height: 50px;
        position: absolute;
        border-radius: 30px;
        left: 5px;
        cursor: pointer;
        background: linear-gradient(40deg, #83b9f7, #83b9f7 70%);
        transition: 0.4s;
        box-shadow: -0px -0px 10px #83b9f7, -0px -0px 30px #83b9f7;
    }

    .checkbox .slide {
        width: 230px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: space-around;
        cursor: pointer;
    }

    .checkbox .slide .text {
        font-size: 16px;
        font-weight: 700;
        z-index: 100;
        cursor: pointer;
    }

    .check:checked+.checkbox .slide .toggle {
        transform: translateX(113px);
        background: linear-gradient(40deg, #83b9f7, #A3DAFB 70%);
        box-shadow: -0px -0px 10px #83b9f7, -0px -0px 30px #83b9f7;
    }

    .check:checked+.checkbox .slide {
        background-color: #d0d0d0;
        color: #fff;
    }

    .container1 {
        float: left;
    }

    .container-img {
        margin-top: -400px;
        margin-left: 500px;
        width: 500px;
        float: right;
        height: 500px;
        position: relative;
        top: 445px;
    }
</style>
<x-guest-layout>
    <main id="main" class="main-site left-sidebar">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
                    <li class="item-link"><span>login</span></li>
                </ul>
            </div>
            <div class="container-img"><img src="/assets/images/login-background.png" alt="background image"
                    srcset=""></div>
        </div>

        <div class="container1">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="login-form form-item form-stl">
                                <x-jet-validation-errors class="mb-4" />
                                <form name="frm-login" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <center><input class="check" type="checkbox" id="checkbox_toggle">
                                        <div class="checkbox">
                                            <label for="checkbox_toggle" class="slide">
                                                <label for="checkbox_toggle" class="toggle"></label>
                                                <label for="checkbox_toggle"
                                                    class="text">Cashier&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                <label for="checkbox_toggle"
                                                    class="text">Admin&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                            </label>
                                        </div>
                                    </center>
                                    <fieldset class="wrap-title">

                                        <h3 class="form-title">Log in to your account</h3>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-uname">Email Address:</label>
                                        <input type="email" id="frm-login-uname" name="email"
                                            placeholder="Type your email address" :value="old('email')" required
                                            autofocus>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-pass">Password:</label>
                                        <input type="password" id="frm-login-pass" name="password"
                                            placeholder="************" required autocomplete="current-password">
                                    </fieldset>

                                    <fieldset class="wrap-input">
                                        <label class="remember-field">
                                            <input class="frm-input " name="remember" id="rememberme" value="forever"
                                                type="checkbox"><span>Remember me</span>
                                        </label>
                                        <a class="link-function left-position" href="{{ route('password.request') }}"
                                            title="Forgotten password?">Forgotten password?</a>
                                    </fieldset>
                                    <input type="submit" class="btn btn-submit" value="Login" name="submit">
                                </form>
                                <center>
                                    <p>View as <a href="" style="font-weight: 800;">Coordinator</a></p>

                                </center>
                            </div>
                        </div>
                    </div>
                    <!--end main products area-->
                </div>
            </div>
            <!--end row-->

        </div>
        <!--end container-->



    </main>
</x-guest-layout>
