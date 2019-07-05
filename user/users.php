<?php
//session_start();
if(!isset($_SESSION['userid'])) {
    die();
}
 
//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid'];
$mod = $_SESSION['mod'];
$name = $_SESSION['name'];

?>
<?php
//echo "Hallo User: ".$name;
//echo " UserID: ".$userid;
?>
