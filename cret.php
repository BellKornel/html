<html>
	<head>
		<title>WEB-site of the Alekseev Nikta's and Savvin Anton's website rieltors</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>
	<center>
		<?php
			printf('<P style="font-size:18">Our site located on aws.amazon.com, and we use Ubuntu Server 18.04 LTS (HVM), SSD Volume Type AMI.</P> %s',"\n");
			$link = mysqli_connect('0.0.0.0', 'anton', '', 'DB')
				or die('Error: ' . mysqli_connect_error());
			printf('<P style="font-size:18">Creators:</P> %s',"\n");
			$SQLquery = 'SELECT * FROM cret';
			$SQLresult = mysqli_query($link,$SQLquery);
			printf('<table cellspacing=\' 0 \' border=\' 1 \'> %s',"\n");
			printf('<TR> %s',"\n");
			printf('	<TH>Name</TH> %s',"\n");
			printf('	<TH>Family</TH> %s',"\n");
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
		<a href="index.html"> <P>GO BACK</P> </a>
	</center>
	</body>
</html>
