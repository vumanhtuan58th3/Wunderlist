<?php
    require('connectMySQL.php');
    session_start();
    $listId = $_POST['id'];
    $listName = $_POST['list'];
    // print_r($listId);
    $sql = "DELETE FROM tb_list where id=$listId";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    echo $listId;
    // header("location:index.php");
?>
        
                     