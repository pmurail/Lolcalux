<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locationsanschauffeur
 *
 * @ORM\Table(name="LOCATIONSANSCHAUFFEUR", indexes={@ORM\Index(name="I_FK_LOCATIONSANSCHAUFFEUR_FORMULESANSCHAUFFEUR", columns={"IDFORMULE"})})
 * @ORM\Entity
 */
class Locationsanschauffeur extends Location
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="NBKMDEPART", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nbkmdepart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NBKMRETOUR", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nbkmretour;

    /**
     * @var \Formulesanschauffeur
     *
     * @ORM\ManyToOne(targetEntity="Formulesanschauffeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDFORMULE", referencedColumnName="IDFORMULE")
     * })
     */
    private $idformule;

    

    public function getNbkmdepart(): ?string
    {
        return $this->nbkmdepart;
    }

    public function setNbkmdepart(?string $nbkmdepart): self
    {
        $this->nbkmdepart = $nbkmdepart;

        return $this;
    }

    public function getNbkmretour(): ?string
    {
        return $this->nbkmretour;
    }

    public function setNbkmretour(?string $nbkmretour): self
    {
        $this->nbkmretour = $nbkmretour;

        return $this;
    }

    public function getIdformule(): ?Formulesanschauffeur
    {
        return $this->idformule;
    }

    public function setIdformule(?Formulesanschauffeur $idformule): self
    {
        $this->idformule = $idformule;

        return $this;
    }


}
