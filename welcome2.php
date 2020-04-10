<?php
$name = $_POST['name'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cpassword = $_POST['cpassword'];
$gender = $_POST['gender'];

if($pass == $cpassword)
{
$servername="localhost";
$username="root";
$password="Kamolesh123@";
$database="db8";
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn)
{
echo "welcome:$name";
echo"<br>";
echo "your new email is : $email";
$query = "insert into project values('$name','$dob','$phone','$email','$pass','$gender')";
mysqli_query($conn,$query);
}
}
else
{
echo"sorry! password not match";
}

?>

