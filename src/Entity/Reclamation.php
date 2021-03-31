<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="fn_entreprise", columns={"iduser"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="text_reclamation", type="string", length=255, nullable=false)
     */
    private $textreclamation;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="id_user")
     * })
     */
    private $iduser;




    public function getIdReclamation(): ?int
    {
        return $this->idReclamation;
    }

    public function getTextreclamation(): ?string
    {
        return $this->textreclamation;
    }

    public function setTextreclamation(string $textreclamation): self
    {
        $this->textreclamation = $textreclamation;

        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): self
    {
        $this->iduser = $iduser;
        return $this;
    }





}
