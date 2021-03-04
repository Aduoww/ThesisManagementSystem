<?php
$host = 'localhost';
$user_name = 'root';
$password = 'root123';

$conn = mysqli_connect($host,$user_name,$password,'tmsystem');
if(!$conn){
 die('数据库连接失败：'.mysqli_error());
}

session_start();
if(isset($_POST['define'])){
 if($teid=$_POST['teid']){
  mysqli_query($conn,"update thesis_title set teflag=1 where teid='".$teid."'");
 }
}
if(isset($_POST['reject'])){
 if($teid=$_POST['teid']){
  mysqli_query($conn,"update thesis_title set teflag=2 where teid='".$teid."'");
 }
}
?>