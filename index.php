<?php 
    include('includes/header.php');
    include('model/functions.php');
?>
<div class="container">
    <?php 
        //get the sum of two numbers directly in a class
    
        $calc = new Calculation();
        echo $calc->add(1, 2)."<br>";
        echo $calc->subtract(1, 2)."<br>";

        //get the sum of two numbers directly in a function
        $sum = add(2, 2);
        echo $sum."<br>";

        //get the names directly in a class
        $names = new Names();
        echo $names->getNames("John", "Doe")."<br>";

        //check if a value exists in an array
        $exist = new ExistChecker();
        $array = array("John", "Doe", "Jane", "Mary");
        echo $exist->checkExistCase("Doe", $array);

        //check if database connection is successful
        $conn = connect_db();

        //submit form
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            


            $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

            if(mysqli_query($conn, $sql)){
                echo "Records added successfully.";
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
        }

        //select all records from database
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo '<table class="table table-striped">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>Username</th>';
            echo '<th>Email</th>';
            echo '<th>Password</th>';
            echo '</tr>';
            echo '</thead>';
            foreach($result as $row){
                $id = $row['user_id'];
                $username = $row['username'];
                $email = $row['email'];
                $password = $row['password'];
                echo '<tr>';
                echo '<td>'.$id.'</td>';
                echo '<td>'.$username.'</td>';
                echo '<td>'.$email.'</td>';
                echo '<td>'.$password.'</td>';
                echo '<td>
                        <form action="response.php" method="post">
                            <input type="hidden" name="delete" value="'.$id.'">
                            <button type="submit">Delete</button>
                        </form>
                    </td>';
                echo '</tr>';
            }
            echo '</table>';
        }




        
    ?>
</div>
<form action="index.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Submit">
</form>
<?php
    include('includes/footer.php');
?>
