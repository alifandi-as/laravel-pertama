<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiAuthController;
use App\Http\Controllers\Api\User\ApiUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */
Route::controller(ApiUserController::class)
->prefix("/users")
->group(function (){
    Route::get("/","index"); // list user => /users/
    Route::get("/[id]","show"); // list user => /users/
    Route::post("/","store"); // list user => /users/
    Route::put("/[id]","update"); // list user => /users/
    Route::delete("/[id]","destroy"); // list user => /users/
});


Route::get('/basic-auth', function(Request $request){
    $username = "kelas_industri";
    $password = "2024";
    $token = $request->header('authorization');
    $token = str_replace('Basic', '', $token);

    $credential = "{$username}:{$password}";
    return base64_decode($token) === $credential ? 'yes' : 'no';
});

Route::get('/api-key', function(Request $request){
    $apiKeyName = "kelas-industri";
    $key = "2024josjosjos";
    
    $token = $request->header($apiKeyName);

    return $token == $key ? 'api key yes' : 'api key no';
});

Route::post('/login', [ApiAuthController::class, 'login']);

Route::get('profile', function(Request $request){
    return $request->userCredential(['id'])->first();
})->middleware(['api-auth']);

Route::post('/logout', [ApiAuthController::class, 'logout']);