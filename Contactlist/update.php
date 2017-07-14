<?php
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '12341234';
 $dbname = 'test';


$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
mysql_query("SET NAMES 'utf8'");
mysql_select_db($dbname);

 $Name = $_REQUEST['name'];
 $Gender = $_REQUEST['gender'];
 $Phone = $_REQUEST['phone'];
 $Birthday =$_REQUEST['birthday'];
 $Address = $_REQUEST['address'];
 $Email = $_REQUEST['email'];

$S=str_replace("'","\'",$Address);//取代特殊符號!!!

$sql_update = "UPDATE contactlist
SET name='$Name',gender='$Gender',phone='$Phone',birthday='$Birthday',address='$S',email='$Email'
  WHERE id='$_GET[id]'";


$result = mysql_query($sql_update) or die('MySQL insert error');
//$sql_query = "select * from contactlist";


  // while($row = mysql_fetch_array($result))
  // {
  //  echo $row[0];
  //  echo $row[1];
  //  echo $row[2];
  //  echo $row[3];
  //  echo $row[4];
  //  echo $row[5];
  //  echo $row[6]."<br><br>";
  //
  // }
  header("Location: index.php");
?>
