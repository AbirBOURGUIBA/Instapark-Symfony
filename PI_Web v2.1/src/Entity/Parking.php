<?php

namespace App\Entity;

use App\Repository\ParkingRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ParkingRepository::class)
 */
class Parking
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
    private $nom_parking;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(
     * message = "Le nombre des places  ne doit pas être vide")
     */
    private $nbr_place;

    /**
     * @ORM\Column(type="float", length=255)
     * @Assert\NotBlank
     * @Assert\LessThanOrEqual(
     *       value = 90,
     *       message = "La latitude ne doit pas etre supérieure à 90"
     * )
     * @Assert\GreaterThanOrEqual(
     *       value = -90,
     *       message = "La latitude ne doit pas être inférieure à -90"
     * )
     */
    private $latitude_parking;

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
    private $longitude_parking;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomParking(): ?string
    {
        return $this->nom_parking;
    }

    public function setNomParking(string $nom_parking): self
    {
        $this->nom_parking = $nom_parking;

        return $this;
    }

    public function getNbrPlace(): ?int
    {
        return $this->nbr_place;
    }

    public function setNbrPlace(int $nbr_place): self
    {
        $this->nbr_place = $nbr_place;

        return $this;
    }

    public function getLatitudeParking(): ?string
    {
        return $this->latitude_parking;
    }

    public function setLatitudeParking(string $latitude_parking): self
    {
        $this->latitude_parking = $latitude_parking;

        return $this;
    }

    public function getLongitudeParking(): ?string
    {
        return $this->longitude_parking;
    }

    public function setLongitudeParking(string $longitude_parking): self
    {
        $this->longitude_parking = $longitude_parking;

        return $this;
    }
}
