#!/usr/bin/env php
<?php
	echo("Enter a number: ");
	if ($argv[1])
	{
		if ($argv[1] % 2 == 0) {
			echo("The number $argv[1] is even\n");
		}
		else
		{
			echo("The number $argv[1] is odd\n");
		}
	}
	else
	{
		echo("The number 0 is even\n");
	}
?>