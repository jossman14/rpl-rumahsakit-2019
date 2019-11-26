
<!DOCTYPE html>
<html>
    
<!-- Mirrored from moltran.coderthemes.com/menu_2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 04:29:06 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- <link rel="shortcut icon" href="{{ asset('admin/assets/images/RMPTransparent.png') }}"> -->

        <title>Login | RSIA Bahagia</title>

        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin/assets/css/core.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin/assets/css/components.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin/assets/css/pages.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin/assets/css/menu.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('admin/assets/css/responsive.css')}}" rel="stylesheet" type="text/css">

        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <body>


        <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white">Sistem Informasi Manajemen Layanan <strong>RSIA Bahagia</strong></h3>
                </div> 

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    @csrf
                        
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="md md-person"></i></span>
                                    <input id="email" name="email" value="{{ old('email') }}" class="form-control input-lg  @error('email') is-invalid @enderror" autocomplete="off" type="email" placeholder="Email" required autofocus>
                                </div>

                                @error('email')
                                    <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="md md-vpn-key"></i></span>
                                    <input class="form-control input-lg @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password" id="password" required>
                                    <span class="input-group-addon"><a type="button" id="show"><i class="fa fa-eye"></i></a></span>
                                </div>

                                @error('password')
                                    <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group text-center">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-md w-lg waves-effect waves-light" type="submit" style="width: 100%;margin-top: 10px;">Login</button>
                            </div>
                        </div>
                    </form> 
                    <!-- <hr /> -->
                    <div style="border: 1px solid white;">
                        <p style="font-size: 13px;color: darkgrey;padding: 10px;text-align: center;">Hubungi admin untuk pendaftaran akun pegawai <br> <span style="font-weight: bold;">RSIA Bahagia</span></p>
                    </div>
                </div>                                 
                
            </div>
        </div>

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/detect.js')}}"></script>
        <script src="{{asset('admin/assets/js/fastclick.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('admin/assets/js/waves.js')}}"></script>
        <script src="{{asset('admin/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.scrollTo.min.js')}}"></script>

        <script src="{{asset('assets/js/jquery.app.js')}}"></script>

        <script>
            $("#show").click(function() {
              if ($("#password").attr("type") == "password") {
                $("#password").attr("type", "text");

              } else {
                $("#password").attr("type", "password");
              }
            });
        </script>
	
	</body>

<!-- Mirrored from moltran.coderthemes.com/menu_2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 04:29:07 GMT -->
</html>