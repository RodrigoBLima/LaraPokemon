<template>
<div class="modal fade" id="addPokemon" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Pokemon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form>
	        <div class="form-group">
			    <label>Pokemon</label>
			    <input type="text" class="form-control" placeholder="Digite o nome do pokemon">
		  	</div>
		  	<div class="form-group">
			    <label>Imagem</label>
			    <input type="text" class="form-control" placeholder="Cole a URL de uma imagem" >
		  	</div>
		  	<button type="submit" class="btn btn-primary">Salvar</button>
	  	</form>
      </div>
    </div>
  </div>
</div>
</template>
