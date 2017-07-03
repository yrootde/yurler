<?php

namespace ShortUrlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShortUrl
 *
 * @ORM\Table(name="short_url")
 * @ORM\Entity(repositoryClass="ShortUrlBundle\Repository\ShortUrlRepository")
 */
class ShortUrl
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
     * @ORM\Column(name="ident", type="string", length=255, unique=true)
     */
    private $ident;

    /**
     * @var string
     *
     * @ORM\Column(name="targetUrl", type="string", length=255)
     */
    private $targetUrl;


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
     * Set ident
     *
     * @param string $ident
     *
     * @return ShortUrl
     */
    public function setIdent($ident)
    {
        $this->ident = $ident;

        return $this;
    }

    /**
     * Get ident
     *
     * @return string
     */
    public function getIdent()
    {
        return $this->ident;
    }

    /**
     * Set targetUrl
     *
     * @param string $targetUrl
     *
     * @return ShortUrl
     */
    public function setTargetUrl($targetUrl)
    {
        $this->targetUrl = $targetUrl;

        return $this;
    }

    /**
     * Get targetUrl
     *
     * @return string
     */
    public function getTargetUrl()
    {
        return $this->targetUrl;
    }
}
