<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../paginas/cssPaginaTecAdm/style.css">
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

    <img src="../img/tecnicoAdministração.png" alt="Pagamento" class="ajustando_media">
    <div align="center">
        <h2 class="valor">R$ 11.542,70</h2>
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
        Você busca uma oportunidade de inserção no mercado de trabalho? A área Administrativa fascina você? Gostaria de
        agregar conhecimentos fundamentais para os mais diversos segmentos empresariais? Se as respostas forem sim, o
        curso Técnico em Administração do Senac-RS foi feito para você!<br>
        <br>
        A formação vai te preparar para desempenhar funções voltadas para a gestão de pessoas, operações logísticas,
        gestão de materiais e patrimônio, marketing, vendas, finanças, entre outros.<br>
        <br>
        Por meio de uma proposta pedagógica adequada às exigências do mundo profissional, o curso oferece nos momentos
        presenciais* uma aprendizagem pautada por metodologias que propiciam atuação por projetos, aulas práticas,
        teóricas, vivenciais e flexíveis com foco no mercado de trabalho. Mas também, momentos mediados por
        tecnologia**, em uma plataforma educacional própria, com conteúdo produzido por tutores altamente qualificados.
        Ambos os modos estimulam você a experimentar habilidades necessárias para os profissionais do futuro.<br>
        <br>
        Acompanhe a distribuição da carga-horária do currículo:<br>
        <br>
        Total de horas do curso: 1.000h<br>
        <br>
        - Momentos presenciais*: 844h<br>
        <br>
        - Momentos mediados por tecnologias com tutoria ativa**: 156h (no formato EAD - Educação a Distância)<br>
        <br>
        Ao final da formação você estará apto a atuar em empresas de diversos segmentos, além de poder participar de
        concursos em organizações públicas.<br>
        <br>
        Gostou da ideia de ser um profissional completo da área Administrativa? Venha para o curso Técnico em
        Administração do Senac-RS e mude de vida.<br>
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
                Auxiliar na elaboração, implementação e acompanhamento do planejamento estratégico das organizações;<br>
            </li>
            <br>
            <li>
                Elaborar, organizar e controlar documentos da organização;<br>
            </li>
            <br>
            <li>
                Auxiliar na estruturação e operacionalização de projetos;<br>
            </li>
            <br>
            <li>
                Auxiliar a execução dos procedimentos de recrutamento, seleção e integração de pessoas;<br>
            </li>
            <br>
            <li>
                Apoiar e executar ações pertinentes a desenvolvimento de pessoas, retenção, avaliação de desempenho e
                elaboração de planos de cargos e salários;<br>
            </li>
            <br>
            <li>
                Atuar na organização e execução de ações relacionadas à qualidade de vida, saúde e segurança nos
                ambientes
                de trabalho;<br>
            </li>
            <br>
            <li>
                Apoiar e executar ações referentes às rotinas de admissão e demissão de colaboradores;<br>
            </li>
            <br>
            <li>
                Auxiliar na elaboração da folha de pagamento;<br>
            </li>
            <br>
            <li>
                Auxiliar a execução das ações pertinentes aos processos de gestão de materiais e patrimônio em
                organizações;<br>
            </li>
            <br>
            <li>
                Auxiliar na execução de atividades relacionadas às operações logísticas em organizações.<br>
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