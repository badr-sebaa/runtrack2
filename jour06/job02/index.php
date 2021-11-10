<?php
session_start();
?>

<form action="index.php" method="get">

<?php
setcookie(['nbvisites']);

if (isset($_SESSION['nbvisites']))
{
    $_SESSION['nbvisites']++;
} 

else
 {
    $_SESSION['nbvisites'] = 0;
}

echo 'Visites : ' . $_SESSION['nbvisites'];

if (isset($_GET['reset'])) 
{
    unset($_SESSION['nbvisites']);
}

?>

<input type="submit" name="reset" value="reset">
</form>
