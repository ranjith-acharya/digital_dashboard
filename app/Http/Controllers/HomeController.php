<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $databases = DB::select("SHOW DATABASES WHERE `Database` NOT LIKE 'information_schema' AND `Database` NOT LIKE 'mysql' AND `Database` NOT LIKE 'performance_schema' AND `Database` NOT LIKE 'sys'");
        return view('home', compact('databases'));
    }
}
