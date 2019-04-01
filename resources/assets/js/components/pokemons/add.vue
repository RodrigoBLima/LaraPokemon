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
      	<form @submit.prevent="savePokemon">
	        <div class="form-group">
			    <label>Pokemon</label>
			    <input type="text" class="form-control" placeholder="Digite o nome do pokemon" v-model="name">
		  	</div>
		  	<div class="form-group">
			    <label>Imagem</label>
			    <input type="text" class="form-control" placeholder="Cole a URL de uma imagem" v-model="picture">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Salvar</button>
	  	</form>
      </div>
    </div>
  </div>
</div>
</template>
<script>
    import EventBus from '../../event-bus';
export default {
    data(){
        return{
            name:null,
            picture:null

        }
    },
    methods: {
      savePokemon: function(){
          let currentRoute = window.location.pathname


          axios.post(`http://127.0.0.1:8000${currentRoute}/pokemons`,{
              name: this.name,
              picture: this.picture
          })
          .then(function(res){

              $('#addPokemon').modal('hide')
              EventBus.$emit('pokemon.added', res.data.pokemon)
          })
          .catch(function(err){
              console.log(err)
          })
      }
    }
}
</script>
