<!-- //string.... -->

<?php
    $str = "This";
    echo $str. "<br>";
    $length = strlen($str);
    echo "the length of string is " . $length. "<br>";
    echo "the number of word count is: " .str_word_count($str). "thank you <br>";
    echo "the reversed string is " . strrev($str). "<br>";
    echo "the search for is in the string is ". strpos($str, "is"). "<br>";
    echo "the replaced string is ". str_replace("is", "at", $str). "<br>";
?>