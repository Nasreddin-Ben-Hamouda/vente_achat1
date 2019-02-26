<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Commande;
use App\User;
use PDF;
use DateTime;

class CommandesController extends Controller
{


       public function __construct(){

         
          $this->middleware('auth')->only('store');



       }
       
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $commandes=null;
    if(Auth::guest()){
        $commandes==null;
    } 
    else{  
    $commandes= Auth::user()->commande->where('confirmation',0);
    //echo $commandes;
    }
    return view('commandes.cart',compact('commandes'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
    public function store(Request $request)
    {

       $commande=new Commande;
       $commande->produit_id=$request->id;
       $commande->user_id=Auth()->user()->id;
       $commande->quantite=$request->quantite;
       $commande->confirmation=0;
       $commande->paiment="";
       $commande->vu_admin=0;

     

       $commande->save();
       //return Redirect(url('produits'));
       return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $commande=Commande::find($id);
        if (isset($_POST['mqte'])) {
             $commande->quantite-=1;
             $commande->save();
          }
         if (isset($_POST['pqte'])) {
             $commande->quantite+=1;
             $commande->save();
          }
        if (isset($_POST['delete_list'])) {
             $commande->DELETE();
          }
      

       return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //SAVE COMMANDE DEPUIS LA PAGE D'ACCEUILLE
      public function Save_cmd__page_accauille(Request $request){

       
       $commande=new Commande;
       $commande->produit_id=$request->id;
       $commande->user_id=Auth()->user()->id;
       $commande->quantite=$request->quantite;
       $commande->confirmation=0;
       $commande->paiment="";
       $commande->vu_admin=0;

     

       $commande->save();
       
        return redirect(url('/produits'));
     }
     //SAVE COMMANDE DEPUIS LA PAGE SHOW
     public function Save_cmd__page_show(Request $request){

       
       $commande=new Commande;
       $commande->produit_id=$request->id;
       $commande->user_id=Auth()->user()->id;
       $commande->quantite=$request->quantite;
       $commande->confirmation=0;
       $commande->paiment="";
       $commande->vu_admin=0;

     

       $commande->save();
       
        return redirect(url('/produits',$request->id));
     }
      //SAVE COMMANDE DEPUIS LA PAGE search
     public function Save_cmd__page_search(Request $request){

       
       $commande=new Commande;
       $commande->produit_id=$request->id;
       $commande->user_id=Auth()->user()->id;
       $commande->quantite=$request->quantite;
       $commande->confirmation=0;
       $commande->paiment="";
       $commande->vu_admin=0;

     

       $commande->save();
       
        return Redirect(url('/produits/search/result?cat='.$request->categorie.'&text='.$request->text.''));
     }
     public function Save_cmd__page_categorie(Request $request){

       
       $commande=new Commande;
       $commande->produit_id=$request->id;
       $commande->user_id=Auth()->user()->id;
       $commande->quantite=$request->quantite;
       $commande->confirmation=0;
       $commande->paiment="";
       $commande->vu_admin=0;

     

       $commande->save();
       
        return redirect(url('/produits/categorie/store'));
     }
     public function checkout(){
       
        $user=Auth::user();
        $commandes= Auth::user()->commande->where('confirmation',0);
        return view('commandes.checkout',compact(['user','commandes']));

     }
     public function invoice(){ 
        
      
        $payment=null;
        $num=null;
       
        $user=Auth::user();
        $commandes= $user->commande->where('confirmation',1)
        ->where('vu_admin',0);
        foreach ($commandes as $com) {
          $payment=$com->paiment;
          $num=$com->id;
        }
       
        return view('commandes.invoice',compact(['user','commandes','payment','num']));

     }
    /* public function update_invoice(User $user){
        
        $commandes= $user->commande->where('confirmation',1)
        ->where('vu_admin',0);
         foreach ($commandes as $com2 ) {
        $com2->vu_admin=1;
        $com2->save();
      }
    }*/

     public function downloadPDF(){

        $payment=null;
        $num=null;
        $user=Auth::user();
        $commandes= $user->commande->where('confirmation',1)
        ->where('vu_admin',0);
        foreach ($commandes as $com) {
          $payment=$com->paiment;
          $num=$com->id;
        }
       $pdf = PDF::loadView('commandes.pdf',compact(['user','commandes','payment','num']));
      return $pdf->download('invoice.pdf');
      
      
      
     }
     
    public function change_info(Request $request, $id){
        
        $user=User::find($id);
        $user->adresse=$request->address;
        $user->ville=$request->city;
        $user->region=$request->country;
        $user->code_postal=$request->code;
        $user->num_tel=$request->tel;
        if($user->save()){
            
        return redirect()->back();

              }
        }
         public function confirmation(Request $request, $id){
          $commandes=Commande::where(['user_id'=>$id,'confirmation'=>0])->get();
          foreach ($commandes as $com) {
              $com->confirmation=1;
              if(isset($_POST['payment'])){
                $com->paiment=$_POST['payment'];
              }
              
              $com->save();
          }
         
          
          return  redirect(url('/commandes/checkout/invoice'));
              

         }

}
