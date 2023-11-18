<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('nom_du_produit', 'like', "%$query%")->get();

        return view('search', compact('products', 'query'));
    }
}
