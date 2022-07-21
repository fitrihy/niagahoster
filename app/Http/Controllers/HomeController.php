<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->__route = 'home';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['dataPrice'] = Price::orderBy('id', 'asc')->get();
        return view($this->__route.'.index', $data);
    }
}
