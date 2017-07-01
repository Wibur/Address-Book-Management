<?php
mysql_connect("localhost","root","12341234");//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
mysql_select_db("test");//我要從這個資料庫撈資料
mysql_query("set names utf8");//設定utf8 中文字才不會出現亂碼
$data=mysql_query("select * from contactlist");//從這個表單中選取全部(*)的資料
//echo $data;測試能不能抓到表單

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Contact List</title>

</head>

<body style='text-align:center' ><!-- body範圍內置中 -->

  <font size="1000">Contact List</font><br/>
  <p>Live View</p>



<hr/>

 <form action="search.php" method="post" id="search">
    <select name="select" id="select">
      <option value="Name">Name</option>
      <option value="Gender">Gender</option>
      <option value="Phone">Phone</option>
      <option value="Birthday">Birthday</option>
      <option value="Address">Address</option>
      <option value="Email">Email</option>
    </select>
    <input name="name" id="name" type="text" />
    <input type="submit" value="搜尋"/>

  </form>

<table width="800"   border="1" align="center" ><!--邊框，線條粗度-->
<tr>
  <td>ID</td>
  <td>Name</td>
  <td>Gender</td>
  <td>Phone</td>
  <td>Birthday</td>
  <td>Address</td>
  <td>E-mail</td>
  <td>Edit/Delete</td>

</tr>

<?php
for($i=1;$i<=mysql_num_rows($data);$i++){
   $rs=mysql_fetch_row($data);
?>
<tr>

  <td><?php echo str_pad($rs[0],3,'0',STR_PAD_LEFT);?></td>
  <td><?php echo $rs[1]?></td>
  <td><?php echo $rs[2]?></td>
  <td><?php echo $rs[3]?></td>
  <td><?php echo $rs[4]?></td>
  <td><?php echo $rs[5]?></td>
  <td><?php echo $rs[6]?></td>


<td>
    <!-- 以id當url -->
    <form action="update1.php?id=<?php echo $rs[0]?>" method="post" >
      <button  name="修改" type="submit"> 修改 </button>
    </form>
    <form action="delete.php?id=<?php echo $rs[0]; ?>"  method="post" >
      <button name="刪除" type="submit">刪除 </button>
    </form>

</td>
</tr>
<?php }?>


</table>

<hr/>


<form action="insert1.php" method="post" >
	<button  name="Add Record" type="submit"> Add Record </button>
</form>


</body>
</html>
