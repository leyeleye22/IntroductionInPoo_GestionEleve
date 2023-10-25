<?php
require_once 'Etudiant.php';
require_once 'Professeur.php';
$etudiant = new Etudiant("Leye", "Babacar", "01/01/1000", "012GH");
// $etudiant->presenter();
// $etudiant->FaireCours();
// $etudiant->FaireEvaluation();
// $etudiant->setDateNais("2000-10-21");
$formateur = new Professeur("Talla", "Cheikh", "02/02/2986", "345KJH", true, 20000, "Dev-BAck");
// $formateur->presenter();
$formateur->EvaluationEtudiant("2000-10-21");
