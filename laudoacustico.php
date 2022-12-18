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
                        <h2>Laudo Acústico</h2>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora earum, temporibus quos ipsa facere ratione quis? Commodi, itaque quas assumenda deleniti iste laboriosam hic vero facilis aperiam placeat. Mollitia, esse!</p>

                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, doloribus? Dolore cumque earum, iusto fuga velit debitis natus quis quibusdam nesciunt necessitatibus adipisci quidem voluptatem soluta neque tenetur atque nemo.</p>
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