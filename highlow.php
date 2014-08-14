<?php

$answer = mt_rand(1, 100);

// echo $answer;

$num_of_guesses = 0;

fwrite(STDOUT, 'Guess a number between 1 and 100... ');

// var_dump($guess);
$correct = false;



//check answer

do {
	//take user input
	$guess = trim(fgets(STDIN));
	$num_of_guesses++;
if($guess == $answer) {
	// usleep(3000000);
	fwrite(STDOUT, "GOOD GUESS\nIt took you $num_of_guesses tries\n ");
	$correct = true;
	exit(0);
} elseif ($guess > $answer && $guess <= 100) {
	// usleep(3000000);
	fwrite(STDOUT, "LOWER\nGUESS AGAIN\n");
} elseif ($guess < $answer && $guess > 0) {
	// usleep(3000000);
	fwrite(STDOUT, "HIGHER\nGUESS AGAIN\n");
} else {
	fwrite(STDOUT, "Only enter numbers between 1 and 100\nGUESS AGAIN\n");
}
} while(!$correct);

//if guess is correct output correct and end the game

//if guess is incorrect tell user if answer is higher or lower than guess and have another input