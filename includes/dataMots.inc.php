<?php
//mots disponible en JSON sous JS
$dataMotsJSON='{"question":[{ "mot": [{"libelle":"diff&eacute;rencier","categorie":null},{"libelle":"essayer","categorie":"OR"},{"libelle":"s\'impliquer","categorie":null},{"libelle":"&ecirc;tre pratique","categorie":"EA"}] },{ "mot": [{"libelle":"r&eacute;ceptif","categorie":"EC"},{"libelle":"logique","categorie":null},{"libelle":"m&eacute;thodique","categorie":"CA"},{"libelle":"impartial","categorie":null}] },{ "mot": [{"libelle":"ressentir","categorie":"EC"},{"libelle":"faire attention","categorie":"OR"},{"libelle":"r&eacute;fl&eacute;chir","categorie":"CA"},{"libelle":"faire","categorie":"EA"}] },{ "mot": [{"libelle":"accepter","categorie":"EC"},{"libelle":"prendre des risques","categorie":null},{"libelle":"&eacute;valuer","categorie":"CA"},{"libelle":"prendre consience","categorie":null}] },{ "mot": [{"libelle":"intuitif","categorie":"EC"},{"libelle":"productif","categorie":null},{"libelle":"logique","categorie":"CA"},{"libelle":"interrogateur","categorie":null}] },{ "mot": [{"libelle":"abstrait","categorie":null},{"libelle":"observateur","categorie":"OR"},{"libelle":"concret","categorie":null},{"libelle":"actif","categorie":"EA"}] },{ "mot": [{"libelle":"orient&eacute; vers le pr&eacute;sent","categorie":"EC"},{"libelle":"r&eacute;flechissant","categorie":"OR"},{"libelle":"orient&eacute; vers le futur","categorie":null},{"libelle":"pragmatique","categorie":"EA"}] },{ "mot": [{"libelle":"partir de son exp&eacute;rience","categorie":"EC"},{"libelle":"observer","categorie":"OR"},{"libelle":"penser","categorie":"CA"},{"libelle":"exp&eacute;rience","categorie":"EA"}] },{ "mot": [{"libelle":"intense","categorie":null},{"libelle":"r&eacute;serv&eacute;","categorie":"OR"},{"libelle":"rationnel","categorie":"CA"},{"libelle":"responsable","categorie":"EA"}]}] }';

//mots disponibles via Array PHP = tableau associatif
$dataMotsArrayObject=json_decode($dataMotsJSON,true);

//mots disponibles via une class en PHP
$dataMotsClassObject=json_decode($dataMotsJSON,false);
?>