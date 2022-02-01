<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        return view('create-product');
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;

        if ($product->save()) {
            Flashy::success('Projet créé avec succès');
            return redirect()->back();
        }

        Flashy::error('Un problème est survenu');
        return redirect()->back();

    }
}
