<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\NoteClient;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check())
        {
            $data = array();
            $data['notesClients'] = NoteClient::orderByDesc('created_at')->limit(10)->get();
            return view('home.index',$data);
        }else {
            return view('auth.login');
        }
    }
}
