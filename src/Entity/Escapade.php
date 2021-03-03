<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Escapade
 *
 * @ORM\Table(name="escapade")
 * @ORM\Entity
 */
class Escapade
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_escapade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEscapade;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_escapade", type="string", length=256, nullable=false)
     */
    private $nomEscapade;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=false)
     */
    private $description;

    public function getIdEscapade(): ?int
    {
        return $this->idEscapade;
    }

    public function getNomEscapade(): ?string
    {
        return $this->nomEscapade;
    }

    public function setNomEscapade(string $nomEscapade): self
    {
        $this->nomEscapade = $nomEscapade;

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
