<?php

require_once 'dbconnect.php';

function foo ()
{
	dbconnect();
}

function swap (&$one, &$two)
{
	$temp = $one;
	$one = $two;
	$two = $temp;
}



