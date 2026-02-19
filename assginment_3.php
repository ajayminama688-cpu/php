<?php

	$b = $_POST['num1'];
	$c = $_POST['num2'];
	
	if(isset($_POST['add']))
	{
		echo $b + $c;
	}
	if(isset($_POST['sub']))
	{
		echo $b - $c;
	}
	if(isset($_POST['mult']))
	{
		echo $b * $c;
	}
	if(isset($_POST['div']))
	{
		if($c != 0)
		{
			echo $b / $c;
		}
	}
?>