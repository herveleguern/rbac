<?php
require_once 'user.php';
require_once 'motdepasse.php';
//tests de modification de la propriété motDePasse

$u1=new User('Robert','bob');
echo $u1;

$u1->modifierMdp('sio'); 
echo $u1;

$u1->modifierMdp('sio2');
echo $u1;

$u1->modifierMdp('achanger');
echo $u1;

//vérifier que les anciens mdp sont historisés
var_dump($u1->getLesAnciensMdp());




?>