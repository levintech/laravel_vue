<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('layouts.artists');
    }

}
