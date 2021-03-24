<?php

namespace App\Entity;

use App\Repository\EscapadeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ORM\Entity(repositoryClass=EscapadeRepository::class)
 */
class Escapade
{
    /**
     * @Groups("post:read")
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_esc;

    /**
     * @Groups("post:read")
     * @Assert\PositiveOrZero
     * @Assert\Range(
     *      min = 0,
     *      max = 200,
     *      notInRangeMessage = "You must be between {{ min }}dt and {{ max }}dt to enter",
     * )
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @Groups("post:read")
     * @ORM\Column(type="string", length=255)
     */
    private $histoire;

    /**
     * @Groups("post:read")
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @Groups("post:read")
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @Groups("post:read")
     * @ORM\OneToMany(targetEntity=Reservationesc::class, mappedBy="escapade", orphanRemoval=true)
     */
    private $escapades;

    /**
     * @Groups("post:read")
     * @Assert\Image(
     *     minWidth = 100,
     *     maxWidth = 400,
     *     minHeight = 100,
     *     maxHeight = 400
     * )
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    public function __construct()
    {
        $this->escapades = new ArrayCollection();
    }

    public function getId_esc(): ?int
    {
        return $this->id_esc;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getHistoire(): ?string
    {
        return $this->histoire;
    }

    public function setHistoire(string $histoire): self
    {
        $this->histoire = $histoire;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * @return Collection|Reservationesc[]
     */
    public function getEscapades(): Collection
    {
        return $this->escapades;
    }

    public function addEscapade(Reservationesc $escapade): self
    {
        if (!$this->escapades->contains($escapade)) {
            $this->escapades[] = $escapade;
            $escapade->setEscapade($this);
        }

        return $this;
    }

    public function removeEscapade(Reservationesc $escapade): self
    {
        if ($this->escapades->removeElement($escapade)) {
            // set the owning side to null (unless already changed)
            if ($escapade->getEscapade() === $this) {
                $escapade->setEscapade(null);
            }
        }

        return $this;
    }

  /*  public function findEscapadeByVille($ville)
    { return $this->createQueryBuilder('escapade')
        -> where('escapade.ville like :ville')
        -> setParameter('ville', '%'.$ville.'%')
        ->getQuery()
        ->getResult();
    }*/

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getIdEsc(): ?int
    {
        return $this->id_esc;
    }
}
