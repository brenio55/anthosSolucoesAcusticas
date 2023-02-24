<?php

    $caminhoServices = "img/general/services/";
    $pagina = "laudo/inside/";

    $img = [
        $caminhoServices.$pagina."laudo1.jpg",
        $caminhoServices.$pagina."laudo2.jpg",
        $caminhoServices.$pagina."laudo3.jpg",
        $caminhoServices.$pagina."laudo4.jpg"
    ];

    $javascriptMsg = "javascript:enviarMensagemServices('Laudo Acústico');";

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
    <section class="servicesInside laudo">
        <section class="flex center">
            <section class="esquerdo">
                <article>
                    <img src="<?=$img[0]?>" alt="foto do serviço" id="fotoServico1" class="laudoacustico">
                    <article class="flex spaceBetween">
                        <img src="<?=$img[1]?>" alt="foto do Serviço 2" id="fotoServico2" class="laudoacustico">
                        <img src="<?=$img[2]?>" alt="foto do Serviço 3" id="fotoServico3" class="laudoacustico">
                        <img src="<?=$img[3]?>" alt="foto do Serviço 4" id="fotoServico4" class="laudoacustico">
                    </article>
                </article>
            </section>
            <section class="direito">
                <article>
                    <div class="quadradoServicosInside">
                        <h2>Laudo Acústico</h2>

                        <p>É feito um laudo para atestação de um trabalho de 
                            solução acústica em local determinado pelo cliente. É feito o uso de equipamentos acústicos de medição e 
                            precisão, com base nas normas internacionais e 
                            nacionais.</p>

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