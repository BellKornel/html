<html>
 <head>
  <title>Matan</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
	<center>
		<P style="color:black; font-size:18">
			БЛОК 2
		</P>
		Apartment: 
			<select name="apartment">
				<?php 
					$link = mysqli_connect('0.0.0.0', 'anton', '', 'DB') or die('Error: ' . mysqli_connect_error());
					$SQLquery = 'SELECT * FROM matan';
					$SQLresult = mysqli_query($link,$SQLquery);
					while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
					{
						printf('<option value=%d>%s</option>',$result[0],$result[1]);
					}
					mysqli_free_result($SQLresult);
					mysqli_close($link);
				?>
			</select>
		<a href="../index.html"> <P>GO BACK</P></a>
	</center>
 </body>
</html>
