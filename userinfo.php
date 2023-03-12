<?php 
//used for CONTACT US
$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}
else{
    echo "no connection";
}

mysqli_select_db($con, 'userdata');
echo "works`";

$user = $_POST["user"];
//echo $user;
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$comments = $_POST["comments"];

echo "test ";
if($comments == NULL){
    ECHO "  NULL";
}
else{
    echo "not nul0";
}

$query = " INSERT INTO `userinfodata` ( `user`, `email`, `mobile`, `comment`) VALUES ( '$user', '$email', '$mobile', '$comments');    ";
echo "$query";
mysqli_query($con, $query);
header('location:test.php');

?>