<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../paginas/cssPaginaTecInf/style.css">
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

    <img src="../img/pagamentoTecTI.png" alt="Pagamento" class="ajustando_media">
    <div align="center">
        <h2 class="valor">R$ 10,435.65</h2>
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
    <p>
        Você busca uma oportunidade de inserção no mercado de trabalho? A área de Informática fascina você? Gostaria de
        agregar conhecimentos fundamentais para os mais diversos segmentos profissionais? Se as respostas forem sim, o
        curso Técnico em Informática do Senac-RS foi feito para você!<br>
        <br>
        A formação vai te preparar para fazer o planejamento e pela execução dos processos de manutenção de computadores
        e pela operação de redes locais de computadores. Além de, desenvolver aplicativos computacionais, adotando
        normas técnicas, de qualidade, de saúde, de segurança do trabalho e preservação ambiental no desempenho de sua
        função.<br>
        <br>
        Por meio de uma proposta pedagógica adequada às exigências do mundo profissional, o curso oferece nos momentos
        presenciais* uma aprendizagem pautada por metodologias que propiciam atuação por projetos, aulas práticas,
        teóricas, vivenciais e flexíveis com foco no mercado de trabalho. Mas também, momentos mediados por
        tecnologia**, em uma plataforma educacional própria, com conteúdos produzidos por tutores altamente
        qualificados. Ambos os modos estimulam você a experimentar habilidades necessárias para os profissionais do
        futuro.<br>
        <br>
        Acompanhe a distribuição da carga-horária do currículo:<br>
        <br>
        Total de horas do curso: 1.200h<br>
        <br>
        - Momentos presenciais*: 996h<br>
        <br>
        - Momentos mediados por tecnologias com tutoria ativa**: 204h (no formato EAD - Educação a Distância)<br>
        <br>
        Ao final da formação você estará apto a atuar em empresas de diversos segmentos, além de poder participar de
        concursos em organizações públicas.<br>
        <br>
        Gostou da ideia de ser um profissional completo da área de Informática? Venha para o curso Técnico em
        Informática e mude de vida.
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
                Planejar e executar a montagem de computadores; <br>
            </li>
            <br>
            <li>
                Planejar e executar a instalação de hardware e software para computadores; <br>
            </li>
            <br>
            <li>
                Planejar e executar a manutenção de computadores; <br>
            </li>
            <br>
            <li>
                Planejar e executar a instalação de redes locais de computadores;<br>
            </li>
            <br>
            <li>
                Planejar e executar a manutenção de redes locais de computadores; <br>
            </li>
            <br>
            <li>
                Planejar e executar a instalação, a configuração e o monitoramento de sistemas operacionais de redes
                locais
                (servidores); <br>
            </li>
            <br>
            <li>
                Conceber, analisar e planejar o desenvolvimento de software; <br>
            </li>
            <br>
            <li>
                Executar os processos de codificação, manutenção e documentação de aplicativos computacionais para
                desktop;
                <br>
            </li>
            <br>
            <li>
                Executar os processos de codificação, manutenção e documentação de aplicativos computacionais para
                dispositivos móveis; <br>
            </li>
            <br>
            <li>
                Executar os processos de codificação, manutenção e documentação de aplicativos computacionais para
                internet;
                <br>
            </li>
            <br>
            <li>
                Executar teste e implantação de aplicativos computacionais; <br>
            </li>
            <br>
            <li>
                Desenvolver e organizar elementos estruturais de sites; <br>
            </li>
            <br>
            <li>
                Manipular e otimizar imagens vetoriais, bitmaps gráficos e elementos visuais de navegação para web. <br>
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