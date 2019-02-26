<?php

namespace App\Http\Controllers;

use App\Produit;
use App\Commande;
use App\Fiche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod_laptop=Produit::where('categorie','laptop')->get()->sortByDesc('created_at');
        $prod_smartphone=Produit::where('categorie','smartphone')->get()->sortByDesc('created_at');
        $prod_camera=Produit::where('categorie','camera')->get()->sortByDesc('created_at');
        $prod_accessoire=Produit::where('categorie','accessoire')->get()->sortByDesc('created_at');
        //les laptop le plus commander
        $laptop_plus_commander = DB::table('produits')->select(DB::raw('produits.id,produits.marque,produits.categorie,produits.img1,produits.prix'))->join('commandes','produits.id','=','commandes.produit_id')->where('produits.categorie','laptop')->groupBy('produits.id')->orderBy(DB::raw('SUM(commandes.quantite)'),'desc')->get();
        //les smartphone le plus commander
        $smartphone_plus_commander = DB::table('produits')->select(DB::raw('produits.id,produits.marque,produits.categorie,produits.img1,produits.prix'))->join('commandes','produits.id','=','commandes.produit_id')->where('produits.categorie','smartphone')->groupBy('produits.id')->orderBy(DB::raw('SUM(commandes.quantite)'),'desc')->get();
        //les camera le plus commander
        $camera_plus_commander = DB::table('produits')->select(DB::raw('produits.id,produits.marque,produits.categorie,produits.img1,produits.prix'))->join('commandes','produits.id','=','commandes.produit_id')->where('produits.categorie','camera')->groupBy('produits.id')->orderBy(DB::raw('SUM(commandes.quantite)'),'desc')->get();
        //les accessoires le plus commander
        $accessoire_plus_commander = DB::table('produits')->select(DB::raw('produits.id,produits.marque,produits.categorie,produits.img1,produits.prix'))->join('commandes','produits.id','=','commandes.produit_id')->where('produits.categorie','accessoire')->groupBy('produits.id')->orderBy(DB::raw('SUM(commandes.quantite)'),'desc')->get();
      

         return view('produits.acceuill',compact(['prod_laptop','prod_smartphone','prod_camera','prod_accessoire','laptop_plus_commander','smartphone_plus_commander','camera_plus_commander','accessoire_plus_commander']));


        //**************************** Fin***********************************
         // $prod_plus_commander=Commande::with('produit')->get()->groupBy('produit_id')->sortByDesc->sum('quantite')->toArray();
        //return dd($prod_plus_commander['num_com']);
        //$prod_plus_commander = $prod_plus_commander->distinct();
       /* $query = Produit::whereHas('commande',function($query) {
             //$query->raw('SUM(commandes.quantite) as tx')->orderBy('tx');
            return $qte = $query->raw('SUM(commandes.quantite) as ssm');
        })->orderBy('qte')->get();*/
        //return dd($rer);
        /*$var = Commande::with('produit')->get();
        return dd($var);
        foreach($prod_plus_commander as $key=>$value) {
           $str.=$key." ";
        }*/
        //$prod_plus_commander=Commande::get()->groupBy('produit_id')->sortByDesc->sum('quantite');
        //return dd($prod_plus_commander);
        //return dd($prod_plus_commander);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
     public function categorie()
    {
        $produits=Produit::orderBy('created_at','desc')->paginate(9);
        
        
      return view('produits.store',compact('produits'));
    }   


    // public function cat($categorie,$model,$pris)
    // {

                


    //     $produits=Produit::orderBy('created_at','desc')->paginate(9);
        
        
    //   return view('produits.store',compact('produits'));
    // }
    public function search(request $req)
    {   $cat=$req->cat;
        $text=$req->text;
        $produits=null;
        if($req->text==null){
             $produits=null;
        }
        elseif($req->cat=="all"){
         $produits=Produit::where('marque','like','%'.$req->text.'%')->get();
        }
        else{
         $produits=Produit::where(['categorie'=>$req->cat,['marque','like','%'.$req->text.'%']])->get();
       }
        
        return view('produits.search',compact(['produits','cat','text']));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $prod=Produit::find($id);
     $prods=Produit::where('categorie',$prod->categorie)->get()->diff([$prod]);
    /* $fich=Fiche::where('produit_id',$id)->get();
     if(isset($fich[0])){
        $fich=$fich[0];
     }
     else{
        $fich=null;
     }
     return dd($prods);*/
     return view('produits.show',compact(['prod','prods']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        //
    }
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
    
    }

    public function rech($req){
      $result ='';
      $Produits = Produit::where('marque', 'like', '%'.$req.'%')->get();
        if(count($Produits)>0){
        
            foreach ($Produits as $p) {
           $result.='<li><a href="http://localhost:82/Vente_Achat/public/produits/'.$p->id.'">


                        <img src="http://localhost:82/Vente_Achat/public/img/'.$p->img1.'" style="width:50px">'.$p->model.'<i class="fa fa-angle-right"></i>'.$p->marque.'




             </a></li>';
            }


        
    }
    return $result;
     
    }
}