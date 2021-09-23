
<!DOCTYPE html>
<html>
<body>

<?php

$cookie_name = "rahul";
echo $cookie_name;
$cookie_value = "45";

setcookie($cookie_name,$cookie_value,time()+(86400 * 30),"/");

if(!isset($_COOKIE[$cookie_name])){
    echo "name ".$cookie_name." is not set";
}else
{
     echo "name ".$cookie_name." "."is set";
     $_COOKIE[$cookie_name];
}

?>

</body>
</html>