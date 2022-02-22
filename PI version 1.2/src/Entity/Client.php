<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", length=255)
     */
    private $id_client;

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
        
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 1,
     *      max = 20,
     *      minMessage = "Le nom  doit comporter au moins {{ limit }} caractères",
     *      maxMessage = "Le nom  doit comporter au plus {{ limit }} caractères"
     * )
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
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Saisir la valeur de l'instamonaie de client")
     */
    private $instamon;

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
    
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id_client;
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

    public function getInstamon(): ?float
    {
        return $this->instamon;
    }

    public function setInstamon(float $instamon): self
    {
        $this->instamon = $instamon;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
