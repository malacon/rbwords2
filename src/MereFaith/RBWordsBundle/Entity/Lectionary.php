<?php

namespace MereFaith\RBWordsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MereFaith\RBWordsBundle\Entity\Lectionary
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Lectionary
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer $number
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var string $liturgical_date
     *
     * @ORM\Column(name="liturgical_date", type="string", length=255)
     */
    private $liturgical_date;

    /**
     * @var string $first_reading
     *
     * @ORM\Column(name="first_reading", type="string", length=255)
     */
    private $first_reading;

    /**
     * @var string $responsorial_psalm
     *
     * @ORM\Column(name="responsorial_psalm", type="string", length=255)
     */
    private $responsorial_psalm;

    /**
     * @var string $second_reading
     *
     * @ORM\Column(name="second_reading", type="string", length=255)
     */
    private $second_reading;

    /**
     * @var string $alleluia
     *
     * @ORM\Column(name="alleluia", type="string", length=255)
     */
    private $alleluia;

    /**
     * @var string $gospel
     *
     * @ORM\Column(name="gospel", type="string", length=255)
     */
    private $gospel;

    /**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=7)
     */
    private $type;

    /**
     * @var string $cycle
     *
     * @ORM\Column(name="cycle", type="string", length=2)
     */
    private $cycle;

    /**
     * @var string $slug
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var string $wttws
     *
     * @ORM\OneToMany(targetEntity="WTTW", mappedBy="lectionary")
     */
    private $wttws;


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
     * Set number
     *
     * @param integer $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set liturgical_date
     *
     * @param string $liturgicalDate
     */
    public function setLiturgicalDate($liturgicalDate)
    {
        $this->liturgical_date = $liturgicalDate;
    }

    /**
     * Get liturgical_date
     *
     * @return string 
     */
    public function getLiturgicalDate()
    {
        return $this->liturgical_date;
    }

    /**
     * Set first_reading
     *
     * @param string $firstReading
     */
    public function setFirstReading($firstReading)
    {
        $this->first_reading = $firstReading;
    }

    /**
     * Get first_reading
     *
     * @return string 
     */
    public function getFirstReading()
    {
        return $this->first_reading;
    }

    /**
     * Set responsorial_psalm
     *
     * @param string $responsorialPsalm
     */
    public function setResponsorialPsalm($responsorialPsalm)
    {
        $this->responsorial_psalm = $responsorialPsalm;
    }

    /**
     * Get responsorial_psalm
     *
     * @return string 
     */
    public function getResponsorialPsalm()
    {
        return $this->responsorial_psalm;
    }

    /**
     * Set second_reading
     *
     * @param string $secondReading
     */
    public function setSecondReading($secondReading)
    {
        $this->second_reading = $secondReading;
    }

    /**
     * Get second_reading
     *
     * @return string 
     */
    public function getSecondReading()
    {
        return $this->second_reading;
    }

    /**
     * Set alleluia
     *
     * @param string $alleluia
     */
    public function setAlleluia($alleluia)
    {
        $this->alleluia = $alleluia;
    }

    /**
     * Get alleluia
     *
     * @return string 
     */
    public function getAlleluia()
    {
        return $this->alleluia;
    }

    /**
     * Set gospel
     *
     * @param string $gospel
     */
    public function setGospel($gospel)
    {
        $this->gospel = $gospel;
    }

    /**
     * Get gospel
     *
     * @return string 
     */
    public function getGospel()
    {
        return $this->gospel;
    }

    /**
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set cycle
     *
     * @param string $cycle
     */
    public function setCycle($cycle)
    {
        $this->cycle = $cycle;
    }

    /**
     * Get cycle
     *
     * @return string 
     */
    public function getCycle()
    {
        return $this->cycle;
    }

    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    public function __construct()
    {
        $this->wttws = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add wttws
     *
     * @param MereFaith\RBWordsBundle\Entity\WTTW $wttws
     */
    public function addWTTW(\MereFaith\RBWordsBundle\Entity\WTTW $wttws)
    {
        $this->wttws[] = $wttws;
    }

    /**
     * Get wttws
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getWttws()
    {
        return $this->wttws;
    }
}