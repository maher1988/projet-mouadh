<?php

namespace projet\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChoixDirige
 *
 * @ORM\Table(name="choix_dirige", indexes={@ORM\Index(name="FK_CHOIX_cDI_ASSOCIATI_QUESTION", columns={"que_id"})})
 * @ORM\Entity
 */
class ChoixDirige
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
     * @return ChoixDirige
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
     * @param \projet\symfony2Bundle\Entity\QuestionDirige $que
     * @return ChoixDirige
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
