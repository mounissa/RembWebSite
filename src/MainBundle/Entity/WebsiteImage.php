<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="websiteImage")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\WebsiteImageRepository")
 */
class WebsiteImage
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
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

   /**
   * @ORM\ManyToOne(targetEntity="MainBundle\Entity\WebsitePole",inversedBy="images",cascade={"all"})
   * @ORM\JoinColumn(nullable=true)
   */
   private $pole;
  
   /**
   * @ORM\ManyToOne(targetEntity="MainBundle\Entity\WebsiteRealisation", inversedBy="images",cascade={"all"})
   * @ORM\JoinColumn(nullable=true)
   */
   private $realisation;

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
     * Set url
     *
     * @param string $url
     *
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set pole
     *
     * @param \MainBundle\Entity\websitePole $pole
     *
     * @return WebsiteImage
     */
    public function setPole(\MainBundle\Entity\websitePole $pole = null)
    {
        $this->pole = $pole;

        return $this;
    }

    /**
     * Get pole
     *
     * @return \MainBundle\Entity\websitePole
     */
    public function getPole()
    {
        return $this->pole;
    }

    /**
     * Set realisation
     *
     * @param \MainBundle\Entity\websiteRealisation $realisation
     *
     * @return WebsiteImage
     */
    public function setRealisation(\MainBundle\Entity\websiteRealisation $realisation = null)
    {
        $this->realisation = $realisation;

        return $this;
    }

    /**
     * Get realisation
     *
     * @return \MainBundle\Entity\websiteRealisation
     */
    public function getRealisation()
    {
        return $this->realisation;
    }
}
