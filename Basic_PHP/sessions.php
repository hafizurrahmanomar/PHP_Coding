
<?php
// PHP Sessions
// A session is started with the session_start() function.



// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favColor"] = "green";
$_SESSION["favAnimal"] = "cat";
echo "Session variables are set. <br/>";

// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favColor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favAnimal"] . ".<br>";
print_r($_SESSION);
echo "<br/>";
// to change a session variable, just overwrite it
$_SESSION["favColor"] = "yellow";
print_r($_SESSION);
echo "<br/>";
//Destroy a PHP Session

// remove all session variables
session_unset();
echo "<br/>";
print_r($_SESSION);
echo "<br/>";
// destroy the session
session_destroy();
echo "<br/>";

?>

</body>
</html>