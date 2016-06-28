<?php
$host="localhost"; //replace with database hostname 
$username="socio1305"; //replace with database username 
$password=""; //replace with database password 
$db_name="my_socio1305"; //replace with database name

$id = $_GET['id'];
$qr = $_GET['qr'];
 
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql = "SELECT * FROM tickets WHERE event_id = $id AND qr_code = '$qr'"; 
$result = mysql_query($sql);
$json = array();
 
if(mysql_num_rows($result)){
	while($row=mysql_fetch_assoc($result)){
		if($row[qr_code] == $qr && $row[entered] == 0 ){
$ticketid = $row[id];
mysql_select_db("$db_name")or die("cannot select DB");
$sql = "UPDATE tickets SET entered = 1 WHERE id = $ticketid";
$result = mysql_query($sql, $con);
			echo "1";
	    } elseif($row[qr_code] == $qr && $row[entered] != 0 ){
			echo "0";
		} else {
			echo "-1";
		}
	}
}
mysql_close($con);
?>