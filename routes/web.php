<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ParisController;
use App\Http\Controllers\MarseilleController;
use App\Http\Controllers\NiceController;
use App\Http\Controllers\ToulouseController;
use App\Http\Controllers\BourdeauController;
use App\Http\Controllers\RennesController;
use App\Http\Controllers\NantesController;
use App\Http\Controllers\MontpllierController;
use App\Http\Controllers\LilleController;
use App\Http\Controllers\StragbourgController;
use App\Http\Controllers\LyonController;
use App\Http\Controllers\FreelancerSelonlesCapaciteController;
use App\Http\Controllers\Animateur3DController;
use App\Http\Controllers\DesignerTextileController;
use App\Http\Controllers\WebDesignerController;
use App\Http\Controllers\PhotographeController;
use App\Http\Controllers\GraphisteController;
use App\Http\Controllers\MotionDesignerController;
use App\Http\Controllers\Dessinateur3DController;
use App\Http\Controllers\IllustrateurController;
use App\Http\Controllers\TopographyController;
use App\Http\Controllers\DirecteurArtistiqueController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\graphistController;
use App\Http\Controllers\ClientController;

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
Route::get('client',[ClientController::class,'index'])->name('client');
Route::get('client/create',[ClientController::class,'create'])->name('client.create');
Route::post('client/store',[ClientController::class,'store'])->name('client.store');
Route::get('/', function () {
    return view('welcome');
});
Route::resource('annonces', AnnonceController::class);
Route::resource('paris', ParisController::class);
Route::resource('marseille', MarseilleController::class);
Route::resource('nice', NiceController::class);
Route::resource('toulouse', ToulouseController::class);
Route::resource('bourdeau', BourdeauController::class);
Route::resource('rennes', RennesController::class);
Route::resource('nantes', NantesController::class);
Route::resource('montpllier', MontpllierController::class);
Route::resource('lille', LilleController::class);
Route::resource('stragbourg', StragbourgController::class);

Route::resource('lyon', LyonController::class);
Route::resource('graphists', graphistController::class);
Route::get('/freelance', function () {
    return view('freelance');
});
Route::get('/freelancer_1', function () {
    return view('freelancer_1');
});
Route::get('/realisation', function () {
    return view('realisation');
});
Route::resource('realisations', RealisationController::class);

Route::resource('freelancerselonlescapacite', FreelancerSelonlesCapaciteController::class);
Route::resource('animateur3D', Animateur3DController::class);
Route::resource('designertextile', DesignerTextileController::class);
Route::resource('webdesigner', WebDesignerController::class);
Route::resource('photographe', PhotographeController::class);
Route::resource('graphiste', GraphisteController::class);
Route::resource('motiondesigner', MotionDesignerController::class);
Route::resource('dessinateur3D', Dessinateur3DController::class);
Route::resource('illustrateur', IllustrateurController::class);
Route::resource('topography', TopographyController::class);
Route::resource('directeurartistique', DirecteurArtistiqueController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
