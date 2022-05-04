<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="CLIENT")
 * @ORM\Entity
 */
class Client extends Utilisateur
{

    /**
     * @var string|null
     *
     * @ORM\Column(name="TEL", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMAIL", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RUE", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $rue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CP", type="string", length=5, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $cp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VILLE", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $ville;


    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(?string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(?string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }


}
