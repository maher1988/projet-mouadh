<?php

namespace projet\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="FK_Associatio", columns={"id_chef"})})
 * @ORM\Entity
 */
class Message
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
     * @ORM\Column(name="description", type="string", length=254, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datem", type="date", nullable=false)
     */
    private $datem;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=254, nullable=true)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="destinataire", type="string", length=254, nullable=true)
     */
    private $destinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="expeditaur", type="string", length=254, nullable=true)
     */
    private $expeditaur;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=254, nullable=true)
     */
    private $objet;

    /**
     * @var \ChefDEnquete
     *
     * @ORM\ManyToOne(targetEntity="ChefDEnquete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_chef", referencedColumnName="id")
     * })
     */
    private $idChef;



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
     * Set description
     *
     * @param string $description
     * @return Message
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
     * Set datem
     *
     * @param \DateTime $datem
     * @return Message
     */
    public function setDatem($datem)
    {
        $this->datem = $datem;

        return $this;
    }

    /**
     * Get datem
     *
     * @return \DateTime 
     */
    public function getDatem()
    {
        return $this->datem;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return Message
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set destinataire
     *
     * @param string $destinataire
     * @return Message
     */
    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    /**
     * Get destinataire
     *
     * @return string 
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Set expeditaur
     *
     * @param string $expeditaur
     * @return Message
     */
    public function setExpeditaur($expeditaur)
    {
        $this->expeditaur = $expeditaur;

        return $this;
    }

    /**
     * Get expeditaur
     *
     * @return string 
     */
    public function getExpeditaur()
    {
        return $this->expeditaur;
    }

    /**
     * Set objet
     *
     * @param string $objet
     * @return Message
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string 
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set idChef
     *
     * @param \projet\symfony2Bundle\Entity\ChefDEnquete $idChef
     * @return Message
     */
    public function setIdChef(\projet\symfony2Bundle\Entity\ChefDEnquete $idChef = null)
    {
        $this->idChef = $idChef;

        return $this;
    }

    /**
     * Get idChef
     *
     * @return \projet\symfony2Bundle\Entity\ChefDEnquete 
     */
    public function getIdChef()
    {
        return $this->idChef;
    }
}
