<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteForum
 *
 * @ORM\Table(name="website_forum", uniqueConstraints={@ORM\UniqueConstraint(name="auteur", columns={"auteur"})})
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
     * @var \MainBundle\Entity\WebsiteUtilisateur
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\WebsiteUtilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auteur", referencedColumnName="id")
     * })
     */
    private $auteur;


}

