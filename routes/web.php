<?php
use Laravel\Socialite\Facades\Socialite;
use App\Http\Resources\UserCollection;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('posts', [PostController::class,'index'])->name('posts.index')->middleware(middleware:'auth');
Route::get('posts/create', [PostController::class,'create'])->name('posts.create')->middleware(middleware:'auth');
Route::get('posts/{post}', [PostController::class,'show'])->name('posts.show');
Route::get('edit/{post}', [PostController::class,'edit'])->name('posts.edit');
Route::put('posts/{post}', [PostController::class,'update'])->name('posts.update')->middleware(middleware:'auth');
Route::delete('posts/{post}', [PostController::class,'destroy'])->name('posts.destroy')->middleware(middleware:'auth');
Route::post('posts', [PostController::class,'store'])->name('posts.store');
Auth::routes();
Route::get('/users', function () {
    return new UserCollection(User::paginate());
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('ajax-test');
Route::group(['middleware' => ['auth']],function(){
    Route::post('posts',[PostController::class, 'store']);
    Route::get('posts/{post}',[PostController::class ,'show'])->name(name: 'posts.show');
});
 
Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});
 
Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();
 
    // $user->token
});