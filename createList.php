<?php
    require('connectMySQL.php');
    session_start();
    // error_reporting(0);
    $return_arr[] = array();
    $userId = $_SESSION['id'] ;
    $email1 = $_SESSION['email'];  
    $sql = "SELECT * from tb_list inner join tb_user_list on tb_user_list.userId=$userId and tb_user_list.listId = tb_list.id
    ";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    // print_r($sql);
    // if(isset($_POST["save"]))
    // {
        
        // $listName = $_POST['listName'];
        // if(isset($_POST["save"])){
        $listName = $_POST['list'];
        $sql = "INSERT INTO tb_list(name) values('$listName')";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $id = $db->lastInsertId();
        echo $id;
        //Lấy giá trị cuối cùng mình vừa thêm vào bảng list.
    //   if(isset($_POST["save"])){
        $x = "INSERT INTO tb_user_list(userId,listId) VALUES ('$userId','$id')";
        $stmt = $db->prepare($x);
        $stmt->execute();
        // $data = $stmt->fetch(PDO::FETCH_ASSOC);
        // $data1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $id = $data['id'];



        // $name = $data['name'];
        // $return_arr[] = array(
        //     "id" => $id,
        //     "list" => $name,
        // );
        // // print_r($return_arr);
        // echo json_encode($return_arr);





    // }
         // print_r($x);
        // header('location:index.php');
       
        // foreach($db->query($sql) as $row){
        //     print_r( 
        //     '<ul class="chap3" name="list">
        //         <li class="one-chap3" name="test" >
        //             <span class="list-icon">
        //                 <svg class="list rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Web-svgs" stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="list"> <path d="M3,7 C2.44,7 2,6.56 2,6 L2,5 C2,4.44 2.44,4 3,4 L4,4 C4.56,4 5,4.44 5,5 L5,6 C5,6.56 4.56,7 4,7 L3,7 Z M4,5 L3,5 L3,6 L4,6 L4,5 Z M7.5,6 C7.22,6 7,5.78 7,5.5 C7,5.22 7.22,5 7.5,5 L17.5,5 C17.78,5 18,5.22 18,5.5 C18,5.78 17.78,6 17.5,6 L7.5,6 Z M3,12 C2.44,12 2,11.56 2,11 L2,10 C2,9.44 2.44,9 3,9 L4,9 C4.56,9 5,9.44 5,10 L5,11 C5,11.56 4.56,12 4,12 L3,12 Z M4,10 L3,10 L3,11 L4,11 L4,10 Z M7.5,11 C7.22,11 7,10.78 7,10.5 C7,10.22 7.22,10 7.5,10 L17.5,10 C17.78,10 18,10.22 18,10.5 C18,10.78 17.78,11 17.5,11 L7.5,11 Z M3,17 C2.44,17 2,16.56 2,16 L2,15 C2,14.44 2.44,14 3,14 L4,14 C4.56,14 5,14.44 5,15 L5,16 C5,16.56 4.56,17 4,17 L3,17 Z M4,15 L3,15 L3,16 L4,16 L4,15 Z M7.5,16 C7.22,16 7,15.78 7,15.5 C7,15.22 7.22,15 7.5,15 L17.5,15 C17.78,15 18,15.22 18,15.5 C18,15.78 17.78,16 17.5,16 L7.5,16 Z" id="K"> </path> </g> </g> </svg>
        //             </span>
        //             <span class="title" id="none">'.$row["name"].'</span>
        //             <span class="list-options" id="none">
        //                 <svg class="options rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="options"> <path d="M17.1330617,2.8594383 C15.9930617,1.7194383 14.0130617,1.7194383 12.8930617,2.8594383 L5.5130617,10.2394383 C5.3330617,10.4394383 5.3330617,10.7594383 5.5130617,10.9594383 C5.7130617,11.1394383 6.0330617,11.1394383 6.2330617,10.9594383 L13.5930617,3.5594383 C14.3530617,2.7994383 15.6730617,2.7994383 16.4130617,3.5594383 C17.1730617,4.3194383 17.1930617,5.5594383 16.4130617,6.3394383 L9.0330617,13.7594383 C8.7130617,14.0794383 8.9330617,14.6194383 9.3730617,14.6194383 C9.5130617,14.6194383 9.6330617,14.5594383 9.7330617,14.4594383 L17.1330617,7.0394383 C18.2930617,5.8794383 18.2930617,4.0194383 17.1330617,2.8594383 L17.1330617,2.8594383 Z M8.4930617,15.3594383 C8.0330617,13.4594383 6.5130617,11.9394383 4.6130617,11.4794383 C4.3530617,11.4194383 4.0930617,11.5794383 4.0130617,11.8194383 L2.0330617,17.3194383 C1.8730617,17.7194383 2.2730617,18.1194383 2.6730617,17.9594383 C8.6730617,15.7794383 8.2530617,15.9594383 8.3730617,15.8194383 C8.4930617,15.6994383 8.5330617,15.5194383 8.4930617,15.3594383 L8.4930617,15.3594383 Z M3.3330617,16.6594383 L4.8130617,12.5794383 C6.0130617,12.9994383 6.9730617,13.9794383 7.3930617,15.1794383 L3.3330617,16.6594383 Z" id="N"></path> </g> </g> </svg>
        //             </span>
        //         </li>
        //     </ul>');
        //         $_SESSION['tb_list.id']=$data['id'];
        //         $_SESSION['tb_list.name']=$data['name'];
        //     }


    // }
    // else{
    //     header('location:index.php');
    // }

?>
  
                 
