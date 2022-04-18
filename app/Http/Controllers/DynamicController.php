<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MusicModel;

class DynamicController extends Controller
{
    public function __construct() {

    }

    public function index($title) {

        // $temp = '%'.$title.'%';
        // die(print_r($temp));
        // $music_list = MusicModel::get()->where('title', 'like', " '%'.$title.'%' ");
        $music_list = DB::table('music')
                                    ->where('songer_name', 'like', $title)
                                    ->get();
        // die(print_r($music_list));
        
        return view('layouts.dynamic', ['music_lists' => $music_list , 'title' => $title]);
    }
}
