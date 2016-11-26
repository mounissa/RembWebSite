<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteRapport
 *
 * @ORM\Table(name="websiteRapport", uniqueConstraints={@ORM\UniqueConstraint(name="type_rapport", columns={"type_rapport"})})
 * @ORM\Entity
 */
class WebsiteRapport
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
     * @ORM\Column(name="titre", type="string", length=60, nullable=false)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_publication", type="datetime", nullable=false)
     */
    private $datePublication;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=80, nullable=false)
     */
    private $auteur;

    /**
     * @var \MainBundle\Entity\WebsiteTypeRapport
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\WebsiteTypeRapport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_rapport", referencedColumnName="id")
     * })
     */
    private $typeRapport;



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
     * Set titre
     *
     * @param string $titre
     *
     * @return WebsiteRapport
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set datePublication
     *
     * @param \DateTime $datePublication
     *
     * @return WebsiteRapport
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return WebsiteRapport
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set typeRapport
     *
     * @param \MainBundle\Entity\WebsiteTypeRapport $typeRapport
     *
     * @return WebsiteRapport
     */
    public function setTypeRapport(\MainBundle\Entity\WebsiteTypeRapport $typeRapport = null)
    {
        $this->typeRapport = $typeRapport;

        return $this;
    }

    /**
     * Get typeRapport
     *
     * @return \MainBundle\Entity\WebsiteTypeRapport
     */
    public function getTypeRapport()
    {
        return $this->typeRapport;
    }
}
