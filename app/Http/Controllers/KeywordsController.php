<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeywordsController extends Controller
{
    public function categories(){
        return view('frontend.keywords');
    }

    public function showCategories(){
        $categories = DB::table('categories')->get();

        return view('frontend.keywords', ['categories' => $categories]);
        //return ['categories' => $categories];
    }

    function insertKeywords(Request $request){
        $request->validate([
            'categorie' => 'required||string|max:255',
            'keyword' => 'required'
        ]);

        $query = DB::table('keywords')->insert([
            'categorie'=>$request->input('categorie'),
            'keyword'=>$request->input('keyword'),
        ]);

        if ($query){
            return back()->with('success', 'Categories bien enregistres');
        }
        else{
            return back()->with('fail', 'Categories non enregistres');
        }
    }
}
