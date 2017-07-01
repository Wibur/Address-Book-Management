


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
    send();
  }
  else{
   alert("錯誤格式");
    return false;
  }
}


function send(){
      form1.action='insert.php';
      form1.submit();
      // document.getElementById('form1').style.display='none';

}
</script>
<div>
<form action="" id="form1" name="form1" method="post" >

Name：<input type="text" id="name" name="name" /><br/>
Gender：<input type="radio"  name="gender" value="male" checked="true"/>男
        <input type="radio"  name="gender" value="female" />女<br/>

Phone：<input type="text" id="phone" name="phone" /><br/>
Birthday：<input type="text" id="birthday" name="birthday" /><br/>
Address：<input type="text" id="addr" name="address" /><br/>
E-mail：<input type="text" id="mail" name="email" /><br/>

<input type="button" value="新增" id="add" onclick="allvalue()"/>
</form>
</div>
</body>
</html>
