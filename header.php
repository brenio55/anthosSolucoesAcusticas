<?php 
    if (isset($_SERVER['HTTPS']) &&
        ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
        $protocol = 'https://';
        }
    else {
        $protocol = 'file:///';
    }
define("ROOTPATH", $protocol.dirname($_SERVER["SCRIPT_FILENAME"])); 

?>

<header>
        <div class="logo">
          <section class="flex center column">
            <img alt="logo da anthos" srcset="">
            <h2>anthos</h2>
            <h6>acústica</h6>
          </section>
        </div>
        <nav>
            <ul>
                <li><a href="https://anthosacustica.com.br/#home">HOME</a></li>
                <li><a href="https://anthosacustica.com.br/#services">SERVIÇOS</a></li>
                <li><a href="https://anthosacustica.com.br/#contact">CONTATO</a></li>
                <li><a href="https://anthosacustica.com.br/#aboutUs">SOBRE</a></li>
            </ul>
        </nav>
    </header> <!-- fazer linhas esquerda e direta com pseudoclasse-->