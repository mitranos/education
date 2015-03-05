<?php
$host="localhost"; //replace with database hostname 
$username="socio1305"; //replace with database username 
$password=""; //replace with database password 
$db_name="my_socio1305"; //replace with database name
 
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$sql = "SELECT * FROM eventi"; 
$result = mysql_query($sql);
$json = array();
 
if(mysql_num_rows($result)){
while($row=mysql_fetch_assoc($result)){
$json['eventi'][]=$row;
}
}
mysql_close($con);
echo json_encode($json); 
?>