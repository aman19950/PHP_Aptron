<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //creating and accessing the String 

        $string_1 = "WELCOME to the APTRON";
        $string_2 = 'My name is Aman Gautam';

        // echo $string_2;
        // echo "<br>";
        // var_dump($string_2);
        // echo "<br>";
        
         //echo trim("Welcome to the Aptron","Weln");
        echo "<br>";
        $arr = explode(" ",$string_1);
        var_dump($arr);
        echo $arr[0];

        
        //  echo substr($string_1,5);

        
        // echo "<br>";
        // echo $string_1." ".$string_2." "."how are you?";
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
        // echo strlen($string_1);
        //  echo "<br>";
        // echo str_word_count($string_1);
        //  echo "<br>"; 
        // echo strrev($string_1);
        // echo "<br>"; 
        // echo strpos($string_1, "Welcome");
        //  echo "<br>"; 
        // echo str_replace("to", "TO", $string_1);

        // //Formating the string
        // $number = 9;
        // $str = "Beijing";
        // $txt = sprintf("There are %u million bicycles in %s.",$number,$str);
        // echo $txt;
    
    ?>

</body>
</html>