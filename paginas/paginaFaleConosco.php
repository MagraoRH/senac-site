<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../paginas/cssPaginaFaleConosco/style.css">
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
    <div class="faleConoscoConteudo">
        <h2>FALE CONOSCO</h2><br>
        <p>O Senac-RS tem a maior satisfação em atendê-lo.</p>
        <p><strong>Importante:</strong>
            preencha corretamente os campos do formulário a seguir, para que possamos lhe dar um
            retorno.<br>
            Todos os campos são obrigatórios.</p>
        <br>
        <br>
        <div class="alinhando_conteudo">
            <form action="cssPaginaFaleConosco/processa-faleconosco.php" method="post">
                <table>
                    <tbody>
                        <tr> <!-- INICIO LINHA NOME-->
                            <td>
                                <h3><label>Nome Completo:&nbsp</label></h3>
                            </td>
                            <td>
                                <input type="text" name="nome" maxlength="100" size="33" required>
                            </td>
                        </tr><!--FIM LINHA NOME-->
                        <tr> <!-- INICIO LINHA UF-->
                            <td>
                                <h3><label>Estado:&nbsp</label></h3>
                            </td>
                            <td>
                                <select name="estado" required>
                                    <option selected value="">Selecione o Estado</option>
                                    <option value="Acre">Acre</option>
                                    <option value="Alagoas">Alagoas</option>
                                    <option value="Amapá">Amapá</option>
                                    <option value="Amazonas">Amazonas</option>
                                    <option value="Bahia">Bahia</option>
                                    <option value="Ceará">Ceará</option>
                                    <option value="Distrito Federal">Distrito Federal</option>
                                    <option value="Espírito Santo">Espírito Santo</option>
                                    <option value="Goiás">Goiás</option>
                                    <option value="Maranhão">Maranhão</option>
                                    <option value="Mato Grosso">Mato Grosso</option>
                                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                    <option value="Minas Gerais">Minas Gerais</option>
                                    <option value="Pará">Pará</option>
                                    <option value="Paraíba">Paraíba</option>
                                    <option value="Paraná">Paraná</option>
                                    <option value="Pernambuco">Pernambuco</option>
                                    <option value="Piauí">Piauí</option>
                                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                    <option value="Rondônia">Rondônia</option>
                                    <option value="Roraima">Roraima</option>
                                    <option value="Santa Catarina">Santa Catarina</option>
                                    <option value="São Paulo">São Paulo</option>
                                    <option value="Sergipe">Sergipe</option>
                                    <option value="Tocantins">Tocantins</option>
                                </select>
                            </td>
                        </tr><!--FIM LINHA UF-->
                        <tr> <!-- INICIO LINHA CIDADE-->
                            <td>
                                <h3><label>Cidade:&nbsp</label></h3>
                            </td>
                            <td>
                                <select name="cidade" required>
                                    <option selected value="">Selecione a Cidade</option>
                                    <option value="acegua">Aceguá</option>
                                    <option value="aguasanta">Água Santa</option>
                                    <option value="agudo">Agudo</option>
                                    <option value="aguiar">Aguiar</option>
                                    <option value="ajuricaba">Ajuricaba</option>
                                    <option value="alcantara">Alcântara</option>
                                    <option value="alecrim">Alecrim</option>
                                    <option value="alegrete">Alegrete</option>
                                    <option value="alegria">Alegria</option>
                                    <option value="almeida">Almeida</option>
                                    <option value="almirantetamandaredosul">Almirante Tamandaré do Sul</option>
                                    <option value="alpestre">Alpestre</option>
                                    <option value="altoalegre">Alto Alegre</option>
                                    <option value="altofeliz">Alto Feliz</option>
                                    <option value="alvorada">Alvorada</option>
                                    <option value="alvorezinha">Alvorezinha</option>
                                    <option value="asdc">ASDC</option>
                                    <option value="assis">Assis</option>
                                    <option value="augustopestana">Augusto Pestana</option>
                                    <option value="aurea">Áurea</option>
                                    <option value="bage">Bagé</option>
                                    <option value="balneariopinhal">Balneário Pinhal</option>
                                    <option value="barao">Barão</option>
                                    <option value="baraodecotegipe">Barão de Cotegipe</option>
                                    <option value="baraodotriunfo">Barão do Triunfo</option>
                                    <option value="barradoguarita">Barra do Guarita</option>
                                    <option value="barradouro">Barra do Ouro</option>
                                    <option value="barradoquarai">Barra do Quaraí</option>
                                    <option value="barradoribeiro">Barra do Ribeiro</option>
                                    <option value="barradorioazul">Barra do Rio Azul</option>
                                    <option value="barrafunda">Barra Funda</option>
                                    <option value="barracao">Barracão</option>
                                    <option value="barroscassal">Barros Cassal</option>
                                    <option value="belohorizonte">Belo Horizonte</option>
                                    <option value="benjaminconstantdosul">Benjamin Constant do Sul</option>
                                    <option value="bentogoncalves">Bento Gonçalves</option>
                                    <option value="boavistadasmissoes">Boa Vista das Missões</option>
                                    <option value="boavistadoburica">Boa Vista do Buricá</option>
                                    <option value="boavistadocadeado">Boa Vista do Cadeado</option>
                                    <option value="boavistadoincra">Boa Vista do Incra</option>
                                    <option value="boavistadosul">Boa Vista do Sul</option>
                                    <option value="bomjesus">Bom Jesus</option>
                                    <option value="bomprincipio">Bom Princípio</option>
                                    <option value="bomprogresso">Bom Progresso</option>
                                    <option value="bomrepouso">Bom Repouso</option>
                                    <option value="bomretirodosul">Bom Retiro do Sul</option>
                                    <option value="bomsucesso">Bom Sucesso</option>
                                    <option value="boqueiraodoleao">Boqueirão do Leão</option>
                                    <option value="bossoroca">Bossoroca</option>
                                    <option value="bozano">Bozano</option>
                                    <option value="braga">Braga</option>
                                    <option value="brasileira">Brasileira</option>
                                    <option value="brochier">Brochier</option>
                                    <option value="burica">Burica</option>
                                    <option value="butia">Butiá</option>
                                    <option value="cacapavadossul">Caçapava do Sul</option>
                                    <option value="cacequi">Cacequi</option>
                                    <option value="cachoeiradosul">Cachoeira do Sul</option>
                                    <option value="cachoeirinha">Cachoeirinha</option>
                                    <option value="caciquedoble">Cacique Doble</option>
                                    <option value="caibate">Caibaté</option>
                                    <option value="caicara">Caiçara</option>
                                    <option value="caichoeradosul">Caiçoeira do Sul</option>
                                    <option value="camaqua">Camaquã</option>
                                    <option value="camargo">Camargo</option>
                                    <option value="cambaradosul">Cambará do Sul</option>
                                    <option value="camobi">Camobi</option>
                                    <option value="campestredaserra">Campestre da Serra</option>
                                    <option value="campinadasmissoes">Campina das Missões</option>
                                    <option value="campinasdosul">Campinas do Sul</option>
                                    <option value="campobom">Campo Bom</option>
                                    <option value="campoevo">Campo Evo</option>
                                    <option value="campogrande">Campo Grande</option>
                                    <option value="camponovo">Campo Novo</option>
                                    <option value="camposborges">Campos Borges</option>
                                    <option value="camposnovos">Campos Novos</option>
                                    <option value="candelaria">Candelária</option>
                                    <option value="candidogodoi">Cândido Godói</option>
                                    <option value="candiota">Candiota</option>
                                    <option value="canela">Canela</option>
                                    <option value="canguçu">Canguçu</option>
                                    <option value="canoas">Canoas</option>
                                    <option value="canoínhas">Canoínhas</option>
                                    <option value="canos">Canos</option>
                                    <option value="canudosdovale">Canudos do Vale</option>
                                    <option value="capanema">Capanema</option>
                                    <option value="capaobonitodosul">Capão Bonito do Sul</option>
                                    <option value="capaodacanoa">Capão da Canoa</option>
                                    <option value="capaodaporteira">Capão da Porteira</option>
                                    <option value="capaodocipo">Capão do Cipó</option>
                                    <option value="capaodoleao">Capão do Leão</option>
                                    <option value="capeladesantana">Capela de Santana</option>
                                    <option value="capitão">Capitão</option>
                                    <option value="capivaridosul">Capivari do Sul</option>
                                    <option value="caraa">Caraá</option>
                                    <option value="caraz">Caraz</option>
                                    <option value="carazinho">Carazinho</option>
                                    <option value="cardoso">Cardoso</option>
                                    <option value="cristaldosul">Cristal do Sul</option>
                                    <option value="cristalina">Cristalina</option>
                                    <option value="cruzalta">Cruz Alta</option>
                                    <option value="cruzaltense">Cruzaltense</option>
                                    <option value="cruzeirodosul">Cruzeiro do Sul</option>
                                    <option value="curitiba">Curitiba</option>
                                    <option value="davidcanabarro">David Canabarro</option>
                                    <option value="derrubadas">Derrubadas</option>
                                    <option value="dezesseisdenovembro">Dezesseis de Novembro</option>
                                    <option value="dilermandodeaguiar">Dilermando de Aguiar</option>
                                    <option value="doisirmãos">Dois Irmãos</option>
                                    <option value="doisirmãosdasmissoes">Dois Irmãos das Missões</option>
                                    <option value="doislajeados">Dois Lajeados</option>
                                    <option value="doisvizinhos">Dois Vizinhos</option>
                                    <option value="domfeliciano">Dom Feliciano</option>
                                    <option value="dompedrito">Dom Pedrito</option>
                                    <option value="dompedrodealcantara">Dom Pedro de Alcântara</option>
                                    <option value="fazendavilanova">Fazenda Vilanova</option>
                                    <option value="feliz">Feliz</option>
                                    <option value="floresdacunha">Flores da Cunha</option>
                                    <option value="florianopeixoto">Floriano Peixoto</option>
                                    <option value="fontouraxavier">Fontoura Xavier</option>
                                    <option value="formigueiro">Formigueiro</option>
                                    <option value="forquetinha">Forquetinha</option>
                                    <option value="fortaleza">Fortaleza</option>
                                    <option value="fortalezadosvalos">Fortaleza dos Valos</option>
                                    <option value="fozdoiguacu">Foz do Iguaçu</option>
                                    <option value="fredericowestphalen">Frederico Westphalen</option>
                                    <option value="garibaldi">Garibaldi</option>
                                    <option value="garruchos">Garruchos</option>
                                    <option value="gaurama">Gaurama</option>
                                    <option value="generalcâmara">General Câmara</option>
                                    <option value="gentil">Gentil</option>
                                    <option value="getúliovargas">Getúlio Vargas</option>
                                    <option value="giruá">Giruá</option>
                                    <option value="glorinha">Glorinha</option>
                                    <option value="gramado">Gramado</option>
                                    <option value="gramadodosloureiros">Gramado dos Loureiros</option>
                                    <option value="gramadoxavier">Gramado Xavier</option>
                                    <option value="grandeportela">Grande Portela</option>
                                    <option value="gravatai">Gravataí</option>
                                    <option value="guabiju">Guabiju</option>
                                    <option value="guaiba">Guaíba</option>
                                    <option value="igrejinha">Igrejinha</option>
                                    <option value="ijui">Ijuí</option>
                                    <option value="ilopolis">Ilópolis</option>
                                    <option value="imbe">Imbé</option>
                                    <option value="imigrante">Imigrante</option>
                                    <option value="independencia">Independência</option>
                                    <option value="inhacora">Inhacorá</option>
                                    <option value="ipe">Ipê</option>
                                    <option value="ipirangadosul">Ipiranga do Sul</option>
                                    <option value="irai">Iraí</option>
                                    <option value="irani">Irani</option>
                                    <option value="itaara">Itaara</option>
                                    <option value="itacurubi">Itacurubi</option>
                                    <option value="itaobim">Itaobim</option>
                                    <option value="itapejaraoste">Itapejara Oeste</option>
                                    <option value="itapiranga">Itapiranga</option>
                                    <option value="itapuca">Itapuca</option>
                                    <option value="itaqui">Itaqui</option>
                                    <option value="itati">Itati</option>
                                    <option value="itatiba">Itatiba</option>
                                    <option value="ivora">Ivorá</option>
                                    <option value="ivoti">Ivoti</option>
                                    <option value="jaboticaba">Jaboticaba</option>
                                    <option value="jacinto">Jacinto</option>
                                    <option value="jacintomachado">Jacinto Machado</option>
                                    <option value="jacuizinho">Jacuizinho</option>
                                    <option value="jacutinga">Jacutinga</option>
                                    <option value="jaguarao">Jaguarão</option>
                                    <option value="jaguari">Jaguari</option>
                                    <option value="jaquari">Jaquari</option>
                                    <option value="jaquirana">Jaquirana</option>
                                    <option value="jari">Jari</option>
                                    <option value="jirua">Jiruá</option>
                                    <option value="joacaba">Joaçaba</option>
                                    <option value="joia">Jóia</option>
                                    <option value="joinville">Joinville</option>
                                    <option value="juliodecastilhos">Júlio de Castilhos</option>
                                    <option value="lages">Lages</option>
                                    <option value="lagoadabonitadosul">Lagoa Bonita do Sul</option>
                                    <option value="lagoadostrêscantos">Lagoa dos Três Cantos</option>
                                    <option value="lagoavermelha">Lagoa Vermelha</option>
                                    <option value="lagoao">Lagoão</option>
                                    <option value="lajeado">Lajeado</option>
                                    <option value="lajeado">Lajeado</option>
                                    <option value="lajeadodobugre">Lajeado do Bugre</option>
                                    <option value="laria">Laria</option>
                                    <option value="lavrasdosul">Lavras do Sul</option>
                                    <option value="liberatosalzano">Liberato Salzano</option>
                                    <option value="lindolfocollor">Lindolfo Collor</option>
                                    <option value="linhanova">Linha Nova</option>
                                    <option value="matoleitao">Mato Leitão</option>
                                    <option value="matoqueimado">Mato Queimado</option>
                                    <option value="maximdealmeida">Maxim de Almeida</option>
                                    <option value="maximilianodealmeida">Maximiliano de Almeida</option>
                                    <option value="medianeira">Medianeira</option>
                                    <option value="mesquita">Mesquita</option>
                                    <option value="minasdobutia">Minas do Butiá</option>
                                    <option value="minasdoleao">Minas do Leão</option>
                                    <option value="minasgerais">Minas Gerais</option>
                                    <option value="miraguai">Miraguaí</option>
                                    <option value="mirandopolis">Mirandópolis</option>
                                    <option value="missoes">Missões</option>
                                    <option value="mondai">Mondaí</option>
                                    <option value="montauri">Montauri</option>
                                    <option value="montealegredoscampos">Monte Alegre dos Campos</option>
                                    <option value="montebelodosul">Monte Belo do Sul</option>
                                    <option value="monterongo">Monte Negro</option>
                                    <option value="montenegro">Montenegro</option>
                                    <option value="mormaço">Mormaço</option>
                                    <option value="morrinhosdosul">Morrinhos do Sul</option>
                                    <option value="morroredondo">Morro Redondo</option>
                                    <option value="morroreuter">Morro Reuter</option>
                                    <option value="mostardas">Mostardas</option>
                                    <option value="mucum">Muçum</option>
                                    <option value="muitoscapoes">Muitos Capões</option>
                                    <option value="muliterno">Muliterno</option>
                                    <option value="naometoque">Não-Me-Toque</option>
                                    <option value="navegantes">Navegantes</option>
                                    <option value="nicolaovergueiro">Nicolau Vergueiro</option>
                                    <option value="niteroi">Niterói</option>
                                    <option value="nonoai">Nonoai</option>
                                    <option value="novaalvorada">Nova Alvorada</option>
                                    <option value="novaaraca">Nova Araçá</option>
                                    <option value="novabassano">Nova Bassano</option>
                                    <option value="novaboavista">Nova Boa Vista</option>
                                    <option value="novabrescia">Nova Bréscia</option>
                                    <option value="novacandelaria">Nova Candelária</option>
                                    <option value="novaesperancadosul">Nova Esperança do Sul</option>
                                    <option value="novahartz">Nova Hartz</option>
                                    <option value="novapadua">Nova Pádua</option>
                                    <option value="novapalma">Nova Palma</option>
                                    <option value="novapetropolis">Nova Petrópolis</option>
                                    <option value="novaprata">Nova Prata</option>
                                    <option value="novaramada">Nova Ramada</option>
                                    <option value="novaromadosul">Nova Roma do Sul</option>
                                    <option value="riozinho">Riozinho</option>
                                    <option value="rosario-do-sul">Rosário do Sul</option>
                                    <option value="roca-sales">Roca Sales</option>
                                    <option value="rodeio-bonito">Rodeio Bonito</option>
                                    <option value="rolador">Rolador</option>
                                    <option value="rolante">Rolante</option>
                                    <option value="rolantinho">Rolantinho</option>
                                    <option value="ronda-alta">Ronda Alta</option>
                                    <option value="rondinha">Rondinha</option>
                                    <option value="roque-gonzales">Roque Gonzales</option>
                                    <option value="rosario-do-sul">Rosário do Sul</option>
                                    <option value="sagrada-familia">Sagrada Família</option>
                                    <option value="saldanha-marinho">Saldanha Marinho</option>
                                    <option value="salto-do-jacui">Salto do Jacuí</option>
                                    <option value="salto-do-lontra">Salto do Lontra</option>
                                    <option value="salvador-das-missoes">Salvador das Missões</option>
                                    <option value="salvador-do-sul">Salvador do Sul</option>
                                    <option value="sananduva">Sananduva</option>
                                    <option value="sanga-puita">Sanga Puitã</option>
                                    <option value="santa-barbara-do-sul">Santa Bárbara do Sul</option>
                                    <option value="santa-cecilia-do-sul">Santa Cecília do Sul</option>
                                    <option value="santa-clara-do-sul">Santa Clara do Sul</option>
                                    <option value="santa-cruz-do-sul">Santa Cruz do Sul</option>
                                    <option value="santa-margarida-do-sul">Santa Margarida do Sul</option>
                                    <option value="santa-maria">Santa Maria</option>
                                    <option value="santa-maria-do-herval">Santa Maria do Herval</option>
                                    <option value="santa-rita-do-sul">Santa Rita do Sul</option>
                                    <option value="santa-rosa">Santa Rosa</option>
                                    <option value="santa-teresa">Santa Tereza</option>
                                    <option value="santa-vitoria-do-palmar">Santa Vitória do Palmar</option>
                                    <option value="santana-da-boa-vista">Santana da Boa Vista</option>
                                    <option value="santana-do-livramento">Santana do Livramento</option>
                                    <option value="santiago">Santiago</option>
                                    <option value="santo-angelo">Santo Ângelo</option>
                                    <option value="santo-anjo-da-guarda">Santo Anjo da Guarda</option>
                                    <option value="santo-antonio-da-patrulha">Santo Antônio da Patrulha</option>
                                    <option value="santo-antonio-das-missoes">Santo Antônio das Missões</option>
                                    <option value="santo-antonio-do-palma">Santo Antônio do Palma</option>
                                    <option value="santo-antonio-do-planalto">Santo Antônio do Planalto</option>
                                    <option value="santo-augusto">Santo Augusto</option>
                                    <option value="santo-cristo">Santo Cristo</option>
                                    <option value="santo-expedito-do-sul">Santo Expedito do Sul</option>
                                    <option value="sao-barja">São Barja</option>
                                    <option value="sao-bento">São Bento</option>
                                    <option value="sao-borja">São Borja</option>
                                    <option value="sao-caetano">São Caetano</option>
                                    <option value="paverama">Paverama</option>
                                    <option value="pedras-altas">Pedras Altas</option>
                                    <option value="pedro-osorio">Pedro Osório</option>
                                    <option value="pejucara">Pejuçara</option>
                                    <option value="pelotas">Pelotas</option>
                                    <option value="petropolis">Petrópolis</option>
                                    <option value="picada-cafe">Picada Café</option>
                                    <option value="picada-castro">Picada Castro</option>
                                    <option value="pinhal">Pinhal</option>
                                    <option value="pinhal-da-serra">Pinhal da Serra</option>
                                    <option value="pinhal-grande">Pinhal Grande</option>
                                    <option value="pinheirinho-do-vale">Pinheirinho do Vale</option>
                                    <option value="pinheiro-machado">Pinheiro Machado</option>
                                    <option value="pinto-bandeira">Pinto Bandeira</option>
                                    <option value="piquete">Piquete</option>
                                    <option value="pirapo">Pirapó</option>
                                    <option value="pirassununga">Pirassununga</option>
                                    <option value="piratini">Piratini</option>
                                    <option value="planalto">Planalto</option>
                                    <option value="sertao">Sertão</option>
                                    <option value="sertao-santana">Sertão Santana</option>
                                    <option value="sete-de-setembro">Sete de Setembro</option>
                                    <option value="severiano-de-almeida">Severiano de Almeida</option>
                                    <option value="severino-de-almeida">Severino de Almeida</option>
                                    <option value="silveira-martins">Silveira Martins</option>
                                    <option value="sinimbu">Sinimbu</option>
                                    <option value="sobradinho">Sobradinho</option>
                                    <option value="sobral">Sobral</option>
                                    <option value="soledade">Soledade</option>
                                    <option value="sombrio">Sombrio</option>
                                    <option value="soturno">Soturno</option>
                                    <option value="sto-antonio-do-sudoeste">Sto. Antonio do Sudoeste</option>
                                    <option value="tabai">Tabaí</option>
                                    <option value="tapejara">Tapejara</option>
                                    <option value="tapera">Tapera</option>
                                    <option value="tapes">Tapes</option>
                                    <option value="taquara">Taquara</option>
                                    <option value="taquari">Taquari</option>
                                    <option value="taquaruçu-do-sul">Taquaruçu do Sul</option>
                                    <option value="taubate">Taubaté</option>
                                    <option value="tavares">Tavares</option>
                                    <option value="tenente-portela">Tenente Portela</option>
                                    <option value="terra-de-areia">Terra de Areia</option>
                                    <option value="teutonia">Teutônia</option>
                                    <option value="tiete">Tietê</option>
                                    <option value="tio-hugo">Tio Hugo</option>
                                    <option value="tunas">Tunas</option>
                                    <option value="tupanci-do-sul">Tupanci do Sul</option>
                                    <option value="tupancireta">Tupanciretã</option>
                                    <option value="tupandi">Tupandi</option>
                                    <option value="tuparandi">Tuparandí</option>
                                    <option value="tuparendi">Tuparendi</option>
                                    <option value="turuçu">Turuçu</option>
                                    <option value="turvo">Turvo</option>
                                    <option value="ubiretama">Ubiretama</option>
                                    <option value="ugranopolis">Ugranópolis</option>
                                    <option value="uniao-da-serra">União da Serra</option>
                                    <option value="unistalda">Unistalda</option>
                                    <option value="uruguaiana">Uruguaiana</option>
                                    <option value="vacaria">Vacaria</option>
                                    <option value="vale-do-sol">Vale do Sol</option>
                                    <option value="vale-real">Vale Real</option>
                                    <option value="vale-verde">Vale Verde</option>
                                    <option value="vanini">Vanini</option>
                                    <option value="venancio-aires">Venâncio Aires</option>
                                    <option value="vera-cruz">Vera Cruz</option>
                                    <option value="veranopolis">Veranópolis</option>
                                    <option value="vespasiano-correa">Vespasiano Corrêa</option>
                                    <option value="viadutos">Viadutos</option>
                                    <option value="viamao">Viamão</option>
                                    <option value="vicente-dutra">Vicente Dutra</option>
                                    <option value="victor-graeff">Victor Graeff</option>
                                    <option value="vila-flores">Vila Flores</option>
                                    <option value="vila-langaro">Vila Lângaro</option>
                                    <option value="vila-maria">Vila Maria</option>
                                    <option value="vila-nova-do-sul">Vila Nova do Sul</option>
                                    <option value="vista-alegre">Vista Alegre</option>
                                    <option value="vista-alegre-do-prata">Vista Alegre do Prata</option>
                                    <option value="vista-gaucha">Vista Gaúcha</option>
                                    <option value="vitoria-das-missoes">Vitória das Missões</option>
                                    <option value="westfalia">Westfália</option>
                                    <option value="westphalen">Westphalen</option>
                                    <option value="xangri-la">Xangri-Lá</option>
                                    <option value="xaxim">Xaxim</option>
                                </select>
                            </td>
                        </tr><!--FIM LINHA CIDADE-->
                        <tr> <!-- INICIO LINHA EMAIL-->
                            <td>
                                <h3><label>E-Mail:&nbsp</label></h3>
                            </td>
                            <td>
                                <input type="email" name="email" maxlength="45" size="33" required>
                            </td>
                        </tr><!--FIM LINHA EMAIL-->
                        <tr> <!-- INICIO LINHA CONF-EMAIL-->
                            <td>
                                <h3><label>Confirme o E-Mail:&nbsp</label></h3>
                            </td>
                            <td>
                                <input type="email" name="cemail" maxlength="45" size="33" required>
                            </td>
                        </tr><!--FIM LINHA CONF-EMAIL-->
                        <tr> <!-- INICIO LINHA TELEFONE-->
                            <td>
                                <h3><label>Telefone:&nbsp</label></h3>
                            </td>
                            <td>
                                <input type="tel" name="ddd" maxlength="3" placeholder="(DDD)" size="2"
                                    required>&nbsp;&nbsp;<input type="tel" name="telefone" maxlength="9" size="20"
                                    placeholder="Número" required>
                            </td>
                        </tr><!--FIM LINHA TELEFONE-->
                        <tr> <!-- INICIO LINHA MODALIDADE-->
                            <td>
                                <h3><label>Modalidade:&nbsp</label></h3>
                            </td>
                            <td>
                                <select name="modalidade" required>
                                    <option selected value="">Selecione a Modalidade</option>
                                    <option value="presencial">Curso Presencial</option>
                                    <option value="ead">Curso Técnico EAD</option>
                                </select>
                            </td>
                        </tr><!--FIM LINHA MODALIDADE-->
                        <tr> <!-- INICIO LINHA ASSUNTO-->
                            <td>
                                <h3><label>Assunto:&nbsp</label></h3>
                            </td>
                            <td>
                                <select name="assunto" required>
                                    <option selected value="">Selecione o Assunto</option>
                                    <option value="duvida/info">Dúvidas/Informações</option>
                                    <option value="solicitacao">Solicitações</option>
                                    <option value="elogio">Elogios</option>
                                    <option value="sugestao">Sugestões</option>
                                    <option value="reclamacao">Reclamações</option>
                                </select>
                            </td>
                        </tr><!--FIM LINHA ASSUNTO-->
                        <tr> <!-- INICIO LINHA MENSAGEM-->
                            <td>
                                <h3><label>Mensagem:&nbsp</label></h3>
                            </td>
                            <td>
                                <textarea name="mensagem" rows="6" cols="33"></textarea>
                            </td>
                        </tr><!--FIM LINHA MENSAGEM-->
                        <tr> <!-- INICIO LINHA CPF-->
                            <td>
                                <h3><label>CPF:&nbsp</label></h3>
                            </td>
                            <td>
                                <input type="text" name="cpf" maxlength="11" size="33" required>
                            </td>
                        </tr><!--FIM LINHA CPF-->
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" class="posicao_do_botao_enviar">
                                <br>
                                <input type="submit" value="Enviar" onclick="return">
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </form>
        </div>
        <br>
        <br>
        <img src="../img/captchIMG.png" alt="robozao">
        <br>
        <br>
        <p>Obs: O Senac-RS se reserva o direito de não responder a anônimos.<br>
            <strong>Atenção: Os itens marcados com * são de preenchimento obrigatório.</strong>
        </p>
        <a href="Conheça a Política de Privacidade do Senac-RS.">
            <h3 class="cor_do_conheca_politica">Conheça a Política de Privacidade do Senac-RS.</h3>
        </a>
    </div>
    <br>
    <br>
    <footer>
        <h2 class="rodape">Desenvolvido por Ricardo Henrique</h2>
    </footer>
</body>

</html>