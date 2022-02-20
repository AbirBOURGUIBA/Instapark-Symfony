<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ReponseRepository::class)
 */
class Reponse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)

     */
    private $rps;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRps(): ?string
    {
        return $this->rps;
    }

    public function setRps(string $rps): self
    {
        $this->rps = $rps;

        return $this;
    }
}
