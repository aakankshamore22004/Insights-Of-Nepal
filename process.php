<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // You can save to DB here later

    header("Location: confirmation.php");
    exit();
}
?>
