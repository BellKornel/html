<?php
$link = mysqli_connect('0.0.0.0', 'anton', '', 'DB')
	or die('Error: ' . mysqli_connect_error());
$family = mysqli_real_escape_string($link, $_POST['family']);
$name = mysqli_real_escape_string($link, $_POST['name']);
$Fname = mysqli_real_escape_string($link, $_POST['Fname']);
$Passport = mysqli_real_escape_string($link, $_POST['Passport']);
$id = 0;
$SQLresult = mysqli_query($link, 'select id from human');
while($result = mysqli_fetch_array($SQLresult, MYSQLI_NUM))
{
	if($result[0] > $id) {$id = $result[0];}
}
$id = $id+1;
$SQLquery = 'insert into human values("' . $id . '", "' . $family . '", "' . $name . '", "' . $Fname . '", "' . $Passport . '")';
if (mysqli_query($link, $SQLquery))
{
	echo "<BR>New record created succesfully!";
}
else
{
	echo "<BR>Error: " . $sql . "<BR>" . mysqli_error($link);
}
mysqli_close($link);
printf('<a href="human.php"><P>Go back</P></a>');
?>
