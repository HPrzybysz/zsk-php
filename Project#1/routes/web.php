<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/city_old', function(){
    return "Miasto";
});

Route::get('/city', function(){
    return view('city');
});

//Route::redirect('/', 'city_old');
//Route::redirect('/', '/city', 301);
Route::get('/status', function(){
    $response = Response::json([
        'error' => false,
        'code' => 300,
        'message' => 'Image was deleted!'], 500);
    return $response->status();
});

Route::get('city2', function(){
    //     ["name" => "Janusz", "city" => "Poznan"];
    return view('city', ['name' => "Janusz", "city" => "Poznan"]);
});
Route::get('/pages/{x}', function($x){
    return $x;
});
Route::get('/pages/{x}', function($x){
    //return ['name' => 'dfgr'];
    return $x;
});
Route::get('pages/{x}', function($x){
    $info = [
        'about' => "Informacje o stronie",
        'contact' => "contact@o2.pl",
        'home' => 'Strona domowa'
    ];
    return $info[$x];
});
/*
Route::get('/address/{city}', function(string $city){
    echo "Miasto: $city";
});
Route::get('/address1/{city}/{street}', function(string $city, string $street){
    echo <<< ADDRESS
    adres: $city $street
    ADDRESS;
});
*/
Route::get('/address2/{city?}/{street?}/{ZipCode?}', function(string $city = "-", string $street = "-", int $ZipCode = null){
    if (is_null($ZipCode))
        $ZipCode = "Brak Danych";
    else
        $ZipCode = substr($ZipCode,0,2)."-".substr($ZipCode, 2, 3);
    echo <<< ADDRESS
    Miasto: $city<br>
    Ulica: $street <br>
    Kod pocztowy: $ZipCode <br>
    <hr>
    ADDRESS;
})->name(name:'x');

Route::redirect('stronaglowna', '/');
Route::redirect('xyz', 'stronaglowna');

Route::redirect('danemiasta/{city?}/{street?}/{ZipCode?}', 'address2/{city?}/{street?}/{ZipCode?}');


require __DIR__.'/auth.php';

