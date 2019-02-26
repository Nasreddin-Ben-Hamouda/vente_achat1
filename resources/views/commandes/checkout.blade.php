@extends('layouts.myapp')
@section('content')
<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Billing address</h3>
							</div>
							{!! Form::open(['method'=>'PUT','action'=> ['commandesController@change_info',$user->id]])!!}
							{{ csrf_field() }}

							<div class="form-group">
								<label for="nom" class="col-md-2 control-label">First Name</label>
								 <div class="col-md-10">
								<input class="input" type="text" name="first-name" value="{{$user->nom }}" disabled=""><br><br>
							</div>
							</div>
							<div class="form-group">
								<label for="prenom" class="col-md-2 control-label">Last Name</label>
								<div class="col-md-10">
								<input class="input" type="text" name="last-name" value="{{$user->prenom}}" disabled><br><br>
							</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-md-2 control-label">Email</label>
								<div class="col-md-10">

								<input class="input" type="email" name="email" value="{{$user->email}}" disabled><br><br>
							</div>
							</div>
							<div class="form-group">
								<label for="adresse" class="col-md-2 control-label">Address</label>
								<div class="col-md-10">
								<input class="input" type="text" name="address" value="{{$user->adresse}}"><br><br>
							</div>
							</div>
							<div class="form-group">
								<label for="city" class="col-md-2 control-label">City</label>
								<div class="col-md-10">
								<input class="input" type="text" name="city" value="{{$user->ville}}"><br><br>
							</div>
							</div>
							<div class="form-group">
								<label for="country" class="col-md-2 control-label">Country</label>
								<div class="col-md-10">
								<input class="input" type="text" name="country" value="{{$user->region}}">
								<br><br>
							</div>
							</div>
							<div class="form-group">
								<label for="code" class="col-md-2 control-label">ZIP Code</label>
								<div class="col-md-10">
								<input class="input" type="text" name="code" value="{{$user->code_postal}}">
								<br><br>
							</div>
							</div>
							<div class="form-group">
								<label for="code" class="col-md-2 control-label">Telephone</label>
								<div class="col-md-10">
								<input class="input" type="tel" name="tel" value="{{$user->num_tel}}" ><br><br>
								
							</div>
							</div>
							<div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                            	
                            	
                                <button type="submit" class="primary-btn order-submit" style="width: 515px;">
                                    Update
                                </button>
                                
                            </div>
                        </div>
							{!! Form::close()!!}
							
						</div>
						
						
					</div>

					<!-- Order Details -->
					{!! Form::open(['method'=>'PUT','action'=> ['commandesController@confirmation',$user->id]])!!}
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>

							<div class="order-products">
							   <?php  $prixtot=null; ?>
								@if(count($commandes)>0)

								@foreach($commandes as $com)
								<?php 
                                  $prix= $com->produit->prix * $com->quantite;
                                  $prixtot+=$prix; 
                                ?>           
								<div class="order-col">
									<div>{{$com->quantite}} x {{$com->produit->marque}}</div>
									<div>{{$prix}} TND</div>
								</div>
								@endforeach
								@else
								<div class="order-col">
									<div>0</div>
									<div>0</div>
								</div>
								@endif
							</div>
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>7 TND</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">{{$prixtot+7}} TND</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1" value="Direct Bank Transfer">
								<label for="payment-1">
									<span></span>
									Direct Bank Transfer
								</label>
								<div class="caption">
									<p>A Direct Bank Transfer is a cashout method that allows you to receive your winnings by having them credited directly to your bank account</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2" value="Cheque Payment">
								
								<label for="payment-2">
									<span></span>
									Cheque Payment
								</label>
								<div class="caption">
									<p>In the event of payment by cheque, the order will be delivered to the Client only after receipt of the correctly made out cheque</p>
								</div>
							</div>
							
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						<button  type="submit" class="primary-btn order-submit" style="width: 420px;">Place order</button>
					</div>
					{!! Form::close()!!}
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
@endsection