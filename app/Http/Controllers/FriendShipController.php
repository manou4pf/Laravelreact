<?php

namespace App\Http\Controllers;

use App\Models\Friendship;
use Illuminate\Http\Request;

class FriendShipController extends Controller
{
    //

    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required',
            
        ]);
    
        $ami = new Friendship(); // Crée une nouvelle instance de la classe Amis
       
        $ami->prenom = $request->input('status');
        $ami->sender_id = $request->input('sender_id');
        $ami->receiver_id = $request->input('receiver_id');
        $ami->save();
    
        return response()->json(['message' => 'Ami ajouté avec succès'], 201);
    }
    
}
