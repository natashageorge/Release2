<?php
$db = mysqli_connect('george-219313.mysql.binero.se', '219313_ml53506','natashageorge' , '219313-george');

if (isset($_SESSION['admin']) && $_SESSION['admin'] == TRUE) {

    $rubrik = $_POST['rubrik'];
    $breadtext = $_POST['breadtext'];

    // Take care of form data
    if (isset($_POST["rubrik"]) && isset($_POST['breadtext'])) {
        $updateId = $_POST['id'];
        $sql = "UPDATE texts SET rubrik='$rubrik', text='$breadtext' WHERE id=$updateId";

        if ($db->query($sql) === TRUE) {
            // echo "success!";
        } else {
            echo "Tyvärr, där blev det något fel. Vänligen försök igen.";
            echo "Error: " . $sql . "<br>" . $db->error;
        }
    }

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>natashageorge - Admin</title>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
        <link rel='stylesheet' href='admin/admin.css'>
    </head>
    <body>

        <div class='flex-container'>
            <header>
                <h1 class='admin'>Den glada geten - Admin</h1>
            </header>
            </header>

            <nav class='nav'>
                <ul>
                    <li><a href='?p=bokning'><div class='nav-btn'>Bokningar</div></a></li>
                    <li><a href='?p=galleri'><div class='nav-btn'>Bildgalleri</div></a></li>
                    <li><a href='?p=texter'><div class='nav-btn'>Texter</div></a></li>
                    <li><a href='?p=logout'><div class='nav-btn'>Logga ut</div></a></li>
                </ul>
            </nav>

            <div class='content'>
                <h2>Texter</h2>
                ";

                    $query = "SELECT * FROM texts";

                    $result = mysqli_query($db, $query);
                    // $query2 = "DELETE $row['source'] FROM pics"

                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='textwrap'>
                            <form action='' method='post'>
                            <p class='admin-p'><label for='hemrubrik'>Rubrik</label></p>
                            <input type='text' id='hemrubrik' name='rubrik' value='{$row['rubrik']}'>
                            <p class='admin-p'><label for='hemtext'>Text</label></p>
                            <textarea class='admin-text' id='hemtext' name='breadtext'>{$row['text']}</textarea>
                            <input type='text' name='id' value='{$row['id']}' style='display:none'>
                            <input type='submit' value='Spara'>
                        </form>
                        </div>";
                    }


    echo "
    </div>
    </div>




    </body>
    </html>";
}
else {
    header("location: ../login.html");
}

$db->close();
