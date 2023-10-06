<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../paginas/cssPaginaAprendizagem/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../img/iconeAba.png">
    <title>Senac-RS</title>
</head>

<body>
   
    <img src="../img/parteCimaAprendiz.png" alt="Logo Aprendiz" title="Logo Aprendiz" class="removendo_propaganda_1">
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
    <br>
    <br>
    <div class="ajustando_margin_media">
        <h1>Jovem Aprendiz Senac: saiba tudo sobre o Programa</h1>
        <p>
            Você já deve ter ouvido falar em Jovem Aprendiz, Aprendizagem ou Menor Aprendiz.<br> O Jovem Aprendiz é
            reconhecido
            no Brasil por ser a primeira oportunidade para muitos, <br>a porta de entrada no mundo profissional.<br>
            <br>
            E se você deseja ser um Jovem Aprendiz, mas não sabe nem por onde começar, <br>este post é ideal para você.
            Leia
            até
            o final e não perca a chance de mudar a sua vida com o <br>Programa Jovem Aprendiz do Senac.
        </p>
        <br>
        <br>
        <h2>O que eu preciso para ser um Jovem Aprendiz?</h2>
        <div class="img">
            <img src="../img/tiaOlhandoProCeu.jpg" alt="Tia olhando pro nada" class="ajustando_propagandas">
        </div>
        <p>
            O processo de seleção é relativamente simples: para ser um Jovem Aprendiz, o interessado deve enviar seu<br>
            currículo para uma empresa que tenha oportunidades para aprendizes, assim como ocorre em processos
            seletivos<br>
            para estágio ou até mesmo empregos. São as empresas que contratam os aprendizes e os encaminham para o<br>
            curso de Aprendizagem no Senac, ou seja, o aluno não tem vínculo empregatício com o Senac.<br>
            <br>
            Por que acontece dessa forma? Há uma lei no Brasil chamada de Lei da Aprendizagem e, de acordo com ela,
            todas<br>
            as empresas de médio e grande porte devem contratar um número de aprendizes equivalente a um mínimo de 5% e
            um<br>
            máximo de 15% do seu quadro de funcionários cujas funções exijam formação profissional. Por isso as
            empresas<br>
            respondem pelo processo seletivo do estudante.
        </p>
        <br>
        <br>
        <h2>Eu posso me inscrever no Jovem Aprendiz direto no Senac?</h2>
        <p>
            Não, o Senac não matricula os alunos de forma individual no Programa. O que acontece é que algumas
            empresas<br>
            pedem, às escolas do Senac, indicações de pessoas interessadas no Jovem Aprendiz. Então, quando o aluno vai
            na<br>
            escola, o Senac pode indicar uma empresa que esteja contratando aprendizes. Mas quem realiza o processo
            seletivo<br>
            do aprendiz é a empresa contratante, e não o Senac.
        </p>
        <br>
        <br>
        <h2>Onde eu posso encontrar uma vaga de Jovem Aprendiz?</h2>
        <p>
            Você pode entrar em contato com o Senac da sua cidade e perguntar se a escola conhece empresas interessadas
            em<br>
            contratar aprendizes. Você também pode buscar vagas para Jovem Aprendiz diretamente nos sites das empresas
            da<br>
            sua região, ou em sites que divulgam vagas, como o Vagas.com.
        </p>
        <br>
        <br>
        <h2>Eu preciso estar estudando para ser Jovem Aprendiz?</h2>
        <p>
            Sim. Um dos requisitos para ser aprendiz é estar frequentando a escola regular (ensino fundamental ou médio)
            ou<br>
            ter concluído o Ensino Médio.
        </p>
        <br>
        <br>
        <h2>Qual a idade para participar do Programa Jovem Aprendiz?</h2>
        <p>
            Para ser Jovem Aprendiz é preciso ter entre 14 e 24 anos incompletos*, estar cursando escola regular ou
            ter<br>
            concluído o Ensino Médio e ser contratado por uma empresa como Jovem Aprendiz.<br>
            <br>
            Os pré-requisitos não se aplicam para pessoas com deficiência, que podem ingressar na Aprendizagem em
            qualquer<br>
            idade.
        </p>
        <br>
        <br>
        <h2>
            Quantas horas trabalha um Jovem Aprendiz?</h2>
        <p>
            A empresa que contrata o aprendiz deve assinar sua carteira. Portanto, o aprendiz tem direito a férias,
            13º<br>
            salário, previdência social, vale-transporte, FGTS, e demais benefícios. Ele também recebe o salário
            mínimo/hora<br>
            e vale transporte durante a qualificação.
        </p>
        <br>
        <br>
        <h2>
            Depois que acabar o curso Jovem Aprendiz, o aluno pode continuar na empresa?</h2>
        <p>
            O fato de você ser um aprendiz não garante uma contratação após o término do Programa pela empresa. Mas
            muitas<br>
            empresas promovem os aprendizes a empregados. Isso vai depender de uma série de fatores como a
            disponibilidade<br>
            de vagas mas, principalmente, do quanto você foi um profissional dedicado e aproveitou a oportunidade
            como<br>
            aprendiz para aprender e contribuir com a empresa.
        </p>
        <br>
        <br>
        <h2>
            Jovem Aprendiz e estágio são a mesma coisa?</h2>
        <p>
            Ambos têm como objetivo inserir pessoas no mercado de trabalho, mas são propostas diferentes. O Aprendiz
            tem<br>
            carteira de trabalho assinada, o que garante todos os benefícios, já o estagiário não tem vínculo
            empregatício.<br>
            Fazer um ou outro depende do seu objetivo.
        </p>
        <br>
        <br>
        <h2>
            Como eu posso me dar bem em um processo seletivo para Jovem Aprendiz?</h2>
        <p>
            Se você está pensando em participar de um processo seletivo em alguma empresa, precisa entender que é
            preciso
            se<br>
            preparar. A professora do Senac Comunidade Juliana Alves dá algumas dicas:<br>
            <br>
            – Apresentação pessoal: você deve vestir uma roupa condizente com o ambiente profissional;<br>
            <br>
            – Autoconfiança e comunicação: treine em casa uma apresentação, estude sobre a empresa;<br>
            <br>
            – Currículo: currículo bem escrito, sem erros de português, é parte importante do processo.
        </p>
        <br>
        <br>
        <h2>
            Depois de contratado como Jovem Aprendiz, como buscar uma contratação efetiva?</h2>
        <p>
            Docente há mais de 12 anos, Mônica Blume Krapp do Senac Santa Rosa resume as principais características
            que<br>
            fazem o Aprendiz se destacar:<br>
            <br>
            – Seja comprometido;<br>
            <br>
            – Dedique-se;<br>
            <br>
            – Tenha disposição em aprender;<br>
            <br>
            – Mostre diariamente “a que veio”;<br>
            <br>
            – Faça a empresa acreditar que realizou a escolha certa;<br>
            <br>
            – Mostre seu potencial com comprometimento, responsabilidade, trabalho em equipe, ética, empatia, e
            tenha<br>
            confiança no desempenho das tarefas mais simples até as mais complicadas;<br>
            <br>
            – Enfim, busque ajudar a empresa a crescer.
        </p>
        <br>
        <br>
        <h2>
            Quais são as maiores dificuldades dos Jovens Aprendizes?</h2>
        <div class="img">
            <img src="../img/tiaMorenaRindo.jpg" alt="Tia morena rindo" class="ajustando_propagandas">
        </div>
        <br>
        <p>
            As docentes Juliana e Mônica apontam que vencer a timidez é uma das maiores dificuldades dos alunos do curso
            de<br>
            Aprendizagem. Outra questão apontada por ambas é a dificuldade de se vestir de acordo com o ambiente de<br>
            trabalho.<br>
            <br>
            “Os aprendizes chegam com dificuldades de comunicação e oratória em público, e por vezes, estão muito
            viciados<br>
            em gírias que precisam se desconstruir. Outro ponto é a apresentação pessoal visto que as roupas
            informais,<br>
            ideais para usarmos com os amigos, às vezes não são as mais apropriadas para o ambiente profissional ondev
            estamos representando a empresa”, explica Juliana.
        </p>
        <br>
        <br>
        <h2>
            Para vencer essa barreira da timidez, não faltam atividades no Senac:
        </h2>
        <p>
            “A prioridade das aulas é fazer o aprendiz se sentir confortável, seguro de seu potencial e ter confiança em
            si<br>
            e em nossos docentes. Ele consegue sentir isso desde o momento da recepção até o convívio com os colegas e
            as<br>
            dinâmicas de grupo realizadas em sala para uma maior integração e liberdade de expressão”, diz Mônica.
        </p>
        <br>
        <br>
        <h2>
            Use a internet e o celular a seu favor e não contra!
        </h2>
        <div class="img">
            <img src="../img/tiaOlhandoCelular.jpg" alt="Tia olhando celular" class="ajustando_propagandas">
        </div>
        <p>
            A docente Juliana ainda detalha que a internet é um dos grandes trunfos dos jovens para o mercado de
            trabalho,<br>
            uma vez que estar ligado nas tendências e na utilidade das tecnologias é vantajoso e até prepara para as<br>
            adaptações frente aos desafios do mercado de trabalho.<br>
            <br>
            “Ao fazer a entrevista, algumas empresas propõem desafios de vender produtos aos jovens. E muitos desses
            alunos<br>
            relatam que se inspiraram em influencers que conheceram na internet para fazer a dinâmica”, conta
            Juliana.<br>
            <br>
            No entanto, da mesma forma que a tecnologia auxiliar ela também pode atrapalhar, como o uso do celular.
            “Apesar<br>
            de entender que a utilização das tecnologias é algo positivo, o equilíbrio na utilização é fundamental!
            Durante<br>
            o trabalho, precisamos de foco e determinação, contudo, é difícil focar para muitos jovens quando o
            “whatsapp”<br>
            notifica a todo o momento”.
        </p>
        <br>
        <br>
        <h2>
            Para finalizar, enfrente os desafios e busque uma contratação efetiva!
        </h2>
        <p>
            Não há fórmula mágica para conseguir uma vaga de aprendizagem, muito menos para crescer profissionalmente
            na<br>
            empresa. Mas os professores ressaltam sempre que é preciso ter dedicação e levar a sério as
            oportunidades.<br>
            Afinal, pense: mesmo que você não seja contratado ali, naquela empresa onde está trabalhando, há muitos
            colegas<br>
            que estão vendo o seu trabalho e que podem te indicar para outras oportunidades, não é mesmo? E, acima de
            tudo,<br>
            lembre-se que você é um aprendiz e esse é o momento de errar para aprender.<br>
            <br>
            “Alguns aprendizes têm receio de enfrentar os desafios, chegando a fugir das propostas das lideranças e
            dos<br>
            docentes do Senac, então, a principal dica que eu dou é: se permita aprender! É possível aprender o tempo
            todo,<br>
            seja trabalhando em equipe, seja apresentando um trabalho e até mesmo atendendo um cliente. Quando você
            se<br>
            permite aprender, você cresce profissionalmente. Por meio dessas pequenas chances que “portas podem se
            abrir”,<br>
            garantindo seu espaço no mercado!”, conclui Juliana.
        </p>
        <br>
        <br>
        <div class="img">
            <img src="../img/anuncioAprendiz.png" alt="Anuncio" class="ajustando_propagandas">
        </div>
        <br>
        <br>
        <div class="img">
            <a href="https://bit.ly/3xiOuGp"><img src="../img/botaoAprendiz.png" alt="Botao" ajustando_propagandas></a>
        </div>
        <br>
        <br>
    </div>
    <footer>
        <h2 class="rodape">Desenvolvido por Ricardo Henrique</h2>
    </footer>
</body>

</html>