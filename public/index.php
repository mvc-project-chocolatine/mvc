<?php

require_once '../app/init.php';

$app = new App;

// Je te mets ça la, ça marche, dans le cas ou je le lance manuellement, j'arrive pas à rediriger vers la bonne url pour le moment au lancement du site
// En sachant que j'ai créé un virtual host mvc, sur l'url "mvc/public/home/index" je suis bon.
// Autre truc, je l'ai fait avant que tu mettes les conventions sur les variables et autres, du coup il y a pas grand chose qui est bon à ce niveau là.
// Cela dit, pour séparer le mvc du reste, je pense que garder les noms en anglais pour ça me parait pas mal.
