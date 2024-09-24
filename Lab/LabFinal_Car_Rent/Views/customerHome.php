<?php
    session_start();
    require_once('../Models/alldb.php');
    $res= data();
    if (empty($_SESSION['name']))
    {
      header('location:../Views/customerLog.php');
    }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Home</title>
</head>
<body>
  <form action="../Controllers/logController.php">
  <center>
  <font size="+2">This is customer home page</font><br><br>  
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
        
        <td><input type="text" name="cu_name[<?php echo $r['car_name']; ?>]" style="font-size:14pt;"></td>

        <td><button name="rent" value="<?php echo $r['car_name']; ?>">Rent</button></td>
      </tr>
    <?php } ?>
    </table>
    </font>
    <br>
    <button style="width: 100px; height: 30px;" name="logout"><font size="+1">Logout</font></button><br><br>
    <?php
    if (isset($_SESSION['rent']))
    {
      echo $_SESSION['rent'];
      unset($_SESSION['rent']);
    }
  ?>
  </center>
  </form>
  
</body>
</html>