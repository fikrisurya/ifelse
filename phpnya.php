<?php

$nama= array($_POST['n1'],$_POST['n2'],$_POST['n3'],$_POST['n4']);

$jenis = array($_POST['j1'],$_POST['j2'],$_POST['j3'],$_POST['j4']);


	for($i=0;$i<4;$i++)
	{
	if($jenis[$i]=="l")
		{echo "<font color='blue'>$nama[$i]</font>";}
		else
			{echo "<font color='red'>$nama[$i] /font>";}

		echo "<br>";
	}

?>