<html>
	<head>
		<title>Human</title>
		<meta http-equiv="Content-Type", content="text/html; charset=utf-8">
	</head>
	<body>
	<?php
		printf('<P style="font-size:18">Humans</P> %s', "\n");
		$link = mysqli_connect('0.0.0.0', 'anton', '', 'DB')
			or die('Error: ' . mysqli_connect_error());
		$SQLquery = 'select * from human';
		$SQLresult = mysqli_query($link, $SQLquery);
		printf('<table cellspacing=\' 0 \'border=\' 1 \'>', "\n");
		printf('<TR> %s', "\n");
		printf('	<TH>Family</TH>', "\n");
		printf('	<TH>Name</TH>', "\n");
		printf('	<TH>Fathers name</TH>', "\n");
		printf('	<TH>Passport</TH>' ,"\n");
		printf('	</TH %s>', "\n");
		while ($result = mysqli_fetch_array($SQLresult, MYSQLI_NUM))
		{
			printf('<TR>');
			printf('<TD> %s </TD> <TD> %s </TD> <TD> %s </TD> <TD> %s </TD>', $result[1], $result[2], $result[3], $result[4]);
			printf('</TR> %s', "\n");
		}
		printf('</table> %s', "\n");
		mysqli_free_result($SQLresult);
		mysqli_close($link);
	?>
	<a href="index.html"><P>GO BACK</P></a>
	<TD>
		<P>Add new human:</P>
		<form action="human_action.php" method="post">
			Family: <input type="text" name="family">
			<BR><BR>
			Name: <input type="text" name="name">
			<BR><BR>
			Fathers name: <input type="text" name="Fname">
			<BR><BR>
			Passport: <input type="text" name="Passport">
			<BR><BR>
			<input type="submit" value="Add human">
		</form>
	</TD>
	</body>
</html>
