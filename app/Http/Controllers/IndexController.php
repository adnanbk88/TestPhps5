<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $produits=Produit::all();
        return view('index',compact('produits'));
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
            "Image" => "required",               
            
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

    
}
