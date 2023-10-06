<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../paginas/cssPaginaLocalizaçao/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../img/iconeAba.png">
    <title>Senac-RS</title>
</head>

<body>
<header id="login">
            <?php
            if (isset($_SESSION['nome_usu_sessao'])) {
                echo 'Olá '
                    . $_SESSION['nome_usu_sessao'] . ', tudo certinho? Seja bem vindo';
                echo "<a href='./index.php?logout'><br>Logout</a>";
            } else {
                echo "<a href='./cssPaginaLogin/login.php'>
			Acessar sistema
			</a>";
            }
            if (isset($_GET['logout'])) {
                session_destroy();
                header("Location: ./index.php");
            }
            ?>
        </header>
    <div>
        <img src="../img/senac_logo_new_gr.png" alt="Logo Senac" class="senacLogo">

        <div class="redesSociais">
            <a href="http://www.facebook.com/senacrsoficial"><img src="../img/icon_facebook.png" alt="Logo facebook"
                    class="redesSociaisImg"></a>
            <a href="https://www.instagram.com/"><img src="../img/icon_instagram.png" alt="Logo instagram"
                    class="redesSociaisImg"></a>
            <a href="https://pt.linkedin.com/company/senac-rs/"><img src="../img/icon_linkedin.png" alt="Logo linkedin"
                    class="redesSociaisImg"></a>
            <a href="https://twitter.com/senacrs"><img src="../img/icon_twitter.png" alt="Logo twitter"
                    class="redesSociaisImg"></a>
            <a href="http://bit.ly/spotifysenacrs"><img src="../img/icon_spotify.png" alt="Logo spotify"
                    class="redesSociaisImg"></a>
            <a href="http://www.youtube.com/senacrsoficial"><img src="../img/icon_youtube.png" alt="Logo youtube"
                    class="redesSociaisImg"></a>
        </div>
    </div>

    <section>
        <input type="checkbox" id="bt_menu">
        <label for="bt_menu">&#9776;</label>
        <nav id="menu">
            <ul>
            <li><a href="../index.php">Início</a></li>
            <li><a href="../paginas/paginaCursos.php">Cursos</a></li>
                <li><a href="../paginas/paginaLocalização.php">Localização</a></li>
                <li><a href="../paginas/paginaFaleConosco.php">Fale Conosco</a></li>
                <li><a href="../paginas/paginaCadastro.php">Cadastro</a></li>
            </ul>
        </nav>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="alinhando_os_textos">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.791777186247!2d-51.22146782353
            089!3d-30.042831031203367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951978567f17f28d%3A0x2c2c5272bacf4d3a!2s
            Senac%20Tech!5e0!3m2!1spt-BR!2sbr!4v1687983036160!5m2!1spt-BR!2sbr" width="100%" height="100%"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <p align="center">
            Av. Venâncio Aires, 93 - Cidade Baixa, Porto Alegre - RS, 90040-191, ligue para a <br>Central de Atendimento
            Corporativo pelo telefone 0800-707-1027 para resolver qualquer duvida.
        </p>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    </div>
    <br>
    <br>
    <br>
    <br>
        <footer>
        <h2 class="rodape">Desenvolvido por Ricardo Henrique</h2>
    </footer>
</body>

</html>