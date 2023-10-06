<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../paginas/cssPaginaTecDesen/Style.css">
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

    <img src="../img/pagamentoTecDesen.png" alt="Pagamento" class="alinhamento_da_media">
    <div align="center">
        <h2 class="valor">R$ 12.756,43</h2>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p class="margin_media">
        &nbsp&nbsp&nbsp&nbspVocê busca uma oportunidade de inserção no mercado de trabalho? A área de Desenvolvimento de
        Sistemas fascina
        você? Gostaria de agregar conhecimentos fundamentais para os mais diversos segmentos profissionais? Se as
        respostas forem sim, o curso &nbsp&nbsp&nbsp&nbspTécnico em Desenvolvimento de Sistemas do Senac-RS foi feito
        para você!<br>
        <br>
        &nbsp&nbsp&nbsp&nbspA formação vai te preparar para construir sistemas computacionais utilizando ambiente de
        desenvolvimento,
        seguindo as normas e especificações da lógica e das linguagens de programação bem como a modelagem,
        implementação e manutenção do banco de &nbsp&nbsp&nbsp&nbspdados. Executa o desenvolvimento a manutenção e
        testes de programas de
        computador documentando o processo, adotando normas técnicas, de qualidade, de saúde, de segurança do trabalho e
        preservação ambiental no desempenho de sua função. Você terá &nbsp&nbsp&nbsp&nbspo aprendizado da habilidade de
        comunicação em
        língua inglesa ao longo do curso.<br>
        <br>
        &nbsp&nbsp&nbsp&nbspPor meio de uma proposta pedagógica adequada às exigências do mundo profissional, o curso
        oferece nos momentos
        presenciais uma aprendizagem pautada por metodologias que propiciam atuação por projetos, aulas práticas,
        teóricas, vivenciais e flexíveis &nbsp&nbsp&nbsp&nbspcom foco no mercado de trabalho.<br>
        <br>
        &nbsp&nbsp&nbsp&nbspAo final da formação você estará apto a atuar em empresas de diversos segmentos, além de
        poder participar de
        concursos em organizações públicas.<br>
        <br>
        &nbsp&nbsp&nbsp&nbspGostou da ideia de ser um profissional completo da área de Desenvolvimento de Sistemas?
        Venha para o curso
        Técnico em Desenvolvimento de Sistemas - Bilíngue e mude de vida.
    </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="cronogramaConteudo">
        <h2>Cronograma</h2>
        <br>
        <ul>
            <li>
                Planejar o desenvolvimento de software;<br>
            </li>
            <br>
            <li>
                Desenvolver algoritmos;<br>
            </li>
            <br>
            <li>
                Planejar e administrar banco de dados;<br>
            </li>
            <br>
            <li>
                Desenvolver código orientado a objetos;<br>
            </li>
            <br>
            <li>
                Analisar orientações técnicas;<br>
            </li>
            <br>
            <li>
                Elaborar orientações técnicas;<br>
            </li>
            <br>
            <li>
                Desenvolver e organizar interface gráfica para aplicações desktop;<br>
            </li>
            <br>
            <li>
                Programar aplicativos computacionais com integração de banco de dados para desktop;<br>
            </li>
            <br>
            <li>
                Gerenciar a configuração e versionamento de Software;<br>
            </li>
            <br>
            <li>
                Executar testes e realizar melhorias em aplicativos computacionais Desktop;<br>
            </li>
            <br>
            <li>
                Desenvolver e organizar interface de usuário e elementos visuais para aplicações web. (front-end);<br>
            </li>
            <br>
            <li>
                Programar aplicativos computacionais com integração de banco de dados para web. (back-end);<br>
            </li>
            <br>
            <li>
                Publicar e testar aplicações Web;<br>
            </li>
            <br>
            <li>
                Desenvolver e organizar interface gráfica para dispositivos móveis;<br>
            </li>
            <br>
            <li>
                Desenvolver interface para melhor experiência do usuário;<br>
            </li>
            <br>
            <li>
                Projeto Integrador Assistente de Administração de Banco de Dados;<br>
            </li>
            <br>
            <li>
                Projeto Integrador Assistente de desenvolvimento de sistemas Full Stack.<br>
            </li>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <footer>
        <h2 class="rodape">Desenvolvido por Ricardo Henrique</h2>
    </footer>
</body>

</html>