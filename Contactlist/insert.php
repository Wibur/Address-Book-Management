<?php

 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '12341234';
 $dbname = 'test';
 $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');

mysql_query("SET NAMES 'utf8'");
mysql_select_db($dbname);

 $Name = $_POST['name'];
 $Gender = $_POST['gender'];
 $Phone = $_POST['phone'];
 $Birthday =$_POST['birthday'];
 $Address = $_POST['address'];
 $Email = $_POST['email'];




 //  $max_id = mysql_query("SELECT id AS maxid FROM contactlist");
 //  $row = mysql_fetch_assoc($max_id);
 //  $max_id = $row['maxid'];
 // // $max_id = $max_id + 1;
  // $max_id = str_pad($max_id,3,'0',STR_PAD_LEFT);
//str_pad(原字串,補齊後的位數,用來捕的字串,補齊的方式，在此為由左開始)




 $S=str_replace("'","\'",$Address);//good function!!!  addslashes()可判斷較多



 $sql_insert = "INSERT INTO contactlist VALUES ('$max_id','$Name','$Gender','$Phone','$Birthday','$S','$Email')";
  /*INSERT INTO "表格名" ("欄位1", "欄位2", ...)
VALUES ("值1", "值2", ...);一次輸入多筆資料*/
  mysql_query($sql_insert) or die(mysql_error());

  header("Location: index.php");

?>
