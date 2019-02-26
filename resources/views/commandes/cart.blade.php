<?php /*@if($commandes==null)
<?php echo 'videee'; ?>
@else
  @if(count($commandes)>0)
   @foreach($commandes as $com)
  {{$com->produit->marque}}
  @endforeach
  @else
  <?php echo 'fer4a'; ?>

@endif
@endif
<div class="col-sm-12 alertmsg"><p>Votre panier est vide<p></div>
*/?>
@extends('layouts.myapp')

@section('content')
<style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
/* Global */
@font-face{
    font-family: "Poppins-Regular";
    src:url(Poppins-Regular.ttf) format("truetype");
  }

.carousel-control.left,
.carousel-control.right {
  opacity: 0;
  filter: alpha(opacity=100);
  background-image: none;
  background-repeat: no-repeat;
  text-shadow: none;
}
#carousel-example-generic:hover .left,
#carousel-example-generic:hover .right{
  opacity: 1
}
.carousel-control .fa{
  top: 45%;
  opacity: 0.7;
  position: absolute;
  color: #000;
  border: 2px solid #000;
  padding: 8px 15px;
  border-radius: 50%;
  left:32%;
}

.carousel-control .fa:hover{
  color: #fff;
  background: #000

}





/* Carousel Header Styles */





.thumbnails li> .fff .caption {
    background:#fff !important;
    padding:10px
}

/* Page Header */
.page-header {
    background: #f9f9f9;
    margin: -30px -40px 40px;
    padding: 20px 40px;
    border-top: 4px solid #ccc;
    color: #999;
    text-transform: uppercase;
}

.page-header h3 {
    line-height: 0.88rem;
    color: #000;
}

ul.thumbnails {
    margin-bottom: 0px;
}



/* Thumbnail Box */
.caption h4 {
    color: #444;
}

.caption p {
    color: #999;
}



/* Carousel Control */
.control-box {
    text-align: right;
    width: 100%;
    margin-top: -50px
}
.pager img{
  width: 14px;
  opacity: 0.8;
  margin-top:-2px;

}

.thumbnails .col-sm-3{padding-left: 2px;padding-right: 2px}



/* Mobile Only */
@media (max-width: 767px) {
    .page-header, .control-box {
        text-align: center;
    }
}
@media (max-width: 479px) {
    .caption {
        word-break: break-all;
    }
}


li { list-style-type:none;}

