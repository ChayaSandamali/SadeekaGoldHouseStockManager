<?php

namespace StockManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLog
 */
class UserLog
{
    /**
     * @var integer
     */
    private $log_id;

    /**
     * @var integer
     */
    private $user_id;

    /**
     * @var string
     */
    private $serial_no;

    /**
     * @var integer
     */
    private $weight_g;

    /**
     * @var integer
     */
    private $weight_mg;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $action;

    /**
     * @var \StockManagerBundle\Entity\User
     */
    private $user;


    /**
     * Get log_id
     *
     * @return integer 
     */
    public function getLogId()
    {
        return $this->log_id;
    }

    /**
     * Set user_id
     *
     * @param integer $userId
     * @return UserLog
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set serial_no
     *
     * @param string $serialNo
     * @return UserLog
     */
    public function setSerialNo($serialNo)
    {
        $this->serial_no = $serialNo;

        return $this;
    }

    /**
     * Get serial_no
     *
     * @return string 
     */
    public function getSerialNo()
    {
        return $this->serial_no;
    }

    /**
     * Set weight_g
     *
     * @param integer $weightG
     * @return UserLog
     */
    public function setWeightG($weightG)
    {
        $this->weight_g = $weightG;

        return $this;
    }

    /**
     * Get weight_g
     *
     * @return integer 
     */
    public function getWeightG()
    {
        return $this->weight_g;
    }

    /**
     * Set weight_mg
     *
     * @param integer $weightMg
     * @return UserLog
     */
    public function setWeightMg($weightMg)
    {
        $this->weight_mg = $weightMg;

        return $this;
    }

    /**
     * Get weight_mg
     *
     * @return integer 
     */
    public function getWeightMg()
    {
        return $this->weight_mg;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return UserLog
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return UserLog
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set user
     *
     * @param \StockManagerBundle\Entity\User $user
     * @return UserLog
     */
    public function setUser(\StockManagerBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \StockManagerBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var string
     */
    private $category;


    /**
     * Set category
     *
     * @param string $category
     * @return UserLog
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
