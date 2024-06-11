
<! DOCTYPE html>
	<html>
	<head>
		<title> Login </title>	
	</head>	
	<body>
		<form method = "get">
	    <fieldset>
	    <legend>Login</legend>
	    ID:<input type="text" name="id" placeholder="Enter your id"><br><br>
	    pass: <input type="password" name="pass" placeholder="Enter your pass"><br><br>

        <?php
        $Id=1;
        $Pass=1;

        
        if(isset($_GET['Login']))
        {
            if(($_GET['id']==$Id && $_GET['pass']==$Pass))
            {
                header('location:Table.php');
            }
            elseif (empty($_GET['id']) || empty($_GET['pass']))
            {
                echo "Please fill up the id and password properly";
            }
            else
            {
                echo "Something is going to wrong";
            }
        }
        
        if(isset($_GET['Register']))
        {
            header('location:index.php');
        }
    ?><br>


        <button name = "Login"> Login </button>
        <button name = "Register"> Register </button>
    	</fieldset>
    	</form>

	</body>	
	</html>	


