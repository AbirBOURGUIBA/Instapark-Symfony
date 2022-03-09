<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups; 

/**
 * @ORM\Entity(repositoryClass=FactureRepository::class)
 */
class Facture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id_facture;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     *  @Groups("post:read")
     */
    private $nbheure;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(
     *      min = 0,
     *      max = 9999999,
     *      notInRangeMessage = "Le prix doit etre entre {{ min }} et {{ max }} ",
     *      minMessage = "Le prix unitaire doit etre positif")
     *  @Groups("post:read")
     */
    private $pu;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     * @Assert\Range(
     *      min = 0,
     *      max = 9999999,
     *      notInRangeMessage = "Le prix doit etre entre {{ min }} et {{ max }} ",
     *      minMessage = "Le prix doit etre positif")
     *  @Groups("post:read")
     */
    private $total;

    /**
     * @ORM\Column(type="datetime")
     *  @Groups("post:read")
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

    public function setDateentrer(?\DateTimeInterface $dateentrer): self
    {
        $this->dateentrer = $dateentrer;

        return $this;
    }
}
