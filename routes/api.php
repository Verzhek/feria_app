<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Stand;
use App\Models\User;
use App\Models\Visit;
use App\Http\Resources\VistaResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\StandResource;
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

Route::middleware('auth:api')->get('/v1/users', function (Request $request) {
    return UserResource::collection(User::paginate(10));
});
Route::middleware('auth:api')->get('/v1/stands', function (Request $request) {
    return StandResource::collection(Stand::paginate(10));
});
Route::middleware('auth:api')->get('/v1/visits', function (Request $request) {
    return VistaResource::collection(Visit::paginate(10));
});
Route::middleware('auth:api')->post('/v1/visits/add', [ApiController::class,"api_add_visit"]);
Route::middleware('auth:api')->post('/v1/visits/{visit}/delete', [ApiController::class,"api_add_visit"]);
