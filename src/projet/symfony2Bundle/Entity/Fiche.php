<?php

namespace projet\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fiche
 *
 * @ORM\Table(name="fiche", indexes={@ORM\Index(name="FK_FCHE_ASSOCIATI_REPONDAN", columns={"rep_id"}), @ORM\Index(name="FK_FIHE_ASSOCIATI_ENQUETEU", columns={"enq_id"})})
 * @ORM\Entity
 */
class Fiche
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_realisation", type="date", nullable=true)
     */
    private $dateRealisation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=254, nullable=true)
     */
    private $nom;

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
     * @var \Repondant
     *
     * @ORM\ManyToOne(targetEntity="Repondant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_id", referencedColumnName="id")
     * })
     */
    private $rep;

    /**
     * @var \Enqueteur
     *
     * @ORM\ManyToOne(targetEntity="Enqueteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enq_id", referencedColumnName="id")
     * })
     */
    private $enq;



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
     * Set dateRealisation
     *
     * @param \DateTime $dateRealisation
     * @return Fiche
     */
    public function setDateRealisation($dateRealisation)
    {
        $this->dateRealisation = $dateRealisation;

        return $this;
    }

    /**
     * Get dateRealisation
     *
     * @return \DateTime 
     */
    public function getDateRealisation()
    {
        return $this->dateRealisation;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Fiche
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
     * Set axeX
     *
     * @param integer $axeX
     * @return Fiche
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
     * @return Fiche
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
     * Set rep
     *
     * @param \projet\symfony2Bundle\Entity\Repondant $rep
     * @return Fiche
     */
    public function setRep(\projet\symfony2Bundle\Entity\Repondant $rep = null)
    {
        $this->rep = $rep;

        return $this;
    }

    /**
     * Get rep
     *
     * @return \projet\symfony2Bundle\Entity\Repondant 
     */
    public function getRep()
    {
        return $this->rep;
    }

    /**
     * Set enq
     *
     * @param \projet\symfony2Bundle\Entity\Enqueteur $enq
     * @return Fiche
     */
    public function setEnq(\projet\symfony2Bundle\Entity\Enqueteur $enq = null)
    {
        $this->enq = $enq;

        return $this;
    }

    /**
     * Get enq
     *
     * @return \projet\symfony2Bundle\Entity\Enqueteur 
     */
    public function getEnq()
    {
        return $this->enq;
    }
}
