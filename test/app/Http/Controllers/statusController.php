<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class statusController extends Controller
{
    public function index() {
        return view('status');
    }
}
