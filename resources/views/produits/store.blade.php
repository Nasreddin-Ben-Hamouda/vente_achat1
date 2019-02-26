@extends('layouts.myapp')
@section('content')

<style type="text/css">
	

	.pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover {

					background-color: #d10024;

						border-color: #d10024;

			},
			.pagination > li > a:focus, .pagination > li > a:hover, .pagination > li > span:focus, .pagination > li > span:hover {

    z-index: 2;
    color: #d10024;
    background-color: #eee;
    border-color: #ddd;

}

</style>

<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li><a href="#">All Categories</a></li>
							
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
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">

								<div class="input-checkbox">
									<input type="checkbox" class="laptop"  id="category-1">
									<label for="category-1">
										<span></span>
										Laptops
										<small>(120)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" class="smartphone"  id="category-2">
									<label for="category-2">
										<span></span>
										Smartphones
										<small>(740)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox"  class="camera"  value="" id="category-3">
									<label for="category-3">
										<span></span>
										Cameras
										<small>(1450)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox"  class="accessoire" value=""  id="category-4">
									<label for="category-4">
										<span></span>
										Accessories
										<small>(578)</small>
									</label>
								</div>

								
							</div>
						</div>
						
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Price</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Brand</h3>
							<div class="checkbox-filter">
								<div class="input-checkbox">
									<input type="checkbox" class="samsung" id="brand-1">
									<label for="brand-1">
										<span></span>
										SAMSUNG
										<small>(578)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-2">
									<label for="brand-2">
										<span></span>
										LG
										<small>(125)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-3">
									<label for="brand-3">
										<span></span>
										SONY
										<small>(755)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox"  class="samsung" id="brand-4">
									<label for="brand-4">
										<span></span>
										ASUS
										<small>(578)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" class="LG" id="brand-5">
									<label for="brand-5">
										<span></span>
										HP
										<small>(125)</small>
									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" class="Sony" id="brand-6">
									<label for="brand-6">
										<span></span>
										Lenovo
										<small>(755)</small>
									</label>
								</div>
								
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<!-- <div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div> -->
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							
					           @foreach($produits as $pds)
					<!-- product -->
					           {!! Form::open(['method'=>'GET','action'=>                 ['commandesController@Save_cmd__page_categorie']])!!}
							<div class="col-md-4 col-xs-6 {{$pds->categorie}} {{$pds->model}}"">
								<div class="product">
									<a  href="{{url('produits',['id'=>$pds->id])}}">
									<div class="product-img">
										<img src="{{asset('./img/'.$pds->img1.'')}}" alt="">
										
									</div>
								</a>
									<div class="product-body">
										<p class="product-category">{{$pds->categorie}}</p>
										<h3 class="product-name"><a href="#">{{$pds->marque}}</a></h3>
										<h4 class="product-price">{{$pds->prix}} TND</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<a  href="{{url('produits',['id'=>$pds->id])}}">
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</a>
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
					
						
							<!-- /product -->
                     
							
						</div>
				

                   {{$produits->links()}}

						<!-- /store products -->

						<!-- store bottom filter -->
				<!-- 		<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div> -->
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

$(function(){
$('#aside').change(function(){
	var count
if (  count = $('#aside input:checked').length <=0) {
	cl =		$(this).attr("class");
     	

     			$("."+cl).fadeIn();
     		
     			$("input[type='checkbox']").each(
          function() {
          	cl =		$(this).attr("class");
     	
     			$("."+cl).fadeIn();
     		})


}




		$("input[type='checkbox']").each(
          function() {


     		if (!$(this).is(':checked')) {


     			cl =		$(this).attr("class");
     	
     			$("."+cl).fadeOut();
     			var isSelected = [];






     		} else if($(this).is(':checked')) {
     			cl =		$(this).attr("class");
     	
     			$("."+cl).fadeIn();
     			isSelected++;

     		}else if(selected.length) {
					$(this).attr("class");
					alert(isSelected);
     		}
          });          
   

});
});


</script>

@endsection
