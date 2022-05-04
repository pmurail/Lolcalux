<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formule
 *
 * @ORM\Table(name="FORMULE")
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="typeFormule", type="string")
 * @ORM\DiscriminatorMap({"formule" = "Formule", "formuleavecchauffeur" = "Formuleavecchauffeur", "formulesanschauffeur" = "Formulesanschauffeur"})
 */
class Formule
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDFORMULE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $libelle = 'NULL';

    public function getIdformule(): ?int
    {
        return $this->idformule;
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


}
