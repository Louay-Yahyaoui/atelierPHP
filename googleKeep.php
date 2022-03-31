<?php
session_start();
if (!isset($_SESSION["num"]))
{
    $_SESSION["num"]=0;
}
else
    $_SESSION["num"]++;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>googleKeep</title>
</head>
<body>
<form action="traitementKeep.php" method="post">
    <input type="text" placeholder="Titre" name="titre"><br>
    <textarea placeholder="Commentaire" name="commentaire"></textarea><br>
    <input type="submit" name="confirm" value="confirmer">
    <input type="submit" value="fermer" name="fermer">
</form>
</body>
</html>

