<html>
<?php 
include ("user/login.php");
include ("user/users.php"); //Set to Private for Login
		if($mod != 1):
			 die();
		endif;
?>

	<script type="text/javascript">
		/* =============================
		This script generates sample text for the body content.
		You can remove this script and any reference to it.
		 ============================= */
		var bodyText=["The smaller your reality, the more convinced you are that you know everything.", "If the facts don't fit the theory, change the facts.", "The past has no power over the present moment.", "This, too, will pass.", "</p><p>You will not be punished for your anger, you will be punished by your anger.", "Peace comes from within. Do not seek it without.", "<h3>Heading</h3><p>The most important moment of your life is now. The most important person in your life is the one you are with now, and the most important activity in your life is the one you are involved with now."]
		function generateText(sentenceCount){
			for (var i=0; i<sentenceCount; i++)
			document.write(bodyText[Math.floor(Math.random()*7)]+" ")
		}
	</script>

	
<body>
	<header id="header"><p><?php include ("temps/head.php"); ?></p></header>

	<div id="container">

		<main id="center" class="column">
			<article>	
				<center><h1>Mod ID for MYSQL</h1><p>
				<font color='#FF0000'>Admin</font>		= 1<br />
				<font color='#001bff'>Supporter</font>	= 2<br />
				<font color='#05ff00'>Member</font>		= 3<br />
				<font color='#b3b3b3'>None User</font>	= 0<br /></p></center>
				<h1>Heading</h1>
				<p><script>generateText(50)</script></p>
			</article>
		</main>

		<nav id="left" class="column">
			<center><h1><font color='#ff0000'>Dynamin Menu</font></h1></center>
			<?php 
					if(isset($_POST['add_main_menu']))
					{
					$menu_name = $_POST['menu_name'];
					$menu_link = $_POST['mn_link'];
					$menu_icon = $_POST['menu_icon'];
					$sql=$dbcon->query("INSERT INTO main_menu(m_menu_name,m_menu_link,m_menu_icon) VALUES('$menu_name','$menu_link','$menu_icon')");
					} 
			?>
				<center><h1><font color='#000'>Main Menu</font></h1>			
				<form method="post">
					<input type="text" placeholder="Titel :" name="menu name" /><br />
					<input type="text" placeholder="Pfard.index :" name="mn_link" /><br />
					<input type="text" placeholder="Php icon :" name="menu icon" /><br />
					<button type="submit" name="add_main_menu">Add main menu</button></center>
				</form>

			<?php
					if(isset($_POST['add_sub_menu']))
					{
					$menu_name = $_POST['sub_menu_name'];
					$menu_link = $_POST['sub_menu_link'];
					$menu_icon = $_POST['sub_menu_icon'];
					$sql=$dbcon->query("INSERT INTO sub_menu(m_menu_name,m_menu_link,m_menu_icon) VALUES('$menu_name','$menu_link','$menu_icon')");
					}
			?>

				<center><h1><font color='#000'>Sub Menu</font></h1>
				<form method="post">
					<input type="text" placeholder="Titel :" name="sub_menu_name" /><br />
					<input type="text" placeholder="Pfard.index :" name="sub_menu_link" /><br />
					<input type="text" placeholder="Php icon :" name="sub_menu_icon" /><br />
					<button type="submit" name="add_sub_menu">Add sub menu</button></center>
				</form>

		</nav>

		<div id="right" class="column">
			<h3>Teamspeak3</h3>
			<div id="ts3viewer_1116703" style=""> </div>
			<script src="https://static.tsviewer.com/short_expire/js/ts3viewer_loader.js"></script>
			<script>
			var ts3v_url_1 = "https://www.tsviewer.com/ts3viewer.php?ID=1116703&text=757575&text_size=12&text_family=1&text_s_color=000000&text_s_weight=normal&text_s_style=normal&text_s_variant=normal&text_s_decoration=none&text_i_color=&text_i_weight=normal&text_i_style=normal&text_i_variant=normal&text_i_decoration=none&text_c_color=&text_c_weight=normal&text_c_style=normal&text_c_variant=normal&text_c_decoration=none&text_u_color=000000&text_u_weight=normal&text_u_style=normal&text_u_variant=normal&text_u_decoration=none&text_s_color_h=&text_s_weight_h=bold&text_s_style_h=normal&text_s_variant_h=normal&text_s_decoration_h=none&text_i_color_h=000000&text_i_weight_h=bold&text_i_style_h=normal&text_i_variant_h=normal&text_i_decoration_h=none&text_c_color_h=&text_c_weight_h=normal&text_c_style_h=normal&text_c_variant_h=normal&text_c_decoration_h=none&text_u_color_h=&text_u_weight_h=bold&text_u_style_h=normal&text_u_variant_h=normal&text_u_decoration_h=none&iconset=default";
			ts3v_display.init(ts3v_url_1, 1116703, 100);
			</script>
		</div>

	</div>

	<div id="footer-wrapper">
		<footer id="footer"><center><?php echo require ("temps/footer.php"); ?></center></footer>
	</div>

</body>
</html>
