<?php
interface Ietudiant
{
    public function presenter();
    public function FaireCours();
    public function FaireEvaluation();
}
class Etudiant implements Ietudiant
{
    protected $nom;
    protected $prenom;
    protected $matricule;
    public $dateNais;
    public function __construct($nom, $prenom, $dateNais, $matricule)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setDateNais($dateNais);
        $this->matricule = $matricule;
    }


    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        if (is_string($nom) && strlen($nom) <= 30) {
            $this->nom = $nom;

            return $this;
        } else {
            throw new Exception('Le nom ne doit pas etre un int ou depasser 30caracteres');
        }
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($prenom)
    {
        if (is_string($prenom) && strlen($prenom) <= 30) {
            $this->prenom = $prenom;

            return $this;
        } else {
            throw new Exception('Le prenom ne doit pas etre un int ou depasser 30caracteres');
        }
    }

    /**
     * Get the value of matricule
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }
    public function presenter()
    {
        echo "Bonjour je mon nom est: $this->nom, mon prenom est $this->prenom, et ma matricule est $this->matricule <br>";
    }
    public function FaireCours()
    {
        echo "Je suis actuellement entrain de faire un cours";
    }
    public function FaireEvaluation()
    {
        echo "Je suis actuellement en plein evaluation";
    }

    /**
     * Get the value of dateNais
     */
    public function getDateNais()
    {
        return $this->dateNais;
    }

    /**
     * Set the value of dateNais
     *
     * @return  self
     */
    public function setDateNais($dateNais)
    {
        $date = DateTime::createFromFormat('Y-m-d', $dateNais);
        if ($date && $date->format('Y-m-d') === $dateNais) {
            $this->dateNais = $dateNais;
            return $this;
        } else {
            throw new Exception("Veuillez donner une date valide au format 'YYYY-MM-DD'.");
        }
    }
}
