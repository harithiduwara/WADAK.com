<? php 

$servername = 'localhost';
$username = 'root';
$password = '';

session_start();

$con = mysql_connect($servername, $username, $password);


mysqli_select_db($con, 'wadak');

$name = $_POST['name'];
$pass = $_POST['pass']

$s ="select * from user where username = '$name'";

$result =mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1){
    echo "Username Already Taken";
}else{
    $reg = insert into user('$name', 'usrname', )
}


?>
