    <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main  navbar m-b-0 b-0">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="{{url('/dashboard')}}" class="logo"><i class="md md-terrain"></i> <span> <!-- CV Rey Mitra Persada -->  </span></a>
                        <!-- <a href="{{url('/dashboard')}}" class="logo"><font color="white"><img src="{{ asset('admin/assets/images/RMP.jpeg') }}" height="48px" style="margin-top: -10px;"></img></font></a> -->
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown user-box">
                                <a href="#" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                                    <!-- <p style="height: auto;">Hi, {{ Auth::user()->name }}</p> -->
                                    <div class="user-status away"><i class="md md-person"></i><span style="margin-right: 5px;margin-left: 5px;">{{ Auth::user()->name }}</span><i class="md md-keyboard-arrow-down"></i></div>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                       <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                            <i class="md md-settings-power"></i> 
                                       Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}">
                                <a href="{{url('/dashboard')}}"><i class="ion ion-pie-graph"></i> <span> Dashboard </span> </a>
                            </li>

                            <li class="{{ (request()->is('user')) ? 'active' : '' }}">
                                <a href="{{url('/user')}}"><i class="ion ion-person"></i> <span> Data User </span> </a>
                            </li>

                            @if(auth()->user()->role == '1')
                            <li class="{{ (request()->is('oli')) ? 'active' : '' }}">
                                <a href="{{url('/oli')}}"><i class="md md-content-paste"></i> <span> Data Oli </span> </a>
                            </li>

                            <li class="{{ (request()->is('stockOli')) ? 'active' : '' }}">
                                <a href="{{url('/stockOli')}}"><i class="ion ion-arrow-swap"></i> <span> Data Stock Oli </span> </a>
                            </li>

                            <li class="{{ (request()->is('konsumenOli')) ? 'active' : '' }}">
                                <a href="{{url('/konsumenOli')}}"><i class="md md-group"></i> <span> Data Konsumen Oli </span> </a>
                            </li>

                            <li class="{{ (request()->is('penjualanOli')) ? 'active' : '' }}">
                                <a href="{{url('/penjualanOli')}}"><i class="md md-equalizer"></i> <span> Data Penjualan Oli </span> </a>
                            </li>
                            @endif
                            
                            @if(auth()->user()->role == '2')
                            <li class="{{ (request()->is('piutangKonsumenOli')) ? 'active' : '' }}">
                                <a href="{{url('/piutangKonsumenOli')}}"><i class="md md-person"></i> <span> Piutang Konsumen Oli </span> </a>
                            </li>

                            <li class="{{ (request()->is('penjualanOli')) ? 'active' : '' }}">
                                <a href="{{url('/penjualanOli')}}"><i class="md md-equalizer"></i> <span> Laporan Penjualan Oli </span> </a>
                            </li>
                            @endif

                            @if(auth()->user()->role == '3')
                            <li  class="{{ (request()->is('ban')) ? 'active' : '' }}">
                                <a href="{{url('/ban')}}"><i class="md md-content-paste"></i> <span> Data Ban </span> </a>
                            </li>

                            <li  class="{{ (request()->is('stockBan')) ? 'active' : '' }}">
                                <a href="{{url('/stockBan')}}"><i class="ion ion-arrow-swap"></i> <span> Data Stock Ban </span> </a>
                            </li>

                            <li  class="{{ (request()->is('penjualanBan')) ? 'active' : '' }}">
                                <a href="{{url('/penjualanBan')}}"><i class="md md-equalizer"></i> <span> Data Penjualan Ban </span> </a>
                            </li>

                            <li  class="{{ (request()->is('piutangKonsumenBan')) ? 'active' : '' }}">
                                <a href="{{url('/piutangKonsumenBan')}}"><i class="md md-person"></i> <span> Piutang Konsumen Ban </span> </a>
                            </li>

                            <li  class="{{ (request()->is('konsumenBan')) ? 'active' : '' }}">
                                <a href="{{url('/konsumenBan')}}"><i class="md md-person"></i> <span> Data Konsumen Ban </span> </a>
                            </li>
                            @endif

                            @if(auth()->user()->role == '4')
                            <li class="{{ (request()->is('penjualanOliDanBan')) ? 'active' : '' }}">
                                <a href="{{url('/penjualanOliDanBan')}}"><i class="md md-equalizer"></i> <span> Laporan Penjualan Oli dan Ban </span> </a>
                            </li>

                            <li class="{{ (request()->is('labaRugiPerusahaan')) ? 'active' : '' }}">
                                <a href="{{url('/labaRugiPerusahaan')}}"><i class="md md-equalizer"></i> <span> Laba Rugi Perusahaan </span> </a>
                            </li>

                            <li class="{{ (request()->is('presentaseKeuntungan')) ? 'active' : '' }}">
                                <a href="{{url('/presentaseKeuntungan')}}"><i class="md md-equalizer"></i> <span> Presentase Keuntungan </span> </a>
                            </li>

                            <li class="{{ (request()->is('pengeluaran')) ? 'active' : '' }}">
                                <a href="{{url('/pengeluaran')}}"><i class="md md-equalizer"></i> <span> Laporan Pengeluaran </span> </a>
                            </li>
                            @endif
                            
                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>
    <!-- End Navigation Bar-->