<?php
include "artikl.php";
include "artiklmgr.php";

$nMgr = artiklmgr::getInstance();

$counter = readline("Koliko artikala zelite unijeti: ");

for($counter; $counter>0; $counter--)
{
    $nMgr->Unos();
}

$nMgr->Prikaz();



?>