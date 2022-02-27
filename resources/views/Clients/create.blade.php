
<!doctype html>
<html lang="en">
  <head>
  	<title>Client Register!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

	</head>
	<body>

    
<section class="ftco-section">
  
    <div class="row justify-content-center">
      <div class="col-md-7 col-lg-6 col-xl-5">
        <div class="login-wrap p-4 p-md-5">
          <h3 class="mb-4 text-center">Register Client! <span>Please signup to continue</span></h3>
          
          <form action="/storeClient" method="POST"class="signup-form">
            <div class="form-group mb-4">
              @csrf
              <input  class="form-control" type="text" name="firstname" placeholder="First Name">
            </div>
            <div class="form-group mb-4">
            
              <input  class="form-control" type="text" name="lastname" placeholder="Last Name">
            </div>
            <div class="form-group mb-4">
            
              <input  class="form-control" type="email"  name="email" placeholder="Email">
            </div>
            <div class="form-group mb-4">
      
              <input  class="form-control" type="Phone Number"  name="number" placeholder="Phone Number">
            </div>
            <div class="form-group mb-4">
              
              <input  class="form-control" type="password"  name="password" placeholder="Password">
            </div>
            <div class="form-group mb-4">
             
              <input  class="form-control" type="password"  name="repeatpassword" placeholder="Confirm password">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary rounded submit p-3">Register</button>
            </div>
          </form>
          <div class="w-100 social-wrap">
            <p>
              <span>or</span>
              <span>Signup with</span>
            </p>
            <p class="social-media d-flex justify-content-center">
              <a href="#" class="social-icon facebook d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
              <a href="#" class="social-icon twitter d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
            </p>
            <p class="mt-4">I'm already a member! <a href="/loginc">Sign In</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>