<?php

namespace App\Http\Controllers;

use App\Factor;
use App\ItemFactor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FactorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user    = Auth::user();
        $shop    = $user->shops()->first();
        $factors = $user->factors()->with('itemfactors')->get();

        // foreach($factors as &$factor) {
        //     $factor->total_amount = number_format($factor->total_amount);
        // }
        foreach($factors as $factor) {
            $factor->total_amount = number_format($factor->total_amount);
        }
        return view('home', compact('shop','factors'));
    }

    public function create()
    {
        return view('dashboard.createFactor');
    }

    public function store(Request $request)
    {
        $factor = Factor::create([
            'user_id'        => Auth::user()->id,
            'payment_status' => false,
            'payment_method' => false,
            'total_amount'   => 0,
        ]);
        return redirect(route('factors.show',$factor->id));
    }

    public function show(Factor $factor)
    {
        $itemsFactor = $factor->itemfactors()->get();
        $products = Auth::user()->products()->get();
        foreach($itemsFactor as $factor) {
            $factor->price_per = number_format($factor->price_per);
        }
        return view('dashboard.createFactor',compact('factor','itemsFactor','products'));
    }

    public function edit(Factor $factor)
    {
        //
    }

    public function update(Request $request, Factor $factor)
    {
        $status = false;
        $method = false;
        if ($request->payment_status == 'on') {
            $status = true;
        }
        if ($request->payment_method == 'on') {
            $method = true;
        }
        if (Auth::user()->id == $factor->user_id) {
            $factor->update([
                'user_id'        => Auth::user()->id,
                'payment_status' => $status,
                'payment_method' => $method,
                'status'         => $request->status,
            ]);
            return redirect(route('factors.index'));
        }
        return false;
    }

    public function destroy(Factor $factor)
    {
        if (Auth::user()->id == $factor->user_id) {
            dd($factor);
            $factor->update($request->all());
            return redirect(route('factors.index'));
        }
        return false;
    }
}
