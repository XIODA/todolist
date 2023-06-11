<?php
include('./configure.php');
$link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);

$query = 'SELECT * FROM `test`.`todolist`';
$smt = $link->prepare($query);
$smt->execute();
$reasult = $smt->fetchall(PDO::FETCH_ASSOC);

foreach ($reasult as $row)            //  同 while ($row = $result->fetch())
{
    echo '<tr>';
    echo '<td style="width: 5%">' . $row['id'] . '</td>';
    echo '<td style="width: 10%">' . $row['task'] . '</td>';
    echo '<td style="width: 15%">' . $row['context'] . '</td>';
    echo '<td style="width:50%">' . $row['date'] . '</td>';
    echo '<td style="width: 0%">修改 完成</td>';
    // echo '<td style="width: 0%">完成</td>';
    echo '</tr>';
}
