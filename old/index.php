<?PHP 
require('connection.php');
$query = "SELECT COUNT(*) as `numero total de respostas:` FROM `form_records`";

mysqli_query($connection, $query);

$results = mysqli_query($connection, $query);
$rows = array();
while($result = mysqli_fetch_assoc($results)) {
    $rows[] = $result;
}
print json_encode($rows);    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <br> <a href="q1-2.html">Gráfico 1</a><br>
    <a href="q3.html">Gráfico 2</a><br>
    <a href="q4.html">Gráfico 3</a><br>
    <a href="q5.html">Gráfico 4</a><br>
    <a href="q6.html">Gráfico 5</a><br>
</body>
</html>