<?php

namespace projet\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Superviseur
 *
 * @ORM\Table(name="superviseur", indexes={@ORM\Index(name="FK_SUPERVIS_hASSOCIATI_EQUIPE", columns={"equ_id"})})
 * @ORM\Entity
 */
class Superviseur
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
     * @ORM\Column(name="Gouvernorat", type="string", length=254, nullable=true)
     */
    private $gouvernorat;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=254, nullable=true)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=254, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="axe_x", type="integer", nullable=true)
     */
    private $axeX;

    /**
     * @var integer
     *
     * @ORM\Column(name="axe_y", type="integer", nullable=true)
     */
    private $axeY;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=254, nullable=true)
     */
    private $password;

    /**
     * @var \Equip
     *
     * @ORM\ManyToOne(targetEntity="Equip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equ_id", referencedColumnName="id")
     * })
     */
    private $equ;



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
     * @return Superviseur
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
     * @return Superviseur
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
     * @return Superviseur
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
     * Set gouvernorat
     *
     * @param string $gouvernorat
     * @return Superviseur
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
     * Set telephone
     *
     * @param integer $telephone
     * @return Superviseur
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
     * Set adress
     *
     * @param string $adress
     * @return Superviseur
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Superviseur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set axeX
     *
     * @param integer $axeX
     * @return Superviseur
     */
    public function setAxeX($axeX)
    {
        $this->axeX = $axeX;

        return $this;
    }

    /**
     * Get axeX
     *
     * @return integer 
     */
    public function getAxeX()
    {
        return $this->axeX;
    }

    /**
     * Set axeY
     *
     * @param integer $axeY
     * @return Superviseur
     */
    public function setAxeY($axeY)
    {
        $this->axeY = $axeY;

        return $this;
    }

    /**
     * Get axeY
     *
     * @return integer 
     */
    public function getAxeY()
    {
        return $this->axeY;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Superviseur
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set equ
     *
     * @param \projet\symfony2Bundle\Entity\Equip $equ
     * @return Superviseur
     */
    public function setEqu(\projet\symfony2Bundle\Entity\Equip $equ = null)
    {
        $this->equ = $equ;

        return $this;
    }

    /**
     * Get equ
     *
     * @return \projet\symfony2Bundle\Entity\Equip 
     */
    public function getEqu()
    {
        return $this->equ;
    }
}
