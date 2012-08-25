<?php
	// Using the Simple HTML DOM Parser to help me grab the problem descriptions
	// http://simplehtmldom.sourceforge.net/
	include_once('simple_html_dom.php');

	// Function to grab the problem's description off the project Euler site and show it
	function getProblemDescription($problem) {
	
		// URL for the problem on Project Euler
		$url = "http://www.projecteuler.net/problem=" . $problem;
		
		// Create a DOM object and load the URL
		$html = new simple_html_dom();
		$html->load_file($url);
		
		// Grab the problem description from the requested page(div.problem_content)
		$problemDescription = $html->find('div.problem_content');
		
		// I know for a fact that there's only one of these on each page, so always returning the first element in the array
		return $problemDescription[0];
	}
	
	// Build the index nav based on the files in the problems directory
	function createProblemNav() {
		
		// Open the problems directory
		$fileDirectory = opendir("./problems");
		
		// Put all the filenames into an array(This will include . and ..)
		while( $fileName = readdir($fileDirectory) ) {
			$dirArray[] = $fileName;
		}

		// Close the directory, don't need it anymore
		closedir($fileDirectory);
		
		// Count the files
		$fileCount = count($dirArray);
		
		// Go through the array and put the files in a neat list
		for($i = 0; $i < $fileCount; $i++) {
			if( substr( $dirArray[$i], 0, 1 ) != ".") {
				echo '<li><a href="/problems/' . $dirArray[$i] . '">' . $dirArray[$i] . '</a></li>';
			}
		}
	}
	
	
?>