<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 1,
     *      max = 20,
     *      minMessage = "Le nom  doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Le nom  doit comporter au plus {{ limit }} caractères"
     * )
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 1,
     *      max = 20,
     *      minMessage = "Le nom  doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Le nom  doit comporter au plus {{ limit }} caractères"
     * )
     * @Groups ("post:read")
     */

    private $prenom;

    /**
     * @ORM\Column(type="string", length=8)
     * @Assert\NotBlank
     * @Assert\Length(
     *  value = 8,
     *  exactMessage = "Le numéro du téléphone doit comporter 8 caractères"
     * )
     */
    private $numtel;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Saisir l'immatricule ")
     */
    private $voitmat;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Saisir la valeur de l'instamonaie de client")
     */
    private $instamonnaie;

    /**
     * @ORM\Column(type="string", length=255 ,unique=true)
     * @Assert\NotBlank(message="Saisir le login ")
     * @Assert\Email(message = "The email '{{ value }}' is not a valid email.")
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\NotCompromisedPassword(
     * message= "Ce mot de passe doit comporter au moins une lettre majuscule et au moins une lettre minuscule"

     * )
     *  @Assert\Length(
     *      min = 8,
     *      max = 20,
     *   minMessage = "Le mot de passe  doit comporter au moins {{ limit }} caractères",
     *   maxMessage = "Le mot de passe  doit comporter au plus {{ limit }} caractères"
     * )
     * @Groups ("post:read")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $statut;

    /**
     * @ORM\OneToMany(targetEntity=AgentService::class, mappedBy="client")
     */
    private $Agent;

    public function __construct()
    {
        $this->Agent = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNumtel(): ?string
    {
        return $this->numtel;
    }

    public function setNumtel(string $numtel): self
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getVoitmat(): ?string
    {
        return $this->voitmat;
    }

    public function setVoitmat(string $voitmat): self
    {
        $this->voitmat = $voitmat;

        return $this;
    }

    public function getInstamonnaie(): ?string
    {
        return $this->instamonnaie;
    }

    public function setInstamonnaie(?string $instamonnaie): self
    {
        $this->instamonnaie = $instamonnaie;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * @return Collection<int, AgentService>
     */
    public function getAgent(): Collection
    {
        return $this->Agent;
    }

    public function addAgent(AgentService $agent): self
    {
        if (!$this->Agent->contains($agent)) {
            $this->Agent[] = $agent;
            $agent->setClient($this);
        }

        return $this;
    }

    public function removeAgent(AgentService $agent): self
    {
        if ($this->Agent->removeElement($agent)) {
            // set the owning side to null (unless already changed)
            if ($agent->getClient() === $this) {
                $agent->setClient(null);
            }
        }

        return $this;
    }






}
