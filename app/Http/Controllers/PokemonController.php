<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function listarPokemones() {
        $listaDePokemones = Pokemon::all();


        return response()->json(["pokemones" => $listaDePokemones]);
    }

    public function guardarPokemon(Request $request) {
        $nuevoPokemon = Pokemon::create([
            "nombre" => $request->nombre,
            "region" => $request->region
        ]);

        return response()->json(["nuevoPokemon" => $nuevoPokemon]);
    }

    public function destroy($id) {
        $pokemonEncontrado = Pokemon::find($id);
        $pokemonEncontrado->delete();

        return response()->json(["pokemonEliminado" => $pokemonEncontrado ]);
    }
}
