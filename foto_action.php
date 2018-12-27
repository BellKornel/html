<?php
$link = mysqli_connect('0.0.0.0', 'anton', '', 'DB')
	or die('Error: ' . mysqli_connect_error());

$file = $_FILES['photo'];
echo $file . "<br>";
$target_dir = "file/";
$target_file = $target_dir . basename($file["name"]);

 if ( !file_exists($target_dir) ) {
     mkdir ($target_dir, 0744);
echo "dir doesn't exist, trying to create dir!";
 }

if (move_uploaded_file($file['tmp_name'], $target_dir))
{
echo "<P>Photo uploaded succesfully</P>";
}
else
{
echo "<P>Error on file loading: " . $file["error"] . "</P>";
}

$id = 0;
$SQLresult = mysqli_query($link, 'select id from foto');
while($result = mysqli_fetch_array($SQLresult, MYSQLI_NUM))
{
	if($result[0] > $id) {$id = $result[0];}
}
$id = $id+1;
$one = mysqli_real_escape_string($link, $file['name']);
$two = mysqli_real_escape_string($link, $_POST['apartment']);
$SQLquery = 'insert into foto values(' . $id . ', "' . $one . '", ' . $two . ')';
if (move_uploaded_file($file['tmp_name'], $target_dir))
{
if (mysqli_query($link, $SQLquery))
{
	echo "<BR>New record created succesfully!";
}
else
{
	echo "<BR>Error: " . $sql . "<BR>" . mysqli_error($link);
}
}
mysqli_close($link);
printf('<a href="foto.php"><P>Go back</P></a>');
?>
