<?php 
require('form-handler.php');
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!--CSS -->
    <link href="css/main.css" rel="stylesheet">
	<title>
		Porquê a ESCS - Questionário
    </title>
    <meta content="Este estudo tem como objectivo a representação visual de um inquérito feito a alunos e ex alunos sobre quais os motivos que os levaram a escolher a ESCS."
	 name="description">
    <!-- FAVICON -->
	<link href="img/apple-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
	<link href="img/apple-icon-60x60.png" rel="apple-touch-icon" sizes="60x60">
	<link href="img/apple-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
	<link href="img/apple-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
	<link href="img/apple-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
	<link href="img/apple-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
	<link href="img/apple-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
	<link href="img/apple-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
	<link href="img/apple-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
	<link href="img/android-icon-192x192.png" rel="icon" sizes="192x192" type="image/png">
	<link href="img/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
	<link href="img/favicon-96x96.png" rel="icon" sizes="96x96" type="image/png">
	<link href="img/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
	<link href="img/manifest.json" rel="manifest">
	<meta content="#3caab4" name="msapplication-TileColor">
    <meta content="img/ms-icon-144x144.png" name="msapplication-TileImage">
    <!-- BROWSER TOOLBAR COLOR // CHROME ANDROID -->
    <meta content="#3caab4" name="theme-color">
    <!-- FACEBOOK -->
    <meta content=" Porquê a ESCS - Questionário" property="og:title">
    <meta content="https://marianarita.github.io/porqueaescs/form/img/redes.jpg"  property="og:image">
    <meta content="Este estudo tem como objectivo a representação visual de um inquérito feito a alunos e ex alunos sobre quais os motivos que os levaram a escolher a ESCS."
     property="og:description">
     <meta content="website" property="og:type">
    <!-- TWITTER -->
    <meta content=" Porquê a ESCS - Questionário" name="twitter:title">
    <meta content="https://marianarita.github.io/porqueaescs/form/img/redes.jpg"  name="twitter:image">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="Este estudo tem como objectivo a representação visual de um inquérito feito a alunos e ex alunos sobre quais os motivos que os levaram a escolher a ESCS."
	 name="twitter:description">
    <style>
	
	</style>
</head>

<body>
    <div id="progress-bar"></div>
    <section class="_2col center-align home" id="home">
			<div class="section__header">
				<img class="section__header__image" src="img/logo-01.svg">
				<div class="line line--horizontal"></div>
				<div class="line line--vertical"></div>
				<h1 class="big-title">Porquê a</h1>
				<h1 class="section__header--bigger">ESCS?</h1>
				<a class="button--cta">Responder ao questionário</a>
			</div>
			<div class="section__text">
				<div class="section__text__quote">
					<p>"Somos uma instituição cada vez mais comprometida e atenta às dinâmicas da academia, do mundo
						empresarial e da sociedade. Somos reconhecidos pela qualidade do ensino, pela experiência da
						aprendizagem, pelo rigor académico e pela reputação dos nossos diplomados e docentes. ”</p>

				</div>
			</div>
        </section>
        <div class="form-wrapper">
    <form id="form" method="post">
        <div class="form-section" id="name">
            <div class="filler"></div>
            <h1>
                Antes de começares, qual é o teu nome?
            </h1>
            <input class="name-input" placeholder="Escreve aqui o teu nome" type="text">
            <input class="next" type="button"
                value="Seguinte">
        </div>
        <div class="form-section" id="Q1">
            <h1>
                Género
            </h1>
            <p>
                Olá <span class="name">_ _ _ _ _ _ _ _ _ _</span>, Tudo bem?<br> indica-nos se és do sexo masculino ou
                feminino
            </p>
            <div>
                <div class="form-gender-wrapper">
                    <input class="gender-radio-input" id="masculino" name="Q1" type="radio" value="masculino"> <label
                        class="gender-radio-label" for="masculino"><img src="img/man.svg">
                        <p> Masculino </p>
                    </label>
                </div>
                <div class="form-gender-wrapper">
                    <input class="gender-radio-input" id="feminino" name="Q1" type="radio" value="feminino"> <label
                        class="gender-radio-label" for="feminino"><img src="img/woman.svg">
                        <p>Feminino</p>
                    </label>
                </div>
            </div>
            <input class="next" type="button" value="Seguinte">
        </div>
        <div class="form-section" id="Q2">
            <h1>
                A tua idade
            </h1>
            <p>
                <span class="name">_ _ _ _ _ _ _ _ _ _</span>, quantos anos tens?
            </p><input name="Q2" placeholder="A tua idade"> <input class="next" type="button" value="Seguinte">
        </div>
        <div class="form-section" id="Q3">
            <h1>
                Qual foi o teu último curso/formação na ESCS?
            </h1>
            <p>
               Indica o que estás a frequentar. Se já fizeste mais do que um curso e não estás em nenhum, indica o último.
