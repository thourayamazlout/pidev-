<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocationVoiture
 *
 * @ORM\Table(name="location_voiture")
 * @ORM\Entity
 */
class LocationVoiture
{
    /**
     * @var int
     *
     * @ORM\Column(name="num_reservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numReservation;

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
     * @var \DateTime
     *
     * @ORM\Column(name="heure_debut", type="time", nullable=false)
     */
    private $heureDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_fin", type="time", nullable=false)
     */
    private $heureFin;

    public function getNumReservation(): ?int
    {
        return $this->numReservation;
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

    public function getHeureDebut(): ?\DateTimeInterface
    {
        return $this->heureDebut;
    }

    public function setHeureDebut(\DateTimeInterface $heureDebut): self
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    public function getHeureFin(): ?\DateTimeInterface
    {
        return $this->heureFin;
    }

    public function setHeureFin(\DateTimeInterface $heureFin): self
    {
        $this->heureFin = $heureFin;

        return $this;
    }


}
