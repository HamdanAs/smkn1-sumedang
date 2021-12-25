
@extends('layouts.main')
@section('style')
<link rel="stylesheet" href="/css/style1.css">
@endsection
@section('nav-bar')
<x-nav-bar/>
@endsection

@section('content') 
  <!-- Navbar -->
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="aset/logosmk.png" style="width: 50px; height: 65px;" alt="" srcset="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item1">
              <a class="nav-link active" aria-current="page" style="color: var(--color-white) ;" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color: var(--color-white) ;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profil Sekolah
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Sejarah Sekolah</a></li>
                <li><a class="dropdown-item" href="#">Visi & Misi</a></li>

              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: white;" href="#">Kompetensi Keahlian</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color: var(--color-white) ;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Berita
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Berita Terbaru</a></li>
                <li><a class="dropdown-item" href="#">Info PPDB</a></li>
                <li><a class="dropdown-item" href="#">Agenda</a></li>
                <li><a class="dropdown-item" href="#">Gallery</a></li>

              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: var(--color-white) ;" href="#">Guru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: var(--color-white) ;" href="#">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

 

  <!-- Akhir Navbar -->
  <!-- Hero -->
  <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">

  </div>
  <!-- Akhir Hero -->
  <!-- Sambutan Kepala -->
    <section class="sambutan" id="sambutan">
     <div class="container">
            <div class="row hr-sambutan">
                <div class="col-sm-12">
                    <h2 class="text-center">Sambutan Kepala Sekolah</h2>
                    <hr>
                </div>
            </div>
            

            <div class="row">
              <div class="col-sm-6">
                <h2 style="color: black;">Lorem</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur quaerat quo, sequi libero possimus facilis consequuntur illo eligendi optio rerum. Magni soluta laborum quod quasi magnam optio aut, cum reiciendis recusandae sint sapiente aperiam suscipit neque ut, autem laudantium quam. Asperiores animi placeat hic voluptatum odit, nihil laborum enim dignissimos?</p>
              </div>
              <div class="col-sm-6">
                <img src="aset/kepsek.png" class="img-thumbnail">
              </div>
            </div>
          </div>
    </section>
    <!-- Akhir Sambutan -->

    <!-- Kompetensi Keahlian -->
    <Section class="jurusan" id="jurusan">
   
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Kompetensi Keahlian</h2>
            <hr>
          </div>
        </div>
        <div class="kotak-jurusan">
        <div class="satu">
          <h2>DPIB</h2>
        </div>
        <div class="dua">
          <h2>TPM</h2>
        </div>
        <div class="tiga">
          <h2>RPL</h2>
        </div>
        <div class="empat">
          <h2>TKJ</h2>
        </div>
        <div class="lima">
          <h2>TAV</h2>
        </div>
        <div class="enam">
          <h2>TEI</h2>
        </div>
        <div class="tujuh">
          <h2>TITL</h2>
        </div>
        <div class="delapan">
          <h2>TKRO</h2>
        </div>
        <div class="sembilan">
          <h2>SK</h2>
        </div>
        <div class="sepuluh">
          <h2>TPL</h2>
        </div>
      
      </div>
    </Section>
    <!-- Akhir Kompetensi Keahlian -->
    <!-- Berita -->
    <section class="berita" id="berita">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Berita</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-7">
            <img src="aset/thumbnail.png" class="thumbnailberita" style="height: 300px;" alt="">
          </div>
          <div class="col-sm-5">
            <p>17 November 2021</p>
            <h2 style="font-weight: bold;">Lorem ipsum dolor sit amet.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum molestiae aperiam enim doloribus. Suscipit numquam, odio a quidem enim, ut alias vitae quaerat ducimus id vel ab iste ipsam quibusdam dolores? Dignissimos tenetur numquam error dolor magni cum, laudantium voluptatem?</p>
            <div class="btn">
              <a href="#">Read More  <i class="fas fa-arrow-right p-4" ></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg></a>
             </div>
          </div>
        </div>
      </div>
      <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <img src="aset/article.png" style="height: 250px;
          padding-top:20px;" alt="">
           <p style="padding-top: 15px;">17 November 2021</p>
           <h2 style="font-weight: bold;">Headline</h2>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum molestiae aperiam enim doloribus. Suscipit numquam, odio a quidem enim, ut alias vitae quaerat ducimus id vel ab iste ipsam quibusdam dolores? Dignissimos tenetur numquam error dolor magni cum, laudantium voluptatem?</p>
           <div class="read-more">
            <a href="#">Read More  <i class="fas fa-arrow-right"></i>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg></a>
           </div>  
        </div>
        <div class="col-sm-4">
          <img src="aset/Thumbnail Article.png" style="padding-top:20px;
          height: 250px;" alt="">
          <p style="padding-top: 15px;">17 November 2021</p>
          <h2 style="font-weight: bold;">Headline</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum molestiae aperiam enim doloribus. Suscipit numquam, odio a quidem enim, ut alias vitae quaerat ducimus id vel ab iste ipsam quibusdam dolores? Dignissimos tenetur numquam error dolor magni cum, laudantium voluptatem?</p>
          <div class="read-more">
            <a href="#">Read More  <i class="fas fa-arrow-right"></i>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg></a>
           </div>
        </div>
        <div class="col-sm-4">
          <img src="aset/article.png" style="padding-top:20px;
          height: 250px;" alt="">
          <p style="padding-top: 15px;">17 November 2021</p>
          <h2 style="font-weight: bold;">Headline</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum molestiae aperiam enim doloribus. Suscipit numquam, odio a quidem enim, ut alias vitae quaerat ducimus id vel ab iste ipsam quibusdam dolores? Dignissimos tenetur numquam error dolor magni cum, laudantium voluptatem?</p>
          <div class="read-more ">
            <a href="#">Read More  <i class="fas fa-arrow-right"></i>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg></a>
           </div>
        </div>
      </div>
    </div>
    </section>
    <!-- Akhir Berita -->
    <!-- Guru -->
    <section class="guru" id="guru">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Guru</h2>
            <hr>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-6 g-3">
          <div class="col">
            <div class="card h-100">
              <img src="aset/main thumbnail.png" class="card-img-top" altaset/main thumbnail.png">
              <div class="card-body">
                <h5 class="card-title text-center">Bill Gates</h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="aset/main thumbnail.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Bill Gates</h5>
                <!-- <p class="card-text">This is a short card.</p> -->
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="aset/main thumbnail.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Bill Gates</h5>
                <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p> -->
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="aset/main thumbnail.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Bill Gates</h5>
                <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="aset/main thumbnail.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Bill Gates</h5>
                <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="aset/main thumbnail.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">Bill Gates</h5>
                <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
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
    <!-- Kontak -->
    <section class="kontak" id="kontak">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Kontak</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <h2>Lokasi Sekolah</h2>
            <p class="maps"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.4411422224157!2d107.92515925084146!3d-6.837595668764744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d135ab91cee5%3A0xbbf00d892056f010!2sSMK%20Negeri%201%20Sumedang%20(kampus%20depan)!5e0!3m2!1sid!2sid!4v1635488486062!5m2!1sid!2sid" width="470" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="mapss"></iframe></p>
          </div>
          <div class="col-sm-6">
            <h2>Hubungi</h2>
            <div class="row">
              <div class="col-sm-1">
                <img src="aset/clarity_email-solid.png" alt="">
              </div>
              <div class="col-sm-10">
                <p>Smkn1sumedang@sch.id</p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-1">
                <img src="aset/clarity_map-marker-solid.png" alt="">
              </div>
              <div class="col-sm-10">
                <p>Jl. Mayor Abdurahman No.209, Kotakaler, Kec. Sumedang Utara, Kabupaten Sumedang, Jawa Barat 45323</p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-1">
                <img src="aset/bx_bxs-phone.png" alt="">
              </div>
              <div class="col-sm-11">
                <p>+62 881 0238 80565</p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-1">
                <img src="aset/ic_round-fax.png" alt="">
              </div>
              <div class="col-sm-10">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis, blanditiis.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('footer')
    <x-footer/>
@endsection