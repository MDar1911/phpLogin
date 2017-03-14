<?php
		session_start();
		header("Content-type:text/html;charset=utf-8");
			
   		if(isset($_GET['id'])&&$_SESSION['id']==1){
		include("conn.php");
		include("init.inc.php");
		$id = $_GET['id'];
		
		
		$sql = "delete from tb_km where id='$id'";
		mysql_query($sql);		
		echo '<script>alert("删除成功");location.href="kemu.php";</script>';

		}else{
		echo '<script>alert("你需要登录才可继续操作");location.href="login.html";</script>';
		}
?>