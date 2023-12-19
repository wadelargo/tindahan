<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sale = Sale::orderBy('id')->get();

        return view('sale.index', ['sales' => $sale]);
    }
//
    public function create() {

        $products = Product::list();
        return view('sale.create', ['products' => $products]);
    }

    public function store(Request $request) {

        $request->validate([
            'product_id' => 'required|numeric',
            'salesmonth' => 'required',
            'salesquantity' => 'required',
        ]);

        Sale::create([
            'product_id' => $request->product_id,
            'salesmonth' => $request->salesmonth,
            'salesquantity' => $request->salesquantity,
        ]);

        return redirect('/sales')->with('message', 'A new sales has been added');
    }


    public function edit(Sale $sale) {

        return view('sale.edit',compact('sale'));
    }

    public function update(Sale $sale, Request $request) {

        $request->validate([
            'salesmonth' => 'required',
            'salesquantity' => 'required',
        ]);

        $sale->update($request->all());
        return redirect('/sales')->with('message', " $sale->salesmonth has been updated successfully");
    }

    public function delete(Sale $sale)
    {
        $sale->delete();

        return redirect('/sales')->with('message', " $sale->salesmonth has been deleted successfully");
    }


}
