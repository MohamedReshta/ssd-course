<?php
$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');


if (isset($_POST['submit'])) {
    $NAME = $_POST['name'];
    $Email = $_POST['Email'];
    $SUBJECT = $_POST['subject'];
    $insert = "INSERT INTO PRO(name,Email,subject) values('$NAME','$Email','$SUBJECT')";
    mysqli_query($conn, $insert);
}// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    echo "Connected successfully";

?>










