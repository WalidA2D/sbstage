<?php

namespace App\Entity;

use App\Repository\StageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StageRepository::class)]
class Stage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $DateDebut = null;

    #[ORM\Column]
    private ?int $nbJours = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Animateur $animateur = null;

    #[ORM\ManyToMany(targetEntity: Client::class, inversedBy: 'stages')]
    private Collection $client;

    public function __construct()
    {
        $this->client = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->DateDebut;
    }

    public function setDateDebut(\DateTimeInterface $DateDebut): self
    {
        $this->DateDebut = $DateDebut;

        return $this;
    }

    public function getNbJours(): ?int
    {
        return $this->nbJours;
    }

    public function setNbJours(int $nbJours): self
    {
        $this->nbJours = $nbJours;

        return $this;
    }

    public function getAnimateur(): ?Animateur
    {
        return $this->animateur;
    }

    public function setAnimateur(?Animateur $animateur): self
    {
        $this->animateur = $animateur;

        return $this;
    }

    /**
     * @return Collection<int, Client>
     */
    public function getClient(): Collection
    {
        return $this->client;
    }

    public function addClient(Client $client): self
    {
        if (!$this->client->contains($client)) {
            $this->client->add($client);
        }

        return $this;
    }

    public function removeClient(Client $client): self
    {
        $this->client->removeElement($client);

        return $this;
    }
}
