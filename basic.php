<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP web page</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
        define('PI', 3.14);
        //Arithmatic operators............
            $variable1 = 34;
            $variable2 = 45;
            echo "<br>";

            print "the first var is:" . $variable1 . "<br>"; 
            print "the first var is:" . $variable2 . "<br>"; 
            
            echo "<br>";

            echo "this is my first operator in php is:" . $variable1 + $variable2 . "<br>";
            echo "this is my first operator in php is:" . $variable1 - $variable2 . "<br>";
            echo "this is my first operator in php is:" . $variable1 * $variable2 . "<br>";
            echo "this is my first operator in php is:" . $variable1 / $variable2 . "<br>";
        

            //Assignment operators........
            $newVar = $variable1;
            $newVar += 1;
            $newVar -= 1;
            echo "the value of new var is:" . $newVar . "<br>";

            echo "<br>";

            //Comparision operator........
            echo "the value of 1==4 is";
            echo var_dump(1==4);
            echo "<br>";
            echo "the value of 1!=4 is";
            echo var_dump(1!=4);
            echo "<br>";
            echo "the value of 1<=4 is";
            echo var_dump(1<=4);
            echo "<br>";
            echo "the value of 1>=4 is";
            echo var_dump(1>=4);
            echo "<br>";
              
            //Increment operator.........
            // echo "Actual" . $variable1++ . "<br>";
            // echo "incremented value is" . $variable1 . "<br>";
              
            // echo "Actual" . $variable2-- . "<br>";
            // echo "Decremented value is" . $variable2 . "<br>";

            echo "Actual" . ++$variable1 . "<br>";
            echo "incremented value is" . $variable1 . "<br>";
              
            echo "Actual" . --$variable2 . "<br>";
            echo "Decremented value is" . $variable2 . "<br>";

            //Logical operator ...........
            $myVarr = (true and true);
            echo "<br>";
            echo var_dump($myVarr);

            $myVarr = (true and false);
            echo "<br>";
            echo var_dump($myVarr);

            $myVarr = (true or true);
            echo "<br>";
            echo var_dump($myVarr);

            $myVarr = (true or false);
            echo "<br>";
            echo var_dump($myVarr);

            $myVarr = (true xor true);
            echo "<br>";
            echo var_dump($myVarr);

            $myVarr = (true xor false);
            echo "<br>";
            echo var_dump($myVarr);

            //Datatypes...........


            echo "<br> datatypes <br>";
            $var = "this is php";
            echo var_dump($var);
            echo "<br>";

            $var = 67;
            echo var_dump($var);
            echo "<br>";

            $var = 67.1;
            echo var_dump($var);
            echo "<br>";

            $var = true;
            echo var_dump($var);
            echo "<br>";

            echo PI;







        ?>
        <?php
           // echo "This is starting of my PHP coourse";
        ?>
    </div>
    
</body>
</html>