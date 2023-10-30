<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1/produits')->group(function (){ 
    Route::post('registers',[AuthController::class,'register']);
   

  
 Route::post('login',[AuthController::class,'login']);
 Route::post('ajoutArticle',[ArticleController::class,'store'])->middleware('auth:sanctum');
 Route::post('/ajouterami', [FriendShipController::class,'store']);


});

Route::get('/users',[UserController::class,'getAllUsers'])->middleware('auth:sanctum');
Route::get('/affiche', [ArticleController::class, 'index']);





// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     Route::post('ajoutArticle',[ArticleController::class,'store']);
//     // return $request->user();
    
// });
