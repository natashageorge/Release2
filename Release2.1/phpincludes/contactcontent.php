<?php
	$db = mysqli_connect("natasha-219313.mysql.binero.se", "219313_un75083", "natta13579", "219313-natasha");
	// $db = mysqli_connect("localhost", "root", "", "cv");
	mysqli_query($db,"SET NAMES utf8");
?>
<section class="contact">
<?php
//If email is filled, send to database
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Uppdatera databasen
$name = mysqli_real_escape_string($db, $_POST['name']);
$text = mysqli_real_escape_string($db, $_POST['text']);
$id = mysqli_real_escape_string($db, $_POST['id']);

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
	$sql = "INSERT INTO messages (name, email, message)
			VALUES ('$name', '$email', '$message')";

	if ($db->query($sql) === TRUE) {
		echo "Yay!";
	} else {
		echo "Error.";
	}
}

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
