<?php

namespace EcoJob\CandidatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

/**
 * CuVi
 *
 * @ORM\Table(name="cu_vi")
 * @ORM\Entity(repositoryClass="EcoJob\CandidatBundle\Repository\CuViRepository")
 * @ORM\HasLifecycleCallbacks()
 * @Vich\Uploadable
 */
class CuVi
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
     * @ORM\Column(name="nom", type="string", length=18)
     * @Assert\Regex("/^[a-zA-Z0-9éèếûùô ]+$/",
     *     pattern=true,
     *     message="Cette valeur ne doit pas contenir des métacaractères."
     * )   
     * @Assert\NotBlank()       
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=10)
     *
     * @Assert\Regex("/^[a-zA-Z0-9éèếûùô ]+$/",
     *     pattern=true,
     *     message="Cette valeur ne doit pas contenir des métacaractères."
     * )    
     * @Assert\NotBlank() 
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer")
     * 
     * @Assert\NotBlank() 
     * @Assert\Regex("/^[0-9 ]+$/") 
     * @Assert\Regex(
     *     pattern="/\t | \b/",
     *     match=false,
     *     message="Espace blanc ou tabulation non-autorisé"
     * )        
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="about", type="string", length=255)
     * @Assert\Regex("/^[-éêè><û\/&-zA-Z0-9, '’àô()]+$/",
     *     pattern=true,
     *     message="Cette valeur ne doit pas contenir des métacaractères à part: '-éêè><ôû\/&'’ô()"
     * )       
     * @Assert\NotBlank() 
     */
    private $about;

    /**
     * @Assert\File(
     *     maxSize="3M",
     *     mimeTypes={"image/png", "image/jpeg", "image/pjpeg","image/gif"}
     * )
     * @Vich\UploadableField(mapping="user_image", fileNameProperty="imageName")
     *
     * @var File $imageFile
     */    
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="datetime",nullable=true)
     *
     * @var \DateTime
     */
    private $updatedAt;
    
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
     * @return CuVi
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return CuVi
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return CuVi
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set about
     *
     * @param string $about
     *
     * @return CuVi
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set imageName
     *
     * @param string $imageName
     *
     * @return CuVi
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * Get imageName
     *
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return CuVi
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }
    
}
