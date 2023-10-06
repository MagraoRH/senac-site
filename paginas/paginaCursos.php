<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../paginas/cssPaginaCursos/style.css">
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
    <img src="../img/propagandaCursos.png" alt="Cursos" class="removendo_imagem">
    <br>
    <br>
    <br>
    <br>
    <div class="margin_meta">
        <h1 class="tituloCursos">&nbsp&nbsp&nbsp&nbspCursos Principais do Senac</h1>
        <br>
        <br>
        <ul class="conteudoCursos">
            <br>
            <li>
                <h3 class="tituloCursos">Tecnico em Desenvolvimento de Sistemas</h3><br>
                <p>Você busca uma oportunidade de inserção no mercado de trabalho? A área de Desenvolvimento de Sistemas
                    fascina você? Gostaria de agregar conhecimentos fundamentais para os mais diversos segmentos
                    profissionais? Se as respostas forem sim, o curso Técnico em Desenvolvimento de Sistemas do Senac-RS
                    foi feito para você! </p><br>
                <a href="paginaTecDesenSis.php">
                    <p>Saiba mais --></p><br>
                </a>
            </li>
            <li>
                <h3 class="tituloCursos">Tecnico em Informatica</h3><br>
                <p>A formação vai te preparar para fazer o planejamento e pela execução dos processos de manutenção de
                    computadores e pela operação de redes locais de computadores. Além de, desenvolver aplicativos
                    computacionais, adotando normas técnicas, de qualidade, de saúde, de segurança do trabalho e
                    preservação ambiental no desempenho de sua função. </p><br>
                <a href="paginaTecTI.php">
                    <p>Saiba mais --></p><br>
                </a>
            </li>
            <li>
                <h3 class="tituloCursos">Tecnico em Administração</h3><br>
                <p>A formação vai te preparar para desempenhar funções voltadas para a gestão de pessoas, operações
                    logísticas, gestão de materiais e patrimônio, marketing, vendas, finanças, entre outros. </p><br>
                <a href="../paginas/paginaCursosTecAdmin.php">
                    <p>Saiba mais --></p><br>
                </a>
            </li>
            <li>
                <h3 class="tituloCursos">Programa RS TI</h3><br>
                <p>O Programa RS TI foi desenvolvido pelo Senac-RS com o objetivo de capacitar pessoas para atuarem no
                    mercado de Tecnologia da Informação do Rio Grande do Sul, a fim de desenvolver habilidades técnicas
                    necessárias para atuação como Desenvolvedores de Software.</p><br>
                <a href="paginaProgramaRsTi.php">
                    <p>Saiba mais --></p><br>
                </a>
            </li>
            <li>
                <h3 class="tituloCursos">Aprendizagem</h3><br>
                <p>
                    O processo de seleção é relativamente simples: para ser um Jovem Aprendiz, o interessado deve enviar
                    seu currículo para uma empresa que tenha oportunidades para aprendizes, assim como ocorre em
                    processos seletivos para estágio ou até mesmo empregos. São as empresas que contratam os aprendizes
                    e os encaminham para o curso de Aprendizagem no Senac, ou seja, o aluno não tem vínculo empregatício
                    com o Senac.
                </p><br>
                <a href="paginaAprendizagem.php">
                    <p>Saiba mais --></p><br>
                </a>
            </li>
        </ul>
        <br>
        <br>
        <br>
        <br>
        <h1 class="tituloCursos">&nbsp&nbsp&nbsp&nbspOutros Cursos</h1>
        <br>
        <br>
        <ul class="conteudoCursos">
            <br>
            <li>
                <h3 class="tituloCursos">Fotografia Digital</h3><br>
                <p>Na formação, composta de 48 horas, você vai aprender a trabalhar com diferentes modelos de
                    câmeras, a configurar o ângulo e fazer ajustes de profundidade, reflexos, composições
                    fotográficas e muito mais. </p><br>
                <a href="">
                    <p>Valor R$ 548,43</p><br>
                </a>
            </li>
            <li>
                <h3 class="tituloCursos">Alongamento de unhas</h3><br>
                <p>O curso de Alongamento de Unhas é uma excelente opção para quem busca por atualização, já que
                    a técnica é cada vez mais demandada por clientes que querem as tão desejadas unhas
                    compridas. A formação apresenta noções completas de aplicação em variadas formas de alongar
                    unhas em gel, acrílico e fibra de vidro, sendo focada na demonstração e na prática,
                    facilitando a forma de aprendizagem. </p><br>
                <a href="">
                    <p>Valor R$ 645,89</p><br>
                </a>
            </li>
            <li>
                <h3 class="tituloCursos">Alta Performance em Vendas</h3><br>
                <p>Você quer encantar seus clientes e atingir as suas metas? O curso de Alta
                    Performance em
                    Vendas é uma excelente opção para quem deseja atuar no comércio, podendo desenvolver seu
                    potencial em vendas e desfrutar de todas as suas habilidades pessoais para a aplicação de
                    técnicas de vendas de alta performance, aumentando seu potencial no ambiente de trabalho e
                    atingindo resultados superiores nas vendas. </p><br>
                <a href="">
                    <p>Valor R$ 765,43</p><br>
                </a>
            </li>
            <li>
                <h3 class="tituloCursos">Desing Grafico</h3><br>
                <p>Durante a capacitação você saberá criar peças gráficas com o CorelDRAW e
                    Illustrator,
                    preparar arquivos para impressão, montar, editar, manipular e tratar imagens no Photoshop.
                    Além disso, você também irá produzir publicações para saída eletrônica ou impressa com o
                    InDesign, e, por fim, irá planejar e criar peças gráficas com inovação, estética e
                    funcionalidade, considerando as características do projeto que o cliente deseja. </p><br>
                <a href="">
                    <p>Valor R$ 1890,34</p><br>
                </a>
            </li>
            <li>
                <h3 class="tituloCursos">Unreal Engine</h3><br>
                <p>A Unreal Engine está entre as principais ferramentas de motores de jogos do
                    mundo. É
                    utilizada por grandes desenvolvedoras e, principalmente no Brasil tem grande espaço para
                    produção profissional e independente. O curso de Unreal Engine prepara o aluno para conhecer
                    profundamente a ferramenta do motor de jogo, além de aprender lógica de programação e
                    utilização de blueprints para programação de jogos dentro da Unreal, construindo jogos em
                    duas e três dimensões, utilizando assets de animações, modelos 3D, imagens, sons e vídeo,
                    respeitando os gêneros consagrados pelo mercado com inovação, jogabilidade e estética.
                </p><br>
                <a href="">
                    <p>Valor R$ 675,45</p><br>
                </a>
            </li>
            <li>
                <h3 class="tituloCursos">Redação para Enem e Vestibulares</h3><br>
                <p>Você quer aprender a fazer uma excelente redação para o Enem ou Vestibulares?
                    Para isso é
                    muito importante praticar a escrita e entender como se cria um roteiro de redação. O curso
                    de Redação para Enem e Vestibulares com carga horária de 36 horas, vai te ensinar a conhecer
                    e identificar os limites estruturais do texto dissertativo-argumentativo, exercitar o
                    domínio da modalidade de escrita forma da língua portuguesa na construção do texto
                    dissertativo-argumentativo, compreender propostas de redação de diferentes instituições de
                    Ensino Superior, aplicar conceitos de diversas áreas de conhecimento para desenvolver o tem,
                    selecionar, relacionar, organizar e interpretar informações, fatos, opiniões e argumentos, a
                    fim de defender um ponto de vista e a aplicar o conhecimento de mecanismos linguísticos para
                    a construção da argumentação. Faça o curso Redação para Enem e Vestibulares do Senac-RS e
                    busque uma boa colocação em concursos em especial, no ENEM</p><br>
                <a href="">
                    <p>Valor R$ 349,20</p><br>
                </a>
            </li>
            <li>
                <h3 class="tituloCursos">Comunicação em Francês</h3><br>
                <p>Comunicação em Francês 1 é um curso para jovens e adultos, em que você aprende a
                    se comunicar
                    em francês em diversas situações do seu cotidiano, de trabalho e de lazer. O uso da
                    tecnologia dentro e fora da sala de aula e a metodologia que prioriza a conversação desde a
                    primeira aula fará com que você se desenvolva, evolua e fale francês com confiança!
                </p><br>
                <a href="">
                    <p>Valor R$ 658,32</p><br>
                </a>
            </li>
            <li>
                <h3 class="tituloCursos">Introdução a Ergonomia</h3><br>
                <p>As alterações impostas na NR-01 e NR-17 no último ano, trouxeram desafios tanto as
                    empresas,
                    quanto aos profissionais que trabalham com essas normas. As mudanças na legislação em saúde
                    e segurança do trabalho se refletem na necessidade de capacitação deste público. Desse modo,
                    o presente curso traz em sua abordagem a apresentação da Ergonomia para que os profissionais
                    possam implementar as normas NR-01 e NR-17.
                </p><br>
                <a href="">
                    <p>Valor R$ 670,32</p><br>
                </a>
            </li>
        </ul>
    </div>
    <footer>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2 class="rodape">Desenvolvido por Ricardo Henrique</h2>
    </footer>
    </div>
</body>

</html>