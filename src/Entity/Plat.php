<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Validator as AppAssert;

/**
 * Plat
 *
 * @ORM\Table(name="plat", indexes={@ORM\Index(name="id_restaurant", columns={"id_restaurant"})})
 * @ORM\Entity(repositoryClass=App\Repository\PlatRepository::class)
 */
class Plat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_plat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlat;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_plat", type="string", length=100, nullable=false)
     * @Assert\NotBlank(message="Le nom du plat ne peut pas être vide.")
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Le nom du plat ne peut pas contenir de chiffres."
     * )
     */
    private $nomPlat;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=true)
     * @Assert\NotBlank(message="Le prix ne peut pas être vide.")
     * @Assert\Type(
     *     type="float",
     *     message="Le prix doit être un nombre."
     * )
     */
    private $prix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ingredient", type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="The ingredient field cannot be empty.")
     */
    private $ingredient;


    /**
     * @var string|null
     *
     * @ORM\Column(name="plat_image", type="string", length=200, nullable=true)
     */
    private $platImage;

    /**
     * @var \App\Entity\Restaurant
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Restaurant")
     * @ORM\JoinColumn(name="id_restaurant", referencedColumnName="id_restaurant")
     */
    private $restaurant;

    public function getIdPlat(): ?int
    {
        return $this->idPlat;
    }

    public function getNomPlat(): ?string
    {
        return $this->nomPlat;
    }

    public function setNomPlat(string $nomPlat): static
    {
        $this->nomPlat = $nomPlat;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getIngredient(): ?string
    {
        return $this->ingredient;
    }

    public function setIngredient(?string $ingredient): static
    {
        $this->ingredient = $ingredient;

        return $this;
    }


    public function getPlatImage(): ?string
    {
        return $this->platImage;
    }

    public function setPlatImage(?string $platImage): static
    {
        $this->platImage = $platImage;

        return $this;
    }

    public function getRestaurant(): ?Restaurant
    {
        return $this->restaurant;
    }

    public function setRestaurant(?Restaurant $restaurant): self
    {
        $this->restaurant = $restaurant;

        return $this;
    }


}
