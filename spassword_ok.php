<?php
    $host = 'localhost';
	$user_name = 'root';
	$password = 'root123';

	$conn = mysqli_connect($host,$user_name,$password,'tmsystem');
	if(!$conn){
  	die('���ݿ�����ʧ�ܣ�'.mysqli_error());
	}
  
  session_start();
  $sid=$_SESSION['id'];
  if(isset($_POST['update'])){
	if(!( $_POST['psd1'] and $_POST['psd2'])){
		echo "<script>alert('���벻��Ϊ�գ�');location='spassword.php';</script>";
	}else{
		if($_POST['psd1']== $_POST['psd2']){
		  $sqlstr = "update student set spassword = '".$_POST['psd1']."' where sid='".$sid."'";
		  $result = mysqli_query($conn,$sqlstr);
		  if($result){
		   echo "<script>alert('�����޸ĳɹ���');location='spassword.php';</script>";
		  }else{
			echo "<script>alert('�����޸�ʧ�ܣ�');location='spassword.php';</script>";
		  }
		}
		else{
			echo "<script>alert('���������������������벻һ�£�');location='spassword.php';</script>";
		}
 	 }
  }

?>