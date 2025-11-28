<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class assistentController extends Controller
{
    public function index()
    {
        return view('assistent.index', [
            'title' => 'assistent Home'
        ]);
    }
    
}
