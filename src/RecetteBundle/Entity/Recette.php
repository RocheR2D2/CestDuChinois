<?php

namespace RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use SecuriteBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Recette
 *
 * @ORM\Table(name="recette")
 * @ORM\Entity(repositoryClass="RecetteBundle\Repository\RecetteRepository")
 */
class Recette
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="Etape", mappedBy="recette", cascade={"persist"})
     */
    private $etapes;

    /**
     * @var string
     *
     * @ORM\Column(name="ingredient", type="string",nullable=true)
     */
    private $ingredient;

    /**
     * @var array
     *
     * @ORM\Column(name="saveur", type="json_array",nullable=true)
     */
    private $saveur;

    /**
     * @var array
     *
     * @ORM\Column(name="saison", type="json_array",nullable=true)
     */
    private $saison;

    /**
     * @var array
     *
     * @ORM\Column(name="facons", type="json_array", length=255,nullable=true)
     */
    private $facons;

    /**
     * @var string
     *
     * @ORM\Column(name="temps", type="string", length=255)
     */
    private $temps;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=255)
     */
    private $niveau;

    /**
     * @var bool
     *
     * @ORM\Column(name="valide", type="boolean")
     */
    private $valide = 0;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status = 0;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="SecuriteBundle\Entity\User", inversedBy="recettes")
     */
    private $user;

    /**
     * @var \Datetime
     *
     * @ORM\Column(name="date_creation", type="datetime")
     */
    private $date_creation;

    /**
     * Many Recettes have One Province.
     *
     * @ORM\ManyToOne(targetEntity="Province")
     * @ORM\JoinColumn(name="province_id", referencedColumnName="id")
     */
    private $province;


    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", nullable=true)
     */
    private $notes;


    public function __construct() {
        $this->etapes = new ArrayCollection();
    }



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Recette
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Recette
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Recette
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * @param string $ingredient
     */
    public function setIngredient($ingredient)
    {
        $this->ingredient = $ingredient;
    }

    /**
     * @return array
     */
    public function getSaveur()
    {
        return $this->saveur;
    }

    /**
     * @param array $saveur
     */
    public function setSaveur($saveur)
    {
        $this->saveur = $saveur;
    }

    /**
     * @return array
     */
    public function getFacons()
    {
        return $this->facons;
    }

    /**
     * @param array $facons
     */
    public function setFacons($facons)
    {
        $this->facons = $facons;
    }

    /**
     * Set temps
     *
     * @param string $temps
     *
     * @return Recette
     */
    public function setTemps($temps)
    {
        $this->temps = $temps;

        return $this;
    }

    /**
     * Get temps
     *
     * @return string
     */
    public function getTemps()
    {
        return $this->temps;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     *
     * @return Recette
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string
     */
    public function getNiveau()
    {
        return $this->niveau;
    }


    /**
     * Set valide
     *
     * @param boolean $valide
     *
     * @return Recette
     */
    public function setValide($valide)
    {
        $this->valide = $valide;

        return $this;
    }

    /**
     * Get valide
     *
     * @return bool
     */
    public function getValide()
    {
        return $this->valide;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Recette
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }
    

    /**
     * Set user
     *
     * @param User $user
     *
     * @return Recette
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \SecuriteBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add etape
     *
     * @param \RecetteBundle\Entity\Etape $etape
     *
     * @return Recette
     */
    public function addEtape(\RecetteBundle\Entity\Etape $etape)
    {
        $this->etapes[] = $etape;

        return $this;
    }

    /**
     * Remove etape
     *
     * @param \RecetteBundle\Entity\Etape $etape
     */
    public function removeEtape(\RecetteBundle\Entity\Etape $etape)
    {
        $this->etapes->removeElement($etape);
    }

    /**
     * Get etapes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtapes()
    {
        return $this->etapes;
    }


    /**
     * Set etapes
     *
     * @return $this
     */
    public function setEtapes(ArrayCollection $etapes)
    {
        $this->etapes = $etapes;
        return $this;
    }

    /**
     * @return \Datetime
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * @param \Datetime $date_creation
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;
    }


    /**
     * Set province
     *
     * @param \RecetteBundle\Entity\Province $province
     *
     * @return Recette
     */
    public function setProvince(\RecetteBundle\Entity\Province $province = null)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return \RecetteBundle\Entity\Province
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @return array
     */
    public function getSaison()
    {
        return $this->saison;
    }

    /**
     * @param array $saison
     */
    public function setSaison($saison)
    {
        $this->saison = $saison;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }


}
