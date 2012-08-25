<?php include("../includes/functions.php"); ?>
<?php include("../includes/header.php"); ?>

<body>
	<header>
		<h1>Problem #3</h1>
	</header>
	<div role="main">
		<?php echo getProblemDescription(3); ?>
		<!-- Problem: What is the largest prime factor of the number 600851475143 ? -->
		<!-- Switching the code around for this one, due to the use of "exit" -->
		<p>
			<pre>
				<code>
		function highestprime($number){
			
			// Run through the numbers, starting with 2 as the lowest prime
			for($i = 2; $i < $number; $i++)
			{
				// Using bcmod, instead of regular modulus, because of the ridiculously huge number breaking things otherwise
				if( bcmod("$number",  "$i") == 0 ){
					// Run the function again, but this time divided by $i to get the next prime factor
					highestprime( $number/$i );
					exit;
				}
			}
			
			echo $number;
		}

		highestprime(600851475143);
				</code>
			</pre>
		</p>
		
		<?php
		
		function highestprime($number){
			
			// Run through the numbers, starting with 2 as the lowest prime
			for($i = 2; $i < $number; $i++)
			{
				// Using bcmod, instead of regular modulus, because of the ridiculously huge number breaking things otherwise
				if( bcmod("$number",  "$i") == 0 ){
					// Run the function again, but this time divided by $i to get the next smallest prime
					highestprime( $number/$i );
					exit;
				}
			}
			// Echo the final result
			echo "The solution is: " . $number;
		}

		highestprime(600851475143);
		
		?>

		
	</div>
	<footer>
		<?php include("../includes/footer.php"); ?>
	</footer>
</body>
</html>