<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        $akses = Auth::user()->akses;
        if($akses == "admin"){
            return redirect()->to('admin');
        } else if($akses == "mahasiswa"){
            return redirect()->to('mahasiswa');
        } else {
            return redirect()->to('logout');
        }
        // return view('home');
    }
}
