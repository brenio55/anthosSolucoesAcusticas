<?php

    $caminhoServices = "img/general/services/";
    $pagina = "consultoria/inside/";

    $img = [
        $caminhoServices.$pagina."consultoria1.png"
        // $caminhoServices.$pagina."porta 2.jpg",
        // $caminhoServices.$pagina."porta.jpg",
        // $caminhoServices.$pagina."sala.jpg"
    ];

$javascriptMsg = "javascript:enviarMensagemServices('Consultoria');";

$pContent = "Para um orçamento, deixe seu nome e pressione o botão abaixo que você será encaminhado com uma mensagem personalizada sobre este serviço para o nosso Whatsapp!";

?>


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
                    <img src="<?=$img[0]?>" alt="foto do serviço" id="fotoServico1" class="consultoria">
                    <!-- <article class="flex spaceBetween">
                        <img src="<?=$img[1]?>" alt="foto do Serviço 2" id="fotoServico2">
                        <img src="<?=$img[2]?>" alt="foto do Serviço 3" id="fotoServico3">
                        <img src="<?=$img[3]?>" alt="foto do Serviço 4" id="fotoServico4">
                    </article> -->
                </article>
            </section>
            <section class="direito">
                <article>
                    <div class="quadradoServicosInside">
                        <h2>Consultoria</h2>

                        <p>O cliente envia fotos do local e/ou caracteristicas 
                            para o arquiteto. É feita uma análise técnica, onde o 
                            arquiteto irá indicar o que se deve ser feito (por 
                            escrito) para que se tenhao resultado desejado pelo 
                            cliente. Este serviço não inclui um projeto.</p>

                            <p><?=$pContent?></p>
                    </div>
                    
                        <form action="<?=$javascriptMsg?>">
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