<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="LOCATION", uniqueConstraints={@ORM\UniqueConstraint(name="I_FK_LOCATION_TRAJET", columns={"IDTRAJET"})}, indexes={@ORM\Index(name="I_FK_LOCATION_CLIENT", columns={"IDUTILISATEUR"})})
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="typeLocation", type="string")
 * @ORM\DiscriminatorMap({"location" = "Location", "locationavecchauffeur" = "Locationavecchauffeur", "locationsanschauffeur" = "Locationsanschauffeur"})
 */

class Location 
{
    /**
     * @var int
     *
     * @ORM\Column(name="NUMLOCATION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numlocation;

    /**
     * @var int
     *
     * @ORM\Column(name="IDTRAJET", type="integer", nullable=false)
     */
    private $idtrajet;

    /**
     * @var string
     *
     * @ORM\Column(name="IDUTILISATEUR", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $idutilisateur;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATELOCATION", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $datelocation = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MONTANT", type="decimal", precision=10, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $montant = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHEUREDEPARTP", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dateheuredepartp = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HATEHEURERETOURP", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $hateheureretourp = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHEUREDEPARTR", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dateheuredepartr = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHEURERETOURR", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dateheureretourr = 'NULL';

    public function getNumlocation(): ?int
    {
        return $this->numlocation;
    }

    public function getIdtrajet(): ?int
    {
        return $this->idtrajet;
    }

    public function setIdtrajet(int $idtrajet): self
    {
        $this->idtrajet = $idtrajet;

        return $this;
    }

    public function getIdutilisateur(): ?string
    {
        return $this->idutilisateur;
    }

    public function setIdutilisateur(string $idutilisateur): self
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    public function getDatelocation(): ?\DateTimeInterface
    {
        return $this->datelocation;
    }

    public function setDatelocation(?\DateTimeInterface $datelocation): self
    {
        $this->datelocation = $datelocation;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(?string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDateheuredepartp(): ?\DateTimeInterface
    {
        return $this->dateheuredepartp;
    }

    public function setDateheuredepartp(?\DateTimeInterface $dateheuredepartp): self
    {
        $this->dateheuredepartp = $dateheuredepartp;

        return $this;
    }

    public function getHateheureretourp(): ?\DateTimeInterface
    {
        return $this->hateheureretourp;
    }

    public function setHateheureretourp(?\DateTimeInterface $hateheureretourp): self
    {
        $this->hateheureretourp = $hateheureretourp;

        return $this;
    }

    public function getDateheuredepartr(): ?\DateTimeInterface
    {
        return $this->dateheuredepartr;
    }

    public function setDateheuredepartr(?\DateTimeInterface $dateheuredepartr): self
    {
        $this->dateheuredepartr = $dateheuredepartr;

        return $this;
    }

    public function getDateheureretourr(): ?\DateTimeInterface
    {
        return $this->dateheureretourr;
    }

    public function setDateheureretourr(?\DateTimeInterface $dateheureretourr): self
    {
        $this->dateheureretourr = $dateheureretourr;

        return $this;
    }


}
