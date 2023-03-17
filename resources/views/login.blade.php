<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset ('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{asset ('css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/style.css') }}">

    <title>Login #7</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
                  @if(session('error'))
                    <div class="alert alert-danger">
                    <b>Opps!</b> {{session('error')}}
                    </div>
                  @endif
            </div>

            <form action="{{ route('actionlogin') }}" method="post">
            @csrf

              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username">
              </div>

              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password">          
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                   <span class="ml-auto"><a href="/register" class="forgot-pass">Register</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>