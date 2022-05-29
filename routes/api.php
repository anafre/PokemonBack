<?php
//importamos el controlador
use App\Http\Controllers\PokemonController;
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
/*escribimos la ruta y una clase controlador para poder responder a la ruta
artisan nos permite crear controlador(php artisan make:controller PokemonController)
AQUÍ llamamos al controlador q hemos creado en pokemonController*/ 
Route::get('/pokemones', [PokemonController::class, 'listarPokemones']);
Route::post('/pokemones', [PokemonController::class, 'guardarPokemon']);
Route::delete('/pokemones/{id}', [PokemonController::class, 'destroy']);
