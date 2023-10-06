<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../img/iconeAba.png">
    <title>Senac-RS</title>
</head>

<body id="">
    <div>
        <img src="../../img/senac_logo_new_gr.png" alt="Logo Senac" class="senacLogo">

        <div class="redesSociais">
            <a href="http://www.facebook.com/senacrsoficial"><img src="../../img/icon_facebook.png" alt="Logo facebook"
                    class="redesSociaisImg"></a>
            <a href="https://www.instagram"><img src="../../img/icon_instagram.png" alt="Logo instagram"
                    class="redesSociaisImg"></a>
            <a href="https://pt.linkedin.com/company/senac-rs/"><img src="../../img/icon_linkedin.png"
                    alt="Logo linkedin" class="redesSociaisImg"></a>
            <a href="https://twitter.com/senacrs"><img src="../../img/icon_twitter.png" alt="Logo twitter"
                    class="redesSociaisImg"></a>
            <a href="http://bit.ly/spotifysenacrs"><img src="../../img/icon_spotify.png" alt="Logo spotify"
                    class="redesSociaisImg"></a>
            <a href="http://www.youtube.com/senacrsoficial"><img src="../../img/icon_youtube.png" alt="Logo youtube"
                    class="redesSociaisImg"></a>
        </div>
    </div>

    <section>
        <input type="checkbox" id="bt_menu">
        <label for="bt_menu">&#9776;</label>
        <nav id="menu">
            <ul>
            <li><a href="../../index.php">Início</a></li>
                <li><a href="../paginaCursos.php">Cursos</a></li>
                <li><a href="../paginaLocalização.php">Localização</a></li>
                <li><a href="../paginaLocalização.php">Fale Conosco</a></li>
                <li><a href="../paginaCadastro.php">Cadastro</a></li>
            </ul>
        </nav>
    </section>
    <br>
    <br>
    <div class="login-cor">
        <a href="./cadastro.php">
            Cadastro de usuário
        </a> |
        <a href="./login.php">
            Acessar sistema
        </a>
        <br>
        Acesso ao sistema<br>
        <form action="verifica.php" method="post">
            <label>Usuario:
                <input type="text" name="login" id="login" />
            </label><br>
            <label>Senha:
                <input type="password" name="senha" id="senha" />
            </label><br>
            <input type="submit" name="entrar" value="Entrar" id="entrar" />
        </form>
    </div>
    <br>
    <br>
    <footer>
        <h2 class="rodape">Desenvolvido por Ricardo Henrique</h2>
    </footer>
</body>

</html>