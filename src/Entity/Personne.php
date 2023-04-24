<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonneRepository::class)]
class Personne
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $Nom = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $Prenom = null;

    #[ORM\Column(nullable: true)]
    private ?int $Age = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $Gmail = null;

    #[ORM\Column(length: 255)]
    private ?string $return = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(?string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(?string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->Age;
    }

    public function setAge(?int $Age): self
    {
        $this->Age = $Age;

        return $this;
    }

    public function getGmail(): ?string
    {
        return $this->Gmail;
    }

    public function setGmail(?string $Gmail): self
    {
        $this->Gmail = $Gmail;

        return $this;
    }

    public function getReturn(): ?string
    {
        return $this->return;
    }

    public function setReturn(string $return): self
    {
        $this->return = $return;

        return $this;
    }
}
