<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$host = 'localhost';
$user_name = 'root';
$password = 'root123';

$conn = mysqli_connect($host,$user_name,$password,'tmsystem');
if(!$conn){
 die('数据库连接失败：'.mysqli_error());
}

mysqli_query($conn , "set names utf8");
header('content-type:text/html;charset=utf-8');

session_start();
$tid=$_SESSION['id'];
$sql=mysqli_query($conn,"select teid,title,demand,teflag from thesis_title where tid='".$tid."'");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<form action="" method="post" name="form1" id="form1">
  <table style="text-align: center" width="100%" border="0" cellspacing="0" cellpadding="4">
    <tr style="vertical-align: top" class="HeaderColor">
      <td>论文编号</td>
      <td>论文题目</td>
      <td style="text-align: center">要求</td>
      <td style="text-align: center">审核结果</td>
    </tr>
     
    <tr style="vertical-align: top">
      <td style="text-align: center" colspan="5">        <hr noshade="noshade" />      </td>
    </tr>
 <?php
if($num = mysqli_num_rows($sql)>0){
  while($row = mysqli_fetch_array($sql))
  {
?> 
    <tr style="vertical-align: top">
      <td width="15%" style="text-align: center"><?php  echo"$row[teid]"; ?></td>
      <td width="45%"><?php echo"$row[title]"; ?></td>
      <td width="25%" style="text-align: center" class="FooterColor"> <?php echo"$row[demand]"; ?> </td>
      <td width="15%" style="text-align: center">
      <?php 
	    if("$row[teflag]"==0){
		  echo "未审核";
		}
	  	if("$row[teflag]"==1){
		  echo "审核通过";
		}
		if("$row[teflag]"==2){
		  echo "审核未通过";
		}
		if("$row[teflag]"==3){
		  echo "学生已选";
		}
	  ?><br /></td>
    </tr>
 <?php
   }
 }
 mysqli_close($conn);
 ?>
  </table>
  </br><div style="text-align: right"><?php echo "<a href=tstinsert.php>新增</a>";  ?></div>
</form>
</body>
</html>
