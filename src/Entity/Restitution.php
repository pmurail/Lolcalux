<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Restitution
 *
 * @ORM\Table(name="RESTITUTION", uniqueConstraints={@ORM\UniqueConstraint(name="I_FK_RESTITUTION_LOCATION", columns={"NUMLOCATION"})})
 * @ORM\Entity
 */
class Restitution
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDRESTITUTION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrestitution;

    /**
     * @var int|null
     *
     * @ORM\Column(name="KILOMETRAGE", type="bigint", nullable=true)
     */
    private $kilometrage;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATERESTITUTION", type="datetime", nullable=true)
     */
    private $daterestitution;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OBSERVATIONS", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $observations;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ESTIMATIONCOUTS", type="integer", nullable=true)
     */
    private $estimationcouts;

    /**
     * @var \Location
     *
     * @ORM\ManyToOne(targetEntity="Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NUMLOCATION", referencedColumnName="NUMLOCATION")
     * })
     */
    private $numlocation;

    public function getIdrestitution(): ?int
    {
        return $this->idrestitution;
    }

    public function getKilometrage(): ?string
    {
        return $this->kilometrage;
    }

    public function setKilometrage(?string $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getDaterestitution(): ?\DateTimeInterface
    {
        return $this->daterestitution;
    }

    public function setDaterestitution(?\DateTimeInterface $daterestitution): self
    {
        $this->daterestitution = $daterestitution;

        return $this;
    }

    public function getObservations(): ?string
    {
        return $this->observations;
    }

    public function setObservations(?string $observations): self
    {
        $this->observations = $observations;

        return $this;
    }

    public function getEstimationcouts(): ?int
    {
        return $this->estimationcouts;
    }

    public function setEstimationcouts(?int $estimationcouts): self
    {
        $this->estimationcouts = $estimationcouts;

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


}
