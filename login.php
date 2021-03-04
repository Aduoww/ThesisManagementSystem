<?php
    $host = 'localhost';
	$user_name = 'root';
	$password = 'root123';

	$conn = mysqli_connect($host,$user_name,$password,'tmsystem');
	if(!$conn){
  	die('数据库连接失败：'.mysqli_error());
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
		echo "<script>alert('登录成功！');location='shpage.php';</script>";
	    }else{
		echo "<script>alert('请检查账户密码与所选模块是否正确。');location='signin.php';</script>";
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
		echo "<script>alert('登录成功！');location='thpage.php';</script>";
	    }else{
		echo "<script>alert('请检查账户密码与所选模块是否正确。');location='signin.php';</script>";
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
		echo "<script>alert('登录成功！');location='ahpage.php';</script>";
	    }else{
		echo "<script>alert('请检查账户密码与所选模块是否正确。');location='signin.php';</script>";
		}
	   }
?>