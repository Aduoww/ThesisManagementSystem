<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$host = 'localhost';
$user_name = 'root';
$password = 'root123';

$conn = mysqli_connect($host,$user_name,$password,'tmsystem');
if(!$conn){
  die('���ݿ�����ʧ�ܣ�'.mysql_error());
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php

if($_GET['bid']){
$id=$_GET['bid'];
$query=mysqli_query($conn,"select bcont from board where bid='".$id."'");
while($row=mysqli_fetch_array($query)) 
     {
   	
        echo "<br>$row[bcont]"; 

      }       
}else{echo "δ���ܵ�IDֵ��";
}
mysqli_close($conn);
?>
</body>
</html>
