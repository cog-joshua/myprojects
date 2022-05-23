<?php
    include('model/functions.php');

        //check if database connection is successful
        $conn = connect_db();

        //delete a record from database
        if(isset($_POST['delete'])){
            $id = $_POST['delete'];
            $sql = "DELETE FROM user WHERE user_id = $id";
            if(mysqli_query($conn, $sql)){
                echo "Record deleted successfully.";
                header('Location: index.php');
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
        }