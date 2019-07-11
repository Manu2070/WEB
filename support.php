<!DOCTYPE html>
<!-- Template by html.am -->
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

				<h1>Heading</h1>
				<p><script>generateText(50)</script></p>

			</article>
		</main>

		<nav id="left" class="column">
			<h3>Left heading</h3>
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

		</nav>

		<div id="right" class="column">
			<h3>Right heading</h3>
			<p><script>generateText(1)</script></p>
		</div>

	</div>

	<div id="footer-wrapper">
		<footer id="footer"><center><?php echo require ("temps/footer.php"); ?></center></footer>
	</div>

</body>
</html>
