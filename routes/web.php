<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Common Resource Routes/Naming:
//index - Show all data -> listings Route::get();
//show - Show a single data -> listing Route::get();
//create - Show form to create new -> listing Route::post();
//store - Store Data -> new Listing
//edit/update - show form to edit data -> listing Route::put(); Route::patch();
//destroy - Delete a data -> listing Route::delete();


//All Listings
Route::get('/', [ListingController::class, 'index']);

//Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
