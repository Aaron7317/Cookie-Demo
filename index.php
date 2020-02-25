<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>COOKIES!</title>
    <link href="style.css" rel="stylesheet" type="text/css" href="/css/stylesheet.css?v=1" />
  </head>
  <body>

  	<?php
	
	if (isset($_POST['text'])) {
	$text = $_POST['text'];
	} else {
		$text = null;
	}

	if ($text != null) {
		setcookie("input-text", $text, time() + 86400, "/");
	}
	
	
	?>



	<div class="main-grid">


		<div class="title">
			<h1>HTTP Cookies</h1>
		</div>

		<div class="body">
			<h2>What are cookies?</h2>
			<p>Content</p>
		</div>

		<div class="demo-1">
			<p>An Example of cookies being saved with JavaScript: </p>
			<button id="demo-1-button">Click</button>
		</div>

		<div class="demo-2">
			<p>An example of cookies being saved with PHP: </p>
			<form action="index.php" method="post">
				<input type="text" name="text" value="<?php if(isset($_COOKIE['text'])){echo $_COOKIE['text'];} else {echo "";}?>">
				<input type="submit" name="demo2">
			</form>
		</div>

		<div class="demo-3">
			<button type="button" onclick="showJSCookie()">Show Javascript Cookie</button>
			<button type="button" onclick="deleteJSCookie()">Delete Javascript Cookie</button>
			<p id="demo-1-reveal"></p>
		</div>

		<div class="demo-4">
			<form method="post">
				<input type="submit" name="reveal-2" value="Show PHP Cookie"><br><br>
				<?php
				if (isset($_POST['reveal-2'])) {
					echo "Text: " . $_COOKIE['input-text'];
				}
				?>
			</form>
		</div>

		<div class="tutorial-1">
			<h2>Here is a quick tutorial on how to view your currently saved cookies!</h2>
			<ol>
				<li>First go to any website that you suspect uses cookies (most do)</li>
				<img src="images/tutorial-1-first.png" />
				<li>Then press "CTRL + SHIFT + I" to inspect the page elements</li>
				<img src="images/tutorial-1-second.png" />
				<li>Next, head over to the little section that says console</li>
				<img src="images/tutorial-1-third.png" />
				<li>Here, you can type "document.cookie" to see the cookie stored for this site (It is often encrypted)</li>
				<img src="images/tutorial-1-forth.png" />
			</ol>
		</div>

		
	</div>

	
    <script src="script.js"></script>
  </body>
</html>