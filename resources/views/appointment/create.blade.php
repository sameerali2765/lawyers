{{-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form >
    @csrf
        <input type="text" name="Name" >
        <br>
        <input type="email" name="Email" >
        <br>
        <input type="number" name="PhoneNo" >
        <br>
        <input type="date" name="Date" >
        <br>
        <input type="text" name="LawerName" >
        <br>
       <textarea name="Issue" id="" cols="30" rows="10"></textarea>
        <br>
<input type="hidden" name="status"  value="Pending">
<br>
        <input type="submit">
    </form>
</body>
</html> --}}


{{-- 

__________________________________________________________________________
__________________________________________________________________________ --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
      <title>Book Appointment</title>
</head>
<style>
  body{
color: #434343;
background: #dfe7e9;
font-family: Verdana, Geneva, Tahoma, sans-serif;}
.form-control{
font-size: 16px;
transition: all 0.4s;
box-shadow: none;}
.form-control:focus{
border-color: #B99566;}
.form-control ,.btn{
border-radius: 50px;
outline: none ;}
.signin-form{
width: 400px;
margin: 0 auto;
padding: 20px 0;}
.signin-form form{
border-radius: 5px;
margin-bottom: 20px;
background: #fff;
box-shadow: 0px 2px 2px rgba(0,0 ,0 ,0.3);
padding: 40px;}
.signin-form a{color: #5c85c;}
.signin-form h2{
text-align: center;
font-size: 34px;
margin: 10px 0 15px;}
.signin-form .hint-text{
color: #999;
text-align: center;
margin-bottom: 20px;}
.signin-form .form-group{
margin-bottom: 20px;}
.signin-form .btn{
background: #B99566;
color: white;
font-size: 18px;
line-height: 26px;
font-weight: bold;
text-align: center;}
.signin-form .small{
font-size: 13px;}
.signup-btn{
text-align: center;
border: #B99566;
transition: all 0.4s;
outline: none;}
.or-seperator{
margin: 50px 0 15px;
text-align: center;
border-top: 1px soild #e0e0e0;}
.or-seperator b{
padding: 0 10px;
width: 40px;
height: 40px;
font-size: 16px;
text-align: center;
line-height: 40px;
background: #fff;
display: inline-block;
border: 1px soild #e0e0e0;
border-radius: 50%;
position: relative;
top: -22px;
z-index: 1;}
.social-btn .btn{
color: #fff;
margin: 10px 0 0 30px;
font-size: 15px;
width: 55px;
height: 55px;
line-height: 38px;
border-radius: 50%;
font-weight: normal;
text-align: center;
border: none;
transition: all 0.4s;}
.social-btn .btn:first-child{
margin-left: 0;}
.social-btn .btn:hover{
opacity: 0.8;}
.social-btn .btn-primary{
background: #507cc0;}
.social-btn .btn-info{
background: #64ccf1;}
.social-btn .btn-danger{
background: #df4930;}
.social-btn .btn i{
font-size: 20px;}
</style><body>
  <div class="signin-form">
    <form action="/post/appointment" method="POST" >
      <h2 class=three>BOOK APPOINTMENT</h2>
  

      
    @csrf
    <div class="form-group">
      <input class="form-control input-lg" type="text" name="Name" placeholder="Your Name">
    </div>
    <div class="form-group">
      <input class="form-control input-lg" type="email"  name="Email" placeholder="Your Email">
    </div>
    <div class="form-group">
      <input class="form-control input-lg" type="number"  name="PhoneNo" placeholder="Your Phone">
      </div>      
      <div class="form-group">
        <input class="form-control input-lg" type="Date"  name="Date" placeholder=""> 
      </div>
      <div class="form-group">
        <textarea name="Issue" placeholder="Explain Your Issue " id="" class="form-control input-lg" ></textarea>
    </div> 
      <div class="form-group">
        <input name="status"  value="Pending" type="hidden" >
      </div>
      <input type="hidden" name="LawyerId" value="{{"$Profiles->id"}}">
      <input type="hidden" name="ClientId" value="{{Session('tid')}}">
          
  <button class="btn  btn-lg btn-block signup-btn" type="submit" >Book Appointment</button>
</form>
</body>
</html>



    
</body>
</html>-