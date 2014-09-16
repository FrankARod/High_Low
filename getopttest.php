<?php

$longopts = array(
	"min:",
	"max:"
	);

$options = getopt("", $longopts);
var_dump($options);
