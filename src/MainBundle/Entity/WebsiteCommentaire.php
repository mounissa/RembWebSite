<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebsiteCommentaire
 *
 * @ORM\Table(name="website_commentaire", uniqueConstraints={@ORM\UniqueConstraint(name="id_forum", columns={"id_forum"})})
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
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var \MainBundle\Entity\WebsiteForum
     *
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\WebsiteForum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_forum", referencedColumnName="id")
     * })
     */
    private $idForum;


}

