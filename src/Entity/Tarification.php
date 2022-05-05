<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarification
 *
 * @ORM\Table(name="TARIFICATION", indexes={@ORM\Index(name="I_FK_TARIFICATION_FORMULE", columns={"IDFORMULE"}), @ORM\Index(name="I_FK_TARIFICATION_MODELE", columns={"IDMODELE"})})
 * @ORM\Entity
 */
class Tarification
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDTARIFICATION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtarification;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TARIF", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $tarif;

    /**
     * @var \Modele
     *
     * @ORM\ManyToOne(targetEntity="Modele")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDMODELE", referencedColumnName="IDMODELE")
     * })
     */
    private $idmodele;

    /**
     * @var \Formule
     *
     * @ORM\ManyToOne(targetEntity="Formule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDFORMULE", referencedColumnName="IDFORMULE")
     * })
     */
    private $idformule;

    public function getIdtarification(): ?int
    {
        return $this->idtarification;
    }

    public function getTarif(): ?string
    {
        return $this->tarif;
    }

    public function setTarif(?string $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getIdmodele(): ?Modele
    {
        return $this->idmodele;
    }

    public function setIdmodele(?Modele $idmodele): self
    {
        $this->idmodele = $idmodele;

        return $this;
    }

    public function getIdformule(): ?Formule
    {
        return $this->idformule;
    }

    public function setIdformule(?Formule $idformule): self
    {
        $this->idformule = $idformule;

        return $this;
    }


}
