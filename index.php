<?php include("/includes/functions.php"); ?>
<?php include("/includes/header.php"); ?>

<body>
	<header>
		<h1>A list of project Euler solutions</h1>
	</header>
	<div role="main">
		<ol>
			<?php print_r(createProblemNav()); ?>
		</ol>
	</div>
	<footer>
		<?php include("/includes/footer.php"); ?>
	</footer>
</body>
</html>