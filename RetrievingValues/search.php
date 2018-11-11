<html>
<head>
  <title>Search</title>
</head>
<body>
  <center>
    <form action="search.php" method="POST">
  Enter your ID here:
  <input type="text" name="id"></input>
  <button type="submit" value="submit">Submit</button>
  </form>
  </center>
  <table>
    <tr><th>Admission Number</th></tr>
    <tr><th>First name</th></tr>
    <tr><th>Last name</th></tr>
    <tr><th>Mobile Number</th></tr>
    <tr><th>Email ID</th></tr>
  </table>
</body>
</html>

<?php
  $servername = "localhost:3306";
  $username = "rahul";
  $password = "";
  $db = "p7sign";
  $conn = new mysqli($servername,$username,$password,$db);
  if($conn->connect_error){
    echo "Database connectivity failed";
  }
  $id = $_POST['id'];
  echo "Searching for id  ...".$id."<br>";
  $sql = "SELECT admn FROM sign where admn = $id;";
  $result = mysqli_query($conn,"select * from signup where admn = '$id';");

if (mysqli_num_rows($result) > 0)
  while($row = mysqli_fetch_assoc($result))
{
echo "<br>Admission Number : ".$row["admn"];
echo "<br>First Name: ".$row["fname"];
echo "<br>Last Name: ".$row["lname"];
echo "<br>Mobile Number: ".$row["mob"];
echo "<br>Email Number: ".$row["email"];
  }

 ?>
