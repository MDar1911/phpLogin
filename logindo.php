<?php
	
	header("Content-type:text/html;charset=utf-8");
	include("init.inc.php");
	include("conn.php");
	$name=$_POST['name'];
	$password=$_POST['password'];	
	$string1=$_POST['string'];
	$sql="select * from tb_user";
	$r=mysql_query($sql);
	$grade=array();
	session_start();
	if($_POST['name']!=null){
		if($_SESSION['string']==$string1){
			while($row=mysql_fetch_array($r)){
			if($name==$row['user']&&$password==$row['pwd']){
				$_SESSION['id']=1;	
				echo "<script>location.href='index.php';</script>";	
				
			}else{
				"<script>alert('用户名密码错误');location.href='login.html';</script>";	
			}
			}
		}else{
			echo "<script>alert('验证码错误');location.href='login.html';</script>";	
		}

	}else{
		echo "<script>alert('请输入用户名和密码');location.href='login.html';</script>";
	}
	
?>