<?php

namespace Bibliotheek\BoekBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boek
 *
 * @ORM\Table(name="boek")
 * @ORM\Entity(repositoryClass="Bibliotheek\BoekBundle\Repository\BoekRepository")
 */
class Boek
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="isbn", type="integer", nullable=true)
     */
    private $isbn;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="short", type="text", nullable=true)
     */
    private $short;

    /**
     * @var string
     *
     * @ORM\Column(name="thema", type="string", length=255, nullable=true)
     */
    private $thema;

    /**
     * @var bool
     *
     * @ORM\Column(name="available", type="boolean", nullable=true)
     */
    private $available;


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
     * Set title
     *
     * @param string $title
     *
     * @return Boek
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set isbn
     *
     * @param integer $isbn
     *
     * @return Boek
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return int
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Boek
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set short
     *
     * @param string $short
     *
     * @return Boek
     */
    public function setShort($short)
    {
        $this->short = $short;

        return $this;
    }

    /**
     * Get short
     *
     * @return string
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * Set thema
     *
     * @param string $thema
     *
     * @return Boek
     */
    public function setThema($thema)
    {
        $this->thema = $thema;

        return $this;
    }

    /**
     * Get thema
     *
     * @return string
     */
    public function getThema()
    {
        return $this->thema;
    }

    /**
     * Set available
     *
     * @param boolean $available
     *
     * @return Boek
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return bool
     */
    public function getAvailable()
    {
        return $this->available;
    }
}

