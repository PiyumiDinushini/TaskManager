<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>www.DailyTaskManager.com</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 90vh;
                margin: 0;
            }

            .full-height {
                height: 90vh;
            }

           

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

        </style>

    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">

    <div class="container">
        <a href="" class="navbar-brand" style="font-size:25px;">DailyTaskManager</a>
	    <button class="navbar-toggler" data-toggle="collapse" data-target="#id"><span class="navbar-toggler-icon"></span></button>
	    <div class="collapse navbar-collapse justify-content-center" id="id">
	
		<ul class="navbar-nav" style="font-size:15px; text-transform: uppercase;">
			<li class="nav-item"><a href="/" class="nav-link">Home</a><li>
			<li class="nav-item"><a href="/about" class="nav-link">About Us</a><li>
			<li class="nav-item"><a href="/contact" class="nav-link">Contact Us</a><li>
			</ul>		
	</div>	
		
</nav>

<div class="container">

        @yield('content')

</div>

</div>
<footer class=" page-footer font-small mdb-color pt-4 bg-dark " style="color:white;">
  <div class="container text-center text-md-left">
    
    <div class="row d-flex align-items-center">

      <div class="col-md-7 col-lg-8">

        <p class="text-center text-md-left">© 2019 Copyright:
          <a href="" style="text-decoration:none; color:white;">www.DailyTaskManager.com </a>
        </p>

      </div>

    </div>
  </div>

</footer>        

    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
