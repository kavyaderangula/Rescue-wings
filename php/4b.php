<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cookie_name = $_POST['cookie_name'];
    $cookie_value = $_POST['cookie_value'];

    // Set the cookie
    setcookie($cookie_name, $cookie_name, time() + (86400 * 30), "/"); // 86400 = 1 day
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Set Cookie</title>
</head>
<body>

<h2>Set Cookie</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="cookie_name">Cookie Name:</label>
    <input type="text" id="cookie_name" name="cookie_name">
    <br>
    <label for="cookie_value">Cookie Value:</label>
    <input type="text" id="cookie_value" name="cookie_value">
    <br>
    <input type="submit" value="Set Cookie">
</form>

<?php
// Check if the cookie is set and display its value
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_COOKIE[$cookie_name])) {
    echo "<h2>Cookie is set!</h2>";
    echo "<p>Cookie Name: " . $_COOKIE[$cookie_name] . "</p>";
}
?>

</body>
</html>