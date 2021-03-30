<?php

namespace App\Http\Controllers\Fronrend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
}
