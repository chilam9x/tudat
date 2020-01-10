<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Http\Controllers\Controller;
use Image;
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
        return view('admin.elements.new', compact('products'));
    }
    public function create()
    {
        return view('admin.elements.create');
    }
    public function postCreate(Request $request)
    {
        $data = Products::postCreate($request);
        if ($data == 200) {
            return redirect()->back()->with('success', 'Bạn đã thêm hàng hóa thành công');
        } else {
            return redirect()->back()->with('fail', 'Có lỗi xảy ra, vui lòng kiểm tra lại');
        }
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
