<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: gray;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class = "container">
        <h2> Welcome php devs </h2>
        <p> your devfest elegible status is here </p>
    <?php
    $age = 15;
    if($age>15){
        echo "you are eligible to devfest";
    }else if($age == 15){
        echo "you are 5 years old <br>" ;
    }else{
        echo "Not elgible";
    }
    //Array........

    $langs = array("Java", "c++", "php");
    echo $langs[1];
    echo count ($langs);
    
    echo "<br>";

    //Loops.....
    $a = 0;
    while($a <= 10){
        echo "<br> value is:" . $a;
        $a++;
    }

    //Iterating arrays in php using loops.......
    $a = 0;
    while($a < count($langs)){
        echo "<br> language is:" . $langs[$a];
        $a++;
    }
    echo "<br>";

    // using do while loop.......
    $a = 20;
    do{
        echo "hello devs!";
        $a++;
    } while($a < 10);
    
    echo "<br>";

    for($a=0; $a<10; $a++){
        echo "<br> the value from for loop is:";
        echo $a;
    }
    echo "<br>";

    foreach($langs as $para){
        echo "<br> the foreach para val is:";
        echo $para;
    }

    //Functions......

    function print_number($number){
        echo "<br> your number is:";
        echo $number;
    }

    print_number(44);


    ?>

    </div>
</body>
</html>