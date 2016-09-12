<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteAssociation
 *
 * @ORM\Table(name="website_association")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="MainBundle\Repository\WebsiteAssociationRepository") 
 */
class WebsiteAssociation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="text", length=65535, nullable=false)
     */
    private $presentation;
     /**
     * @var string
     *
     * @ORM\Column(name="equipeText", type="text", length=65535, nullable=false)
     */
    private $equipeText;
    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=40, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=40, nullable=false)
     */
    private $pays;

	/**
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=4000, nullable=false)
     */
    private $resume;


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
     * Set presentation
     *
     * @param string $presentation
     *
     * @return WebsiteAssociation
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return WebsiteAssociation
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return WebsiteAssociation
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return WebsiteAssociation
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set resume
     *
     * @param string $resume
     *
     * @return WebsiteAssociation
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set equipeText
     *
     * @param string $equipeText
     *
     * @return WebsiteAssociation
     */
    public function setEquipeText($equipeText)
    {
        $this->equipeText = $equipeText;

        return $this;
    }

    /**
     * Get equipeText
     *
     * @return string
     */
    public function getEquipeText()
    {
        return $this->equipeText;
    }
}
