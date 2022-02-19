<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactureRepository::class)
 */
class Facture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_facture;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbheure;

    /**
     * @ORM\Column(type="integer")
     */
    private $pu;

    /**
     * @ORM\Column(type="integer")
     */
    private $total;

    /**
     * @ORM\Column(type="date")
     */
    private $dateentrer;

    public function getId(): ?int
    {
        return $this->id_facture;
    }

    public function getNbheure(): ?int
    {
        return $this->nbheure;
    }

    public function setNbheure(int $nbheure): self
    {
        $this->nbheure = $nbheure;

        return $this;
    }

    public function getPu(): ?int
    {
        return $this->pu;
    }

    public function setPu(int $pu): self
    {
        $this->pu = $pu;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getDateentrer(): ?\DateTimeInterface
    {
        return $this->dateentrer;
    }

    public function setDateentrer(\DateTimeInterface $dateentrer): self
    {
        $this->dateentrer = $dateentrer;

        return $this;
    }
}
