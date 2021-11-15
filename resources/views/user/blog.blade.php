@extends('layouts.main')
@section('style')
<link rel="stylesheet" href="/css/blog.css">
@endsection
@section('nav-bar')
<x-nav-bar/>
@endsection

@section('content')

<div class="content">
    <div class="content-container">
        <div class="content-left">
            <h1 class="search">SEARCH</h1>
            <div class="search_box">
                <form action="/blog" >
                    <input type="text" class="input" placeholder="search..." name="search" value="{{old('search')}}">>
                    <button type="submit" class="btn">Search</button>
                </form>
            </div>
            <h1>CATEGORY</h1>
            <ul>
                <li><a href="#">Berita Terbaru</a></li>
                <li><a href="#">Info PPDB</a></li>
            </ul>
            <h1>SOSIAL MEDIA</h1>
            <div class="medsos">
                <a href="https://www.instagram.com/smkn1sumedang.official/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.youtube.com/channel/UCnGbn22JJ6qmHXiuCnUeC2g"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="content-right">
            <div class="wrapper-berita">
                @foreach ($blogs as $blog) 
                <div class="berita">
                    <div class="gambar">
                        <img src="/assets/images/berita/{{$blog->thumbnail}}" width="100%">
                    </div>
                    <div class="date">
                        <p>{{$blog->created_at->diffForHumans()}}</p>
                    </div>
                    <div class="name">
                        <h2>{{$blog->title}}</h2>
                    </div>
                    <div class="read btn btn-outline-info">
                        <a href="/blog/{{$blog->slug}}">Read More  <i class="fas fa-arrow-right "></i></a>
                    </div>
                </div>
                    @endforeach
                <div class="hyperlink">
                    <a href="{{$blogs->previousPageUrl()}}" class="button btn">Previous</a>
                    <a href="{{$blogs->currentPage()}}" class="button btn">{{$blogs->currentPage()}}</a>
                    <a href="{{$blogs->nextPageUrl()}}"" class="button btn">Next</a>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('footer')
    <x-footer/>
@endsection