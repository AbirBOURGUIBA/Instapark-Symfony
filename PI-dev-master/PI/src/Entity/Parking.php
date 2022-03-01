<?php

namespace App\Entity;

use App\Repository\ParkingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private $nomp;

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
    private $platitude;

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
    private $plongitude;

   
    /**
    * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="parking")
    * @ORM\JoinColumn(name="id_client", referencedColumnName="id_client")
    */
    private $client;
 

    public function __construct()
    {
        $this->Client = new ArrayCollection();
        $this->Fourriere = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection<int, Client>
     */
    public function getClient(): Collection
    {
        return $this->Client;
    }

    public function addClient(Client $client): self
    {
        if (!$this->Client->contains($client)) {
            $this->Client[] = $client;
            $client->setParking($this);
        }

        return $this;
    }

    public function removeClient(Client $client): self
    {
        if ($this->Client->removeElement($client)) {
            // set the owning side to null (unless already changed)
            if ($client->getParking() === $this) {
                $client->setParking(null);
            }
        }

        return $this;
    }

   
}
