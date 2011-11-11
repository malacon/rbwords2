<?php

namespace MereFaith\RBWordsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MereFaith\RBWordsBundle\Entity\WTTW
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class WTTW
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
     * @var date $date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string $lectionary
     *
     * @ORM\ManyToOne(targetEntity="Lectionary", inversedBy="wttws")
     * @ORM\JoinColumn(name="lectionary_id", referencedColumnName="id")
     */
    private $lectionary;

    /**
     * @var text $body
     *
     * @ORM\Column(name="body", type="text")
     */
    private $body;

    /**
     * @var text $scripture_quote
     *
     * @ORM\Column(name="scripture_quote", type="text")
     */
    private $scripture_quote;

    /**
     * @var string $reading_note
     *
     * @ORM\Column(name="reading_note", type="string", length=255)
     */
    private $reading_note;

    /**
     * @var integer $times_viewed
     *
     * @ORM\Column(name="times_viewed", type="integer")
     */
    private $times_viewed;

    /**
     * @var string $slug
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;


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
     * Set date
     *
     * @param date $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return date 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set lectionary
     *
     * @param string $lectionary
     */
    public function setLectionary($lectionary)
    {
        $this->lectionary = $lectionary;
    }

    /**
     * Get lectionary
     *
     * @return string 
     */
    public function getLectionary()
    {
        return $this->lectionary;
    }

    /**
     * Set body
     *
     * @param text $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * Get body
     *
     * @return text 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set scripture_quote
     *
     * @param text $scriptureQuote
     */
    public function setScriptureQuote($scriptureQuote)
    {
        $this->scripture_quote = $scriptureQuote;
    }

    /**
     * Get scripture_quote
     *
     * @return text 
     */
    public function getScriptureQuote()
    {
        return $this->scripture_quote;
    }

    /**
     * Set reading_note
     *
     * @param string $readingNote
     */
    public function setReadingNote($readingNote)
    {
        $this->reading_note = $readingNote;
    }

    /**
     * Get reading_note
     *
     * @return string 
     */
    public function getReadingNote()
    {
        return $this->reading_note;
    }

    /**
     * Set times_viewed
     *
     * @param integer $timesViewed
     */
    public function setTimesViewed($timesViewed)
    {
        $this->times_viewed = $timesViewed;
    }

    /**
     * Get times_viewed
     *
     * @return integer 
     */
    public function getTimesViewed()
    {
        return $this->times_viewed;
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
}