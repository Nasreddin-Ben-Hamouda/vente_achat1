@extends('layouts.myapp')
@section('content')
<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li>Home</li>
							<li>All Produits</li>
							<li>Show Produit</li>
							
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="{{asset('img/'.$prod->img1.'')}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('img/'.$prod->img2.'')}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('img/'.$prod->img3.'')}}" alt="">
							</div>
                            <div class="product-preview">
								<img src="{{asset('img/'.$prod->img3.'')}}" alt="">
							</div>
							
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="{{asset('img/'.$prod->img1.'')}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('img/'.$prod->img2.'')}}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{asset('img/'.$prod->img3.'')}}" alt="">
							</div>
                            <div class="product-preview">
								<img src="{{asset('img/'.$prod->img3.'')}}" alt="">
							</div>
							
							
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					{!! Form::open(['method'=>'GET','action'=> ['commandesController@Save_cmd__page_show']])!!}
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">{{$prod->marque}}</h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div>
							<div>
								<h3 class="product-price">{{$prod->prix}} TND</h3>
								<span class="product-available">{{$prod->quantite}} Produits In Stock</span>
							</div>
							<p>{{$prod->description}}</p>

							<div class="product-options">
								
							</div>

							<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">
										
										{{ Form::number('quantite','1')}}
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<button type="Submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>

							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
							</ul>

							<ul class="product-links">
								<li>Category:</li>
								<li><a href="">{{$prod->categorie}}</a></li>
								
							</ul>

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					
					<!-- /Product details -->
			
                   {{ Form::hidden('id',$prod->id)}}
                   {!! Form::close()!!}
					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
								
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p>{{$prod->description}}</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											@if($prod->fiche !=null)
					   		<table class="table" style="background:#fff;border-radius:4px;border:1px solid #ddd" >
					    		<tbody>
					    		
						        <tr><th>Design</th><td>{{$prod->fiche->design}}</td></tr>
						        <tr><th>Dimensions</th><td>{{$prod->fiche->dimension}}</td></tr>
						        <tr><th>Poids</th><td>{{$prod->fiche->poid}}</td></tr>
						        <tr><th>Processeur</th><td>{{$prod->fiche->processeur}}</td></tr>
						        <tr><th>Système d'exploitation (OS)</th><td>{{$prod->fiche->system}}</td></tr>
						        <tr><th>Resolusion</th><td>{{$prod->fiche->resolution}}</td></tr>
						        <tr><th>Appareil photo</th><td>{{$prod->fiche->appareil_photo}}</td></tr>
						        <tr><th>Mémoire interne</th><td>{{$prod->fiche->memoire}}</td></tr>
						        <tr><th>Carte Graphique</th><td>{{$prod->fiche->carte_graphique}}</td></tr>
						        <tr><th>Date sortie</th><td>{{$prod->fiche->date_sortie}}</td></tr>
                                

						        
						        
						        <tbody>
					    	</table>
					    	@else
					    	<p> Ce produit n'pas une fiche </p>
					    	@endif
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>
                    @if(count($prods)>0)
					@foreach($prods as $pds)
					<!-- product -->
					{!! Form::open(['method'=>'GET','action'=> ['commandesController@Save_cmd__page_show']])!!}
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<a  href="{{url('produits',['id'=>$pds->id])}}">
							<div class="product-img">
								<img src="{{asset('./img/'.$pds->img1.'')}}" alt="">
								
							</div>
						    </a>
							<div class="product-body">
								<p class="product-category">{{$pds->categorie}}</p>
								<h3 class="product-name"><a  href="{{url('produits',['id'=>$pds->id])}}">{{$pds->marque}}</a></h3>
								<h4 class="product-price">{{$pds->prix}} TND</h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
									<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button type="Submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
					</div>
					 {{ Form::hidden('quantite','1')}}
					 {{ Form::hidden('id',$pds->id)}}
                     {!! Form::close()!!}
					@endforeach
					@else
					<p> No Related Products </p>
					@endif
					<!-- /product -->
                      
					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

@endsection