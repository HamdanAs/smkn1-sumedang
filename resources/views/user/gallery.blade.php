@extends('layouts.main')
@section('style')
<link rel="stylesheet" href="/css/as;dldkfj;alksjslkdja;skdfj.css">
@endsection
@section('nav-bar')
<x-nav-bar/>
@endsection

@section('content')
<div class="content">
    <div class="tittle">
        <h1>Gallery</h1>
    </div>
    <div class="gallery">
        
        <div class="box"><img src="/assets/Images/gallery.png"></div>
        <div class="box"><img src="/assets/Images/gallery.png"></div>
        <div class="box"><img src="/assets/Images/gallery.png"></div>
        <div class="box"><img src="/assets/Images/gallery.png"></div>
        <div class="box"><img src="/assets/Images/gallery.png"></div>
        <div class="box"><img src="/assets/Images/gallery.png"></div>
        <div class="box"><img src="/assets/Images/gallery.png"></div>
    </div>
    <div class="hyperlink">
        <a href="" class="button">1</a>
        <a href="" class="button">2</a>
        <a href="" class="button">3</a>
        <a href="" class="button">Next</a>
    </div>
</div>
@endsection

@section('footer')
    <x-footer/>
@endsection

