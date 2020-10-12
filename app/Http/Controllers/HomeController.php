<?php

namespace App\Http\Controllers;

use App\Register;
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
        $show_register_person = Register::orderBy('id', 'desc')->get();
        return view('back.home.index', compact('show_register_person'));
    }
}
