<?php 
require('connection.php');
$query = "SELECT COUNT(*) as `numero` FROM `form_records`";

mysqli_query($connection, $query);

$results = mysqli_query($connection, $query);
$rows = array();
while($result = mysqli_fetch_assoc($results)) {
    $rows[] = $result;
}


?>

<html>

<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<!--CSS -->
	<link rel="stylesheet" type="text/css" media="screen" href="css/main.1.css" />
	<title>
		Porquê a ESCS?
	</title>
	<meta content="Este estudo tem como objectivo a representação visual de um inquérito feito a alunos e ex alunos sobre quais os motivos que os levaram a escolher a ESCS."
	 name="description">
	<!-- FAVICON -->
	<link href="img/favicon/apple-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
	<link href="img/favicon/apple-icon-60x60.png" rel="apple-touch-icon" sizes="60x60">
	<link href="img/favicon/apple-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
	<link href="img/favicon/apple-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
	<link href="img/favicon/apple-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
	<link href="img/favicon/apple-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
	<link href="img/favicon/apple-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
	<link href="img/favicon/apple-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
	<link href="img/favicon/apple-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
	<link href="img/favicon/android-icon-192x192.png" rel="icon" sizes="192x192" type="image/png">
	<link href="img/favicon/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
	<link href="img/favicon/favicon-96x96.png" rel="icon" sizes="96x96" type="image/png">
	<link href="img/favicon/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
	<link href="img/favicon/manifest.json" rel="manifest">
	<meta content="#3caab4" name="msapplication-TileColor">
	<meta content="img/favicon/ms-icon-144x144.png" name="msapplication-TileImage">
	<!-- BROWSER TOOLBAR COLOR // CHROME ANDROID -->
	<meta content="#3caab4" name="theme-color">
	<!-- FACEBOOK -->
	<meta content="Porquê a ESCS?" property="og:title">
	<meta content="https://porqueaescs.000webhostapp.com/img/redes.jpg" property="og:image">
	<meta content="Esta página tem por objectivo representar visualmente as respostas de um inquérito feito a alunos e ex-alunos da ESCS sobre os motivos que os levaram a escolher a mesma."
	 property="og:description">
	<meta content="website" property="og:type">
	<!-- TWITTER -->
	<meta content="Porquê a ESCS?" name="twitter:title">
	<meta content="https://porqueaescs.000webhostapp.com/img/redes.jpg" name="twitter:image">
	<meta content="summary_large_image" name="twitter:card">
	<meta content="Esta página tem por objectivo representar visualmente as respostas de um inquérito feito a alunos e ex-alunos da ESCS sobre os motivos que os levaram a escolher a mesma."
	 name="twitter:description">
</head>

