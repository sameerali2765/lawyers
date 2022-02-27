<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/atorni/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Sep 2021 18:53:28 GMT -->
<head>
<title>LAWYER.COM</title>
<meta charset="utf-8">
<link rel="shortcut icon" href="{{asset('images/icon/mainlogo.png')}}">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="preconnect" href="{{ asset('https://fonts.gstatic.com/')}}">
<link href="{{ asset('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap')}}" rel="stylesheet">
<link rel="preconnect" href="{{ asset('https://fonts.gstatic.com/')}}">
<link href="{{asset('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('../../../cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/A.animate.css%2bflaticon.css%2btiny-slider.css%2baos.css%2bstyle.css%2cMcc.Fv1RkHV6ii.css.pagespeed.cf.9TFHHVQXFY.css')}}" />
</head>
<body>
<div class="pt-3 pb-5 top-wrap">
<div class="container-xl">
<div class="row d-flex align-items-end">
<div class="col-md-2 d-flex mb-2 mb-md-0 order-md-2">
<a class="navbar-brand align-items-center m-md-auto" href="localhost:8000/">
<span class="flaticon flaticon-law"></span>
<span class="">LAWYER <small>Lawfirm Agency</small></span>
</a>
</div>
<div class="col-md topper d-flex mb-md-0 mb-2 align-items-center order-md-1">
<div class="icon d-flex justify-content-center align-items-center order-md-last">
<span class="fa fa-map"></span>
</div>
<div class="pr-md-4 pr-0 text pl-3 pl-md-0 text-md-right">
<p class="con"><span>Free Call</span> <span>+1 234 456 78910</span></p>
<p class="con">Call Us Now 24/7 Customer Support</p>
</div>
</div>
<div class="col-md topper d-flex mb-md-0 align-items-center order-md-3">
<div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-paper-plane"></span>
</div>
<div class="text pl-3 pl-md-3">
<!-- <p class="hr"><span>Our Location</span></p>
<p class="con">198 West 21th Street, Suite 721 New York NY 10016</p> -->
<!-- Buttons Login and Regsiter -->
<span>
	@if (Session('tid')==null)
	<a style="
      border:none;
	  color:black;
      padding:20px;
      font-size:20px;"
	   href="http://localhost:8000/checklogin" >Login</a></span>
<a   style="
	 border:none;
	 color:black;
	 padding:20px;
	 font-size:20px;"
	 href="http://localhost:8000/CheckRegsiter">Regsiter</a>		
	 @else
	 <a style="
      border:none;
	  color:black;
      padding:20px;
      font-size:20px;"
	   href="#" >Dashboard</a></span>
<a   style="
	 border:none;
	 color:black;
	 padding:20px;
	 font-size:20px;"
	 href="http://localhost:8000/Logoutc">Logout</a>
	
     @endif
	
</div>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-expand-lg  ftco-navbar-light ">
<div class="container-xl">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="fa fa-bars"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto mb-2 mb-lg-0" >
<span style="width:80px"></span>
<li class="nav-item"><a class="nav-link active" href="http://localhost:8000/">Home</a></li>
<li class="nav-item"><a class="nav-link" href="http://localhost:8000/aboutus">About</a></li>
<li class="nav-item"><a class="nav-link" href="http://localhost:8000/p">Lawyers</a></li>

<li class="nav-item"><a class="nav-link" href="#">Cases</a></li>
<li class="nav-item"><a class="nav-link" href="http://localhost:8000/news">News</a></li>
<li class="nav-item"><a class="nav-link" href="http://localhost:8000/contactus"></a></li>
<li>
<form action="/p" method="GET" class="search-container">
<input type="search" style="width: 300px;margin:10px;border:2px solid #B99566;border-radius:20px" name="search" class="search-bar form-control" value=""placeholder="Search By Category Or experience">
</li>
<li>
<input type="submit" Value="Search" style="background: #B99566;color:white;border-radius:20px;padding:7px;margin-top:10px;border:1px solid #B99566;
width:100px">
</li>
</form>
</ul>
</div>
</div>
</nav>



@yield('content')




<footer class="ftco-footer">
<div class="container-xl">
<div class="row mb-5 pb-5 justify-content-between">
<div class="col-md-6 col-lg">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2 logo d-flex">
<a class="navbar-brand align-items-center" href="index-2.html">
<span class="flaticon flaticon-law"></span>
<span class="" style="color: white">LAWYER <small>Lawfirm Agency</small></span>
</a>
</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<ul class="ftco-footer-social list-unstyled mt-2">
<li><a href="#"><span class="fa fa-twitter"></span></a></li>
<li><a href="#"><span class="fa fa-facebook"></span></a></li>
<li><a href="#"><span class="fa fa-instagram"></span></a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Recent Posts</h2>
<div class="block-21 mb-4 d-flex">
<a class="img mr-4 rounded" style="background-image:url(images/ximage_1.jpg.pagespeed.ic.Yc6gAsaZ2Y.jpg)"></a>
<div class="text">
<h3 class="heading"><a href="#">Main practice areas of the firm include admiralty</a></h3>
<div class="meta">
<div><a href="#"><span class="fa fa-calendar"></span> Oct. 18, 2020</a></div>
<div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
<div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
</div>
</div>
</div>
<div class="block-21 mb-4 d-flex">
<a class="img mr-4 rounded" style="background-image:url(images/ximage_2.jpg.pagespeed.ic.mQGyn1P_Li.jpg)"></a>
<div class="text">
<h3 class="heading"><a href="#">Main practice areas of the firm include admiralty</a></h3>
<div class="meta">
<div><a href="#"><span class="fa fa-calendar"></span> Oct. 18, 2020</a></div>
<div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
<div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-2">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Explore</h2>
<ul class="list-unstyled">
<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Practice Areas</a></li>
<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Case Studies</a></li>
<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Attorneys</a></li>
<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Have a Questions?</h2>
<div class="block-23 mb-3">
<ul>
<li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
<li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text"><span class="__cf_email__" data-cfemail="dcb5b2bab39ca5b3a9aeb8b3b1bdb5b2f2bfb3b1">[email&#160;protected]</span></span></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid px-0 py-5 bg-black">
<div class="container-xl">
<div class="row">
<div class="col-md-12 text-center">
<p class="mb-0" style="color: rgba(255,255,255,.5); font-size: 13px;">Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved |<a href="#" target="_blank" rel="nofollow noopener"> Lawers.com</a></p>
</div>
</div>
</div>
</div>
</footer>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="https://use.fontawesome.com/b3c6746809.js"></script>
<script src="{{asset('js/tiny-slider.js')}}"></script>
<script src="{{asset('js/aos.js%2bgoogle-map.js%2bmain.js.pagespeed.jc.g_s_iUn7bC.js')}}"></script><script>eval(mod_pagespeed_KNn$AevLtB);</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script>eval(mod_pagespeed_9v35$gAaiy);</script>
<script>eval(mod_pagespeed_hCjKxCcDqv);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
							window.dataLayer = window.dataLayer || [];
							function gtag(){dataLayer.push(arguments);}
							gtag('js', new Date());

							gtag('config', 'UA-23581568-13');
						</script>
<script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"68cadbfb68a5ca88","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.1","si":10}'></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/atorni/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Sep 2021 18:53:53 GMT -->
</html>