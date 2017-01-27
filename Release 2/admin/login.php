<?php session_start();

if (isset($_POST['password']) && $_POST['password'] == "Emilio09") {
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
  echo "Signed in";
}

?>
