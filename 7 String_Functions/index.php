<?php
$word = "Welcome to CloudWays";
    echo "<h2>Count the length of a word: strlen($word)</h2>";
    // Will return the length of givin string
    echo strlen($word)."<br>"; 
    echo "<h2>Count the amount of words: str_word_count($word)</h2>";
    // Will return the number of words in given string
    echo str_word_count($word)."<br>"; 
    echo "<h2>Reverse words: strrev($word)</h2>";
    // Will return the given string starting from the end
    echo strrev($word); 
    echo "<h2>Returns starting value: strpos($word)</h2>";
    // Will return the number of the position where the word starts at.
    echo strpos("Welcome to CloudWays", "CloudWays"); 
    echo "<h2>Returns starting value: strpos('everyone','Deborah','My name is everyone!')</h2>";
    // Will return the string with the replaced word.
    echo str_replace("everyone", "Deborah","My name is everyone!");
    echo "<h2>Returns every word's first letter in a uppercase(echo ucwords('Welcome to the php world')</h2>";
     // Will Returns every word's first letter in a uppercase
     echo ucwords("Welcome to the php world"); 
    echo "<h2>Returns every word to lowercase(strtolower('WELCOME TO CLOUDWAYS'))</h2>";
      // Will return all words in lowercase
    echo strtolower("WELCOME TO CLOUDWAYS"); 
    echo "<h2>Returns a repeat of the string.</h2>";
     // Will return a repeat of the sting
     echo str_repeat("return return return return return ", 5); 
    echo "<h2>Returns a result after comparing strings.</h2>";
     // Will return a result after comparing strings
    echo strcasecmp("CloudwaYs","Cloudways");
    echo '<br>';
    echo strcmp("cloudways","cloudways");
    echo '<br>';
    echo strcmp("cloudways","Hosting");
    echo '<br>';
    echo strcmp("a","b");
    echo '<br>';
    echo strcmp('abb baa','abb baa caa');
    echo "<br>";
    //will return a trimmed version of words according to the letters you gave in.
    $str = "Wordpess Hosting";
    echo $str . "<br>";
    $res = str_replace("o", "", $str);
    echo $res;
    echo "<br>";
?>