<?php
$con = mysqli_connect('localhost','root');
if($con)
{
    echo "connection successful";
}
else
{
    echo "no connection";
}

mysqli_select_db($con,'feedback');

$name = ($_POST['name']);
$email = ($_POST['email']);
$message = ($_POST['message']);

$query = "insert into userdata (name, email, message) values ('$name', '$email', '$message')";
mysqli_query($con,$query);
if ($con->query($query) === TRUE) {
    echo "Message sent successfully.";
} else {
    echo "Error: " . $query . "<br>" . $con->error;
}
?>