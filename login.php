<?php
    $host = 'localhost';
	$user_name = 'root';
	$password = 'root123';

	$conn = mysqli_connect($host,$user_name,$password,'tmsystem');
	if(!$conn){
  	die('���ݿ�����ʧ�ܣ�'.mysqli_error());
	}
	
	session_start();
	$id=$_POST['username'];
    $pwd=$_POST['password'];
	$flag=$_POST['flag'];
	  
      if($flag==0)
	   {
	   $sql=mysqli_query($conn,"select * from student where sid='".$id."' and spassword='".$pwd."'");
	   if(mysqli_num_rows($sql)>0){
		$row=mysqli_fetch_array($sql);
		$_SESSION['id']=$id;
		$_SESSION['name']=$row['sname'];
		$_SESSION['time']=time();
		$_SESSION['flag']=$flag;
		echo "<script>alert('��¼�ɹ���');location='shpage.php';</script>";
	    }else{
		echo "<script>alert('�����˻���������ѡģ���Ƿ���ȷ��');location='signin.php';</script>";
		}
	   }
	  if($flag==1)
	   {
	   $sql=mysqli_query($conn,"select * from teacher where tid='".$id."' and tpassword='".$pwd."'");
	   if(mysqli_num_rows($sql)>0){
	    $row=mysqli_fetch_array($sql);
		$_SESSION['id']=$id;
	    $_SESSION['name']=$row['tname'];
		$_SESSION['time']=time();
		$_SESSION['flag']=$flag;
		echo "<script>alert('��¼�ɹ���');location='thpage.php';</script>";
	    }else{
		echo "<script>alert('�����˻���������ѡģ���Ƿ���ȷ��');location='signin.php';</script>";
		}
	   }
	  if($flag==2)
	   {
	   $sql=mysqli_query($conn,"select * from admin where aid='".$id."' and apassword='".$pwd."'");
	   if(mysqli_num_rows($sql)>0){
	    $row=mysqli_fetch_array($sql);
		$_SESSION['id']=$id;
	    $_SESSION['name']=$row['aname'];
		$_SESSION['time']=time();
		$_SESSION['flag']=$flag;
		echo "<script>alert('��¼�ɹ���');location='ahpage.php';</script>";
	    }else{
		echo "<script>alert('�����˻���������ѡģ���Ƿ���ȷ��');location='signin.php';</script>";
		}
	   }
?>