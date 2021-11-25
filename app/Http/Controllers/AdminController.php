<?php

namespace App\Http\Controllers;

use App\Models\ClientV;
use App\Models\Produit;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function home()
    {
      
        return view('admin.home');
    }
    public function ajouter()
    {
      
        return view('admin.ajouter');
    }
    public function ProduitClient()
    {
      $clients = ClientV::all();
        return view('admin.ProduitClient' ,compact('clients'));
    }
    public function Produit()
    {
      $produits = Produit::all();
        return view('admin.Produit' ,compact('produits'));
    }
        public function store(Request $request)
        {
            $request->validate([
                "Model" => "required",
                "Etat" => "required",
                "Taille" => "required",
                "Prix" => "required",
                "description" => "required",               
                
            ]);
            $produits = new Produit();
            
            $produits->Model = $request->Model;
            $produits->Taille = $request->Taille;
            $produits->Etat = $request->Etat;
            $produits->description = $request->description;
            $produits->Prix = $request->Prix;
            if ($request->hasFile('Image')) {
                //Get Just Ext
                $extention = $request->file('Image')->getClientOriginalExtension();
                //FileName To Store
                $fileNameToStore = "item_" . time() . '.' . $extention;
                //Upload Image
                $path = $request->file('Image')->storeAs('public/uploads', $fileNameToStore);
                $produits->image = $fileNameToStore;
            }
           
            $produits->save();
            return redirect('/admin/Produit');
        }
        public function delete($id)
        {
            $produits = Produit::find($id);
            $produits->delete();
            return redirect()->back();
        }
    }
