<?php

namespace projet\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enquete
 *
 * @ORM\Table(name="enquete", indexes={@ORM\Index(name="FK_ENQUdETE_ASSOCIATI_CAMPAGNE", columns={"cam_id"}), @ORM\Index(name="FK_ENQzUETE_ASSOCIATI_RAPPORT", columns={"rap_id"})})
 * @ORM\Entity
 */
class Enquete
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
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="desciption", type="string", length=254, nullable=true)
     */
    private $desciption;

    /**
     * @var integer
     *
     * @ORM\Column(name="qoutahomme", type="integer", nullable=false)
     */
    private $qoutahomme;

    /**
     * @var integer
     *
     * @ORM\Column(name="qoutafamme", type="integer", nullable=false)
     */
    private $qoutafamme;

    /**
     * @var \Campagne
     *
     * @ORM\ManyToOne(targetEntity="Campagne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cam_id", referencedColumnName="id")
     * })
     */
    private $cam;

    /**
     * @var \Rapport
     *
     * @ORM\ManyToOne(targetEntity="Rapport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rap_id", referencedColumnName="id")
     * })
     */
    private $rap;



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
     * @return Enquete
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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Enquete
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Enquete
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set desciption
     *
     * @param string $desciption
     * @return Enquete
     */
    public function setDesciption($desciption)
    {
        $this->desciption = $desciption;

        return $this;
    }

    /**
     * Get desciption
     *
     * @return string 
     */
    public function getDesciption()
    {
        return $this->desciption;
    }

    /**
     * Set qoutahomme
     *
     * @param integer $qoutahomme
     * @return Enquete
     */
    public function setQoutahomme($qoutahomme)
    {
        $this->qoutahomme = $qoutahomme;

        return $this;
    }

    /**
     * Get qoutahomme
     *
     * @return integer 
     */
    public function getQoutahomme()
    {
        return $this->qoutahomme;
    }

    /**
     * Set qoutafamme
     *
     * @param integer $qoutafamme
     * @return Enquete
     */
    public function setQoutafamme($qoutafamme)
    {
        $this->qoutafamme = $qoutafamme;

        return $this;
    }

    /**
     * Get qoutafamme
     *
     * @return integer 
     */
    public function getQoutafamme()
    {
        return $this->qoutafamme;
    }

    /**
     * Set cam
     *
     * @param \projet\symfony2Bundle\Entity\Campagne $cam
     * @return Enquete
     */
    public function setCam(\projet\symfony2Bundle\Entity\Campagne $cam = null)
    {
        $this->cam = $cam;

        return $this;
    }

    /**
     * Get cam
     *
     * @return \projet\symfony2Bundle\Entity\Campagne 
     */
    public function getCam()
    {
        return $this->cam;
    }

    /**
     * Set rap
     *
     * @param \projet\symfony2Bundle\Entity\Rapport $rap
     * @return Enquete
     */
    public function setRap(\projet\symfony2Bundle\Entity\Rapport $rap = null)
    {
        $this->rap = $rap;

        return $this;
    }

    /**
     * Get rap
     *
     * @return \projet\symfony2Bundle\Entity\Rapport 
     */
    public function getRap()
    {
        return $this->rap;
    }
}
