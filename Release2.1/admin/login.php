<?php
include("databas.php");
session_start();

// Inloggning
if (isset($_POST['password'])) {
	if ($_POST['password'] === 'password') {
		$_SESSION['admin'] = true;
	}
}

if(!isset($_SESSION['admin']) || !$_SESSION['admin']) {
	echo "
		<form action='' method='post'>
		Password: <input type='password' name='password' />
		<input type='submit' value='Sign in'>
		</form>
	";
} else {
	if ($_GET['p'] === 'logout') {
            $_SESSION['admin'] = FALSE;
            header('location: login.php');
    } else {
	// Uppdatera databasen
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$text = mysqli_real_escape_string($db, $_POST['text']);
	$id = mysqli_real_escape_string($db, $_POST['id']);

	if (isset($_POST['name'])) {
	    $sql = "UPDATE cv SET name='$name', text='$text' WHERE id='$id'";

	    if ($db->query($sql) === TRUE) {
	        // echo "id is: $id, id is: $name, text is: $text";
	    } else {
	        echo "Error: " . $sql . "<br>" . $db->error;
	    }
	 }

  echo "<a href='?p=logout'>Logga ut</a><div>";
	$query = "
		SELECT * FROM cv
		ORDER BY id;
	";
	$result = mysqli_query($db, $query);
	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		$name = $row['name'];
		$text = $row['text'];
		echo "
			<form action='' method='post'>
				<label>Rubrik</label>
				<input type='text' value='$name' name='name' /><br />
				<label>Innehåll</label>
				<input type='text' value='$text' name='text' /><br />
				<input type='text' value='$id' name='id' style='display:none;'/><br />
				<button>Spara</button>
			</form>
		";
	}
	echo "</div>";    	
    }
}

?>
