<?php
$host = 'localhost';
$user_name = 'root';
$password = 'root123';

$conn = mysqli_connect($host,$user_name,$password,'tmsystem');
if(!$conn){
  die('数据库连接失败：'.mysqli_error());
}

$sql = 'select bid,btitle,bcont,btime from board';
$result = mysqli_query($conn,$sql) or die("<br/>ERROR: <b>".mysqli_error()."</b><br/>产生问题的SQL：".$sql);
?>
<html>
<head>

<title>Untitled Document</title>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<body class="sub">
<form name="boardset" method="post" action="">
  <table style="text-align: center" width="100%" border="0" cellspacing="0" cellpadding="4">
    <tr style="vertical-align: top" class="HeaderColor">
      <td>        标题      </td>
      <td style="text-align: center">日期</td>
      <td style="text-align: center">        操作      </td>
    </tr>
     
    <tr style="vertical-align: top">
      <td style="text-align: center" colspan="4">        <hr noshade>      </td>
    </tr>
 <?php
if($num = mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_array($result))
  {
?>   
    <tr style="vertical-align: top">
      <td width="60%">  <?php echo "<a href=bcontent.php?bid=".$row['bid'].">".$row['btitle']."</a>";  ?><br>  </td>
      <td width="15%" style="text-align: center" class="FooterColor"><?php echo $row['btime'];?></td>
      <td width="15%" style="text-align: center">
       <?php echo "<a href=balter.php?bid=".$row['bid'].">修改</a>";  ?> <?php echo "<a href=bdelete.php?bid=".$row['bid'].">删除</a>";  ?>     </td>
    </tr>
 <?php
   }
}
?>
  </table>
 </br> <div style="text-align: right"><?php echo "<a href=binsert.php>新增</a>";  ?></div>
</form>
<?php
 mysqli_close($conn);
?>
</body>
</html>
