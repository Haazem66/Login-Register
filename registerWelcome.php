<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="login.js"></script>
</head>
<body>
  

<div class="main"></div>


<?php
include 'connection.php';
/////////////////////////////////////
$name=strtolower($_POST["username"]);
$email=strtolower($_POST["email"]);
$password=md5($_POST["password"]);


//inserting new record
$sql="SELECT email FROM user where (name='$name' or email='$email')";
$result = mysqli_query($conn, $sql);
if($result!=false && $result->num_rows>0)
{
    $sql="SELECT name FROM users where name='$name'";
    $result2=mysqli_query($conn, $sql);
    
    if($result2!=false && $result2->num_rows>0)
    echo '<div class="container"><h1>Username already taken<br>Please try again</h1><div class="footer"><a href="registeration.html">Back</a></div></div>';
       
    
    else
    echo '<div class="container"><h1>Email already exists<br>Please log in instead</h1><div class="footer"><a href="registeration.html">Back</a></div></div>';
    
    
}
else{
$sql = "INSERT INTO user (name, email, password)
VALUES ('$name', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
  echo "<div class=\"container\"><h1>Welcome $name</h1><div class=\"footer\"><a href=\"registration.html\">Back</a></div></div>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
</body>
</html>