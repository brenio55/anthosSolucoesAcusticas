<?php

    $caminhoServices = "img/general/services/";
    $pagina = "projeto/inside/";

    $img = [
        $caminhoServices.$pagina."projeto.png",
        $caminhoServices.$pagina."porta 2.jpg",
        $caminhoServices.$pagina."porta.jpg",
        $caminhoServices.$pagina."sala.jpg"
    ];

    $javascriptMsg = "javascript:enviarMensagemServices('Projeto');";

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
                    <img src="<?=$img[0]?>" alt="foto do serviço" id="fotoServico1">
                    <article class="flex spaceBetween">
                        <img src="<?=$img[1]?>" alt="foto do Serviço 2" id="fotoServico2">
                        <img src="<?=$img[2]?>" alt="foto do Serviço 3" id="fotoServico3">
                        <img src="<?=$img[3]?>" alt="foto do Serviço 4" id="fotoServico4">
                    </article>
                </article>
            </section>
            <section class="direito">
                <article>
                    <div class="quadradoServicosInside">
                        <h2>Projeto Acústico</h2>

                        <p>Anamnese, com visita presencial ao local. Medição com aparelhos especificos, de acordo com as normas nacionais e internacionais existentes. É então entregue um projeto arquitetônico de acordo com os melhores conceitos e práticas acústicas.</p>

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