@extends('layouts.base')

@section('content')
    <div  id="m">
        <home-dashboard v-bind:prop_music_items=" {{$music_lists}} "></home-dashboard>
    </div>
@endsection