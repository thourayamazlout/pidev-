<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 *
 * @ORM\Table(name="voiture")
 * @ORM\Entity
 */
class Voiture
{
    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=90, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=90, nullable=false)
     */
    private $modele;

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

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=25, nullable=false)
     */
    private $marque;

    /**
     * @var bool
     *
     * @ORM\Column(name="boite_ma", type="boolean", nullable=false)
     */
    private $boiteMa;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=250, nullable=false)
     */
    private $ville;

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

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

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getBoiteMa(): ?bool
    {
        return $this->boiteMa;
    }

    public function setBoiteMa(bool $boiteMa): self
    {
        $this->boiteMa = $boiteMa;

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


}
