<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $shop = Auth::user()->shops()->first();
        return view('home', compact('shop'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {   
        Shop::create([
            'user_id'          => Auth::user()->id,
            'shop_name'        => $request['shop_name'],
            'owner_first_name' => $request['owner_first_name'],
            'owner_last_name'  => $request['owner_last_name'],
            'address'          => $request['address'],
        ]);
        return redirect('/home');
    }

    public function show(Shop $shop)
    {
        //
    }

    public function edit(Shop $shop)
    {
        //
    }

    public function update(Request $request, Shop $shop)
    {
        //
    }

    public function destroy(Shop $shop)
    {
        //
    }
}
