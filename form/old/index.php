<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>
		Page Title
	</title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="css/main.css" media="screen" rel="stylesheet" type="text/css">

	<style>
	section {
    width: 100vw;
    height: 100vh;
    max-height: 100%;
    max-width: 100%;
}

.center-align {
    align-items: center;
    justify-items: center;
    /* height: 80%; */
    position: relative;
    /* max-width: 100%; */
}

.section__header {
    position: relative;
    justify-self: flex-end;
    padding: 80px;
    padding-left: 0;
    padding-top: 30px;
}

.title {}

.big-title {
    font-size: 6rem;
    font-weight: bold;
    margin: 0;
}

h1.section__header--bigger {
    font-size: 10rem;
    font-weight: bold;
    margin: 0;
}

.section__text {
    /* font-size: 1rem; */
}

.section__text__quote p {
    font-size: 1.1rem;
    margin-bottom: 0;
}

.section__text__quote {padding: 80px;position: absolute;top: 0;left: 0;}

.section__text {
    /* display: grid; */
    position: relative;
    justify-self: flex-start;
    width: 100%;
}

.button--cta {
    padding: 15px;
    background: transparent;
    border: 2px solid var(--color-blue-light);
    position: absolute;
    right: 0;
    bottom: 0;
}

.button--cta a {
    font-size: 1.1rem;
    color: var(--color-blue-light);
    font-family: var(--font-secondary);
}

.line--horizontal {
    height: 2px;
    width: 40%;
    background-color: var(--color-blue-light);
    position: absolute;
    bottom: 0;
}

.line--vertical {
    height: 25%;
    width: 2px;
    background-color: var(--color-blue-light);
    position: absolute;
    right: 0;
    bottom: 30%;
}

img.section__header__image {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    opacity: .2;
}
	
	</style>
</head>

<body>
		<section class="_2col center-align" id="home">
			<div class="section__header">
				<img class="section__header__image" src="img/logo-01.svg">
				<div class="line line--horizontal"></div>
				<div class="line line--vertical"></div>
				<h1 class="big-title">Porquê a</h1>
				<h1 class="section__header--bigger">ESCS?</h1>
				<button class="button button--cta"><a href="formulario.php">Responder ao questionário</a></button>
			</div>
			<div class="section__text">
				<div class="section__text__quote">
					<p>"Somos uma instituição cada vez mais comprometida e atenta às dinâmicas da academia, do mundo
						empresarial e da sociedade. Somos reconhecidos pela qualidade do ensino, pela experiência da
						aprendizagem, pelo rigor académico e pela reputação dos nossos diplomados e docentes. ”</p>

				</div>
			</div>
		</section>
		<script src="js/jquery.js">
		</script>
		<script src="js/main.js">
		</script>
</body>

</html>