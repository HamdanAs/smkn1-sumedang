@extends('layouts.main')
@section('style')
<link rel="stylesheet" href="/css/guru.css">
@endsection
@section('nav-bar')
<x-nav-bar/>
@endsection

@section('content')
<div class="content">
    <div class="tittle">
        <h1>Keluarga</h1>
    </div>
    <div class="img">
        <img src="\assets\images\families\guru.png" width="90%">
    </div>
    <div class="container">
        <div class="guru-container">

            @foreach ($families as $family)
            <div class="pic-name">
                <img src="\assets\images\families\profil-guru.png" alt="">
                <h4 class="name">{{ $family->name }} </h4>
            </div>
            @endforeach
            

        </div>



        <div class="hyperlink">
            <a href="{{ $families->previousPageUrl() }}" class="button">Previous</a>
            <a href="{{ $families->currentPage() }}" class="button">{{ $families->currentPage() }}</a>
            <a href="{{ $families->nextPageUrl() }}" class="button">Next</a>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <x-footer/>
@endsection

