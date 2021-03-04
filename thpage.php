<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>毕业论文管理系统</title>
<link rel="stylesheet" href="emx_nav_left.css" type="text/css" />
<script type="text/javascript">
<!--
var time = 3000;
var numofitems = 7;

//menu constructor
function menu(allitems,thisitem,startstate){ 
  callname= "gl"+thisitem;
  divname="subglobal"+thisitem;  
  this.numberofmenuitems = allitems;
  this.caller = document.getElementById(callname);
  this.thediv = document.getElementById(divname);
  this.thediv.style.visibility = startstate;
}

//menu methods
function ehandler(event,theobj){
  for (var i=1; i<= theobj.numberofmenuitems; i++){
    var shutdiv =eval( "menuitem"+i+".thediv");
    shutdiv.style.visibility="hidden";
  }
  theobj.thediv.style.visibility="visible";
}
				
function closesubnav(event){
  if ((event.clientY <48)||(event.clientY > 107)){
    for (var i=1; i<= numofitems; i++){
      var shutdiv =eval('menuitem'+i+'.thediv');
      shutdiv.style.visibility='hidden';
    }
  }
}

		function setIframeHeight(iframe) {
			if (iframe) {
				var iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
				if (iframeWin.document.body) {
					iframe.height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
				}
			}
		};

		window.onload = function () {
			setIframeHeight(document.getElementById('external-frame'));
		};
</script>
</head>
<div class="skipLinks">skip to: <a href="#content">page content</a> | <a href="#pageNav">links on this page</a> | <a href="#globalNav">site navigation</a> | <a href="#siteInfo">footer (site information)</a> </div>
<div id="masthead">
  <div id="utility"> <a href="#">欢迎：</a> | <a href="#"><?php echo $_SESSION['name']; ?></a> | <a href="#">教师版</a></div>
  <!-- end globalNav -->
<div id="pagecell1">
  <!--pagecell1-->
  <img alt="" src="tl_curve_white.gif" height="6" width="6" id="tl" /> <img alt="" src="tr_curve_white.gif" height="6" width="6" id="tr" />
  <div id="pageName">
    <h2>毕业论文管理系统</h2>
  </div>
  <div id="pageNav">
    <div id="sectionLinks"> <a href="bboard.php" target="content">教师首页</a> <a href="tpassword.php" target="content">个人信息</a> <a href="tst.php" target="content">教师出题</a> <a href="oreprev.php" target="content">开题报告审核</a> <a href="IIrev.php" target="content">中期检查审核</a> <a href="fdotrev.php" target="content">论文初稿审核</a> <a href="Dthrev.php" target="content">答辩论文审核</a> <a href="tappraise.php" target="content">评委教师评价</a> <a href="signin.php">退出系统</a> </div>
  </div>
  <div id="contt">    
    <iframe src="bboard.php" name="content" id="ifrm" width="88.9%" height="300"></iframe>
  </div>
  <div id="siteInfo"><a href="#">About Us</a> | <a href="#">Site Map</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact Us</a> | &copy;2003 Company Name </div>
</div>
<!--end pagecell1-->
<br />
<script type="text/javascript">
    <!--
      var menuitem1 = new menu(7,1,"hidden");
			var menuitem2 = new menu(7,2,"hidden");
			var menuitem3 = new menu(7,3,"hidden");
			var menuitem4 = new menu(7,4,"hidden");
			var menuitem5 = new menu(7,5,"hidden");
			var menuitem6 = new menu(7,6,"hidden");
			var menuitem7 = new menu(7,7,"hidden");
    // -->
    </script>


</html>
