<?php
use App\Http\Controller\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('posts',[PostController::Class,'index']);
Route::get('posts/{post}',[PostController::Class,'show']);
Route::post('posts',[PostController::Class,'store']);

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidaionException;

Route::post('sanctum/tocken' ,function (Request $request){
    $request -> validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);
    $user = User::where('email',$request->email)->first();
    if (!$user || ! Hash::check($request->password,$user->password)){
        throw ValidationException::withMessages([
            'email' => ['the provided credentials are incorrec.'],
        ]);
    }
    return $user->createToken($request -> device_name)->plainTextToken;
});
