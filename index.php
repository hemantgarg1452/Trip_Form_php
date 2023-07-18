<?php
$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to". mysqli_connect_error());
    }

    // echo "Success connect to database";
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];

    $sql = "INSERT INTO `trip`.`trips` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";

    //echo $sql;

    if($con->query($sql) == true){
        //echo "Successully Inserted";
        $insert = true;
    } 
    else{
        echo "Error: $sql <br> $con->error";
    }

    $con->close();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Playfair+Display&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="IIT Delhi">
    <div class="container">
        <h1>Welcome To IIT Delhi USA Trip Form</h1>
        <p>
            Enter your details and submit this form to confirm your participation in the trip</p>
            <?php
            if($insert == true){
            echo "<p class='submitmsg'>Thanks for showing intrest in USA trip with us</p>";
            }
            ?>
            <form action="index.php" method="post">
                <input type="text" name = "name" id="name" placeholder="Enter your name">
                <input type="text" name = "age" id="age" placeholder="Enter your Age">
                <input type="text" name = "gender" id="gender" placeholder="Enter your Gender">
                <input type="text" name = "email" id="email"   placeholder="Enter your email">
                <input type="text" name = "phone" id="phone"   placeholder="Enter your phone">
                <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter other info."></textarea>
                <button class="btn">Submit</button>
                <!-- <button class="btn">Reset</button> -->

            </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>