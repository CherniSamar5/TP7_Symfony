<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;


#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true ,type:"string")]
    private ?string $Nom = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $Prix = null;

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

    public function getPrix(): ?string
    {
        return $this->Prix;
    }

    public function setPrix(?string $Prix): self
    {
        $this->Prix = $Prix;
        return $this;
    }


    public function __toString() : string
    {
        return $this->getNom()??''; // or any other property or method that returns a string
    }

    #[ORM\ManyToOne(inversedBy: 'articles')]
        #[ORM\JoinColumn(nullable: false)]
        private ?Category $category = null;


    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;
        return $this;
    }
}