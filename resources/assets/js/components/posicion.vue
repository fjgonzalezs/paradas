<template>
	<div>
	<div class="mdl-grid">
		 <div class="mdl-cell mdl-cell--6-col-phone"><h4>Posicion</h4></div>
		  
	</div>
	<div class="mdl-grid">
	 <div class="mdl-cell mdl-cell--6-col-phone">
	 	<label for="lat">latitud: {{latitud}}</label> <br>
	 	<label for="lon">longitud: {{longitud}}</label> <br>
	 	<button @click="getLocalizacion">Obtener coordenadas</button>
	 </div>

	</div>

	<div class="mdl-grid">
		
			<gmap-map
    :center="centro"
    :zoom="14"
    style="width: 100%; height: 500px"
  >
    <gmap-marker
      :key="index"
      v-for="(m, index) in marcadores"
      :position="m.posicion"
      :clickable="true"
      :draggable="true"
      @click=""
    ></gmap-marker>
    
  </gmap-map>
		</div>
	
	
	</div>
</template>
<script>
	export default{
		data(){
			return {
				centro: {lat: -0.2389044999999999, lng: -79.17742679999998},
				latitud: '',
				longitud:'',
				marcadores: []
			}
		},
		methods:{
			getLocalizacion(){
				 navigator.geolocation.getCurrentPosition(posicion =>{
				 	this.latitud = posicion.coords.latitude;
				 	this.longitud = posicion.coords.longitude;

				 	this.marcadores.push({
				 		 posicion: {
            				  lat: this.latitud,
            				  lng: this.longitud
            				}
				 	});
				 	this.centro.lat = this.latitud;
				 	this.centro.lon = this.longitud;
				 } );
			}
		}
	}
</script>
<style>
  iframe {
 max-width: 100%;
 height: auto;
}
</style>