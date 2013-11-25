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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $players;


    /**
     * Set name
     *
     * @param string $name
     * @return GamesList
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set players
     *
     * @param integer $players
     * @return GamesList
     */
    public function setPlayers($players)
    {
        $this->players = $players;
    
        return $this;
    }

    /**
     * Get players
     *
     * @return integer 
     */
    public function getPlayers()
    {
        return $this->players;
    }
}