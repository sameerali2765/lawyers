<html>
    <head>
        <title>REGISTER Lawyer</title>

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
        <x-jet-validation-errors class="mb-4" />
<section class="ftco-section">
  
    <div class="row justify-content-center">
      <div class="col-md-7 col-lg-6 col-xl-5">
        <div class="login-wrap p-4 p-md-5">
          <h3 class="mb-4 text-center">Register Lawyer! <span>Please register to continue</span></h3>
          
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group mb-4">
                <x-jet-input id="name" placeholder="Name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
          
            <div class="form-group mb-4">
            
                <x-jet-input id="email" placeholder="Email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>
         
            <div class="form-group mb-4">
                <x-jet-input id="password" placeholder="Password" class="form-control" type="password" name="password" required autocomplete="new-password" />
            </div>
            <div class="form-group mb-4">
             
                <x-jet-input id="password_confirmation" placeholder="Confirm Password" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div class="form-group">
              
              <button type="submit" class="btn btn-primary rounded submit p-3">Register</button>
            </div>
          
        <div class="flex items-center justify-end mt-4">
            

            
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
            <p class="mt-4">I'm already a member! <a href="/login">Register</a></p>
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



