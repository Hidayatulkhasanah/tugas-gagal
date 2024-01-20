<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $magang = User::get();

foreach ($magang as $d)


        return view('index', compact('magang'));
    }

    public function bagian1() {
        return 'hello world';
    }

    public function bagian2() {
        return 'ini halaman home bagian 2';
    }

    public function bagian3() {
        return 'ini halaman home bagian 3';
    }
}
