<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\chats;


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
        return view('admin.dashbordindex');
    }

    public function chat(Request $req)
    {
        return $req->input();


    }

}
