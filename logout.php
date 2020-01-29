<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 1/26/2020
 * Time: 9:32 AM
 */
?>
<?php
include ('path.php');
session_start();

unset($_SESSION['id']);
unset ($_SESSION['username']);
unset ($_SESSION['admin']);
unset ($_SESSION['message']);
unset ($_SESSION['type']);

session_destroy();
header('location: ' .BASE_URL . '/index.php');
