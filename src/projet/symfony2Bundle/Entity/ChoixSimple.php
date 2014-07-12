<?php

namespace projet\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChoixSimple
 *
 * @ORM\Table(name="choix_simple", indexes={@ORM\Index(name="FK_CHOIXq_SI_ASSOCIATI_QUESTION", columns={"que_id"})})
 * @ORM\Entity
 */
class ChoixSimple
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
     * @var \QuestionSimple
     *
     * @ORM\ManyToOne(targetEntity="QuestionSimple")
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
     * @return ChoixSimple
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
     * Set que
     *
     * @param \projet\symfony2Bundle\Entity\QuestionSimple $que
     * @return ChoixSimple
     */
    public function setQue(\projet\symfony2Bundle\Entity\QuestionSimple $que = null)
    {
        $this->que = $que;

        return $this;
    }

    /**
     * Get que
     *
     * @return \projet\symfony2Bundle\Entity\QuestionSimple 
     */
    public function getQue()
    {
        return $this->que;
    }
}
