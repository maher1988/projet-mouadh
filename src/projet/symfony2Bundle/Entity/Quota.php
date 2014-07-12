<?php

namespace projet\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quota
 *
 * @ORM\Table(name="quota", indexes={@ORM\Index(name="FK_quota_AssSSOCIATI_ENQUETE", columns={"enq_id"})})
 * @ORM\Entity
 */
class Quota
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
     * @ORM\Column(name="intitulÃ©", type="string", length=254, nullable=true)
     */
    private $intitulã©;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=254, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="valeur", type="integer", nullable=true)
     */
    private $valeur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \Enquete
     *
     * @ORM\ManyToOne(targetEntity="Enquete")
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
     * Set intitulã©
     *
     * @param string $intitulã©
     * @return Quota
     */
    public function setIntitulã©($intitulã©)
    {
        $this->intitulã© = $intitulã©;

        return $this;
    }

    /**
     * Get intitulã©
     *
     * @return string 
     */
    public function getIntitulã©()
    {
        return $this->intitulã©;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Quota
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set valeur
     *
     * @param integer $valeur
     * @return Quota
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return integer 
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Quota
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set enq
     *
     * @param \projet\symfony2Bundle\Entity\Enquete $enq
     * @return Quota
     */
    public function setEnq(\projet\symfony2Bundle\Entity\Enquete $enq = null)
    {
        $this->enq = $enq;

        return $this;
    }

    /**
     * Get enq
     *
     * @return \projet\symfony2Bundle\Entity\Enquete 
     */
    public function getEnq()
    {
        return $this->enq;
    }
}
