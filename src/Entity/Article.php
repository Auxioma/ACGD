<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ArticleRepository;
use App\Entity\Traits\TimestampTraits;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    use TimestampTraits;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $cour = null;

    #[ORM\OneToOne(inversedBy: 'article', cascade: ['persist', 'remove'])]
    private ?Category $cat = null;

    #[ORM\OneToOne(inversedBy: 'article', targetEntity: self::class, cascade: ['persist', 'remove'])]
    private ?self $Parent = null;

    #[ORM\OneToOne(mappedBy: 'Parent', targetEntity: self::class, cascade: ['persist', 'remove'])]
    private ?self $article = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getCour(): ?string
    {
        return $this->cour;
    }

    public function setCour(string $cour): static
    {
        $this->cour = $cour;

        return $this;
    }

    public function getCat(): ?Category
    {
        return $this->cat;
    }

    public function setCat(?Category $cat): static
    {
        $this->cat = $cat;

        return $this;
    }

    public function getParent(): ?self
    {
        return $this->Parent;
    }

    public function setParent(?self $Parent): static
    {
        $this->Parent = $Parent;

        return $this;
    }

    public function getArticle(): ?self
    {
        return $this->article;
    }

    public function setArticle(?self $article): static
    {
        // unset the owning side of the relation if necessary
        if ($article === null && $this->article !== null) {
            $this->article->setParent(null);
        }

        // set the owning side of the relation if necessary
        if ($article !== null && $article->getParent() !== $this) {
            $article->setParent($this);
        }

        $this->article = $article;

        return $this;
    }
}
