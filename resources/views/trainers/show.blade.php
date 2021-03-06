@extends('layouts.app')

@section('title', 'Treinador')


@section('content')
    @include('common.sucess')
   <img style="heigth:180px; width:200px; backfround-color:EFEFEF; margin:28px;" class="card-img-top rounded-circle mx-auto d-block " src="/images/{{ $trainer->avatar }}" alt="">
   <div class="text-center">
        <h5 class="card-title">{{ $trainer->name }}</h5>
        <p>Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/trainers/{{ $trainer->slug }}/edit" class="btn btn-primary">Editar</a>
        <form class="form-group" method="POST" action="/trainers/{{ $trainer->slug}}">
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-danger">Excluir</button>

        </form>

    </div>
    <modal-button></modal-button>
    <create-form-pokemon></create-form-pokemon>
    <list-of-pokemons></list-of-pokemons>



@endsection



