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
     * @var int|null
     *
     * @ORM\Column(name="IDRESTITUTION", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idrestitution = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TYPEDOMMAGE", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $typedommage = 'NULL';

    public function getIddommage(): ?int
    {
        return $this->iddommage;
    }

    public function getIdrestitution(): ?int
    {
        return $this->idrestitution;
    }

    public function setIdrestitution(?int $idrestitution): self
    {
        $this->idrestitution = $idrestitution;

        return $this;
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


}
