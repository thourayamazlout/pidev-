<?php

namespace App\Entity;

use App\Repository\MaisondhoteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass=MaisondhoteRepository::class)
 */
class Maisondhote
{
    /**
     *  @Groups("post:read")
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Groups("post:read")
     * @ORM\Column(type="string", length=255)
     */
    private $Nommaison;

    /**
     *  @Groups("post:read")
     * @ORM\Column(type="string", length=255)
     */
    private $Ville;

    /**
     *  @Groups("post:read")
     * @ORM\Column(type="string", length=255)
     */
    private $Address;

    /**
     *  @Groups("post:read")
     * @ORM\Column(type="integer")
     */
    private $Nombrechambres;

    /**
     *  @Groups("post:read")
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     *  @Groups("post:read")
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     *  @Groups("post:read")
     * @ORM\OneToMany(targetEntity=Reservationmaison::class, mappedBy="Maisondhote")
     */
    private $reservationmaisons;
    /**
     * @ORM\Column(type="string", length=255)

     * @Groups("post:read")
     */
    private $image;
    /**
     *
     *  @Groups("post:read")
     * @ORM\Column(type="boolean")
     */
    private $Disponible;

    public function __construct()
    {
        $this->reservationmaisons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNommaison(): ?string
    {
        return $this->Nommaison;
    }

    public function setNommaison(string $Nommaison): self
    {
        $this->Nommaison = $Nommaison;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): self
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(string $Address): self
    {
        $this->Address = $Address;

        return $this;
    }

    public function getNombrechambres(): ?int
    {
        return $this->Nombrechambres;
    }

    public function setNombrechambres(int $Nombrechambres): self
    {
        $this->Nombrechambres = $Nombrechambres;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }
    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;

    }
    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * @return Collection|Reservationmaison[]
     */
    public function getReservationmaisons(): Collection
    {
        return $this->reservationmaisons;
    }

    public function addReservationmaison(Reservationmaison $reservationmaison): self
    {
        if (!$this->reservationmaisons->contains($reservationmaison)) {
            $this->reservationmaisons[] = $reservationmaison;
            $reservationmaison->setMaisondhote($this);
        }

        return $this;
    }

    public function removeReservationmaison(Reservationmaison $reservationmaison): self
    {
        if ($this->reservationmaisons->removeElement($reservationmaison)) {
            // set the owning side to null (unless already changed)
            if ($reservationmaison->getMaisondhote() === $this) {
                $reservationmaison->setMaisondhote(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->getNommaison();

    }

    public function getDisponible(): ?bool
    {
        return $this->Disponible;
    }

    public function setDisponible(bool $Disponible): self
    {
        $this->Disponible = $Disponible;

        return $this;
    }
}
