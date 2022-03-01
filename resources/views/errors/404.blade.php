@extends('layouts.appfront')
@section('title')
    Page Introuvable
@endsection

@section('content')

<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1>4<span></span>4</h1>
        </div>
        <h2>OUPS! PAGE NOT FOUND</h2>
        <p>the page you are looking for does not exist.</p>
        <a href="{{ url('') }}">Go back to the home page</a>
    </div>
</div>

@stop
