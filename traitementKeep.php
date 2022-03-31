<?php
session_start();
if(isset($_POST["fermer"]))
    session_destroy();
else
{
    $_SESSION["note".$_SESSION["num"]]=" le titre est ".$_POST['titre']."<br>le commentaire est ".$_POST['commentaire'];
    for($i=0;$i<=$_SESSION["num"];$i++)
    {
        echo("note$i:".$_SESSION["note$i"]."<br>");
    }
}
