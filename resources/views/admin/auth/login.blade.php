<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin-panel/assets/images/favicon.png')}}">
    <title>Admin Dashboard</title>
    <!-- Custom CSS -->
    <link href="{{asset('admin-panel/dist/css/style.min.css')}}" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style type="text/css">
    

</style>
<body>
<div class="main-wrapper">
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>


    <!--form-->
   <section>
       <div class="container-fluid pb-5" style="height:650px; background:#F6F6F6;">
       
           <div class="box" >
               <div class="row">

                   <div class="col-md-7 pt-5">
                    <h3 class="text-center"> Let's Manage Together, Grow Together</h3>
                       <img src="admin-panel/assets/images/containerimg.jpg" class="img-fluid">
                   </div>
                   <div class="col-md-4 bg-light mt-5 ">

                            <div class="text-center p-t-20 p-b-20">
                    <span class="db"><img src="{{asset('admin-panel/assets/images/logo.png')}}" alt="logo" style="width: 160px;" /></span>
                    <h3>Welcome To HRMS</h3>
                    <img src="{{asset('admin-panel/assets/images/avtar.jpg')}}" class="img-fluid w-25 rounded-circle">
                </div>

<!-- Form -->
                 {{--<form class="form-horizontal m-t-20" id="loginform" action="index.html">--}}
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="row p-b-30">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" required="">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="p-t-20">
                                    <button class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> Lost password?</button>
                                     <a href="http://127.0.0.1:8000/register"><button class="btn btn-primary" id="to-recover" type="button"><i class="fa fa-lock-open m-r-5"></i>Sign Up</button></a>
                                    <button class="btn btn-success float-right" type="submit">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
               </form> 
       </form>
   </div>
</div>
</div>
       </div>
   </section>
   <!--form end-->


</div>
<script src="{{asset('admin-panel/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('admin-panel/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('admin-panel/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<script>

    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();

    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function(){

        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
</script>

</body>

</html>