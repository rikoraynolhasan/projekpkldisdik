<aside class="main-sidebar" id="sidebar-wrapper" style="background-color: rgb(40, 46, 60)">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" s>

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel" style="margin-top:10px">
            <div class="pull-left image">
                <img src="{{asset('img/foto-profil/profil.png')}}" class="img-circle"
                     alt="User Image"/>
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                <p>InfyOm</p>
                @else
                    <p>{{ Auth::user()->name}}</p>
                @endif
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
            </div>
        </form> -->
        <!-- Sidebar Menu -->

        <ul class="sidebar-menu" data-widget="tree" style="margin-top: 20px;">
            @include('layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>