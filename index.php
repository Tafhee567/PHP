<?php
$Id = $Name = $Npass = $Cpass = $Hobby = $Address = '';
$Id_error = $Name_error = $Npass_error = $Cpass_error = $Hobby_error = $Address_error = '';

$error = false;

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
 {

    if ( empty( $_POST[ 'id' ] ) )
 {
        $Id_error = 'ID is not valid';
        $error = true;
    }

    if ( empty( $_POST[ 'name' ] ) )
 {
        $Name_error = 'Please fillup the name text field';
        $error = true;
    }

    if ( empty( $_POST[ 'address' ] ) )
 {
        $Address_error = 'Please entry your address';
        $error = true;
    }

    if ( strlen( $_POST[ 'npass' ] )<6 )
 {
        $Npass_error = 'Password must have at least 6 characters';
        $error = true;
    }

    if ( ( $_POST[ 'cpass' ] ) != ( $_POST[ 'npass' ] ) )
 {
        $Cpass_error = 'Password and confirm password donot match';
        $error = true;
    }
}

if ( isset( $_POST[ 'Login' ] ) ) {
    header( 'location:Login.php' );
}

?>

<!DOCTYPE html>
<html>
<head>
<title> Registration page </title>
</head>
<body>
<form method = 'post'>
<fieldset>
<legend>Register</legend>

ID:<input type = 'text' name = 'id' placeholder = 'Enter your id'>
<span class = 'text-danger'><?php echo $Id_error;
?></span>
<br><br>
Name: <input type = 'text' name = 'name' placeholder = 'Enter your name'>
<span class = 'text-danger'><?php echo $Name_error;
?></span>
<br><br>
N pass: <input type = 'password' name = 'npass' placeholder = 'Enter your new password'>
<span class = 'text-danger'><?php echo $Npass_error;
?></span>
<br><br>
C pass: <input type = 'password' name = 'cpass' placeholder = 'Enter your current password'>
<span class = 'text-danger'><?php echo $Cpass_error;
?></span>
<br><br>

Hobby:
<select name = 'hobby' >
<option selected>Cricket
<option>Football
<option>Luddo
</select>
<span class = 'text-danger'><?php echo $Hobby_error;
?></span>
<br><br>

Address: <input type = 'text' name = 'address' placeholder = 'Enter your address'>
<span class = 'text-danger'><?php echo $Address_error;
?></span>
<br><br>

<input type = 'submit' name = 'submit' value = 'submit'>
<button name = 'Login'> Login </button>
</fieldset>
</form>
</body>
</html>