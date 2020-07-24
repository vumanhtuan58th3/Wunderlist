<?php
    require('connectMySQL.php');
    session_start();
    $email1 = $_SESSION['email'];
    $taskId = $_POST['taskId'];
    // $sql = "SELECT tb_comment.* from tb_comment where tb_comment.taskId=$taskId";
    // $stmt = $db->prepare($sql);
    // $stmt->execute(array($sql));
    // $data= $stmt->fetch(PDO::FETCH_ASSOC);
    $comment = $_POST['comment'];
    // if($sql){
        $sql = "INSERT INTO tb_comment(title,taskId) VALUES('$comment','$taskId')";
        $stmt = $db->prepare($sql);
        $stmt->execute(array($sql));
        // $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $sql1 = "SELECT tb_comment.* from tb_comment where tb_comment.taskId=$taskId";
        $stmt1 = $db->prepare($sql1);
        $stmt1->execute(array($sql1));
        $data1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
        // echo $data1;
        foreach($data1 as $comment1){
            $array[] = array(
                "id" => $comment1['id'],
                "title" => $comment1['title'],
                "comment-time" => $comment1['Create_date'],
                "email" => $email1,
            );
       
        }
        echo json_encode($array);
        // header("location:index.php?task_id=$taskId");
    // }
?>

 
