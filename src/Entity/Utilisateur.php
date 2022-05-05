<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Utilisateur
 *
 * @ORM\Table(name="UTILISATEUR", uniqueConstraints={@ORM\UniqueConstraint(name="I_FK_UTILISATEUR_HISTORIQUEMDP", columns={"IDHISTORIQUEMDP"})})
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="typeUser", type="string")
 * @ORM\DiscriminatorMap({"utilisateur" = "Utilisateur", "salarie" = "Salarie", "client" = "Client"})
 * @UniqueEntity(fields={"login"}, message="There is already an account with this login")
 */
class Utilisateur implements UserInterface
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
     * @ORM\Column(name="NOM", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOM", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOGIN", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $login;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MDP", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $mdp;

    /**
     * @var \Historiquemdp
     *
     * @ORM\ManyToOne(targetEntity="Historiquemdp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDHISTORIQUEMDP", referencedColumnName="IDHISTORIQUEMDP")
     * })
     */
    private $idhistoriquemdp;

    public function getIdutilisateur(): ?int
    {
        return $this->idutilisateur;
    }

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

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(?string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getIdhistoriquemdp(): ?Historiquemdp
    {
        return $this->idhistoriquemdp;
    }

    public function setIdhistoriquemdp(?Historiquemdp $idhistoriquemdp): self
    {
        $this->idhistoriquemdp = $idhistoriquemdp;

        return $this;
    }

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];
    /**
     * A visual identifier that represents this user.
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->login;
    }
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }
    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }
    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        // à remplacer éventuellement par la propriété contenant le mot de passe
        return $this->mdp;
    }

    public function setPassword(string $mdp): self
    {
        // à remplacer éventuellement par la propriété contenant le mot de passe
        $this->mdp = $mdp;
        return $this;
    }
    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }
    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}