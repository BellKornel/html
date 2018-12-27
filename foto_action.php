<?php
$link = mysqli_connect('0.0.0.0', 'anton', '', 'DB')
	or die('Error: ' . mysqli_connect_error());

$path="/var/www/html/file/";
if (!@copy($_FILES['photo']['tmp_name'], $path . $_FILES['photo']['name']))
echo "<P>Error on file loading]</P>";
else
echo "<P>Photo uploaded succesfully</P>";

$one = mysqli_real_escape_string($link, $_FILES['photo']['name']);
$two = mysqli_real_escape_string($link, $_POST['apartment']);
$id = 0;
$SQLresult = mysqli_query($link, 'select id from foto');
while($result = mysqli_fetch_array($SQLresult, MYSQLI_NUM))
{
	if($result[0] > $id) {$id = $result[0];}
}
$id = $id+1;
$SQLquery = 'insert into foto values(' . $id . ', "' . $one . '", ' . $two . ')';
if (mysqli_query($link, $SQLquery))
{
	echo "<BR>New record created succesfully!";
}
else
{
	echo "<BR>Error: " . $sql . "<BR>" . mysqli_error($link);
}
mysqli_close($link);
printf('<a href="foto.php"><P>Go back</P></a>');
?>
