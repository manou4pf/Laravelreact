<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function register(Request $request)
     {
         // Validez les données d'inscription
         $request->validate([
             'name' => 'required|string',
             'email' => 'required|email|unique:users',
             'password' => 'required|string|min:6',
         ]);
 
         // Créez un nouvel utilisateur
         User::create([
             'name' => $request->name,
             'email' => $request->email,
             'password' => bcrypt($request->password),
         ]);
 
         // Connectez l'utilisateur après l'inscription
         Auth::attempt($request->only('email', 'password'));
 
         // Redirigez l'utilisateur vers le tableau de bord ou la page de profil
         
     }
 


    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }
}
