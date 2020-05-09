
@extends('user-interface.layout.main')

@section('title','Guru dan Tenaga Kependidikan | Disdik Samarinda Kota')

@section('navbar')
       <!-- awal navbar -->
      <div class="navbar-fixed">
       <nav>
         <div class="container">
          <div class="nav-wrapper">
           <a href="/" class="brand-logo center"><img src="img/logo-Pemkot.png" alt="" width="70px" height="70px" style="margin-top: 15px;"></a>
           <a href="#" data-target="mobile-nav" class="sidenav-trigger" style="margin-top: 15px;"><i class="material-icons">menu</i></a>
           <ul id="nav-mobile" class="left hide-on-med-and-down">
             <li><a href="#berita">Berita</a></li>
             <li><a href="#profil">Profil</a></li>
             <li><a href="#galeri">Galeri</a></li>
           </ul>
           <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#kontak">Kontak</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">GTK<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
          </div>
         </div>
       </nav>
      </div>
      <!-- dropdown -->
      <ul id="dropdown1" class="dropdown-content">
         <li><a href="/gtk-paud">GTK PAUD</a></li>
         <li><a href="/gtk-sd">GTK SD</a></li>
         <li><a href="/gtk-smp">GTK SMP</a></li>
      </ul>
      <ul id="dropdown2" class="dropdown-content">
         <li><a href="/gtk-paud">GTK PAUD</a></li>
         <li><a href="/gtk-sd">GTK SD</a></li>
         <li><a href="/gtk-smp">GTK SMP</a></li>
     </ul>
      <!-- sidenav -->
      <ul class="sidenav" id="mobile-nav">
         <li><a href="#berita">Berita</a></li>
         <li><a href="#profil">Profil</a></li>
         <li><a href="#galeri">Galeri</a></li>
         <li><a href="#kontak">Kontak</a></li>
         <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">GTK<i class="material-icons right">arrow_drop_down</i></a></li>
     </ul>
@endsection
      
@section('slide')
     <!-- slide -->
     <div class="slider sli">
      <ul class="slides">
        <li>
          <img src="img/gtk-slide/gtk-sd.jpg"> <!-- random image -->
          <div class="caption left-align">
            <div style="height: 100px;"></div>
            <h3>Guru dan Tenaga Kependidikan SD</h3>
            <h5 class="light grey-text text-lighten-3"></h5>
          </div>
        </li>
        <li>
         <img src="img/gtk-slide/gtk-smp2.jpg"> <!-- random image -->
         <div class="caption right-align">
           <div style="height: 100px;"></div>
           <h3>Guru dan Tenaga Kependidikan SMP</h3>
           <h5 class="light grey-text text-lighten-3"></h5>
         </div>
       </li>
       <li>
         <img src="img/gtk-slide/gtk-paud.jpg"> <!-- random image -->
         <div class="caption left-align">
           <div style="height: 50px;"></div>
           <h3>Guru dan Tenaga Kependidikan PAUD, pendidikan masyarakat dan keluarga</h3>
           <h5 class="light grey-text text-lighten-3"></h5>
         </div>
       </li>
      </ul>
     </div>
@endsection

