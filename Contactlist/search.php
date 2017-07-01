<?php
mysql_connect("localhost","root","12341234");//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
mysql_select_db("test");//我要從這個資料庫撈資料
mysql_query("set names utf8");//設定utf8 中文字才不會出現亂碼
$data=mysql_query("select * from contactlist");//從這個表單中選取全部(*)的資料
// echo $data;測試能不能抓到表單
$Select = $_REQUEST['select'];//下拉選單的值
$Name = $_REQUEST['name'];

  //echo "SELECT * FROM contactlist where $Select LIKE '%$Name%'";測試
$result = mysql_query("SELECT * FROM contactlist where $Select LIKE '%$Name%'")or die('MySQL query error');
?>

<!DOCTYPE html SYSTEM>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

<title>Search</title>
</head>
<body><!-- body範圍內置中 -->
<font size="1000">Search List</font><br/>


  <table width="1000" border="1" style='text-align:center' ><!--邊框，線條粗度-->
<tr>
  <td>ID</td>
  <td>Name</td>
  <td>Gender</td>
  <td>Phone</td>
  <td>Birthday</td>
  <td>Address</td>
  <td>E-mail</td>

</tr>

<?php
while($rs = mysql_fetch_array($result))
{
?>
<tr>
  <td><?php echo $rs[0]?></td>
  <td><?php echo $rs[1]?></td>
  <td><?php echo $rs[2]?></td>
  <td><?php echo $rs[3]?></td>
  <td><?php echo $rs[4]?></td>
  <td><?php echo $rs[5]?></td>
  <td><?php echo $rs[6]?></td>
</tr>
<?php }?>



</table>

</body>
</html>
