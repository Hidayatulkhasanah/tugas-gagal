<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $product = Baju::all();
        return view('pelanggan.page.home', compact('product'));
    }
    public function package()
    {
        $product = Baju::all();
        return view('pelanggan.page.shop', compact('product'));
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $product = Baju::where('baju_name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('pelanggan.page.contact', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
