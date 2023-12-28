<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $minorder;


    /**
     * @var string|null
     */
    private $dimenssion;

    /**
     * @var string|null
     */
    private $epaisseur;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getMinorder(): ?int
    {
        return $this->minorder;
    }

    public function setMinorder(int $minorder): self
    {
        $this->minorder = $minorder;

        return $this;
    }

    /**
     *
     * @return string|NULL
     */
    public function getDimenssion()
    {
        return $this->dimenssion;
    }

    /**
     *
     * @return string|NULL
     */
    public function getEpaisseur()
    {
        return $this->epaisseur;
    }

    /**
     * @param string|NULL $dimenssion
     * @return Calcul
     */
    public function setDimenssion($dimenssion)
    {
        $this->dimenssion = $dimenssion;
        return $this;
    }

    /**
     * @param string|NULL $epaisseur
     * @return Calcul
     */
    public function setEpaisseur($epaisseur)
    {
        $this->epaisseur = $epaisseur;
        return $this;
    }
}
