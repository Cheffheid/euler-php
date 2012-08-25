<?php include("../includes/functions.php"); ?>
<?php include("../includes/header.php"); ?>

<body>
	<header>
		<h1>Problem #4</h1>
	</header>
	<div role="main">
		<?php echo getProblemDescription(4);
		
		// Problem: Find the largest palindrome made from the product of two 3-digit numbers.
		
		// Brute-forcing this one a little, because I'm not sure how else to do it. It's just really slooooooowwwwwww...
		
		// Define var for highest palindrome
		$max = 0;
		
		// Start at 100, count up to 999
		for( $i = 100; $i < 1000; $i++ ) {
		
			// Same, start at 100 and count up to 999
			for( $j = 100; $j < 1000; $j++ ) {
				
				// temporarily store product of $i and $j
				$temp = $i * $j;
				
				// Check if $temp is the same forwards as backwards
				if ( strval($temp) == strrev($temp) ) {
					
					// Check if it's larger than $max and store it if it is
					// Alternatively, you could store $temp into an array and use max() later on to get the highest number in the array
					if ( $temp > $max ) {
						$max = $temp;
					}					
				}
			}
		}

		echo "Solution is: " , $max;
		
		?>
		
		<p>
			<pre>
				<code>
	// Brute-forcing this one a little, because I'm not sure how else to do it. It's _really_ slow in PHP. While it should work, I cannot verify as the script fails to complete...
	
	// Define var for highest palindrome
	$max = 0;
	
	// Start at 100, count up to 999
	for( $i = 100; $i < 1000; $i++ ) {
	
		// Same, start at 100 and count up to 999
		for( $j = 100; $j < 1000; $j++ ) {
			
			// temporarily store product of $i and $j
			$temp = $i * $j;
			
			// Check if $temp is the same forwards as backwards
			if ( strval($temp) == strrev($temp) ) {
				
				// Check if it's larger than $max and store it if it is
				// Alternatively, you could store $temp into an array and use max() later on to get the highest number in the array
				if ( $temp > $max ) {
					$max = $temp;
				}					
			}
		}
	}
	
	echo "Solution is: " , $max;
				</code>
			</pre>
		</p>

		
	</div>
	<footer>
		<?php include("../includes/footer.php"); ?>
	</footer>
</body>
</html>