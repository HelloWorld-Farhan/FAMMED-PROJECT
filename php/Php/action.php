<?php
$insert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "Farhan@123";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
      die("Connection with database failed due to " . mysqli_connect_error());
    }
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $about = $_POST['about'];

    $sql = "INSERT INTO `famedd`.`trip`(`name`, `email`, `phone`,`about`, `date`) VALUES ('$name', '$email', '$phone','$about', current_timestamp());";

    if ($con->query($sql) == true) {
      // echo "Secesss";
      $insert = true;
      // echo "<script>alert('Data inserted successfully');</script>";
      header("Location: ../index.php");
    } else {
      // echo "Error";
      echo "Error: " . $sql . "<br>" . $mysqli->error;
      // $insert = false;
      //   echo "<script>alert('Error: " . $mysqli->error . "');</script>";
    }
    $con->close();
  }
}
