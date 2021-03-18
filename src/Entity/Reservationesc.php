<?php

namespace App\Entity;

use App\Repository\ReservationescRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=ReservationescRepository::class)
 */
class Reservationesc
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $ref;

    /**
     * @Assert\Positive
     * * @Assert\Range(
     *      min = 2,
     *      max = 30,
     *      notInRangeMessage = " Il faut que le nombre de personnes soit superieur ou egal a  {{ min }} pers et inferieur ou egal a {{ max }} pers ",
     * )
     * @ORM\Column(type="integer")
     */
    private $nbrepers;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateres;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commentaire;

    /**
     * @Assert\Positive
     * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *      minMessage = "doit contenir 8 caracteres",
     *      maxMessage = ""
     * )
     * @ORM\Column(type="integer")
     */
    private $tel;

    /**
     * @ORM\ManyToOne(targetEntity=Escapade::class, inversedBy="escapades")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="id_esc")
     */
    private $escapade;

    public function getRef(): ?int
    {
        return $this->ref;
    }

    public function getNbrepers(): ?int
    {
        return $this->nbrepers;
    }

    public function setNbrepers(int $nbrepers): self
    {
        $this->nbrepers = $nbrepers;

        return $this;
    }

    public function getDateres(): ?\DateTimeInterface
    {
        return $this->dateres;
    }

    public function setDateres(\DateTimeInterface $dateres): self
    {
        $this->dateres = $dateres;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getEscapade(): ?Escapade
    {
        return $this->escapade;
    }

    public function setEscapade(?Escapade $escapade): self
    {
        $this->escapade = $escapade;

        return $this;
    }
}
