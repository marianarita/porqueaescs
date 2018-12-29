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
