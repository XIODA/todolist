<?php
include('../../../configure.php');
$link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
 
$task = "";
$context = "";

if(isset($_POST['task'])){
    $task = $_POST['task'];
}

if(isset($_POST['context'])){
    $context = $_POST['context'];
}
if($task != "" and $context != ""){
$query = "INSERT INTO `test`.`todolist` (`task`,`context`) VALUES (?,?)";
$data = [$task, $context];
$sth = $link->prepare($query);
$sth->execute($data);
}
header("Location: ../../../index.php"); 
?>