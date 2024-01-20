<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $magang = User::get();

        return view('index', compact('magang'));
    }
}
