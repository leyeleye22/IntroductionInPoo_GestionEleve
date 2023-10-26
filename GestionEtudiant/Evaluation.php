<?php
class Evaluation
{
    protected $nomEvaluation;
    protected $infoProffesseur;
    protected $DateEvaluation;
    protected $dureeEvaluation;
    public function __construct($nomEvaluation, $infoProffesseur, $DateEvaluation, $dureeEvaluation)
    {
        $this->nomEvaluation = $nomEvaluation;
        $this->dureeEvaluation = $dureeEvaluation;
        $this->infoProffesseur = $infoProffesseur;
        $this->DateEvaluation = $DateEvaluation;
    }
    public function DescriptionEvaluation()
    {
        echo "Pour l'evalution $this->nomEvaluation qui aura lieu le $this->DateEvaluation sera faite par $this->infoProffesseur
         et ce pour une duree de $this->dureeEvaluation h";
    }

    /**
     * Get the value of nomEvaluation
     */
    public function getNomEvaluation()
    {
        return $this->nomEvaluation;
    }

    /**
     * Set the value of nomEvaluation
     *
     * @return  self
     */
    public function setNomEvaluation($nomEvaluation)
    {
        if (is_string($nomEvaluation)) {
            $this->nomEvaluation = $nomEvaluation;

            return $this;
        } else {
            throw new Exception("Veuillez donner un nom en chaine de caractere", 1);
        }
    }

    /**
     * Get the value of infoProffesseur
     */
    public function getInfoProffesseur()
    {
        return $this->infoProffesseur;
    }

    /**
     * Set the value of infoProffesseur
     *
     * @return  self
     */
    public function setInfoProffesseur($infoProffesseur)
    {
        if (is_string($infoProffesseur)) {
            $this->infoProffesseur = $infoProffesseur;

            return $this;
        } else {
            throw new Exception("Veuillez donner une information valide", 1);
        }
    }

    /**
     * Get the value of DateEvaluation
     */
    public function getDateEvaluation()
    {
        return $this->DateEvaluation;
    }

    /**
     * Set the value of DateEvaluation
     *
     * @return  self
     */
    public function setDateEvaluation($DateEvaluation)
    {
        $date = DateTime::createFromFormat('Y-m-d', $DateEvaluation);
        if ($date && $date->format('Y-m-d') === $DateEvaluation) {
            $this->DateEvaluation = $DateEvaluation;
            return $this;
        } else {
            throw new Exception("Veuillez donner une date valide au format 'YYYY-MM-DD'.");
        }
    }

    /**
     * Get the value of dureeEvaluation
     */
    public function getDureeEvaluation()
    {
        return $this->dureeEvaluation;
    }

    /**
     * Set the value of dureeEvaluation
     *
     * @return  self
     */
    public function setDureeEvaluation($dureeEvaluation)
    {
        if (is_numeric($dureeEvaluation) && $dureeEvaluation > 1) {
            $this->dureeEvaluation = $dureeEvaluation;

            return $this;
        } else {
            throw new Exception("Veuillez donner une duree valide", 1);
        }
    }
}
