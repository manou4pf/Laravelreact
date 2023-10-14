<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'visible' => 'required',

           


            
        ]);
        $user=auth::user()->id;
            Article::create([
                'titre' => $validatedData['titre'],
                'contenu' => $validatedData['contenu'], 
                'user_id' => $user,
                
            ]);
        
             return redirect()->route('dashbord.culture')->with('succes','bien sauvegarder');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
