<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$host = 'localhost';
$user_name = 'root';
$password = 'root123';

$conn = mysqli_connect($host,$user_name,$password,'tmsystem');
if(!$conn){
  die('���ݿ�����ʧ�ܣ�'.mysql_error());
session_start();
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<script>
  function alt(){
    var msg = "��ȷ���Ƿ��޸ġ�";
	if(confirm(msg)==true){
	  return true;
	}else{
	  return false;
	}
  }
</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0">
    <tr>
      <th width="49%"><div align="right">���⣺</div></th>
      <th width="51%"><div align="left">
        <input name="title" type="text" />
      </div></th>
    </tr>
    <tr>
      <td><div align="right"><strong>���ݣ�</strong></div></td>
      <td>
        <div align="left">
          <textarea name="content" cols="50" rows="20"></textarea>
        </div></td>
    </tr>
	<tr>
	   <td></td>
	   <td><div align="left"><a href="boardset.php" onclick="return alt()"><input type="submit" name="balter" value="�޸�"/></a></div></td>
	</tr>
  </table>
</form>
<?php
  if($_GET['bid']){
    $id=$_GET['bid'];
	if(isset($_POST['balter'])){
	  $title=$_POST['title'];
	  $content=$_POST['content'];
	
	  $query=mysqli_query($conn,"update board set btitle='".$title."' ,bcont='".$content."' where bid='".$id."'");
	}
  }
  mysqli_close($conn);
?>
</body>
</html>
