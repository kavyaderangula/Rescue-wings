<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $cookie_name = $_POST['cookie_name'];
    $cookie_value = $_POST['cookie_value'];

    // Set the cookie
    setcookie($cookie_name, $cookie_name, time() + (86400 * 30), "/"); // 86400 = 1 day
}
?>