<?php
include('./configure.php');
$link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
session_start();

$query = 'SELECT * FROM `test`.`todolist`';
$smt = $link->prepare($query);
$smt->execute();
$reasult = $smt->fetchall(PDO::FETCH_ASSOC);

foreach ($reasult as $row)
         
{
   
    echo '<tr>';
    echo '<td style="width: 5%">' . $row['id'] . '</td>';
    echo '<td style="width: 10%">' . $row['task'] . '</td>';
    echo '<td style="width: 15%">' . $row['context'] . '</td>';
    echo '<td style="width:50%">' . $row['date'] . '</td>';
    echo '<td style="width: 0%">
    <form action="./backend/APIs/update/update.php" method="post">
    <input type="text" value="'.$row['id'].'"name="uid"" hidden>
    <input type="submit" value="修改" style="background-color:#685F74 ; color: white ; font-size: 17px; cursor: pointer;"></form>  
    <form action="./backend/APIs/finish/finish.php" method="post">
    <input type="submit" value="完成" style="background-color:#685F74 ; color: white ; font-size: 17px; cursor: pointer;"></form></td>';
    echo '</tr>';

}

