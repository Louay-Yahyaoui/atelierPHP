<?php
if(isset($_COOKIE["cookie"]))
{
    die("Vous avez déjà voté");
}
setcookie("cookie","",time()+120);
echo("Félicitations!Vous avez voté");
