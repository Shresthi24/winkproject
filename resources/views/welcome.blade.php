<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        </head>
    <body>
       <nav class="navbar  navbar-static-top navbar-inverse abc"  role="navigation">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                       
                        <div>
                            <h3 class="logo">
                              VeU 
                            </h3>

                        </div>
                    </div>

    
        
             <div class="collapse navbar-collapse" id="myNavbar">
    
        
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class=""></span> Sign Up</a></li>
        <li><a href="#"><span class=""></span> Login</a></li>
      </ul>
    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    
                    <!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </div>
        </nav>



        @yield('welcome')  
        @yield('content')
    </body>
</html>
