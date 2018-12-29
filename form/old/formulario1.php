<?php

$connection = mysqli_connect('localhost','root','','porqueaescs');
mysqli_set_charset($connection,'utf8');
$results = $_POST;
$data = $_POST;


if (!isset($_SESSION)) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['postdata'] = $_POST;
    unset($_POST);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

$query = "INSERT INTO `form_records` (`record_id`, `question_id`, `answer_id`) VALUES ";

foreach ($data as $key => $value) {
//echo($key);
if(is_array($value)){
$str = json_encode($value);
$str = preg_replace('/\[|\]/m',"", $str);
// echo($str);
$value = $str;
}else{
// echo($value);
}

//echo("<br>"); 

$query = $query. ",(NULL, '$key', '$value')";


};

$query = str_replace(" VALUES ,"," VALUES ",$query);

$query = $query . ";";
//echo($query);


mysqli_query ($connection, $query);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>

<body>

    <section class="home">
        <div class="section-content">
        <h1>
            Porquê a ESCS?
        </h1>
        <h2>Questionário</h2>
        <a href="#form">Começar</a>
    </div>
    </section>
    <section>
    <div id="progress-bar"></div>
        <form action="" method="post" id="form">
                <fieldset>          
                        <label>Antes de mais, qual é o teu nome?</label>
                       <input type="text" class="text-input name-input">
                   </fieldset>
           
            <fieldset>
                <legend><span class="name">a</span>Género</legend>
                <input type="radio" name="Q1" value="male"><br>
                <input type="radio" name="Q1" value="female"><br>
            </fieldset>
            <fieldset>
                <legend>Idade</legend>
                <input type="number" name="Q2" placeholder="idade"><br>
            </fieldset>
            <fieldset>
                <legend>Curso ou última formação na ESCS</legend>
                <input type="radio" name="Q3" value="CURSO_1">Licenciatura AM<br>
                <input type="radio" name="Q3" value="CURSO_2">Licenciatura JORN<br>
                <input type="radio" name="Q3" value="CURSO_3">Licenciatura RPCE<br>
                <input type="radio" name="Q3" value="CURSO_4">Licenciatura PM<br>
                <input type="radio" name="Q3" value="CURSO_5">Mestrado AM<br>
                <input type="radio" name="Q3" value="CURSO_6">Mestrado JORN<br>
                <input type="radio" name="Q3" value="CURSO_7">Mestrado PM<br>
                <input type="radio" name="Q3" value="CURSO_8">Mestrado GERP<br>
                <input type="radio" name="Q3" value="CURSO_9">Pós-Graduação em Branding e Content Marketing<br>
                <input type="radio" name="Q3" value="CURSO_10">Pós-Graduação em Indústrias e Culturas Criativas: Gestão
                e Estratégias<br>
                <input type="radio" name="Q3" value="CURSO_11">Pós-Graduação em Storytelling<br>
            </fieldset>

            <h1>Porquê a ESCS</h1>
            <fieldset>
                <legend>Porque escolheste estudar na ESCS?</legend>
                <input type="checkbox" name="Q4[]" value="ESCOLHA_ESCS_1">Localização<br>
                <input type="checkbox" name="Q4[]" value="ESCOLHA_ESCS_2">Prestígio<br>
                <input type="checkbox" name="Q4[]" value="ESCOLHA_ESCS_3">Custos mais reduzidos<br>
                <input type="checkbox" name="Q4[]" value="ESCOLHA_ESCS_4">Possibilidade de trabalhar e estudar<br>
                <input type="checkbox" name="Q4[]" value="ESCOLHA_ESCS_5">Qualidade da vida académica e convívio<br>
                <input type="checkbox" name="Q4[]" value="ESCOLHA_ESCS_6">Nenhum dos anteriores<br>
            </fieldset>
            <fieldset>
                <legend>Porque escolheste o curso que identificaste acima?</legend>
                <input type="checkbox" name="Q5[]" value="ESCOLHA_CURSO_1">O curso tem saídas profissionais<br>
                <input type="checkbox" name="Q5[]" value="ESCOLHA_CURSO_2">Vocação, gosto pelas matérias<br>
                <input type="checkbox" name="Q5[]" value="ESCOLHA_CURSO_3">Boa empregabilidade dos diplomados<br>
                <input type="checkbox" name="Q5[]" value="ESCOLHA_CURSO_4">O curso tem uma boa componente prática<br>
                <input type="checkbox" name="Q5[]" value="ESCOLHA_CURSO_5">Médias de entrada acessíveis<br>
                <input type="checkbox" name="Q5[]" value="ESCOLHA_CURSO_6">Sem média de entrada noutro curso<br>
                <input type="checkbox" name="Q5[]" value="ESCOLHA_CURSO_7">Nenhum dos anteriores<br>
            </fieldset>
            <fieldset>
                <legend>Indica no máximo, 3 qualidades da ESCS</legend>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_1"  value="QUALIDADES_ESCS_1" ><label for="QUALIDADES_ESCS_1"  class="">Bons professores</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_2"  value="QUALIDADES_ESCS_2" ><label for="QUALIDADES_ESCS_2"  class="">Prestígio do estabelecimento</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_3"  value="QUALIDADES_ESCS_3" ><label for="QUALIDADES_ESCS_3"  class="">Boas infraestrururas (salas de aula e apoio didático)</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_4"  value="QUALIDADES_ESCS_4" ><label for="QUALIDADES_ESCS_4"  class="">Boa biblioteca</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_5"  value="QUALIDADES_ESCS_5" ><label for="QUALIDADES_ESCS_5"  class="">Bons meios informáticos</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_6"  value="QUALIDADES_ESCS_6" ><label for="QUALIDADES_ESCS_6"  class="">Localização (facilidade de transporte)</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_7"  value="QUALIDADES_ESCS_7" ><label for="QUALIDADES_ESCS_7"  class="">Garantia de saídas profissionais</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_8"  value="QUALIDADES_ESCS_8" ><label for="QUALIDADES_ESCS_8"  class="">Médias de entrada elevadas</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_9"  value="QUALIDADES_ESCS_9" ><label for="QUALIDADES_ESCS_9"  class="">Elevado sucesso escolar da instituição</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_10" value="QUALIDADES_ESCS_10"><label for="QUALIDADES_ESCS_10" class="">qualidade dos currículos dos cursos</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_11" value="QUALIDADES_ESCS_11"><label for="QUALIDADES_ESCS_11" class="">Atividade de investigação científica</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_12" value="QUALIDADES_ESCS_12"><label for="QUALIDADES_ESCS_12" class="">Atividades extracurriculares</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_13" value="QUALIDADES_ESCS_13"><label for="QUALIDADES_ESCS_13" class="">Boa organização geral</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_14" value="QUALIDADES_ESCS_14"><label for="QUALIDADES_ESCS_14" class="">Estruturas de desporto e lazer</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_15" value="QUALIDADES_ESCS_15"><label for="QUALIDADES_ESCS_15" class="">Zona de refeições</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_16" value="QUALIDADES_ESCS_16"><label for="QUALIDADES_ESCS_16" class="">Serviços médicos e sociais</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_17" value="QUALIDADES_ESCS_17"><label for="QUALIDADES_ESCS_17" class="">Apoio administrativo</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_18" value="QUALIDADES_ESCS_18"><label for="QUALIDADES_ESCS_18" class="">Apoio em ntercâmbios com o estrangeiro</label></div>
               <div> <input type="checkbox" name="Q6[]" id="QUALIDADES_ESCS_19" value="QUALIDADES_ESCS_19"><label for="QUALIDADES_ESCS_19" class="">Uma boa associação de estudantes</label></div>
            </fieldset>
            <input type="submit" value="Submit">
            <input type="submit" value="Reset">


        </form>
    </section>
</body>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>

</html>