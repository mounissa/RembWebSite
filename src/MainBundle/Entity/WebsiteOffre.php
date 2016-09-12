<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteOffre
 *
 * @ORM\Table(name="website_offre", uniqueConstraints={@ORM\UniqueConstraint(name="type_offre", columns={"type_offre"}), @ORM\UniqueConstraint(name="etat", columns={"etat"})})
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
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=50, nullable=false)
     */
    private $lieu;

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


}

