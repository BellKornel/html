<?php
$link = mysqli_connect('0.0.0.0', 'anton', '', 'DB')
	or die('Error: ' . mysqli_connect_error());
$one = mysqli_real_escape_string($link, $_POST['address']);
$two = mysqli_real_escape_string($link, $_POST['area']);
$three = mysqli_real_escape_string($link, $_POST['rooms']);
$four = mysqli_real_escape_string($link, $_POST['floor']);
$five = mysqli_real_escape_string($link, $_POST['description']);
$six = mysqli_real_escape_string($link, $_POST['commision']);
$seven = mysqli_real_escape_string($link, $_POST['owner']);
$id = 0;
$SQLresult = mysqli_query($link, 'select id from apartment');
while($result = mysqli_fetch_array($SQLresult, MYSQLI_NUM))
{
	if($result[0] > $id) {$id = $result[0];}
}
$id = $id+1;
$SQLquery = 'insert into apartment values(' . $id . ', "' . $one . '", ' . $two . ', ' . $three . ', ' . $four . ', "' . $five . '", ' . $six . ', ' . $seven . ')';
if (mysqli_query($link, $SQLquery))
{
	echo "<BR>New record created succesfully!";
}
else
{
	echo "<BR>Error: " . $sql . "<BR>" . mysqli_error($link);
}
mysqli_close($link);
printf('<a href="apartment.php"><P>Go back</P></a>');
?>
