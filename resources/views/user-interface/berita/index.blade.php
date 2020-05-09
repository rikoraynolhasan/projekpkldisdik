@extends('user-interface.layout.main')

@section('title','Berita | Disdik Samarinda Kota')

@section('navbar')
    <div class="navbar-fixed">
       <nav>
         <div class="container">
          <div class="nav-wrapper">
           <a href="/" class="brand-logo center"><img src="img/logo-Pemkot.png" alt="" width="70px" height="70px" style="margin-top: 15px;"></a>
           <a href="#" data-target="mobile-nav" class="sidenav-trigger" style="margin-top: 15px;"><i class="material-icons">menu</i></a>
           <ul id="nav-mobile" class="left hide-on-med-and-down">
             <li><a href="/berita">Berita</a></li>
             <li><a href="/profil">Profil</a></li>
             <li><a href="/galeri">Galeri</a></li>
           </ul>
           <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="/">Kontak</a></li>
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
         <li><a href="/berita">Berita</a></li>
         <li><a href="/tentang">Tentang</a></li>
         <li><a href="/galeri">Galeri</a></li>
         <li><a href="/">Kontak</a></li>
         <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">GTK<i class="material-icons right">arrow_drop_down</i></a></li>
     </ul>
@endsection

@section('berita')
<section id="berita" class="berita section">
      <div class="container">
        <div class="row">
          <div class="col m12 light side-bar-left">
            <h3 class="header">Berita</h3>
            
            <!-- berita lainnya -->

            <div class="berita-lama2" >
              <div class="row">
                @foreach( $berita as $beritas)

                <div class="col s12 m12 l6">
                  <div class="card">
                    <div class="card-image">
                      <img src="{{$beritas->gambar}}">
                      <span class="card-title">{{$beritas->judul_artikel}}</span>
                    </div>
                    <div class="card-action">
                      <a href="berita/{{$beritas->id}}">Baca Selengkapnya...</a>
                    </div>
                  </div>
                </div>
                @endforeach          
           </div>
          </div>
        </div>
        <div class="center">
              {!! $berita->links('vendor.pagination.custom-materialize'); !!}
            </div> 
      </div>
    </section>
@endsection