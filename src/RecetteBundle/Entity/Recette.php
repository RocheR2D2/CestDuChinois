<?php

namespace RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use SecuriteBundle\Entity\User;

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
    private $etape;

    /**
     * @var array
     *
     * @ORM\Column(name="ingredient", type="json_array",nullable=true)
     */
    private $ingredient;

    /**
     * @var array
     *
     * @ORM\Column(name="saveur", type="json_array",nullable=true)
     */
    private $saveur;

    /**
     * @var string
     *
     * @ORM\Column(name="facons", type="string", length=255,nullable=true)
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
     * @ORM\ManyToMany(targetEntity="Tags", cascade={"persist"})
     */
    private $tags = [];

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="SecuriteBundle\Entity\User", inversedBy="recettes")
     */
    private $user;





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
     * Set ingredient
     *
     * @param array $ingredient
     *
     * @return Recette
     */
    public function setIngredient($ingredient)
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    /**
     * Get ingredient
     *
     * @return array
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Set saveur
     *
     * @param array $saveur
     *
     * @return Recette
     */
    public function setSaveur($saveur)
    {
        $this->saveur = $saveur;

        return $this;
    }

    /**
     * Get saveur
     *
     * @return array
     */
    public function getSaveur()
    {
        return $this->saveur;
    }

    /**
     * Set facons
     *
     * @param string $facons
     *
     * @return Recette
     */
    public function setFacons($facons)
    {
        $this->facons = $facons;

        return $this;
    }

    /**
     * Get facons
     *
     * @return string
     */
    public function getFacons()
    {
        return $this->facons;
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
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tag
     *
     * @param \RecetteBundle\Entity\Tags $tag
     *
     * @return Recette
     */
    public function addTag(\RecetteBundle\Entity\Tags $tag)
    {
        $this->tags[] = $tag;

        return $this;
    }

    /**
     * Remove tag
     *
     * @param \RecetteBundle\Entity\Tags $tag
     */
    public function removeTag(\RecetteBundle\Entity\Tags $tag)
    {
        $this->tags->removeElement($tag);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
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
        $this->etape[] = $etape;

        return $this;
    }

    /**
     * Remove etape
     *
     * @param \RecetteBundle\Entity\Etape $etape
     */
    public function removeEtape(\RecetteBundle\Entity\Etape $etape)
    {
        $this->etape->removeElement($etape);
    }

    /**
     * Get etape
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtape()
    {
        return $this->etape;
    }
}
