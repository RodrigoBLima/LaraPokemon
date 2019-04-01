<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;
use LaraDex\Trainer;
use LaraDex\Pokemon;
class PokemonController extends Controller
{

    public function index(Trainer $trainer, Request $request){
        if($request->ajax()){

            return response()->json($trainer->pokemons, 200);
        }
        return view('pokemons.index');
    }

    //armazenando pokemon no bd
    public function store(Tainer $trainer, Request $request){
        if($request->ajax()){
                $pokemon = new Pokemon();
                $pokemon-> name = $request->input('name');
                $pokemon-> picture = $request->input('picture');
                $pokemon->trainer()->associate($trainer)->save;
    //                $pokemon->save();

                return response()->json([
                    //"trainer" => $trainer,
                    "message" => "Pokemon criado com sucesso!",
                    "pokemon" => $pokemon
                ],200);
        }
    }

}
