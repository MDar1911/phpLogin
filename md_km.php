<?php
	session_start();
    header("Content-type:text/html;charset=utf-8");
   	if(isset($_GET['id'])&&$_SESSION['id']==1){
		include("conn.php");
		include("init.inc.php");
		$id = $_GET['id'];
		$sql = "select * from tb_km where id=$id";
		$r = mysql_query($sql);		
		if($row = mysql_fetch_array($r)){
			$smarty->assign("km",$row);
		
			
		    $smarty->display("md_km.tpl");
		}
		
		
	}else{
				echo '<script>alert("你需要登录才可继续操作");location.href="login.html";</script>';
	}
?>