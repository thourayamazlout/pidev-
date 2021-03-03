<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationEscapade
 *
 * @ORM\Table(name="reservation_escapade")
 * @ORM\Entity
 */
class ReservationEscapade
{
    /**
     * @var int
     *
     * @ORM\Column(name="ref_escapade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refEscapade;

    /**
     * @var int
     *
     * @ORM\Column(name="nbre_personne", type="integer", nullable=false)
     */
    private $nbrePersonne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_at", type="date", nullable=false)
     */
    private $dateAt;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=1000, nullable=false)
     */
    private $message;

    public function getRefEscapade(): ?int
    {
        return $this->refEscapade;
    }

    public function getNbrePersonne(): ?int
    {
        return $this->nbrePersonne;
    }

    public function setNbrePersonne(int $nbrePersonne): self
    {
        $this->nbrePersonne = $nbrePersonne;

        return $this;
    }

    public function getDateAt(): ?\DateTimeInterface
    {
        return $this->dateAt;
    }

    public function setDateAt(\DateTimeInterface $dateAt): self
    {
        $this->dateAt = $dateAt;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }


}
