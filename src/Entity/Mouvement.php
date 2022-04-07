<?php

namespace App\Entity;

use App\Repository\MouvementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: MouvementRepository::class)]
class Mouvement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime')]
    #[Groups("mouvement:lire")]
    private $date;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups("mouvement:lire")]
    private $refsource;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups("mouvement:lire")]
    private $refdest;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups("mouvement:lire")]
    private $libelle;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    #[Groups("mouvement:lire")]
    private $montant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getRefsource(): ?string
    {
        return $this->refsource;
    }

    public function setRefsource(string $refsource): self
    {
        $this->refsource = $refsource;

        return $this;
    }

    public function getRefdest(): ?string
    {
        return $this->refdest;
    }

    public function setRefdest(string $refdest): self
    {
        $this->refdest = $refdest;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }
}
