<?php 
include ("user/login.php");
include ("user/users.php"); //Set to Private for Login
include ("temps/head.php");


if(isset($_POST['add_main_menu']))
{
 $menu_name = $_POST['menu_name'];
 $menu_link = $_POST['mn_link'];
 $menu_icon = $_POST['menu_icon'];
 $sql=$dbcon->query("INSERT INTO main_menu(m_menu_name,m_menu_link,m_menu_icon) VALUES('$menu_name','$menu_link','$menu_icon')");
}
?>
<body>

<div id="head">
<div class="wrap"><br />
<center><h1><font color='#FF0000'><p>Dynamic Menu</p></font></h1></center>
</div>
</div>
<center>
<pre>
<form method="post">
<input type="text" placeholder="Titel :" name="menu name" /><br />
<input type="text" placeholder="Pfard.index :" name="mn_link" /><br />
<input type="text" placeholder="Php icon :" name="menu icon" /><br />
<button type="submit" name="add_main_menu">Add main menu</button>
</form>
</pre>
<br />
<pre>

<?php
if(isset($_POST['add_sub_menu']))
{
 $menu_name = $_POST['sub_menu_name'];
 $menu_link = $_POST['sub_menu_link'];
 $menu_icon = $_POST['sub_menu_icon'];
 $sql=$dbcon->query("INSERT INTO sub_menu(m_menu_name,m_menu_link,m_menu_icon) VALUES('$menu_name','$menu_link','$menu_icon')");
}
?>

<center><h1><font color='#FF0000'><p>Dynamic Sub-Menu</p></font></h1></center>
<form method="post">
</select><br />
<input type="text" placeholder="Titel :" name="sub_menu_name" /><br />
<input type="text" placeholder="Pfard.index :" name="sub_menu_link" /><br />
<input type="text" placeholder="Php icon :" name="sub_menu_icon" /><br />
<button type="submit" name="add_sub_menu">Add sub menu</button>
</form>
</pre>
</center>



</body>
</html>