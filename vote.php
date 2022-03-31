<?php
if(isset($_COOKIE["cookie"]))
{
    die("Vous avez déjà voté.Vos réponses sont ".$_COOKIE['cookie']);
}
setcookie("cookie",$_POST["question1"]." ".$_POST["question2"]." ".$_POST["question3"],time()+120);
echo("Félicitations!Vous avez voté");
