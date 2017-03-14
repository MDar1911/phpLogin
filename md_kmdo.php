<?php
	session_start();
    header("Content-type:text/html;charset=utf-8");
   	if(isset($_POST['id'])&&$_SESSION['id']==1){
		include("conn.php");
		include("init.inc.php");
		$id = $_POST['id'];
		$oldid = $_POST['oldid'];
		$id = $_POST['id'];
		$km = $_POST['km'];
	
	$sql ="update tb_km set id=$id,km='$km' where id=$oldid";
		if($r = mysql_query($sql)){
			echo '<script>alert("修改成功");location.href="kemu.php";</script>';
		    
		}else{
			echo '<script>alert("修改失败，可能存在相同的科目");history.go(-1);</script>';
		}
		
		
	}else{
				echo '<script>alert("你需要登录才可继续操作");location.href="login.html";</script>';
	}
?>