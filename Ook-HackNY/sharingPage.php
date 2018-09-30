<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<h1>Select Sharing Info</h1>
  <!--
  <input type="radio" name="share" <?php if (isset($share) && $share=="facebook") echo "checked";?> value="facebook">Facebook
  <input type="radio" name="share" <?php if (isset($share) && $share=="instagram") echo "checked";?> value="instagram">Instagram
  <input type="radio" name="share" <?php if (isset($share) && $share=="snapchat") echo "checked";?> value="snapchat">Snapchat 
  <input type="radio" name="share" <?php if (isset($share) && $share=="linkedin") echo "checked";?> value="linkedin">LinkedIn 
  <span class="error">* <?php echo $genderErr;?></span>
  <input type="submit" name="submit" value="Submit">  
  <br><br>
!-->
  <p><input type="checkbox" name="sharing[]" value="Number"/>Number</p>
  <p><input type="checkbox" name="sharing[]" value="Website"/>Website</p>
  <p><input type="checkbox" name="sharing[]" value="Facebook"/>Facebook</p>
  <p><input type="checkbox" name="sharing[]" value="Instagram"/>Instagram</p>
  <p><input type="checkbox" name="sharing[]" value="Snapchat"/>Snapchat</p>
  <p><input type="checkbox" name="sharing[]" value="Linkedin"/>LinkedIn</p>
  <p><input type="submit" name="submit" value="Generate QR Code"></p> 
  <span class="error"> <?php echo $shareErr;?></span>
</form>