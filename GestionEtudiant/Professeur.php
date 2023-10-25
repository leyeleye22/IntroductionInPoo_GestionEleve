<?php
interface Iprofesseur
{
    public function EvaluationEtudiant($dateEv);
}
class Professeur extends Etudiant implements Iprofesseur
{
    private bool $voiture;
    private $salaire;
    private $specialites;
    public function __construct($nom, $prenom, $dateNais, $matricule, $voiture, $salaire, $specialites)
    {
        parent::__construct($nom, $prenom, $dateNais, $matricule);
        $this->voiture = $voiture;
        $this->salaire = $salaire;
        $this->specialites = $specialites;
    }

    /**
     * Get the value of voiture
     */
    public function getVoiture()
    {
        return $this->voiture;
    }

    /**
     * Set the value of voiture
     *
     * @return  self
     */
    public function setVoiture($voiture)
    {
        if (is_bool($voiture)) {
            $this->voiture = $voiture;

            return $this;
        } else {
            throw new Exception("Desole mais si on vous demande si vous avez une voiture ve", 1);
        }
    }

    /**
     * Get the value of salaire
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get the value of specialites
     */
    public function getSpecialites()
    {
        return $this->specialites;
    }

    /**
     * Set the value of specialites
     *
     * @return  self
     */
    public function setSpecialites($specialites)
    {
        $this->specialites = $specialites;

        return $this;
    }
    public function EvaluationEtudiant($DateEvaluation)
    {
        $date = DateTime::createFromFormat('Y-m-d', $DateEvaluation);
        if ($date && $date->format('Y-m-d') === $DateEvaluation) {
            echo "Bonjour les etudiant je vous previens que je vais fare  une evaluation à la date suivante:$DateEvaluation";
        } else {
            throw new Exception("Veuillez donner une date valide au format 'YYYY-MM-DD'.");
        }
    }
    public function presenter()
    {
        echo "Bonjour je mon nom est: $this->nom, mon prenom est $this->prenom, et ma matricule est $this->matricule,et 
        je suis formateur est que j'ai une voiture: $this->voiture, ma specialite $this->specialites et mon salire est $this->salaire";
    }
}
