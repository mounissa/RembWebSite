<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteRegion
 *
 * @ORM\Table(name="websiteregion")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\WebsiteRegionRepository")
 */
class WebsiteRegion
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
     * @ORM\Column(name="libelle", type="string", length=60)
     */
    private $libelle;

	/**
	* @ORM\OneToMany(targetEntity="MainBundle\Entity\WebsiteDepartement" ,mappedBy="region")
	*/
    private $departements;
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
     * @return WebsiteRegion
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
        $this->departements = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add departement
     *
     * @param \MainBundle\Entity\WebsiteRegion $departement
     *
     * @return WebsiteRegion
     */
    public function addDepartement(\MainBundle\Entity\WebsiteRegion $departement)
    {
        $this->departements[] = $departement;

        return $this;
    }

    /**
     * Remove departement
     *
     * @param \MainBundle\Entity\WebsiteRegion $departement
     */
    public function removeDepartement(\MainBundle\Entity\WebsiteRegion $departement)
    {
        $this->departements->removeElement($departement);
    }

    /**
     * Get departements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepartements()
    {
        return $this->departements;
    }
}
