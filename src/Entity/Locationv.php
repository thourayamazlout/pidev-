<?php

namespace App\Entity;

use App\Repository\LocationvRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ORM\Entity(repositoryClass=LocationvRepository::class)
 */
class Locationv
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")

     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")

     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="votre nom ne pas conténir des chiffres")
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")

     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="votre prénom ne pas conténir des chiffres")
     */
    private $Prenom;

    /**
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     * @Assert\Length(
     *      min = 8,
     *      minMessage = "Your phone number must be at least {{ limit }} characters long",
     * )
     */
    private $Numerodetelephone;

    /**
     * @ORM\Column(type="date")
     *@Groups("post:read")
     * @Assert\GreaterThanOrEqual("today")
     */

    private $startat;

    /**
     * @ORM\Column(type="date")
     *@Groups("post:read")
     * @Assert\GreaterThan(propertyPath="startat")
     */
    private $endat;

    /**
     * @ORM\Column(type="time")
     * @Groups("post:read")
     *
     */
    private $heuredebut;

    /**
     * @ORM\Column(type="time")
     * @Groups("post:read")
     */
    private $heurefin;

    /**
     * @ORM\ManyToOne(targetEntity=Voiture::class, inversedBy="locationvs")
     * @Groups("post:read")
     */
    private $Voiture;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="please upload permis")
     * @Assert\File(mimeTypes={"image/jpeg"})
     * @Groups("post:read")
     */
    private $Permis;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getNumerodetelephone(): ?int
    {
        return $this->Numerodetelephone;
    }

    public function setNumerodetelephone(int $Numerodetelephone): self
    {
        $this->Numerodetelephone = $Numerodetelephone;

        return $this;
    }

    public function getStartat(): ?\DateTimeInterface
    {
        return $this->startat;
    }

    public function setStartat(\DateTimeInterface $startat): self
    {
        $this->startat = $startat;

        return $this;
    }

    public function getEndat(): ?\DateTimeInterface
    {
        return $this->endat;
    }

    public function setEndat(\DateTimeInterface $endat): self
    {
        $this->endat = $endat;

        return $this;
    }

    public function getHeuredebut(): ?\DateTimeInterface
    {
        return $this->heuredebut;
    }

    public function setHeuredebut(\DateTimeInterface $heuredebut): self
    {
        $this->heuredebut = $heuredebut;

        return $this;
    }

    public function getHeurefin(): ?\DateTimeInterface
    {
        return $this->heurefin;
    }

    public function setHeurefin(\DateTimeInterface $heurefin): self
    {
        $this->heurefin = $heurefin;

        return $this;
    }

    public function getVoiture(): ?Voiture
    {
        return $this->Voiture;
    }

    public function setVoiture(?Voiture $Voiture): self
    {
        $this->Voiture = $Voiture;

        return $this;
    }
    public function getPermis()
    {
        return $this->Permis;
    }

    public function setPermis($Permis)
    {
        $this->Permis = $Permis;
        return $this;

    }
}
