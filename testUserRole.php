<?php
require_once 'user.php';
//tests de la propriété Role
$u1=new User('Robert','bob');
echo $u1->getRole(),PHP_EOL; //1: Robert a le role GUEST par défaut

$u2=new User('Isabelle', 'zab',User::ADMIN);
echo $u2->getRole(),PHP_EOL; //2: Isabelle a le role ADMIN

$u1->setRole(User::ADMIN);
echo $u1->getRole(),PHP_EOL; //2: Robert est maintenant ADMIN 

$u1->setRole(10); //a priori impossible car role inexistant
echo $u1->getRole(),PHP_EOL; //2: OK Robert reste au role ADMIN

$u3=new User('Marguerite','fleur',10); //le role 10 n'existe PAS
echo $u3->getRole(),PHP_EOL; //1: OK Marguerite a le role GUEST

echo User::getNbInstances()," instances User";
$u4=new User('Cecile','cecile',17);
echo $u4->getRole(),PHP_EOL; //role 1 par defaut

?>