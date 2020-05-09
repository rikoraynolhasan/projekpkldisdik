<li class="{{ Request::is('news*') ? 'active' : '' }}">
    <a href="{{ route('news.index') }}"><span class="glyphicon glyphicon-triangle-right"></span><span>Berita</span></a>
</li>

<li class="{{ Request::is('heads*') ? 'active' : '' }}">
    <a href="{{ route('heads.index') }}"><span class="glyphicon glyphicon-triangle-right"></span><span>Atasan</span></a>
</li>

<li class="{{ Request::is('employees*') ? 'active' : '' }}">
    <a href="{{ route('employees.index') }}"><span class="glyphicon glyphicon-triangle-right"></span><span>Staff/Karyawan</span></a>
</li>

<!-- <li class="{{ Request::is('gtks*') ? 'active' : '' }}">
    <a href="{{ route('gtks.index') }}"><i class="fa fa-edit"></i><span>Gtks</span></a>
</li> -->

<li class="{{ Request::is('galeris*') ? 'active' : '' }}">
    <a href="{{ route('galeris.index') }}"><span class="glyphicon glyphicon-triangle-right"></span><span>Galeri</span></a>
</li>

