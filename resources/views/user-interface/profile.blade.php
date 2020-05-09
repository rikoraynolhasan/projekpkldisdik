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
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Profil | Disdik Samarinda Kota</title>

      <style>
        

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

        .sorga .header, .vmt .header{
            border-right: 1px solid #555;
        }

        .sorga img{
            margin-top: 20px;
            margin-bottom: 20px;
            box-shadow: 0px 0px 13px 3px rgba(0,0,0,0.75);
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


    <!-- Profile -->
    <section class="profil section scrollspy" id="profil">
      <div class="container">
        <div class="row">
          <h3 class="header">Profil</h3>
          <div class="col m12 s12 l6">
            <img class="responsive-img" width="400" src="img/galery/dinas-pendidikan-kota-samarinda.jpg">
          </div>
          <div class="col m12 s12 l6 light">
            <h5>Profil Singkat</h5>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas molestias sit aut optio aliquam natus? Accusamus, reiciendis harum eos provident delectus voluptatem! Officia ducimus quo deserunt alias aspernatur, ut tempore. Fugit nisi aperiam harum laborum deserunt minima cupiditate quasi debitis deleniti itaque dolor rerum, sequi numquam voluptate quia possimus distinctio nesciunt sunt. Praesentium molestiae est assumenda facilis reiciendis, odio nobis labore fugit.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Visi Misi dan Tujuan -->
    <section class="vmt">
        <div class="container">
            <div class="row">
                <div class="col l12 light">
                    <h3 class="header center">Visi</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, dolor dolore. Et in magni ea libero, illum atque debitis tempore iusto ex alias ullam accusantium eaque exercitationem minima vero sequi. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, eum. Recusandae, voluptates similique dolores incidunt autem quas esse dignissimos ad amet ratione nihil facilis ipsum sapiente ipsa odit cum iure. lor</p>
                </div>
                <div class="col l12 light">
                    <h3 class="header center">Misi</h3>
                     <ol type="1">
                         <li><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate esse exercitationem libero molestiae perspiciatis sapiente sequi, rem vero repellendus quam atque, voluptatum iste nam facere. Nisi minima deserunt praesentium officiis commodi est sunt obcaecati sed, eos quam corporis magnam.</p></li>
                         <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis laborum non officiis dignissimos hic harum, ut atque iure, cupiditate nihil sint? Perferendis voluptatum error, nemo beatae voluptates voluptatibus expedita? Amet.</p></li>
                         <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni voluptatibus sint iste eaque quo.</p></li>
                         <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A amet odio recusandae error dolorum repellat. Nihil cum dolores laboriosam fugiat voluptate accusamus expedita?</p></li>
                         <li><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad expedita similique in labore.</p></li>
                     </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Struktur Organisasi -->
    <section class="sorga">
        <div class="container">
            <div class="row">
                <div class="col l12 light">
                    <h3 class="header center">Struktur Organisasi</h3>
                     <img src="img/galery/SO.png" height="600" width="900" alt="">
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-copyright light">     
          <p class="black center"> © 2020 Copyright</p>
        </div>
      </footer>








      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/myjavascript.js"></script>
    </body>
</html>