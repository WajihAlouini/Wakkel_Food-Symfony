<?php
namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use App\Enum\ClientGenre;
use App\Enum\ClientRole;


use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;


#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_client")]
    private ?int $id_client;

    #[ORM\Column(type: "string", length: 255, enumType: ClientRole::class)]
    private ClientRole $role;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Le nom ne peut pas être vide")]
    private ?string $nom_c;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Le prénom ne peut pas être vide")]
    private ?string $prenom_c;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "L'email ne peut pas être vide")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas valide")]
    private ?string $email_c;

    #[ORM\Column(name: "mdp", type: "string", length: 500)]
    private ?string $mdp;

    #[ORM\Column(name: "numero_c", type: "integer")]
    private ?int $numero_c;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $adresse_c;

    #[ORM\Column(type: "string", length: 255, enumType: ClientGenre::class)]
    private ClientGenre $genre;

    #[ORM\Column(name: "image", type: "string", length: 500, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(name: "banned", type: "boolean")]
    private bool $banned = false;

    public function getIdClient(): ?int
    {
        return $this->id_client;
    }

    public function getRole(): ClientRole
    {
        return $this->role;
    }

    public function setRole(ClientRole $Role): self
    {
        $this->role = $Role;

        return $this;
    }

    public function getNomC(): ?string
    {
        return $this->nom_c;
    }

    public function setNomC(?string $nom_c): self
    {
        $this->nom_c = $nom_c;

        return $this;
    }

    public function getPrenomC(): ?string
    {
        return $this->prenom_c;
    }

    public function setPrenomC(?string $prenom_c): self
    {
        $this->prenom_c = $prenom_c;

        return $this;
    }

    public function getEmailC(): ?string
    {
        return $this->email_c;
    }

    public function setEmailC(?string $email_c): self
    {
        $this->email_c = $email_c;

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

    public function getNumeroC(): ?int
    {
        return $this->numero_c;
    }

    public function setNumeroC(?int $numero_c): self
    {
        $this->numero_c = $numero_c;

        return $this;
    }

    public function getAdresseC(): ?string
    {
        return $this->adresse_c;
    }

    public function setAdresseC(?string $adresse_c): self
    {
        $this->adresse_c = $adresse_c;

        return $this;
    }

    public function getGenre(): ClientGenre
    {
        return $this->genre;
    }

    public function setGenre(ClientGenre $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function isBanned(): bool
    {
        return $this->banned;
    }

    public function setBanned(bool $banned): self
    {
        $this->banned = $banned;

        return $this;
    }
    public function getRoles(): array
    {
        return [$this->role->value];
    }
    public function getUsername(): ?string
    {
        return $this->email_c;
    }

    public function getPassword(): ?string
    {
        return $this->mdp;
    }

    public function getSalt()
    {
        // You can return null if you're not using a salt
        return null;
    }

    public function eraseCredentials()
    {
        // If you store any sensitive data on the user, clear it out here
    }
}
