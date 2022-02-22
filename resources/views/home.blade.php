@extends('layouts.app')

@section('content')

    @if (Auth::user()->status)    
        {{-- @if ($shop) --}}
            <div class="text-center ">
                @if (Route::is('home')) 
                    @include('dashboard/index')
                @elseif (Route::is('shops.index'))
                    @include('dashboard/userUpdate')
                    {{-- @include('dashboard/shop') --}}
                @elseif (Route::is('factors.index'))
                    @include('dashboard/factors')
                @elseif (Route::is('products.index'))
                    @include('dashboard/products')
                @endif
            </div>
        {{-- @else
            @include('dashboard/createShop')
        @endif --}}
    @else
        @include('dashboard/userUpdate')
    @endif

@endsection
