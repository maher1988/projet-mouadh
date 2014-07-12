<?php

namespace projet\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionSimple
 *
 * @ORM\Table(name="question_simple", indexes={@ORM\Index(name="FKQUESTION_ASSOCIATI_QUESTION", columns={"Que_id"}), @ORM\Index(name="HOIX_DI", columns={"choix_dirige_id"})})
 * @ORM\Entity
 */
class QuestionSimple
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
     * @ORM\Column(name="intitule", type="string", length=254, nullable=true)
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="type_choix", type="string", length=254, nullable=true)
     */
    private $typeChoix;

    /**
     * @var string
     *
     * @ORM\Column(name="text_aide", type="string", length=254, nullable=true)
     */
    private $textAide;

    /**
     * @var \Questionnaire
     *
     * @ORM\ManyToOne(targetEntity="Questionnaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Que_id", referencedColumnName="id")
     * })
     */
    private $que;

    /**
     * @var \ChoixDirige
     *
     * @ORM\ManyToOne(targetEntity="ChoixDirige")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="choix_dirige_id", referencedColumnName="id")
     * })
     */
    private $choixDirige;



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
     * Set intitule
     *
     * @param string $intitule
     * @return QuestionSimple
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set typeChoix
     *
     * @param string $typeChoix
     * @return QuestionSimple
     */
    public function setTypeChoix($typeChoix)
    {
        $this->typeChoix = $typeChoix;

        return $this;
    }

    /**
     * Get typeChoix
     *
     * @return string 
     */
    public function getTypeChoix()
    {
        return $this->typeChoix;
    }

    /**
     * Set textAide
     *
     * @param string $textAide
     * @return QuestionSimple
     */
    public function setTextAide($textAide)
    {
        $this->textAide = $textAide;

        return $this;
    }

    /**
     * Get textAide
     *
     * @return string 
     */
    public function getTextAide()
    {
        return $this->textAide;
    }

    /**
     * Set que
     *
     * @param \projet\symfony2Bundle\Entity\Questionnaire $que
     * @return QuestionSimple
     */
    public function setQue(\projet\symfony2Bundle\Entity\Questionnaire $que = null)
    {
        $this->que = $que;

        return $this;
    }

    /**
     * Get que
     *
     * @return \projet\symfony2Bundle\Entity\Questionnaire 
     */
    public function getQue()
    {
        return $this->que;
    }

    /**
     * Set choixDirige
     *
     * @param \projet\symfony2Bundle\Entity\ChoixDirige $choixDirige
     * @return QuestionSimple
     */
    public function setChoixDirige(\projet\symfony2Bundle\Entity\ChoixDirige $choixDirige = null)
    {
        $this->choixDirige = $choixDirige;

        return $this;
    }

    /**
     * Get choixDirige
     *
     * @return \projet\symfony2Bundle\Entity\ChoixDirige 
     */
    public function getChoixDirige()
    {
        return $this->choixDirige;
    }
}
