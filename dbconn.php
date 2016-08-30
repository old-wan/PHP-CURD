<?php
// 创建数据库连接
	$con = mysql_connect("localhost",'root','') or die('error:'.mysql_error());
	mysql_select_db('hyxx',$con) or die('error:'.mysql_error());
	mysql_query('set NAMES utf8');
?>