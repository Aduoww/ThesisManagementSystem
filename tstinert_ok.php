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
if(isset($_POST['tst'])){
  $title=$_POST['title'];
  $demand=$_POST['demand'];
  $sql=mysqli_query($conn,"insert into thesis_title(tid,title,demand) values ('".$tid."','".$title."','".$demand."')");
}

?>