<?php

namespace projet\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rapport
 *
 * @ORM\Table(name="rapport", indexes={@ORM\Index(name="FK_APPORT_ASSOCIATI_ENQUETE", columns={"enq_id"})})
 * @ORM\Entity
 */
class Rapport
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
     * @ORM\Column(name="contenu", type="text", nullable=true)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=254, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

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
     * Set contenu
     *
     * @param string $contenu
     * @return Rapport
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Rapport
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
     * Set titre
     *
     * @param string $titre
     * @return Rapport
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
     * Set path
     *
     * @param string $path
     * @return Rapport
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set enq
     *
     * @param \projet\symfony2Bundle\Entity\Enquete $enq
     * @return Rapport
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
