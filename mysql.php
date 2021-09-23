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
$servername = "localhost";
$username = "root";
$password = "";
$database = "student";
$connection = mysqli_connect($servername, $username, $password,$database);

if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";


// $sql = "CREATE DATABASE student_marks";
// if (mysqli_query($connection, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($connection);
// }



// $sql = "CREATE TABLE student_rollNum (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50)
// )";

// if (mysqli_query($connection, $sql)) {
//   echo "Table student_rollnum created successfully";
// } else {
//   echo "Error creating table: " . mysqli_error($connection);
// }

// $sql = "INSERT INTO student_rollNum (firstname, lastname, email)
// VALUES ('ram', 'sharma', 'ram@gmail.com')";

// if (mysqli_query($connection, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($connection);
// }

// $sql = "INSERT INTO student_rollNum (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com');";
// $sql .= "INSERT INTO student_rollNum (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');";
// $sql .= "INSERT INTO student_rollNum (firstname, lastname, email)
// VALUES ('Julie', 'Dooley', 'julie@example.com')";

// if (mysqli_multi_query($connection, $sql)) {
//   echo "New records created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($connection);
// }


// $sql = "SELECT id,firstname, lastname FROM student_rollNum";
// $result = mysqli_query($connection, $sql);

// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }


// $sql = "DELETE FROM student_rollNum WHERE id=2";
// if (mysqli_query($connection, $sql)) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . mysqli_error($connection);
// }

// $sql = "UPDATE student_rollNum SET lastname='don' WHERE id=1";

// if (mysqli_query($connection, $sql)) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . mysqli_error($connection);
// }


//joins


// $sql = "CREATE TABLE student_address (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// saddress VARCHAR(30) NOT NULL,

// )";
// if (mysqli_query($connection, $sql)) {
//   echo "New records created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($connection);
// }

// $sql  = "INSERT INTO student_address VALUES (1,'sravan kumar','up');";
// $sql .= "INSERT INTO student_address VALUES (2,'bobby','up');";
// $sql .= "INSERT INTO student_address  VALUES (3,'ojaswi','delhi');";
// $sql .= "INSERT INTO student_address  VALUES (4,'rohith','gujrat');";
// $sql .= "INSERT INTO student_address  VALUES (5,'gnanesh','hyderabad');";

// $sql  = "INSERT INTO student_marks VALUES (1,8,9);";
// $sql .= "INSERT INTO student_marks VALUES (2,38,89);";
// $sql .= "INSERT INTO student_marks  VALUES (3,68,68);";
// $sql .= "INSERT INTO student_marks  VALUES (4,84,6);";
// $sql .= "INSERT INTO student_marks  VALUES (7,39,79);";
  
// if (mysqli_multi_query($connection, $sql)) {
//   echo "New records created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($connection);
// }

//inner join
//sql query to display all student_address table based on student id using inner join
// $sql = "SELECT * from student_address CROSS JOIN student_marks on student_address.id=student_marks.id";
// $result = mysqli_query($connection, $sql);
// //display data on web page
// if (mysqli_num_rows($result) > 0) {
// while($row = mysqli_fetch_array($result)){
// 	echo " STUDENT-ID : ". $row['id'], " ----- NAME : ". $row['firstname'] ," ----- ADDRESS : ". $row['saddress'] ;
// 	echo "<br>";
// }
// }
// echo "<br>";
// echo "inner join on student_marks: ";
// echo "<br>";
 echo "<br>";
// $sql = "SELECT * from student_marks INNER JOIN student_address on student_address.id=student_marks.id";
// $result = mysqli_query($connection, $sql);
// //display data on web page
// if (mysqli_num_rows($result) > 0) {
// while($row = mysqli_fetch_array($result)){
// 	echo " STUDENT-ID : ". $row['id'], " ----- Marks : ". $row['subject1'] ," ----- Marks2 : ". $row['subject2'] ;
// 	echo "<br>";
// }
// }

// Left join

// $sql = "SELECT * from student_address CROSS JOIN student_marks on student_address.id=student_marks.id";
// $result = mysqli_query($connection, $sql);
// //display data on web page
// if (mysqli_num_rows($result) > 0) {
// while($row = mysqli_fetch_array($result)){
// 	echo " STUDENT-ID : ". $row['id'], " ----- Name : ". $row['firstname'] ," ----- Address : ". $row['saddress'] ;
// 	echo "<br>";
// }
// }

$sql = "SELECT * from student_marks RIGHT OUTER JOIN student_address on student_address.id=student_marks.id";
// $sql = "SELECT * FROM `student_address` LEFT OUTER JOIN `student_marks`";

$result = mysqli_query($connection, $sql);
//display data on web page
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_array($result)){
	echo " STUDENT-ID : ". $row['id'], " ----- Marks : ". $row['subject1'] ," ----- Marks2 : ". $row['subject2']."-----firstname : ".$row['firstname']."-----address : ".$row['saddress'] ;
	echo "<br>";
}
}


 mysqli_close($connection);
?>
</body>
</html>