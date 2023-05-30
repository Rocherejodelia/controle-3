<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function produit()
    {
        return view('produit');
    }
    public function enregistre_produit(Request $request)
    {

        $request->validate([
            'title' => 'required|min:4'
        ]);
        $product = new produit();
        $product->title = $request->title;
        $product->save();

        // flashy()->success("votre gamme de produit a été créée avec succès");
        return redirect()->route('produit');
    }

    public function liste_produit()
    {
        $produits = produit::all();
        return view('liste_produit', compact('produits'));
    }


    public function mod_produit($id)
    {
        $product = produit::findOrFail($id);
        return view('mod_produit', compact('produit'));
    }
    public function update_produit(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|min:3'
        ]);

        $produit = Produit::findOrFail($id);

        $produit->title = $request->title;
        $produit->save();

        // flashy()->success("votre gamme de produit a été modifié avec succès");
        return redirect()->route('liste_produit');
    }

    public function delete_produit($id)
    {
        produit::destroy($id);
      
        // flashy()->success("La gamme a été supprimée avec succès");
        return redirect()->route('liste_produit');
    }
}
