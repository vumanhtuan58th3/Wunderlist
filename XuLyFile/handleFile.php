<?php
    // $name = $_FILES["loadFile"]["name"];
    // $type = $_FILES["loadFile"]["type"];
    // $size = $_FILES["loadFile"]["size"];
    
    // if( $size <= 5*1024*1024 ) {
    //     move_uploaded_file(
    //         $_FILES["loadFile"]["tmp_name"], 
    //         "../UploadFile/$name"
    //     );
    // }else{
    //     echo "FIle cua ban phai nho hon 5M";	
    // }
    $taskId = $_POST['taskId'];
    $folder_path = '../UploadFile';
    $file_path = $folder_path.$_FILES['loadFile']['name'];
    $flag_ok = true;
    if(isset($_POST["submit"])){
        $check = getimagesize($_FILES['loadFile']['tmp_name']);
        if ($check !==false) {
            # code...
            echo "File is an image - ".$check["mime"] . ".";
            $flag_ok = true;
        }
        else{
            echo "File is not an image";
            $flag_ok = false;
        }
    }
    if (file_exists($file_path)) {
        # code...
        echo "File already exist";
        $flag_ok = false;
    }
    $ex = array('jpg','png','jpeg', 'gif');
    $file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    if (!in_array($file_type,$ex)) {
        # code...
        echo "Loại file không hợp lệ";
        $flag_ok = false;
    }
    if ($_FILES['loadFile']['size']> 5000000) {
        # code...
        echo "Dung lượng file quá lớn";
        $flag_ok = false;
    }
    if ($flag_ok) {
        # code...
        move_uploaded_file($_FILES['loadFile']['tmp_name'],$file_path);
    }
    else{
        echo "Không upload được";
    }
    if(isset($_FILES['loadFile'])&&$_FILES['loadFile']['name']!=null){
        $sql = "INSERT INTO tb_files(link,taskId) VALUES ('$file_path','$taskId')";
        $stmt = $db->query($sql);
        $stmt->execute();
        echo "UpLoad thành công";
    }
?>