<body>
	<!-- TOP NAVBAR -->
	<nav class="flex">
		<div class="col-6 flex flex-baseline">
			<img class="nav-logo" src="img/escs-nav.svg" alt="Logótipo ESCS">
			<p class="nav-title">Porquê a ESCS?</p>
		</div>
		<div class="col-6 flex flex-baseline flex-justify-end navbar">
			<a href="#section-1" class="nav-item navbar-item-active">Home</a>
			<a href="#section-2" class="nav-item">Sobre</a>
			<a href="#section-3" class="nav-item">Resultados</a>
			<a href="#section-4" class="nav-item">Questionário</a>
			<a href="#section-5" class="nav-item">Notícias</a>
			
			<div class="nav-item-switch">
					<input type="checkbox" id="switch"></input>
				<label for="switch" class="switch-label">
					<img class="switch sol" src="img/switch.svg" alt="Light switch">
					<img class="switch lua" src="img/lua.svg" alt="Light switch">
				</label>
			</div>
		</div>
	</nav>

	<!-- SIDE NAVIGATION -->
	<div class="sidenav">
		<div data-section="section-1" data-color="var(--light-blue)" class="sidenav-item sidenav-active">
			<p class="sidenav-text">01</p>
		</div>
		<div data-section="section-2" data-color="var(--yellow)" class="sidenav-item">
			<p class="sidenav-text">02</p>
		</div>
		<div data-section="section-3" data-color="var(--red)" class="sidenav-item">
			<p class="sidenav-text">03</p>
		</div>
		<div data-section="section-4" data-color="var(--yellow)" class="sidenav-item">
			<p class="sidenav-text">04</p>
		</div>
		<div data-section="section-5" data-color="var(--red)" class="sidenav-item">
			<p class="sidenav-text">05</p>
		</div>
	</div>

	<!-- HOME -->
	<section data-sectionid="section-1" id="section-1" class="slide container flex flex-center">
		<div class="col-2 col-lg-1 d-md-none"></div>
		<div class="flex flex-end">
			<div class="col-5 col-lg-6 col-md-12 rel">
				<div class="line-horizontal-blue d-md-none"></div>
				<h1>
					Porquê a
					<div class="text-large rel">ESCS? <div class="line-vertical-blue d-md-none"></div>
					</div>
				</h1>

				<div class="d-none d-md-block">
					<blockquote>
						"Somos uma instituição cada vez mais comprometida e atenta às dinâmicas da academia, do mundo empresarial e da
						sociedade. Somos reconhecidos pela qualidade do ensino, pela experiência da aprendizagem, pelo rigor académico e
						pela reputação dos nossos diplomados e docentes.” <br><br>
						<span class="text-blue">Presidente da ESCS, Prof. Doutor André Sendin (2018)</span>
					</blockquote>
				</div>

				<div class="flex flex-justify-end section-1-cta">
					<a href="#section-2" id="navegar" class="btn btn-hover-blue text-blue-light">Explorar</a>
				</div>
			</div>
			<div class="col-5 d-md-none">
				<blockquote>
					"Somos uma instituição cada vez mais comprometida e atenta às dinâmicas da academia, do mundo empresarial e da
					sociedade. Somos reconhecidos pela qualidade do ensino, pela experiência da aprendizagem, pelo rigor académico e
					pela reputação dos nossos diplomados e docentes.” <br><br>
					<span class="text-blue">Presidente da ESCS, Prof. Doutor André Sendin (2018)</span>
				</blockquote>
			</div>
		</div>
		<div class="section-1-bg"></div>
	</section>

	<!-- SOBRE -->
	<section data-sectionid="section-2" id="section-2" class="slide container flex flex-center">
		<div class="col-1 d-md-none"></div>
		<div class="flex-direction-column col-12">
			<div class="col-6 col-lg-7 col-md-12 rel">
				<div class="line-horizontal-yellow"></div>
				<h1 class="flex-direction-column">
					Sobre o
					<div class="text-small rel uppercase">projecto<div class="line-vertical-yellow d-md-none"></div>
					</div>
				</h1>
			</div>

			<div class="col-9 col-md-12">
				<p class="condensed">
					Este estudo tem como objectivo a representação visual de um inquérito feito a alunos e ex alunos sobre quais os
					motivos que os levaram a escolher a ESCS.
					<br><br>
					O formulário está em constante actualização, os dados são alterados em tempo real, com base nas respostas ao
					inquérito.
					<br><br>
					<b>Até agora, recebemos <span class="text-yellow-light">[INSERIR Nº DE RESPOSTAS]</span> respostas. Obrigado!</b>
				</p>
				<div class="flex flex-justify-end">
					<a href="#section-3" class="btn btn-hover-yellow text-yellow-light">Ver resultados</a>
				</div>
			</div>
		</div>
	</section>

	<!-- RESULTADOS -->
	<section data-sectionid="section-3" id="section-3" class="slide container flex flex-center">	
		<div class="col-1 d-md-none"></div>
		<div class="flex-direction-column col-12 rel">
			<!-- SLIDER FIXED ELEMENTS -->
			<div class="flex flex-center flex-md-wrap col-12">
				<div class="col-6 col-md-12">
					<h1 class="graph-title">A amostra</h1>
				</div>

				<div class="col-6 col-md-12">
					<div class="slidernav flex">
						<div data-graph-nav="1" class="slidernav-item slidernav-active">
							<p class="slidernav-text">01</p>
						</div>
						<div data-graph-nav="2" class="slidernav-item">
							<p class="slidernav-text">02</p>
						</div>
						<div data-graph-nav="3" class="slidernav-item">
							<p class="slidernav-text">03</p>
						</div>
						<div data-graph-nav="4" class="slidernav-item">
							<p class="slidernav-text">04</p>
						</div>
						<div data-graph-nav="5" class="slidernav-item">
							<p class="slidernav-text">05</p>
						</div>
					</div>
				</div>
			</div>

			<!-- SLIDER CONTENT -->
			<!-- CONTENT 01 -->
			<div class="graphs">
				<!-- Deve ter position absolute e muda a opacidade na navegação-->
				<div data-graph="1" data-sectiontitle="A amostra" data-graphcolor="var(--red)" class="flex flex-baseline col-12 graph current">
					<div class="col-6">
							<div id="q1-2">
								</div>
					</div>
					<div class="col-6 col-md-12">
						<h2 class="uppercase">Género e Idade</h2>
						<p>
								Este gráfico tem como objectivo cruzar duas variáveis, nomeadamente a variável género que faz a distinção entre o sexo feminino e o sexo masculino, e a variável idade que agrupa a amostra consoante a idade correspondente. A relação entre as duas variáveis é apresentada da seguinte forma: o tamanho dos círculos é proporcional ao número de respostas, ou seja, quanto mais pessoas de uma idade responderem, maior será o círculo dessa idade.
						</p>
					</div>
				</div>

				<!-- CONTENT 02 -->
				<div data-graph="2" data-sectiontitle="A amostra" data-graphcolor="var(--yellow)" class="flex flex-baseline col-12 graph">
					<div class="col-6">
						<div class="graph-wrapper">
							<canvas id="q3"></canvas>
						</div>
					</div>
					<div class="col-6 col-md-12">
						<h2 class="uppercase">Curso</h2>
						<p>
								Este gráfico ajuda-nos a conhecer um pouco melhor a amostra, ao analisar conseguimos perceber rapidamente em qual dos cursos conseguimos um maior número de respostas. Estes dados são importantes para conseguirmos analisar e relacionar os resultados obtidos.
						</p>
					</div>
				</div>

				<!-- CONTENT 03 -->
				<div data-graph="3" data-sectiontitle="Porquê a ESCS?" data-graphcolor="var(--light-blue)" class="flex flex-baseline col-12 graph">
					<div class="col-6">
						<div class="graph-wrapper">
							<canvas id="q4"></canvas>
						</div>
					</div>
					<div class="col-6 col-md-12">
						<h2 class="uppercase">Motivos de escolha do curso</h2>
						<p>
								Após apurarmos a quantidade de alunos de cada curso que representam a nossa amostra, quisemos saber o motivo pela qual o escolheram. A informação recolhida é apresentada no gráfico da seguinte forma: quanto mais o ponto correspondente à opção se aproxima da mesma e se afasta do centro, maior é o número de vezes que essa opção foi escolhida. 

						</p>
					</div>
				</div>

				<!-- CONTENT 04 -->
				<div data-graph="4" data-sectiontitle="Porquê a ESCS?" data-graphcolor="var(--yellow)" class="flex flex-baseline col-12 graph">
					<div class="col-6">
							<div class="graph-wrapper">
									<canvas id="q5"></canvas>
								</div>
					</div>
					<div class="col-6 col-md-12">
						<h2 class="uppercase">Motivos de escolha da ESCS</h2>
						<p>
								Porquê a ESCS? É a pergunta para a qual procuramos a resposta e o motivo do questionário apresentado. Por isso pedimos para nos responderem escolhendo as opções que se enquadrarem na sua realidade. A informação recolhida no gráfico é apresentada da seguinte forma: Quanto mais a “fatia” correspondente à opção se aproxima da extremidade do raio da circunferência, maior é o número de vezes que essa opção foi escolhida. 
						</p>
					</div>
				</div>

				<!-- CONTENT 04 -->
				<div data-graph="5" data-sectiontitle="Porquê a ESCS?" data-graphcolor="var(--light-blue)" class="flex flex-baseline col-12 graph">
					<div class="col-6">
							<div class="graph-wrapper">
									<canvas id="q6"></canvas>
								</div>
					</div>
					<div class="col-6 col-md-12">
						<h2 class="uppercase">Características que deverão ser mais privilegiadas na ESCS</h2>
						<p>
								Por fim pedimos para indicar as 3 características que deverão ser mais privilegiadas na ESCS para apurar aquilo que para os alunos é mais importante. A informação recolhida no gráfico é apresentada da seguinte forma: A cada cor corresponde uma das opções de escolha, o tamanho de cada parte preenchida por essa cor corresponde ao número de vezes que essa opção foi selecionada, quanto maior for a quantidade de cor, maior é o número de escolhas dessa opção.
						</p>
					</div>
				</div>
			</div>
			<div id="prev" class="slider-prev text-red-light">
				&#9664; Anterior
			</div>
			<!-- SLIDER FIXED ELEMENT -->
			<div id="next" class="slider-next text-red-light">
				Seguinte &#9654;
			</div>

		</div>

	</section>

	<!-- QUESTIONÁRIO -->
	<section data-sectionid="section-4" id="section-4" class="slide container flex flex-center">
		<div class="col-1 d-md-none"></div>
		<div class="flex-direction-column col-12">
			<div class="col-6 col-md-12 rel">
				<div class="line-horizontal-yellow"></div>
				<h1 class="rel">
					O questionário<div class="line-vertical-yellow d-md-none"></div>
				</h1>
			</div>
			<div class="flex flex-baseline col-12 flex-md-wrap">
				<div class="col-6 col-md-12 border-right-yellow">
					<h3 class="col-10">
						Estudas ou estudaste na ESCS e não preencheste o formulário?
						<br>
						Ainda vais a tempo :)
					</h3>
					<a href="./form/index.php" target="_blank" class="btn btn-hover-yellow text-yellow-light">Responder</a>
				</div>
				<div class="col-6 col-md-10">
					<h4>
						Dados recolhidos no inquérito:
					</h4>
					<p>
						&#9642; Género<br>
						&#9642; Idade<br>
						&#9642; Curso<br><br>
						&#9642; Motivos de escolha do curso<br>
						&#9642; Motivos de escolha da ESCS<br>
						&#9642; As 3 características que, na opinião do inquirido, deverão ser mais privilegiadas na ESCS
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- NOTICIAS -->
	<!--
	<section data-sectionid="section-5" id="section-5" class="slide container flex flex-center">
		<div class="col-1 d-md-none"></div>
		<div class="col-12">
			<div class="col-10 col-lg-11 col-md-12 rel">
				<div class="line-horizontal-red"></div>
				<h1 class="rel">
					Notícias da ESCS<div class="line-vertical-red d-md-none"></div>
				</h1>
			</div>
			<div class="col-12">
				    <div id="news-wrapper">


						</div>
			</div>
		</div>
	</section>-->

	<section data-sectionid="section-5" id="section-5" class="slide container flex flex-center">
			<div class="col-1 d-md-none"></div>
			<div class="flex-direction-column col-12">
				<div class="col-6 col-md-12 rel">
					<div class="line-horizontal-red"></div>
					<h1 class="rel">
						Notícias<div class="line-vertical-red d-md-none"></div>
					</h1>
				</div>
				<div class="flex flex-baseline col-12 flex-md-wrap">
					<div class="col-6 col-md-12 border-right-red">
						<h3 class="col-10">
							Sabe as últimas da ESCS
					
						</h3>
					</div>
					<div class="col-6 col-md-10">
							<div id="news-wrapper">


								</div>
					</div>
				</div>
			</div>
		</section>

</body>
<script src="js/jquery.js"></script>
<script type="text/javascript" src=" https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.8/d3.min.js"></script>
<script type="text/javascript" src="https://www.chartjs.org/dist/2.7.3/Chart.bundle.js"></script>
<script type="text/javascript" src=" https://www.chartjs.org/samples/latest/utils.js"></script>
<script src="js/main.js"></script>

</html>