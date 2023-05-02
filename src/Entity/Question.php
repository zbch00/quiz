<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: QuestionRepository::class)]
class Question
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(length: 255)]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['list_questions','themes'])]
    private ?string $intitule = null;

    #[ORM\ManyToOne(cascade: ['persist'], inversedBy: 'questions')]
    #[Groups(['list_questions','themes'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Theme $theme = null;

    #[ORM\Column(type: Types::ARRAY)]
    #[Groups(['list_questions','themes'])]
    private array $reponse = [];

    #[ORM\Column(length: 255)]
    #[Groups(['themes','list_questions'])]
    private ?string $reponseCorrect = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getTheme(): ?Theme
    {
        return $this->theme;
    }

    public function setTheme(?Theme $theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    public function getReponse(): array
    {
        return $this->reponse;
    }

    public function setReponse(array $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function getReponseCorrect(): ?string
    {
        return $this->reponseCorrect;
    }

    public function setReponseCorrect(string $reponseCorrect): self
    {
        $this->reponseCorrect = $reponseCorrect;

        return $this;
    }
}
