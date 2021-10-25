<?php

if (isset($_POST['Save']))
{
$News_ID=$_POST['News_ID'];
$date=$_POST['date'];
$description=$_POST['description'];
$Co_Admin_ID=$_POST['Co_Admin_ID'];

$dbconnect =  mysqli_connect('localhost', 'root', '', 'wadak_db');


$sql = mysqli_query( $dbconnect, "INSERT INTO news values('$News_ID','$date','$description','$Co_Admin_ID')");

if($sql)
{
    echo "inserted";
}
else
{
    echo "Error";
}

}
?>