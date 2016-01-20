<?php 

header('Access-Control-Allow-Origin: *');  
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

 
// include db connect class details
$host="mysql14.000webhost.com";
	$uname="a7196929_ed";
	$pwd='manu11930';
	$db="a7196929_ed";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");
	
	
//Get values from input form userid:user,Name:nme,address:addr,contact:num,password:pass,busId:bus

$userid = $_POST['time'];
$Name = $_POST['ll_id'];
$address = $_POST['pixel'];	
	echo($userid);
	
	$sql = "INSERT INTO traffic_data(time,ll_id,pixel) VALUES('$userid','$Name','$address')";


$r = mysql_query($sql,$con);

if(!$r)
{
  die('Could not enter data: ' . mysql_error());
}
	mysql_close($con);
 

?>