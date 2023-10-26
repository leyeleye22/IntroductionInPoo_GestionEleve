<?php
require_once 'Etudiant.php';
require_once 'Professeur.php';
require_once 'Evaluation.php';
$etudiant = new Etudiant("Leye", "Babacar", "2000-10-21", "012GH");
// $etudiant->presenter();
// $etudiant->FaireCours();
// $etudiant->FaireEvaluation();
// $etudiant->setDateNais("2000-10-21");
$formateur = new Professeur("Talla", "Cheikh", "2000-10-21", "345KJH", true, 20000, "Dev-BAck");
// $formateur->presenter();
$formateur->EvaluationEtudiant("2000-10-21");
$Evaluation = new Evaluation("DevMobil", "Cheikh Saliou", "2023-10-29", 2);
echo "<br>";
$Evaluation->DescriptionEvaluation();
