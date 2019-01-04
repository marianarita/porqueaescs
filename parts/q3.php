<?php 
require('connection.php');

$query = 
"SELECT
`answer_list`.*,
count(`form_records`.`Q3`) as `answer_value`
from
`answer_list`
left join `form_records` on (`answer_list`.`answer_id` = `form_records`.`Q3`)
WHERE
`answer_list`.`question_id` IN ('Q3')
group by
`form_records`.`Q3`,
`answer_list`.`answer_id`
ORDER BY
`answer_value` DESC
";
mysqli_query($connection, $query);

$results = mysqli_query($connection, $query);
$rows = array();
while($result = mysqli_fetch_assoc($results)) {
    $rows[] = $result;
}
print json_encode($rows);
    
?>
