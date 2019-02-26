<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro </title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/slick.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{asset('css/slick-theme.css')}}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/nouislider.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <style type="text/css">
  
#block-search{
    background: #fff;
    margin-top: 36px;
    border-radius: 4px;
    display: block;

    width: 418px;
    height:auto;
    position: absolute;
    z-index: 99999;
}
#block-search > ul{
    margin-left: 0px
} 
#block-search > ul > li > a{
    padding:10px;
    display: inline-block;
    color: #777;
    font:200 11.5px/24px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
    text-decoration: none;
    width: 100%
}
#block-search > ul > li > a:hover{
    background: rgba(0,0,0,0.06);
}
#block-search > ul > li > a > i{
   padding: 0 2px
}

#block-search > ul > li > a > img{
    width: 49px;
    margin: 0 10px
} 
.panier-header p {
    padding-bottom: 15px;
}
    </style>
    </head>
    
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +216 54 808 062</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> nasreddinbenhamouda@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> El Alia Bizerte </a></li>
						<!--<li><span id="test"></span></li>-->
					</ul>
					
					<ul class="header-links pull-right">
						@if (Auth::guest())
						<li class="dropdown"> <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class=" fa fa-user-o"></i> My Account</a>
						  <ul class="dropdown-menu" role="menu">
                            <li>
                            <a href="{{route('login')}}" ><p style="color:red"><i class="fa fa-user-o"></i>Login</p></a>
                                                          
                            </li>
                            <li style="color: red;">
                            <a href="{{route('register')}}"><p style="color:red"><i class="fa fa-user-o"></i>Register</p></a>
                                                          
                            </li>
                          </ul> 
                        </li>
						@else
						<li class="dropdown"> <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class=" fa fa-user-o"></i> {{ Auth::user()->nom }} {{ Auth::user()->prenom }} </a>
						  <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <p style="color:red"><i class="fa fa-user-o"></i>Logout</p>
                              </a>

                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                               </form>
                            </li>
                          </ul> 
                        </li>
						@endif
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="{{asset('./img/logo.png')}}" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								{!! Form::open(['method'=>'GET','action'=> ['ProduitsController@search']])!!}
									<select name="cat" class="input-select">
										<option value="all">All Categories</option>
										<option value="laptop">Laptop</option>
										<option value="smartphone">Smartphone</option>
										<option value="camera">Camera</option>
										<option value="accessoire">Accessoire</option>
									</select>
									<input class="input" name="text" onkeyup="showHint(this.value)" placeholder="Search here">
									<button type="submit" class="search-btn">Search</button>
									
								{!! Form::close()!!}
								<div id="block-search">

   								    </div>
							</div>
							
						</div>

						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<?php 
									$prixtot=null;
									if(Auth::guest()){
                                      $commandes=null;
									}
									else{
                                     $commandes= Auth::user()->commande->where('confirmation',0);
									}
                                    

									?>
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty">{{count($commandes)}}</div>
									</a>
									<div class="cart-dropdown">
									
										<div class="cart-list">

											@if($commandes!=null)
											@foreach($commandes as $com)
											<?php $prixtot+=$com->produit->prix *$com->quantite;   ?>
												{!! Form::open(['method'=>'PUT','action'=> ['commandesController@update',$com->id]])!!}
											<div class="product-widget">
												<div class="product-img">
													<img src="{{asset('img/'.$com->produit->img1.'')}}" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="{{url('produits',['id'=>$com->produit->id])}}">{{$com->produit->marque}}</a></h3>
													<h4 class="product-price"><span class="qty">{{$com->quantite}} x</span> {{$com->produit->prix}} TND</h4>
												</div>

												<button type="submit" name="delete_list"class="delete"><i class="fa fa-close"></i></button>
											</div>
											{!! Form::close()!!}
											@endforeach
											@else
											
								            @endif


										</div>

										
									

										<div class="cart-summary">
											<small>{{count($commandes)}} Item(s) selected</small>
											<h5>SUBTOTAL:{{$prixtot}} TND</h5>
										</div>
										<div class="cart-btns">
											<a href="{{url('/commandes')}}">View Cart</a>
											<a href="{{url('/commandes/checkout/confirm')}}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="{{url('produits')}}">Home</a></li>
						<li><a href="#">Hot Deals</a></li>
						<li><a href="{{url('/produits/categorie/store')}}">Categories</a></li>
						<li><a href="#">Laptops</a></li>
						<li><a href="#">Smartphones</a></li>
						<li><a href="#">Cameras</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
    @yield('content')
		<!-- SECTION -->
		
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>El Alia Bizerte</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+216 54 808 062</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>nasreddinbenhamouda@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Site is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Nasreddin Ben hammouda</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		
		
		<script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/slick.min.js')}}"></script>
		<script src="{{asset('js/nouislider.min.js')}}"></script>
		<script src="{{asset('js/jquery.zoom.min.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>
		<script src="{{asset('js/search.js')}}"></script>
		<!--<script >
			$(function() {

        $('#test').html('Hello world. Ce texte est affiché par jQuery.');

           })
		</script>-->
		
	

	</body>
</html>
