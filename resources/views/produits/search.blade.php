@extends('layouts.myapp')
@section('content')
<style type="text/css">
.alert-danger p{

    color: white;
    }
    .alert-danger{
  background-color: #D10024;
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
							<li><a href="#">Search</a></li>
							
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
                
            
				<!-- /row -->
                     @if(count($produits)>0)
					@foreach($produits as $pds)
					<!-- product -->
					{!! Form::open(['method'=>'GET','action'=> ['commandesController@Save_cmd__page_search']])!!}
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
					 {{ Form::hidden('categorie',$cat)}}
					 {{ Form::hidden('text',$text)}}
                     {!! Form::close()!!}

					@endforeach
                   

					@else
					<div class="alert alert-danger"  role="alert"><p>No results were found for your search</p></div>
					@endif
                  
				</div>
			</div>

			<!-- /container -->
		</div>
		<!-- /SECTION -->
@endsection