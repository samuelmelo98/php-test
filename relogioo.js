var intervalo, agora;




function setDoisdigitos(tempo){
    if(tempo<10){
        
        return "0" + tempo;
    }
    else{
      return  tempo;
    }
    
    
}

function mostrarHora(){
    
    agora = new Date();
    var hora     =  setDoisdigitos(agora.getHours());
    var minutos  =  setDoisdigitos(agora.getMinutes());
    var segundos =  setDoisdigitos(agora.getSeconds());
    
    

    
    relogio.innerHTML =  hora + ":" +  minutos + ":" +  segundos;
    
    
    
    
}








function iniciar(){
    
    intervalo = setInterval(mostrarHora,1000);
    
}









window.onload =iniciar;