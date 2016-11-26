<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteDomaine
 *
 * @ORM\Table(name="websitedomaine")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\WebsiteDomaineRepository")
 */
class WebsiteDomaine
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
     * @ORM\Column(name="libelle", type="string", length=60)
     */
    private $libelle;
	
	/**
	* @ORM\OneToMany(targetEntity="MainBundle\Entity\WebsiteOffre", mappedBy="domaine")
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
     * @return WebsiteDomaine
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
}

