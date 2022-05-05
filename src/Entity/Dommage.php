<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dommage
 *
 * @ORM\Table(name="DOMMAGE", indexes={@ORM\Index(name="I_FK_DOMMAGE_RESTITUTION", columns={"IDRESTITUTION"})})
 * @ORM\Entity
 */
class Dommage
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDDOMMAGE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddommage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TYPEDOMMAGE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $typedommage;

    /**
     * @var \Restitution
     *
     * @ORM\ManyToOne(targetEntity="Restitution")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDRESTITUTION", referencedColumnName="IDRESTITUTION")
     * })
     */
    private $idrestitution;

    public function getIddommage(): ?int
    {
        return $this->iddommage;
    }

    public function getTypedommage(): ?string
    {
        return $this->typedommage;
    }

    public function setTypedommage(?string $typedommage): self
    {
        $this->typedommage = $typedommage;

        return $this;
    }

    public function getIdrestitution(): ?Restitution
    {
        return $this->idrestitution;
    }

    public function setIdrestitution(?Restitution $idrestitution): self
    {
        $this->idrestitution = $idrestitution;

        return $this;
    }


}
