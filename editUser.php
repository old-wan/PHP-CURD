<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑用户</title>
</head>
<body>
<?php 
require_once 'inc/dbConn.php';
$userId=$_GET['id'];
//这是啥东东。。
date_default_timezone_set("PRC");
//读数据。。。
  $sql = "select * from user where id=".$userId;
  $result = mysql_query($sql,$con);
  $user = mysql_fetch_array($result);
?>
<form action="editDo.php" method="post">
    <input type="hidden" name="user_id" value="<?php echo $user['id']?>"/>
    <table width="444" border="1" align="center">
       <tr>
        <td>用户名 </td>
        <td> <input type="text" name="user_name" size="10" value=<?php echo $user['username'] ?> /></td>
       </tr>
       <tr>
        <td>密码</td>
        <td> <input type="password" name="password" size="10" value=<?php echo $user['password'] ?> /></td>
       </tr>
       <tr>
        <td>性别</td> 
        <td> <input type="radio" name="sex" value="男"
         <?php if($user[sex]=='1') echo "checked=\"checked\"" ?> /> 男<input type="radio" name="sex" value="女" <?php if($user[sex]=='2') echo "checked=\"checked\"" ?>
         /> 女 </td>
       </tr>
       <tr>
        <td>年龄</td>
        <td> <input type="text" name="age" size="3" value=<?php echo $user['age'] ?> /></td>
       </tr>
       <tr>
        <td>出生年月</td>
        <td> 
        <!-- 1。取得年月日。2。相应的年月日。。。你懂的 -->
        <?php
        $birday_y=date("Y",$user['birthday']);
        $birday_m=date("m",$user['birthday']);
        $birday_d=date("d",$user['birthday']);
        ?>
          <select name="birthday_y">
          <option value="1980" <?php if($birday_y==1980) echo "selected=\"selected\""; ?> >1980</option>
          <option value="1981" <?php if($birday_y==1981) echo "selected=\"selected\""; ?> >1981</option>
          <option value="1982" <?php if($birday_y==1982) echo "selected=\"selected\""; ?> >1982</option>
          <option value="1983" <?php if($birday_y==1983) echo "selected=\"selected\""; ?> >1983</option>
          <option value="1984" <?php if($birday_y==1984) echo "selected=\"selected\""; ?> >1984</option>
          <option value="1985" <?php if($birday_y==1985) echo "selected=\"selected\""; ?> >1985</option>
          <option value="1986" <?php if($birday_y==1986) echo "selected=\"selected\""; ?> >1986</option>
          <option value="1987" <?php if($birday_y==1987) echo "selected=\"selected\""; ?> >1987</option>
          <option value="1988" <?php if($birday_y==1988) echo "selected=\"selected\""; ?> >1988</option>
          <option value="1989" <?php if($birday_y==1989) echo "selected=\"selected\""; ?> >1989</option>
          <option value="1990" <?php if($birday_y==1990) echo "selected=\"selected\""; ?> >1990</option>
          </select>
          年
          <select name="birthday_m">
          <option value="1" <?php if($birday_m==1) echo "selected=\"selected\""; ?> >1</option>
          <option value="2" <?php if($birday_m==2) echo "selected=\"selected\""; ?> >2</option>
          <option value="3" <?php if($birday_m==3) echo "selected=\"selected\""; ?> >3</option>
          <option value="4" <?php if($birday_m==4) echo "selected=\"selected\""; ?> >4</option>
          <option value="5" <?php if($birday_m==5) echo "selected=\"selected\""; ?> >5</option>
          <option value="6" <?php if($birday_m==6) echo "selected=\"selected\""; ?> >6</option>
          <option value="7" <?php if($birday_m==7) echo "selected=\"selected\""; ?> >7</option>
          <option value="8" <?php if($birday_m==8) echo "selected=\"selected\""; ?> >8</option>
          <option value="9" <?php if($birday_m==9) echo "selected=\"selected\""; ?> >9</option>
          <option value="10" <?php if($birday_m==10) echo "selected=\"selected\""; ?> >10</option>
          <option value="11" <?php if($birday_m==11) echo "selected=\"selected\""; ?> >11</option>
          <option value="12" <?php if($birday_m==12) echo "selected=\"selected\""; ?> >12</option>
          </select>
          月 
          <select name="birthday_d">
          <option value="1" <?php if($birday_d==1) echo "selected=\"selected\""; ?> >1</option>
          <option value="2" <?php if($birday_d==2) echo "selected=\"selected\""; ?> >2</option>
          <option value="3" <?php if($birday_d==3) echo "selected=\"selected\""; ?> >3</option>
          <option value="4" <?php if($birday_d==4) echo "selected=\"selected\""; ?> >4</option>
          <option value="5" <?php if($birday_d==5) echo "selected=\"selected\""; ?> >5</option>
          <option value="6" <?php if($birday_d==6) echo "selected=\"selected\""; ?> >6</option>
          <option value="7" <?php if($birday_d==7) echo "selected=\"selected\""; ?> >7</option>
          <option value="8" <?php if($birday_d==8) echo "selected=\"selected\""; ?> >8</option>
          <option value="9" <?php if($birday_d==9) echo "selected=\"selected\""; ?> >9</option>
          <option value="10" <?php if($birday_d==10) echo "selected=\"selected\""; ?> >10</option>
          <option value="11" <?php if($birday_d==11) echo "selected=\"selected\""; ?> >11</option>
          <option value="12" <?php if($birday_d==12) echo "selected=\"selected\""; ?> >12</option>
          <option value="13" <?php if($birday_d==13) echo "selected=\"selected\""; ?> >13</option>
          <option value="14" <?php if($birday_d==14) echo "selected=\"selected\""; ?> >14</option>
          <option value="15" <?php if($birday_d==15) echo "selected=\"selected\""; ?> >15</option>
          <option value="16" <?php if($birday_d==16) echo "selected=\"selected\""; ?> >16</option>
          <option value="17" <?php if($birday_d==17) echo "selected=\"selected\""; ?> >17</option>
          <option value="18" <?php if($birday_d==18) echo "selected=\"selected\""; ?> >18</option>
          <option value="19" <?php if($birday_d==19) echo "selected=\"selected\""; ?> >19</option>
          <option value="20" <?php if($birday_d==20) echo "selected=\"selected\""; ?> >20</option>
          <option value="21" <?php if($birday_d==21) echo "selected=\"selected\""; ?> >21</option>
          <option value="22" <?php if($birday_d==22) echo "selected=\"selected\""; ?> >22</option>
          <option value="23" <?php if($birday_d==23) echo "selected=\"selected\""; ?> >23</option>
          <option value="24" <?php if($birday_d==24) echo "selected=\"selected\""; ?> >24</option>
          <option value="25" <?php if($birday_d==25) echo "selected=\"selected\""; ?> >25</option>
          <option value="26" <?php if($birday_d==26) echo "selected=\"selected\""; ?> >26</option>
          <option value="27" <?php if($birday_d==27) echo "selected=\"selected\""; ?> >27</option>
          <option value="28" <?php if($birday_d==28) echo "selected=\"selected\""; ?> >28</option>
          <option value="29" <?php if($birday_d==29) echo "selected=\"selected\""; ?> >29</option>
          <option value="30" <?php if($birday_d==30) echo "selected=\"selected\""; ?> >30</option>
          <option value="31" <?php if($birday_d==31) echo "selected=\"selected\""; ?> >31</option>
          </select>
          日
        </td>
       </tr>
       <tr>
        <td>爱好</td>
        <td> <input type="text" name="hobby" size="44" value=<?php echo $user['hobby'] ?> /></td>
       </tr>
       <tr>
        <td>个人简介</td>
        <td> <textarea name="profile" rows="10" cols="30" ><?php echo $user['profile'] ?> </textarea> </td>
       </tr>
       <tr>
          <td colspan="2" align="center"><input type="submit" value="确定修改" /></td>
       </tr>
 </table>
      <p> </p>
      <p> </p>
      <p> </p>
</form>
</body>
</html>