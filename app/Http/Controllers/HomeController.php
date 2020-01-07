<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Http\Controllers\Controller;

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
        $products=Products::getAll();
        return view('admin.home', compact('products'));
    }
    public function productionPlan()
    {
        $products=Products::getAll();
        return view('admin.production-plan', compact('products'));
    }
    public function general()
    {
        $products=Products::getAll();
        return view('admin.general', compact('products'));
    }
}
