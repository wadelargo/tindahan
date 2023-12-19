<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Saler;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::orderBy('id')->get();

        return view('product.index', ['products' => $product]);
    }

    public function create() {

        $salers = Saler::list();
        return view('product.create', ['salers' => $salers]);
    }
//
    public function store(Request $request) {

        $request->validate([
            'saler_id' => 'required|numeric',
            'itemname' => 'required',
            'brandname' => 'required',
            'itemprice' => 'required',
            'itemstock' => 'required',
        ]);

        Product::create([
            'saler_id' => $request->saler_id,
            'itemname' => $request->itemname,
            'brandname' => $request->brandname,
            'itemprice' => $request->itemprice,
            'itemstock' => $request->itemstock,
        ]);

        return redirect('/products')->with('message', 'A new product has been added');
    }

    public function edit(Product $product, Saler $saler) {

        $salers = Saler::list();
        $product = Product::findOrFail($product->id);
        return view('product.edit', compact('product','salers'));
    }

    public function update(Product $product, Request $request) {

        $request->validate([
            'itemname' => 'required',
            'brandname' => 'required',
            'itemprice' => 'required',
            'itemstock' => 'required',
        ]);

        $product->update($request->all());
        return redirect('/products')->with('message', " $product->itemname has been updated successfully");
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect('/products')->with('message', " $product->itemname has been deleted successfully");
    }
}
