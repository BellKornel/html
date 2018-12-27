<html>
 <head>
  <title>WEB-site of the Alekseev Nikta's and Savvin Anton's website rieltors</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
	<?php
	printf('<P>Fotos</P> %s',"\n");

	$link = mysqli_connect('0.0.0.0', 'anton', '','DB')
	    or die('Error: ' . mysqli_connect_error());

	$SQLquery = 'SELECT * FROM foto';
	$SQLresult = mysqli_query($link,$SQLquery);

	printf('<table cellspacing=\' 0 \' border=\' 1 \'> %s',"\n");
	printf('<TR> %s',"\n");
	printf('	<TH>Foto</TH> %s',"\n");
	printf('	<TH>Apartment</TH> %s',"\n");
	printf('</TR> %s',"\n");


	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<TR>');
		printf('<TD> %s </TD> <TD> %s </TD>',$result[1],$result[2]);
		printf('</TR> %s',"\n");
	}
	printf('</table> %s',"\n");
	mysqli_free_result($SQLresult);
	mysqli_close($link);

	?>
	<a href="index.html"> <P>GO BACK</P></a>
	</TD>
 </body>
</html>
