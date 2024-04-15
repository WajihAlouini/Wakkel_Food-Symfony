<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="idCodePromo", columns={"idCodePromo"})})
 * @ORM\Entity(repositoryClass=App\Repository\EvenementRepository::class)
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEvent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevent;

    /**
     * @var string
     *
     * @ORM\Column(name="EventName", type="string", length=255, nullable=false)
     */
    private $eventname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDebut", type="date", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFin", type="date", nullable=false)
     */
    private $datefin;

    /**
     * @var \Codepromo
     *
     * @ORM\ManyToOne(targetEntity="Codepromo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCodePromo", referencedColumnName="idCodePromo")
     * })
     */
    private $idcodepromo;

    public function getIdevent(): ?int
    {
        return $this->idevent;
    }

    public function getEventname(): ?string
    {
        return $this->eventname;
    }

    public function setEventname(string $eventname): static
    {
        $this->eventname = $eventname;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(\DateTimeInterface $datedebut): static
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(\DateTimeInterface $datefin): static
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getIdcodepromo(): ?Codepromo
    {
        return $this->idcodepromo;
    }

    public function setIdcodepromo(?Codepromo $idcodepromo): static
    {
        $this->idcodepromo = $idcodepromo;

        return $this;
    }


}
