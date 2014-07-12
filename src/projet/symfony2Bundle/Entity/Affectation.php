<?php

namespace projet\symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affectation
 *
 * @ORM\Table(name="affectation", indexes={@ORM\Index(name="FK_AFFECTATg_ASSOCIATI_ENQUETE", columns={"enq_id"}), @ORM\Index(name="FK_AFFECTAfT_ASSOCIATI_EQUIPE", columns={"equ_id"})})
 * @ORM\Entity
 */
class Affectation
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
     * @ORM\Column(name="date_affectation", type="date", nullable=true)
     */
    private $dateAffectation;

    /**
     * @var \Equip
     *
     * @ORM\ManyToOne(targetEntity="Equip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equ_id", referencedColumnName="id")
     * })
     */
    private $equ;

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
     * Set dateAffectation
     *
     * @param \DateTime $dateAffectation
     * @return Affectation
     */
    public function setDateAffectation($dateAffectation)
    {
        $this->dateAffectation = $dateAffectation;

        return $this;
    }

    /**
     * Get dateAffectation
     *
     * @return \DateTime 
     */
    public function getDateAffectation()
    {
        return $this->dateAffectation;
    }

    /**
     * Set equ
     *
     * @param \projet\symfony2Bundle\Entity\Equip $equ
     * @return Affectation
     */
    public function setEqu(\projet\symfony2Bundle\Entity\Equip $equ = null)
    {
        $this->equ = $equ;

        return $this;
    }

    /**
     * Get equ
     *
     * @return \projet\symfony2Bundle\Entity\Equip 
     */
    public function getEqu()
    {
        return $this->equ;
    }

    /**
     * Set enq
     *
     * @param \projet\symfony2Bundle\Entity\Enquete $enq
     * @return Affectation
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
