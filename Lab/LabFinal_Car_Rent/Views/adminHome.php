<?php
    session_start();
    require_once('../Models/alldb.php');
    $res= data1();
    if (empty($_SESSION['name']))
    {
      header('location:../Views/customerLog.php');
    }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>
  <form action="../Controllers/logController.php">
  <center>
  <font size="+2">This is admin home page</font><br><br>  
  <h1>Welcome <?php echo $_SESSION['name']; ?> </h1><br><br>
    
    <font size="+2">
    <table border="1">
      <tr>
        <th>Car_ID </th>
        <th>Car Name</th>
         <th>Rent Price</th>
         <th>Customer Name</th>
         <th>Action</th>
      </tr>
    <?php while ($r=$res->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $r['car_id']; ?></td>
        <td><?php echo $r['car_name']; ?></td>
        <td><?php echo $r['rent_price']; ?></td>
        <td><?php echo $r['cu_name']; ?></td>
        <td><button name="delete" value="<?php echo $r['cu_name']; ?>">Delete</button></td>
      </tr>
    <?php } ?>
    </table>
    </font>
    <br>
    <button style="width: 100px; height: 30px;" name="logout"><font size="+1">Logout</font></button><br><br>
    <?php
    if (isset($_SESSION['message']))
    {
      echo $_SESSION['message'];
      unset($_SESSION['message']);
    }
  ?>
  </center>
  </form>
  
</body>
</html>