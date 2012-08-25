<?php include("../includes/functions.php"); ?>
<?php include("../includes/header.php"); ?>

<body>
	<header>
		<h1>Problem #2</h1>
	</header>
	<div role="main">
		<?php echo getProblemDescription(2); 
		
			/* 
			Problem: By considering the terms in the Fibonacci sequence whose values do not exceed four million, 
			find the sum of the even-valued terms.
			*/
			
			// Create an array with the starting numbers of the Fibonacci sequence
			$fibArray = array(1, 1);
			
			// Run the while as long as the one-before-last value is under 4 million
			while( $fibArray[count($fibArray) - 1] < 4000000 ) {
			
				// Add the sum of the last two array values to the end of the array
				$fibArray[] = $fibArray[ count( $fibArray ) - 1 ] + $fibArray[ count( $fibArray ) - 2 ];
			}
			
			// The problem requires we only find the sum of the even-valued terms, so we need to go over the array and add the even ones
			foreach ($fibArray as $n) {
				if ( $n % 2 === 0) {
					$evensArray[] = $n;
				}
			}
			
			// Finally, echo the sum of the items in the evensArray with array_sum()
			echo "The solution is: " . array_sum($evensArray);
		
		?>
		<p>
			<pre>
				<code>
	// Create an array with the starting numbers of the Fibonacci sequence
	$fibArray = array(1, 1);
	
	// Run the while as long as the one-before-last value is under 4 million
	while( $fibArray[count($fibArray) - 1] < 4000000 ) {
	
		// Add the sum of the last two array values to the end of the array
		$fibArray[] = $fibArray[ count( $fibArray ) - 1 ] + $fibArray[ count( $fibArray ) - 2 ];
	}
	
	// The problem requires we only find the sum of the even-valued terms, so we need to go over the array and add the even ones
	foreach ($fibArray as $n) {
		if ( $n % 2 === 0) {
			$evensArray[] = $n;
		}
	}
	
	// Finally, echo the sum of the items in the evensArray with array_sum()
	echo "The solution is: " . array_sum($evensArray);
				</code>
			</pre>
		</p>
		
	</div>
	<footer>
		<?php include("../includes/footer.php"); ?>
	</footer>
</body>
</html>