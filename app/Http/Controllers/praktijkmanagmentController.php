<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class praktijkmanagmentController extends Controller
{
    public function index()
    {
        return view('praktijkmanagment.index', [
            'title' => 'praktijkmanagment Home'
        ]);
    }
}
