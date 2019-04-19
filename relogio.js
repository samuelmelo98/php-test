var intervalo, agora;

function mostrarHora(){
    
    agora = new Date();
    var hora     =  agora.getHours();
    var minutos  =   agora.getMinutes();
    var segundos =      agora.getSeconds();
    
    relogio.innerHTML =  hora + ":" +  minutos + ":" +  segundos;
    
    
    
    
}








function iniciar(){
    
    intervalo = setInterval(mostrarHora,1000);
    
}









window.onload =iniciar;