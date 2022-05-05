<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulesanschauffeur
 *
 * @ORM\Table(name="FORMULESANSCHAUFFEUR")
 * @ORM\Entity
 */
class Formulesanschauffeur extends Formule
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DUREE", type="time", nullable=true)
     */
    private $duree;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NBKMINCLUS", type="integer", nullable=true)
     */
    private $nbkminclus;



    public function getDuree(): ?\DateTimeInterface
    {
        return $this->duree;
    }

    public function setDuree(?\DateTimeInterface $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getNbkminclus(): ?int
    {
        return $this->nbkminclus;
    }

    public function setNbkminclus(?int $nbkminclus): self
    {
        $this->nbkminclus = $nbkminclus;

        return $this;
    }


}
