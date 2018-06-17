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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var array
     *
     * @ORM\Column(name="step", type="json_array")
     */
    private $step;

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
     * @var array
     *
     * @ORM\Column(name="facons", type="json_array")
     */
    private $facons;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=255)
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=255)
     */
    private $level;

    /**
     * @var bool
     *
     * @ORM\Column(name="valid", type="boolean")
     */
    private $valid;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;


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
     * Set name
     *
     * @param string $name
     *
     * @return Recette
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * Set step
     *
     * @param array $step
     *
     * @return Recette
     */
    public function setStep($step)
    {
        $this->step = $step;

        return $this;
    }

    /**
     * Get step
     *
     * @return array
     */
    public function getStep()
    {
        return $this->step;
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
     * @param array $facons
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
     * @return array
     */
    public function getFacons()
    {
        return $this->facons;
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return Recette
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set level
     *
     * @param string $level
     *
     * @return Recette
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set valid
     *
     * @param boolean $valid
     *
     * @return Recette
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return bool
     */
    public function getValid()
    {
        return $this->valid;
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
}

