@extends('layouts.app')

@section('title', 'Cadastro Treinadores')
    
 
@section('content')

            <form class="form-group" action="/trainers" method="post" enctype="multipart/form-data">
                @csrf   
                <div class="form-group">
                            <label for="">Nome</label>
                            <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                            <label for="">Imagem</label>
                            <input type="file" name="avatar" class="">
                </div>
        
                    <button type="submit" class="btn btn-primary">Cadastrar</button>  
                </form>
            
@endsection
   
  

  