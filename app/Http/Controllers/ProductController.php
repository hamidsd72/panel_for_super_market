<?php

namespace App\Http\Controllers;

use App\Product;
use App\ImageProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $user     = Auth::user();
        $shop     = $user->shops()->first();
        $products = $user->products()->with(['imageProducts' => function($e) {
            $e->limit(4);
        }])->get();
        foreach($products as $product) {
            $product->amount = number_format($product->amount);
            $product->off_amount = number_format($product->off_amount);
        }
        return view('home', compact('shop','products'));
    }

    public function create()
    {
        return view('dashboard.createProduct');
    }

    public function store(Request $request)
    {
        if ($request->availability == 'on') { $request->availability = 1; } else { $request->availability = 0; }
        $product = Product::create([
            'user_id'       => Auth::user()->id,
            'sku'           => $request->sku,
            'product_name'  => $request->product_name,
            'description'   => $request->description,
            'amount'        => $request->amount,
            'off_amount'    => $request->off_amount,
            'product_count' => $request->product_count,
            'availability'  => $request->availability
        ]);
        return redirect(route('products.show',$product->id));
    }

    public function show(Product $product)
    {
        $options = $product->productOptions()->get();
        $images  = $product->imageProducts()->get();
        return view('dashboard.product', compact('product','options','images'));
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        if (Auth::user()->id == $product->user_id) {
            if ($request->availability == 'on') { $request->availability = 1; } else { $request->availability = 0; }
            $product->update([
                'sku'           => $request->sku,
                'product_name'  => $request->product_name,
                'description'   => $request->description,
                'amount'        => $request->amount,
                'off_amount'    => $request->off_amount,
                'product_count' => $request->product_count,
                'availability'  => $request->availability
            ]);
            return redirect(route('products.index'));
        }
        return false;
    }

    public function destroy(Product $product)
    {
        //
    }
}
