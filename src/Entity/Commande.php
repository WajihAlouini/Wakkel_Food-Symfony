<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="App\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_commande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommande;

    /**
     * @var int
     *
     * @ORM\Column(name="statusCommande", type="integer", nullable=false)
     * @Assert\NotBlank(message="Le statut de la commande ne peut pas être vide.")
     * @Assert\Choice(choices={0, 1, 2}, message="Le statut de la commande doit être 0, 1 ou 2.")
     */
    private $statusCommande;

    /**
     * @var int
     *
     * @ORM\Column(name="prixTotale", type="integer", nullable=false)
     * @Assert\NotBlank(message="Le prix total ne peut pas être vide.")
     * @Assert\PositiveOrZero(message="Le prix total doit être un nombre positif ou zéro.")
     */
    private $prix;

    // Getters and setters...

    public function getIdCommande(): ?int
    {
        return $this->idCommande;
    }

    public function getStatusCommande(): ?int
    {
        return $this->statusCommande;
    }

    public function setStatusCommande(int $statusCommande): static
    {
        $this->statusCommande = $statusCommande;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): static
    {
        $this->prix = $prix;

        return $this;
    }
}
