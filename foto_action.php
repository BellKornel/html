<?php
$link = mysqli_connect('0.0.0.0', 'anton', '', 'DB')
	or die('Error: ' . mysqli_connect_error());

$file = $_FILES['photo'];
$filename = date('Y_m_d_H_i_s');
$target_dir = "file/";
$target_file = $target_dir . $filename;

//if ( !file_exists($target_dir) ) {
//     mkdir ($target_dir, 0744);
//echo "dir doesn't exist, trying to create dir!";
//}

//if (move_uploaded_file($filename, $target_file))
//{
//echo "<P>Photo uploaded succesfully</P>";
//}
//else
//{
//echo "tmp_name: " . $file["tmp_name"] . "<br>name: " . $filename . "<br>folder with file name: " . $target_file . "<br>";
//echo "<P>Error on file loading: " . $file["error"] . "</P>";
/}

$id = 0;
$SQLresult = mysqli_query($link, 'select id from foto');
while($result = mysqli_fetch_array($SQLresult, MYSQLI_NUM))
{
	if($result[0] > $id) {$id = $result[0];}
}

$id = $id+1;
$two = mysqli_real_escape_string($link, $_POST['apartment']);
$SQLquery = 'insert into foto values(' . $id . ', "' . $filename . '", ' . $two . ')';

if (move_uploaded_file($file['tmp_name'], $target_file))
{
	if (mysqli_query($link, $SQLquery))
	{
		echo "<BR>New record created succesfully!";
	}
	else
	{
		echo "<BR>Error on data: " . $sql . "<BR>" . mysqli_error($link);
	}
}
else
{
	echo "<P>Error on file loading: " . $file["error"] . "</P>";
}
mysqli_close($link);
printf('<a href="foto.php"><P>Go back</P></a>');
?>
