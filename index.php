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
    ?>
</div>
<?php
    include('includes/footer.php');
?>