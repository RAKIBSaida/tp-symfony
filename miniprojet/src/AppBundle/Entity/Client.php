<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PaysRepository")
 */
class Client
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date")
     */

        /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


    private $dateCreation;
   
    
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Adresse",cascade={"persist"})
     */
    private $adresse;



    /**
     * @var bool
     *
     * @ORM\Column(name="isProspect", type="boolean")
     */
    private $isProspect;



   
    /**
     * @var int
     *
     * @ORM\Column(name="numClient", type="integer")
     */
    private $numClient;


    
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
     * Constructor
     */
    public function __construct()
    {
        $this->dateCreation = new \DateTime();
        $this->isProspect=1;
        //$this->adresses = new \Doctrine\Common\Collections\ArrayCollection();

    }

     /**
     * Set nom
     *
     * @param string $nom
     * @return Ville
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return client
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set adresse
     *
     * @param  Adresse $adresse
     *
     * @return Client
     */
    public function setAdresse($adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return Client
     */
    public function getAdresse()
    {
        return $this->adresse;
    }



    /**
     * Add email
     *
     * @param \AppBundle\Entity\Email $email
     *
     * @return client
     */
    public function addEmail(\AppBundle\Entity\Email $email)
    {
        $this->emails[] = $email;

        return $this;
    }

    /**
     * Remove email
     *
     * @param \AppBundle\Entity\Email $email
     */
    public function removeEmail(\AppBundle\Entity\Email $email)
    {
        $this->emails->removeElement($email);
    }

    /**
     * Get emails
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmails()
    {
        return $this->emails;
    }

   
    /**
     * Set isProspect
     *
     * @param boolean $isProspect
     * @return client
     */
    public function setIsProspect($isProspect)
    {
        $this->isProspect = $isProspect;

        return $this;
    }

    /**
     * Get isProspect
     *
     * @return boolean
     */
    public function getIsProspect()
    {
        return $this->isProspect;
    }

   

    /**
     * @return int
     */
    public function getNumClient()
    {
        return $this->numClient;
    }

    /**
     * @param int $numClient
     * @return client
     */
    public function setNumClient($numClient)
    {
        $this->numClient = $numClient;
        return $this;
    }

/**
    * Get FullAdresse
     *
   * @return string
    */
   public function getFullAdresse(){
       return  $this->numero.' '.$this->ville->getLibelle().' '.$this->complement . ' '. $this->pays.' '. $this->ville.' ' ;
   }



}
