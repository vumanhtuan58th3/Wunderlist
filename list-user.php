<?php
    class User {
        private $_id;
        // private $_username;
        private $_email;
        private $_password;
        //SET
        function setId($id){
            $this->_id = $id;
        }
        // function setUsername($username){
        //     $this->_username = $username;
        // }
        function setEmail($email){
            $this->_email = $email;
        }
        function setPassword($password){
            $this->_password = $password;
        }
        //GET
        function getId(){
            return $this->_id; 
        }
        // function getUsername(){
        //     return $this->_username;
        // }
        function getEmail(){
            return $this->_email;
        }
        function getPassword(){
            return $this->_password;
        }
        function __construct($id,$email,$password){
            $this->_id = $id;
            // $this->_username = $username;
            $this->_email = $email;
            $this->_password = $password;
        }
    }
?>