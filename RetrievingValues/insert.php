<html>
<head>
  <title>Insert values</title>
</head>
<body>
  <form action ="insert.php" method="POST">
    <table>
      <tr>
        <tr>
          <td colspan="100">Admission Number</td>
          <td colspan="100"><input type="text" name="admn"></td>
        </tr>
        <td colspan="100">First Name</td>
        <td colspan="100"><input type="text" name="fname"></td>
      </tr>
      <tr>
        <td colspan="100">last Name</td>
        <td colspan="100"><input type="text" name="lname"></td>
      </tr>
      <tr>
        <td colspan="100">Mobile</td>
        <td colspan="100"><input type="text" name="mob"></td>
      </tr>
      <tr>
        <td colspan="100">Email</td>
        <td colspan="100"><input type="text" name="email"></td>
      </tr>
      <tr>
        <td colspan="100"></td>
        <td colspan="100"><button type="submit" value="submit">Submit</button></td>
      </tr>
    </table>
  </form>
</body>
</html>

<?php
error_reporting(0);
  $admn = $_POST['admn'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $mob = $_POST['mob'];
  $email = $_POST['email'];
  $servername = "127.0.0.1:3306";
  $username = "rahul";
  $password = "";
  $db = "p7sign";
  // Create connection
  $conn = new mysqli($servername, $username, $password,$db);
  $query = "INSERT INTO signup VALUES('$admn','$fname','$lname','mob','$email')";
  $res = $conn->query($query);

 ?>
