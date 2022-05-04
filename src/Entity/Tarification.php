<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarification
 *
 * @ORM\Table(name="TARIFICATION", indexes={@ORM\Index(name="I_FK_TARIFICATION_MODELE", columns={"IDMODELE"}), @ORM\Index(name="I_FK_TARIFICATION_FORMULE", columns={"IDFORMULE"})})
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
     * @var int
     *
     * @ORM\Column(name="IDFORMULE", type="integer", nullable=false)
     */
    private $idformule;

    /**
     * @var int
     *
     * @ORM\Column(name="IDMODELE", type="integer", nullable=false)
     */
    private $idmodele;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TARIF", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $tarif = 'NULL';

    public function getIdtarification(): ?int
    {
        return $this->idtarification;
    }

    public function getIdformule(): ?int
    {
        return $this->idformule;
    }

    public function setIdformule(int $idformule): self
    {
        $this->idformule = $idformule;

        return $this;
    }

    public function getIdmodele(): ?int
    {
        return $this->idmodele;
    }

    public function setIdmodele(int $idmodele): self
    {
        $this->idmodele = $idmodele;

        return $this;
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


}
