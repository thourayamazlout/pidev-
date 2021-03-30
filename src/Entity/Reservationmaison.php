<?php

namespace App\Entity;

use App\Repository\ReservationmaisonRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=ReservationmaisonRepository::class)
 */
class Reservationmaison
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="votre prénom ne pas conténir des chiffre")
     */
    private $Nom;

    /**
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="votre prénom ne pas conténir des chiffre")
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     *
      * @Assert\Length(
     *      min = 8,
     *      minMessage = "Your phone number must be at least {{ limit }} characters long",
     * )
     * @ORM\Column(type="integer")
     */
    private $Numerodetele;

    /**
     * @Assert\GreaterThanOrEqual("today")
     * @ORM\Column(type="date")
     */
    private $startat;

    /**
     * @Assert\GreaterThan(propertyPath="startat")
     * @ORM\Column(type="date")
     */
    private $endat;

    /**
     * @ORM\ManyToOne(targetEntity=Maisondhote::class, inversedBy="reservationmaisons")
     */
    private $Maisondhote;

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

    public function getNumerodetele(): ?int
    {
        return $this->Numerodetele;
    }

    public function setNumerodetele(int $Numerodetele): self
    {
        $this->Numerodetele = $Numerodetele;

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

    public function getMaisondhote(): ?Maisondhote
    {
        return $this->Maisondhote;
    }

    public function setMaisondhote(?Maisondhote $Maisondhote): self
    {
        $this->Maisondhote = $Maisondhote;

        return $this;
    }
}
