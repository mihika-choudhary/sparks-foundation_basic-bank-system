<?php
$con = mysqli_connect('localhost','root',);
$db = mysqli_select_db( $con, "userdata");
if($con)
//echo "Connection successful";
{
    ?>
    <script>
        alert('Connection Successfully Established');
    </script>
    <?php
    ;
}
else
{
    echo "No connection";
    die("no connection".mysqli_connect_error());//exit
}

?>