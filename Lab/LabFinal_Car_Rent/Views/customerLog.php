<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }
    form {
      margin-top: 100px;
    }
    input[type="text"], input[type="password"] {
      width: 300px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    button {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 4px;
    }
    button:hover {
      background-color: #45a049;
    }
    h1 {
      color: #333;
    }
  </style>
</head>
<body>
  <form action="../Controllers/logController.php">
    <center>
      <h1>Customer Login</h1><br><br><br>
      <font size="+2">ID: <input type="text" name="id" style="font-size:14pt;"><br><br></font>
      <font size="+2">Name: <input type="text" name="name" style="font-size:14pt;"><br><br></font>
      <font size="+2">Pass: <input type="password" name="pass" style="font-size:14pt;"><br><br></font><br>
      <button style="width: 120px; height: 40px;" name="customerLogin">
        <font size="+1">Login</font>
      </button><br><br>
      
      <font size="+2" color="red">
        <?php
        if (isset($_SESSION['error'])) {
          echo $_SESSION['error'];
          unset($_SESSION['error']);
        }
        ?>
      </font>
    </center>
  </form>
</body>
</html>
