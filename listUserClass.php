<?php
    require('list-user.php');
    // session_start();
    
     // session_start();
    $listUser = array();
    $listUser[] = new User("0","vumanhtuan12a3@gmail.com", "1");
    $listUser[] = new User("1","vumanhtuan12a4@gmail.com", "0916157087");
    $listUser[] = new User("2","vumanhtuan12a5@gmail.com", "0916157088");
    $listUser[] = new User("3","vumanhtuan12a6@gmail.com", "0916157089");
    
    $_SESSION['a'] = $listUser;
 
?>