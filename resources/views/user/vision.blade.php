@extends('layouts.main')
@section('style')
<link rel="stylesheet" href="/css/vision.css">
@endsection
@section('nav-bar')
<x-nav-bar/>
@endsection

@section('content')
<div class="container">
        <div class="tittle">
            <h1>Visi dan Misi</h1>
        </div>
        <div class="gambar">
            <img src="ssekolah1.png" width="90%">
        </div>
        <div class="content">
            <h1>Visi</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Augue et velit malesuada ut in. Sem morbi elementum, nec quis eget. Vitae sapien imperdiet eget fringilla eu facilisis vitae auctor. Fermentum gravida ut hendrerit turpis ultrices volutpat porttitor. Faucibus nibh volutpat senectus quam dictum sit faucibus. Sit neque gravida pharetra est morbi in. Quam viverra at facilisis quis habitant. Cursus cum massa felis lacus nulla ac ut. Consectetur pretium lobortis fermentum ultrices fringilla. Mauris non erat pellentesque ut laoreet blandit. Tristique volutpat dolor, morbi malesuada aliquam. Sollicitudin massa viverra ut tristique nibh et suspendisse. Sagittis aliquam vitae turpis rhoncus ornare volutpat.</p>
            <h1>Misi</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Augue et velit malesuada ut in. Sem morbi elementum, nec quis eget. Vitae sapien imperdiet eget fringilla eu facilisis vitae auctor. Fermentum gravida ut hendrerit turpis ultrices volutpat porttitor. Faucibus nibh volutpat senectus quam dictum sit faucibus. Sit neque gravida pharetra est morbi in. Quam viverra at facilisis quis habitant. Cursus cum massa felis lacus nulla ac ut. Consectetur pretium lobortis fermentum ultrices fringilla. Mauris non erat pellentesque ut laoreet blandit. Tristique volutpat dolor, morbi malesuada aliquam. Sollicitudin massa viverra ut tristique nibh et suspendisse. Sagittis aliquam vitae turpis rhoncus ornare volutpat.</p>
        </div>
    </div>
@endsection

@section('footer')
    <x-footer/>
@endsection