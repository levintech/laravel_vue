<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TubidyController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('layouts.tubidy');
    }
}