@section('berita')
     <!-- berita -->
    <section id="berita" class="berita section scrollspy">
      <div class="container">
        <div class="row">
          <div class="col m12 light side-bar-left">
            <h3 class="header">Berita</h3>
            <div class="slider sli2" >
              <ul class="slides">
                <!-- Menampilkan berita dari database -->
                @foreach( $berita as $beritas)
                <li>
                  <img src="{{$beritas->gambar}}">
                  <div class="caption left-align">
                    <h4>{{$beritas->judul_artikel}}</h4>
                    <div class="card">
                      <div class="card-content">
                        <p class="tgl"> <i class="tiny material-icons">access_time </i>{{$beritas->tanggal}}</p>
                        <p class="isi" >{{$beritas->artikel}}</p>
                      </div>
                      <div class="card-action">
                        <a href="berita/{{$beritas->id}}">Lanjutkan Baca...</a>
                      </div>
                    </div>
                  </div>
                </li>
                @endforeach                
              </ul>
            </div>
            
            <!-- berita lainnya -->

            <div class="berita-lama" >
              <div class="row">
                <h5>Berita Terbaru</h5>
                @foreach( $berita as $beritas)
                <div class="col s12 m12 l6">
                  <div class="card small horizontal">
                    <div class="card-image">
                      <img src="{{$beritas->gambar}}">
                      <span class="card-title"></span>
                    </div>
                    <div class="card-stacked">
                      <div class="card-content">
                        <p class="tgl"> <i class="tiny material-icons">access_time </i> {{$beritas->tanggal}}</p>
                        <p class="judulb">{{$beritas->judul_artikel}}</p>
                      </div>
                      <div class="card-action">
                        <a href="berita/{{$beritas->id}}">Lanjutkan Baca...</a>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach          
           </div>
           <a href="/berita" class="waves-effect waves-light btn center right">Lihat Lebih Banyak</a>  
          </div>
        </div>
      </div>
    </section>
@endsection

@section('profil')
    <!-- Profile -->
    <section class="profil section scrollspy" id="profil">
      <div class="container">
        <div class="row">
          <h3 class="header">Profil</h3>
          <div class="col m12 s12 l6">
            <img class="responsive-img" width="400" src="img/disdik.jpg">
          </div>
          <div class="col m12 s12 l6 light">
            <h5>Profil Singkat</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas molestias sit aut optio aliquam natus? Accusamus, reiciendis harum eos provident delectus voluptatem! Officia ducimus quo deserunt alias aspernatur, ut tempore. Fugit nisi aperiam harum laborum deserunt minima cupiditate quasi debitis deleniti itaque dolor rerum, sequi numquam voluptate quia possimus distinctio nesciunt sunt. Praesentium molestiae est assumenda facilis reiciendis, doo dolo asak minaro.</p>
            <a href="/profil" class="waves-effect waves-light btn center right">Selengkapnya</a> 
          </div>
        </div>
      </div>
    </section>
@endsection
    

@section('galeri')
<!-- Galeri -->
    <section class="galeri section scrollspy" id="galeri">
      <div class="parallax-container">
        <div class="parallax">
          <img src="img/galery/1.jpeg">
        </div>
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l7">
              <h3 class="header">Galeri</h3>
              @foreach($galeri as $galeris)
              <img class="materialboxed " width="135" height="95" src="{{$galeris->foto_url}}">
              @endforeach
            </div>
            
            <div class="col m12 s12 l5">
              <div class="video-container">
                <iframe width="716" height="403" src="https://www.youtube.com/embed/V_h3U2EVsMU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
                   
          </div>
          <div class="row">
            <div class="col">
              <a href="/galeri" class="waves-effect waves-light btn center ">Lebih Banyak</a>       
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('kontak')
    <section class="kontak section scrollspy" id="kontak">
      <div class="container">
        <div class="row">
          <h3 class="header">Kontak</h3>
          <div class="col m6 s12 map">
            <h5>  <i class="material-icons">map</i>
              Alamat</h5>
              <hr>
              <p>Jl. Biola No. 4A, 75123 Samarinda lantai 3</p>
              <p> 0541-742368 / 0821 2126 6622</p>
              <p>Email: disdik.samarindakota@gmail.com</p>
          </div>
          <div class="col m6 s12 light link">
            <h5><i class="material-icons">language</i>
              Link Terkait</h5>
              <hr>
              <a href="https://disdik.samarindakota.go.id/"> Disdik Kota Samarinda</a>
              <hr class="hr-2">
              <a href="https://dapo.dikdasmen.kemdikbud.go.id/">Dapodik</a>
              <hr class="hr-2">
              <a href="https://sekolah.data.kemdikbud.go.id/">Sekolah Kita</a>
          </div>
        </div>
      </div>
    </section>
@endsection