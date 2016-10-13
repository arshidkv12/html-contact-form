<?php 
if (!defined( 'ABSPATH')) exit;
$codeText='<form action="" method="post">
  <input name="Name" placeholder="Name" type="text" required>
  <input name="Email" placeholder="Email" type="email" required>
  <input name="Subject" placeholder="Subject" type="text">
  <textarea name="Message" placeholder="Message" rows="5" required></textarea>
  
  <img src="../wp-content/plugins/html-contact-form/captcha.php"> 
  <input name="captcha" placeholder="Enter captcha text here" type="text">

  <button type="submit">Submit</button>
 </form>';
?>