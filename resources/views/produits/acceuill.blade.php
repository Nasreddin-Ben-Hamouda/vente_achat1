@extends('layouts.myapp')
@section('content')
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6 " >
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a  href="#tab1" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
                    
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('./img/shop03.png')}}" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Collection</h3>
								<a  href="#tab1" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop02.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Cameras<br>Collection</h3>
								<a  href="#tab1" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab3">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab4">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
									
									@foreach($prod_laptop as $laptop)	
									  	
										<div class="product">
									  {!! Form::open(['method'=>'GET','action'=>
									  ['commandesController@Save_cmd__page_accauille']])!!}
									<!-- product -->
											<a  href="{{url('produits',['id'=>$laptop->id])}}">
											<div class="product-img">
												<img src="./img/{{$laptop->img1}}" alt="">
												<div class="product-label">
													
													<span class="new">NEW</span>
												</div>
											</div>
										    </a>
											<div class="product-body">
												<p class="product-category">{{$laptop->categorie}}</p>
												<h3 class="product-name"><a  href="{{url('produits',['id'=>$laptop->id])}}">{{$laptop->marque}}</a></h3>
												<h4 class="product-price">{{$laptop->prix}} TND</h4> 
												<div class="product-rating">
													<i class="fa fa-star"></i></a>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<a href="{{url('produits',['id'=>$laptop->id])}}">
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
												</a>
											</div>
										
											<div class="add-to-cart">
												<button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										
										{{ Form::hidden('quantite','1')}}
					                    {{ Form::hidden('id',$laptop->id)}}
                                         {!! Form::close()!!}
                                         </div>
										@endforeach
										

										<!-- /product -->
                                        
										<!-- product -->
										
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<div id="tab2" class="tab-pane inactive">
									<div class="products-slick" data-nav="#slick-nav-2">
									@foreach($prod_smartphone as $smart)	
									
										<div class="product">
											{!! Form::open(['method'=>'GET','action'=>
									['commandesController@Save_cmd__page_accauille']])!!}
									<!-- product -->
											<a  href="{{url('produits',['id'=>$smart->id])}}">
											<div class="product-img">
												<img src="./img/{{$smart->img1}}" alt="">
												<div class="product-label">
													
													<span class="new">NEW</span>
												</div>
											</div>
										   </a>
											<div class="product-body">
												<p class="product-category">{{$smart->categorie}}</p>
												<h3 class="product-name"><a  href="{{url('produits',['id'=>$smart->id])}}">{{$smart->marque}}</a></h3>
												<h4 class="product-price">{{$smart->prix}} TND</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										
										{{ Form::hidden('quantite','1')}}
					                    {{ Form::hidden('id',$smart->id)}}
                                        {!! Form::close()!!}
                                        </div>
										@endforeach
										
										<!-- product -->
										
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<div id="tab3" class="tab-pane inactive">
									<div class="products-slick" data-nav="#slick-nav-3">
										<!-- product -->
										@foreach($prod_camera as $cam)
										
										<div class="product">
										
										{!! Form::open(['method'=>'GET','action'=>
									    ['commandesController@Save_cmd__page_accauille']])!!}
											<a  href="{{url('produits',['id'=>$cam->id])}}">
											<div class="product-img">
												<img src="./img/{{$cam->img1}}" alt="">
												<div class="product-label">
													
													<span class="new">NEW</span>
												</div>
											</div>
										    </a>
											<div class="product-body">
												<p class="product-category">{{$cam->categorie}}</p>
												<h3 class="product-name"><a  href="{{url('produits',['id'=>$cam->id])}}">{{$cam->marque}}</a></h3>
												<h4 class="product-price">{{$cam->prix}} TND</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										
										{{ Form::hidden('quantite','1')}}
					                    {{ Form::hidden('id',$cam->id)}}
                                        {!! Form::close()!!}
                                       </div>
										@endforeach
										<!-- /product -->
                                        
										<!-- product -->
										
										<!-- /product -->
									</div>
									<div id="slick-nav-3" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
								<div id="tab4" class="tab-pane inactive">
									<div class="products-slick" data-nav="#slick-nav-4">
										<!-- product -->
										@foreach($prod_accessoire as $acc)
										
										<div class="product">
											{!! Form::open(['method'=>'GET','action'=>
									['commandesController@Save_cmd__page_accauille']])!!}
											<a  href="{{url('produits',['id'=>$acc->id])}}">
											<div class="product-img">
												<img src="./img/{{$acc->img1}}" alt="">
												<div class="product-label">
												
													<span class="new">NEW</span>
												</div>
											</div>
										    </a>
											<div class="product-body">
												<p class="product-category">{{$acc->categorie}}</p>
												<h3 class="product-name"><a  href="{{url('produits',['id'=>$acc->id])}}">{{$acc->marque}}</a></h3>
												<h4 class="product-price">{{$acc->prix}} TND</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										
										{{ Form::hidden('quantite','1')}}
					                    {{ Form::hidden('id',$acc->id)}}
                                        {!! Form::close()!!}
                                    </div>
										@endforeach
										<!-- /product -->

										<!-- product -->
										
										<!-- /product -->
									</div>
									<div id="slick-nav-4" class="products-slick-nav"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab5">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab6">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab7">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab8">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab5" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-5">
										<!-- product -->
										@foreach($laptop_plus_commander as $cmd)
										
										<div class="product">
											{!! Form::open(['method'=>'GET','action'=>
									['commandesController@Save_cmd__page_accauille']])!!}
											<a  href="{{url('produits',['id'=>$cmd->id])}}">
											<div class="product-img">
												<img src="{{asset('./img/'.$cmd->img1.'')}}" alt="">
												<div class="product-label">
													
												</div>
											</div>
										    </a>
											<div class="product-body">
												<p class="product-category">{{$cmd->categorie}}</p>
												<h3 class="product-name"><a  href="{{url('produits',['id'=>$cmd->id])}}">{{$cmd->marque}}</a></h3>
												<h4 class="product-price">{{ $cmd->prix}} TND</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
									
										{{ Form::hidden('quantite','1')}}
					                    {{ Form::hidden('id',$cmd->id)}}
                                        {!! Form::close()!!}	
                                    </div>
										@endforeach
										<!-- /product -->

										<!-- product -->
										
										
										<!-- /product -->
									</div>
									<div id="slick-nav-5" class="products-slick-nav"></div>
								</div>
								<div id="tab6" class="tab-pane fade in inactive">
									<div class="products-slick" data-nav="#slick-nav-10">
										<!-- product -->
										@foreach($smartphone_plus_commander as $cmd)
										
										<div class="product">
											{!! Form::open(['method'=>'GET','action'=>
									['commandesController@Save_cmd__page_accauille']])!!}
											<a  href="{{url('produits',['id'=>$cmd->id])}}">
											<div class="product-img">
												<img src="{{asset('./img/'.$cmd->img1.'')}}" alt="">
												<div class="product-label">
													
												</div>
											</div>
										    </a>
											<div class="product-body">
												<p class="product-category">{{$cmd->categorie}}</p>
												<h3 class="product-name"><a  href="{{url('produits',['id'=>$cmd->id])}}">{{$cmd->marque}}</a></h3>
												<h4 class="product-price">{{ $cmd->prix}} TND</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										
										{{ Form::hidden('quantite','1')}}
					                    {{ Form::hidden('id',$cmd->id)}}
                                        {!! Form::close()!!}
                                        </div>
										@endforeach
										
										<!-- /product -->
									</div>
									<div id="slick-nav-10" class="products-slick-nav"></div>
								</div>
								<div id="tab7" class="tab-pane fade in inactive">
									<div class="products-slick" data-nav="#slick-nav-11">
										<!-- product -->
										@foreach($camera_plus_commander as $cmd)
										
										<div class="product">
											{!! Form::open(['method'=>'GET','action'=>
									['commandesController@Save_cmd__page_accauille']])!!}
											<a  href="{{url('produits',['id'=>$cmd->id])}}">
											<div class="product-img">
												<img src="{{asset('./img/'.$cmd->img1.'')}}" alt="">
												<div class="product-label">
													
												</div>
											</div>
										    </a>
											<div class="product-body">
												<p class="product-category">{{$cmd->categorie}}</p>
												<h3 class="product-name"><a  href="{{url('produits',['id'=>$cmd->id])}}">{{$cmd->marque}}</a></h3>
												<h4 class="product-price">{{ $cmd->prix}} TND</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										
										{{ Form::hidden('quantite','1')}}
					                    {{ Form::hidden('id',$cmd->id)}}
                                        {!! Form::close()!!}
                                    </div>
										@endforeach
										
										<!-- /product -->
									</div>
									<div id="slick-nav-11" class="products-slick-nav"></div>
								</div>
								<div id="tab8" class="tab-pane fade in inactive">
									<div class="products-slick" data-nav="#slick-nav-12">
										<!-- product -->
										@foreach($accessoire_plus_commander as $cmd)
										
										<div class="product">
											{!! Form::open(['method'=>'GET','action'=>
									['commandesController@Save_cmd__page_accauille']])!!}
											<a  href="{{url('produits',['id'=>$cmd->id])}}">
											<div class="product-img">
												<img src="{{asset('./img/'.$cmd->img1.'')}}" alt="">
												<div class="product-label">
													
												</div>
											</div>
										    </a>
											<div class="product-body">
												<p class="product-category">{{$cmd->categorie}}</p>
												<h3 class="product-name"><a  href="{{url('produits',['id'=>$cmd->id])}}">{{$cmd->marque}}</a></h3>
												<h4 class="product-price">{{ $cmd->prix}} TND</h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										
										{{ Form::hidden('quantite','1')}}
					                    {{ Form::hidden('id',$cmd->id)}}
                                        {!! Form::close()!!}
                                    </div>
										@endforeach
										
										
										<!-- /product -->
									</div>
									<div id="slick-nav-12" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-6" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-6">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product08.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product09.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product02.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product03.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-7" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-7">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product04.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product05.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product06.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product08.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product09.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-8" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-8">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product01.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product02.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product03.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product04.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product05.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product06.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">product name goes here</a></h3>
										<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
@endsection