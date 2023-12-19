<?php

namespace App\Http\Controllers;

use App\Models\Saler;
use Illuminate\Http\Request;

class SalerController extends Controller
{
    public function index()
    {
        $saler = Saler::orderBy('id')->get();

        return view('saler.index', ['salers' => $saler]);
    }

    public function create() {
        return view('saler.create');
    }

    public function store(Request $request) {

        $request->validate([
            'fullname' => 'required',
            'address' => 'required',
            'sex'=> 'required'
        ]);

        Saler::create([
            'fullname' => $request->fullname,
            'address' => $request->address,
            'sex' => $request->sex
        ]);

        return redirect('/salers')->with('message', 'A new saler has been added');

    }
//
    public function edit(Saler $saler) {

        return view('saler.edit',compact('saler'));
    }

    public function update(Saler $saler, Request $request) {

        $request->validate([
            'fullname' => 'required',
            'address' => 'required',
            'sex'=> 'required',
        ]);

        $saler->update($request->all());
        return redirect('/salers')->with('message', " $saler->fullname has been updated successfully");
    }

    public function delete(Saler $saler)
    {
        $saler->delete();

        return redirect('/salers')->with('message', " $saler->fullname has been deleted successfully");
    }

}
