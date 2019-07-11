<?php
$dbcon = new MySQLi("localhost","root","","awonline");
?>

<body>
<div id="head">
<div class="wrap"><br />
<h1><a href="http://www.codingcage.com/">Coding Cage - programming blog</a></h1><label><a href="add_menu.php">add menu here</a></label>
</div>
</div>

<div class="wrap">
<ul id="nav">
<li><a href="#">Homepage</a></li>
<?php
$res=$dbcon->query("SELECT * FROM main_menu");
while($row=$res->fetch_array())
{
 ?>
 <li><a href="<?php echo $row['m_menu_link']; ?>"><?php echo $row['m_menu_name']; ?></a>
 <?php
 $res_pro=$dbcon->query("SELECT * FROM sub_menu WHERE m_menu_id=".$row['m_menu_id']);
 ?>
        <ul>    
  <?php  
  while($pro_row=$res_pro->fetch_array())
  {
   ?><li><a href="<?php echo $pro_row['s_menu_link']; ?>"><?php echo $pro_row['s_menu_name']; ?></a></li><?php
  }
  ?>
 </ul>
 </li> 
 
    <?php
}
?>
</ul> 
</div>
</body>
</html>