::selection { background: #ff5e99; color: #FFFFFF; text-shadow: 0; }
::-moz-selection { background: #ff5e99; color: #FFFFFF; }


  .about-left{
    background-color: #fff
  }
  .about-right{
    background-color: #fff
  }
  .section-categorie{
    background-color: #fff;
    position: relative;
    height: auto;
  }
  .title_block{
    color: #333;
font: 400 16px/18px "Poppins", sans-serif;
padding: 10px;
position: relative;

width: 100%;
letter-spacing: 1px;
margin: 0;
border: none;
  }
.section-categorie .tt_sf-menu > li{
  padding: 0 16px;
  width: 100%
}

.col-md-2{
  padding: 0
}
.col-md-2 >.col-sm-8,.col-sm-4,.col-sm-7,.col-sm-5{
  padding: 0
}

.col-md-2 .col-sm-10{

  border-bottom: 1px solid  rgba(0,0,0,0.05);
  padding:10px 0;
  margin-left: 17px;
  letter-spacing: 0.3px

}
.about-right .award{
  border-bottom: 1px solid #fff;

}

.about-right .public-right{
  padding: 5px ;
  border-top: 1px solid rgba(0,0,0,0.08);
  border-bottom: 1px solid rgba(0,0,0,0.08);


}
.about-left .public-left{
  padding: 5px ;
  border-top: 1px solid rgba(0,0,0,0.08);
  border-bottom: 1px solid rgba(0,0,0,0.08);


}
.nou-produit .title_block{
  padding:10px 0 0 0;
   }

.nou-produit img{
  width: 70px;
  height: 70px;
  border: 1px solid #f0f0f0;
  padding: 0px;
  margin-left: -10px
}




.tab-content .col-md-3{
  padding-left: 5px;
  padding-right: 5px
}
.ttcmssubbanners{

  margin: 22px 0;
  padding: 0
}

.ttcmssubbanners img{
  background-color: #fff;
  padding: 10px;
  width: 100%
}
.infor-right p{
       color: #888;
    font: 500 11px/20px "Poppins", Helvetica, sans-serif;
    margin: 0px 0 3px;
    padding-top: 10px ;
    width: 200px

}
.infor-right ul li p{
       color: #888;
    font: 500 11px/20px "Poppins", Helvetica, sans-serif;
    margin: 0px 0 3px;
    padding-top: 0px ;
    width: 250px


}
.infor-bottom{
  padding: 10px


}
.infor-bottom ul{
  margin-left: 18%;

}

.infor-bottom ul li a{
  float: left;
      color: #888888;
    font: 400 12px/24px "Poppins", Helvetica, sans-serif;
    text-decoration: none;

}
.infor-bottom ul li a:hover{

      color:#f12a43;


}
#extras{
  border-top: 0px solid rgba(0,0,0,0.07)

}
.ttarticl{
  border-bottom: 1px solid rgba(0,0,0,0.07);
  border-top: 1px solid rgba(0,0,0,0.07)
}
.ttarticl a h3{
  font-size: 12.3px;
  float: right;
  color: #222;
  padding: 0 9px 0 0;
  margin-top: 2px
}
.ttarticl a:hover h3{

  color: #222;
  text-decoration: underline;

}
.ttarticl a{

}
.ttarticl h4{margin-left: -10px}
.ttarticl img{

  width: 100%;
  height: 100%;
  padding: 8px 5px
}
#marq img{opacity: 0.7}
#marq img:hover{opacity: 1}

/*    index.html     */
.about {
    margin-top: -30px;
}
.tthead{
  height: 0px
}


.tthead .heade-right span{
  padding: 5px;

}
.tthead .heade-right p{
  display: inline-block;
  color: #555;
  font-size: 12px;
  letter-spacing: 0px;
  opacity: 1

}
.page-heading {
    font: 400 15px/20px "Poppins", sans-serif;
    color: #444;
    letter-spacing: 0px;
    margin: 0 0 10px;
    padding: 0;
}
.page-heading .right-hading{
  font-size: 11px;
  float: right;
  letter-spacing: 0
}
.page-heading > strong{
    font-size: 35px;
    padding-right: 10px;
    font-weight: bold;
    font-style: italic;
}
.title-form{
    font: 400 15px/20px "Poppins", sans-serif;
    color: #444;
    letter-spacing: 1px;
    margin-bottom: 12px;
    padding: 8px 0;
}

.form-compte{
  background-color: #fff;
}
.form-compte .list-compte li{
  margin: 15px 5px;
  border: 1px solid #ccc
}
.form-compte .list-compte li a{

  display: block;
  color: #888;
   font:200 12px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
   text-decoration: none;
}
.form-compte .list-compte li:hover{

  border: 1px solid #777;

}

.form-compte .list-compte li a i{
  border-right: 1px solid #ccc;
  display: inline-block;
  height: 100%;
  padding: 15px 17px;
  margin-right: 15px
}
.form-compte .list-compte li:hover  a {

  color: #555
}

.form-compte .list-compte li:hover  a i {
  border-right: 1px solid #777;

}





.about-center .pg-modifl{
  color: #aaa;
    font:200 11px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
}
.table-bordered{
  border: 1px solid #eee;
  background: #fff
}
.table-bordered > thead > tr > td {
  background: #fff;
  border: 1px solid #e5e5e5;
  font:200 11px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;

}

.table-bordered > tbody > tr > td {

  font:200 11px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
    color: #999;
  border:  1px solid #e5e5e5;
  line-height: 55px;

}
.table-bordered > tbody > tr > td  span {
    display: inline-block;
    margin-top: 12px;
    padding: 4px
}
.table-bordered > tbody > tr > td > .prix {
    float: right;
    line-height: 54px;
    color: #f12a43;
    font-size: 12.5px

}
.table-bordered > tfoot > tr > td > .prix {
    float: right;
    color: #f12a43;
    font-size: 12.5px;
    margin-bottom: -10px

}

.table-bordered > tfoot > tr > td > .prix {
    float: right;
    color: #f12a43;
    font-size: 14px;
    margin-bottom: -10px

}

.table-bordered > tbody > tr > td > h2 {

  font:200 12px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
 color: #999;
 margin: 2px 0 0

}
.table-bordered > tbody > tr > td > p {

  font:200 10px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
 color: #999;
 margin:0

}

.table-bordered > tbody > tr > td > .btnplus {
   background: transparent;
   border: 1px solid #ddd;
   outline: none;
   width: 20px;
   height: 20px;
   border-radius: 4px;
   margin: 0 0 -20px 2px;
   display: inline-block;
   line-height: 0
}
.table-bordered > tbody > tr > td > input {
   background: transparent;
   border: 1px solid #ddd;
   text-align: center;
   width: 50px;
   border-radius: 4px;
   height: 30px;
   margin-bottom: -10px;
   display: block;

   outline: none;
}
.table-bordered > tbody > tr > td > button {
   background: transparent;
   border: none;
   outline: none;
}
.table-bordered > tfoot > tr > td {
   font:200 11px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
    color: #555;
  border:  1px solid #e5e5e5;
  text-align: right;
}
.table-bordered > tfoot > tr > td > strong {
   font:200 14px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;

}
.alert-danger p{

    color: white;
    }
    .alert-danger{
  background-color: #D10024;
}
.btn-panier {
    border-radius: 4px;
    background: #333333;
    font: 200 11px/18px Poppins-Regular,Helvetica,sans-serif;
    padding: 7px 16px;
    color: white;
    margin: 10px 0 36px 0px;
    display: block;
    width: 155px;
    }
    .btn-panier:hover {
    text-decoration: none;
    color: #fff;
    background: #f12a43
    }

.form-insc {
    background-color: #fff;
    border: 1px solid rgba(0,0,0,0.09);
    margin-bottom: 30px
}
.form-insc > p{
 font: 200 11px/18px Poppins-Regular,Helvetica,sans-serif;
 color: #777
}
.title-form {
    font: 400 13px/20px "Poppins", sans-serif;
    color: #444;
    letter-spacing: 0px;
    margin-bottom: 12px;
    padding: 8px 0;
}
.btn-met{

    margin: 10px 0;
    font: 400 11px/18px "Poppins", Helvetica, sans-serif;
    letter-spacing: 0.7px;
    color: white;
    border: none;
    width: 120px;
    text-align: center;
    background: #f12a43;
    padding: 6px 12px;
    border-radius: 4px;
    display: block;

}
.btn-met:hover{
  background: #333333;
  color: #fff;
  text-decoration: none;
}
.choix_paiment li{
  background: #fff;
  border: 1px solid #ddd;
  margin: 10px 0
}
.choix_paiment li a{
  color: #777;
  padding: 12px;
  display: block;
   font: 500 13px/18px Poppins-Regular,Helvetica,sans-serif;
}
.choix_paiment li a:hover{
  color: #f12a43;
  text-decoration: none;

}
.choix_paiment li a .fa-angle-right{
  float: right;
}
.choix_paiment li a .fa{
 padding-right: 10px;
 font-size: 15px
}
  </style>

<!-- container -->
			<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li>Home</li>
							<li>Cart</li>
							
							
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>


<div class="section">
 <div class="container">
      
             
      @if($commandes==null)
        <div class="alert alert-danger"  role="alert"><p>
        <p>Votre panier est vide !!!<p></div>
      @else   
       @if(count($commandes)>0)
      


      
       
        <h1 class="page-heading"> Récapitulatif de la commande

                 <p class="right-hading">Votre panier contient  produits </p>
       </h1>
      
     


                    
        
       
          
          <table class="table table-bordered">
                     <thead>
                       <tr>
                        <td>Produit</td>
                        <td>Description</td>
                        <td>Disponibilité</td>
                        <td>Prix unitaire</td>
                        <td>Quantité</td>
                        <td></td>
                        <td>Total</td>
                       </tr>
                     </thead>
                     <?php  $prixtot=null; ?>
                     @foreach($commandes as $com)
                        <?php 
                       $prix= $com->produit->prix * $com->quantite;
                       $prixtot+=$prix; 
                        ?>
                     {!! Form::open(['method'=>'PUT','action'=> ['commandesController@update',$com->id]])!!}
                     <tbody>
                  
                       
                  
                    <tr>
                      <td><img src="{{asset('img/'.$com->produit->img1.'')}}" style="width:50px"></td>
                        <td>
                        <h2>{{$com->produit->marque}}</h2>
                        <p> Catégorie: {{$com->produit->categorie}}</p>
                        <p>Référance: {{$com->produit->reference}} </p>
                        
                        </td>
                      <td>
                         <p class="quantitystock">
                         <span class="quantityins">In stock</span>
                         </p>
                      </td>
                      <td><p class="prix">{{$com->produit->prix}} TND</p></td>
                      <td>
                          <input type="text" value="{{$com->quantite }}">
                         
                          <button type="sumbit" name="mqte" class="btnplus" value="">-</button>
                           
                          <button type="sumbit" name="pqte" class="btnplus" value="" >+</button>
                      </td>
                      <td><button type="submit" name="delete_list" value=""><i class="fa fa-trash-o"></i></button></td>
                      <td><p class="prix">{{$prix}} TND</p></td>
                     </tr>
                      
                      </tbody>
                        {!! Form::close()!!}
                      @endforeach
                      <tfoot>
                          <tr>
                            <td colspan="3"rowspan="3" ></td>
                            <td colspan="3">Total Produits</td>
                            <td><p class="prix">{{$prixtot}} TND</p></td>
                          </tr>
                           <tr>
                           <td  colspan="3">Frais de port</td>
                            <td><p class="prix">7 TND</p></td>

                          </tr>
                           <tr>
                           <td colspan="3"><strong>Total</strong></td>
                            <td><p class="prix"><strong>{{$prixtot + 7}} TND</strong></p></td>

                          </tr>
                         </tfoot>
                    
             </table>
         
      <a href="{{url('produits')}}">   
      <button  class="primary-btn order-submit">
         Continuer Vos Achats
      </button>
      </a>
      <a href="{{url('/commandes/checkout/confirm')}}">   
      <button  class="primary-btn order-submit " style="margin-left: 653px;width: 240px">
         Checkout
      </button>
      </a>
      @else
      <div class="alert alert-danger"  role="alert"><p>
        <p>Votre panier est vide !!!<p></div>
      @endif         
   @endif
          


 </div> 
   
     </div>


@endsection