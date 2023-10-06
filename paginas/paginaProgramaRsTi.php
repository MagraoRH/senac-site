<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../paginas/cssPaginaProgramaRS/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../img/iconeAba.png">
    <title>Senac-RS</title>
</head>

<body>
    <div>
        <img src="../img/logoRsTi.png" alt="Logo Senac" class="removendo_da_media" width="100%">

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
        <div id="login">
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
        </div>
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
    <br>
    <br>
    <br>
    <p align="justify">
        <img src="../img/sobreImg.png" alt="Sobre o RS TI" align="left" class="ajustando_imagem">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    <h1>
        <center>Sobre o Programa</center>
    </h1>
    <br>
    <br>

    <p align="center">O Programa RS TI foi desenvolvido pelo Senac-RS com o objetivo de capacitar<br> pessoas para
        atuarem no
        mercado
        de Tecnologia da Informação<br> do Rio Grande do Sul, a fim de desenvolver habilidades técnicas necessárias
        para
        atuação como <br>Desenvolvedores de Software.</p>
    </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="tirando_o_espaco_de_cima">
        <br>
        <br>
        <br>
        <div align="center">
            <img src="../img/profissionaisEstudantes.png" alt="Profisionais"><br>
            <p>
                Se você está cursando ou já finalizou alguma <br>das trilhas do Programa RS TI e deseja cadastrar o seu
                currículo,<br> clique aqui.
            </p>
        </div>
        <div align="right">
            <img src="../img/empresa.png" alt="Empresa" class="empresa"><br>
            <p class="p">
                Se você é uma empresa parceira do Programa RS TI <br>e deseja divulgar suas vagas ou buscar
                profissionais,<br>
                clique aqui.
            </p>
        </div>
    </div>
    <br>
    <br>
    <div class="centralizando_textos_RSTI">
        <div class="verde">
            <h2>OBJETIVO</h2>
        </div>
        <p>Capacitar pessoas para atuarem no mercado de Tecnologia da Informação do Rio Grande do Sul, a fim de<br>
            desenvolver habilidades técnicas necessárias para atuação como Desenvolvedores de Software.</p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="verde">
            <h2>NOSSA ATUACAO</h2>
        </div>
        <p>O Senac-RS atua há 75 anos na capacitação de profissionais para atuação no mercado de trabalho.
            Acompanhou<br>
            a evolução das tecnologias ao longo do tempo, ofertando cursos atualizados e adequados às demandas das<br>
            empresas do setor de comércio de bens, serviços e turismo. Ao longo dos últimos 5 anos, mais de 26 mil
            alunos<br>
            foram capacitadas pelo Senac-RS, na área de Tecnologia da Informação, proporcionando a qualificação do
            setor.
        </p>

        <br>
        <br>
        <br>
        <br>
        <br>
        <iframe width="90%" height="500px" src="https://www.youtube.com/embed/d08Tno8w5wI" title="Programa RS TI"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen class="video_media"></iframe>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2 class="verde">MERCADO BRASILEIRO</h2>
        <img src="../img/mercado_rsti.png" alt="Mercado de trabalho" width="900" height="300" class="imagem_media">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2 class="verde">IMPACTO PROGRAMA RS TI EM 2022 E 2023</h2>
        <img src="../img/impacto_rsti.png" alt="Impacto RS TI" width="1000" height="600" class="imagem_media">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <img src="../img/bolinhas_verde_rsti.png" alt="Trilha" width="100%" class="remover_media">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <footer>
        <h2 class="rodape">Desenvolvido por Ricardo Henrique</h2>
    </footer>
    </div>
</body>

</html>