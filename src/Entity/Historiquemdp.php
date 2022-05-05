<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historiquemdp
 *
 * @ORM\Table(name="HISTORIQUEMDP", indexes={@ORM\Index(name="I_FK_HISTORIQUEMDP_UTILISATEUR", columns={"IDUTILISATEUR"})})
 * @ORM\Entity
 */
class Historiquemdp
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDHISTORIQUEMDP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhistoriquemdp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ANCIENMDP", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $ancienmdp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATECREATIONMDP", type="datetime", nullable=true)
     */
    private $datecreationmdp;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDUTILISATEUR", referencedColumnName="IDUTILISATEUR")
     * })
     */
    private $idutilisateur;

    public function getIdhistoriquemdp(): ?int
    {
        return $this->idhistoriquemdp;
    }

    public function getAncienmdp(): ?string
    {
        return $this->ancienmdp;
    }

    public function setAncienmdp(?string $ancienmdp): self
    {
        $this->ancienmdp = $ancienmdp;

        return $this;
    }

    public function getDatecreationmdp(): ?\DateTimeInterface
    {
        return $this->datecreationmdp;
    }

    public function setDatecreationmdp(?\DateTimeInterface $datecreationmdp): self
    {
        $this->datecreationmdp = $datecreationmdp;

        return $this;
    }

    public function getIdutilisateur(): ?Utilisateur
    {
        return $this->idutilisateur;
    }

    public function setIdutilisateur(?Utilisateur $idutilisateur): self
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }


}
