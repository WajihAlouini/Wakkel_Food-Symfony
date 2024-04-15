<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="restaurant")
 * @ORM\Entity(repositoryClass="App\Repository\RestaurantRepository")
 */
class Restaurant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(name="id_restaurant", type="integer")
     */
    private $idRestaurant;

    /**
     * @ORM\Column(name="nom_restaurant", type="string", length=100, unique=true)
     * @Assert\NotBlank(message="Le nom du restaurant ne peut pas être vide.")
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Le nom du restaurant ne doit pas contenir de chiffres."
     * )
     */
    private $nomRestaurant;

    /**
     * @ORM\Column(name="adresse_restaurant", type="string", length=255)
     */
    private $adresseRestaurant;

    /**
     * @ORM\Column(name="restaurant_image", type="string", length=255)
     * @Assert\NotNull(message="L'image du restaurant ne peut pas être vide.")
     */
    private $restaurantImage;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RestaurantCategory")
     * @ORM\JoinColumn(name="id_category", referencedColumnName="id_category")
     * @Assert\NotNull(message="La catégorie de restaurant ne peut pas être vide.")
     */
    private $restaurantCategory;


    public function getIdRestaurant(): ?int
    {
        return $this->idRestaurant;
    }

    public function getNomRestaurant(): ?string
    {
        return $this->nomRestaurant;
    }

    public function setNomRestaurant(string $nomRestaurant): self
    {
        $this->nomRestaurant = $nomRestaurant;

        return $this;
    }

    public function getAdresseRestaurant(): ?string
    {
        return $this->adresseRestaurant;
    }

    public function setAdresseRestaurant(string $adresseRestaurant): self
    {
        $this->adresseRestaurant = $adresseRestaurant;

        return $this;
    }

    public function getRestaurantImage(): ?string
    {
        return $this->restaurantImage;
    }

    public function setRestaurantImage(?string $restaurantImage): self
    {
        $this->restaurantImage = $restaurantImage;

        return $this;
    }

    public function getRestaurantCategory(): ?RestaurantCategory
    {
        return $this->restaurantCategory;
    }

    public function setRestaurantCategory(?RestaurantCategory $restaurantCategory): self
    {
        $this->restaurantCategory = $restaurantCategory;

        return $this;
    }
}
