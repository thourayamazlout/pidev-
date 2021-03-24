<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\SerializerInterface;


/**
 * @ORM\Entity(repositoryClass=VoitureRepository::class)
 */
class Voiture
{
    /**
     * @ORM\Id
     * @Groups("post:read")
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $Matricule;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $Modele;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $Marque;

    /**
     * @ORM\Column(type="float")
     * @Groups("post:read")
     */
    private $Prix;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $Boite_MA;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $Ville;

    /**
     * @ORM\OneToMany(targetEntity=Locationv::class, mappedBy="Voiture")
     * @Groups("post:read")
     */
    private $locationvs;

    /**
     * @ORM\Column(type="string", length=255)

     * @Groups("post:read")
     */
    private $image;

    /**
     * @ORM\Column(type="boolean")
     * @Groups("post:read")
     */
    private $Disponible;


    public function __construct()
    {
        $this->locationvs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->Matricule;
    }

    public function setMatricule(string $Matricule): self
    {
        $this->Matricule = $Matricule;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->Modele;
    }

    public function setModele(string $Modele): self
    {
        $this->Modele = $Modele;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->Marque;
    }

    public function setMarque(string $Marque): self
    {
        $this->Marque = $Marque;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->Prix;
    }

    public function setPrix(float $Prix): self
    {
        $this->Prix = $Prix;

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

    public function getBoiteMA(): ?string
    {
        return $this->Boite_MA;
    }

    public function setBoiteMA(string $Boite_MA): self
    {
        $this->Boite_MA = $Boite_MA;

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

    /**
     * @return Collection|Locationv[]
     */
    public function getLocationvs(): Collection
    {
        return $this->locationvs;
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



    public function addLocationv(Locationv $locationv): self
    {
        if (!$this->locationvs->contains($locationv)) {
            $this->locationvs[] = $locationv;
            $locationv->setVoiture($this);
        }

        return $this;
    }

    public function removeLocationv(Locationv $locationv): self
    {
        if ($this->locationvs->removeElement($locationv)) {
            // set the owning side to null (unless already changed)
            if ($locationv->getVoiture() === $this) {
                $locationv->setVoiture(null);
            }
        }

        return $this;
    }



    public function __toString()
    {
        return $this->getModele();

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
