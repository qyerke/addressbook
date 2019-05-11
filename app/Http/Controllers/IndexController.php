<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $contacts = Contact::paginate(8);
        return view('welcome', compact('contacts'));
    }
}
