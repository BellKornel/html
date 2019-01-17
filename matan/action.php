<html>
    <head>
        <title>Matan</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <center>
            <?php
                $link = mysqli_connect('0.0.0.0', 'anton', '', 'DB') or die('Error: ' . mysqli_connect_error());
                $one = mysqli_real_escape_string($link, $_POST['matan']);
                $SQLquery = 'select id, foto from matan where id == '.$one;
                $SQLresult = mysqli_query($link,$SQLquery);
                while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
		{
			printf('<TD><a href="%s" target="_blank"><img src="%s"></a></TD>', $result[1], $result[1]);
		}
            ?>
        </center>
    </body>
</html>
