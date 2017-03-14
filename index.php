
<?php
	session_start();
	
	header("Content-type:text/html;charset=utf-8");
	if($_SESSION['id']==1){
	include("init.inc.php");
	include("conn.php");
	$sql="select * from tb_stuinf";

	
	$r=mysql_query($sql);
	
	$grade=array();
	
	while($row=mysql_fetch_array($r)){
		$grade[]=$row;
	}
	$smarty->assign("grade",$grade);
$smarty->display("index.tpl");
}else{
			echo '<script>alert("你需要登录才可继续操作");location.href="login.html";</script>';

	
}