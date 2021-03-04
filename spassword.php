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
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
	  <form name="intFrom" method="post" action="spassword_ok.php">

		<table width="765" height="200"  border="0" align="center" cellpadding="0" cellspacing="0">
          <tr align="center" valign="middle">
		  <td width="30%" class="c_td">&nbsp;</td>
            <td width="10%" align="right" class="c_td">&nbsp;</td>
            <td width="30%" class="c_td">&nbsp;</td>
			<td width="30%" class="c_td">&nbsp;</td>
          </tr>        
          <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">新密码</td>
            <td align="center" valign="middle" class="c_td"><input type="password" name="psd1" value=""></td>
          	<td class="c_td">&nbsp;</td>
		  </tr>
          <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">确认密码</td>
            <td align="center" valign="middle" class="c_td"><input type="password" name="psd2" value=""></td>
            <td class="c_td">&nbsp;</td>
		  </tr>
        
		  <tr align="center" valign="middle">
		  <td class="c_td">&nbsp;</td>
            <td colspan="2" class="c_td">
			<input type="submit" name="update" value="修改">
              <input type="reset" name="reset" value="重置"></td>
           <td class="c_td">&nbsp;</td>
	      </tr>
        </table>
      </form>
</body>
</html>
