<?php
    require('connectMySQL.php');
    session_start();
    // unset($_SESSION['tb_task.id']);
    // $data1=$_SESSION['searchTask1'];
    // $dataTask=$_SESSION['tasks'];
    // unset($dataTask);
    // unset($_SESSION['searchTaskArray']);
    // unset($data1);
    // print_r($data1);
    // $listId = $_SESSION["tb_list.id"];
    // print_r($listId);
    // print_r($_SESSION['searchTask1']);
    $searchTask = $_POST["search"];
    // $sql= "SELECT * FROM tb_task WHERE name LIKE '%$searchTask%'";
    $sql= "SELECT DISTINCT listId FROM tb_task WHERE name LIKE '%$searchTask%'";
    // DISTINCT là câu lênh để loại bỏ tất cả các bản sao của bản ghi và chỉ lấy bản ghi duy nhất
    // print_r($sql);
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $data2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
    $rowList = $stmt->rowCount();
    // $sql3 = "SELECT listId FROM tb_task where"
    // echo $rowList;
    // $sql1 = "SELECT * FROM tb_task where name LIKE '%$searchTask%'";


    // $sql1 = "SELECT * FROM tb_task where name LIKE '%$searchTask%'";
    // $stmt = $db->prepare($sql1);
    // $stmt->execute();
    // $data3 = $stmt->fetchAll(PDO::FETCH_ASSOC);


    // $listId = $data3['listId'];
    // $sql2 = "SELECT * FROM tb_list where tb_list.id=$listId"; 
    // $stmt = $db->prepare($sql2);
    // $stmt->execute();
    // $data4 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $nameList = $data4['name'];
    // unset($data1);
    // unset($data1);
    $_SESSION['rowTask'] = $rowList;
    // print_r($rowTask);
    $_SESSION['searchTaskArray'] = $data2;
    // echo $_SESSION['searchTaskArray'];
    $_SESSION['searchTask']= $searchTask;
    // foreach($data3 as $task){
    //     $array[] = array(
    //         "id" => $task['id'],
    //         "name" => $task['name'],
    //         "listId" => array(

    //         ),
    //         // "nameList" => $nameList,
    //     );
    // }
    // foreach($data2 as $task1){
    //     $l1 = $task1['listId'];
    //     print_r($l1);
    // }

        // $sql2 = "SELECT * FROM tb_list where id=$l1";
        // print_r($sql2);
        // $stmt = $db->prepare($sql2);
        // $stmt->execute();
        // $data4 = $stmt->fetch();
        // print_r($data4);
    
        // foreach($data4 as $task2){
       $sql1 = "SELECT * FROM tb_task where name LIKE '%$searchTask%'";
        $stmt1 = $db->prepare($sql1);
        $stmt1->execute();
        $data3 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
   
    foreach($data2 as $task){
        $l1 = $task['listId'];
        // print_r($l1);
        
        $sql2 = "SELECT * FROM tb_list where id=$l1";
        // print_r($sql2);
        $stmt = $db->prepare($sql2);
        $stmt->execute();
        $data4 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // print_r($data4);
        foreach($data4 as $task2){
        $array[] = array(
            "id1" => $task2['id'],
            "name1" => $task2['name'],
            "array1" => array(
                "id" => $data3,
                // "id" => $task['id'],
                // "name" => $task['name'],
                // "idList" => $task['listId'],
            // "nameList" => $nameList,

            ),
        );
    }
    }

    
    // foreach($data2 as $task1){
    //     $array[] = array(
    //         "listId" => $task1["listId"],
    //     );
    // }
        // $array[] = array(
        //     "listId" => $data2,
        // )
    
    echo json_encode($array);
    // print_r($data2);
    // print_r($searchTask);
    // $_SESSION['searchTask']=$sql;
    // echo $_SESSION['searchTask'];
    // foreach( $data as $row ) {
    //     // echo $row["id"];
    //     echo $row["name"];
    // }
    // while ($data=$stmt->fetch(PDO::FETCH_ASSOC)) {
    //     echo"<pre>".print_r($data,true)."</pre>";
    // }
    // header("location:index.php");
?>