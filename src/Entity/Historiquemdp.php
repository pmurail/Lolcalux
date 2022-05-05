<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historiquemdp
 *
 * @ORM\Table(name="HISTORIQUEMDP")
 * @ORM\Entity
 */
class Historiquemdp
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDUTILISATEUR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idutilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ANCIENMDP", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $ancienmdp;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATECREATIONMDP", type="datetime", nullable=true)
     */
    private $datecreationmdp;

    public function getIdutilisateur(): ?int
    {
        return $this->idutilisateur;
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


}
