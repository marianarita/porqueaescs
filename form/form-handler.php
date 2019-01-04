<?php
/* LIGACAO A BASE DE DADOS */
$connection = mysqli_connect('localhost', 'root', '', 'porqueaescs1');
mysqli_set_charset($connection, 'utf8');
$data        = $_POST;
$user_id     = rand(0, 1000000);
$m_answer_id = rand(0, 1000000);
//print_r($_POST);
//echo($user);

/* COMEÇAR SESSAO PARA GUARDAR $_POST */
if (!isset($_SESSION)) {
    session_start();
};

if (!empty($_POST)) {
    $query = "INSERT INTO `form_records` (`record_index`,`user_id`,`Q1`, `Q2`, `Q3` , `Q4`, `Q5`, `Q6`) VALUES (NULL, '$user_id', '$_POST[Q1]','$_POST[Q2]','$_POST[Q3]', '$m_answer_id', '$m_answer_id', '$m_answer_id')";
    //print_r($query);
    mysqli_query($connection, $query);
    for ($i = 0; $i < count($_POST['Q4']); $i++) {
        $choice = $_POST['Q4'][$i];
        $query  = "INSERT INTO `m_answer` (`m_answer_id`,`user_id`,`question_id`,`answer_id`) VALUES ('$m_answer_id', '$user_id', 'Q4', '$choice' );";
        mysqli_multi_query($connection, $query);
        //print_r($query);
    };
    for ($i = 0; $i < count($_POST['Q5']); $i++) {
        $choice = $_POST['Q5'][$i];
        $query  = "INSERT INTO `m_answer` (`m_answer_id`,`user_id`,`question_id`,`answer_id`) VALUES ('$m_answer_id', '$user_id', 'Q5', '$choice' );";
        mysqli_multi_query($connection, $query);
        //print_r($query);
    };
    for ($i = 0; $i < count($_POST['Q6']); $i++) {
        $choice = $_POST['Q6'][$i];
        $query  = "INSERT INTO `m_answer` (`m_answer_id`,`user_id`,`question_id`,`answer_id`) VALUES ('$m_answer_id', '$user_id', 'Q6', '$choice' );";
        mysqli_multi_query($connection, $query);
        //print_r($query);
    };
};

/* LIMPAR $_POST DEPOIS DA SUBMISSAO PARA PREVENIR REGISTOS DUPLICADOS */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['postdata'] = $_POST;
    unset($_POST);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>