@extends('layouts.layout')

@section('content')
    <div class="container text-center text-light pt-lg-5 mt-lg-5">
        <div class="pt-lg-4">
            <div class="d-none d-lg-block">
                <h1 class="display-4">فروشگاه اپی</h1>
                <h2 class="mb-lg-4 ">نسخه مخصوص فروشگاه</h2>
                <h3 class="mb-4">با استفاده از مشخصات خود به سیستم وارد شوید</h3>
            </div>
            <div class="d-lg-none">
                <h3 >فروشگاه اپی</h3>
                <h4 class="mb-4">نسخه مخصوص فروشگاه</h4>
                <h5 class="mb-4">با استفاده از مشخصات خود به سیستم وارد شوید</h5>
            </div>
            <form method="POST" action="{{ route('login') }}" class="col-lg-10 mx-auto">
                @csrf

                <div class="form-group col-10 col-lg-4 mx-auto ">
                    <div class="text-right">
                        <label for="email">آدرس ایمیل یا شماره موبایل</label>
                    </div>
                    <input id="email" type="text" placeholder="شماره موبایل یا ایمیل" class="form-control form-control-lg text-left @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-10 col-lg-4 mx-auto ">
                    <div class="text-right">
                        <label for="password">رمزعبور</label>
                    </div>
                    <input id="password" type="password" placeholder="رمزعبور" class="form-control form-control-lg text-left @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- <div class="col-lg-6 mx-auto">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('منو در سیستم نگه دار') }}
                    </label>
                </div> --}}

                <div class="form-group col-10 col-lg-4 mx-auto">
                    <button type="submit" class="btn btn-lg btn-primary bg-primary btn-block text-light border-light shadow mt-4 mb-2" style="border-radius: 50px;padding-top: 15px;padding-bottom: 15px;">
                        {{ __('ورود به حساب کاربری') }}
                    </button>
                </div>
                <div class="col-12">
                    <div class="d-none d-lg-block">
                        <div class="row ">
                            <div class="col-lg-6 form-group mt-3 text-right">
                                @if (Route::has('password.request'))
                                    <a class="text-light border-light h5" href="{{ route('password.request') }}" style="border-radius: 50px;padding-top: 15px;padding-bottom: 15px;">
                                        {{ __('رمزعبور یادم نیست') }}
                                    </a>
                                @endif
                            </div>
                            <div class="col-lg-6 form-group text-left mt-3">
                                @if (Route::has('password.request'))
                                    <a class="text-light border-light h5" href="{{ route('register') }}" style="border-radius: 50px;padding-top: 15px;padding-bottom: 15px;">
                                        {{ __('ایجاد حساب کاربری') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-none">
                        <div class="row ">
                            <div class="col-6 form-group mt-3 text-right">
                                @if (Route::has('password.request'))
                                    <a class="text-light" href="{{ route('password.request') }}" style="border-radius: 50px;padding-top: 15px;padding-bottom: 15px;">
                                        {{ __('رمزعبور یادم نیست') }}
                                    </a>
                                @endif
                            </div>
                            <div class="col-6 form-group text-left mt-3">
                                @if (Route::has('password.request'))
                                    <a class="text-light" href="{{ route('register') }}" style="border-radius: 50px;padding-top: 15px;padding-bottom: 15px;">
                                        {{ __('ایجاد حساب کاربری') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
