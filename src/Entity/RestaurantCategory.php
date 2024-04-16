<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * RestaurantCategory
 *
 * @ORM\Table(name="restaurant_category", uniqueConstraints={@ORM\UniqueConstraint(name="category_name", columns={"category_name"})})
 * @ORM\Entity(repositoryClass=App\Repository\RestaurantCategoryRepository::class)
 */
class RestaurantCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_name", type="string", length=255, nullable=true, unique=true)
     * @Assert\NotBlank(message="Category name cannot be empty.")
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Category name cannot contain numbers."
     * )
     */
    private $categoryName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_image", type="string", length=255, nullable=true)
     */
    private $categoryImage;

    public function getIdCategory(): ?int
    {
        return $this->idCategory;
    }

    public function getCategoryName(): ?string
    {
        return $this->categoryName;
    }

    public function setCategoryName(?string $categoryName): static
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    public function getCategoryImage(): ?string
    {
        return $this->categoryImage;
    }

    public function setCategoryImage(?string $categoryImage): static
    {
        $this->categoryImage = $categoryImage;

        return $this;
    }


}
