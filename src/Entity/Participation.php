<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Participation
{
        #[ORM\Id]
        #[ORM\GeneratedValue]
        #[ORM\Column(name: 'idP')]
        private ?int $idP;
    
        #[ORM\Column(name: 'idUser', type: 'integer')]
        #[Assert\NotBlank]
        private ?int $idUser;
    
        #[ORM\Column(name: 'nbrPlace', type: 'integer')]
        #[Assert\NotBlank]
        #[Assert\PositiveOrZero]
        private ?int $nbrPlace;
    
        #[ORM\Column(name: 'emailUser', type: 'string', length: 255)]
        #[Assert\NotBlank]
        #[Assert\Email]
        private ?string $emailUser;
    
        #[ORM\ManyToOne(targetEntity: Evenement::class, cascade: ['persist'])]
        #[ORM\JoinColumn(name: "idEvent", referencedColumnName: "idEvent", nullable: false)]
        private ?Evenement $idEvent = null;

    public function getIdP(): ?int
    {
        return $this->idP;
    }

    public function setIdP(?int $idP): void
    {
        $this->idP = $idP;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): void
    {
        $this->idUser = $idUser;
    }

    public function getNbrPlace(): ?int
    {
        return $this->nbrPlace;
    }

    public function setNbrPlace(?int $nbrPlace): void
    {
        $this->nbrPlace = $nbrPlace;
    }

    public function getEmailUser(): ?string
    {
        return $this->emailUser;
    }

    public function setEmailUser(?string $emailUser): void
    {
        $this->emailUser = $emailUser;
    }

    public function getIdEvent(): ?Evenement
    {
        return $this->idEvent;
    }

    public function setIdEvent(Evenement $idEvent): static
    {
        $this->idEvent = $idEvent;
        return $this;
    }

    public function __toString(): string
    {
        return (string) $this->getIdP();
    }
}
