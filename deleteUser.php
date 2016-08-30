<?php
  // 包含数据库文件
  require_once 'inc/dbConn.php';
  // 获取删除的id
  $id = $_GET['id'];
  $row = delete($id,$con);
  if($row >=1){
    alert("删除成功");
  }else{
    alert("删除失败");
  }
  // 跳转到用户列表页面
  href("userListt.php");
  function delete($id,$con){
      $sql = "delete from user where id='$id'";
      // 执行删除
      mysql_query($sql,$con);
      // 获取影响的行数
      $rows = mysql_affected_rows();
      // 返回影响行数
      return $rows;
    }
    function alert($title){
        echo "<script type='text/javascript'>alert('$title');</script>";
    }
    function href($url){
        echo "<script type='text/javascript'>window.location.href='$url'</script>";
    }
?>