<?php
require 'config.php';

if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}

if (isset($_POST["submit"])) {
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $dob = $_POST["dob"];
  $password = $_POST["password"];
  $phone = $_POST["phone"];
  $faculty = $_POST["faculty"];
  $relationship = $_POST["relationship"];
  $address = $_POST["address"];
  $email = $_POST["email"]; // New field

  $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE Fname = '$fname' OR Lname = '$lname'");
  if (mysqli_num_rows($duplicate) > 0) {
    echo "<script> alert('First name or Last name has already been taken'); </script>";
  } else {
    // Hash the password
    $hashedPassword = hash('sha256', $password);

    $query = "INSERT INTO users (Fname, Lname, Date_of_Birth, Password, Phone, Faculty, Relationship, Address, Email)
              VALUES ('$fname', '$lname', '$dob', '$hashedPassword', '$phone', '$faculty', '$relationship', '$address', '$email')";
    mysqli_query($conn, $query);

    echo "<script> alert('Registration Successful'); </script>";
  }
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      padding: 20px;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"],
    input[type="date"],
    input[type="email"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #4caf50;
      color: #ffffff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <form method="POST" action="registration.php">
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname" required>

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lname" required>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" required>

    <label for="faculty">Faculty:</label>
    <input type="text" id="faculty" name="faculty" required>

    <label for="relationship">Relationship:</label>
    <input type="text" id="relationship" name="relationship" required>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <p>Already have an account? <a href="login.php"><button type="button">Login</button></a></p>
    <input type="submit" name="submit" value="Register">
  </form>
</body>
</html>
