<?php
header("Content-type: text/html;charset=utf-8");
$host = 'localhost';
$user_name = 'root';
$password = 'root123';

$conn = mysqli_connect($host,$user_name,$password,'tmsystem');
if(!$conn){
 die('���ݿ�����ʧ�ܣ�'.mysqli_error());
}

// ���ID
$teid=$_GET['teid'];
// �ж��Ƿ��в���
if (!$teid)
{
    die ("ȱ�ٲ���!");
}
// �ļ������ַ
$FilePath='upload/download/';
// �ļ�����
$FileName='';
// �����ļ��������
$SaveFileName='';
// �������ݿ�
$conn=mysql_connect($Db_Server,$Db_User,$Db_Pwd);
// �ж������Ƿ�ɹ�
if (!$conn)
{
    die("�����������ݿ⣬������: " . mysql_error());
}
// ���ݿ�������룬Ӧ����������ݿ���뱣��һ�¡�������UTF-8���ʱ�׼����
mysql_query("set names 'utf8'");
// �����ݿ�
$db_selected = mysql_select_db($Db_Name, $conn);
// �жϴ��Ƿ�ɹ�
if (!$db_selected)
{
    die ("���ܴ����ݿ⣬������: " . mysql_error());
}
// SQL���
$sql ="select * from download WHERE download_id='".$id."'";
// ��ѯSQL���
$result = mysql_query($sql,$conn);
// ѭ����ȡ����
while($row = mysql_fetch_array($result))
{
// �ļ�����
$FileName=$row['Download_FileName'];
// �����ļ�����
$SaveFileName=$row['Download_SaveFileName'];
}
// ʹ����Ϲر����ݿ�����
mysql_close();
// �����ļ�����
function DownloadFile($url,$SaveFileName) 
{  
$FileName=$url;
    $file=fopen($FileName,"rb");
    Header("Content-type:application/octet-stream");
    Header("Accept-Ranges:bytes");
    Header("Content-Disposition:attachment;filename=".$SaveFileName);
$contents="";
// ��ȡ�ļ�
    while (!feof($file))
    {  
    $contents.=fread($file,8192);
   	}  
    echo $contents;
    // �ر��ļ�
    fclose($file);
}
// �ļ�������ַ
$url=$FilePath.$FileName;
// �ж��Ƿ����ļ�
if (file_exists($url)) 
{
// �����ļ�����
DownloadFile($url,$SaveFileName);
}
?>