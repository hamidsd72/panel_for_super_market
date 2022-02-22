<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Carbon\Carbon;  

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $today_factors_count = Auth::user()->factors()->where('created_at','<=',Carbon::now()->today())->count();
        $today_factors_sum   = number_format(Auth::user()->factors()->where('created_at','<=',Carbon::now()->today())->sum('total_amount'));
        
        $week_factors_count  = Auth::user()->factors()->where('created_at','>=',Carbon::now()->startOfWeek())->where('created_at','<=',Carbon::now()->endOfWeek())->count();
        $week_factors_sum    = number_format(Auth::user()->factors()->where('created_at','>=',Carbon::now()->startOfWeek())->where('created_at','<=',Carbon::now()->endOfWeek())->sum('total_amount'));
        
        $month_factors_count = Auth::user()->factors()->where('created_at','>=',Carbon::now()->startOfMonth())->where('created_at','<=',Carbon::now()->endOfMonth())->count();
        $month_factors_sum   = number_format(Auth::user()->factors()->where('created_at','>=',Carbon::now()->startOfMonth())->where('created_at','<=',Carbon::now()->endOfMonth())->sum('total_amount'));
        
        $all_factors_count = Auth::user()->factors()->count();
        $all_factors_sum   = number_format(Auth::user()->factors()->sum('total_amount'));
        
        $products            = Auth::user()->products()->count();
        return view('home', compact('today_factors_count','today_factors_sum',
        'week_factors_count','week_factors_sum','month_factors_count','month_factors_sum',
        'all_factors_count','all_factors_sum','products'));
    }
}
