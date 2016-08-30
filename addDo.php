<?php 
  require_once 'inc/dbConn.php';
  ////////////////////
  ///获取用户信息
  ////////////////////
  $user_id = $_POST['user_id'];
  $user_name = $_POST['user_name'];
  echo $user_name;
  $password= $_POST['password'];
  if($_POST['sex']=='男'){
    $sex=1;
  }else if($_POST['sex']=='女')
  {
    $sex=2;
  }
  else $sex=3;    
;
  $age = $_POST['age'];
  $birthday_y = $_POST['birthday_y'];
  $birthday_m = $_POST['birthday_m'];
  $birthday_d = $_POST['birthday_d'];
  $birthday=mktime(0,0,0,$birthday_m,$birthday_d,$birthday_y);
  $hobby = $_POST['hobby'];
  $profile = $_POST['profile'];
  $addTime=mktime(date("h"),date("m"),date("s"),date("m"),date("d"),date("Y"));
  $lastLoginTime=$addTime;
  $sql = "insert into user (username,password,sex,age,birthday,hobby,profile,add_time,last_login) ".
  "values('$user_name','$password','$sex','$age','$birthday','$hobby','$profile','$addTime','$lastLoginTime')";
  echo $sql;
  // 执行sql语句
  mysql_query($sql,$con);
  // 获取影响的行数
  $rows = mysql_affected_rows();
  // 返回影响行数
  // 如果影响行数>=1,则判断添加成功,否则失败
  if($rows >= 1){
      alert("添加成功");
      href("userListt.php");
    }else{
     alert("添加失败");
  //   href("addUser.php");
    }
  function alert($title){
    echo "<script type='text/javascript'>alert('$title');</script>";
  }
  function href($url){
    echo "<script type='text/javascript'>window.location.href='$url'</script>";
  }
?>