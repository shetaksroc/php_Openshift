<?php 

header('Access-Control-Allow-Origin: *');  
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

 
// include db connect class details
$host="trafficprediction-pesitccbd.rhcloud.com";
	$uname="adminN4ydLgn";
	$pwd='CmShlqHHUzYf';
	$db="trafficprediction";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");
	
	
//Get values from input form userid:user,Name:nme,address:addr,contact:num,password:pass,busId:bus

$userid = $_POST['id'];
$Name = $_POST['lat'];
$address = $_POST['long'];
$contact = $_POST['y'];
$password = $_POST['x'];	
	echo($userid);
	
	$sql = "INSERT INTO st_ll(st_id,lat,longitude,y,x) VALUES('$userid','$Name','$address','$contact','$password')";


$r = mysql_query($sql,$con);

if(!$r)
{
  die('Could not enter data: ' . mysql_error());
}
	mysql_close($con);
 

?>