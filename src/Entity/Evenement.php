<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity]
#[UniqueEntity(fields: ['eventName'], message: 'There is already an account with this name')]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'idEvent', type: 'integer')]
    private ?int $idEvent;

    #[ORM\Column(name: 'EventName', length: 255)]
    #[Assert\NotBlank(message: "Le champ eventName ne doit pas être vide")]
    private ?string $eventName;

    #[ORM\Column(name: 'DateDebut', type: 'date')]
    private ?\DateTimeInterface $dateDebut;

    #[ORM\Column(name: 'DateFin', type: 'date')]
    private ?\DateTimeInterface $dateFin;

   

    public function getIdEvent(): ?int
    {
        return $this->idEvent;
    }

    public function getEventName(): ?string
    {
        return $this->eventName;
    }

    public function setEventName(?string $eventName): void
    {
        $this->eventName = $eventName;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): void
    {
        $this->dateDebut = $dateDebut;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): void
    {
        $this->dateFin = $dateFin;
    }
    public function __toString(): string
    {
        return $this->getIdEvent(); // Or any other property you want to use as a string representation
    }
}