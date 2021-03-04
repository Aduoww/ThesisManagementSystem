<?php
header("Content-type: text/html;charset=utf-8");
$host = 'localhost';
$user_name = 'root';
$password = 'root123';

$conn = mysqli_connect($host,$user_name,$password,'tmsystem');
if(!$conn){
 die('数据库连接失败：'.mysqli_error());
}

// 获得ID
$teid=$_GET['teid'];
// 判断是否有参数
if (!$teid)
{
    die ("缺少参数!");
}
// 文件保存地址
$FilePath='upload/download/';
// 文件名称
$FileName='';
// 下载文件另存名称
$SaveFileName='';
// 连接数据库
$conn=mysql_connect($Db_Server,$Db_User,$Db_Pwd);
// 判断连接是否成功
if (!$conn)
{
    die("不能连接数据库，错误是: " . mysql_error());
}
// 数据库输出编码，应该与你的数据库编码保持一致。建议用UTF-8国际标准编码
mysql_query("set names 'utf8'");
// 打开数据库
$db_selected = mysql_select_db($Db_Name, $conn);
// 判断打开是否成功
if (!$db_selected)
{
    die ("不能打开数据库，错误是: " . mysql_error());
}
// SQL语句
$sql ="select * from download WHERE download_id='".$id."'";
// 查询SQL语句
$result = mysql_query($sql,$conn);
// 循环读取数据
while($row = mysql_fetch_array($result))
{
// 文件名称
$FileName=$row['Download_FileName'];
// 下载文件名称
$SaveFileName=$row['Download_SaveFileName'];
}
// 使用完毕关闭数据库连接
mysql_close();
// 下载文件函数
function DownloadFile($url,$SaveFileName) 
{  
$FileName=$url;
    $file=fopen($FileName,"rb");
    Header("Content-type:application/octet-stream");
    Header("Accept-Ranges:bytes");
    Header("Content-Disposition:attachment;filename=".$SaveFileName);
$contents="";
// 读取文件
    while (!feof($file))
    {  
    $contents.=fread($file,8192);
   	}  
    echo $contents;
    // 关闭文件
    fclose($file);
}
// 文件下载网址
$url=$FilePath.$FileName;
// 判断是否有文件
if (file_exists($url)) 
{
// 下载文件函数
DownloadFile($url,$SaveFileName);
}
?>