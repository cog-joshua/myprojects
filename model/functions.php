<?php

    //connect and check connection to database
    function connect_db(){
        $conn = mysqli_connect("localhost", "root", "", "crud");
        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
        }else{
            echo "connection successful";
        }
        return $conn;
    }

    //class that will handle check connection to database
    // class Connection{
    //     public function connect(){
    //         $conn = mysqli_connect("localhost", "root", "", "crud");
    //         if(!$conn){
    //             die("Connection failed: " . mysqli_connect_error());
    //         }else{
    //             echo "connection successful";
    //         }
    //         return $conn;
    //     }
    // }


    // if(isset($_POST['submit'])){
    //     $username = $_POST['username'];
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
        


    //     $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

    //     if(mysqli_query($conn, $sql)){
    //         echo "Records added successfully.";
    //     } else{
    //         echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    //     }
    // }


    //return the sum of two numbers
    function add($num1, $num2) {
        return $num1 + $num2;
    }

    Class Calculation{
        public function add($num1, $num2) {
            return $num1 + $num2;
        }

        public function subtract($num1, $num2) {
            return $num1 - $num2;
        }
    }

    Class Names{
        public function getNames($firstName, $lastName) {
            return $firstName . " " . $lastName;
        }
    }
    Class ExistChecker{
        //check if a value exists in an array not case sensitive
        public function checkExistCase($value, $array) {
            if(in_array(strtolower($value), array_map('strtolower', $array))) {
                return "Array contains the value";
            } else {
                return "Array does not contain the value";
            }
        }
    }
    