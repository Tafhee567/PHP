<?php

?>
<!DOCTYPE  html>
<html>
    <head>
        <title>Index</title>
    </head>
<body style="font-family: Arial, sans-serif; text-align: center; margin-top: 50px;">
    <h1 style="color: #4CAF50;">Login</h1>
    <form action="Controllers/logController.php">
        <div style="margin-bottom: 20px;">Login as:</div>
        <button name="admin" style="background-color: #008CBA; color: white; padding: 10px 20px; border: none; cursor: pointer; margin: 5px;">
            Admin
        </button>
        <button name="customer" style="background-color: #f44336; color: white; padding: 10px 20px; border: none; cursor: pointer; margin: 5px;">
            Customer
        </button>
    </form>
</body>
</html>