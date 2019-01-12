<?php 
require('connection.php');

$query = "SELECT DISTINCT `Q2` as `age`, `q1` as `gender`, count(Q2) as  `answers`  from `form_records` group by `q2`;";
mysqli_query($connection, $query);
$results = mysqli_query($connection, $query);
$rows = array();
while($result = mysqli_fetch_assoc($results)) {
    $rows[] = $result;
}
print json_encode($rows);
    
?>
