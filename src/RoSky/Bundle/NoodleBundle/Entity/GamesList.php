<?php

namespace RoSky\Bundle\NoodleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GamesList
 */
class GamesList
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $pname;

    /**
     * @var integer
     */
    private $pcount;

    /**
     * @var string
     */
    private $gname;

    /**
     * @var string
     */
    private $gstatus;


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
     * Set pname
     *
     * @param string $pname
     * @return GamesList
     */
    public function setPname($pname)
    {
        $this->pname = $pname;
    
        return $this;
    }

    /**
     * Get pname
     *
     * @return string 
     */
    public function getPname()
    {
        return $this->pname;
    }

    /**
     * Set pcount
     *
     * @param integer $pcount
     * @return GamesList
     */
    public function setPcount($pcount)
    {
        $this->pcount = $pcount;
    
        return $this;
    }

    /**
     * Get pcount
     *
     * @return integer 
     */
    public function getPcount()
    {
        return $this->pcount;
    }

    /**
     * Set gname
     *
     * @param string $gname
     * @return GamesList
     */
    public function setGname($gname)
    {
        $this->gname = $gname;
    
        return $this;
    }

    /**
     * Get gname
     *
     * @return string 
     */
    public function getGname()
    {
        return $this->gname;
    }

    /**
     * Set gstatus
     *
     * @param string $gstatus
     * @return GamesList
     */
    public function setGstatus($gstatus)
    {
        $this->gstatus = $gstatus;
    
        return $this;
    }

    /**
     * Get gstatus
     *
     * @return string 
     */
    public function getGstatus()
    {
        return $this->gstatus;
    }
}
