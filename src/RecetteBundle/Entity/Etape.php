<?php

namespace RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Etape
 *
 * @ORM\Table(name="etape")
 * @ORM\Entity(repositoryClass="RecetteBundle\Repository\EtapeRepository")
 */
class Etape
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
     * @ORM\Column(name="etapeImage", type="string", length=255)
     */
    private $etapeImage;

    /**
     * @var string
     *
     * @ORM\Column(name="explication", type="string", length=255)
     */
    private $etapeDescription;

    /**
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="Recette", inversedBy="etapes")
     * @ORM\JoinColumn(name="recette_id", referencedColumnName="id")
     */
    private $recette;


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
     * Set etapeImage
     *
     * @param string $etapeImage
     *
     * @return Etape
     */
    public function setEtapeImage($etapeImage)
    {
        $this->etapeImage = $etapeImage;

        return $this;
    }

    /**
     * Get etapeImage
     *
     * @return string
     */
    public function getEtapeImage()
    {
        return $this->etapeImage;
    }

    /**
     * @return string
     */
    public function getEtapeDescription()
    {
        return $this->etapeDescription;
    }

    /**
     * @param string $etapeDescription
     */
    public function setEtapeDescription($etapeDescription)
    {
        $this->etapeDescription = $etapeDescription;
    }

    /**
     * Set recette
     *
     * @param \RecetteBundle\Entity\Recette $recette
     *
     * @return Etape
     */
    public function setRecette(\RecetteBundle\Entity\Recette $recette = null)
    {
        $this->recette = $recette;

        return $this;
    }

    /**
     * Get recette
     *
     * @return \RecetteBundle\Entity\Recette
     */
    public function getRecette()
    {
        return $this->recette;
    }


}
