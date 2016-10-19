/**
* Created by PhpStorm.
* @autor : Tarik En Nakdi
*/
<?php
session_start();

if (!isset($_SESSION['isAdmin']) || !$_SESSION['isAdmin']) {
    header('Location: login.php');
}

?>
