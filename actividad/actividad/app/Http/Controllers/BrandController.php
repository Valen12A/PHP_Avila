<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;

class BrandController extends Controller
{
    public function store(Request $request){
        $request ->validate([
            'name'=> 'required|string|min:4|max:50'
        ]);

        brand::create([
            'name'=>$request->name
        ]);
        return redirect()->back()->with('succes', 'Marca creada correctamente');
    }
    public function create(){
        return view('brand.create');
    }
}


