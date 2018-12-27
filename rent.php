
<html>
	<head>
	<title>Rents</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	 <body>
		<?php
		$link = mysqli_connect('0.0.0.0', 'anton', '','DB')
	    		or die('Error: ' . mysqli_connect_error());
		printf('<P>Rents</P> %s',"\n");
		$SQLquery = 'select human.name, id_apartment, ppm, prepayment, rent_begin, rent_end from rent inner join human on id_human = human.id';
		$SQLresult = mysqli_query($link,$SQLquery);
		printf('<table cellspacing=\' 0 \' border=\' 1 \'> %s',"\n");
		printf('<TR> %s',"\n");
		printf('	<TH>Owner human</TH> %s',"\n");
		printf('	<TH>Apartment</TH> %s',"\n");
		printf('	<TH>Payment per months</TH> %s',"\n");
		printf('	<TH>Prepyament</TH> %s',"\n");
		printf('	<TH>Rent begin</TH> %s',"\n");
		printf('	<TH>Rent ends</TH> %s', "\n");
		printf('</TR> %s',"\n");
		while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
		{
			printf('<TR>');
			printf('<TD> %s </TD> <TD> %s </TD> <TD> %s </TD> <TD> %s </TD> <TD> %s </TD> <TD> %s </TD>',$result[0],$result[1],$result[2],$result[3],$result[4], $result[5]);
			printf('</TR> %s',"\n");
		}
		printf('</table> %s',"\n");
		mysqli_free_result($SQLresult);
		mysqli_close($link);
	?>
		<a href="index.html"> <P>GO BACK</P> </a>
	</body>
</html>
