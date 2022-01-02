@extends('layouts.main')
@section('style')
    <link rel="stylesheet" href="/css/style.css">
@endsection
@section('nav-bar')
    {{-- <x-nav-bar/> --}}
@endsection

@section('content')
    <!-- Hero -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/assets/images/nesas.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/assets/images/nesas.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/assets/images/nesas.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
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


            <div class=" gap-3 row wrapper-sambutan">
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

        <div class=" wrapper-jurusan container ">

            <div class="card wrapper-card-jurusan mb-3 " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="card-jurusan ">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img class="logo-jurusan" src="/assets/images/logo-jurusan/dpib.png" alt="thumbnail" >
                              </div>
                              <div class="flip-card-back">
                                <h1 class="title-card-jurusan">DESAIN PEMODELAN DAN INFORMASI BANGUNAN</h1>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>

            <div class="card wrapper-card-jurusan mb-3 " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="card-jurusan ">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img class="logo-jurusan" src="/assets/images/logo-jurusan/dpib.png" alt="thumbnail" >
                              </div>
                              <div class="flip-card-back">
                                <h1 class="title-card-jurusan">DESAIN PEMODELAN DAN INFORMASI BANGUNAN</h1>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>

            <div class="card wrapper-card-jurusan mb-3 " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="card-jurusan ">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img class="logo-jurusan" src="/assets/images/logo-jurusan/dpib.png" alt="thumbnail" >
                              </div>
                              <div class="flip-card-back">
                                <h1 class="title-card-jurusan">DESAIN PEMODELAN DAN INFORMASI BANGUNAN</h1>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>

            <div class="card wrapper-card-jurusan mb-3 " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="card-jurusan ">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img class="logo-jurusan" src="/assets/images/logo-jurusan/dpib.png" alt="thumbnail" >
                              </div>
                              <div class="flip-card-back">
                                <h1 class="title-card-jurusan">DESAIN PEMODELAN DAN INFORMASI BANGUNAN</h1>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>

            <div class="card wrapper-card-jurusan mb-3 " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="card-jurusan ">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img class="logo-jurusan" src="/assets/images/logo-jurusan/dpib.png" alt="thumbnail" >
                              </div>
                              <div class="flip-card-back">
                                <h1 class="title-card-jurusan">DESAIN PEMODELAN DAN INFORMASI BANGUNAN</h1>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Akhir Kompetensi Keahlian -->

    <!-- Berita -->
    <section class="berita mx-2" id="berita">
        <div class="container ">

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
                        <img src="/assets/images/thumbnail.png" class="thumbnail-hot-news img-fluid  rounded-start" alt="...">
                    </div>
                    <div class="col-5">
                        <div class="card-body m-0">
                            <p class="card-text m-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <h1 class="card-title title-hot-news text-start m-0">Lorem ipsum dolor sit amet.</h1>
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
                            <h5 class="card-titletext-start ">Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
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

            <div class="wrapper-guru ">
              
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
            <div class="see-all my-3 d-flex justify-content-center">
                <button type="button" class="btn btn-outline-read">Tampilkan Semua</button>
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
            <div class=" wrapper-logo-mou">
                <div class="logo-mou rounded-circle">
                </div>
                <div class="logo-mou rounded-circle">
                </div>
                <div class="logo-mou rounded-circle">
                </div>
                <div class="logo-mou rounded-circle">
                </div>
                <div class="logo-mou rounded-circle">
                </div>
                <div class="logo-mou rounded-circle">
                </div>
                <div class="logo-mou rounded-circle">
                </div>
                <div class="logo-mou rounded-circle">
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Mou -->
{{-- Kontak --}}
<section class="kontak " id="kontak">
    <div class="container">

      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">Kontak</h2>
          <hr class="title-line">
        </div>
      </div>

      <div class="row col-12">
        <div class="col-lg-6 col-sm-12">
          <h2 class="text-center mb-4">Lokasi Sekolah</h2>
              <p class="wrapper-maps"><iframe class="m-auto maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.4411422224157!2d107.92515925084146!3d-6.837595668764744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d135ab91cee5%3A0xbbf00d892056f010!2sSMK%20Negeri%201%20Sumedang%20(kampus%20depan)!5e0!3m2!1sid!2sid!4v1635488486062!5m2!1sid!2sid" width="470" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="mapss"></iframe></p>
          </div
        </div>

        <div class="col-lg-5 col-sm-12 mx-4">
          <h2 class="text-center mb-4">Hubungi</h2>

          <div class="row">

            <div class="col-sm-1">
              <img src="/assets/icons/clarity_email-solid.png" alt="">
            </div>
            <div class="col-sm-10">
              <p>Smkn1sumedang@sch.id</p>
            </div>
          </div>

          <div class="row">

            <div class="col-sm-1">
              <img src="/assets/icons/clarity_map-marker-solid.png" alt="">
            </div>

            <div class="col-sm-10">
              <p>Jl. Mayor Abdurahman No.209, Kotakaler, Kec. Sumedang Utara, Kabupaten Sumedang, Jawa Barat 45323</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-1">
              <img src="/assets/icons/bx_bxs-phone.png" alt="">
            </div>
            <div class="col-sm-11">
              <p>+62 881 0238 80565</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-1">
              <img src="/assets/icons/ic_round-fax.png" alt="">
            </div>
            <div class="col-sm-10">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, blanditiis.</p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
{{-- Akhir Kontak --}}
@endsection

@section('footer')
    {{-- <x-footer/> --}}
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
