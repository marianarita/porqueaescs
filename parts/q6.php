<?php 
require('connection.php');

$query = 
"SELECT
`m_answer`.`answer_id` AS `current_a`,
`m_answer`.`question_id` AS `q`,
`answer_list`.`answer_text` as `answer_text`,
COUNT(`m_answer`.`answer_id`) AS `answer_value`
from
`m_answer`
left join `answer_list` on (`answer_list`.`answer_id` = `m_answer`.`answer_id`)
WHERE
`m_answer`.`question_id` IN ('Q6')
group by
`m_answer`.`answer_id`
ORDER BY
`m_answer`.`question_id`";
mysqli_query($connection, $query);

$results = mysqli_query($connection, $query);
$rows = array();
while($result = mysqli_fetch_assoc($results)) {
    $rows[] = $result;
}
print json_encode($rows);
    
?>
