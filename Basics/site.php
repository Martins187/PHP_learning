<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <!-- <form action = "site.php" method = "get">
           Name: <input type = "text" name = "name">
           <br>
           Age: <input type = "number" name = "age">
           <input type = "submit">
        </form>
    <br>
    Your name is <?php //echo $_GET["name"]?>
    <br>
    Your age is <?php //echo $_GET["age"]?>
    <br> -->

    <!-- Kalkulatora uzdevums -->
    <!-- <form action = "site.php" method = "get">
        <input type= "number" name = "num1">
        <br>
        <input type= "number" name = "num2">
        <br>
        <input type = "submit">   
        </form>

    <?php// echo $_GET["num1"] + $_GET["num2"]?> -->

    <!-- Cilveku ievade---------------------------- -->
    <!-- <form action = "site.php" method = "get">
        Color: <input type= "text" name = "color"><br>
        Plural noun: <input type= "text" name = "pluralNoun"><br>
        Celebrity: <input type = "text" name = "celebrity"><br>
        <input type = "submit">   
    </form>

    <?php
        // $color = $_GET["color"]; 
        // $pluralNoun = $_GET["pluralNoun"];
        // $celebrity = $_GET["celebrity"];
        // echo "Roses are $color <br>";
        // echo "$pluralNoun are blue <br>";
        // echo "I love $celebrity <br>";
    ?> -->
<!-- Parole----------------------------------------------- -->

    <!-- <form action = "site.php" method = "post"> 
        Password: <input type= "password" name = "password"><br>
        <input type = "submit">   
    </form>

    <?php
        //echo $_POST["password"];
    ?> -->

    <!-- Arrays------------------------------------------ -->
    <?php
        // $friends = array("Kevin", "Karen", "Oscar", "Jim");
        // $friends[1] = "Dwight";
        // echo $friends[1];
    ?>
    
    <?php
        // $friends[4] = "Angela";
        // echo $friends[4];
        // echo count($friends);
    ?>

<!-- Checkboxes------------------------------------------ -->

    <!-- <form action = "site.php" method = "post"> 
        Apples: <input type= "checkbox" name = "fruits[]" value = "apples"><br>
        Oranges: <input type= "checkbox" name = "fruits[]" value = "oranges"><br>
        Pears: <input type= "checkbox" name = "fruits[]" value = "pears"><br>
        <input type = "submit">   
    </form>

    <?php
        // $fruits = $_POST["fruits"];
        // echo $fruits[0];
    ?> -->

<!-- Associative arrays ------------------------------------->

<!-- <form action = "site.php" method = "post"> 
        <input type="text" name = "student">
        <input type = "submit">   
    </form> -->

    <?php
        // $grades = array("Jima" => "A+", "Tom" => "B-", "Oscar" => "C+");
        // $grades["Jima"] = "F";
        // echo $grades["Jima"];
        // echo $grades[$_POST["student"]];

    ?>

<!-- Functions ------------------------------------------------->

    <?php
        // function sayHi($name){
        //     echo "Hello $name <br>";
        // }
        // sayHi("Mike");
        // sayHi("John");
        // sayHi("Blake");
    ?>

<!-- Return statements--------------------------------------- -->

        <?php
            // function cube($num){
            //     return $num * $num * $num;
            //     echo "hello"; //nestrada, jo izmanto tikai return.
            // }

            // $cuberesult = cube(4);
            // echo $cuberesult;
        ?>

<!-- if statements------------------------------------------ -->
        <?php
            // $isMale = true;
            // $isTall = false;
            // if ($isMale && $isTall){
            //     echo "You are a tall male";
            // }
            // elseif($isMale && !$isTall){
            //     echo "You are a short male!";
            // }
            // else {
            //     echo "You are not male";
            // }

        ?>

<!-- cooler calsulator -->
        <form action="site.php" method = "post">
            Ievadiet pirmo skaitli: <input type="number" step = "0.1" name = "num1"><br> 
            Ievadiet otro skaitli: <input type="number" name = "num2"><br>
            Ievadiet darbību: <input type="chr" name = "op"><br>
            <input type="submit">
        </form>
       <!-- Step nozimee precizitate -->
       
       <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];

            if($op == "+"){
                echo $num1 + $num2;
            }
            else{
                echo "Si";
            }
        ?>

        
        


    
    
</body>
</html>
