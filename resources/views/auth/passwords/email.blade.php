@extends('layouts.app')

@section('content')
<div class="container text-center violet pt-lg-5 col-10 col-lg-4 mx-auto">
    <div class="glass pt-5 pb-5 redu20">
        <div class="text-right mr-5">{{ __('بازیابی رمزعبور') }}</div>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group col-10 col-lg-5 mx-auto ">

                    <input id="email" type="email" placeholder="آدرس ایمیل خودتو وارد کن" class="form-control redu10 shadow text-right @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-10 col-lg-5 mx-auto ">
                        <button type="submit" class="btn bg-violet text-light redu20 ">{{ __('ارسال لینک بازیابی رمز به ایمیل') }}</button>
                </div>
            </form>
    </div>
</div>
@endsection
