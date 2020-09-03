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
    </head>
    <body>
       <!-- awal navbar -->
    @yield('navbar')
      
       

    <!-- slide -->
    @yield('slide')

     <!-- berita -->
    @yield('berita')

    <!-- Profile -->
    @yield('profil')

    <!-- Galeri -->
    @yield('galeri')

    <!-- kontak -->
    @yield('kontak')

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