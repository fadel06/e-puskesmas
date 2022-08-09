<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SweetController extends Controller
{
    public function index()
    {
        return redirect('/')->with('success', 'Task Created Successfully!');
    }
}
