<?php

namespace App\Http\Controllers;

use App\Models\Buku;

class HomeController extends Controller
{
    public function index()
    {
        // dd(auth()->user()->getRoleNames());
        // if (auth()->user()->can('view_dashboard')) {
        return view('dashboard');
        // }
        // return abort(403);
    }
    public function landing()
    {
        $buku = Buku::all();
        return view('welcome', ['buku' => $buku]);
    }
}
