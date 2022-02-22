<?php

namespace App\Http\Controllers;

use App\Factor;
use App\Product;
use App\ItemFactor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemFactorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        if ( Auth::user()->factors()->find($request->factor_id)->count() && Auth::user()->products()->find($request->product_id)->count() ) {
            $product = Product::find($request->product_id);
            if ($product->off_amount > 0) {
                $price_per = $product->off_amount;
            } else {
                $price_per = $product->amount;
            }
            ItemFactor::create([
                'product_id'   => $request->product_id,
                'product_name' => $product->product_name,
                'factor_id'    => $request->factor_id,
                'quantity'     => $request->quantity,
                'price_per'    => $price_per
            ]);
            $factor = Factor::find($request->factor_id);
            $total  = Factor::find($request->factor_id)->itemfactors()->sum('price_per');
            $factor->total_amount = $total;
            $factor->update();
            
            return redirect(route('factors.show',$request->factor_id));
        }
        return false;

    }

    public function show(ItemFactor $itemFactor)
    {
        //
    }

    public function edit(ItemFactor $itemFactor)
    {
        //
    }

    public function update(Request $request, ItemFactor $itemFactor)
    {
        //
    }

    public function destroy(ItemFactor $itemFactor)
    {
        //
    }
}
