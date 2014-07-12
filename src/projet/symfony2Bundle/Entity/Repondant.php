<?php

namespace projet\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Repondant
 *
 * @ORM\Table(name="repondant")
 * @ORM\Entity
 */
class Repondant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="cin", type="integer", nullable=true)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=254, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=254, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=254, nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=254, nullable=true)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     */
    private $age;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cin
     *
     * @param integer $cin
     * @return Repondant
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return integer 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Repondant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Repondant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Repondant
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Repondant
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     * @return Repondant
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return Repondant
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }
}
