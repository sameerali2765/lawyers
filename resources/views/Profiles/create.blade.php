<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="style.css">
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

</style>
<body>



    {{-- Html --}}
 <div class="signin-form">
 <form action="/p/post" method="POST" enctype="multipart/form-data">
    <h2>Profile</h2>
    @csrf
 <div class="form-group">
    <input type="file" class="form-control input-lg" name="image"> 
</div>
<div class="form-group">
    <input placeholder="Full Name"  class="form-control input-lg"type="text" name="description">
</div>
 <div class="form-group">
    <input placeholder="Your Experience" type="number"class="form-control input-lg" name="experience">
</div>
<div class="form-group">
    <select name="specialized" class="form-control input-lg" placeholder="Specialized In">
        <option value="Social Issue">Social Issue</option>
        <option value="Street Crime">Street Crime</option>
        <option value="Serial Crime">Serial Crime</option>
        <option value="Property Issue">Property Issue</option>
        <option value="Money Issue">Money Issue</option>
        <option value="Money Issue">Family law</option>
        <option value="Corrption Issue">Corrption Issue</option>
    </select>
    {{-- <input placeholder=""  type="text" name="specialized">  --}}
</div>
<div class="form-group">
    <input placeholder="Total Cases" class="form-control input-lg" type="number" name="totalcases">
</div>

<div class="form-group">
    <input type="hidden" name="foriegnID" value="{{$id->id}}">
</div>
 <div class="form-group">
 <button type="submit" class="btn  btn-lg btn-block signup-btn">Create Profile</button>
 </div>
 </form> </div>
</body>
</html>
    
