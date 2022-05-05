<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locationavecchauffeur
 *
 * @ORM\Table(name="LOCATIONAVECCHAUFFEUR", indexes={@ORM\Index(name="I_FK_LOCATIONAVECCHAUFFEUR_FORMULEAVECCHAUFFEUR", columns={"IDFORMULE"})})
 * @ORM\Entity
 */
class Locationavecchauffeur extends Location
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOM", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $prenom;

    /**
     * @var \Formuleavecchauffeur
     *
     * @ORM\ManyToOne(targetEntity="Formuleavecchauffeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDFORMULE", referencedColumnName="IDFORMULE")
     * })
     */
    private $idformule;

   

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getIdformule(): ?Formuleavecchauffeur
    {
        return $this->idformule;
    }

    public function setIdformule(?Formuleavecchauffeur $idformule): self
    {
        $this->idformule = $idformule;

        return $this;
    }


}
