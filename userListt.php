<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>会员信息列表</title>
</head>
  <body>
    <table border="1" cellspacing="0" cellpadding="0" id="userList" align="center">
   <tr align="center">
    <td>id</td>
    <td>用户名</td>
    <td>密码</td>
    <td>性别</td>
    <td>年龄</td>
    <td>出生年月</td>
    <td>爱好</td>
    <td>注册时间</td>
    <td>最后登录时间</td>
    <td>操作</td>
   </tr>
<?php
require_once 'inc/dbConn.php';
//这是啥东东。。
date_default_timezone_set("PRC");
//读数据。。。
  $sql = "select * from user order by id asc";
  $result = mysql_query($sql,$con);
  $userList = '';
  while($rs = mysql_fetch_array($result)){
        $userList[] = $rs;
    }
          // 循环用户列表
        foreach ($userList as $user){
          echo "
             <tr>
              <td> ".$user['id']."</td>
              <td> ".$user['username']."</td>
              <td> ".$user['password']."</td>
              <td> ".$user['sex']."</td>
              <td> ".$user['age']."</td>
              <td> ".date("Y-m-d",$user['birthday'])."</td>
              <td> ".$user['hobby']."</td>
              <td> ".date("Y-m-d",$user['add_time'])."</td>
              <td> ".date("Y-m-d",$user['last_login'])."</td>
              <td> <a href='addUser.php'>增</a> 
              <a href='deleteUser.php?id=".$user['id']."');\"> 删</a>
              <a href='editUser.php?id=".$user['id']."');\"> 改</a>
              <a href='detailUser.php?id=".$user['id']."');\"> 查</a>                    
              </td>
             </tr>
          ";
        }
?>
  </table>
  </body>
</html>