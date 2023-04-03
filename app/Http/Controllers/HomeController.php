<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }

//    public function register(Request $request)
//    {
//        $user = new User();
//        $user->name = $request->get('name');
//        $user->email = $request->get('email');
//        $user->password = Hash::make($request->get('password'));
//        $user->save();
//
//
//        return 'success';
//    }

}
