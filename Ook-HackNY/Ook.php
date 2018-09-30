<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $facebookErr = $instagramErr = $snapchatErr = $linkedinErr = $shareErr = "";
$name = $email = $share = $facebook = $instagram = $snapchat = $linkedin = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    //$emailErr = "Email is required";

  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["share"])) {
    $shareErr = "Sharing types are required";
  } else {
    $share = test_input($_POST["share"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Facebook: <input type="text" name="facebook" value="<?php echo $facebook;?>">
  <span class="error"><?php echo $facebookErr;?></span>
  <br><br>
  Instagram: <input type="text" name="instagram" value="<?php echo $instagram;?>">
  <span class="error"><?php echo $instagramErr;?></span>
  <br><br>
  Snapchat: <input type="text" name="snapchat" value="<?php echo $snapchat;?>">
  <span class="error"><?php echo $shareErr;?></span>
  <br><br>
  LinkedIn: <input type="text" name="linkedin" value="<?php echo $linkedin;?>">
  <span class="error"><?php echo $linkedinErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Share:
  <input type="radio" name="share" <?php if (isset($share) && $share=="facebook") echo "checked";?> value="facebook">Facebook
  <input type="radio" name="share" <?php if (isset($share) && $share=="instagram") echo "checked";?> value="instagram">Instagram
  <input type="radio" name="share" <?php if (isset($share) && $share=="snapchat") echo "checked";?> value="snapchat">Snapchat 
  <input type="radio" name="share" <?php if (isset($share) && $share=="linkedin") echo "checked";?> value="linkedin">LinkedIn 
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $facebook;
echo "<br>";
echo $instagram;
echo "<br>";
echo $snapchat;
echo "<br>";
echo $comment;
?>

</body>
</html>