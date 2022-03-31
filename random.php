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