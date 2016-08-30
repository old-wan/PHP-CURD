<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>新增用户</title>
  </head>
<body>
<form action="addDo.php" method="post">
      <input type="hidden" name="user_id" value=" "/>
      <table width="444" border="1" align="center">
       <tr>
        <td>用户名 </td>
        <td> <input type="text" name="user_name" size="10" /></td>
       </tr>
       <tr>
        <td>密码</td>
        <td> <input type="password" name="password" size="10" /></td>
       </tr>
       <tr>
        <td>性别</td>
        <td> <input type="radio" name="sex" value="男" checked="checked" /> 男<input type="radio" name="sex" value="女" /> 女 </td>
       </tr>
       <tr>
        <td>年龄</td>
        <td> <input type="text" name="age" size="3" /></td>
       </tr>
       <tr>
        <td>出生年月</td>
        <td> 
          <select name="birthday_y">
          <option value="1980">1980</option>
          <option value="1981">1981</option>
          <option value="1982">1982</option>
          <option value="1983">1983</option>
          <option value="1984">1984</option>
          <option value="1985">1985</option>
          <option value="1986">1986</option>
          <option value="1987">1987</option>
          <option value="1988">1988</option>
          <option value="1989">1989</option>
          <option value="1990">1990</option>
          </select>
          年
          <select name="birthday_m">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          </select>
          月
          <select name="birthday_d">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
          </select>
          日
        </td>
       </tr>
       <tr>
        <td>爱好</td>
        <td> <input type="text" name="hobby" size="44" /></td>
       </tr>
       <tr>
        <td>个人简介</td>
        <td> <textarea name="profile" rows="10" cols="30"></textarea></td>
       </tr>
       <tr>
          <td colspan="2" align="center"><input type="submit" value="增加用户" /></td>
  </tr>
 </table>
      <p> </p>
      <p> </p>
      <p> </p>
</form>
</body>
</html>