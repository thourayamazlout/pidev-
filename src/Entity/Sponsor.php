<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Object_;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Sponsor
 *
 * @ORM\Table(name="sponsor")
 * @ORM\Entity
 */
class Sponsor
{
    /**
     * @var int
     *
     * @ORM\Column(name="ref_sponsor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refSponsor;

    /**
     * @var int
     *
     * @ORM\Column(name="cin", type="integer", nullable=false)
     *  @Assert\Length(
     *
     * max = 8
     *     ,
     * maxMessage = "votre cin est trop long")
     */
    private $cin;

    /**
     * @var float
     *
     * @ORM\Column(name="budget", type="float", precision=10, scale=0, nullable=false)
     *
     */
    private $budget;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=256, nullable=false)
     */
    private $message;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_event", type="string",length=255, nullable=false)
     * @ORM\ManyToOne(targetEntity=sponsor::class, inversedBy="evenement")
     */
    private $nomEvent;

    public function getRefSponsor(): ?int
    {
        return $this->refSponsor;
    }

    public function getCin(): ?int
    {
        return $this->cin;
    }

    public function setCin(int $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getBudget(): ?float
    {
        return $this->budget;
    }

    public function setBudget(float $budget): self
    {
        $this->budget = $budget;

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

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getNomEvent()
    {
        return $this->nomEvent;
    }

    public function setNomEvent(string $nomEvent): self
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }
    public function __toString() {
        return $this->nomEvent;
    }


}
