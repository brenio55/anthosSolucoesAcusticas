<!DOCTYPE html>
<html lang="en">
<head>
    <?php require("head.php"); ?>
    <?php require("aditionalHead.php"); ?>
</head>
<body>
    <?php require("header.php"); ?>
    <div class="espacoPadrao"></div>
    <section class="servicesInside">
        <section class="flex center">
            <section class="esquerdo">
                <article>
                    <img src="" alt="foto do serviço" id="fotoServico1">
                    <article class="flex spaceBetween">
                        <img src="" alt="foto do Serviço 2" id="fotoServico2">
                        <img src="" alt="foto do Serviço 3" id="fotoServico3">
                        <img src="" alt="foto do Serviço 4" id="fotoServico4">
                    </article>
                </article>
            </section>
            <section class="direito">
                <article>
                    <div class="quadradoServicosInside">
                        <h2>Assessoria</h2>

                        <p>Na assessoria, o cliente tem uma conversa profunda com o arquiteto almejando o aprendizado de técnicas 
                            arquitetônicas e acústicas, para que ele, por conta 
                            própria, execute, com base no aprendizado, o resultado que ele deseja. Não inclui um projeto.</p>

                        <p>Deixe seu nome e pressione o botão abaixo que você será encaminhado com uma mensagem personalizada sobre este serviço para o nosso Whatsapp.</p>
                    </div>
                    
                        <form action="javascript:enviarMensagem();">
                            <div class="flex spaceBetween">
                              <div>
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome">
                              </div>
                              <div>
                                <button class="DiamondArrowWhite contact" type="submit">Enviar</button>
                              </div>
                            </div>
                        </form>
                    
                </article>
            </section>
        </section>        
    </section>
    <?php require("footer.php"); ?>
</body>
</html>