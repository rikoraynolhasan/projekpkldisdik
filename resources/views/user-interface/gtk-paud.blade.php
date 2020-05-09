@extends('user-interface.layout.gtk')

@section('title','Profil GTK PAUD | Disdik Samarinda Kota')

@section('program')
    <!-- program -->
    <section class="program section scrollspy" id="profil">
      <div class="container">
        <div class="row">
          <h3 class="header center">Program GTK PAUD</h3>
          <div class="col l12 light">
              <h5>PENINGKATAN DAN PENGEMBANGAN MUTU GURU DAN KEPENDIDIKAN</h5>
              <ol type="1">
                  <li><p>Program Induksi guru Pemula</p></li>
                  <li><p>Peningkatan Kompetensi PKB dan PKP</p></li>
                  <li><p>Program Induksi guru Pemula</p></li>
              </ol>
              <h5>PEMBERIAN PENGHARGAAN DAN TANDA JASA GURU DAN KEPENDIDIKAN</h5>
              <ol type="1">
                  <li><p>Lomba Guru, Kepala Sekolah dan Pengawas Berprestasi</p></li>
                  <li><p>Olimpiade Guru Nasional</p></li>
                  <li><p>Lomba Guru Berdedikasi</p></li>
                  <li><p>Lomba Inovasi Pembelajaran</p></li>
              </ol>
              <h5>KESEJAHTERAAN GURU DAN TENAGA KEPENDIDIKAN</h5>
              <ol type="1">
                  <li><p>Tunjangan Profesi Guru</p></li>
                  <li><p>Tunjangan tambahan dan aneka tunjangan</p></li>
              </ol>
              <h5>KESEJAHTERAAN GURU DAN TENAGA KEPENDIDIKAN</h5>
              <ol type="1">
                  <li><p>Tunjangan Profesi Guru</p></li>
                  <li><p>Tunjangan tambahan dan aneka tunjangan</p></li>
              </ol>
              <h5>KARIR GTK</h5>
              <ol type="1">
                  <li><p>Inpassing</p></li>
                  <li><p>Penyesuaian Ijazah (PI)</p></li>
              </ol>
          </div>
        </div>
      </div>
    </section>
@endsection


@section('vmt')
    <!-- Visi Misi dan Tujuan -->
    <section class="vmt">
        <div class="container">
            <div class="row">
                <div class="col l12 light">
                    <h3 class="header center">Visi</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, dolor dolore. Et in magni ea libero, illum atque debitis tempore iusto ex alias ullam accusantium eaque exercitationem minima vero sequi. Disini koa Losat sit amet consectetur adipisicing elit. Beatae, eum. Recusandae, voluptates similique dolores incidunt autem quas esse dignissimos ad amet ratione nihil facilis ipsum sapiente ipsa odit cum iure. lor</p>
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
@endsection

@section('staff-data')
    <!-- datastaff -->
    <section class="datastaff">
     <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 light center">
                    @foreach($heads as $head)
                    <h3 class="header center">Kepala Seksi</h3>
                    <img class="responsive-img" width="150" src="img/foto-profil/profil.png">
                    <h5>{{$head->nama}}</h5>
                    <h6>Pembina / IVa</h6>
                    <p>NIP {{$head->nip}}</p>
                    @endforeach
                </div>
            </div>
            <div class="row">
                
                <h3 class="header center">Staff</h3>
                @foreach($employees as $employee)
                <div class="col l4 light staff center">
                    <img class="responsive-img" width="100" src="img/foto-profil/profil.png">
                    <h6>{{$employee->nama}} ({{$employee->karyawan}})</h6>
                    <p>{{$employee->jabatan}}</p>
                    <p>NIP {{$employee->nip}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection