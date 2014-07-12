<?php

namespace projet\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageEnqSup
 *
 * @ORM\Table(name="message_enq_sup", indexes={@ORM\Index(name="FK_Associatioo", columns={"id_equipe"})})
 * @ORM\Entity
 */
class MessageEnqSup
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
     * @var \Equip
     *
     * @ORM\ManyToOne(targetEntity="Equip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipe", referencedColumnName="id")
     * })
     */
    private $idEquipe;



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
     * @return MessageEnqSup
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
     * @return MessageEnqSup
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
     * @return MessageEnqSup
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
     * @return MessageEnqSup
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
     * @return MessageEnqSup
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
     * @return MessageEnqSup
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
     * Set idEquipe
     *
     * @param \projet\symfony2Bundle\Entity\Equip $idEquipe
     * @return MessageEnqSup
     */
    public function setIdEquipe(\projet\symfony2Bundle\Entity\Equip $idEquipe = null)
    {
        $this->idEquipe = $idEquipe;

        return $this;
    }

    /**
     * Get idEquipe
     *
     * @return \projet\symfony2Bundle\Entity\Equip 
     */
    public function getIdEquipe()
    {
        return $this->idEquipe;
    }
}
