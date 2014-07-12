<?php

namespace projet\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questionnaire
 *
 * @ORM\Table(name="questionnaire", indexes={@ORM\Index(name="FK_QUESTION_AssSSOCIATI_ENQUETE", columns={"enq_id"})})
 * @ORM\Entity
 */
class Questionnaire
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
     * @ORM\Column(name="titre", type="string", length=254, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

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
     * Set titre
     *
     * @param string $titre
     * @return Questionnaire
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Questionnaire
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Questionnaire
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
     * @return Questionnaire
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
