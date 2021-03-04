
<?php
    $host = 'localhost';
	$user_name = 'root';
	$password = 'root123';

	$conn = mysqli_connect($host,$user_name,$password,'tmsystem');
	if(!$conn){
  	die('数据库连接失败：'.mysqli_error());
	}
 
 session_start();

 $upload_path = $_SERVER['DOCUMENT_ROOT']."/Dthesis/";
 $dest_file = $upload_path.basename($_FILES['userfile']['name']);
 
 if(move_uploaded_file($_FILES['userfile']['tmp_name'],$dest_file))
 {
  $pt=getcwd().$dest_file.$_FILES["file"]["name"];
  $sid=$_SESSION['id'];
  $result=mysqli_query($conn,"select teid from thesis_title where sid='".$sid."'");
  while($row=mysqli_fetch_row($result)){
   $sql=mysqli_query($conn,"insert into thesis_Dth(teid,Dthupdfile) values('".$row[teid]."','".$pt."')"); 
   echo "文件已上传。";
	}
 }
 else
 {echo "文件上传发生了一个错误 ".$_FILES['userfile']['error'];}
?>

