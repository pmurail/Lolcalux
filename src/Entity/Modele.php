<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="MODELE")
 * @ORM\Entity
 */
class Modele
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDMODELE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodele;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $libelle = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TARIF", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $tarif = 'NULL';

    public function getIdmodele(): ?int
    {
        return $this->idmodele;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

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
