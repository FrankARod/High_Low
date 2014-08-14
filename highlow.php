<?php

$answer = rand(1, 100);

// echo $answer;

$guess = 0;



fwrite(STDOUT, 'Guess a number between 1 and 100... ');

// var_dump($guess);
$correct = false;

//check answer

while (!$correct){
	//take user input
	$guess = trim(fgets(STDIN));

if($guess == $answer) {
	usleep(3000000);
	fwrite(STDOUT, "GOOD GUESS\n");
	exit(0);
	$correct = true;
} elseif ($guess > $answer) {
	usleep(3000000);
	fwrite(STDOUT, "LOWER\n");
} else {
	usleep(3000000);
	fwrite(STDOUT, "HIGHER\n");
}
}

//if guess is correct output correct and end the game

//if guess is incorrect tell user if answer is higher or lower than guess and have another input