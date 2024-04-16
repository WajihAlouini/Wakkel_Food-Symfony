<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: "Nsc cannot be blank")]
    #[Assert\Length(
        max: 20,
        maxMessage: "Nsc cannot be longer than {{ limit }} characters"
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z0-9]+$/",
        message: "Nsc can only contain numbers and alphabets"
    )]
    private ?string $nsc = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Email cannot be blank")]
    #[Assert\Email(message: "The email '{{ value }}' is not a valid email.")]
    private ?string $email = null;

    #[ORM\ManyToOne(inversedBy: 'students')]
    private ?Classroom $class = null;


    #[ORM\ManyToMany(targetEntity: Club::class, inversedBy: 'students')]
    #[ORM\JoinTable(name:'student_club')]
    #[ORM\JoinColumn(name: "student_id", referencedColumnName: "nsc")]
    #[ORM\InverseJoinColumn(name: "club_id", referencedColumnName: "ref")]
    private Collection $club;

     


    public function __construct()
    {
        $this->club = new ArrayCollection();
    }

    /**
     * @return string|null
     */
    public function getNsc(): ?string
    {
        return $this->nsc;
    }

    /**
     * @param string|null $nsc
     */
    public function setNsc(?string $nsc): void
    {
        $this->nsc = $nsc;
    }



    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getClass(): ?Classroom
    {
        return $this->class;
    }

    public function setClass(?Classroom $class): self
    {
        $this->class = $class;

        return $this;
    }

    /**
     * @return Collection<int, Club>
     */
    public function getClub(): Collection
    {
        return $this->club;
    }

    public function addClub(Club $club): self
    {
        if (!$this->club->contains($club)) {
            $this->club->add($club);
        }

        return $this;
    }

    public function removeClub(Club $club): self
    {
        $this->club->removeElement($club);

        return $this;
    }

    public function isEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getMoyenne(): ?float
    {
        return $this->moyenne;
    }

    public function setMoyenne(float $moyenne): self
    {
        $this->moyenne = $moyenne;

        return $this;
    }

    public function getDeleteattribut(): ?int
    {
        return $this->deleteattribut;
    }

    public function setDeleteattribut(int $deleteattribut): self
    {
        $this->deleteattribut = $deleteattribut;

        return $this;
    }
}
