<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$host = 'localhost';
$user_name = 'root';
$password = 'root123';

$conn = mysqli_connect($host,$user_name,$password,'tmsystem');
if(!$conn){
  die('���ݿ�����ʧ�ܣ�'.mysql_error());
}

session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0">
    <tr>
      <td width="34%"><div align="right"><strong>������</strong></div></td>
      <td width="66%">
        <div align="left">
          <?php 
		    $sid=$_SESSION['id'];
			$sql=mysqli_query($conn,"select * from thesis_grade,thesis_title where thesis_grade.teid=thesis_title.teid and sid='".$sid."'");
			while ($row=mysqli_fetch_row($sql)){
			  echo "$row[grade]";
			  }
		   ?>
        </div></td>
    </tr>
	<tr>
      <td width="34%"><div align="right"><strong>���ݣ�</strong></div></td>
      <td width="66%">
        <div align="left">
          <?php 
		    $sid=$_SESSION['id'];
			$sql=mysqli_query($conn,"select * from thesis_grade,thesis_title where thesis_grade.teid=thesis_title.teid and sid='".$sid."'");
			while ($row=mysqli_fetch_row($sql)){
			  echo "$row[appraise]";
			  }
		   ?>
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
