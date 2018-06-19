<?php

namespace RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="profil", type="string", length=255)
     */
    private $profil;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var array
     *
     * @ORM\Column(name="etape", type="json_array")
     */
    private $etape;

    /**
     * @var array
     *
     * @ORM\Column(name="ingredient", type="json_array")
     */
    private $ingredient;

    /**
     * @var array
     *
     * @ORM\Column(name="saveur", type="json_array")
     */
    private $saveur;

    /**
     * @var string
     *
     * @ORM\Column(name="facons", type="string", length=255)
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
    private $valide;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToMany(targetEntity="Tags")
     */
    private $tags;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Recette
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set profil
     *
     * @param string $profil
     *
     * @return Recette
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil
     *
     * @return string
     */
    public function getProfil()
    {
        return $this->profil;
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
     * Set etape
     *
     * @param array $etape
     *
     * @return Recette
     */
    public function setEtape($etape)
    {
        $this->etape = $etape;

        return $this;
    }

    /**
     * Get etape
     *
     * @return array
     */
    public function getEtape()
    {
        return $this->etape;
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
}
