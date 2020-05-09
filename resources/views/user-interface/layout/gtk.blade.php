<!DOCTYPE html>
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Zilla+Slab&display=swap" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
      <!-- mycss -->
      <link type="text/css" rel="stylesheet" href="{{ asset('css/mycss.css') }}"  media="screen,projection"/>
      <!-- favicon -->
      <link rel="icon" href="{{asset('img/logo-Pemkot.png')}}">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>@yield('title')</title>
      
      <style>
        
        .program{
            margin-top: 20px;
        }
        /* Visi Misi */
        .vmt{
            background-color: rgb(194, 255, 204);
            padding-top: 1px;
            margin-top: 5px;
        }

        .vmt p{
            padding-left: 10px;
            padding-right: 10px;
        }

        .header{
            border-right: 1px solid #555;
        }

        .datastaff img{
            background-color: rgb(173, 173, 173);
            border-radius: 30%;
            padding: 20px;
            margin-top: 20px;

        }

        .datastaff .staff img{
            
        }

      </style>
    </head>
    <body>
       <!-- awal navbar -->
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
         <li><a href="/profil">Profil</a></li>
         <li><a href="/galeri">Galeri</a></li>
         <li><a href="/">Kontak</a></li>
         <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">GTK<i class="material-icons right">arrow_drop_down</i></a></li>
     </ul>

    <!-- Program -->
    @yield('program')

    <!-- Visi Misi dan Tujuan -->
    @yield('vmt')

    <!-- datastaff -->
    @yield('staff-data')




    <footer>
      <div class="footer-copyright light">     
        <p class="flow-text black center"> © 2020 Copyright</p>
      </div>
    </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/myjavascript.js"></script>
    </body>
</html>

