<!--	$r2=mysql_query($sql2);$sql2="select * from tb_km";	$smarty->assign("grade2",$grade2);$grade2=array();while($row2=mysql_fetch_array($r2)){
			$grade2[]=$row2;
		}	-->
		<?php
	session_start();
	
	header("Content-type:text/html;charset=utf-8");
	if ($_SESSION['id']==1) {
	include("init.inc.php");
	include("conn.php");
	
	$sql="select * from tb_grade,tb_stuinf where tb_grade.xh=tb_stuinf.xh";
			
	$r=mysql_query($sql);


	$grade=array();
	

	while($row=mysql_fetch_array($r)){
		$grade[]=$row;
	}
	

	$smarty->assign("grade",$grade);


	
	
			$smarty->display("chengji.tpl");
		}else{
				echo '<script>alert("你需要登录才可继续操作");location.href="login.html";</script>';

		}
	
	
	