<?php
    $host = 'localhost';
	$user_name = 'root';
	$password = 'root123';

	$conn = mysqli_connect($host,$user_name,$password,'tmsystem');
	if(!$conn){
  	die('数据库连接失败：'.mysqli_error());
	}
  
  session_start();
  $tid=$_SESSION['id'];
  if(isset($_POST['update'])){
	if(!( $_POST['psd1'] and $_POST['psd2'])){
		echo "<script>alert('输入不能为空！');location='tpassword.php';</script>";
	}else{
		if($_POST['psd1']== $_POST['psd2']){
		$sqlstr = "update teacher set tpassword = '".$_POST['psd1']."' where tid='".$tid."'";
		$result = mysqli_query($conn,$sqlstr);
		if($result){
		   echo "<script>alert('密码修改成功！');location='tpassword.php';</script>";
		}else{
			echo "<script>alert('密码修改失败！');location='tpassword.php';</script>";
		  }
		}
		else{
			echo "<script>alert('旧密码出错或两次密码输入不一致！');location='spassword.php';</script>";
		}
 	 }
  }
  
  
?>