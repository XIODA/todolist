<?php
// exit;
include('./configure.php');
$link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
// session_start();
if (isset($_POST['uid'])) {
    $_SESSION['uid'] = $_POST['uid'];
}
$uid = $_SESSION['uid'];
$finish = 0;

$sql = "UPDATE `test`.`todolist` SET `finish` =  1  where `id` = ? ";
$data = [$uid];
$stmt = $link->prepare($sql);
$stmt->execute($data);
$reasult = $stmt->fetchall(PDO::FETCH_ASSOC);


