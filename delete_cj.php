<?php
	session_start();
	 header("Content-type:text/html;charset=utf-8");
	 if(isset($_GET['xh'])&&$_SESSION['id']==1){
   		if(isset($_GET['xh'])){
		include("conn.php");
		include("init.inc.php");
		$xh = $_GET['xh'];
		$km = $_GET['km'];
		
		$sql = "delete from tb_grade where xh='$xh' and km='$km'";
		mysql_query($sql);		
		echo '<script>alert("删除成功");location.href="chengji.php";</script>';
			
	}
	
	}else{
			echo '<script>alert("你需要登录才可继续操作");location.href="login.html";</script>';
	}
?>