<html>
<?php include ("user/login.php"); ?>

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
						
						<?php
								session_destroy();
								echo "<center><h1><font color='#FF0000'>Logout erfolgreich</font></h1></center>";
						?>
								<meta http-equiv="refresh" content="3; URL=/index.php">
			</article>
		</main>

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
				<h3>Problems</h3>
			<ul>
				<li><a href="#">Link 1</a></li>
				<li><a href="#">Link 2</a></li>
				<li><a href="#">Link 3</a></li>
				<li><a href="#">Link 4</a></li>
				<li><a href="#">Link 5</a></li>
			</ul>
				<h3>Left heading</h3>
			<ul>
				<li><a href="#">Link 1</a></li>
				<li><a href="#">Link 2</a></li>
				<li><a href="#">Link 3</a></li>
				<li><a href="#">Link 4</a></li>
				<li><a href="#">Link 5</a></li>
			</ul>
		</div>

	</div>

	<div id="footer-wrapper">
		<footer id="footer"><center><?php echo require ("temps/footer.php"); ?></center></footer>
	</div>

</body>
</html>
