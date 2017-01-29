<?php
include("databas.php");
session_start();

if (isset($_POST['password'])) {
$_SESSION['admin'] = true;
}

if(!isset($_SESSION['admin']) || !$_SESSION['admin']) {
  echo "
<form action='' method='post'>
Password: <input type='password' name='password' />
<input type='submit' value='Sign in'>
</form>
";
} else {
  run_admin();
}

function run_admin(){
  echo "<div>";
$query = "SELECT * FROM Cv_editing";
$result = mysqli_query($db, $query);
while($row = mysqli_fetch_assoc($result)){
$name = $row["name"];
$text = $row["text"];
echo "<h1>$name</h1> <p>$text</p>";
}
  "</div>";

}

?>
