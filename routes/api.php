<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\controllers\UserController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizOController; 
use App\Http\controllers\EntretienController;
use App\Http\Controllers\QuizAngController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\VideoController; 
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\EnseignantController;
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
Route::post('/CoursPost',[CoursController::class,'store']);
Route::get('/userget',[UserController::class,'index']);
Route::post('/userpost',[UserController::class,'store']);
Route::get('/userbyid/{id}',[UserController::class,'show']);
Route::post('/userlogin',[UserController::class,'login']);
Route::get('/Quizget',[QuizController::class,'index']);
Route::get('/QuizOget',[QuizOController::class,'index']);
Route::get('/EntretienGet',[EntretienController::class,'index']);
Route::post('/EntretienPost',[EntretienController::class,'store']);
Route::get('/enntretientbyid/{id}',[EntretienController::class,'show']);
Route::get('/QuizAngget',[QuizAngController::class,'index']);
Route::get('/CoursGet',[CoursController::class,'index']);
Route::get('/IdCours/{id}',[CoursController::class,'getbyid']);
Route::get('/VideoGet',[VideoController::class,'index']);
Route::get('/getvideoid/{id}',[VideoController::class,'getvideobyid']);
Route::get('/groupeGet',[GroupeController::class,'index']); 
Route::get('/enseignantGet',[EnseignantController::class,'index']); 
Route::get('/getenseignantid/{id}',[EnseignantController::class,'getenseignantbyid']);






// Route::get('/getuser', function (Request $request) {
//     $user=User::all();
//     return $user;
// });



