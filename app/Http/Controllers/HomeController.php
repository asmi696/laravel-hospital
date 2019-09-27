<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $exist=DB::table('users')->where('id',Auth::user()->id)->where('state',1)->count();
        if($exist != 0){
            return view('front.profile');
        }
        return view('front.register');
    }

    

}
