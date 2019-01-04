<?php 
require('connection.php');

$query = "SELECT DISTINCT `Q2` as `text`, `q1` as `group`, count(Q2) as  `size`  INTO OUTFILE '/tmp/teste.csv'FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n' from `form_records` group by `q2`;";
mysqli_query($connection, $query);
 
header('location: index.html');
die();
?>
