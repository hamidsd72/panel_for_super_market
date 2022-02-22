<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Shop;

class UserController extends Controller
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
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $user = User::find(Auth::user()->id);
        if ($request->first_name) { $user->first_name = $request->first_name; }
        if ($request->last_name) { $user->last_name  = $request->last_name; }
        if ($request->bio) { $user->bio        = $request->bio; }
        // if ($request->mobile) { $user->mobile     = $request->mobile; }
        $user->status     = true;
        // $user->email      = $request->email;
        if ($request->image) {
            if (!$this->validate($request,[ 'image' => 'required|mimes:jpg,jpeg,png,bmp' ])) {
                $request->session()->flash('flash_message','فایل ارسالی معتبر نیست');
                return back();
            }
            $image        = $request->file('image');
            $imageName    = $image->getClientOriginalName();
            $image->move('user/image/' . $user->id . '/', $imageName) ;
            $user->image  = "/user/image/$user->id/$imageName";
        }
        $user->update();
        if ($user->shops()->count() > 0) {
            if ($request->shop_id) {
                $shop = $user->shops()->where('id',$request->shop_id)->first();
                $shop->update($request->all());
            }

        } else {
            Shop::create([
                'user_id'          => Auth::user()->id,
                'shop_name'        => $request['shop_name'],
                'owner_first_name' => $request['owner_first_name'],
                'owner_last_name'  => $request['owner_last_name'],
                'address'          => $request['address'],
            ]);
        }
        $request->session()->flash('flash_message','اطلاعات با موفقیت ارسال شد');
        return back();
    }

    public function destroy($id)
    {
        //
    }
}
