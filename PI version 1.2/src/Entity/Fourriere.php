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
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 1,
     *      max = 20,
     *      minMessage = "Le nom  doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Le nom  doit comporter au plus {{ limit }} caractères"
     * )
     */
    private $nomf;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(
     * message = "Le nombre des places  ne doit pas être vide")
     */
    private $nbplace;

     /**
     * @ORM\Column(type="float", length=255)
     * @Assert\NotBlank
     * @Assert\LessThanOrEqual(
     *       value = 90,
     *       message = "La latitude  ne doit  pas etre supérieure à 90"
     * )
     * @Assert\GreaterThanOrEqual(
     *       value = -90,
     *       message = "La latitude  ne doit pas être inférieure à -90"
     * )
     */
    private $flatitude;

     /**
     * @ORM\Column(type="float", length=255)
     * @Assert\NotBlank
     * @Assert\LessThanOrEqual(
     *       value = 180,
     *       message = "La longitude  ne doit pas être supérieure à 180"
     * )
     * @Assert\GreaterThanOrEqual(
     *       value = -180,
     *       message = "La longitude  ne doit pas être inférieure à -180"
     * )
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
