<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$host = 'localhost';
$user_name = 'root';
$password = 'root123';

$conn = mysqli_connect($host,$user_name,$password,'tmsystem');
if(!$conn){
  die('数据库连接失败：'.mysqli_error());
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>登陆界面</title>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /><style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:285px;
	height:159px;
	z-index:1;
	left: 1173px;
	top: 211px;
}
#Layer2 {
	position:absolute;
	width:170px;
	height:174px;
	z-index:2;
	left: 153px;
	top: 44px;
}
body {
	background-color: #CCCCCC;
	background-image: url();
	background-repeat: no-repeat;
}
-->
</style>
<script language="javascript">
function check_name()
{
  if(signin.username.value == '')
  {
    alert("请输入用户名。");
	return false;
  }
  if(signin.password.value == '')
  {
    alert("请输入密码。");
	return false;
  }
}
</script>
</head>
<body class="sub">
<br />
<div id="Layer1">
<form action="login.php" method="post" name="signin" id="signin" onsubmit="return check_name()">
  <table width="100%" border="0" cellspacing="0" cellpadding="1" class="TitleColor">
    <tr style="vertical-align: top">
      <td>
        <table width="100%" border="0" cellpadding="4" cellspacing="0" bordercolor="#000000" bgcolor="#000000">
          <tr class="HeaderColor">
            <td width="20%" height="33" bgcolor="#CCCCCC" style="vertical-align: top">              <h3>用户登陆</h3>            </td>
          </tr>
          <tr style="vertical-align: top">
            <td width="20%" bgcolor="#FFFFFF" class="TitleColor">
              <label for="username"><strong><br />
              用户名</strong></label>
              &nbsp;<br />
              <input id="username" name="username" type="text" size="25" />
              <label for="password"><strong><br />
              <br />
              密码</strong></label>
              &nbsp;<br />
              <input id="password" name="password" type="password" size="25" />
              <p>
			  <select name="flag" id="flag" width="200"> 
				   	 <option selected="" value="0">学生</option> <option value="1">教师</option> <option value="2">管理员</option>
			  </select>
                </p>
              <p>
                <input type="submit" name="login" value="登陆" />
              </p></td>
          </tr>
        </table>      </td>
    </tr>
  </table>
</form>
</div>

</body>
</html>
