<?php
    // require("listUserClass.php");
    // session_start();
    // error_reporting(0);
    // $listUser = $_SESSION['a'];
    // $index = count($listUser);
    // $thongbao = true;
    // if(isset($_POST["SignUp"])){
    //     //lấy thông tin từ form đăng ký sign Up
    //     $email = $_POST["email"];
    //     $password = $_POST["password"];
    //     // Kiểm tra file. Các file không được bỏ trống
    //     if( $email == "" || $password == ""){
    //         echo "Chưa nhập tài khoản hoặc mật khẩu";
    //     }
    //     else{
    //         for($i=0; $i <count($listUser) ; $i++) { 
    //            # code...
    //             if( $_POST['email']== $listUser[$i]->getEmail()){
    //                 // header('location:sign-up.php');
    //                 echo "Đã tồn tại tài khoản";
    //                 header("location:sign-up.php?exist=$thongbao");
    //                 exit;
    //             }
    //         }
    //                 if($_POST['password'] != $_POST['re-password']){
    //                     echo "Mật khẩu không trùng khớp";
    //                     header("location:sign-up.php?inexactitude=$thongbao");
    //                 }
    //                 else
    //                 {
    //                     echo "đăng ký thành công";
    //                     $listUser[] = new User(count($listUser),$email,$password);
    //                     // header("location:login.php?exist1=$thongbao");
    //                     $_SESSION['a'] = $listUser;
    //                     print_r($listUser);
    //                 }
                
            
    //     }
    // }
    require('connectMySQL.php');
    session_start();
    error_reporting();
    if(isset($_POST["SignUp"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password= md5($password);
        $sql = "SELECT * FROM tb_user WHERE email='$email' and password='$password'" ;
        $stmt = $db->prepare($sql);
        echo $sql;
        //chuyền câu lệnh vào đối tượng để thực thi executive
        $stmt->execute(); 
        // Dùng để thực thi câu lệnh, Gans
        $data = $stmt->fetch(PDO::FETCH_BOTH);
        if($email == "" || $password == ""){
            echo "Vui lòng nhập tài khoản hoặc mật khẩu";
        }
        else{
            if(!empty($data)){
                echo "Tên email đã tồn tại. Vui lòng nhập email khác";
                header("location:sign-up.php?exist=$thongbao");
                
            }
            else if($_POST['password'] != $_POST['re-password']){
                echo "Mật khẩu không trùng khớp";
                header("location:sign-up.php?inexactitude=$thongbao");
            }
            // $adduser = mysql_query("INSERT INTO user (email,password) VALUE('$email','$password')");
            else{
                echo $email;
                print_r($email);
                $sql = "INSERT INTO tb_user(email,password) VALUES('$email','$password')";
                $stmt = $db->prepare($sql);
                $stmt->execute();
                //Gán lần lượt giá trị trong mảng vào Placeholder
                header("location:login.php");
            }
        }
    }
?>