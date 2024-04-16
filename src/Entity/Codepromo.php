<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Codepromo
 *
 * @ORM\Table(name="codepromo")
 * @ORM\Entity(repositoryClass=App\Repository\CodePromoRepository::class)
 */
class Codepromo
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCodePromo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcodepromo;

    /**
     * @var string
     *
     * @ORM\Column(name="Code", type="string", length=20, nullable=false)
     */
    private $code;

    public function getIdcodepromo(): ?int
    {
        return $this->idcodepromo;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;

        return $this;
    }


}
