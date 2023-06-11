<?php
include('../../../configure.php');
$link = new PDO('mysql:host=' . $hostname . ';dbname=' . $database . ';charset=utf8', $username, $password);
session_start();
if (isset($_SESSION['ID'])) { //如果儲存到ID 便取得存取ID的變數
    $ID = $_SESSION['ID'];
}

$task_1 = "";
$context_1 = "";
$uid = "";
// $id = "";
if (isset($_POST['task_1'])) {
    $task_1 = $_POST['task_1'];
}
echo $task_1;

if (isset($_POST['context_1'])) {
    $context_1 = $_POST['context_1'];
}
echo $context_1;
if (isset($_POST['uid'])) {
    $_SESSION['uid'] = $_POST['uid'];

}
$uid = $_SESSION['uid'];
echo $uid;
// echo $_SESSION['uid'];
// exit;

// echo $_SESSION['uid'];


if ($task_1 != "" and $context_1 != "") {
    $sql = "UPDATE `test`.`todolist` SET `task` =  ? , `context` = ? where `id` = ? ";
    // $sql = "UPDATE `test`.`todolist` SET `task`,`context` = ?,? WHERE `ID` = ?";
    $data = [$task_1,$context_1,$uid];
    $stmt = $link->prepare($sql);
    $stmt->execute($data);
    $reasult = $stmt->fetchall(PDO::FETCH_ASSOC);
    
    header("Location: ../../../index.php"); 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" id="task" name="task_1" placeholder="請輸入代辦事項">
        <input type="text" id="context" name="context_1" placeholder="文字說明">
        <input type="submit" value="Add" class="button">
    </form>
</body>

</html>