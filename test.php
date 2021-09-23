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
    //Function 
   //       function Message() {
   //          echo "You are really a nice person, Have a nice time!";
   //       }
   //       Message();


   //  // function with parameter
   //       echo"<br>";
   //       function addFunc($num1, $num2) {
   //          $sum = $num1 + $num2;
   //          echo "Sum of the two numbers is : $sum";
   //       }
         
   //       addFunc(10, 20); //actual arguments
   //       echo"<br>";
   //       addFunc(40,50);

   //           echo"<br>";
   //      //function with parameter using call by value and reference
   //       function addnum($num) {
   //          $num = $num + 5;
   //       }
         
   //       function addnum2(&$num) {
   //          $num = $num + 6;
   //       }
         
   //       $orignal_num = 10;
   //       addnum( $orignal_num );
         
   //       echo "Original Value is $orignal_num<br />";
         
   //       addnum2( $orignal_num );
   //       echo "Original Value is $orignal_num<br />";




         // function sum(int $x , int $y){
           
         //    $add = $x + $y;
         //    return $add;

         // }

         
         
         // echo "The result of  x and y is = ". sum(12,13);
         // echo "<br>";
         // echo "The result of  x and y is = ". sum(15,16);


         function fact($num){

            if($num < 0){
               echo "enter the correct number";
            }
            elseif($num == 0){
               return 1;
            }
            else{
               return $num * fact($num -1);
            }


         }

         echo fact(11);


    ?>
</body>
</html>