    <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main  navbar m-b-0 b-0">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="{{url('/dashboard')}}" class="logo"><img src="{{ asset('admin/assets/images/RSIA.png') }}" height="48px" style="margin: -10px 0px -10px -10px;"></img><!-- <i class="md md-local-hospital"></i> --></a>
                        <!-- <a href="{{url('/dashboard')}}" class="logo"><font color="white"><img src="{{ asset('admin/assets/images/RMP.jpeg') }}" height="48px" style="margin-top: -10px;"></img></font></a> -->
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="dropdown user-box">
                                <a href="#" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                                    <!-- <p style="height: auto;">Hi, {{ Auth::user()->name }}</p> -->
                                    <div class="user-status away"><!-- <i class="md md-person"></i> -->
                                        <span style="margin-right: 5px;margin-left: 5px;">
                                            {{ Auth::user()->nama }}
                                            (<b>{{ @(Auth::user()->role == 1 ? 'Admin' : 
                                                (Auth::user()->role == 2 ? 'Dokter' : 
                                                (Auth::user()->role == 3 ? 'Apoteker' : 
                                                (Auth::user()->role == 4 ? 'Kasir' : 
                                                (Auth::user()->role == 5 ? 'Petugas Medis Penunjang' : 
                                                (Auth::user()->role == 6 ? 'Petugas Pendaftaran' : 
                                                (Auth::user()->role == 7 ? 'Petugas Rawat Inap' : 
                                                (Auth::user()->role == 8 ? 'Petugas Rekam Medis' : 'Tidak ada' )))))))) }}</b>)
                                        </span><i class="md md-keyboard-arrow-down"></i></div>
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
                                <a href="{{url('/dashboard')}}"><i class="md md-home"></i> <span> Dashboard </span> </a>
                            </li>

                            @if(auth()->user()->role == '1')
                            <li class="{{ (request()->is('dataPegawai')) ? 'active' : '' }}">
                                <a href="{{url('/dataPegawai')}}"><i class="md md-accessibility"></i> <span> Data Pegawai </span> </a>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="ion ion-gear-a"></i><span> Master Data </span></a>
                                <ul class="submenu">
                                    <li><a href="{{url('/dataPasien')}}">Data Pasien</a></li>
                                    <li><a href="{{url('/dataDokter')}}">Data Dokter</a></li>
                                    <li><a href="{{url('/dataJadwalDokter')}}">Data Jadwal Dokter</a></li>
                                    <li><a href="{{url('/dataKamar')}}">Data Ruangan</a></li>
                                    <li><a href="{{url('/dataObat')}}">Data Obat</a></li>
                                    <li><a href="{{url('/dataPoli')}}">Data Poli</a></li>
                                    <li class="{{ (request()->is('dataJabatan')) ? 'active' : '' }}"><a href="{{url('/dataJabatan')}}">Data Jabatan</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-stethoscope"></i><span> Pemeriksaan </span></a>
                                <ul class="submenu">
                                    <li><a href="typography.html">Data Pemeriksaan</a></li>
                                    <li><a href="buttons.html">Data Pemeriksaan Penunjang</a></li>
                                    <li><a href="buttons.html">Data Rekam Medis</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="md md-content-paste"></i><span> Perawatan </span></a>
                                <ul class="submenu">
                                    <li><a href="typography.html">Data Perawatan</a></li>
                                    <li><a href="buttons.html">Data Rujukan Pasien</a></li>
                                </ul>
                            </li>
                            @endif

                            @if(auth()->user()->role == '2')
                            <!-- <li class="has-submenu">
                                <a href="#"><i class="fa fa-stethoscope"></i><span> Pemeriksaan </span></a>
                                <ul class="submenu">
                                    <li><a href="typography.html">Buat Pemeriksaan</a></li>
                                    <li><a href="buttons.html">Buat Pemeriksaan Penunjang</a></li>
                                </ul>
                            </li> -->
                            <li class="{{ (request()->is('pemeriksaanPasien')) ? 'active' : '' }}">
                                <a href="{{url('/pemeriksaanPasien')}}"><i class="fa fa-stethoscope"></i> <span> Pemeriksaan Pasien </span> </a>
                            </li>
                            <li class="{{ (request()->is('Rujukan')) ? 'active' : '' }}">
                                <a href="{{url('/Rujukan')}}"><i class="md md-email"></i> <span> Rujukan </span> </a>
                            </li>
                            <li class="{{ (request()->is('pemeriksaanPenunjang')) ? 'active' : '' }}">
                                <a href="{{url('/pemeriksaanPenunjang')}}"><i class="fa fa-stethoscope"></i> <span> Pemeriksaan Penunjang </span> </a>
                            </li>
                            @endif

                            @if(auth()->user()->role == '3')
                            <li class="{{ (request()->is('oli')) ? 'active' : '' }}">
                                <a href="{{url('/oli')}}"><i class="md md-accessibility"></i> <span> Data Obat </span> </a>
                            </li>
                            @endif

                            @if(auth()->user()->role == '4')
                            <li class="{{ (request()->is('oli')) ? 'active' : '' }}">
                                <a href="{{url('/oli')}}"><i class="fa fa-money"></i> <span> Validasi Pembayaran </span> </a>
                            </li>
                            @endif

                            @if(auth()->user()->role == '5')
                            <li class="{{ (request()->is('oli')) ? 'active' : '' }}">
                                <a href="{{url('/oli')}}"><i class="fa fa-stethoscope"></i> <span> Pemeriksaan Penunjang </span> </a>
                            </li>
                            @endif

                            @if(auth()->user()->role == '6')
                            <li class="{{ (request()->is('RegistrasiPasien')) ? 'active' : '' }}">
                                <a href="{{url('/RegistrasiPasien')}}"><i class="md md-person-add"></i> <span> Registrasi Pasien </span> </a>
                            </li>
                            <li class="{{ (request()->is('dataPasienPendaftaran')) ? 'active' : '' }}">
                                <a href="{{url('/dataPasienPendaftaran')}}"><i class="md md-person"></i> <span> Data Pasien </span> </a>
                            </li>
                            <li class="{{ (request()->is('JadwalDokter')) ? 'active' : '' }}">
                                <a href="{{url('/JadwalDokter')}}"><i class="fa fa-calendar"></i> <span> Jadwal Dokter </span> </a>
                            </li>
                            @endif

                            @if(auth()->user()->role == '7')
                            <li class="{{ (request()->is('oli')) ? 'active' : '' }}">
                                <a href="{{url('/oli')}}"><i class="fa fa-stethoscope"></i> <span> Data Perawatan </span> </a>
                            </li>
                            <li class="{{ (request()->is('oli')) ? 'active' : '' }}">
                                <a href="{{url('/oli')}}"><i class="fa fa-home"></i> <span> Ketersediaan Ruangan </span> </a>
                            </li>
                            @endif

                            @if(auth()->user()->role == '8')
                            <li class="{{ (request()->is('oli')) ? 'active' : '' }}">
                                <a href="{{url('/oli')}}"><i class="fa fa-stethoscope"></i> <span> Data Dokter </span> </a>
                            </li>
                            <li class="{{ (request()->is('oli')) ? 'active' : '' }}">
                                <a href="{{url('/oli')}}"><i class="fa fa-stethoscope"></i> <span> Data Perawat </span> </a>
                            </li>
                            <li class="{{ (request()->is('oli')) ? 'active' : '' }}">
                                <a href="{{url('/oli')}}"><i class="fa fa-stethoscope"></i> <span> Data Pasien </span> </a>
                            </li>
                            @endif
                            
                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>
    <!-- End Navigation Bar-->