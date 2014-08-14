<?php


//check if arguments are present
if ($argc == 3) {
	
	if ($argv[1] < $argv[2]) { // prevents mt_rand errors if users set maximums lower than mins
		$max = $argv[2];
		$min = $argv[1];
	} else {
		fwrite(STDOUT, "Minimum is higher than maximum. Please run again with correct arguments. \n");
		exit(0);
	}

} else {
	$max = 100;
	$min = 1; 	
}

$answer = mt_rand($min, $max);

$num_of_guesses = 0;

fwrite(STDOUT, "Guess a number between $min and $max... ");

$correct = false;

do {
	//take user input
	$guess = trim(fgets(STDIN));
	
	$num_of_guesses++;

	if($guess == $answer) {

		fwrite(STDOUT, "GOOD GUESS\nIt took you $num_of_guesses tries\n ");
		$correct = true;
		fwrite(STDOUT, "Would you like to play again?\ny / n\n");
		$response = trim(fgets(STDIN));
		
		if ($response == 'y') {
			$correct = false;
			$answer = mt_rand($min, $max);
			$num_of_guesses = 0;
			fwrite(STDOUT, "Guess a number between $min and $max... \n");
		} else {
			fwrite(STDOUT, "Goodbye...\n");
		}

}	elseif ($guess > $answer && $guess <= $max) {
		fwrite(STDOUT, "LOWER\nGUESS AGAIN\n");
} 	elseif ($guess < $answer && $guess >= $min) {
		fwrite(STDOUT, "HIGHER\nGUESS AGAIN\n");
} 	else {
		fwrite(STDOUT, "Only enter numbers between $min and $max\nGUESS AGAIN\n");
} 

} while(!$correct);