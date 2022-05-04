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
     * @ORM\Column(name="IDHISTORIQUEMDP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhistoriquemdp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ANCIENMDP", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $ancienmdp = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATECREATIONMDP", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $datecreationmdp = 'NULL';

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


}
