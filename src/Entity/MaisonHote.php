<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaisonHote
 *
 * @ORM\Table(name="maison_hote")
 * @ORM\Entity
 */
class MaisonHote
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_maison", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMaison;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_maison", type="string", length=20, nullable=false)
     */
    private $nomMaison;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=20, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=250, nullable=false)
     */
    private $adress;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_chambres", type="integer", nullable=false)
     */
    private $nombreChambres;

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

    public function getIdMaison(): ?int
    {
        return $this->idMaison;
    }

    public function getNomMaison(): ?string
    {
        return $this->nomMaison;
    }

    public function setNomMaison(string $nomMaison): self
    {
        $this->nomMaison = $nomMaison;

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

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getNombreChambres(): ?int
    {
        return $this->nombreChambres;
    }

    public function setNombreChambres(int $nombreChambres): self
    {
        $this->nombreChambres = $nombreChambres;

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
