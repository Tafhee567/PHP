<?php
    if(isset($_GET['Back']))
        {
            header('location:index.php');
        }

?>

<! DOCTYPE html>
	<html>
	<head>
		<title> Home page </title>	
	</head>	
	<body>
		<form method = "get">
	    <fieldset>
	    <legend>Home</legend>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Pass</th>
            </tr>
            <tr>
                <td>16</td>
                <td colspan="2">Ab</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Cd</td>
                <td rowspan="2">Cdb</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Dd</td>
            </tr>
        </table>
        <button name="Back">Back</button>
        
    	</fieldset>
    	</form>

	</body>	
	</html>	