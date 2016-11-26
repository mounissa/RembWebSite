<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteDepartement
 *
 * @ORM\Table(name="websitedepartement")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\WebsiteDepartementRepository")
 */
class WebsiteDepartement
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
	* @ORM\Column(name="idDep",type="string",length=2)
	*/
	private $idDep;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=160)
     */
    private $libelle;

	/**
	* @ORM\OneToMany(targetEntity="MainBundle\Entity\WebsiteVille" ,mappedBy="departement",cascade={"all"})
	*/
	private $villes;
	
	/**
	* @ORM\ManyToOne(targetEntity="MainBundle\Entity\WebsiteRegion",inversedBy="departements",cascade={"all"})
	* @ORM\JoinColumn(name="region", referencedColumnName="id")
	*/
	private $region;
	
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
     * @return WebsiteDepartement
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
     * Constructor
     */
    public function __construct()
    {
        $this->villes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set idDep
     *
     * @param string $idDep
     *
     * @return WebsiteDepartement
     */
    public function setIdDep($idDep)
    {
        $this->idDep = $idDep;

        return $this;
    }

    /**
     * Get idDep
     *
     * @return string
     */
    public function getIdDep()
    {
        return $this->idDep;
    }

    /**
     * Add ville
     *
     * @param \MainBundle\Entity\WebsiteVille $ville
     *
     * @return WebsiteDepartement
     */
    public function addVille(\MainBundle\Entity\WebsiteVille $ville)
    {
        $this->villes[] = $ville;

        return $this;
    }

    /**
     * Remove ville
     *
     * @param \MainBundle\Entity\WebsiteVille $ville
     */
    public function removeVille(\MainBundle\Entity\WebsiteVille $ville)
    {
        $this->villes->removeElement($ville);
    }

    /**
     * Get villes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVilles()
    {
        return $this->villes;
    }

    /**
     * Set region
     *
     * @param \MainBundle\Entity\WebsiteRegion $region
     *
     * @return WebsiteDepartement
     */
    public function setRegion(\MainBundle\Entity\WebsiteRegion $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \MainBundle\Entity\WebsiteRegion
     */
    public function getRegion()
    {
        return $this->region;
    }
}
