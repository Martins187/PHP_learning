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

<!-- Associative arrays -->

    <?php
        $grades = array("Jima" => "A+", "Pam" => "B-", "Oscar" => "C+");
        echo $grades["Jima"];

    ?>
    
</body>
</html>