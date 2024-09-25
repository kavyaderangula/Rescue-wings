<?php
// Check if the cookie is set
if(isset($_COOKIE['visit_count'])) {
    $visit_count = $_COOKIE['visit_count'] + 1; // Increment the visit count
} else {
    $visit_count = 1; // Initialize the visit count if cookie is not set
}

// Set the cookie with the updated visit count
setcookie('visit_count', $visit_count, time() + (86400 * 30), "/"); // Cookie expires in 30 days

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Visit Counter</title>
</head>
<body>

<h2>Visit Counter</h2>
<p>This page has been visited <?php echo $visit_count; ?> times.</p>

</body>
</html>