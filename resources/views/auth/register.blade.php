@extends('layouts.layout')

@section('content')
    <div class="container text-center text-light pt-lg-4 mt-lg-5">
        <div class="pt-lg-5">
            <div class="d-none d-lg-block">
                <h1 class="display-4">فروشگاه اپی</h1>
                <h2 class="mb-lg-4 ">نسخه مخصوص فروشگاه</h2>
                <h3 class="mb-4">با استفاده از مشخصات خود ثبت نام کنید</h3>
            </div>
            <div class="d-lg-none">
                <h3 >فروشگاه اپی</h3>
                <h4 class="mb-4">نسخه مخصوص فروشگاه</h4>
                <h5 class="mb-4">با استفاده از مشخصات خود ثبت نام کنید</h5>
            </div>
            <form method="POST" action="{{ route('register') }}" class="col-lg-10 mx-auto" >
                @csrf

                <div class="form-group col-10 col-lg-4 mx-auto ">
                    <div class="text-right">
                        <label for="email">آدرس ایمیل</label>
                    </div>
                    <input id="email" type="email" placeholder="آدرس ایمیل" class=" form-control form-control-lg text-right @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-10 col-lg-4 mx-auto ">
                    <div class="text-right">
                        <label for="password"> رمزعبور</label>
                    </div>
                    <input id="password" type="password" placeholder="رمزعبور" class="form-control form-control-lg text-right @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-10 col-lg-4 mx-auto ">
                    <div class="text-right">
                        <label for="password-confirm">تکرار رمزعبور</label>
                    </div>
                    <input id="password-confirm" placeholder="تکرار رمزعبور" type="password" class="form-control form-control-lg text-right" name="password_confirmation" required autocomplete="new-password">
                    {{-- <a href="#" class="">{{ __('با ثبت نام, قوانین را میپذیرم') }}</a> --}}
                </div>
                
                <div class="form-group col-10 col-lg-4 mx-auto">
                    <button type="submit" class="btn btn-lg btn-primary bg-primary btn-block text-light border-light shadow mt-4 mb-2" style="border-radius: 50px;padding-top: 15px;padding-bottom: 15px;">
                        {{ __('ایجاد حساب کاربری') }}
                    </button>
                </div>
                <div class="col-12 form-group text-right mt-3">
                    @if (Route::has('password.request'))
                        <a class="text-light h5" href="{{ route('login') }}" style="border-radius: 50px;padding-top: 15px;padding-bottom: 15px;">
                            {{ __('ورود حساب کاربری') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
