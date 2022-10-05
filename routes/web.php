<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\Main;
use App\Http\Controllers\NftController;
use App\Models\Nft;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    $nfts = nft::all();
//
//    return view('main', compact('nfts'));
//});
//Route::resource('Nfts', NftController::class)->middleware(['auth']);
Route::get('/',[Main::class, 'index']);
Route::resource('main', NftController::class)->only('index','show');


Route::middleware('auth')->group( function () {
    Route::resource('nfts', NftController::class)->only('create', 'show', 'store', 'update');
    Route::resource('main', NftController::class)->only('index');
    Route::resource('collections', CollectionController::class)->only('create', 'store', 'update');
    Route::resource('likes', LikeController::class)->only( 'store', 'destroy');

}
    );

//Route::middleware('guest')->group( function (){
//
//
//}
//);

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
