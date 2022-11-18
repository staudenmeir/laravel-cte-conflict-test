<?php

use App\Models\Thing;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    DB::enableQueryLog();

    dd(
        Thing::query()
         ->whereHas('categories', function (Builder $query) {
             $query->where('id', 1);
         })
         ->get(),
        DB::getQueryLog()
    );

    return view('welcome');
});
