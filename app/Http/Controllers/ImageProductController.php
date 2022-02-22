<?php

namespace App\Http\Controllers;

use App\ImageProduct;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ImageProductController extends Controller
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
        if (Auth::user()->products()->find($request->product_id)->count() > 0) {
            $file = $request->file('file');
            $name = time().$file->getClientOriginalName();
            $file->move('product/images/'.$request->product_id, $name);
    
            $product = Product::find($request->product_id);
            $product->imageProducts()->create(['image_product' => "/product/images/$request->product_id/$name"]);
            return 'done...';
        }
        return false;
    }

    public function show(ImageProduct $imageProduct)
    {
        //
    }

    public function edit(ImageProduct $imageProduct)
    {
        //
    }

    public function update(Request $request, ImageProduct $imageProduct)
    {
        //
    }

    public function destroy(ImageProduct $imageProduct)
    {
        //
    }
}
