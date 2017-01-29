<section class="contact">
<?php
//if email is filled, send email
if(isset($_REQUEST['email'])){
  $admin_email ="natashaa.george3@gmail.com";
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $message = $_REQUEST['message'];

//send email
  mail($admin_email, "Från min hemsida", $message, "From:" . $email, $name);
  echo "Tack";
} 
else {
?>

<form method="post">
<div class="input 1"><input name="name" type="text" required="" placeholder="Namn*"></div>
<div class="input 2"><input name="email" type="email" required="" placeholder="E-mail*"></div>
<div class="textarea"><textarea name="message" required="" title="Skriv ditt meddelande här"></textarea></div>
<div class="input 5"><input type="submit" name="submit" value="skicka"></div>
</form>
</section>
<?php
}
?>
</section>
