<?php
$con=mysql_connect("localhost","root","12341234");//與localhost連線、root是帳號、密碼處輸入自己設定的密碼
mysql_select_db("test");//我要從這個資料庫撈資料
mysql_query("set names utf8");//設定utf8 中文字才不會出現亂碼
$data=mysql_query("select * from contactlist WHERE id='$_GET[id]'");//id為唯一值以id判斷
$rs=mysql_fetch_row($data);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>
<body>
<script  type="text/javascript" >
function isName() {
var Name=document.getElementById('name').value;
if (Name==''){
  return false;
}
else

  return true;

}

function isAddress() {
var Addr=document.getElementById('addr').value;
if (Addr==''){
  return false;
}
else

  return true;

}

function isBirthday() {
var bd=document.getElementById('birthday').value;
if (bd.search(/^\d{4}-(1[0-2]|0[1-9])-(0[1-9]|1[0-9]|2[0-9]|3[0-1])$/)!= -1){
  return true;
}
else

  return false;

}



function isNumber() {
var number=document.getElementById('phone').value;
if (number.search(/^\d{4}-\d{6}$/)!= -1){
  return true;
}
else

  return false;

}


function isEmail () {
  var email=document.getElementById('mail').value;
  if (email.search(/^([\w]+@[\w.]+)$/)!= -1){
    return true;
  }
  else{

    return false;
  }
}

function allvalue(){
  if (isEmail() && isNumber() && isBirthday() && isName() && isAddress()){
    update();
  }
  else{
   alert("錯誤格式");
    return false;
  }
}

function update(){
      form2.action='update.php?id=<?php echo $rs[0]; ?>';
      form2.submit();
      // document.getElementById('form2').style.display='';
}


</script>



<form action="" id="form2" name="form2" method="post"  >

  Name：<input type="text" id="name" name="name" value="<?php echo $rs[1]?>" /><p>
  Gender:<?php  if ($rs[2]=='male')   {  ?>
            <input type="radio" name="gender" value="male"  checked="true"/>男
            <input type="radio" name="gender" value="female"  />女<p>
        <?php  }else{   ?>
            <input type="radio" name="gender" value="male"  />男
            <input type="radio" name="gender" value="female" checked="true" />女<p>
        <?php  }  ?>


  Phone：<input type="text" id="phone" name="phone" value="<?php echo $rs[3]?>" /><p>
  Birthday：<input type="text" id="birthday" name="birthday" value="<?php echo $rs[4]?>" /><p>
  Address：<input type="text" id="addr" name="address" value="<?php echo $rs[5]?>" /><p>
  E-mail：<input type="text" id="mail" name="email" value="<?php echo $rs[6]?>" /><p>

<input type="button" value="修改"  onclick="allvalue()"/>
  <!-- <input type="button" value="修改" type="submit" onclick="form2.submit();document.getElementById('form2').style.display='none';"/> -->

</form>
</body>
</html>
