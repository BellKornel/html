<html>
	<head>
	<title>WEB-site of the Alekseev Nikta's and Savvin Anton's website rieltors</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	 <body>
		<?php
		$link = mysqli_connect('0.0.0.0', 'anton', '','DB')
	    		or die('Error: ' . mysqli_connect_error());
		printf('<P>Apartments</P> %s',"\n");
		$SQLquery = 'select apartment.id, address, area, rooms, floor, description, commision, human.name from apartment inner join human on apartment.id_human = human.id';
		$SQLresult = mysqli_query($link,$SQLquery);
		printf('<table cellspacing=\' 0 \' border=\' 1 \'> %s',"\n");
		printf('<TR> %s',"\n");
		printf('	<TH>Address</TH> %s',"\n");
		printf('	<TH>Area</TH> %s',"\n");
		printf('	<TH>Rooms</TH> %s',"\n");
		printf('	<TH>Floor</TH> %s',"\n");
		printf('	<TH>Description</TH> %s',"\n");
		printf('	<TH>Commision</TH> %s',"\n");
		printf('	<TH>Owner</TH> %s',"\n");
		printf('</TR> %s',"\n");
		while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
		{
			printf('<TR>');
			printf('<TD> %s </TD> <TD> %s </TD><TD> %s </TD> <TD> %s </TD><TD> %s </TD> <TD> %s </TD><TD> %s </TD>',$result[1],$result[2],$result[3],$result[4],$result[5],$result[6],$result[7]);
			printf('</TR> %s',"\n");
		}
		printf('</table> %s',"\n");
		mysqli_free_result($SQLresult);
		mysqli_close($link);
	?>
		<a href="index.html"> <P>GO BACK</P> </a>
		  <TD>
			  <P>Add new apartment:</P>
			  <form action="apartment_action.php" method="post">
          		  	Address: <input type="text" name="address">
          		  	<br>
          		  	Area: <input type="text" name="area">
          		  	<br>
          		  	Rooms: <input type="text" name="rooms">
          		  	<br>
          		  	Floor: <input type="text" name="floor">
          		  	<br>
          		  	Description: <input type="text" name="description">
          		  	<br>
          		  	Commision: <input type="text" name="commsision">
          		  	<br>
				Owner: 
					<select name="owner">
					<?php 
					$link = mysqli_connect('0.0.0.0', 'anton', '', 'DB')					
	    					or die('Error: ' . mysqli_connect_error());
						
					$SQLquery = 'SELECT id, CONCAT(name, \' \', family) from human';
					$SQLresult = mysqli_query($link,$SQLquery);
					while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
					{
						printf('<option value=%d>%s</option>',$result[0],$result[1]);
					}
					mysqli_free_result($SQLresult);
					mysqli_close($link);
					?>
					</select>
				  <br>
            		  	<input type="submit" value="Add apartment">
      			  </form>
		</TD>
	</body>
</html>
