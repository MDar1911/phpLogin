<?php
	session_start();
    header("Content-type:text/html;charset=utf-8");
   	if(isset($_GET['xh'])&&$_SESSION['id']==1){
		include("conn.php");
		include("init.inc.php");
		$xh = $_GET['xh'];
		$sql = "select * from tb_stuinf where xh='$xh'";
		$r = mysql_query($sql);		
		if($row = mysql_fetch_array($r)){
			$smarty->assign("stu",$row);
			
		    $smarty->display("md_stu.tpl");
		}
		
		
	}else{
		echo '<script>alert("你需要登录才可继续操作");location.href="login.html";</script>';
	}
?>