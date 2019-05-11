<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactCount = Contact::all()->count();
        $usersCount = User::all()->count();
        return view('home', compact('contactCount', 'usersCount'));
    }
}
