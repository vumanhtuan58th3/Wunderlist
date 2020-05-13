<?php
    require('connectMySQL.php');
    session_start();
    // $listId = $_SESSION["tb_list.id"];
    // $taskId = $_SESSION["tb_task.id"];
    $idComment = $_POST['idComment'];
    $sql = "DELETE FROM tb_comment where id=$idComment";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    // header("");
?>
                              