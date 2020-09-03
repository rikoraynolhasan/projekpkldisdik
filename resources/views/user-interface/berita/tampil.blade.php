@extends('user-interface.layout.main')

@section('title','Berita | Disdik Samarinda Kota')

@section('navbar')
    <div class="navbar-fixed">
       <nav>
         <div class="container">
          <div class="nav-wrapper">
           <a href="/" class="brand-logo center"><img src="{{ asset('img/logo-Pemkot.png') }}" alt="" width="70px" height="70px" style="margin-top: 15px;"></a>
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
<section id="berita" class="berita section scrollspy">
      <div class="container">
        <div class="row">
            <h3 class="header">Berita</h3>
            <div class="col m12">
                <h4>{{$berita->judul_artikel}}</h4>
                <img class="responsive-img" src="{{ asset($berita->gambar) }}">
                <p style="font-size: 20px;" class="tgl"> <i class="tiny material-icons"> access_time </i><span style="margin-left:2px;"> {{$berita->tanggal}}</span> <i class="tiny material-icons"> label </i><span style="margin-left:2px;"> {{$berita->kategori}}</span></p>
                <p>{{$berita->artikel}}</p>
                <p style=" font-weight: bold; ">Di posting pada tanggal {{$berita->created_at}} </p>
            </div>
        </div>
      </div>
    </section>
@endsection