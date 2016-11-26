<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteVille
 *
 * @ORM\Table(name="websiteville")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\WebsiteVilleRepository")
 */
class WebsiteVille
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
	* @ORM\Column(name="codePostal", type="string", length=5)
	*/
	private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=160)
     */
    private $libelle;

    /**
	* @ORM\ManyToOne(targetEntity="MainBundle\Entity\WebsiteDepartement",inversedBy="villes",cascade={"all"})
	* @ORM\JoinColumn(name="departement", referencedColumnName="id")
	*/
	private $departement;
    
	 /**
	 * @ORM\OneToMany(targetEntity="MainBundle\Entity\WebsiteOffre", mappedBy="ville")
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return WebsiteVille
     */
    public function setLibelle($libelle)
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
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return WebsiteVille
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set departement
     *
     * @param \MainBundle\Entity\WebsiteDepartement $departement
     *
     * @return WebsiteVille
     */
    public function setDepartement(\MainBundle\Entity\WebsiteDepartement $departement = null)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return \MainBundle\Entity\WebsiteDepartement
     */
    public function getDepartement()
    {
        return $this->departement;
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
     * @param \MainBundle\Entity\WebsiteOffre $offre
     *
     * @return WebsiteVille
     */
    public function addOffre(\MainBundle\Entity\WebsiteOffre $offre)
    {
        $this->offres[] = $offre;

        return $this;
    }

    /**
     * Remove offre
     *
     * @param \MainBundle\Entity\WebsiteOffre $offre
     */
    public function removeOffre(\MainBundle\Entity\WebsiteOffre $offre)
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
