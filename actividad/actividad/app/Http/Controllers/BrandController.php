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
    public function edit(brand $brand)
    {
        return view('brand.edit', compact ('brand'));
    }
    public function update (Request $request, Brand $brand)
    {
        $brand-> update($request->all());
        return redict ()->route('brand.store');
    }
    public function show (Brand $brand)
    {
        return view('brand.show', compact('brand'));
    }
    public function destroy(Resquest $request, Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brand.strore');
}
}


