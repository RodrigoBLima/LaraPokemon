<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;
use LaraDex\Trainer;
use Iluminate\Support\Facades\Storage;
use LaraDex\Http\Requests\StoreTrainerRequest;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all();

        return view('trainers.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainerRequest $request)
    {

        $trainer = new Trainer();

        //configuracoes da imagem do treinador
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
               //mover o arquivo
            $file->move(public_path().'/images/',$name);

        }
             //criar treinador
        $trainer->name = $request->input('name');
        $trainer->avatar=$name;
        $trainer->slug=$request->input('slug');
        $trainer->save();

        //redirecionando o usuario atraves de http responses
        return redirect()->route('trainers.index');

        //return 'Treinador criado com Sucesso!';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {

        return view('trainers.show', compact('trainer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {

     return view('trainers.edit', compact('trainer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
            $trainer->fill($request->except('avatar'));
                  //configuracoes da imagem do treinador
            if($request->hasFile('avatar')){
                $file = $request->file('avatar');
                $name = time().$file->getClientOriginalName();
                $trainer->avatar=$name;
                //mover o arquivo
                $file->move(public_path().'/images/',$name);

            }

            $trainer->save();


        //redirecionando o usuario atraves de http responses
        return redirect()->route('trainers.show', [$trainer])->with('status','Treinador atualizado com sucesso !');

            //return 'Usuário atualizado com sucesso';


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        //eliminar a imagem
        $file_path = public_path().'/images/'.$trainer->avatar;
        \File::delete($file_path);
        //eliminando o treinador
        $trainer->delete();


        //redirecionando o usuario atraves de http responses
        return redirect()->route('trainers.index');

        //return 'Usuário excluido com sucesso !';
    }
}
