<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_event", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_event", type="string", length=255, nullable=false)
     * @ORM\OneToMany(targetEntity=Sponsor::class, mappedBy="evenement", orphanRemoval=true)
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Your name cannot contain a number"
     * )
     */
    private $nomEvent;

    /**
     * @var \DateTime
     * @Assert\GreaterThanOrEqual("today")
     * @ORM\Column(name="start_at", type="date", nullable=false)
     */
    private $startAt;

    /**
     * @var \DateTime
     *@Assert\GreaterThan(propertyPath="startat",message="vous n'avez pas conffimez votre mot de pase correctement")
     * @ORM\Column(name="end_at", type="date", nullable=false)
     */
    private $endAt;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=600, nullable=false)
     */
    private $description;

    /**
     * @ORM\Column(name="image", type="string", length=255)
     */
     private $image ;

    /**
     * @ORM\Column(name="rating", type="integer", nullable=false)
     */
    private $rating;

    public function getimage()
    {
        return $this->image;
    }

    public function setimage($image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getIdEvent(): ?int
    {
        return $this->idEvent;
    }

    public function getNomEvent(): ?string
    {
        return $this->nomEvent;
    }

    public function setNomEvent(string $nomEvent): self
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }

    public function getStartAt(): ?\DateTimeInterface
    {
        return $this->startAt;
    }

    public function setStartAt(\DateTimeInterface $startAt): self
    {
        $this->startAt = $startAt;

        return $this;
    }

    public function getEndAt(): ?\DateTimeInterface
    {
        return $this->endAt;
    }

    public function setEndAt(\DateTimeInterface $endAt): self
    {
        $this->endAt = $endAt;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }


    public function getRating()
    {
        return $this->rating;
    }


    public function setRating($rating): void
    {
        $this->rating = $rating;
    }




}
