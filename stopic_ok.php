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
$sid=$_SESSION['id'];
if(isset($_POST['define'])){
 if($teid=$_POST['teid']){
    $query=mysqli_query($conn,"update thesis_title set sid='".$sid."',teflag=3,choose='是' where teid='".$teid."'");
 }
}
?>