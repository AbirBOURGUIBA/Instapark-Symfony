<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=AdminRepository::class)
 */
class Admin
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    
    /**
     * @ORM\Column(type="string", length=255, nullable=false)
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
     * @ORM\Column(type="string", length=255, nullable=false)
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
     * @ORM\Column(type="string", length=8,nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(
     *       value= 8,
     *   exactMessage = "Le numéro du téléphone doit comporter 8 caractères"
     * )
     */
    private $numtel;

    /**
     * @ORM\Column(type="string", length=255, nullable=false, unique=true)
     *  @Assert\NotBlank
     *  @Assert\Email(
     *  message= "L email '{{ value }}' n'est pas valide."
     *  )
    
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
    * @ORM\Column(type="string")
    * @Assert\NotBlank
    */
    
   private $role;

    /**
    * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="admin")
    * @ORM\JoinColumn(name="id_client", referencedColumnName="id_client")
    */
    private $client;


    /**
     * @ORM\ManyToOne(targetEntity=AgentService::class, inversedBy="admin")
     * @ORM\JoinColumn(name="id_agent_serv", referencedColumnName="id_agent_serv")
     */
    private $agent_service;

    /**
     * @ORM\ManyToOne(targetEntity=Fourriere::class,  inversedBy="admin")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $fourriere;

    
 
    public function __construct()
    {
     
        $this->Client = new ArrayCollection();
        $this->AgentService = new ArrayCollection();
        $this->Fourriere = new ArrayCollection();
        
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
   public function getRole(): ?string
    {
        return $role = $this->role;
    
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

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
            $client->setAdmin($this);
            
        }

        return $this;
    }

    public function removeClient(Client $client): self
    {
        if($this->Client->removeElement($client)){
            // set the owning side to null (unless already changed)
            if ($client->getAdmin() === $this) {
                $client->setAdmin(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AgentService>
     */

    public function getAgentService(): Collection
    {
        return $this->AgentService;
    }

    public function addAgentService(AgentService $agent_service): self
    {
        if (!$this->AgentService->contains($agent_service)) {
            $this->AgentService[] = $agent_service;
            $agent_service->setAdmin($this);
        }

        return $this;
    }

    public function removeAgentService(AgentService $agent_service): self
    {
        if($this->AgentService->removeElement($agent_service))
        {
            // set the owning side to null (unless already changed)
            if ($agent_service->getAdmin() === $this) {
                $agent_service->setAdmin(null);}
        }

        return $this;
    }

   /**
     * @return Collection<int, Fourriere>
     */

    public function getFourriere(): Collection
    {
        return $this->Fourriere;
    }

    public function addFourriere(AgentService $fourriere): self
    {
        if (!$this->Fourriere->contains($fourriere)) {
            $this->Fourriere[] = $fourriere;
            $fourriere->setAdmin($this);
        }

        return $this;
    }

    public function removeFourriere(Fourriere $fourriere): self
    {
        if($this->Fourriere->removeElement($fourriere))
        {
            // set the owning side to null (unless already changed)
            if ($fourriere->getAdmin() === $this) {
                $fourriere->setAdmin(null);}
        }

        return $this;
    }

}

