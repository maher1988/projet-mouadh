<?php

namespace projet\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReponseDirige
 *
 * @ORM\Table(name="reponse_dirige", indexes={@ORM\Index(name="FK_REONSE__ASSOCIATI_FICHE", columns={"fic_id"}), @ORM\Index(name="FK_REPOE__ASSOCIATI_QUESTION", columns={"que_id"})})
 * @ORM\Entity
 */
class ReponseDirige
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
     * @ORM\Column(name="valeur", type="string", length=254, nullable=true)
     */
    private $valeur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rep", type="date", nullable=true)
     */
    private $dateRep;

    /**
     * @var \Fiche
     *
     * @ORM\ManyToOne(targetEntity="Fiche")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fic_id", referencedColumnName="id")
     * })
     */
    private $fic;

    /**
     * @var \QuestionDirige
     *
     * @ORM\ManyToOne(targetEntity="QuestionDirige")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="que_id", referencedColumnName="id")
     * })
     */
    private $que;



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
     * Set valeur
     *
     * @param string $valeur
     * @return ReponseDirige
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string 
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set dateRep
     *
     * @param \DateTime $dateRep
     * @return ReponseDirige
     */
    public function setDateRep($dateRep)
    {
        $this->dateRep = $dateRep;

        return $this;
    }

    /**
     * Get dateRep
     *
     * @return \DateTime 
     */
    public function getDateRep()
    {
        return $this->dateRep;
    }

    /**
     * Set fic
     *
     * @param \projet\symfony2Bundle\Entity\Fiche $fic
     * @return ReponseDirige
     */
    public function setFic(\projet\symfony2Bundle\Entity\Fiche $fic = null)
    {
        $this->fic = $fic;

        return $this;
    }

    /**
     * Get fic
     *
     * @return \projet\symfony2Bundle\Entity\Fiche 
     */
    public function getFic()
    {
        return $this->fic;
    }

    /**
     * Set que
     *
     * @param \projet\symfony2Bundle\Entity\QuestionDirige $que
     * @return ReponseDirige
     */
    public function setQue(\projet\symfony2Bundle\Entity\QuestionDirige $que = null)
    {
        $this->que = $que;

        return $this;
    }

    /**
     * Get que
     *
     * @return \projet\symfony2Bundle\Entity\QuestionDirige 
     */
    public function getQue()
    {
        return $this->que;
    }
}
