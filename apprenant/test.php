<?php
include("ApprenantManager.php"); // Assurez-vous que le chemin du fichier est correct

// Création d'une instance de la classe ApprenantManager
$apprenantManager = new ApprenantManager();

// Test de la création d'un apprenant
$createResult = $apprenantManager->createApprenant("Dupont", "Jean", "jean.dupont@example.com");
echo "<br/>Création d'un apprenant: " . ($createResult ? "Succès" : "Échec") . PHP_EOL;

// Test de la mise à jour d'un apprenant
$updateResult = $apprenantManager->updateApprenant(1, "Durand", "Paul", "paul.durand@example.com");
echo "<br/>Mise à jour de l'apprenant: " . ($updateResult ? "Succès" : "Échec") . PHP_EOL;

// Test de la suppression d'un apprenant
$deleteResult = $apprenantManager->deleteApprenant(2);
echo "<br/>Suppression de l'apprenant: " . ($deleteResult ? "Succès" : "Échec") . PHP_EOL;

echo "<hr>";
/*****************************************************/
// Cours 
include("CoursManager.php"); // Assurez-vous que le chemin du fichier est correct

// Création d'une instance de la classe CoursManager
$coursManager = new CoursManager();

// Test de la création d'un cours
$createResult = $coursManager->createCours("Programmation avancée");
echo "<br/>Création d'un cours: " . ($createResult ? "Succès" : "Échec") . PHP_EOL;

// Test de la mise à jour d'un cours
$updateResult = $coursManager->updateCours(1, "Algorithmes avancés");
echo "<br/>Mise à jour du cours: " . ($updateResult ? "Succès" : "Échec") . PHP_EOL;

// Test de la suppression d'un cours
$deleteResult = $coursManager->deleteCours(2);
echo "<br/>Suppression du cours: " . ($deleteResult ? "Succès" : "Échec") . PHP_EOL;

?>
