<?php
session_start();
 
if(!isset($_SESSION["login"])){
    header("Location:index.php");
}
else {
    echo "<center><h3>ADMIN PANEL</h3>";
}

?>