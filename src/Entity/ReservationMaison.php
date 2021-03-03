<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationMaison
 *
 * @ORM\Table(name="reservation_maison")
 * @ORM\Entity
 */
class ReservationMaison
{
    /**
     * @var int
     *
     * @ORM\Column(name="ref_reservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refReservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_at", type="date", nullable=false)
     */
    private $startAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_at", type="date", nullable=false)
     */
    private $endAt;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=30, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=false)
     */
    private $description;

    public function getRefReservation(): ?int
    {
        return $this->refReservation;
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


}
