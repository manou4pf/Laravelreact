<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Cookie;

class AuthController extends Controller
{
    //



    public function register(Request $request)
    {
        // Validez les données d'inscription
      

        // Créez un nouvel utilisateur
       $user= User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Connectez l'utilisateur après l'inscription
        Auth::attempt($request->only('email', 'password'));

        // Redirigez l'utilisateur vers le tableau de bord ou la page de profil
        
    }


  
    public function login(Request $request)
    {
        // Validez les données de connexion
       
    
        // Tentez de connecter l'utilisateur
        if (!Auth::attempt($request->only('email', 'password'))) {
            // L'authentification a échoué
            return response([
                'message' => 'Invalid credentials'
            ], 401);
        }
    
        $user = Auth::user();
        $token = $user->createToken('token')->plainTextToken;
    
        return response([
            'token' => $token
        ]);
    }
    


    public function user (){
        return "hello world";
    }

    public function logout( Request $request)
    {

        $cookie = Cookie::forget('jwt');
 
        return responses([
'message'=>'succes'
        ])->withCookie($cookie);
    }
}

