<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     *
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="Username", type="string", length=20, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     * * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="votre nom ne pas conténir des chiffre"
     * )
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=20, nullable=false)
     * * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="votre prénom ne pas conténir des chiffre"
     * )
     */
    private $prenom;

    /**
     * @var string
     *
     *
     * @ORM\Column(name="Email", type="string", length=255, nullable=false)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email."
     * )
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=20, nullable=false)
     *@Assert\Length(
     *      min = 8,
     *      minMessage = "votre mot de passe doit etre de longeur minimal 8 "
     *
     * )
     */
    private $password;
    /**
     * @Assert\EqualTo(propertyPath="password",message="vous n'avez pas conffimez votre mot de pase correctement")
     */

    public  $confirmpassword;

    /**
     * @var string
     *
     * @ORM\Column(name="Roles", type="string", length=20, nullable=false, options={"default"="'ROLE_USER'"})
     */
    private $roles = '\'ROLE_USER\'';



    public function __construct()
    {
        $this->reclamations = new ArrayCollection();
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRoles(): ?string
    {
        return $this->roles;
    }

    public function setRoles(string $roles): self
    {
        $this->roles = $roles;

        return $this;
    }
    public function  getSalt()
    {
        // TODO: Implement getSalt() method.
    }
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
    public function serialize()
    {
        return serialize(array(

            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (

            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, array('allowed_classes' => false));
    }




}
