<?php include("../includes/functions.php"); ?>
<?php include("../includes/header.php"); ?>

<body>
	<header>
		<h1>Problem #1</h1>
	</header>
	<div role="main">
		<?php echo getProblemDescription(1); 
		
			// Easy
			$i = 1;
			$sum = 0;
			
			while( $i < 1000 ) {
			
				if( $i % 3 === 0 || $i % 5 === 0 ) {
					$sum += $i;
				} // End if
				
				$i++;
				
			} // End while
			
			echo "<p>The solution is: " . $sum . "</p>";
		
		?>
		<p>
			<pre>
				<code>
					$i = 1;
					$sum = 0;
					
					while( $i < 1000 ) {
						if( $i % 3 === 0 || $i % 5 === 0 ) {
							$sum += $i;
						}
						$i++;
					}
					
					echo "The solution is: " . $sum;
				</code>
			</pre>
		</p>
		<p>Alternatively, use a for loop. Result is the same either way:</p>
		<p>
			<pre>
				<code>
					$sum = 0;
					
					for( $i = 1; $i < 1000; $i++ ) {
						if( $i % 3 === 0 || $i % 5 === 0 ) {
							$sum += $i;
						}
					}
					
					echo "The solution is: " . $sum;
				</code>
			</pre>
		</p>
	</div>
	<footer>
		<?php include("../includes/footer.php"); ?>
	</footer>
</body>
</html>