</p>
                <div class="_2col">
                    <div>
                        <div>
                            <input class="general-radio-input" id="CURSO_1" name="Q3" data-curso="uma Licenciatura em Audiovisual e Multimédia"
                                type="radio" value="CURSO_1"><label class="general-radio-input-label" for="CURSO_1">Licenciatura
                                AM</label>
                        </div>
                        <div>
                            <input class="general-radio-input" id="CURSO_2" name="Q3" data-curso="uma Licenciatura em Jornalismo"
                                type="radio" value="CURSO_2"><label class="general-radio-input-label" for="CURSO_2">Licenciatura
                                JORN</label>
                        </div>
                        <div>
                            <input class="general-radio-input" id="CURSO_3" name="Q3" data-curso="uma Licenciatura em Relações Públicas e Comunicação Empresarial"
                                type="radio" value="CURSO_3"><label class="general-radio-input-label" for="CURSO_3">Licenciatura
                                RPCE</label>
                        </div>
                        <div>
                            <input class="general-radio-input" id="CURSO_4" name="Q3" data-curso="uma Licenciatura em Publicidade e Marketing"
                                type="radio" value="CURSO_4"><label class="general-radio-input-label" for="CURSO_4">Licenciatura
                                PM</label>
                        </div>
                        <div>
                            <input class="general-radio-input" id="CURSO_5" name="Q3" data-curso="um Mestrado em Audiovisual e Multimédia"
                                type="radio" value="CURSO_5"><label class="general-radio-input-label" for="CURSO_5">Mestrado
                                AM</label>
                        </div>
                        <div></div>
                        <div>
                            <input class="general-radio-input" id="CURSO_6" name="Q3" data-curso="um Mestrado em Jornalismo"
                                type="radio" value="CURSO_6"><label class="general-radio-input-label" for="CURSO_6">Mestrado
                                JORN</label>
                        </div>
                    </div>
                   
                   <div>
                    <div>
                        <input class="general-radio-input" id="CURSO_7" name="Q3" data-curso="um Mestrado em Publicidade e Marketing"
                            type="radio" value="CURSO_7"><label class="general-radio-input-label" for="CURSO_7">Mestrado
                            PM</label>
                    </div>
                    <div>
                        <input class="general-radio-input" id="CURSO_8" name="Q3" data-curso="um Mestrado em Gestão Estratégica das Relações Públicas"
                            type="radio" value="CURSO_8"><label class="general-radio-input-label" for="CURSO_8">Mestrado
                            GERP</label>
                    </div>
                    <div>
                        <input class="general-radio-input" id="CURSO_9" name="Q3" data-curso="uma Pós-Graduação em Branding e Content Marketing"
                            type="radio" value="CURSO_9"><label class="general-radio-input-label" for="CURSO_9">Pós-Graduação
                            em Branding e Content Marketing</label>
                    </div>
                    <div>
                        <input class="general-radio-input" id="CURSO_10" name="Q3" data-curso="uma Pós-Graduação em Indústrias e Culturas Criativas: Gestão e Estratégias"
                            type="radio" value="CURSO_10"><label class="general-radio-input-label" for="CURSO_10">Pós-Graduação
                            em Indústrias e Culturas Criativas: Gestão e Estratégias</label>
                    </div>
                    <div>
                        <input class="general-radio-input" id="CURSO_11" name="Q3" data-curso="uma Pós-Graduação em Storytelling"
                            type="radio" value="CURSO_11"><label class="general-radio-input-label" for="CURSO_11">Pós-Graduação
                            em Storytelling</label>
                    </div>
                </div>
                    <input class="next" type="button" value="Seguinte">
                </div>
                <div class="form-section" id="Q4">
                    <h1>
                        Porque escolheste estudar na ESCS?
                    </h1>
                    <p>
                        Todos nós temos uma razão, mesmo que seja nenhuma.
                    </p>

                    <div>
                        <input class="general-checkbox-custom disabled" id="ESCOLHA_ESCS_1" name="Q4[]" type="checkbox" value="ESCOLHA_ESCS_1"><label
                            class="general-checkbox-custom-label" for="ESCOLHA_ESCS_1">Localização</label>
                    </div>
                    <div>
                        <input class="general-checkbox-custom disabled" id="ESCOLHA_ESCS_2" name="Q4[]" type="checkbox" value="ESCOLHA_ESCS_2"><label
                            class="general-checkbox-custom-label" for="ESCOLHA_ESCS_2">Prestígio</label>
                    </div>
                    <div>
                        <input class="general-checkbox-custom disabled" id="ESCOLHA_ESCS_3" name="Q4[]" type="checkbox" value="ESCOLHA_ESCS_3"><label
                            class="general-checkbox-custom-label" for="ESCOLHA_ESCS_3">Custos mais reduzidos</label>
                    </div>
                    <div>
                        <input class="general-checkbox-custom disabled" id="ESCOLHA_ESCS_4" name="Q4[]" type="checkbox" value="ESCOLHA_ESCS_4"><label
                            class="general-checkbox-custom-label" for="ESCOLHA_ESCS_4">Possibilidade de trabalhar e
                            estudar</label>
                    </div>
                    <div>
                        <input class="general-checkbox-custom disabled" id="ESCOLHA_ESCS_5" name="Q4[]" type="checkbox" value="ESCOLHA_ESCS_5"><label
                            class="general-checkbox-custom-label" for="ESCOLHA_ESCS_5">Qualidade da vida académica e
                            convívio</label>
                    </div>
                    <div>
                        <input class="general-checkbox-custom disable" id="ESCOLHA_ESCS_6" name="Q4[]" type="checkbox" value="ESCOLHA_ESCS_6"><label
                            class="general-checkbox-custom-label" for="ESCOLHA_ESCS_6">Nenhum dos anteriores</label>
                    </div>
                    <input class="next" type="button" value="Seguinte">

                </div>
                <div class="form-section" id="Q5">
                    <h1>
                        Porque escolheste fazer <span class="curso">o curso que indicaste</span>?
                    </h1>
                    <p>
                        Escolhe todas as opções que se aplicam.
                    </p>
                    <div>
                        <input class="general-checkbox-custom  disabled" id="ESCOLHA_CURSO_1" name="Q5[]" type="checkbox" value="ESCOLHA_CURSO_1"><label
                            class="general-checkbox-custom-label" for="ESCOLHA_CURSO_1">O curso tem saídas profissionais.</label>
                    </div>
                    <div>
                        <input class="general-checkbox-custom disabled" id="ESCOLHA_CURSO_2" name="Q5[]" type="checkbox" value="ESCOLHA_CURSO_2"><label
                            class="general-checkbox-custom-label" for="ESCOLHA_CURSO_2">Vocação, gosto pelas matérias.</label>
                    </div>
                    <div>
                        <input class="general-checkbox-custom disabled" id="ESCOLHA_CURSO_3" name="Q5[]" type="checkbox" value="ESCOLHA_CURSO_3"><label
                            class="general-checkbox-custom-label" for="ESCOLHA_CURSO_3">Boa empregabilidade dos diplomados</label>
                    </div>
                    <div>
                        <input class="general-checkbox-custom disabled" id="ESCOLHA_CURSO_4" name="Q5[]" type="checkbox" value="ESCOLHA_CURSO_4"><label
                            class="general-checkbox-custom-label" for="ESCOLHA_CURSO_4">O curso tem uma boa componente prática</label>
                    </div>
                    <div>
                        <input class="general-checkbox-custom disabled" id="ESCOLHA_CURSO_5" name="Q5[]" type="checkbox" value="ESCOLHA_CURSO_5"><label
                            class="general-checkbox-custom-label" for="ESCOLHA_CURSO_5">Médias de entrada acessíveis</label>
                    </div>
                    <div>
                        <input class="general-checkbox-custom disabled" id="ESCOLHA_CURSO_6" name="Q5[]" type="checkbox" value="ESCOLHA_CURSO_6"><label
                            class="general-checkbox-custom-label" for="ESCOLHA_CURSO_6">Sem média de entrada noutro curso</label>
                    </div>
                    <div>
                        <input class="general-checkbox-custom disable" id="ESCOLHA_CURSO_7" name="Q5[]" type="checkbox" value="ESCOLHA_CURSO_7"><label
                            class="general-checkbox-custom-label" for="ESCOLHA_CURSO_7">Nenhum dos anteriores</label>
                    </div>
                    <input class="next" type="button" value="Seguinte">

                </div>
                <div class="form-section no-padding" id="Q6">
                    <h1>
                        Qualidades da ESCS
                    </h1>
                    <p>
                        <span class="name">_ _ _ _ _ _ _ _ _ _</span>, indica no máximo, 3 qualidades da ESCS.
                    </p>
                    <div class="_2col">
                        <div class="_col">
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_1"
                                    value="QUALIDADES_ESCS_1"><label for="QUALIDADES_ESCS_1" class="general-checkbox-custom-label">Bons
                                    professores</label></div>
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_2"
                                    value="QUALIDADES_ESCS_2"><label for="QUALIDADES_ESCS_2" class="general-checkbox-custom-label">Prestígio
                                    do estabelecimento</label></div>
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_3"
                                    value="QUALIDADES_ESCS_3"><label for="QUALIDADES_ESCS_3" class="general-checkbox-custom-label">Boas
                                    infraestruturas (salas de aula e apoio didático)</label></div>
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_4"
                                    value="QUALIDADES_ESCS_4"><label for="QUALIDADES_ESCS_4" class="general-checkbox-custom-label">Boa
                                    biblioteca</label></div>
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_5"
                                    value="QUALIDADES_ESCS_5"><label for="QUALIDADES_ESCS_5" class="general-checkbox-custom-label">Bons
                                    meios informáticos</label></div>
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_6"
                                    value="QUALIDADES_ESCS_6"><label for="QUALIDADES_ESCS_6" class="general-checkbox-custom-label">Localização
                                    (facilidade de transporte)</label></div>
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_7"
                                    value="QUALIDADES_ESCS_7"><label for="QUALIDADES_ESCS_7" class="general-checkbox-custom-label">Garantia
                                    de saídas profissionais</label></div>
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_8"
                                    value="QUALIDADES_ESCS_8"><label for="QUALIDADES_ESCS_8" class="general-checkbox-custom-label">Médias
                                    de entrada elevadas</label></div>
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_9"
                                    value="QUALIDADES_ESCS_9"><label for="QUALIDADES_ESCS_9" class="general-checkbox-custom-label">Elevado
                                    sucesso escolar da instituição</label></div>

                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_10"
                                    value="QUALIDADES_ESCS_10"><label for="QUALIDADES_ESCS_10" class="general-checkbox-custom-label">qualidade
                                    dos currículos dos cursos</label></div>
                        </div>
                        <div class="_col">
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_11"
                                    value="QUALIDADES_ESCS_11"><label for="QUALIDADES_ESCS_11" class="general-checkbox-custom-label">Atividade
                                    de investigação científica</label></div>
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_12"
                                    value="QUALIDADES_ESCS_12"><label for="QUALIDADES_ESCS_12" class="general-checkbox-custom-label">Atividades
                                    extracurriculares</label></div>
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_13"
                                    value="QUALIDADES_ESCS_13"><label for="QUALIDADES_ESCS_13" class="general-checkbox-custom-label">Boa
                                    organização geral</label></div>
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_14"
                                    value="QUALIDADES_ESCS_14"><label for="QUALIDADES_ESCS_14" class="general-checkbox-custom-label">Estruturas
                                    de desporto e lazer</label></div>
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_15"
                                    value="QUALIDADES_ESCS_15"><label for="QUALIDADES_ESCS_15" class="general-checkbox-custom-label">Zona
                                    de refeições</label></div>
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_16"
                                    value="QUALIDADES_ESCS_16"><label for="QUALIDADES_ESCS_16" class="general-checkbox-custom-label">Serviços
                                    médicos e sociais</label></div>
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_17"
                                    value="QUALIDADES_ESCS_17"><label for="QUALIDADES_ESCS_17" class="general-checkbox-custom-label">Apoio
                                    administrativo</label></div>
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_18"
                                    value="QUALIDADES_ESCS_18"><label for="QUALIDADES_ESCS_18" class="general-checkbox-custom-label">Apoio
                                    em intercâmbios com o estrangeiro</label></div>
                            <div> <input type="checkbox" class="general-checkbox-custom" name="Q6[]" id="QUALIDADES_ESCS_19"
                                    value="QUALIDADES_ESCS_19"><label for="QUALIDADES_ESCS_19" class="general-checkbox-custom-label">Uma
                                    boa associação de estudantes</label></div>
                        </div>

                        <input class="next" type="button" value="Seguinte">

                    </div>
                <div class="form-section final">
                <h1>
                <span class="name">_ _ _ _ _ _ _ _ _ _</span>, antes de submeteres:
                    </h1>
                    <p>
                       Obrigada por teres preenchido o formulário.
                       <br> Podes submeter ou rever os dados que preencheste.</p>
                       <div>
                       <input type="submit" class="submit" value="Submeter">
                       <input type="button" class="review" value="Rever">
</div>                    

                </div>
        </div>
    </form>
</div>
<script src="js/jwerty.js">
    </script>

    <script src="js/jquery.js">
    </script>
    <script src="js/main.js">
    </script>
</body>

</html>