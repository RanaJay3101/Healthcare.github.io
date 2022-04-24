<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
// $conn = new mysqli($servername, $username, $password);
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if($_POST){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $bloodgroup = $_POST['bloodgroup'];
    $contact = $_POST['contact'];
    $location = $_POST['location'];

    $sql = "INSERT INTO blood ( name, age, blood_group, contact, location)
VALUES ('$name', '$age','$bloodgroup' , '$contact' , '$location')";
$newURL= "http://localhost/HtmlInnovativeAssignment/home.html";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header('Location: '.$newURL);
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}


mysqli_close($conn);
?>