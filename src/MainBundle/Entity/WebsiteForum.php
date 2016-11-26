<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteForum
 *
 * @ORM\Table(name="websiteForum")
 * @ORM\Entity
 */
class WebsiteForum
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
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;
	
	/**
     * @var \string
     *
     * @ORM\Column(name="resume", type="string", nullable=false)
     */
    private $resume;
	
    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\WebsiteUtilisateur", inversedBy="forums")
     * @ORM\JoinColumn(name="utilisateur", referencedColumnName="id")
     */
    private $utilisateur;

	/**
	* @ORM\OneToMany(targetEntity="MainBundle\Entity\WebsiteCommentaire" , mappedBy="forum")
	*/
	private $commentaires;

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
     * @return WebsiteForum
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return WebsiteForum
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set auteur
     *
     * @param \MainBundle\Entity\WebsiteUtilisateur $auteur
     *
     * @return WebsiteForum
     */
    public function setAuteur(\MainBundle\Entity\WebsiteUtilisateur $auteur = null)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return \MainBundle\Entity\WebsiteUtilisateur
     */
    public function getAuteur()
    {
        return $this->auteur;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add commentaire
     *
     * @param \MainBundle\Entity\WebsiteCommentaire $commentaire
     *
     * @return WebsiteForum
     */
    public function addCommentaire(\MainBundle\Entity\WebsiteCommentaire $commentaire)
    {
        $this->commentaires[] = $commentaire;

        return $this;
    }

    /**
     * Remove commentaire
     *
     * @param \MainBundle\Entity\WebsiteCommentaire $commentaire
     */
    public function removeCommentaire(\MainBundle\Entity\WebsiteCommentaire $commentaire)
    {
        $this->commentaires->removeElement($commentaire);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set utilisateur
     *
     * @param \MainBundle\Entity\WebsiteUtilisateur $utilisateur
     *
     * @return WebsiteForum
     */
    public function setUtilisateur(\MainBundle\Entity\WebsiteUtilisateur $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \MainBundle\Entity\WebsiteUtilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
	
	/*public function getResume(){
		return $this->resume;
	}
	public function setResume(\MainBundle\Entity\WebsiteUtilisateur $resume=null){
		
		$this->resume=$resume;
		return $this;
	}*/

    /**
     * Set resume
     *
     * @param string $resume
     *
     * @return WebsiteForum
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
}
