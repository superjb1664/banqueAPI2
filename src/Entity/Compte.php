<?php

namespace App\Entity;

use App\Repository\CompteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: CompteRepository::class)]
class Compte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups("compte:lire")]
    private $id;

    #[ORM\Column(type: 'text')]
    #[Groups("compte:lire")]
    private $refbancaire;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'comptes')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups("compte:lire")]
    private $utilisateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRefbancaire(): ?string
    {
        return $this->refbancaire;
    }

    public function setRefbancaire(string $refbancaire): self
    {
        $this->refbancaire = $refbancaire;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
}
