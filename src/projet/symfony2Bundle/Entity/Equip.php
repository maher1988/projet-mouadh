<?php

namespace projet\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equip
 *
 * @ORM\Table(name="equip", indexes={@ORM\Index(name="FK_QUIPE_ASSOCIATI_CHEF_D_E", columns={"che_id"})})
 * @ORM\Entity
 */
class Equip
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=254, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=254, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Gouvernorat", type="string", length=254, nullable=true)
     */
    private $gouvernorat;

    /**
     * @var \ChefDEnquete
     *
     * @ORM\ManyToOne(targetEntity="ChefDEnquete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="che_id", referencedColumnName="id")
     * })
     */
    private $che;



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
     * Set nom
     *
     * @param string $nom
     * @return Equip
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
     * Set ville
     *
     * @param string $ville
     * @return Equip
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
     * Set gouvernorat
     *
     * @param string $gouvernorat
     * @return Equip
     */
    public function setGouvernorat($gouvernorat)
    {
        $this->gouvernorat = $gouvernorat;

        return $this;
    }

    /**
     * Get gouvernorat
     *
     * @return string 
     */
    public function getGouvernorat()
    {
        return $this->gouvernorat;
    }

    /**
     * Set che
     *
     * @param \projet\symfony2Bundle\Entity\ChefDEnquete $che
     * @return Equip
     */
    public function setChe(\projet\symfony2Bundle\Entity\ChefDEnquete $che = null)
    {
        $this->che = $che;

        return $this;
    }

    /**
     * Get che
     *
     * @return \projet\symfony2Bundle\Entity\ChefDEnquete 
     */
    public function getChe()
    {
        return $this->che;
    }
}
