<?php
	session_start();
	 header("Content-type:text/html;charset=utf-8");
   	 if(isset($_GET['xh'])&&$_SESSION['id']==1){
		include("conn.php");
		include("init.inc.php");
		$xh = $_GET['xh'];
		$sql = "delete from tb_stuinf where xh='$xh'";
		mysql_query($sql);		
					
		echo '<script>alert("删除成功");location.href="index.php";</script>';
			
	}else{
		echo '<script>alert("你需要登录才可继续操作");location.href="login.html";</script>';
	}
?>