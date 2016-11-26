<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteOffre
 *
 * @ORM\Table(name="websiteOffre")
 * @ORM\Entity
 */
class WebsiteOffre
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
     * @ORM\Column(name="titre", type="string", length=80, nullable=false)
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
     * @ORM\Column(name="societe", type="string", length=50, nullable=false)
     */
    private $societe;

    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\WebsiteVille", inversedBy="offres")
	 * @ORM\JoinColumn(name="ville",referencedColumnName="id")
     */
	 
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="mission", type="text", length=65535, nullable=false)
     */
    private $mission;

    /**
     * @var string
     *
     * @ORM\Column(name="experience", type="string", length=50, nullable=false)
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="type_contrat", type="string", length=50, nullable=false)
     */
    private $typeContrat;

    /**
     * @var float
     *
     * @ORM\Column(name="remuneration", type="float", precision=10, scale=0, nullable=false)
     */
    private $remuneration;

    /**
     * @var string
     *
     * @ORM\Column(name="profil", type="text", length=65535, nullable=false)
     */
    private $profil;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_recruteur", type="string", length=80, nullable=false)
     */
    private $nomRecruteur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_recruteur", type="string", length=80, nullable=false)
     */
    private $emailRecruteur;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_recruteur", type="string", length=20, nullable=false)
     */
    private $telRecruteur;

    /**
     * @var string
     *
     * @ORM\Column(name="modalite", type="string", length=100, nullable=false)
     */
    private $modalite;

    /**
     * @var \MainBundle\Entity\WebsiteTypeOffre
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\WebsiteTypeOffre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_offre", referencedColumnName="id")
     * })
     */
    private $typeOffre;

    /**
     * @var \MainBundle\Entity\WebsiteEtatOffre
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\WebsiteEtatOffre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="etat", referencedColumnName="id")
     * })
     */
    private $etat;

	/**
	* @ORM\ManyToOne(targetEntity="MainBundle\Entity\WebsiteDomaine",inversedBy="offres")
	* @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="domaine", referencedColumnName="id")
    * })
    */
	private $domaine;

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
     * @return WebsiteOffre
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
     * @return WebsiteOffre
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
     * Set societe
     *
     * @param string $societe
     *
     * @return WebsiteOffre
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return WebsiteOffre
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set mission
     *
     * @param string $mission
     *
     * @return WebsiteOffre
     */
    public function setMission($mission)
    {
        $this->mission = $mission;

        return $this;
    }

    /**
     * Get mission
     *
     * @return string
     */
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * Set experience
     *
     * @param string $experience
     *
     * @return WebsiteOffre
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return string
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set typeContrat
     *
     * @param string $typeContrat
     *
     * @return WebsiteOffre
     */
    public function setTypeContrat($typeContrat)
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }

    /**
     * Get typeContrat
     *
     * @return string
     */
    public function getTypeContrat()
    {
        return $this->typeContrat;
    }

    /**
     * Set remuneration
     *
     * @param float $remuneration
     *
     * @return WebsiteOffre
     */
    public function setRemuneration($remuneration)
    {
        $this->remuneration = $remuneration;

        return $this;
    }

    /**
     * Get remuneration
     *
     * @return float
     */
    public function getRemuneration()
    {
        return $this->remuneration;
    }

    /**
     * Set profil
     *
     * @param string $profil
     *
     * @return WebsiteOffre
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil
     *
     * @return string
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set nomRecruteur
     *
     * @param string $nomRecruteur
     *
     * @return WebsiteOffre
     */
    public function setNomRecruteur($nomRecruteur)
    {
        $this->nomRecruteur = $nomRecruteur;

        return $this;
    }

    /**
     * Get nomRecruteur
     *
     * @return string
     */
    public function getNomRecruteur()
    {
        return $this->nomRecruteur;
    }

    /**
     * Set emailRecruteur
     *
     * @param string $emailRecruteur
     *
     * @return WebsiteOffre
     */
    public function setEmailRecruteur($emailRecruteur)
    {
        $this->emailRecruteur = $emailRecruteur;

        return $this;
    }

    /**
     * Get emailRecruteur
     *
     * @return string
     */
    public function getEmailRecruteur()
    {
        return $this->emailRecruteur;
    }

    /**
     * Set telRecruteur
     *
     * @param string $telRecruteur
     *
     * @return WebsiteOffre
     */
    public function setTelRecruteur($telRecruteur)
    {
        $this->telRecruteur = $telRecruteur;

        return $this;
    }

    /**
     * Get telRecruteur
     *
     * @return string
     */
    public function getTelRecruteur()
    {
        return $this->telRecruteur;
    }

    /**
     * Set modalite
     *
     * @param string $modalite
     *
     * @return WebsiteOffre
     */
    public function setModalite($modalite)
    {
        $this->modalite = $modalite;

        return $this;
    }

    /**
     * Get modalite
     *
     * @return string
     */
    public function getModalite()
    {
        return $this->modalite;
    }

    /**
     * Set typeOffre
     *
     * @param \MainBundle\Entity\WebsiteTypeOffre $typeOffre
     *
     * @return WebsiteOffre
     */
    public function setTypeOffre(\MainBundle\Entity\WebsiteTypeOffre $typeOffre = null)
    {
        $this->typeOffre = $typeOffre;

        return $this;
    }

    /**
     * Get typeOffre
     *
     * @return \MainBundle\Entity\WebsiteTypeOffre
     */
    public function getTypeOffre()
    {
        return $this->typeOffre;
    }

    /**
     * Set etat
     *
     * @param \MainBundle\Entity\WebsiteEtatOffre $etat
     *
     * @return WebsiteOffre
     */
    public function setEtat(\MainBundle\Entity\WebsiteEtatOffre $etat = null)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return \MainBundle\Entity\WebsiteEtatOffre
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set domaine
     *
     * @param \MainBundle\Entity\WebsiteDomaine $domaine
     *
     * @return WebsiteOffre
     */
    public function setDomaine(\MainBundle\Entity\WebsiteDomaine $domaine = null)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return \MainBundle\Entity\WebsiteDomaine
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set ville
     *
     * @param \MainBundle\Entity\WebsiteVille $ville
     *
     * @return WebsiteOffre
     */
    public function setVille(\MainBundle\Entity\WebsiteVille $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \MainBundle\Entity\WebsiteVille
     */
    public function getVille()
    {
        return $this->ville;
    }
}
