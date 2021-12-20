<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\Produit;
use App\Models\Commande;
use App\Mail\ContactMail;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $produits=Produit::all();
        return view('index',compact('produits'));
    }
    public function merci()
    {

        $commande = session("commande");
        return view('merci',compact("commande"));
    }
    public function telechargerFacture(Request $request)
    {

        $commande = Commande::find($request->id);
        $pdf = PDF::loadView('facture',compact(('commande')));
        return $pdf->download('facture.pdf');
    }
    public function single($id)
    {
        $produits=Produit::find($id);
        return view('single',['produit'=>$produits]);
    }
    public function edite($id)
    {
        $produit = Produit::find($id);
        return view('admin.edite', compact('produit'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            "Model" => "required",
            "Etat" => "required",
            "Taille" => "required",
            "Prix" => "required",
            "description" => "required",               
            
        ]);
        $produits = Produit::find($id);
        
        $produits->Model = $request->Model;
        $produits->Taille = $request->Taille;
        $produits->Etat = $request->Etat;
        $produits->description = $request->description;
        $produits->Prix = $request->Prix;
        if($request->Image){

            if ($request->hasFile('Image')) {
                //Get Just Ext
                $extention = $request->file('Image')->getClientOriginalExtension();
                //FileName To Store
                $fileNameToStore = "item_" . time() . '.' . $extention;
                //Upload Image
                $path = $request->file('Image')->storeAs('public/uploads', $fileNameToStore);
                $produits->image = $fileNameToStore;
            }
        }

        
        $produits->save();
        return redirect('/admin/Produit');
    }


    public function store(Request $request)
    {
       
 
        $request->validate([
            "prenomclient" => "required",
            "nomclient" => "required",
            "emailclient" => "required",
            "telephoneclient" => "required",
            "villeclient" => "required",
            "adresseclient" => "required",
            
          
            
        ]);
        $commande = new Commande();
        $commande->prenomclient = $request->prenomclient;
        $commande->nomclient = $request->nomclient;
        $commande->emailclient = $request->emailclient;
        $commande->telephoneclient = $request->telephoneclient;
        $commande->villeclient = $request->villeclient;
        $commande->adresseclient = $request->adresseclient;
        $commande->produit_id = $request->produit_id;
     
      
       
        $commande->save();
        $details = [
            'prenomclient' => $request->prenomclient,
            'nomclient' => $request->nomclient,
            'telephoneclient'=> $request->telephoneclient,
            'villeclient' => $request->villeclient,
            'adresseclient' => $request->emailclient,
            'emailclient' => $request->emailclient,
        ];

     Mail::to(''.$request->emailclient.'')->send(new ContactMail($details));
     
        return redirect('/merci')->with("commande",$commande);
    }
    
}
