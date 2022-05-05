<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formuleavecchauffeur
 *
 * @ORM\Table(name="FORMULEAVECCHAUFFEUR")
 * @ORM\Entity
 */
class Formuleavecchauffeur extends Formule
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="LIEU", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $lieu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TARIF", type="integer", nullable=true)
     */
    private $tarif;

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getTarif(): ?int
    {
        return $this->tarif;
    }

    public function setTarif(?int $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }


}
