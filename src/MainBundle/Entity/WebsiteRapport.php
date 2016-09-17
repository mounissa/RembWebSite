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


}

