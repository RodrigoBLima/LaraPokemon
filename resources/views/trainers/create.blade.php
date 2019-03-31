@extends('layouts.app')

@section('title', 'Cadastro Treinadores')


@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>

@endif

            <form class="form-group" action="/trainers" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                            <label for="">Nome</label>
                            <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Apelido</label>
                    <input type="text" name="slug" class="form-control">
                </div>
                <div class="form-group">
                            <label for="">Imagem</label>
                            <input type="file" name="avatar" class="">
                </div>

                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>

@endsection



