<?php

namespace EcoJob\RecruteurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ContratCategorie
 *
 * @ORM\Table(name="contrat_categorie")
 * @ORM\Entity(repositoryClass="EcoJob\RecruteurBundle\Repository\ContratCategorieRepository")
 * 
 */
class ContratCategorie 
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=100, unique=true)
     */
    private $designation;

    /**
    * @ORM\OneToMany(targetEntity="EcoJob\RecruteurBundle\Entity\Offre",mappedBy="categorie",orphanRemoval=true)
    */    
    private $offres;  

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
     * Set designation
     *
     * @param string $designation
     *
     * @return ContratCategorie
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }
    
     public function __toString()
    {
        return $this->designation;
    } 
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->offres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add offre
     *
     * @param \EcoJob\RecruteurBundle\Entity\Offre $offre
     *
     * @return ContratCategorie
     */
    public function addOffre(\EcoJob\RecruteurBundle\Entity\Offre $offre)
    {
        $this->offres[] = $offre;

        return $this;
    }

    /**
     * Remove offre
     *
     * @param \EcoJob\RecruteurBundle\Entity\Offre $offre
     */
    public function removeOffre(\EcoJob\RecruteurBundle\Entity\Offre $offre)
    {
        $this->offres->removeElement($offre);
    }

    /**
     * Get offres
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOffres()
    {
        return $this->offres;
    }
}
