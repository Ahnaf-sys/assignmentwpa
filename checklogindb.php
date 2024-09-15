<?php
include('dbconnect.php'); //create connection

//username and password sent from form
$myusername1=$_POST['username'];
$mypassword2=$_POST['password'];

$sql="SELECT * FROM tbllogin WHERE username='$myusername1' and userpswd='$mypassword2'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    //output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "User ID: " . $row["userid"]. "- Name: ". $row["username"]. "" . $row["userstatus"]. "<br>";
    }

} 
else {
    echo "0 results";
}
$conn->close();
?>