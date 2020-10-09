<?php 
//include config file
require "configuration.php"
?>  
<DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$firstnameErr =$lastnameErr= $emailErr = $phone_numberErr= $genderErr = $passwordErr= $confirm_passwordErr ="";
$firstname = $lastname=$email = $phone_number = $gender = $password=$confirm_password="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
       $firstnameErr = "First name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["lastname"])) {
    $lastnameErr = "Last name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed";
    }
  }

  
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["phone_number"])) {
    $phone_numberErr = "Phone Number required";
  } 
  else {
    $phone_number = test_input($_POST["phone_number"]);
    // check if phone_number is well-formed
    if (!filter_var($phone_number, FILTER_SANITIZE_NUMBER_INT)) {
      $phone_numberErr = "Invalid phone number format";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password required";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["confirm_password"])) {
    $confirm_passwordErr = "Confirm password required";
  } else {
    $confirm_password = test_input($_POST["confirm_password"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<hr><h2> SIGN UP DETAILS </h2><hr>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <label>First Name:</label> <input type="text" name="firstname" placeholder="firstname" value="<?php echo $firstname;?>">
  <span class="error">* <?php echo $firstnameErr;?></span>
  <br><br>
  <label>Last Name:</label> <input type="text" name="lastname" placeholder="lastname" value="<?php echo $lastname;?>">
  <span class="error">* <?php echo $lastnameErr;?></span>
  <br><br>
  <label>E-mail:</label> <input type="email" name="email" placeholder="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <label>Phone Number:</label> <input type="number" name="phone_number" placeholder="phonenumber" value="<?php echo $phone_number;?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxLength="11">
  <span class="error">* <?php echo $phone_numberErr;?></span>
  <br><br>
  <label>Gender:</label>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <label>Password:</label> <input type="password" name="password" placeholder="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  <label>Confirm Password: </label><input type="password" name="confirm_password" placeholder="confirmpassword" value="<?php echo $confirm_password;?>">
  <span class="error">*<?php echo $confirm_passwordErr;?></span> 
  <br><br>
  <input type="submit" name="submit" value="Submit" > 
  
</form>

<?php
echo "<h2>Result:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $email;
echo "<br>";
echo $phone_number;
echo "<br>";
echo $gender;
echo "<br>";
echo $password;
echo "<br>";
echo $confirm_password;
?>

</body>
</html>
