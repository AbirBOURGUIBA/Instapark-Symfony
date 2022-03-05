<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
    private $id;
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     * @Assert\Range(
     *      min = 0,
     *      max = 9999999,
     *      notInRangeMessage = "Le prix doit etre entre {{ min }} et {{ max }} ",
     *      minMessage = "Le nombre d'heures doit etre positif")
     */
    private $nbrheure;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Column(type="integer")
     * @Assert\Range(
     *      min = 0,
     *      max = 9999999,
     *      notInRangeMessage = "Le prix doit etre entre {{ min }} et {{ max }} ",
     *      minMessage = "Le prix unitaire doit etre positif")
     */

    private $prixunitaire;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     * @Assert\Range(
     *      min = 0,
     *      max = 9999999,
     *      notInRangeMessage = "Le prix doit etre entre {{ min }} et {{ max }} ",
     *      minMessage = "Le prix doit etre positif")
     */
    private $total;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateentrer;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbrheure(): ?int
    {
        return $this->nbrheure;
    }

    public function setNbrheure(int $nbrheure): self
    {
        $this->nbrheure = $nbrheure;

        return $this;
    }

    public function getPrixunitaire(): ?int
    {
        return $this->prixunitaire;
    }

    public function setPrixunitaire(int $prixunitaire): self
    {
        $this->prixunitaire = $prixunitaire;

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
