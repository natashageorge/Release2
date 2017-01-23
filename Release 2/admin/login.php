<?php session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    if($_POST['username'] == "natashageorge" && $_POST['password'] == "natta13579") {
        $_SESSION['admin'] = TRUE;
    }
}

// if (isset($_GET['logout'])) {
//         $_SESSION['admin'] = FALSE;
//         header("location: login.html");
// }
// Inloggad admin
if (isset($_SESSION['admin']) && $_SESSION['admin'] == TRUE) {
    // header("location: admin/bokning.php");
    if ($_GET['p'] === "texter.php") {
        include('admin/texter.php');
    } else if ($_GET['p'] === "logout") {
        $_SESSION['admin'] = FALSE;
        header("location: admin/login.php");
    }

}
else {
    header("location: admin/login.php");
}
?>
