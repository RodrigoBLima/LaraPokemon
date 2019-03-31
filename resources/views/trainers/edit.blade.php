@extends('layouts.app')

@section('title', 'Editar Treinador')


@section('content')

            <form class="form-group" action="/trainers/{{ $trainer->slug }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                @include('trainers.form')


            <button type="submit" class="btn btn-primary">Atualizar</button>
           </form>

@endsection



