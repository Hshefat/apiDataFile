@extends('fontend.main')
{{-- @extends('layouts.master') --}}

@section('title', 'Page Title')

@section('sidebar')
    @parent
        <div class="title m-b-md">
            Laravel Api Build & Test
        </div>

@stop

@section('content')
    <h1>This is my body content.</h1>

    @include('fontend.pages.another')
@stop

