<?php

namespace InstantlyDigital\Visqual\Controllers;

use App\Http\Controllers\Controller;

class VisqualController extends Controller
{
    public function index() {
        return view('visqual::index');
    }
}