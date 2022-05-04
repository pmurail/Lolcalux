<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salarie
 *
 * @ORM\Table(name="SALARIE")
 * @ORM\Entity
 */
class Salarie extends Utilisateur
{

    /**
     * @var string|null
     *
     * @ORM\Column(name="POSTE", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $poste = 'NULL';

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(?string $poste): self
    {
        $this->poste = $poste;

        return $this;
    }


}
