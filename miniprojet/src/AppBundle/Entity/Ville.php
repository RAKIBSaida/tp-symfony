<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * ville
 *
 * @ORM\Table(name="ville")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VilleRepository")
 */

class Ville
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
     * @ORM\Column(name="code", type="string", length=50, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="Libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostale", type="string", length=20)
     */
    private $codePostale;
 /**
     * @var int
     *
     * @ORM\Column(name="IdPays", type="integer")
     */
    private $IdPays;


    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Ville
     */
    public function setCode($code = null)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Ville
     */
    public function setLibelle($libelle )
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }


    /**
     * Set codePostale
     *
     * @param string $codePostale
     * @return Ville
     */
    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;

        return $this;
    }

    /**
     * Get codePostale
     *
     * @return string 
     */
    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * Set IdPays
     *
     * @param string $IdPays
     * @return Ville
     */
    public function setIdPays($IdPays)
    {
        $this->IdPays = $IdPays;

        return $this;
    }

    /**
     * Get IdPays
     *
     * @return int
     */
    public function getIdPays()
    {
        return $this->IdPays;
    }

}

