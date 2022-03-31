<?php
function randomName()
{
    $allchars="abcdefghijklmnopqrstuvwxyz";
    $allchars.=strtoupper($allchars);
    $allchars.="1234567890-_!?;.:,/%*$";
    $nom="";
    for($i=0;$i<20;$i++)
    {
        $nom.=$allchars[mt_rand(0,strlen($allchars)-1)];
    }
    return $nom;
}
$y="";
$booleen=true;
echo ("Recap de votre commande:<br>");
foreach ($_POST as $x=>$i)
{
$y=strip_tags($i);
echo("$x:$y<br>");
}
echo("Les informations du cin:<br>");
foreach($_FILES["cin"] as $j=>$k) {
    echo("$j:$k<br>");
}
move_uploaded_file($_FILES["cin"]["tmp_name"],randomName());
$prix=$_POST["quantite"]*4;
if ($_POST["quantite"]>=10)
    $prix*=0.9;
echo("le prix est $prix");


