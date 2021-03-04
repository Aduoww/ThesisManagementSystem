<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$host = 'localhost';
$user_name = 'root';
$password = 'root123';

$conn = mysqli_connect($host,$user_name,$password,'tmsystem');
if(!$conn){
  die('数据库连接失败：'.mysqli_error());
}

$sql = 'select bid,btitle,bcont,btime from board';
$result = mysqli_query($conn,$sql) or die("<br/>ERROR: <b>".mysqli_error()."</b><br/>产生问题的SQL：".$sql);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>公告栏</title>
</head>
<center>

<body>
 <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#33CCFF" >
  <tr bgcolor="#CCCCFF">
    <td height="33"><div align="center"><strong>公告栏</strong></div></td>
	<td width="40%"><div align="center"><strong>发布日期</strong></div></td>
  </tr>

<?php
if($num = mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_array($result))
  {
?>
  <tr bgcolor="#FFFFFF">
    <td height="22" align="center"><?php echo "<a href=bcontent.php?bid=".$row['bid'].">".$row['btitle']."</a>";  ?>&nbsp;</td>
	<td height="22" align="center">&nbsp;<?php echo $row['btime'];?>&nbsp;</td>
  </tr>
 <?php
   }
 }
 mysqli_close($conn);
 ?>
</table>
</body>
</html>
