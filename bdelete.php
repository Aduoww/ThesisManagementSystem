<?php

  $host = 'localhost';
  $user_name = 'root';
  $password = 'root123';

  $conn = mysqli_connect($host,$user_name,$password,'tmsystem');
  if(!$conn){
    die('���ݿ�����ʧ�ܣ�'.mysql_error());
  }

  if($_GET['bid']){
    $id=$_GET['bid'];
	
    $query=mysqli_query($conn,"delete from board where bid='".$id."'");
  }
  
  mysqli_close($conn);	
  
?>