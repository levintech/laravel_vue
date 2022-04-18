@extends('layouts.base')

@section('content')
    <div id="m">
        <dynamic-dashboard 
            prop_title=" {{$title}} "
            v-bind:prop_music_items=" {{$music_lists}} "></dynamic-dashboard>
    </div>
@endsection