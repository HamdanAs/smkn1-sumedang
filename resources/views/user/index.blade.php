@extends('layouts.main')
@section('style')
    <link rel="stylesheet" href="/css/style.css">
@endsection
@section('nav-bar')
    {{-- <x-nav-bar/> --}}
@endsection

@section('content')
    <!-- Hero -->
    <div class="banner-image w-100  d-flex justify-content-center align-items-center">
        <img src="/assets/images/nesas.png" class="vh-100 w-100" alt="">
    </div>
    <!-- Akhir Hero -->

    <!-- Sambutan Kepala Sekolah -->
    <section class="sambutan" id="sambutan">
        <div class="container">
            <div class="row hr-sambutan">
                <div class="col-12 title-container">
                    <h2 class="text-center">Sambutan Kepala Sekolah</h2>
                    <hr class="title-line">
                </div>
            </div>


            <div class=" gap-3 row ">
                <div class="col-8 wrapper-content-sambutan">
                    <h2 class="text-dark text-center">Lorem</h2>
                    <p class="text-center text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempor, auctor
                        bibendum dolor tincidunt at nunc, in odio. Sed gravida velit et arcu aliquet. Vestibulum erat cum
                        senectus at pulvinar. Sed praesent euismod consectetur egestas et. Imperdiet pulvinar at sem
                        faucibus habitasse id sit gravida. Elit nibh donec tincidunt duis egestas. Dolor ac arcu varius
                        bibendum nulla condimentum orci dignissim. Lectus suspendisse morbiamaecenas tortor, proin sit vel
                        dolor. Vulputate laoreet purus ut fringilla ac cursus vulputate a. Sagittis, sed elit egestas
                        suscipit sapien interdum. Orci lectus ante lobortis posuere amet orci felis dis. Egestas erat
                        blandit volutpat in. Faucibus risus est proin pulvinar pretium nunc, sit dolor neque.</p>
                </div>

                <div class="card card-principal bg-main">
                    <img src="/assets/images/principal.png" class="card-img-top" alt="Kepala Sekolah SMKN 1 SUMEDANG">
                    <div class="card-body text-center">
                        <h5 class="card-title text-light m-0 p-0 ">Dra. Elis Herawati, M.Pd</h5>
                        <p class="card-text text-light m-0 p-0">Kepala Sekolah SMK Negeri 1 Sumedang</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Akhir Sambutan -->

    <!-- Kompetensi Keahlian -->
    <section class="jurusan mt-3" id="jurusan">
        <div class="row">
            <div class="col-12 title-container">
                <h2 class="text-center">Kompetensi Keahlian</h2>
                <hr class="title-line">
            </div>
        </div>

        <div class=" wrapper-jurusan container-fluid ">

            <div class="card card-jurusan mb-3 bg-main  " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 card-jurusan">
                        <img class="logo-jurusan img-fluid rounded-start" src="/assets/images/logo-jurusan/dpib.png" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-light">Desain Pemodelan Dan Informasi Bangunan</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-jurusan mb-3 bg-main  " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 card-jurusan">
                        <img class="logo-jurusan img-fluid rounded-start" src="/assets/images/logo-jurusan/elektro.png"
                            alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-light">Teknik Elektronika Industri</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-jurusan mb-3 bg-main  " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 card-jurusan">
                        <img class="logo-jurusan img-fluid rounded-start" src="/assets/images/logo-jurusan/elektro.png"
                            alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-light">Teknik Audio Video</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-jurusan mb-3 bg-main  " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 card-jurusan">
                        <img class="logo-jurusan img-fluid rounded-start" src="/assets/images/logo-jurusan/listrik.png"
                            alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-light">Teknik Instalasi Tenaga Listrik</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-jurusan mb-3 bg-main  " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 card-jurusan">
                        <img class="logo-jurusan img-fluid rounded-start" src="/assets/images/logo-jurusan/komputer.png"
                            alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-light">Teknik Komputer Jaringan</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-jurusan mb-3 bg-main  " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 card-jurusan">
                        <img class="logo-jurusan img-fluid rounded-start" src="/assets/images/logo-jurusan/komputer.png"
                            alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-light">Rekayasa Perangkat Lunak</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-jurusan mb-3 bg-main  " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 card-jurusan">
                        <img class="logo-jurusan img-fluid rounded-start" src="/assets/images/logo-jurusan/otomotif.png"
                            alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-light">Teknik Kendaraan Ringan Otomotif</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-jurusan mb-3 bg-main  " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 card-jurusan">
                        <img class="logo-jurusan img-fluid rounded-start" src="/assets/images/logo-jurusan/mesin.png"
                            alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-light">Teknik Pemesinan</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-jurusan mb-3 bg-main  " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 card-jurusan">
                        <img class="logo-jurusan img-fluid rounded-start" src="/assets/images/logo-jurusan/mesin.png"
                            alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-light">Teknik Pengelasan</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-jurusan mb-3 bg-main  " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 card-jurusan">
                        <img class="logo-jurusan img-fluid rounded-start" src="/assets/images/logo-jurusan/seni.png" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-light">Seni Karawitan</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Kompetensi Keahlian -->

    <!-- Berita -->
    <section class="berita" id="berita">
        <div class="container">

            {{-- Title Section --}}
            <div class="row">
                <div class="col-12 title-container">
                    <h2 class="text-center">Berita</h2>
                    <hr class="title-line">
                </div>
            </div>

            {{-- Container Hot News --}}
            <div class="card  mb-3 hot-news">
                <div class="row g-">
                    <div class="col-7">
                        <img src="/assets/images/thumbnail.png" class="thumbnail-hot-news rounded-start" alt="...">
                    </div>
                    <div class="col-5">
                        <div class="card-body m-0">
                            <p class="card-text m-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <h1 class="card-title title-hot-news m-0">Lorem ipsum dolor sit amet.</h1>
                            <p class="card-text m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem
                                sint nihil ipsum totam vero ea distinctio voluptate saepe laborum esse.This is a wider card
                                with supporting text below as a natural lead-in to additional content. This content is a
                                little bit longer.</p>
                            <a type="button" class="btn btn-outline-read  m-0">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Wrapper Card News --}}
            <div class="row wrapper-card-news row-cols-1 row-cols-md-3">
                <div class="col card-news">
                    <div class="card h-100">
                        <img src="/assets/images/article.png" class="card-img-top" alt="...">
                        <div class="card-body m-0 p-0">
                            <small class="text-muted">Last updated 3 mins ago</small>
                            <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                            <a type="button" class="btn btn-outline-read  m-0">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col card-news">
                    <div class="card h-100">
                        <img src="/assets/images/article.png" class="card-img-top" alt="...">
                        <div class="card-body m-0 p-0">
                            <small class="text-muted">Last updated 3 mins ago</small>
                            <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                            <a type="button" class="btn btn-outline-read  m-0">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col card-news">
                    <div class="card h-100">
                        <img src="/assets/images/article.png" class="card-img-top" alt="...">
                        <div class="card-body m-0 p-0">
                            <small class="text-muted">Last updated 3 mins ago</small>
                            <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                            <a type="button" class="btn btn-outline-read  m-0">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Akhir Berita -->
    <!-- Guru -->
    <section class="guru bg-gray" id="guru">
        <div class="container">
            <div class="row">
                <div class="col-12 title-container">
                    <h2 class="text-center">Guru</h2>
                    <hr class="title-line">
                </div>
            </div>

            <div class=" row row-cols-1 row-cols-md-7 g-4 ">
              
              <div class="col">
                    <div class="card card-guru h-100">
                        <img src="/assets/images/main thumbnail.png" class="card-img-top" alt="...">
                        <div class="card-img-overlay-guru">
                          <div class="card-body bg-main card-body-guru">
                            <h5 class="card-title text-light text-center">Bill Gates</h5>
                            <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                          </div>
                        </div>
                    </div>
                </div>
              <div class="col">
                    <div class="card card-guru h-100">
                        <img src="/assets/images/main thumbnail.png" class="card-img-top" alt="...">
                        <div class="card-img-overlay-guru">
                          <div class="card-body bg-main card-body-guru">
                            <h5 class="card-title text-light text-center">Bill Gates</h5>
                            <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                          </div>
                        </div>
                    </div>
                </div>
              <div class="col">
                    <div class="card card-guru h-100">
                        <img src="/assets/images/main thumbnail.png" class="card-img-top" alt="...">
                        <div class="card-img-overlay-guru">
                          <div class="card-body bg-main card-body-guru">
                            <h5 class="card-title text-light text-center">Bill Gates</h5>
                            <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                          </div>
                        </div>
                    </div>
                </div>
              <div class="col">
                    <div class="card card-guru h-100">
                        <img src="/assets/images/main thumbnail.png" class="card-img-top" alt="...">
                        <div class="card-img-overlay-guru">
                          <div class="card-body bg-main card-body-guru">
                            <h5 class="card-title text-light text-center">Bill Gates</h5>
                            <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                          </div>
                        </div>
                    </div>
                </div>
              <div class="col">
                    <div class="card card-guru h-100">
                        <img src="/assets/images/main thumbnail.png" class="card-img-top" alt="...">
                        <div class="card-img-overlay-guru">
                          <div class="card-body bg-main card-body-guru">
                            <h5 class="card-title text-light text-center">Bill Gates</h5>
                            <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                          </div>
                        </div>
                    </div>
                </div>
              <div class="col">
                    <div class="card card-guru h-100">
                        <img src="/assets/images/main thumbnail.png" class="card-img-top" alt="...">
                        <div class="card-img-overlay-guru">
                          <div class="card-body bg-main card-body-guru">
                            <h5 class="card-title text-light text-center">Bill Gates</h5>
                            <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                          </div>
                        </div>
                    </div>
                </div>
              <div class="col">
                    <div class="card card-guru h-100">
                        <img src="/assets/images/main thumbnail.png" class="card-img-top" alt="...">
                        <div class="card-img-overlay-guru">
                          <div class="card-body bg-main card-body-guru">
                            <h5 class="card-title text-light text-center">Bill Gates</h5>
                            <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                          </div>
                        </div>
                    </div>
                </div>
             
               
                
            </div>
            <div class="row guru">
                <div class="col-sm-12">
                    <a href="#" class="guru-all text-center">Tampilkan Semua</a>

                </div>

            </div>




        </div>

        </div>
    </section>

    <!-- Akhir Guru -->
    <!-- Mou -->
    <section class="mou" id="mou">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Mou</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 logo-mou">
                    <div class="satu-logo"></div>
                </div>
                <div class="col-sm-2 logo-mou">
                    <div class="satu-logo"></div>
                </div>
                <div class="col-sm-2 logo-mou">
                    <div class="satu-logo"></div>
                </div>
                <div class="col-sm-2 logo-mou">
                    <div class="satu-logo"></div>
                </div>
                <div class="col-sm-2 logo-mou">
                    <div class="satu-logo"></div>
                </div>
                <div class="col-sm-2 logo-mou">
                    <div class="satu-logo"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Mou -->

@endsection

@section('footer')
    {{-- <x-footer/> --}}
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="/js/script1.js"></script>
@endsection
