var numero = "5521992215465"
var empresaPessoa = "Franki"

function enviarMensagem(){
    let nome = $('#nome').val();
    let mensagem = $('#mensagem').val();

    mensagem = mensagem.replace(" ", "%20")

    var mensagemAEnviar = "https://wa.me/" + numero + "?text=Olá,%20" 
                           + empresaPessoa +"!%20Meu%20nome%20é%20" 
                           + nome + ".%20Vim%20do%20seu%20site.\n" 
                           + "%20Mensagem%20personalizada:%20" 
                           + mensagem;

    alert('Redirecionando você para o Whatsapp com sua mensagem personalizada... Clique em OK para continuar...')

    window.open(mensagemAEnviar);
}

function enviarMensagemServices(service){
    let nome = $('#nome').val();
    
    var mensagemAEnviar = "https://wa.me/" + numero + "?text=Olá,%20" 
                           + empresaPessoa +"!%20Meu%20nome%20é%20" 
                           + nome + ".%20Vim%20do%20seu%20site.\n" 
                           + "%20Estou%20interessado%20no%20seu%20serviço%20de%20" 
                           + service;

    alert('Redirecionando você para o Whatsapp com sua mensagem personalizada... Clique em OK para continuar...')

    window.open(mensagemAEnviar);
}