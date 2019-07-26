<html>	
<body>
	<header id="header"><p><?php include ("temps/head.php"); ?></p></header>

	<div id="container">

		<main id="center" class="column">
			<article>

			

			</article>
		</main>

				<form id="center" class="box" action="?login=1" method="post">
				<?php include ("user/login.php");?>
				<h1>Login</h1>
				<input type="Username" size="40" name="username" placeholder="Username">
				<input type="Password" size="40" name="passwort" placeholder="Password">
				<input type="submit" name="" value="Login">
				</form>

		<nav id="left" class="column">
			<h3>Teamspeak3</h3>
			<div id="ts3viewer_1116703" style=""> </div>
			<script src="https://static.tsviewer.com/short_expire/js/ts3viewer_loader.js"></script>
			<script>
			var ts3v_url_1 = "https://www.tsviewer.com/ts3viewer.php?ID=1116703&text=757575&text_size=12&text_family=1&text_s_color=000000&text_s_weight=normal&text_s_style=normal&text_s_variant=normal&text_s_decoration=none&text_i_color=&text_i_weight=normal&text_i_style=normal&text_i_variant=normal&text_i_decoration=none&text_c_color=&text_c_weight=normal&text_c_style=normal&text_c_variant=normal&text_c_decoration=none&text_u_color=000000&text_u_weight=normal&text_u_style=normal&text_u_variant=normal&text_u_decoration=none&text_s_color_h=&text_s_weight_h=bold&text_s_style_h=normal&text_s_variant_h=normal&text_s_decoration_h=none&text_i_color_h=000000&text_i_weight_h=bold&text_i_style_h=normal&text_i_variant_h=normal&text_i_decoration_h=none&text_c_color_h=&text_c_weight_h=normal&text_c_style_h=normal&text_c_variant_h=normal&text_c_decoration_h=none&text_u_color_h=&text_u_weight_h=bold&text_u_style_h=normal&text_u_variant_h=normal&text_u_decoration_h=none&iconset=default";
			ts3v_display.init(ts3v_url_1, 1116703, 100);
			</script>

		</nav>

		<div id="right" class="column">
				<h3>Support</h3>
			<ul>
				<li><a href="#"Klick Here</a></li>

			</ul>
		</div>

	</div>

	<div id="footer-wrapper">
		<footer id="footer"><center><?php echo require ("temps/footer.php"); ?></center></footer>
	</div>

</body>
</html>
