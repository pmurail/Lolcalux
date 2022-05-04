<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="VEHICULE", indexes={@ORM\Index(name="I_FK_VEHICULE_PARTIEVEHICULE", columns={"IDPARTIEVEHICULE"}), @ORM\Index(name="I_FK_VEHICULE_LOCATION", columns={"NUMLOCATION"}), @ORM\Index(name="I_FK_VEHICULE_MODELE", columns={"IDMODELE"})})
 * @ORM\Entity
 */
class Vehicule
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDVEHICULE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvehicule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IMMATRICULATION", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $immatriculation = 'NULL';

    /**
     * @var \Location
     *
     * @ORM\ManyToOne(targetEntity="Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NUMLOCATION", referencedColumnName="NUMLOCATION")
     * })
     */
    private $numlocation;

    /**
     * @var \Partievehicule
     *
     * @ORM\ManyToOne(targetEntity="Partievehicule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDPARTIEVEHICULE", referencedColumnName="IDPARTIEVEHICULE")
     * })
     */
    private $idpartievehicule;

    /**
     * @var \Modele
     *
     * @ORM\ManyToOne(targetEntity="Modele")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDMODELE", referencedColumnName="IDMODELE")
     * })
     */
    private $idmodele;

    public function getIdvehicule(): ?int
    {
        return $this->idvehicule;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getNumlocation(): ?Location
    {
        return $this->numlocation;
    }

    public function setNumlocation(?Location $numlocation): self
    {
        $this->numlocation = $numlocation;

        return $this;
    }

    public function getIdpartievehicule(): ?Partievehicule
    {
        return $this->idpartievehicule;
    }

    public function setIdpartievehicule(?Partievehicule $idpartievehicule): self
    {
        $this->idpartievehicule = $idpartievehicule;

        return $this;
    }

    public function getIdmodele(): ?Modele
    {
        return $this->idmodele;
    }

    public function setIdmodele(?Modele $idmodele): self
    {
        $this->idmodele = $idmodele;

        return $this;
    }


}
