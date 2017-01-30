<?php 

include(databas.php); 

$name = $_POST['name'];
$text = $_POST['text'];
$id = $_POST['id'];

if (isset($_POST['name'])) {
    $sql = "UPDATE cv SET name='$name', text='$text' WHERE id=$id";

    if ($db->query($sql) === TRUE) {
        echo "$id";
    } else {
        echo "Tyvärr, där blev det något fel. Vänligen försök igen.";
        echo "Error: " . $sql . "<br>" . $db->error;
    }
 }