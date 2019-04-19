function controleFormulario(e){
   e.preventDefault();
   
    
    var caixa_email = email.value;
    var caixa_senha = senha.value;
    if(caixa_email == ""){
        mensagem.innerHTML = "Por favor, Preencha o campo email.";
    }
    
      if(caixa_senha == ""){
        mensagem.innerHTML = "Por favor, Preencha o campo da senha.";
    }
     if(caixa_email && caixa_senha){
        
    var formulario = document.getElementById('inicial');
    formulario.submit();

    }
}

function limpaCaixa(){
    mensagem.innerHTML ="";
}

function iniciar(){
   inicial.onsubmit = controleFormulario;
   email.onfocus =limpaCaixa;
   senha.onfocus = limpaCaixa;
   
  

}


window.onload = iniciar;

