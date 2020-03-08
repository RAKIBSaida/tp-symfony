<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * adresse
 *
 * @ORM\Table(name="adresse")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdresseRepository")
 */
class Adresse
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
     * @ORM\Column(name="numero", type="string", length=50)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="complement", type="string",  length=200)
     */
    private $complement;

    
    /**
     * @ORM\ManytoOne(targetEntity="AppBundle\Entity\Pays")
     */
    private $pays;


    /**
     * @ORM\ManytoOne(targetEntity="AppBundle\Entity\Ville")
     */
    private $ville;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    

    public function __construct()
    {
       
    //    $this->clients = new \Doctrine\Common\Collections\ArrayCollection();

    }
    /**
     * Set numero
     *
     * @param string $numero
     * @return Adresse
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set complement
     *
     * @param string $complement
     * @return Adresse
     */
    public function setComplement($complement)
    {
        $this->complement = $complement;

        return $this;
    }

    /**
     * Get complement
     *
     * @return string
     */
    public function getComplement()
    {
        return $this->complement;
    }

    
    
/**
     * Set pays
     *
     * @param Pays $pays
     * @return Adresse
     */
    public function setPays($pays = null)
    {
        $this->pays = $pays;

        return $this;
    }

    /**s
     * Get pays
     *
     * @return Adresse
     */
    public function getPays()
    {
        return $this->pays;
    }

    
    /**
     * Set ville
     *
     * @param Ville $ville
     * @return Adresse
     */
    public function setVille($ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return Adresse
     */
    public function getVille()
    {
        return $this->ville;
    }

     
    
   

  

       // public function __tostring(){
               //  return $this->pays;
                     //   }

}








