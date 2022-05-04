<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trajet
 *
 * @ORM\Table(name="TRAJET")
 * @ORM\Entity
 */
class Trajet
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDTRAJET", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtrajet;

    /**
     * @var string
     *
     * @ORM\Column(name="LIEUDEPART", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $lieudepart;

    /**
     * @var string
     *
     * @ORM\Column(name="LIEUARRIVEE", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $lieuarrivee;

    public function getIdtrajet(): ?int
    {
        return $this->idtrajet;
    }

    public function getLieudepart(): ?string
    {
        return $this->lieudepart;
    }

    public function setLieudepart(string $lieudepart): self
    {
        $this->lieudepart = $lieudepart;

        return $this;
    }

    public function getLieuarrivee(): ?string
    {
        return $this->lieuarrivee;
    }

    public function setLieuarrivee(string $lieuarrivee): self
    {
        $this->lieuarrivee = $lieuarrivee;

        return $this;
    }


}
