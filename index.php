<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../img/iconeAba.png">
    <title>Senac-RS</title>
</head>

<body>
    <div>
        <header id="login">
            <?php
            if (isset($_SESSION['nome_usu_sessao'])) {
                echo 'Olá '
                    . $_SESSION['nome_usu_sessao'] . ', tudo certinho? Seja bem vindo';
                echo "<a href='./index.php?logout'><br>Logout</a>";
            } else {
                echo "<a href='./paginas/cssPaginaLogin/login.php'>
			Acessar sistema
			</a>";
            }
            if (isset($_GET['logout'])) {
                session_destroy();
                header("Location: ./index.php");
            }
            ?>
        </header>
        <img src="img/senac_logo_new_gr.png" alt="Logo Senac" class="senacLogo">

        <div class="redesSociais">
            <a href="http://www.facebook.com/senacrsoficial"><img src="img/icon_facebook.png" alt="Logo facebook"
                    class="redesSociaisImg"></a>
            <a href="https://www.instagram.com/"><img src="img/icon_instagram.png" alt="Logo instagram"
                    class="redesSociaisImg"></a>
            <a href="https://pt.linkedin.com/company/senac-rs/"><img src="img/icon_linkedin.png" alt="Logo linkedin"
                    class="redesSociaisImg"></a>
            <a href="https://twitter.com/senacrs"><img src="img/icon_twitter.png" alt="Logo twitter"
                    class="redesSociaisImg"></a>
            <a href="http://bit.ly/spotifysenacrs"><img src="img/icon_spotify.png" alt="Logo spotify"
                    class="redesSociaisImg"></a>
            <a href="http://www.youtube.com/senacrsoficial"><img src="img/icon_youtube.png" alt="Logo youtube"
                    class="redesSociaisImg"></a>
        </div>
    </div>

    <section>
        <input type="checkbox" id="bt_menu">
        <label for="bt_menu">&#9776;</label>
        <nav id="menu">
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="paginas/paginaCursos.php">Cursos</a></li>
                <li><a href="paginas/paginaLocalização.php">Localização</a></li>
                <li><a href="paginas/paginaLocalização.php">Fale Conosco</a></li>
                <li><a href="paginas/paginaCadastro.php">Cadastro</a></li>
            </ul>
        </nav>
    </section>
    <img src="img/senac_frente_do_predio.jpg" alt="Propaganda" class="propaganda_senac">
    <br>
    <br>
    <div class="alinhamento_dos_saiba_mais" id="menu_saiba_mais">
        <div class="saiba_mais">
            <img src="img/cursos_livres.png" alt="Cursos Livres">
            <a href="https://www.senacrs.com.br/cursos/livres">
                <h3>Cursos Livres</h3>
                <br>
                <p style="color: black;"> Capacitações em 18 áreas do<br>
                    conhecimento, com rápida inserção no<br>
                    mercado profissional. </p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p>Saiba mais</p>
            </a>
        </div>
        <div class="saiba_mais">
            <img src="img/ensino_medio.png" alt="Cursos Livres">
            <a href="https://www.senacrs.com.br/hotsite/ensinomedio/index.php">
                <h3>Ensino Medio</h3>
                <br>
                <p style="color: black;"> Com metodologia integrada ao Técnico<br>
                    em Informática para Internet, o Ensino<br>
                    Médio Senac oportuniza uma vivência<br>
                    educacional desafiadora, preparando o<br>
                    estudante para o ENEM, vestibular e o<br>
                    mundo do trabalho. </p>
                <br>
                <br>
                <br>
                <br>
                <p>Saiba mais</p>
            </a>
        </div>
        <div class="saiba_mais">
            <img src="img/cursos_livres.png" alt="Cursos Livres">
            <a href="https://www.senacrs.com.br/cursos/tecnicos">
                <h3>Cursos Tecnicos</h3>
                <br>
                <p style="color: black;"> Adequados às exigências do mundo<br>
                    profissional, os cursos Técnicos são<br>
                    focados na aprendizagem prática. </p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p>Saiba mais</p>
            </a>
        </div>
        <div class="saiba_mais">
            <img src="img/graduacao.png" alt="Cursos Livres">
            <a href="https://www.senacrs.com.br/cursos/graduacao">
                <h3>Graduacao</h3>
                <br>
                <p style="color: black;"> Cursos tecnólogos e de bacharelado<br>
                    com qualidade reconhecida pelo MEC,<br>
                    certificações intermediárias e 95% de<br>
                    satisfação dos alunos. </p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p>Saiba mais</p>
            </a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <h1>&nbsp&nbsp&nbsp&nbsp#depoimentos</h1>
    <br>
    <br>
    <br>
    <br>
    <h2 class="depoimentosTitulo">Betina Farah</h2>
    <br>
    <p class="depoimentosConteudo">
        <img src="img/tia1.png" alt="Betina Farah" align="right">
        &nbsp&nbsp&nbsp&nbspA Thais sempre teve muito interesse pela culinária e, recentemente, procuramos o Senac para
        proporcionar a
        ela o tão sonhado curso de culinária! Desde o primeiro contato fomos muito bem recebidas, agendamos uma
        visita e a acolhida &nbsp&nbsp&nbsp&nbspfoi positiva, nos sentimos muito seguras com todo o carinho e atenção
        recebidos. A Thais
        adorou participar do curso. A cada dia que retornava das aulas estava mais interessada e animada. Essa
        experiência está sendo muito importante &nbsp&nbsp&nbsp&nbsppara autoestima, desenvolvimento e autoconfiança da
        Thais. Gostaria
        de parabenizar a toda equipe do Senac Santa Cruz do Sul pelo excelente atendimento, equipe TOP!
    </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="depoimentosTitulo">Caren Michele Arce Gonçalves</h2>
    <br>
    <p class="depoimentosConteudo">
        <img src="img/tia2.png" alt="Caren Michele Arce Gonçalves " align="left">
        Quero agradecer pela oportunidade de estagiar no posto de saúde e à equipe de professores que temos no
        Senac. A cada dia no estágio tínhamos mais certeza da importância das aulas teóricas da professora Aurélia,
        com todas as diretrizes do SUS e direito das mulheres, crianças, adolescentes e idosos. A profª Franciele,
        com a ética profissional e prontuários; a profª Vanessa, com as injetáveis, diluição e farmacologia e o
        profº José, com as aulas práticas no laboratório. Citei apenas alguns, pois sei há mais pessoas que sempre
        lutam para formar profissionais excelentes. Assim, agradeço a nossa coordenadora, a professora Fernanda,
        pelo apoio. Obrigada ao Senac por estar nos proporcionando um ensino de qualidade"
    </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="depoimentosTitulo">Franciele Nunes da Silva Ferreira Kolling</h2>
    <br>
    <p class="depoimentosConteudo">
        <img src="img/franciele.png" alt="Franciele Nunes da Silva Ferreira Kolling" align="right">
        &nbsp&nbsp&nbsp&nbspO curso de Extensão de Cílios me deu a oportunidade de trabalhar no ramo da beleza. Na
        capacitação, aprendi
        as principais técnicas que me deram segurança para iniciar neste ramo com confiança e prática, já que no
        próprio curso &nbsp&nbsp&nbsp&nbspaplicamos na prática o que nos é ensinado na parte teórica. É um ótimo curso
        para quem deseja
        trabalhar no ramo da beleza, que vem crescendo cada dia mais.
    </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="depoimentosTitulo">Jéssica Pereira</h2>
    <br>
    <p class="depoimentosConteudo">
        <img src="img/jessica.png" alt="Jéssica Pereira" align="left">
        Comecei meu curso de Técnico Segurança do Trabalho em 2018. Foram dois anos de uma experiência inesquecível.
        Graças as aulas teóricas e práticas, hoje estou bem colocada no mercado de trabalho e apaixonada pela minha
        profissão. Sou extremamente grata por tudo que vivi no Senac e a todos que fizeram parte desse sonho!
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
    <h3 class="sobreSenac"> &nbsp&nbsp&nbsp&nbspSOBRE O SENAC RS&nbsp&nbsp&nbsp&nbsp<img
            src="../senacSiteAlternativo/img/iconeDepoimentos.png"></h3>
    <p class="sobreSenacConteudo"> O Serviço Nacional de Aprendizagem Comercial – Senac é uma instituição de educação
        profissional, fundada em
        10 de janeiro de 1946 com o objetivo de colaborar na obra, difusão e aperfeiçoamento do ensino profissional
        no setor terciário. No Rio Grande do Sul, o Senac foi instalado em 13 de setembro do mesmo ano e nos mais de
        70 anos de atuação já capacitou mais de 8 milhões de gaúchos. A instituição cumpre a importante missão de
        educar para o trabalho em atividades do comércio de bens, serviços e turismo. O Senac-RS faz parte da
        Federação do Comércio de Bens e Serviços do Rio Grande do Sul – Fecomércio-RS, o que vincula a entidade ao
        mundo do trabalho por meio de 530 mil empresas do comércio de bens, serviços e turismo – que geram um milhão
        de empregos formais.
        <br>
        <br>
        O Senac-RS disponibiliza educação em todos os níveis – do Menor Aprendiz à Pós-Graduação. Atualmente, a
        entidade conta com duas faculdades – Faculdade Senac Porto e Faculdade de Tecnologia Senac Pelotas, e mais
        de 60 postos de atendimento, entre escolas e unidades, que possibilitam o Senac atender a todos os 497
        municípios gaúchos.
        <br>
        <br>
        Muito antes de se falar em responsabilidade social, o Senac já exercia, na prática, a inclusão social ao
        preparar menores aprendizes para o mundo do trabalho. Mais do que ser a sua razão de existir, o Menor
        Aprendiz é a prova da importância e contribuição da Instituição para a educação profissional brasileira.
        Vinculados ao programa Jovem Aprendiz, por meio da Lei Federal 10.097/200 e Decreto nº 5598/2005, os cursos
        de Aprendizagem Comercial, oferecidos gratuitamente pelo Senac-RS, envolvem os alunos em aulas que variam de
        1.100 a 1.200 horas de atividades curriculares, das quais metade se referem à capacitação teórica e a outra
        metade à prática supervisionada (realizada nas dependências da empresa).
        <br>
        <br>
        O Programa Senac de Gratuidade (PSG), resultado de um acordo entre o Senac e o Governo Federal em 2008,
        significa educação profissional de qualidade para que milhares de pessoas possam planejar seus estudos e ter
        mais oportunidade de trabalho e emprego. O PSG oferece cursos de Aprendizagem, cursos de nível técnico,
        qualificação técnica, cursos de capacitação e aperfeiçoamento, totalizando mais de 10 mil alunos atendidos
        gratuitamente nas unidades educacionais do Estado. Para ter acesso a esses cursos, os candidatos deverão
        atender aos seguintes critérios: pessoas com baixa renda, na condição de alunos matriculados ou egressos da
        educação básica e trabalhadores – empregados ou desempregados-, priorizando-se aqueles que satisfizerem as
        duas condições (aluno e trabalhador). Além disso, a Instituição desenvolve diversos projetos sociais em
        parceria com empresas e organização não-governamentais (ONG´s).
        <br>
        <br>
        Considerando a rapidez das informações e do desenvolvimento tecnológico, o Senac oferece cursos de
        capacitação em horários alternativos, aplicando metodologias diferenciadas e personalizadas, laboratórios de
        alta tecnologia, atendimentos individualizados em ambientes modernos e confortáveis. Nos diversos níveis de
        capacitação, através de aulas presenciais ou à distância, o modelo pedagógico está baseado na apropriação de
        competências para o trabalho. O Senac propõe a qualificação de um indivíduo capaz de articular
        conhecimentos, habilidades e atitudes com o objetivo de agir, decidir e intervir em situações nem sempre
        previstas dentro e fora do mundo do trabalho, promovendo a construção da cidadania.
    </p>
    <br>
    <br>
    <h3 class="sobreSenac">&nbsp&nbsp&nbsp&nbspSOBRE O SISTEMA FECOMÉRCIO RS&nbsp&nbsp&nbsp&nbsp<img
            src="../senacSiteAlternativo/img/iconeDepoimentos.png"></h3>
    <p class="sobreSenacConteudo"> Presente em todos os pontos do Rio Grande do Sul, o Sistema Fecomércio-RS (Federação
        do Comércio de Bens e
        de Serviços do Estado do RS) utiliza sua força política e institucional em prol da comunidade gaúcha.
        <br>
        <br>
        Opera com representatividade na defesa dos empresários do comércio de bens, serviços e turismo, promovendo o
        empreendedorismo e o desenvolvimento de 530 mil estabelecimentos, responsáveis por aproximadamente 1,5
        milhão de empregos formais no Estado.
        <br>
        <br>
        O Sistema Fecomércio-RS conta com 100 sindicatos empresariais em sua base para subsidiar e intensificar suas
        ações. Gerencia ainda o Sesc/RS e o Senac-RS, com mais de uma centena de Unidades Operacionais no Estado,
        proporcionando ações na área de bem-estar social e qualificação profissional a milhares de gaúchos.
    </p>
    <br>
    <h3 class="sobreSenac">&nbsp&nbsp&nbsp&nbspBandeiras defendidas pela Fecomércio RS&nbsp&nbsp&nbsp&nbsp<img
            src="../senacSiteAlternativo/img/iconeDepoimentos.png"></h3>
    <p class="sobreSenacConteudo"> • Gestão pública eficiente e eficaz<br>
        • Racionalização dos tributos<br>
        • Modernização da relação capital e trabalho<br>
        • Formalização e longevidade das empresas<br>
        • Educação de qualidade e bem-estar social<br>
    </p>
    <br>
    <br>
    <a href="https://www.senacrs.com.br/"><img src="img/propaganda2remove.png" alt="Propaganda 2"
            class="propagando_senac_2"></a>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </div>
    <footer>
        <div>
            <h2 class="rodape">Desenvolvido por Ricardo Henrique</h2>
        </div>
    </footer>
</body>

</html>