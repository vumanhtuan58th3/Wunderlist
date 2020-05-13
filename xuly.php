<?php
    // require("connectMySQL.php");
    // session_start(); // dùng để lưu thông tin
    // error_reporting(0);
    // // gọi file list-user.php
    // $listUser = $_SESSION['a'];
    // print_r($listUser);
    // if(isset($_POST["login"]))
    // {
    //     // lấy thông tin người dùng
    //     $email = $_POST["email"];
    //     $password = $_POST["password"];
    //     $listUser = $_SESSION['a'];
    //     print_r($listUser);
    //     $listUser[] = new User("12345", "vumanhtuan58th3","vumanhtuan12a3@gmail.com", "1");
    //     $listUser[] = new User("123456", "vumanhtuan58th4","vumanhtuan12a4@gmail.com", "0916157087");
    //     $listUser[] = new User("123457", "vumanhtuan58th5","vumanhtuan12a5@gmail.com", "0916157088");
    //     $listUser[] = new User("123458", "vumanhtuan58th6","vumanhtuan12a6@gmail.com", "0916157089");
    //     $test = false;
    //     echo $email;
    //     echo $password;
    //     if($email == "" || $password == ""){
    //         echo "email hoặc password chưa nhập vào";
    //     }
    //     else
    //     {
            
    //         echo "cho tuan";
    //     }
    //     for($i=0; $i <count($listUser) ; $i++) 
    //         { 
    //             if($email == $listUser[$i]->getEmail() && $password == $listUser[$i]->getPassword())
    //             {
    //                 $test = true;
    //                 $userId = $listUser[$i]->getId();
                   

    //             }
    //         }
    //         if ($test == true){
    //             $_SESSION['email'] = $email;
    //             header('location:index.php');
    //             // $_SESSION['email'] = $email;
    //         }
    //         else{
    //             header('location:login.php');
    //         }
    //     }
    require("connectMySQL.php");
    session_start(); // dùng để lưu thông tin
    error_reporting(0);
    // gọi file list-user.php
   
    if(isset($_POST["login"]))
    {
        // lấy thông tin người dùng
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password = md5($password);
        $sql= "select * from tb_user where email='$email' and password='$password'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        echo $sql;
        $data = $stmt->fetch(PDO::FETCH_BOTH);
        if($email == "" || $password == ""){
            echo "email hoặc password chưa nhập vào";
        }
        // else
        // {
            
        //     echo "cho tuan";
        // }
        // for($i=0; $i <count($listUser) ; $i++) 
        //     { 
        //         if($email == $listUser[$i]->getEmail() && $password == $listUser[$i]->getPassword())
        //         {
        //             $test = true;
        //             $userId = $listUser[$i]->getId();
                   

        //         }
        //     }
            // if ($test == true){
            //     $_SESSION['email'] = $email;
            //     header('location:index.php');
            //     // $_SESSION['email'] = $email;
            // }
            // else{
            //     header('location:login.php');
            // }
            if(count($email)>0 and $data['password'] == $password ){
                $_SESSION['id'] = $data['id'];
                $_SESSION['email'] = $data['email'];
                header('location:index.php');
                
            }
            else{
                echo("sai tài khoản or mật khẩu");
                // header('location:login.php');
               
            }
        }
?>