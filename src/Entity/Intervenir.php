<?php

namespace App\Entity;

use App\Repository\IntervenirRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IntervenirRepository::class)]
class Intervenir
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $nbHeures = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Stage $stage = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Specialiste $specialiste = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbHeures(): ?int
    {
        return $this->nbHeures;
    }

    public function setNbHeures(int $nbHeures): self
    {
        $this->nbHeures = $nbHeures;

        return $this;
    }

    public function getStage(): ?Stage
    {
        return $this->stage;
    }

    public function setStage(?Stage $stage): self
    {
        $this->stage = $stage;

        return $this;
    }

    public function getSpecialiste(): ?Specialiste
    {
        return $this->specialiste;
    }

    public function setSpecialiste(?Specialiste $specialiste): self
    {
        $this->specialiste = $specialiste;

        return $this;
    }
}
