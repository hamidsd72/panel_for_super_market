<?php

namespace App\Http\Controllers;

use App\ProductOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductOptionController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if (Auth::user()->products()->where('id',$request->product_id)->first()) {
            ProductOption::create($request->all());
            return redirect(route('products.show',$request->product_id));
        }
        return false;
    }

    public function show(ProductOption $productOption)
    {
        //
    }

    public function edit(ProductOption $productOption)
    {
        //
    }

    public function update(Request $request, ProductOption $productOption)
    {
        //
    }

    public function destroy(ProductOption $productOption)
    {
        //
    }
}
