@extends('layouts.main')
@section('style')
<link rel="stylesheet" href="/css/single-blog.css">
@endsection
@section('nav-bar')
<x-nav-bar/>
@endsection

@section('content')

<div class="content">
    <div class="container">
        <img src="/assets/images/berita/{{$blog->thumbnail}}" width="100%">
        <div class="content-berita">
            <p class="date">{{$blog->created_at->diffForHumans()}}</p>
            <h1>{{$blog->title}}</h1>
            <p>{{$blog->content}}</p>
        </div>
    </div>
    <div class="icons">
        <div class="admin">
            <a href=""><i class="fas fa-user-alt"></i></a>
        </div>
        <div class="sosmed">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/smkn1sumedang.official/"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <x-footer/>
@endsection