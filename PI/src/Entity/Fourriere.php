<?php

namespace App\Entity;

use App\Repository\FourriereRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=FourriereRepository::class)
 */
class Fourriere
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
    private $nomf;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbplace;

    /**
     * @ORM\Column(type="string", length=255)

     */
    private $flatitude;

    /**
     * @ORM\Column(type="string", length=255)

     */
    private $flongitude;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomf(): ?string
    {
        return $this->nomf;
    }

    public function setNomf(string $nomf): self
    {
        $this->nomf = $nomf;
        return $this;
    }

    public function getNbplace(): ?int
    {
        return $this->nbplace;
    }

    public function setNbplace(int $nbplace): self
    {
        $this->nbplace = $nbplace;

        return $this;
    }

    public function getFlatitude(): ?string
    {
        return $this->flatitude;
    }

    public function setFlatitude(string $flatitude): self
    {
        $this->flatitude = $flatitude;

        return $this;
    }

    public function getFlongitude(): ?string
    {
        return $this->flongitude;
    }

    public function setFlongitude(string $flongitude): self
    {
        $this->flongitude = $flongitude;

        return $this;
    }
}
