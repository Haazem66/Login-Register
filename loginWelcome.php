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
$loginemail=strtolower($_POST["loginEmail"]);
$loginpassword=md5($_POST["loginPassword"]);

$sql="SELECT * FROM user where (email='$loginemail' and password='$loginpassword')";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);

    if ($row['email'] === $loginemail && $row['password'] === $loginpassword) {

        $name=$row['name'];
        echo "<div class=\"container\"><h1>Welcome $name</h1><div class=\"footer\"><a href=\"login.html\">Back</a></div></div>";
    }
}
else
{
    echo "<div class=\"container\"><h1>Email and password <br>don't match</h1><div class=\"footer\"><a href=\"login.html\">Back</a></div></div>";
}

$conn->close();
?>
</body>
</html>