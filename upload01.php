
<?php
    $host = 'localhost';
	$user_name = 'root';
	$password = 'root123';

	$conn = mysqli_connect($host,$user_name,$password,'tmsystem');
	if(!$conn){
  	die('���ݿ�����ʧ�ܣ�'.mysqli_error());
	}
 
 session_start();
 
 $upload_path = $_SERVER['DOCUMENT_ROOT']."/oreport/";
 $dest_file = $upload_path.basename($_FILES['userfile']['name']);
 
 if(move_uploaded_file($_FILES['userfile']['tmp_name'],$dest_file))
 {
  $pt=getcwd().$dest_file.$_FILES["file"]["name"];
  $sid=$_SESSION['id'];
  $result=mysqli_query($conn,"select teid from thesis_title where sid='".$sid."'");
  while($row=mysqli_fetch_row($result)){
   $sql=mysqli_query($conn,"insert into thesis_orep(teid,orepupdfile) values('".$row[teid]."','".$pt."')");
   echo "�ļ����ϴ���";
	}
 }
 else
 {echo "�ļ��ϴ�������һ������ ".$_	FILES['userfile']['error'];}
?>
