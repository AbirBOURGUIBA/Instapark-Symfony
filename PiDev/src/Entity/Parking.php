<?php

namespace App\Entity;

use App\Repository\ParkingRepository;
use Doctrine\ORM\Mapping as ORM;

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
    private $idp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomp;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbplace;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $platitude;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $plongitude;

    public function getId(): ?int
    {
        return $this->idp;
    }

    public function getNomp(): ?string
    {
        return $this->nomp;
    }

    public function setNomp(string $nomp): self
    {
        $this->nomp = $nomp;

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

    public function getPlatitude(): ?string
    {
        return $this->platitude;
    }

    public function setPlatitude(string $platitude): self
    {
        $this->platitude = $platitude;

        return $this;
    }

    public function getPlongitude(): ?string
    {
        return $this->plongitude;
    }

    public function setPlongitude(string $plongitude): self
    {
        $this->plongitude = $plongitude;

        return $this;
    }
}
