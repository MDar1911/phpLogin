<?php
	session_start();
    header("Content-type:text/html;charset=utf-8");
	 if($_SESSION['id']==1){
   	if($_POST['id']!=""&&$_POST['km']!=""){
		include("conn.php");
		include("init.inc.php");
		$oldid = $_POST['oldid'];
		$km = $_POST['km'];
		$id = $_POST['id'];
		$sql="insert into tb_km values ('$id','$km')";
		
		if($r = mysql_query($sql)){
			echo '<script>alert("添加成功");location.href="kemu.php";</script>';
		    
		}else{
			echo '<script>alert("添加失败，可能存在相同的科目");history.go(-1);</script>';
		}
		 
		
	}else{
		echo '<script>alert("添加的值存在空值，请重新添加有效值");location.href="insert_km.php";</script>';
	}
	 }else{
	 echo '<script>alert("你需要登录才可继续操作");location.href="login.html";</script>';
	 }
?>