<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partievehicule
 *
 * @ORM\Table(name="PARTIEVEHICULE")
 * @ORM\Entity
 */
class Partievehicule
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDPARTIEVEHICULE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpartievehicule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PIECE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $piece;

    public function getIdpartievehicule(): ?int
    {
        return $this->idpartievehicule;
    }

    public function getPiece(): ?string
    {
        return $this->piece;
    }

    public function setPiece(?string $piece): self
    {
        $this->piece = $piece;

        return $this;
    }


}
