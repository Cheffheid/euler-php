<?php include("../includes/functions.php"); ?>
<?php include("../includes/header.php"); ?>

<body>
	<header>
		<h1>Problem #5</h1>
	</header>
	<div role="main">
		<?php echo getProblemDescription(5);

		// Problem: What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
		
		// I could cheese this by simply run a for loop and checking modulos 11 through 20 untill we've found a number that gets through it all
		// However, a faster way is by using maths, the Least Common Multiple(LCM) and Greatest Common Divisor(GCD).

		function gcd($a, $b) { 
			// Formula for GCD
			return ( $b == 0 ) ? ($a):( gcd($b, $a % $b) ); 
		}
		
		function lcm($a, $b) { 
			// Formula for LCM
			return ( $a * $b / gcd($a,$b) ); 
		}

		/* Putting it all together
		   This function will continually call itself untill there's only one item left in the array.
		   It takes the top pair and gets the LCM from them, using the lcm function above, and puts it at the end of the array
		   Using array_shift(), it ensures no numbers are processed more than once
		*/		
		function lcm_nums($ar) {
			if (count($ar) > 1) {
				$ar[] = lcm( array_shift($ar) , array_shift($ar) );
				return lcm_nums( $ar );
			} else {
				return $ar[0];
			}
		}

		$numbers = array(11,12,13,14,15,16,17,18,19,20);
		echo "The solution is: " . lcm_nums($numbers);
		
		?>
		
		<p>
			<pre>
				<code>
	// I could cheese this by simply run a for loop and checking modulos 11 through 20 untill we've found a number that gets through it all
	// However, a faster way is by using maths, the Least Common Multiple(LCM) and Greatest Common Divisor(GCD).

	function gcd($a, $b) { 
		// Formula for GCD
		return ( $b == 0 ) ? ($a):( gcd($b, $a % $b) ); 
	}

	function lcm($a, $b) { 
		// Formula for LCM
		return ( $a * $b / gcd($a,$b) ); 
	}

	/* Putting it all together
	   This function will continually call itself untill there's only one item left in the array.
	   It takes the top pair and gets the LCM from them, using the lcm function above, and puts it at the end of the array
	   Using array_shift(), it ensures no numbers are processed more than once
	*/		
	function lcm_nums($ar) {
		if (count($ar) > 1) {
			$ar[] = lcm( array_shift($ar) , array_shift($ar) );
			return lcm_nums( $ar );
		} else {
			return $ar[0];
		}
	}

	$numbers = array(11,12,13,14,15,16,17,18,19,20);
	echo lcm_nums($numbers);
				</code>
			</pre>
		</p>

		
	</div>
	<footer>
		<?php include("../includes/footer.php"); ?>
	</footer>
</body>
</html>