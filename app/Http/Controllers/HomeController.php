<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MusicModel;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    function index()
    {
        $music_list = MusicModel::get();
        // die(print_r($music_list));
        return view('layouts.home', ['music_lists' => $music_list]);
    }

}
