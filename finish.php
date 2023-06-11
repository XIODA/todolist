<?php
// exit;
include('./configure.php');
$link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
$uid = "";
if (isset($_POST['uid'])) {
    $uid = $_POST['uid'];
}

$finish = 1;

if ($uid != "") {
    $sql = "UPDATE `test`.`todolist` SET `finish` =  $finish  where `id` = ? ";
    $data = [$uid];
    $stmt = $link->prepare($sql);
    $stmt->execute($data);
    header("Location: ./index.php");
}
