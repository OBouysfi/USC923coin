@extends('layouts.appfront')

@section('title')
    USC923COIN WELCOME TO OFFICIAL 
@stop

@section('content')
@include('front.comun.header')
@include('front.tokenomic')
@include('front.contract')
@include('front.about')
@include('front.contact')
@include('front.buy')
@include('front.roadmap')
@include('front.whitepaper')
@include('front.comun.footer')

@stop