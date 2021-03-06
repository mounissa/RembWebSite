<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteCommentaire
 *
 * @ORM\Table(name="websiteCommentaire")
 * @ORM\Entity
 */
class WebsiteCommentaire
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
     * @ORM\Column(name="contenu", type="text", length=65535, nullable=false)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreate", type="datetime", nullable=false)
     */
    private $dateCreate;

    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\WebsiteForum" , inversedBy="commentaires")
     * @ORM\JoinColumn(name="forum", referencedColumnName="id")
     */
    private $forum;

	/**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\WebsiteUtilisateur")
     * @ORM\JoinColumn(name="utilisateur", referencedColumnName="id")
     */
    private $utilisateur;

	public function __construct(){
		
		$this->dateCreate=new \DateTime('now');
	}
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return WebsiteCommentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }
    /**
     * Set forum
     *
     * @param \MainBundle\Entity\WebsiteForum $forum
     *
     * @return WebsiteCommentaire
     */
    public function setForum(\MainBundle\Entity\WebsiteForum $forum = null)
    {
        $this->forum = $forum;

        return $this;
    }

    /**
     * Get forum
     *
     * @return \MainBundle\Entity\WebsiteForum
     */
    public function getForum()
    {
        return $this->forum;
    }
	
    /**
     * Set utilisateur
     *
     * @param \MainBundle\Entity\WebsiteUtilisateur $utilisateur
     *
     * @return WebsiteCommentaire
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

   

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return WebsiteCommentaire
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Get dateCreate
     *
     * @return \DateTime
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }
}
