<?php

$connection = mysqli_connect('localhost', 'root', '', 'porqueaescs');
mysqli_set_charset($connection, 'utf8');
$results = $_POST;
$data    = $_POST;
$query   = "INSERT INTO `form_records` (`record_id`, `question_id`, `answer_id`) VALUES ";
foreach ($data as $key => $value) {
    //echo($key);
    if (is_array($value)) {
        $str   = json_encode($value);
        $str   = preg_replace('/\[|\]/m', "", $str);
        // echo($str);
        $value = $str;
    } else {
        // echo($value);
    } //echo("<br>");     $query = $query. ",(NULL, '$key', '$value')";    
}
;
$query = str_replace(" VALUES ,", " VALUES ", $query);
$query = $query . ";";
//echo($query);
mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main1.css" />
</head>
<body>
    <form  action="" method="post" > 
        <h1>Dados Sóciodemográficos php</h1>
        <h2>Género</h2>
        <input type="radio" name="genero" value="male"><br>
        <input type="radio" name="genero" value="female"><br>
        <h2>Idade</h2>
        <input type="number" name="idade" placeholder="idade"><br>
        <h2>Curso ou última formação na ESCS</h2>
        <input type="radio" name="curso" value="CURSO_1">Licenciatura AM<br>
        <input type="radio" name="curso" value="CURSO_2">Licenciatura JORN<br>
        <input type="radio" name="curso" value="CURSO_3">Licenciatura RPCE<br>
        <input type="radio" name="curso" value="CURSO_4">Licenciatura PM<br>
        <input type="radio" name="curso" value="CURSO_5">Mestrado AM<br>
        <input type="radio" name="curso" value="CURSO_6">Mestrado JORN<br>
        <input type="radio" name="curso" value="CURSO_7">Mestrado PM<br>
        <input type="radio" name="curso" value="CURSO_8">Mestrado GERP<br>
        <input type="radio" name="curso" value="CURSO_9">Pós-Graduação em Branding e Content Marketing<br>
        <input type="radio" name="curso" value="CURSO_10">Pós-Graduação em Indústrias e Culturas Criativas: Gestão e Estratégias<br>
        <input type="radio" name="curso" value="CURSO_11">Pós-Graduação em Storytelling<br>
        <h1>Porquê a ESCS</h1>
        
        <h2>Porque escolheste estudar na ESCS?</h2>
        <input type="checkbox" name="4[]" value="ESCOLHA_ESCS_1">Localização<br>
        <input type="checkbox" name="4[]" value="ESCOLHA_ESCS_2">Prestígio<br>
        <input type="checkbox" name="4[]" value="ESCOLHA_ESCS_3">Custos mais reduzidos<br>
        <input type="checkbox" name="4[]" value="ESCOLHA_ESCS_4">Possibilidade de trabalhar e estudar<br>
        <input type="checkbox" name="4[]" value="ESCOLHA_ESCS_5">Qualidade da vida académica e convívio<br>
        <input type="checkbox" name="4[]" value="ESCOLHA_ESCS_6">Nenhum dos anteriores<br>
        
        <h2>Porque escolheste o curso que identificaste acima?</h2>
        <input type="checkbox" name="5[]" value="ESCOLHA_CURSO_1">O curso tem saídas profissionais<br>
        <input type="checkbox" name="5[]" value="ESCOLHA_CURSO_2">Vocação, gosto pelas matérias<br>
        <input type="checkbox" name="5[]" value="ESCOLHA_CURSO_3">Boa empregabilidade dos diplomados<br>
        <input type="checkbox" name="5[]" value="ESCOLHA_CURSO_4">O curso tem uma boa componente prática<br>
        <input type="checkbox" name="5[]" value="ESCOLHA_CURSO_5">Médias de entrada acessíveis<br>
        <input type="checkbox" name="5[]" value="ESCOLHA_CURSO_6">Sem média de entrada noutro curso<br>
        <input type="checkbox" name="5[]" value="ESCOLHA_CURSO_7">Nenhum dos anteriores<br>

        <h2>Indica no máximo, 3 qualidades da ESCS</h2>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_1">Bons rpofessores<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_2">Prestígio do estabelecimento<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_3">Boas infraestrururas (salas de aula e apoio didático)<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_4">Boa biblioteca<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_5">Bons meios informáticos<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_6">Localização (facilidade de transporte)<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_7">Garantia de saídas profissionais<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_8">Médias de entrada elevadas<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_9">Elevado sucesso escolar da instituição<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_10">qualidade dos currículos dos cursos<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_11">Atividade de investigação científica<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_12">Atividades extracurriculares<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_13">Boa organização geral<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_14">Estruturas de desporto e lazer<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_15">Zona de refeições<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_16">Serviços médicos e sociais<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_17">Apoio administrativo<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_18">Apoio em ntercâmbios com o estrangeiro<br>
        <input type="checkbox" name="6[]" value="QUALIDADES_ESCS_19">Uma boa associação de estudantes<br>
        <input type="submit" value="Submit">
        <input type="submit" value="Reset">


    </form>
</body>
<script src="/js/jquery.js"></script>
<script src="/js/main.js"></script>

</html>