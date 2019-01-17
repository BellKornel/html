<?php
	$link = mysqli_connect('0.0.0.0', 'anton', '', 'DB') or die('Error: ' . mysqli_connect_error());
	$one = mysqli_real_escape_string($link, $_POST['matan']);
	$SQLquery = 'select id, foto from matan where id == '.$one;
	$SQLresult = mysqli_query($link,$SQLquery);
	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		echo $result;
		echo '<a href="'.$result[1].'" target="_blank"><img src="'.$result[1].'"></a>';
	}
?>
