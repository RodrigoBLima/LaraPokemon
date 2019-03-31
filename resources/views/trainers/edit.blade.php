@extends('layouts.app')

@section('title', 'Editar Treinador')


@section('content')

            <form class="form-group" action="/trainers/{{ $trainer->slug }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                            <label for="">Nome</label>
                            <input type="text" name="name" value="{{ $trainer->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Apelido</label>
                    <input type="text" name="slug" value="{{ $trainer->slug }}" class="form-control">
                </div>

                <div class="form-group">
                            <label for="">Imagem</label>
                            <input type="file" value="" name="avatar" class="">
                </div>

                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>

@endsection



