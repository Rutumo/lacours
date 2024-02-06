<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function categories(){
        return view('frontend.categories');
    }

    function add(Request $request){
        $request->validate([
           'categorie' => 'required||string|max:255',
           'description' => 'required'
        ]);

        $query = DB::table('categories')->insert([
            'categorie'=>$request->input('categorie'),
            'description'=>$request->input('description'),
        ]);

        if ($query){
            return back()->with('success', 'Categories bien enregistres');
        }
        else{
            return back()->with('fail', 'Categories non enregistres');
        }
    }
}
