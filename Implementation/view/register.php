<? php 

$servername = 'localhost';
$username = 'root';
$password = '';

session_start();

$con = mysql_connect($servername, $username, $password);


mysqli_select_db($con, 'wadak');

$name = $_POST['name'];
$pass = $_POST['pass']


?>
