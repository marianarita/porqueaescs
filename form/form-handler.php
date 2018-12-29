<?php 
/* LIGACAO A BASE DE DADOS */
$connection = mysqli_connect('localhost', 'root', '', 'porqueaescs');
mysqli_set_charset($connection, 'utf8');
$data = $_POST;

/* COMEÇAR SESSAO PARA GUARDAR $_POST */
if (!isset($_SESSION)) {
	session_start();
}

/* QUERY ORIGINAL */
$query = "INSERT INTO `form_records` (`record_id`, `question_id`, `answer_id`) VALUES ";
/* PARA CADA ELEMENTO QUE ESTÁ DENTRO DO ARRAY $_POST */

foreach($data as $key => $value) {
	// echo($key);
	if (is_array($value)) {
		$str = json_encode($value);
		$str = preg_replace('/\[|\]/m', "", $str);
		// echo($str);
		$value = $str;
	} else {
        // echo($value); 
    }
	// echo("<br />");
	/* QUERY COM O PAR CHAVE->VALOR */
	$query = $query . ",(NULL, '$key', '$value')";
};

/* QUERY FINAL */
$query = str_replace(" VALUES ,", " VALUES ", $query);
$query = $query . ";";
//print_r($_POST);
mysqli_query($connection, $query);


/* LIMPAR $_POST DEPOIS DA SUBMISSAO PARA PREVENIR REGISTOS DUPLICADOS */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$_SESSION['postdata'] = $_POST;
	unset($_POST);
	header("Location: " . $_SERVER['PHP_SELF']);
	exit;
}
?>